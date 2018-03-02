
const newArticle_submit = document.getElementById("newArticle_submit");
const file_btn = document.getElementById("file_btn");

newArticle_submit.addEventListener("click", newArticle);

var newArticleFromOpen = false;
function newArticle(){
    if(newArticleFromOpen){
        document.getElementById("newArticle").style.display = "none";
        newArticleFromOpen = false;
    }else{
        document.getElementById("newArticle").style.display = "block";
        newArticleFromOpen = true;
    }
}

function udateArticle(id){
    document.getElementById(id).style.display = "block";
}

function validateUdateArticle(id){
    document.getElementById(id).style.display = "none";
}