// This will hold all the admin routes
handleRoute()
function handleRoute() {
    // get current the route 
    let currentroute = window.location.href;

    let currentResourceArr = currentroute.split('/');

    let currentResource = currentResourceArr[currentResourceArr.length - 1];


    if (currentResource == '') {

        currentResource = 'home'

    }



    switch (currentResource) {

        case 'home':

            $('.mainCol').load('views/home.html');

            break;


        case 'police':

            $('.mainCol').load('views/police.html');

            break;

        case 'cases':

            $('.mainCol').load('views/cases.html');

            break;


        case 'settings':

            $('.mainCol').load('views/settings.html');

            break;


        case 'profile':

            $('.mainCol').load('views/profile.html');

            break;

        case 'lawyers':

            $('.mainCol').load('views/lawyers.html');

            break;

        case 'stations':

            $('.mainCol').load('views/stations.html');

            break;

        case 'case-assignments':

            $('.mainCol').load('views/assignments.html');

            break;

        default:

            if (currentResource.includes('station?s=')) {

                $('.mainCol').load('views/station.html');

            }

            if (currentResource.includes('officer?s=')) {

                $('.mainCol').load('views/officer.html');

            }

            if (currentResource.includes('case?c=')) {

                $('.mainCol').load('views/case.html');

            }

            if (currentResource.includes('assignment?a=')) {

                $('.mainCol').load('views/assignment.html');

            }
            break;
    }

}
