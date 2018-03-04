const newArticle_submit = document.getElementById("newArticle_submit");
const file_btn = document.getElementById("file_btn");
const file_input = document.getElementById("file_input");
const img_input = document.getElementById("img_input");

newArticle_submit.addEventListener("click", newArticle);

file_btn.addEventListener("click", fireClickOnInput);
file_input.addEventListener("change", showThumbnail);

function fireClickOnInput() {
    file_input.click();
}

function showThumbnail() {
    var file = this.files[0];
    var buffer = new FileReader();
    
    buffer.addEventListener("load", function(e) {
        img_input.src = e.target.result;
    });
    
    buffer.readAsDataURL(file);
}

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

function updateArticle(id){
    if (document.getElementById(id).style.display === "block") {
        document.getElementById(id).style.display = "none";   
    } else {
        document.getElementById(id).style.display = "block";
    }
}

function validateUpdateArticle(id){
    document.getElementById(id).style.display = "none";
}
