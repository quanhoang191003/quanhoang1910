function checkPassword() {
    var password = document.getElementsByName("password").value;
    var re_type = document.getElementsByName("Re-type password").value;
    if (password == re_type){
        alert("Password match!");
    }
    else{
        alert("Incorrect password!");
    }
}