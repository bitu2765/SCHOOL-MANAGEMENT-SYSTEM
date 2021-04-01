document.getElementById("feeseb").onclick = function () {

    var ay = document.getElementById("fsay").value;
    var std = document.getElementById("fsst").value;
    var div = document.getElementById("fsdi").value;
    var fee = document.getElementById("fsde").value;

    if (confirm("year        : " + ay + "\nstd          : " + std + "\nDivision  : " + div + "\nFee         : " + fee)) {
        var querystr = "ay=" + ay + "&std=" + std + "&div=" + div+"&fee="+fee;
        if ((ay == 0) || (std == 0) || (div == 0)) {
            document.getElementById("sufe").innerHTML = "";
        }
        else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sufe").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("POST", "addfee.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(querystr);
             
        }
    }
    else {
        alert("Fee Setup Cancel!");
    }
}