/* jobsr.js 
    Registers the event handlers 
    
    Get the DOM addresses of the elements and register 
    the event handlers 
*/

    var nameNode = document.getElementById("myName");
    var emailNode = document.getElementById("myEmail");
    var dateNode = document.getElementById("myDate");

    nameNode.addEventListener("change", chkName, false);
    emailNode.addEventListener("change", chkEmail, false);
    dateNode.addEventListener("change", chkDate, false);