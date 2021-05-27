// check if logged in 
checkIfLoggedIn();

function checkIfLoggedIn() {

    $.post('server/checkLogin.php', (data) => {

        let res = JSON.parse(data);

        if (res.loggedIn == true) {

            // go to the home 

            // stay here 


        } else {

            // navigate to login 
            window.location.href = "login.html";
        }
    })
}