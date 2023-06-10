$(document).ready(() => {
    $('#hamburger-menu').click(() => {
        $('#hamburger-menu').toggleClass('active')
        $('#nav-menu').toggleClass('active')
    })

    //Membuat Owl Carousel
    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#banner-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav:true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true
    })

    $('#trending-slide').owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        nav:true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            500: {
                items: 2
            },
            1200: {
                items: 4
            }
        }
    })
    $('.movies-slide').owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        nav:true,
        navText: navText,
        margin: 10,
        responsive: {
            500: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    })
})