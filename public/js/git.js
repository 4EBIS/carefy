const url = "https://api.github.com/users";
const token = "ab0446bd6626ade183deb6b5572d10f6853c0bf8";

function searchRepo(id) {
    let texto = document.querySelector("#repo" + id).value;
    console.log(texto);
    if (texto.length > 2) {
        getRequest(texto).then(res => listUser(res));
    }
}


async function getRequest(t) {
    let user = {
        "login": "4EBIS",
        "id": 33668239,
        "node_id": "MDQ6VXNlcjMzNjY4MjM5",
        "avatar_url": "https://avatars3.githubusercontent.com/u/33668239?v=4",
        "gravatar_id": "",
        "url": "https://api.github.com/users/4EBIS",
        "html_url": "https://github.com/4EBIS",
        "followers_url": "https://api.github.com/users/4EBIS/followers",
        "following_url": "https://api.github.com/users/4EBIS/following{/other_user}",
        "gists_url": "https://api.github.com/users/4EBIS/gists{/gist_id}",
        "starred_url": "https://api.github.com/users/4EBIS/starred{/owner}{/repo}",
        "subscriptions_url": "https://api.github.com/users/4EBIS/subscriptions",
        "organizations_url": "https://api.github.com/users/4EBIS/orgs",
        "repos_url": "https://api.github.com/users/4EBIS/repos",
        "events_url": "https://api.github.com/users/4EBIS/events{/privacy}",
        "received_events_url": "https://api.github.com/users/4EBIS/received_events",
        "type": "User",
        "site_admin": false,
        "name": null,
        "company": null,
        "blog": "",
        "location": null,
        "email": null,
        "hireable": null,
        "bio": null,
        "twitter_username": null,
        "public_repos": 2,
        "public_gists": 0,
        "followers": 0,
        "following": 0,
        "created_at": "2017-11-14T18:42:22Z",
        "updated_at": "2020-09-12T17:42:18Z"
    };
    let repo = [{
            "id": 294992046,
            "node_id": "MDEwOlJlcG9zaXRvcnkyOTQ5OTIwNDY=",
            "name": "carefy",
            "full_name": "4EBIS/carefy",
            "private": false,
            "owner": {
                "login": "4EBIS",
                "id": 33668239,
                "node_id": "MDQ6VXNlcjMzNjY4MjM5",
                "avatar_url": "https://avatars3.githubusercontent.com/u/33668239?v=4",
                "gravatar_id": "",
                "url": "https://api.github.com/users/4EBIS",
                "html_url": "https://github.com/4EBIS",
                "followers_url": "https://api.github.com/users/4EBIS/followers",
                "following_url": "https://api.github.com/users/4EBIS/following{/other_user}",
                "gists_url": "https://api.github.com/users/4EBIS/gists{/gist_id}",
                "starred_url": "https://api.github.com/users/4EBIS/starred{/owner}{/repo}",
                "subscriptions_url": "https://api.github.com/users/4EBIS/subscriptions",
                "organizations_url": "https://api.github.com/users/4EBIS/orgs",
                "repos_url": "https://api.github.com/users/4EBIS/repos",
                "events_url": "https://api.github.com/users/4EBIS/events{/privacy}",
                "received_events_url": "https://api.github.com/users/4EBIS/received_events",
                "type": "User",
                "site_admin": false
            },
            "html_url": "https://github.com/4EBIS/carefy",
            "description": "Teste de aptidão",
            "fork": false,
            "url": "https://api.github.com/repos/4EBIS/carefy",
            "forks_url": "https://api.github.com/repos/4EBIS/carefy/forks",
            "keys_url": "https://api.github.com/repos/4EBIS/carefy/keys{/key_id}",
            "collaborators_url": "https://api.github.com/repos/4EBIS/carefy/collaborators{/collaborator}",
            "teams_url": "https://api.github.com/repos/4EBIS/carefy/teams",
            "hooks_url": "https://api.github.com/repos/4EBIS/carefy/hooks",
            "issue_events_url": "https://api.github.com/repos/4EBIS/carefy/issues/events{/number}",
            "events_url": "https://api.github.com/repos/4EBIS/carefy/events",
            "assignees_url": "https://api.github.com/repos/4EBIS/carefy/assignees{/user}",
            "branches_url": "https://api.github.com/repos/4EBIS/carefy/branches{/branch}",
            "tags_url": "https://api.github.com/repos/4EBIS/carefy/tags",
            "blobs_url": "https://api.github.com/repos/4EBIS/carefy/git/blobs{/sha}",
            "git_tags_url": "https://api.github.com/repos/4EBIS/carefy/git/tags{/sha}",
            "git_refs_url": "https://api.github.com/repos/4EBIS/carefy/git/refs{/sha}",
            "trees_url": "https://api.github.com/repos/4EBIS/carefy/git/trees{/sha}",
            "statuses_url": "https://api.github.com/repos/4EBIS/carefy/statuses/{sha}",
            "languages_url": "https://api.github.com/repos/4EBIS/carefy/languages",
            "stargazers_url": "https://api.github.com/repos/4EBIS/carefy/stargazers",
            "contributors_url": "https://api.github.com/repos/4EBIS/carefy/contributors",
            "subscribers_url": "https://api.github.com/repos/4EBIS/carefy/subscribers",
            "subscription_url": "https://api.github.com/repos/4EBIS/carefy/subscription",
            "commits_url": "https://api.github.com/repos/4EBIS/carefy/commits{/sha}",
            "git_commits_url": "https://api.github.com/repos/4EBIS/carefy/git/commits{/sha}",
            "comments_url": "https://api.github.com/repos/4EBIS/carefy/comments{/number}",
            "issue_comment_url": "https://api.github.com/repos/4EBIS/carefy/issues/comments{/number}",
            "contents_url": "https://api.github.com/repos/4EBIS/carefy/contents/{+path}",
            "compare_url": "https://api.github.com/repos/4EBIS/carefy/compare/{base}...{head}",
            "merges_url": "https://api.github.com/repos/4EBIS/carefy/merges",
            "archive_url": "https://api.github.com/repos/4EBIS/carefy/{archive_format}{/ref}",
            "downloads_url": "https://api.github.com/repos/4EBIS/carefy/downloads",
            "issues_url": "https://api.github.com/repos/4EBIS/carefy/issues{/number}",
            "pulls_url": "https://api.github.com/repos/4EBIS/carefy/pulls{/number}",
            "milestones_url": "https://api.github.com/repos/4EBIS/carefy/milestones{/number}",
            "notifications_url": "https://api.github.com/repos/4EBIS/carefy/notifications{?since,all,participating}",
            "labels_url": "https://api.github.com/repos/4EBIS/carefy/labels{/name}",
            "releases_url": "https://api.github.com/repos/4EBIS/carefy/releases{/id}",
            "deployments_url": "https://api.github.com/repos/4EBIS/carefy/deployments",
            "created_at": "2020-09-12T17:23:41Z",
            "updated_at": "2020-09-12T17:42:26Z",
            "pushed_at": "2020-09-12T17:42:24Z",
            "git_url": "git://github.com/4EBIS/carefy.git",
            "ssh_url": "git@github.com:4EBIS/carefy.git",
            "clone_url": "https://github.com/4EBIS/carefy.git",
            "svn_url": "https://github.com/4EBIS/carefy",
            "homepage": null,
            "size": 0,
            "stargazers_count": 0,
            "watchers_count": 0,
            "language": null,
            "has_issues": true,
            "has_projects": true,
            "has_downloads": true,
            "has_wiki": true,
            "has_pages": false,
            "forks_count": 0,
            "mirror_url": null,
            "archived": false,
            "disabled": false,
            "open_issues_count": 0,
            "license": null,
            "forks": 0,
            "open_issues": 0,
            "watchers": 0,
            "default_branch": "master"
        },
        {
            "id": 146608649,
            "node_id": "MDEwOlJlcG9zaXRvcnkxNDY2MDg2NDk=",
            "name": "Projetos",
            "full_name": "4EBIS/Projetos",
            "private": false,
            "owner": {
                "login": "4EBIS",
                "id": 33668239,
                "node_id": "MDQ6VXNlcjMzNjY4MjM5",
                "avatar_url": "https://avatars3.githubusercontent.com/u/33668239?v=4",
                "gravatar_id": "",
                "url": "https://api.github.com/users/4EBIS",
                "html_url": "https://github.com/4EBIS",
                "followers_url": "https://api.github.com/users/4EBIS/followers",
                "following_url": "https://api.github.com/users/4EBIS/following{/other_user}",
                "gists_url": "https://api.github.com/users/4EBIS/gists{/gist_id}",
                "starred_url": "https://api.github.com/users/4EBIS/starred{/owner}{/repo}",
                "subscriptions_url": "https://api.github.com/users/4EBIS/subscriptions",
                "organizations_url": "https://api.github.com/users/4EBIS/orgs",
                "repos_url": "https://api.github.com/users/4EBIS/repos",
                "events_url": "https://api.github.com/users/4EBIS/events{/privacy}",
                "received_events_url": "https://api.github.com/users/4EBIS/received_events",
                "type": "User",
                "site_admin": false
            },
            "html_url": "https://github.com/4EBIS/Projetos",
            "description": null,
            "fork": true,
            "url": "https://api.github.com/repos/4EBIS/Projetos",
            "forks_url": "https://api.github.com/repos/4EBIS/Projetos/forks",
            "keys_url": "https://api.github.com/repos/4EBIS/Projetos/keys{/key_id}",
            "collaborators_url": "https://api.github.com/repos/4EBIS/Projetos/collaborators{/collaborator}",
            "teams_url": "https://api.github.com/repos/4EBIS/Projetos/teams",
            "hooks_url": "https://api.github.com/repos/4EBIS/Projetos/hooks",
            "issue_events_url": "https://api.github.com/repos/4EBIS/Projetos/issues/events{/number}",
            "events_url": "https://api.github.com/repos/4EBIS/Projetos/events",
            "assignees_url": "https://api.github.com/repos/4EBIS/Projetos/assignees{/user}",
            "branches_url": "https://api.github.com/repos/4EBIS/Projetos/branches{/branch}",
            "tags_url": "https://api.github.com/repos/4EBIS/Projetos/tags",
            "blobs_url": "https://api.github.com/repos/4EBIS/Projetos/git/blobs{/sha}",
            "git_tags_url": "https://api.github.com/repos/4EBIS/Projetos/git/tags{/sha}",
            "git_refs_url": "https://api.github.com/repos/4EBIS/Projetos/git/refs{/sha}",
            "trees_url": "https://api.github.com/repos/4EBIS/Projetos/git/trees{/sha}",
            "statuses_url": "https://api.github.com/repos/4EBIS/Projetos/statuses/{sha}",
            "languages_url": "https://api.github.com/repos/4EBIS/Projetos/languages",
            "stargazers_url": "https://api.github.com/repos/4EBIS/Projetos/stargazers",
            "contributors_url": "https://api.github.com/repos/4EBIS/Projetos/contributors",
            "subscribers_url": "https://api.github.com/repos/4EBIS/Projetos/subscribers",
            "subscription_url": "https://api.github.com/repos/4EBIS/Projetos/subscription",
            "commits_url": "https://api.github.com/repos/4EBIS/Projetos/commits{/sha}",
            "git_commits_url": "https://api.github.com/repos/4EBIS/Projetos/git/commits{/sha}",
            "comments_url": "https://api.github.com/repos/4EBIS/Projetos/comments{/number}",
            "issue_comment_url": "https://api.github.com/repos/4EBIS/Projetos/issues/comments{/number}",
            "contents_url": "https://api.github.com/repos/4EBIS/Projetos/contents/{+path}",
            "compare_url": "https://api.github.com/repos/4EBIS/Projetos/compare/{base}...{head}",
            "merges_url": "https://api.github.com/repos/4EBIS/Projetos/merges",
            "archive_url": "https://api.github.com/repos/4EBIS/Projetos/{archive_format}{/ref}",
            "downloads_url": "https://api.github.com/repos/4EBIS/Projetos/downloads",
            "issues_url": "https://api.github.com/repos/4EBIS/Projetos/issues{/number}",
            "pulls_url": "https://api.github.com/repos/4EBIS/Projetos/pulls{/number}",
            "milestones_url": "https://api.github.com/repos/4EBIS/Projetos/milestones{/number}",
            "notifications_url": "https://api.github.com/repos/4EBIS/Projetos/notifications{?since,all,participating}",
            "labels_url": "https://api.github.com/repos/4EBIS/Projetos/labels{/name}",
            "releases_url": "https://api.github.com/repos/4EBIS/Projetos/releases{/id}",
            "deployments_url": "https://api.github.com/repos/4EBIS/Projetos/deployments",
            "created_at": "2018-08-29T14:02:23Z",
            "updated_at": "2018-08-29T14:02:25Z",
            "pushed_at": "2016-09-05T14:57:43Z",
            "git_url": "git://github.com/4EBIS/Projetos.git",
            "ssh_url": "git@github.com:4EBIS/Projetos.git",
            "clone_url": "https://github.com/4EBIS/Projetos.git",
            "svn_url": "https://github.com/4EBIS/Projetos",
            "homepage": null,
            "size": 5,
            "stargazers_count": 0,
            "watchers_count": 0,
            "language": "PHP",
            "has_issues": false,
            "has_projects": true,
            "has_downloads": true,
            "has_wiki": true,
            "has_pages": false,
            "forks_count": 0,
            "mirror_url": null,
            "archived": false,
            "disabled": false,
            "open_issues_count": 0,
            "license": null,
            "forks": 0,
            "open_issues": 0,
            "watchers": 0,
            "default_branch": "master"
        }
    ];

    /*
    let user = (await fetch(`${url}/${t}?access=${token}`)).json();
    let repo = (await fetch(`${url}/${t}/repos?access=${token}`)).json();
    */
    return { user, repo };
}
document.querySelector('[name=respOption]').addEventListener('click', (e) => {
    console.log(e.value);
})

function addRepo(t) {
    document.querySelector('#hiddenComment').value = t.innerHTML;
    let border = document.querySelectorAll(".containerRepo #repoUG label");
    border.forEach(v => {
        v.style = 'border:none';
    })
    t.style = 'border: 1px solid green';
}

function listUser(e) {
    e.repo.map((v, i) => {
        document.querySelector(".containerRepo #repoUG").innerHTML += `
        <label onclick="addRepo(this)">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5>${v.full_name}</h5>
                    <small><a href="${v.clone_url}">${v.clone_url}</a></small>
                </div>
            </div>
            </label>
    `;
    })
    console.log(e.user);
    document.querySelector(".containerRepo #nomeUG").innerHTML = `
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="media">
                    <img class="mr-3" height="90" src="${e.user.avatar_url}">
                </div>
            </div>
            <div class="panel-body">
                ${e.user.login}
            </div>
        </div>
    `;
}