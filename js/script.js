

let counter = 1;

function bannerSlides () {

    const slides = $('.banner-slide');

    if (counter >= slides.length - 1) counter = - 1;

    counter++;
    slides.removeClass('active');
    slides.eq(counter - 1).addClass('active');

    console.log(counter);

    setTimeout(bannerSlides, 8000);
}

bannerSlides();


let slideCount = 0;
const slider = document.querySelector('.slider');
const slideItem = document.querySelectorAll('.car-block');
const slideItemFirst = slideItem[0];
const size = slideItemFirst.clientWidth;
const slideItemLast = slideItem[slideItem.length - 1];


const btnNext = document.querySelector('button.next');
const btnPrev = document.querySelector('button.prev');

slider.style.transform = `translateX(-${slideCount * size}px)`;

function moveToNextSlide () {

    if (slideCount > 3) {

        slideCount = - 1;
    }
    
    slideCount++;
    slider.style.transform = `translateX(-${slideCount * size}px)`;
    slider.style.transition = 'transform .25s ease-in-out';
    console.log(slideCount);
}

function moveToPrevSlide () {

    if (slideCount <= 0) {
        
        slideCount = 4;
    }
    
    slideCount--;
    slider.style.transform = `translateX(-${slideCount * size}px)`;
    slider.style.transition = 'transform .25s ease-in-out';
}



btnNext.addEventListener('click', moveToNextSlide, false);
btnPrev.addEventListener('click', moveToPrevSlide, false);


function onChangeVal () {

    const elem = document.getElementById('pickup-time').value;
    
}

let blogSlidesCount = 0;
let blogSlider = document.querySelector("#blog-slider");
let blogItem = document.querySelectorAll(".blog");
let firstItem = blogItem[0];
let blogSize = firstItem.clientWidth;


document.querySelector('#next')
.addEventListener('click', function(){
    
    if (blogSlidesCount >= blogItem.length - 1) {
        blogSlidesCount = -1;
    }

    blogSlidesCount++;
    blogSlider.style.transform = `translateX(-${blogSlidesCount * size}px)`;
    blogSlider.style.transition = 'transform .25s ease-in-out';
    console.log(blogSlidesCount)

})

document.querySelector('#prev')
.addEventListener('click', function(){

    if (blogSlidesCount <= 0) {
        blogSlidesCount = blogItem.length - 1;
    }

    blogSlidesCount--;
    blogSlider.style.transform = `translateX(-${blogSlidesCount * size}px)`;
    blogSlider.style.transition = 'transform .25s ease-in-out';
    console.log(blogSlidesCount)
})