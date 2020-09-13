const url = "https://api.github.com/users";
const token = "ab0446bd6626ade183deb6b5572d10f6853c0bf8";

function searchRepo(id) {
    let texto = document.querySelector("#repo" + id).value;
    if (texto.length > 2) {
        aList(url + "/" + texto + "?access=" + token, "", id);
        aList("", url + "/" + texto + "/repos?access=" + token, id);
    }
}

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
/*async function getRequest(t) {

    const user = (await fetch(`${url}/${t}?access=${token}`)).json();
    const repo = (await fetch(`${url}/${t}/repos?access=${token}`)).json();
    return { user, repo };
}*/

function addRepo(t, id) {
    document.querySelector('#hiddenComment' + id).value = t.innerText;
    let border = document.querySelectorAll(".containerRepo" + id + " #repoUG label");
    border.forEach(v => {
        v.style = 'border:none';
    })
    t.style = 'border: 1px solid green';
}

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