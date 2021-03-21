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
  
  document.getElementById("subd").onclick = function () {
    var eid = document.getElementById("esid").value;
    var ena = document.getElementById("esna").value;
    var epan = document.getElementById("espan").value;
    var edesg = document.getElementById("esdesg").value;
    var epfn = document.getElementById("espfn").value;
    var emo = document.getElementById("esmo").value;
    var etd = document.getElementById("estd").value;
    var epd = document.getElementById("espd").value;
    var eld = document.getElementById("esld").value;
    var elwp = document.getElementById("eslwp").value;
    var eba = document.getElementById("esba").value;
    var epf = document.getElementById("espf").value;
    var espp = document.getElementById("essp").value;
    var edgp = document.getElementById("esdg").value;
    var esa1 = document.getElementById("essa1").value;
    var esa2 = document.getElementById("essa2").value;
    var ca = document.getElementById("escla").value;
    var eda = document.getElementById("esda").value;
    var ept = document.getElementById("espt").value;
    var eta = document.getElementById("esta").value;
    var eit = document.getElementById("esit").value;
    var eha = document.getElementById("esha").value;
    var eot = document.getElementById("esot").value;
    var ema = document.getElementById("esma").value;
    var ete = document.getElementById("este").value;
    var etde = document.getElementById("estde").value;
    var enp = document.getElementById("esnp").value;
    var esye = document.getElementById("esay").value;
    if (eid == "") {
      alert("Employee not selected");
    }
    else if (emo == "") {
      alert("Month Not Selected");
    }
    else if (Number(etd) != Number(epd) + Number(eld) + Number(elwp)) {
      alert("Total Days Is Not Equal To Addition Of Present Days, Leaving Days And LWP");
    }
    else if((etd < 0)|| (epd < 0)|| (eld < 0)|| (elwp < 0))
    {
        alert("Day Cannnot Be Negative");
    }
    else if ((Number(etd) != Number(epd) + Number(eld) + Number(elwp)) || (etd == 0)) {
      alert("total days is not equal to addition of present day and leaving day and lwp");
    }
    else if(Number(ete)!= Number(eba) +Number(epf) +Number(espp) +Number(edgp) +Number(esa1) +Number(esa2) +Number(ca) +Number(eda) +Number(eta) +Number(eha) +Number(eot) +Number(ema))
    {
      alert("total Earning Is Wrong!");
    }
    else if(Number(etde) !=Number(eit) +Number(ept))
    {
      alert("total Deduction Is Wrong!");

    }
    else if(Number(enp) !=Number(ete) - Number(etde))
    {
      alert("Net Payable Is Wrong!");

    }
    else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("SucAdd").innerHTML = this.responseText;
        }
      };
      var querystr = "e1=" + eid + "&e2=" + ena + "&e3=" + epan + "&e4=" + edesg + "&e5=" + epfn + "&e6=" + emo + "&e7=" + etd + "&e8=" + epd + "&e9=" + eld + "&e10=" + elwp;
      querystr += "&e11=" + eba + "&e12=" + epf + "&e13=" + eda + "&e14=" + ept + "&e15=" + eta + "&e16=" + eit + "&e17=" + eha + "&e18=" + eot + "&e19=" + ema + "&e20=" + ete;
      querystr += "&e21=" + etde + "&e22=" + enp + "&e23=" + espp + "&e24=" + edgp + "&e25=" + esa1 + "&e26=" + esa2 + "&e27=" + ca + "&e28=" + esye;
      xmlhttp.open("POST", "addpayslip.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send(querystr);
    }
  };