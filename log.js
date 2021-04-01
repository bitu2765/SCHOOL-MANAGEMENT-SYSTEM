document.getElementById("login_admin").onclick = function() {

    var user = document.getElementById("username").value;
    var pass = document.getElementById("userpass").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "success") {
                window.location.href = "./dash/Dashboard.php";
            } else {
                window.location.href = "index.php";
            }
        }
    };
    xmlhttp.open("POST", "logarr.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("us=" + user + "&ps=" + pass);
}