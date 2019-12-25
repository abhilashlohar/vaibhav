$('.hero-slideshow').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.partners-slider--one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.partners-slider--two').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$(document).ready(function(){
    var options = {
        max_value: 5,
        step_size: 0.5,
        selected_symbol_type: 'hearts',
        url: 'http://localhost/test.php',
        initial_value: 3,
        update_input_field_name: $("#input2"),
    }
    $(".rate").rate();
});