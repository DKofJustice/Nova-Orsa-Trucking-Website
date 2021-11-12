// Variables

let CTAbutton = document.getElementsByClassName("CTA-btn")[0];
let contactSection = document.getElementsByClassName("contact-section")[0];

let menuList = document.querySelectorAll(".menu-list-item");

let mobileMenuList = document.querySelectorAll(".mobile-list-item");

let header = document.querySelector("header");

let hamburgerMenu = document.
    getElementsByClassName("hamburger-menu")[0];
let sideMenuMobile = document.
    getElementsByClassName("side-menu-mobile")[0];

let container = document.
    getElementsByClassName("container")[0];

let hamClicked = false;

let pageTopButton = document.getElementsByClassName("page-top-button")[0];


//CTA button scrolls to the Quote Section

CTAbutton.addEventListener("click", () => {
    yContactSect = contactSection.getBoundingClientRect().top + 
    window.scrollY;
    const header = 150;
    const contactPos = yContactSect - header;

    window.scrollTo({top: contactPos, behavior: "smooth"});
});


//Header menu items scroll to each section of the page

menuList.forEach(item => {
    item.addEventListener("click", () => {
        el = document.getElementsByClassName
        (item.getAttribute("id"))[0];

        const y = el.getBoundingClientRect().top + window.scrollY;
        const header = 120;
        const elPosition = y - header;

        window.scrollTo({top: elPosition, behavior: "smooth"});

        if (el.className === "homepage") {
            window.scrollTo({top: 0, behavior: "smooth"});
        }
    })
});


mobileMenuList.forEach(item => {
    item.addEventListener("click", () => {

        let el = document.getElementsByClassName
        (item.getAttribute("id"))[0];

        console.log(el)

        const y = el.getBoundingClientRect().top + window.scrollY;
        const header = 40;
        const elPosition = y - header;

        window.scrollTo({top: elPosition, behavior: "smooth"});

        if (hamClicked === true) {
            hamClicked = false;
            sideMenuMobile.classList.remove("side-menu-toggle");
        }

        if (el.className === "homepage") {
            window.scrollTo({top: 0, behavior: "smooth"});
        }
    })
});




//Header remains on the top of the image at scroll

document.addEventListener("scroll", () => {

    //Desktop View

    if (window.scrollY > 0  && window.screen.width > 500) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }

    //Mobile View

    if (window.scrollY > 0  && window.screen.width < 500) {
        header.classList.add("sticky-mobile");
    } else {
        header.classList.remove("sticky-mobile");
    }
});



//Display and hide the side menu on mobile devices

hamburgerMenu.addEventListener("click", () => {
    if (hamClicked === false) {
        hamClicked = true;
        sideMenuMobile.classList.add("side-menu-toggle");
    } else if (hamClicked === true) {
        hamClicked = false;
        sideMenuMobile.classList.remove("side-menu-toggle");
    }
})


// Scroll Up button scroll to the top of the page

pageTopButton.addEventListener("click", () => {
    window.scrollTo({top: 0, behavior: "smooth"})
})