/* menur.js 
    Registers the event handlers 
    
    Get the DOM addresses of the elements and register 
    the event handlers 
*/

var javaNode = document.getElementById("JavaQty");
var laitNode = document.getElementById("LaitQty");
var cappNode = document.getElementById("CappQty");

var laitSingleNode = document.getElementById("LaitSinglePrice");
var laitDoubleNode = document.getElementById("LaitDoublePrice");
var cappSingleNode = document.getElementById("CappSinglePrice");
var cappDoubleNode = document.getElementById("CappDoublePrice");


javaNode.addEventListener("change", calcJavaPrice, false);
laitNode.addEventListener("change", calcLaitPrice, false);
cappNode.addEventListener("change", calcCappPrice, false);

laitSingleNode.addEventListener("change", calcLaitSinglePrice, false);
laitDoubleNode.addEventListener("change", calcLaitDoublePrice, false);
cappSingleNode.addEventListener("change", calcCappSinglePrice, false);
cappDoubleNode.addEventListener("change", calcCappDoublePrice, false);