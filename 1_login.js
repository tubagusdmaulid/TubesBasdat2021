function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;    
    if (email != "" && password!="") {
        return true;
    }else{
        alert('email dan Password Wajib Diisi :V');
        return false;
    }
}
