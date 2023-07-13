function promo() {
    document.getElementById("promo").style.display = "block";
}

function acnumber() {
    document.getElementById("acnumber").style.display = "block";
    document.getElementById("text").style.display = "none";
}

function postselect() {
    document.getElementById("prepaid").style.display = "none";
    document.getElementById("postpaid").style.display = "block";
}

function preselect() {
    document.getElementById("prepaid").style.display = "block";
    document.getElementById("postpaid").style.display = "none";
}
var amountval1 = 500;
var amountval2 = 1000;
var amountval3 = 1500;

function addamount1() {
    document.getElementById("amount").value = amountval1;
    amountval1 = amountval1 + 500;
}

function addamount2() {
    document.getElementById("amount").value = amountval2;
    amountval2 = amountval2 + 1000;
}

function addamount3() {
    document.getElementById("amount").value = amountval3;
    amountval3 = amountval3 + 1500;
}

function change(that) {
    if (that.value == "BSNL LANDLINE") {
        document.getElementById("show").style.display = "block";
    } else {
        document.getElementById("show").style.display = "none";
    }
}

function change1(that) {
    if (that.value == "BSNL BROADBAND") {
        document.getElementById("show1").style.display = "block";
    } else {
        document.getElementById("show1").style.display = "none";
    }
}
var load = 1;
function loadmore() {
    document.getElementById("viewmore").value = load;
    load = load + 1;
}