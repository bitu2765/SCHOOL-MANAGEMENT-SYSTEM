// document.getElementById("mose").onchange = function() {
//     var mod = document.getElementById("mose").value;
//     if (mod == 0) {
//         alert("Please Select Mod");
//     } else if (mod == 1) {
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("Addde").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open("POST", "aayear.php", true);
//         xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//         xmlhttp.send();
//     }
//     // else {
//     //     var xmlhttp = new XMLHttpRequest();
//     //     xmlhttp.onreadystatechange = function() {
//     //         if (this.readyState == 4 && this.status == 200) {
//     //             document.getElementById("Addde").innerHTML = this.responseText;
//     //         }
//     //     };
//     //     xmlhttp.open("POST", "updatepayslip.php", true);
//     //     xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     //     xmlhttp.send();
//     // }
// };

document.getElementById("mose").onchange = function() {
    var ay = document.getElementById("mose").value;
    if (ay == 0) {
        alert("Please Select Any Academic Year");
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pstd").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "aastd.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("ay=" + ay);
    }
}
document.getElementById("pds").onclick = function() {
    var cay = document.getElementById("mose").value;
    var st = document.getElementById("pstd").value;
    var nay = document.getElementById("nay").value;
    var std = document.getElementById("nsem").value;

    if (cay == 0) {
        alert("Select Current Acdemic Year");
    } else if (st == 0) {
        alert("Select Current Standard");
    } else if (nay == 0) {
        alert("Select Next Academic Year");
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("res").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "pdstudent.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("cay=" + cay + "&cstd=" + st + "&nay=" + nay + "&nstd=" + std);
    }
}

document.getElementById("pstd").onchange = function() {

    var std = document.getElementById("pstd").value;
    if (std == "12") {
        document.getElementById("nsem").value = "PASSOUT";
    } else if (std == "10") {
        document.getElementById("nsem").value = "PASSOUT";
    } else {
        document.getElementById("nsem").value = Number(std) + 1;
    }
}