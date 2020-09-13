/**
 * Script usado para acessar a API do GitHub
 * 
 */


/**
 * url carrega o endereço principal a ser usado
 * token é a chave de acesso única para poder ter acessoa as informações disponíveis via API
 */
const url = "https://api.github.com/users";
const token = "ab0446bd6626ade183deb6b5572d10f6853c0bf8";
/*A chve encontra-se eposta propositalmente. Mas se trata de um dado e
xtremamente sensível e não deve, jamais, haver esse tipo de exposição.
*/

/**
 * 
 * Função invocada apartir do botão Buscar, no  comentário
 * É Responsável por dar inicio as requisições á API 
 */
function searchRepo(id) {
    let texto = document.querySelector("#repo" + id).value;
    if (texto.length > 2) {
        aList(url + "/" + texto + "?access=" + token, "", id);
        aList("", url + "/" + texto + "/repos?access=" + token, id);
    }
}

/**
 * Função improvisada para ser reutilizada
 * por conta de problemas encontrados através de outros métodos
 * t1 quando passado no parâmetro deve conter a url completa da API, retorna a primeura função no callback 'success'
 * t2 funciona igualmente a t1, diferenciamdo apenas a resposta esperada no callback
 */
function aList(t1 = "", t2 = "", id = 0) {
    $.ajax({
        type: "GET",
        url: t1 + t2,
        dataType: "json",
        success: function(data) {

            t1 ? listUser(data, id) : listRepo(data, id);
        }
    });
}

/**
 * função abandonada por conta dos erros gerdos na execução do bloco de maneira assincrona, impossibilitando obter as respostas a tempo
 */
/*async function getRequest(t) {

    const user = (await fetch(`${url}/${t}?access=${token}`)).json();
    const repo = (await fetch(`${url}/${t}/repos?access=${token}`)).json();
    return { user, repo };
}*/

/**
 * 
 *  função usada para selecionar reposióio appós busca
 */
function addRepo(t, id) {
    document.querySelector('#hiddenComment' + id).value = t.innerText;
    let border = document.querySelectorAll(".containerRepo" + id + " #repoUG label");
    border.forEach(v => {
        v.style = 'border:none';
    })
    t.style = 'border: 1px solid green';
}
/**
 *  Lista os repositórios do usuário pesquisado 
 */
async function listRepo(e, id) {
    let container = '';
    e.map(v => {
        container += `
        <label onclick="addRepo(this,${id})">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5>${v.full_name}</h5>
                    <small><a href="${v.clone_url}">${v.clone_url}</a></small>
                </div>
            </div>
            </label>`;
    })
    document.querySelector(".containerRepo" + id + " #repoUG").innerHTML += container;
}

/**
 *  Lista os perfil do usuário pesquisado 
 */
async function listUser(e, id) {
    document.querySelector(".containerRepo" + id + " #nomeUG").innerHTML = `
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media">
                    <img class="mr-3" height="90" src="${e.avatar_url}">
                </div>
            </div>
            <div class="panel-body">
                ${e.login}
            </div>
        </div>
    `;
}