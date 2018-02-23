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

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}