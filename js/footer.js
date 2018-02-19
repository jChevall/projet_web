const footer_a = document.getElementById("footer_creator_a");
const footer_img = document.getElementById("footer_creator");

footer_a.addEventListener("mouseover", this.showCHIRAC);
footer_a.addEventListener("mouseout", this.hideCHIRAC);


function showCHIRAC(e) {
    footer_img.style.display = "block";
    
    var x = e.clientX,
        y = e.clientY;

    footer_img.style.top = (window.innerHeight - footer_img.height)/2 + "px";
    footer_img.style.left = (window.innerWidth - footer_img.width)/2 + "px";
}

function hideCHIRAC() {
    footer_img.style.display = "none";
}