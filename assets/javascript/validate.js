function validate() {
    flag = 0;
    if(document.getElementById("sap").value < 400000000 || document.getElementById("sap").value > 599999999) {
        flag = 1;
        document.getElementById("sap").style.backgroundColor = "#ffcccc";
    }
    else document.getElementById("sap").style.backgroundColor = "#fff";

    var s = document.getElementById("email").value;
    if(s.indexOf("upes.ac.in") == -1) {
        flag = 1;
        document.getElementById("email").style.backgroundColor = "#ffe5e5";
    }
    else document.getElementById("email").style.backgroundColor = "#fff";

    var cno = document.getElementById("cno").value;
    if(cno > 9999999999 || cno < 1000000000) {
        flag = 1;
        document.getElementById("cno").style.backgroundColor = "#ffe5e5";
    }
    else document.getElementById("cno").style.backgroundColor = "#fff";

    if(flag == 0) return true;
    else return false;
}
