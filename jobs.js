/* jobs.js
    ************************************************
    The event handler function for the name text box 
*/


function chkName(event) {
    // Get the target node of the event

    var myName = event.currentTarget;

    // Test the format of the input name 
    // The name field contains alphabet characters 
    //  and character spaces. 

    // pos = myName.value.match(/^[A-Za-z]+[\s]+[A-Za-z]+$/);
    pos = myName.value.match(/[A-Za-z]+[\s]+[A-Za-z]+/);

    if (pos == null) {
        alert("The name you entered (" + myName.value +
            ") is not in the correct form.\n" +
            "Please enter again.");
        myName.focus();
        myName.select();
        return false;
    }
}



function chkEmail(event) {
    // Get the target node of the event

    var myEmail = event.currentTarget;

    // Test the format of the input email 
    // The email field contains a user name part follows by @ 
    //  and a domain name part. 

    var pos = myEmail.value.search(/^[\w.-]+@([\w]+\.){1,3}[A-Za-z]{2,3}$/);

    if (pos != 0) {
        alert("The email you entered (" + myEmail.value +
            ") is not in the correct form.\n" +
            "Please enter again.");
        myEmail.focus();
        myEmail.select();
        return false;
    }
}

function chkDate(event) {
    // Get the target node of the event

    var myDate = event.currentTarget;

    // Validate the start date 
    // The start date cannot be from today and the past. 

    var now = new Date();
    var today = now.getTime();

    var chosenDate = new Date(myDate.value).getTime();

    if (chosenDate <= today) {
        alert("The date you chose (" + myDate.value +
        ") is invalid.\n" + 
        "Please pick another day.");
        return false;
    } 
}