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

/**/


function showSlides(n) {
    if (n > 1) {
        imgNumeric[0].src = imgNumeric[1].src;
        imgNumeric[1].src = imgNumeric[2].src;
        imgNumeric[2].src = imgNumeric[3].src;
        imgNumeric[3].src = imgNumeric[0].src;
        n = 1;
    }
    if (n < 1) {
        imgNumeric[3].src = imgNumeric[2].src;
        imgNumeric[2].src = imgNumeric[1].src;
        imgNumeric[1].src = imgNumeric[0].src;
        imgNumeric[0].src = imgNumeric[3].src;
        n = 1;
    }
}
