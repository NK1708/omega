$(document).ready(function() {
    $('.reviews__slider').owlCarousel({
        loop: true,
        items: 1,
        margin: 15,
        center: true,
        nav: true,
        navText: ' ',
        responsive: {
            1200: {
                items: 3
            },
            768: {
                center: false,
                items: 2
            }
        }
    });
});

$('.service__btn').addClass('form__btn');

$('.table a').addClass('form__btn');

$('.form__btn').click(function(e) {
    e.preventDefault();
    $('#formModal').arcticmodal();
});


$(function() {

    (function quantityProducts() {
        var $quantityArrowMinus = $(".quantity-arrow-minus");
        var $quantityArrowPlus = $(".quantity-arrow-plus");
        var $quantityNum = $(".quantity-num");

        $quantityArrowMinus.click(quantityMinus);
        $quantityArrowPlus.click(quantityPlus);

        function quantityMinus() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 1);
            }
        }

        function quantityPlus() {
            $quantityNum.val(+$quantityNum.val() + 1);
        }
    })();

});
