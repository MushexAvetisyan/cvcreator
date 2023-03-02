import './bootstrap';

/*
* Add Event Listener on multiple elements
* */
const addEventOnElements = function (elements, eventType, callback) {
    for (let i = 0, len = elements.length; i < len; i++) {
        elements[i].addEventListener(eventType, callback);
    }
}



let headerSmooth = document.getElementById("header-menu");
window.addEventListener("scroll", function() {
    let scrollPos = window.pageYOffset;
    if (scrollPos > 50) {
        headerSmooth.classList.add("scrolled");
    } else {
        headerSmooth.classList.remove("scrolled");
    }
});

let updateAllert = document.getElementById('toast');

if (updateAllert) {
    setTimeout(() => {
        updateAllert.style.display = 'none';
    }, 5000)
}

let updateErrors = document.getElementById('errors');

if (updateErrors) {
    setTimeout(() => {
        updateErrors.style.display = 'none';
    }, 10000)
}

/*
* MOBILE NAVBAR TOGGLER
* */
const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");

const toggleNav = () => {
    navbar.classList.toggle("active");
    document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNav);

/**
 * HEADER ANIMATION
 * When scrolled donw to 100px header will be active
 */
const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        header.classList.add("active");
        backTopBtn.classList.add("active");
    } else {
        header.classList.remove("active");
        backTopBtn.classList.remove("active");
    }
});

(function() {
    $(".skills-prog li")
        .find(".skills-bar")
        .each(function(i) {
            $(this)
                .find(".bar")
                .delay(i * 150)
                .animate(
                    {
                        width:
                            $(this)
                                .parents()
                                .attr("data-percent") + "%"
                    },
                    1000,
                    "linear",
                    function() {
                        return $(this).css({
                            "transition-duration": ".5s"
                        });
                    }
                );
        });

    $(".skills-soft li")
        .find("svg")
        .each(function(i) {
            var c, cbar, circle, percent, r;
            circle = $(this).children(".cbar");
            r = circle.attr("r");
            c = Math.PI * (r * 2);
            percent = $(this)
                .parent()
                .data("percent");
            cbar = (100 - percent) / 100 * c;
            circle.css({
                "stroke-dashoffset": c,
                "stroke-dasharray": c
            });
            circle.delay(i * 150).animate(
                {
                    strokeDashoffset: cbar
                },
                1000,
                "linear",
                function() {
                    return circle.css({
                        "transition-duration": ".3s"
                    });
                }
            );
            $(this)
                .siblings("small")
                .prop("Counter", 0)
                .delay(i * 150)
                .animate(
                    {
                        Counter: percent
                    },
                    {
                        duration: 1000,
                        step: function(now) {
                            return $(this).text(Math.ceil(now) + "%");
                        }
                    }
                );
        });
}.call(this));

