/*получаем изображение*/
/*из элемента id=img-slider*/
var imgSlider = document.getElementById('img-slider');
/*все элементы с тегом img*/
var imgNumeric = imgSlider.getElementsByTagName('img');
/*получаем количество слайдов*/
/**/
/*задаем номер первого слайда*/
var slideIndex = 1;
showSlides(slideIndex);
/**/

/*действие prev next*/
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    if (slideIndex > 1) {
        imgNumeric[0].src = imgNumeric[1].src;
        imgNumeric[1].src = imgNumeric[2].src;
        imgNumeric[2].src = imgNumeric[3].src;
        imgNumeric[3].src = imgNumeric[0].src;
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        imgNumeric[0].src = imgNumeric[3].src;
        imgNumeric[3].src = imgNumeric[2].src;
        imgNumeric[2].src = imgNumeric[1].src;
        imgNumeric[1].src = imgNumeric[0].src;
        slideIndex = 1;
    }
}
/*MENU*/
/**/
$('#menu').click(function () {
    if ($('#menu-open').hasClass("open")) {
        $("#menu-open").removeClass("open");
        $("#menu-center-open").removeClass("open");
    } else {
        $("#menu-open").addClass("open");
        $("#menu-center-open").addClass("open");
    }
});
/**/
/*MENU*/

var slideNum = 1;
showPic(slideNum);

// Next/previous controls
function addNumslides(n) {
    showPic(slideNum += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showPic(slideNum = n);
}

function showPic(n) {
    var i;
    var slides = document.getElementsByClassName("photo-slide");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideNum = 1}
    if (n < 1) {slideNum = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideNum-1].style.display = "block";
    dots[slideNum-1].className += " active";
}