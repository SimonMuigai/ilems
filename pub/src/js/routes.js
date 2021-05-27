
function handleRoute() {
    // get current the route 
    let currentroute = window.location.href;

    let currentResourceArr = currentroute.split('/');

    let currentResource = currentResourceArr[currentResourceArr.length - 1];







    switch (currentResource) {



        case 'register':

            $('.mainCol').load('views/register.html');

            break;

        default:

            if (currentResource.includes('user?u=')) {

                $('.mainCol').load('views/user.view.html');

            }
            break;
    }

}
