document.getElementById("aay").onclick = function() {
    var ay = document.getElementById("nsem").value;
    if (confirm("Academic Year : " + ay)) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("res").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "dbaay.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("cay=" + ay);
    }
}