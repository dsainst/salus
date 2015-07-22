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

/*разворачивание и сворачивание редактирования контактной инфы в ЛК*/
$('.cancel').click(function(){
$('.edit').html('Редактировать');
          nom=1;
          $('.infome').slideToggle();
        $('.showclick').slideToggle();
});
        var nom=1;
    $('.edit').click(function(){
        if (nom==1) {
        $(this).html('Свернуть');
        nom=nom+2;
        $('.infome').slideToggle();
        $('.showclick').slideToggle();
        } else {
          $(this).html('Редактировать');
          nom=1;
          $('.infome').slideToggle();
        $('.showclick').slideToggle();
        }
    });
});