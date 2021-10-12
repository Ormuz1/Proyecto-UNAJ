window.addEventListener('load', function(){
    new Glider(document.querySelector(".carousel_lista"), {
        slidesToShow: 1,
        dots: '.carousel_indicadores',
        draggable: false,
        arrows: {
          prev: document.querySelector('.carousel_anterior'),
          next: document.querySelector('.carousel_siguiente')
        }
    });
});