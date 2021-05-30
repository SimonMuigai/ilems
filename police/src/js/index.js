// check if logged in 
function checkIfLoggedIn() {

    let loggedIn = window.sessionStorage.ilemslip;

    if (loggedIn == undefined) {
        return false;
    } else {

        return true;
    }
}



if (checkIfLoggedIn()) {
    // load dash 
    $('.mainCol').load('views/dash.html');
} else {

    // load  auth
    $('.mainCol').load('views/login.html');

}