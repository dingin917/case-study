/* menu.js
    ************************************************
    The event handler function for the name text box 
*/

var JavaPrice = 0;
var javaQty = 0;
var LaitPrice = 0;
var laitQty = 0;
var CappPrice = 0;
var laitQty = 0;
var TotalPrice = 0; 

function calcJavaPrice(event) {
    // Get the target node of the event -> the quantity of Just Java
    if (!isInt(event.currentTarget.value)){
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        return false;
    }
    javaQty = parseFloat(event.currentTarget.value);
    JavaPrice = javaQty*2.00;
    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("JavaSubtotalPrice").innerHTML = "$"+JavaPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcLaitPrice(event) {
    // Get the target node of the event -> the quantity of Lait
    if (!isInt(event.currentTarget.value)){
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        return false;
    }
    laitQty = parseFloat(event.currentTarget.value);
    
    if (document.getElementById("LaitSinglePrice").checked) {
        LaitPrice = laitQty*2.00;
    } else if (document.getElementById("LaitDoublePrice").checked) {
        LaitPrice = laitQty*3.00;
    } else {
        alert("Please select a price for Cafe au Lait first!");
        document.getElementById("LaitForm").reset();
        return false;
    }
    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("LaitSubtotalPrice").innerHTML = "$"+LaitPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcCappPrice(event) {
    // Get the target node of the event -> the quantity of Capp
    if (!isInt(event.currentTarget.value)){
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        return false;
    }
    cappQty = parseFloat(event.currentTarget.value);

    if (document.getElementById("CappSinglePrice").checked) {
        CappPrice = cappQty*4.75;
    } else if (document.getElementById("CappDoublePrice").checked){
        CappPrice = cappQty*5.75;
    } else {
        alert("Please select a price for Iced Cappuccino first!");
        document.getElementById("CappForm").reset();
        return false;
    }
    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("CappSubtotalPrice").innerHTML = "$"+CappPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcLaitSinglePrice(event) {
    // Get the target node of the event -> unit price
    laitQty = document.getElementById("LaitQty").value;

    if (event.currentTarget.checked) {
        LaitPrice = laitQty*2.00;
    } else {
        LaitPrice = laitQty*3.00;
    }

    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("LaitSubtotalPrice").innerHTML = "$"+LaitPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcLaitDoublePrice(event) {
    // Get the target node of the event -> unit price
    laitQty = document.getElementById("LaitQty").value;

    if (event.currentTarget.checked) {
        LaitPrice = laitQty*3.00;
    } else {
        LaitPrice = laitQty*2.00;
    }

    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("LaitSubtotalPrice").innerHTML = "$"+LaitPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcCappSinglePrice(event) {
    // Get the target node of the event -> unit price
    cappQty = document.getElementById("CappQty").value;

    if (event.currentTarget.checked) {
        CappPrice = cappQty*4.75;
    } else {
        CappPrice = cappQty*5.75;
    }

    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("CappSubtotalPrice").innerHTML = "$"+CappPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}

function calcCappDoublePrice(event) {
    // Get the target node of the event -> unit price
    cappQty = document.getElementById("CappQty").value;

    if (event.currentTarget.checked) {
        CappPrice = cappQty*5.75;
    } else {
        CappPrice = cappQty*4.75;
    }

    TotalPrice = JavaPrice + LaitPrice + CappPrice;
    document.getElementById("CappSubtotalPrice").innerHTML = "$"+CappPrice.toFixed(2);
    document.getElementById("TotalPrice").innerHTML = "$"+TotalPrice.toFixed(2);
}



function isInt(value) {
    var x;
    if (isNaN(value)) {
        return false;
    } 
    x = parseFloat(value);
    return (x | 0) === x; 
}

