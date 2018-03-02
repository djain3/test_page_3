var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("photo");

    if (n < 1) {
        n = slides.length-1;
        slideIndex = n;
    }

    if (n > slides.length-1) {
        n = 1;
        slideIndex = 1;
    }

    if (n == 1) {
        slides[slideIndex - 1].style.backgroundImage = 'url(image/brouser_3.png)';
        slides[slideIndex].style.backgroundImage = 'url(image/brouser_1.png)';
        slides[slideIndex + 1].style.backgroundImage = 'url(image/brouser_2.png)';
    }

    if (n == 2) {
        slides[slideIndex - 2].style.backgroundImage = 'url(image/brouser_1.png)';
        slides[slideIndex - 1].style.backgroundImage = 'url(image/brouser_2.png)';
        slides[slideIndex].style.backgroundImage = 'url(image/brouser_3.png)';
    }

    if (n == 3) {
        slides[slideIndex - 3].style.backgroundImage = 'url(image/brouser_2.png)';
        slides[slideIndex - 2].style.backgroundImage = 'url(image/brouser_3.png)';
        slides[slideIndex - 1].style.backgroundImage = 'url(image/brouser_1.png)';
    }
}
