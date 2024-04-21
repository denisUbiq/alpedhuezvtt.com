(function () {
    "use strict";

    /* script scrollcue  */
    scrollCue.init();



    /* Cloned Navigation element */
    const navwhite = document.querySelector(".nav_white");
    if (navwhite) {
        const navElement = navwhite.cloneNode(true);
        document.querySelector(".cloned_nav").appendChild(navElement);

    }



    /* navigation script */
    if (document.querySelector(".header")) {
        const nav_menu = document.querySelector(".header").querySelectorAll(".has_child");

        for (var i = 0; i < nav_menu.length; i++) {
            nav_menu[i].addEventListener('mouseenter', function () {
                this.classList.add('active');
            });
            nav_menu[i].addEventListener('mouseleave', function () {
                this.classList.remove('active');
            });
        }
    }



    /* mobile menu script */

    if (document.querySelector(".mobile_menu")) {
        //adding icon for dropdown button in mobile menu
        const linkwithchild = document.querySelector(".mobile_menu").querySelectorAll(".mdropdown");

        for (let index = 0; index < linkwithchild.length; index++) {
            const newContent = '<i class="mbtn_drop ph ph-caret-down"></i>';
            linkwithchild[index].insertAdjacentHTML('beforeend', newContent);

        }

        //add class for clicked icon
        const mb_menu = document.querySelector(".mobile_menu").querySelectorAll(".mdropdown > i");

        for (var imb = 0; imb < mb_menu.length; imb++) {
            mb_menu[imb].addEventListener('click', function (e) {
                //toogle class active for the icon button
                this.parentNode.classList.toggle('active');
                //dropdown slide effect with 200ms transition
                slideToggle(this.parentNode.querySelector('.mdropdown_child'), 200);
                e.preventDefault()
            });
        }
    }



    /* parallax slider script on Home 1*/
    const para_slider = new Swiper('.para_slider', {
        speed: 800,
        loop: true,
        parallax: true,
        simulateTouch: false,
        preventInteractionOnTransition: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },

        // If we need pagination
        navigation: {
            nextEl: '.para_slider .next_swiper',
            prevEl: '.para_slider .prev_swiper',
        },

    });



    /* testimonial slider script on Home 1 & Home 5*/
    const testi_slider = new Swiper('.testi_slider', {
        speed: 800,
        loop: true,
        preventInteractionOnTransition: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },


        // If we need pagination
        navigation: {
            nextEl: '.prev_testi',
            prevEl: '.next_testi',
        },

    });


    /* client slider script in Home 1 & Home 3 */
    const client_slider = new Swiper(".client_slider", {
        slidesPerView: 2,
        loop: true,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false
        },
        breakpoints: {
            640: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 5,
            },
            1279: {
                slidesPerView: 6,
            },
        },
    });

    /* Event main slider script on Single Events page  */
    const events_main_slider = new Swiper('.events_main_slider', {
        speed: 800,
        loop: false,
        spaceBetween: 30,
        slidesPerView: 1,
        centeredSlides: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false
        },

    });


    /* isotope script */
    //variable
    const elem = document.querySelector('.event_box');
    const filtersElem = document.querySelector('.event_filter');

    //only run isotope if elem exist
    if (elem) {

        //isotope layout script
        const rdn_events_list = new Isotope(elem, {

            // options
            itemSelector: '.event_outer',
            layoutMode: 'masonry'
        });

         //only run isotope filtersElem exist
        if ( filtersElem) {
            // isotope filtering script
            filtersElem.addEventListener('click', function (event) {
                if (!matchesSelector(event.target, 'a')) {
                    return;
                }
                const filterValue = event.target.getAttribute('data-filter');

                // use the data-filter attribute
                rdn_events_list.arrange({
                    filter: filterValue
                });
                //adding is_active class for filter button
                filtersElem.querySelector('.is_active').classList.remove('is_active');
                event.target.classList.add('is_active');
                event.preventDefault();
            });
        }
    }

    /* scroll to top script */
    const scrollToTopBtn = document.querySelector(".scrollToTopBtn");

    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener("click", scrollToTop);
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    //scroll to top appear
    // When the user scrolls down 200px from the top of the document, show the button
    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollToTopBtn.style.opacity = "1";
        } else {
            scrollToTopBtn.style.opacity = "0";
        }
    }


    /* Cloned menu appear */
    // When the user scrolls down 400px from the top of the document, show the cloned menu
    const clonedMenu = document.querySelector(".cloned");

    function scrollCloned() {

        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            clonedMenu.classList.add('fixed_menu');
        } else {
            clonedMenu.classList.remove('fixed_menu')
        }
    }

    //scrolling effect
    window.onscroll = function () {
        //show the to top button
        if (scrollToTopBtn) {
            scrollFunction();
        }
        //clone the menu
        if (clonedMenu) {
            scrollCloned();
        }
    };


    /* gallery  popup script */
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true,
        selector: '*[data-gallery]',
        zoomable: false,
        height: 'auto'
    });

    /* counter init with waypoint */
    /* trigger waypoints on the element with class .stat_section */
    const counterSection = document.querySelector('.stat_section');
    if (counterSection) {
        const counter = new Waypoint({
            element: counterSection,
            handler: function (direction) {
                /* variable:class,duration time= default 5 (seconds) */
                rdn_counter(".counter_text", 15);
            },
            offset: '75%',
        })

    }
})();