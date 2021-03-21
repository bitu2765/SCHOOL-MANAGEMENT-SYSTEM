document.getElementById("gendata").onclick = function () {
    //alert("hii");
    var ye = document.getElementById("esye").value;
    var mo = document.getElementById("esmo").value;
    var id = document.getElementById("esid").value;


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("Tdata").innerHTML = this.responseText;
        }
    };
    var querystr = "mo=" + mo+ "&ye=" + ye;
    if (id != "0") {
        querystr += "&id=" + id;
    }
    xmlhttp.open("POST", "viewaddpayrolltable.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(querystr);
    //alert("hii2");
};