function responsiveMenu() {
    var nav = document.getElementById("topnav");
    var title = document.getElementById("title");
    if (nav.className === "topnav") {
        nav.className += " responsive";
        title.style.display = "none";
    } else {
        nav.className = "topnav";
        title.style.display = "block";
    }
}