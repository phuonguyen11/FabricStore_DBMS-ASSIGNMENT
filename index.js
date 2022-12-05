$(document).ready(function()
{
//banner owl carousel
$('.dropdown-toggle').mouseover(function() {
    $('.dropdown-menu').show();
})

$('.dropdown-toggle').mouseout(function() {
    t = setTimeout(function() {
        $('.dropdown-menu').hide();
    }, 100);

    $('.dropdown-menu').on('mouseenter', function() {
        $('.dropdown-menu').show();
        clearTimeout(t);
    }).on('mouseleave', function() {
        $('.dropdown-menu').hide();
    })
});

$("#banner-area .owl-carousel").owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    dots:true,

    });
$("#new-arrivals .owl-carousel").owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:
    {
        0:
        {
            items:1
        },
        400:
        {
            items:3
        },
        1000:
        {
            items:5
        }
    }
});

//isotone filter
var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });
//filter items on button click
$(".button-group").on("click", "button", function()
{
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter:filterValue})
});

$("#collab .owl-carousel").owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:
    {
        0:
        {
            items:1
        },
        400:
        {
            items:3
        }
        }
})



});
