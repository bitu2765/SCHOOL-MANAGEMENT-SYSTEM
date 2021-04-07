document.getElementById("feay").onchange = function() {
    var ay = document.getElementById("feay").value;
    var querystr = "?ay=" + ay;
    if (ay == 0) {
        document.getElementById("fest").innerHTML = "";
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fest").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getstd.php" + querystr, true);
        xmlhttp.send();
        // alert(ay);
    }
};


document.getElementById("fest").onchange = function() {
    var ay = document.getElementById("feay").value;
    var st = document.getElementById("fest").value;

    var querystr = "?ay=" + ay + "&std=" + st;
    if (ay == 0) {
        document.getElementById("fediv").innerHTML = "";
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fediv").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getdiv.php" + querystr, true);
        xmlhttp.send();
        // alert(ay);
    }
};

document.getElementById("fediv").onchange = function() {
    var ay = document.getElementById("feay").value;
    var st = document.getElementById("fest").value;
    var di = document.getElementById("fediv").value;

    var querystr = "?ay=" + ay + "&std=" + st + "&div=" + di;
    if (ay == 0 || st == 0 || di == 0) {
        document.getElementById("fefe").innerHTML = "";
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fedee").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getfeesde.php" + querystr, true);
        xmlhttp.send();
        // alert(ay);
        var xmlhttp1 = new XMLHttpRequest();
        xmlhttp1.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sttable").innerHTML = this.responseText;
            }
        };
        xmlhttp1.open("GET", "stutab.php" + querystr, true);
        xmlhttp1.send();
    }
};


document.getElementById("udfe").onclick = function() {
    // alert("Function started!");
    var ay = document.getElementById("feay").value;
    // alert(ay);
    var st = document.getElementById("fest").value;
    // alert(st);
    var di = document.getElementById("fediv").value;
    // alert(di);
    var fee = document.getElementById("fedee").textContent;
    // alert(fee);
    var stde = { "ay": ay, "std": st, "div": di, "fee": fee, "stu": [] };
    var tab = document.getElementById("paytab").rows.length;
    for (var i = 1; i < tab; i++) {
        var name = [];
        var robj = document.getElementById("paytab").rows[i].cells;
        var tem = robj[1].innerHTML;
        name.push(tem);
        // alert(name["roll"]);
        for (var j = 0; j < 12; j++) {
            var stt = document.getElementsByName("mn")[i - 1].rows[j];
            var m1 = stt.cells[0].children[0].checked;
            name.push(m1);
        }
        stde["stu"].push(name);
    }


    var jsont = JSON.stringify(stde);

    console.log(stde);

    // var querystr = "ay=" + ay + "&std=" + st + "&div=" + di ;
    var querystr = "&sfd=" + jsont;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("fscon").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST", "stufeeent.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(querystr);

    // alert("Function End!");
};