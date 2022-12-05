$(document).ready(function()
{
//banner owl carousel
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

});
