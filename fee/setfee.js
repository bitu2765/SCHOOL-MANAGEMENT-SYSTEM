// document.getElementById("feeseb").onclick = function() {

//     var ay = document.getElementById("fsay").value;
//     var std = document.getElementById("fsst").value;
//     var fee = document.getElementById("fsde").value;

//     if (confirm("year        : " + ay + "\nstd          : " + std + "\nFee         : " + fee)) {
//         var querystr = "ay=" + ay + "&std=" + std + "&fee=" + fee;
//         if ((ay == 0) || (std == 0) || (div == 0)) {
//             document.getElementById("sufe").innerHTML = "";
//         } else {
//             var xmlhttp = new XMLHttpRequest();
//             xmlhttp.onreadystatechange = function() {
//                 if (this.readyState == 4 && this.status == 200) {
//                     document.getElementById("sufe").innerHTML = this.responseText;
//                 }
//             };
//             xmlhttp.open("POST", "addfee.php", true);
//             xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//             xmlhttp.send(querystr);

//         }
//     } else {
//         alert("Fee Setup Cancel!");
//     }
// }

document.getElementById("fsst").onchange = function() {
    refreshpage();
}

function refreshpage(){
    var ay = document.getElementById("fsay").value;
    var std = document.getElementById("fsst").value;

    if (ay == 0) {
        alert("Select Academic Year");
    } else if (std == 0) {
        alert("Select Standard");
    } else {
        var querystr = "ay=" + ay + "&std=" + std;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sufe").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "checkde.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(querystr)
    }
}

function editfee() {
    var tab = document.getElementById("fstab").rows[1].cells;
    var amfee;
    try {
        amfee = tab[2].children[0].value;
    } catch {
        amfee = tab[2].innerHTML;
        tab[2].innerHTML = "<input type='number' class='form-control' id='fsde' value ='" + amfee + "'  min='0'>";
    };
    // alert(tab[2].innerHTML);
}

function upfee() {
    var ay = document.getElementById("fsay").value;
    var std = document.getElementById("fsst").value;
    var fee = document.getElementById("fsde").value;
    if (ay == 0) {
        alert("Select Academic Year");
    } else if (std == 0) {
        alert("Select Standard");
    } 
    else if (fee < 0) {
        alert("Fees Cannot be negative");
    }else {
        var querystr = "tag=Updated" + "&ay=" + ay + "&std=" + std + "&fee=" + fee;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("settag").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "addfee.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(querystr)
        xmlhttp.onload = refreshpage();
    }
}

function sufee() {
    var ay = document.getElementById("fsay").value;
    var std = document.getElementById("fsst").value;
    var fee = document.getElementById("fsde").value;
    if (ay == 0) {
        alert("Select Academic Year");
    } else if (std == 0) {
        alert("Select Standard");
    }else if (fee < 0) {
        alert("Fees Cannot be negative");
    } else {
        var querystr = "tag=Inserted" + "&ay=" + ay + "&std=" + std + "&fee=" + fee;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("settag").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "addfee.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(querystr)
        xmlhttp.onload = refreshpage();

    }
}

function clfee() {
    var ay = document.getElementById("fsay").value;
    var std = document.getElementById("fsst").value;

    if (ay == 0) {
        alert("Select Academic Year");
    } else if (std == 0) {
        alert("Select Standard");
    } else {
        var querystr = "tag=Deleted" + "&ay=" + ay + "&std=" + std;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("settag").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "addfee.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(querystr)
        xmlhttp.onload = refreshpage();

    }
}