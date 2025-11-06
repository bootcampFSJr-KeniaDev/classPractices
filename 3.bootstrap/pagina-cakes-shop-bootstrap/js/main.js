/** Accediendo al apartado de la historia */
let showMore = document.getElementById('showMore');

// On Ready
$(document).ready(function(){
    $('.toast').toast({
        delay: 5000,
        autohide: false
    });    

});
let saleMessage = setInterval(myCountDown, 3000);

function myCountDown(){
    $('.toast').toast('show');

    // Stop
    clearInterval(saleMessage);
}

$('.toast').on('hide.bs.toast', function () {
    console.log('Message was hidden')
})

// Collapse - accordion
function expandAll(){
    $('#collapseOne, #collapseTwo').collapse('show')
}

function closeAll(){
    $('#collapseOne, #collapseTwo').collapse('hide')
}

// Carousel functions
function thumbnail1(){
    $('.carousel').carousel(0);
}

function thumbnail2(){
    $('.carousel').carousel(1);
}

function thumbnail3(){
    $('.carousel').carousel(2);
}

function prev(){
    $('.carousel').carousel('prev');
}

function next(){
    $('.carousel').carousel('next');
}


