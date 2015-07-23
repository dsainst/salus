$(function() {
$('.slideme').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        dots: true,
        swipe: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 4000
    });

$('.carousel').slick({
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        dots: false,
        prevArrow: '<div class="absol"><a data-role="none" class="slick-prev2" aria-label="previous">Предыдущий отзыв</a></div>',
        nextArrow: '<div class="absol2"><a data-role="none" class="slick-next2" aria-label="next">Следующий отзыв</a></div>',
        swipe: true,
        variableWidth: false,
        autoplay: false,
        autoplaySpeed: 4000
    });

/*разворачивание и сворачивание редактирования контактной инфы в ЛК*/
$('.cancel').click(function(){
$('.edit').html('Редактировать');
          nom=1;
          $('.infome').stop().slideToggle();
        $('.showclick').stop().slideToggle();
});
        var nom=1;
    $('.edit').click(function(){
        if (nom==1) {
        $(this).html('Свернуть');
        nom=nom+2;
        $('.infome').stop().slideToggle();
        $('.showclick').stop().slideToggle();
        } else {
          $(this).html('Редактировать');
          nom=1;
          $('.infome').stop().slideToggle();
        $('.showclick').stop().slideToggle();
        }
    });

    $('.edit2').click(function(e){
        e.preventDefault();
        $(this).next().stop().slideToggle();
    });
});