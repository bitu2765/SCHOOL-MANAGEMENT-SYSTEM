
document.getElementById("esid").onchange = function () {
  var x = document.getElementById("esid").value;
  alert(x);


  if (x == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    var querystr = "?eid=" + x;
    xmlhttp.open("GET", "gethint.php" + querystr, true);
    xmlhttp.send();
  }
};

document.getElementById("gsc").onclick = function () {
  var id = document.getElementById("esid").value;
  var ye = document.getElementById("esye").value;
  var te = false;
  var que = "?id=" + id + "&ye=" + ye, k = 1;
  for (let ind = 1; ind <= 12; ind++) {
    if (document.getElementById("sc" + ind).checked == true) {
      que += "&";
      que += k + "=" + ind;
      te = true;
      k++;
    }
  }
  if (id == "") {
    alert("Select Employee Id")
  }
  else if (!te) {
    alert("Select Any Month");
  }
  else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("SucAdd").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "salcertgen.php"+que, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
  }
  alert("done");
};