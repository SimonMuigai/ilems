// whn login is submitted 
$('#adminLoginForm').submit((e) => {

    e.preventDefault();

    let adminData = $('#adminLoginForm').serialize();

    $.post('server/login.php', adminData, (data) => {

        let res = JSON.parse(data);

        console.log(res);

        if (res.login == true) {

            alert('Login Successfull');

            window.location.href = "../admin/"
        } else {

            alert(res.message);
        }
    })
})