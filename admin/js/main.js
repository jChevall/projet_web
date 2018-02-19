function get(url) {
    var req = new XMLHttpRequest();
    req.open('GET', url, false); 
    req.send(null);
    
    if (req.status === 200) {
        return req.responseText;
    } else {
        return req.statusText;
    }
    
}

function emailExist(mail) {
    return this.get('action/emailExist.php?mail=' + mail) === "true" ? true : false;
}

function logOk() {
    
}
