// update general
const file_btn = document.getElementById("file_btn");
const file_input = document.getElementById("file_input");
const img_input = document.getElementById("img_input");

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

// delete
const img_list = document.getElementById("img_list");

img_list.addEventListener("click", imgOnListClicked);

function imgOnListClicked(e) {
    var formDomEl = e.target.parentElement;
    
    formDomEl.submit();
}