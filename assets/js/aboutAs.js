$(document).ready(function() {
    $(window).scroll(function() {
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('scroll-up-btn').click(function() {
        $('html').animate({ scrollTop: 0 });
    });

    // typing animation script
    var typed = new Typed(".typing", {
        strings: ["tất cả mọi người đã ghé thăm !"],
        typeSpeed: 100,
        blackSpeed: 60,
        loop: true
    })
    var typed = new Typed(".typing1", {
            strings: ["là thương hiệu thời trang dẫn dầu trong mọi lĩnh vực"],
            typeSpeed: 100,
            blackSpeed: 60,
            loop: true
        })
        //owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
})