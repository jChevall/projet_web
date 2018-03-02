
const newRdv_submit = document.getElementById("newRdv_submit");

newRdv_submit.addEventListener("click", newRdv);

var newRdvFormOpen = false;
function newRdv(){
    if(newRdvFormOpen){
        document.getElementById("newRdv").style.display = "none";
        newRdvFormOpen = false;
    }else{
        document.getElementById("newRdv").style.display = "block";
        newRdvFormOpen = true;
    }
}

function updateRdv(id){
    document.getElementById(id).style.display = "block";
}

function validateRdv(id){
    document.getElementById(id).style.display = "none";
}