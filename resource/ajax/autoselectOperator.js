function showUser(str) {
    var l = 4;
    var series = str.substring(0, 4);

    if ((series == 9531 || series == 9473 || series == 9468 || series == 9530 || series == 9264) && str.length <= 5) {
        l = 5;

    }

    if ((str.length) == l) {

        if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var res = xmlhttp.responseText;
                var delta = res.split(':');
                document.getElementById("operator").value = delta[0];
            }

        }

        xmlhttp.open("GET", "https://payflipwallet.com/auth/findoperator.php?mobile=" + str, true);
        xmlhttp.send();

    } else {
        return;
    }
}