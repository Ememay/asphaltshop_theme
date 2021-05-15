/*header*/
const menu = document.querySelector('header .container ul');

// menu hover underline
    spanHtml = " <span id='special-menu-underline'></span>",
    wpMenuUl = document.querySelector("#menu-main-menu");
wpMenuUl.innerHTML += spanHtml;
const specLis = document.querySelectorAll("header .container ul li"),
    specUnderline = document.querySelector("#special-menu-underline");
specLis.forEach(e => {
    e.addEventListener("mouseenter", e => {
        specUnderline.style.left = e.target.offsetLeft + "px", 
		specUnderline.style.width = e.target.offsetWidth + "px"
    })
});


// main page title typing animation
var specparent = document.querySelector("section"),
    specarea = document.querySelector(".main-page-banner h1");
if (specparent.classList.contains("front-page")) {
    var textspec = "فروشگاه اینترنتی آسفالت",
        ii = 0;

    function showspectitle() {
        ii < textspec.length && (specarea.innerHTML += textspec.charAt(ii), ii++, setTimeout(showspectitle, 150))
    }
    window.addEventListener("load", () => showspectitle())
}




// accardion
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const e = this.getAttribute("aria-expanded");
    for (i = 0; i < items.length; i++) items[i].setAttribute("aria-expanded", "false");
    "false" == e && this.setAttribute("aria-expanded", "true")
}
items.forEach(e => e.addEventListener("click", toggleAccordion));


/*popup*/
if (specparent.classList.contains("single-product")) {
    if (document.querySelector(".product").classList.contains("product_cat-hoodie")) {
        window.addEventListener("load", popupsetup);
        const e = document.querySelector(".popup-container");

        function popupsetup() {
            setTimeout(function() {
                e.style.opacity = "1";
                e.style.pointerEvents = "all";
            }, 20000)
        }
        document.querySelector(".popup-container .close-btn").addEventListener("click", () => {
            e.style.display = "none"
        })
    }
}
