document.getElementById("logout").onclick = function() {
    // window.location.href = "../login.php";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "success") {
                window.location.href = "../index.php";
            }
        }
    };
    xmlhttp.open("POST", "../logt.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}