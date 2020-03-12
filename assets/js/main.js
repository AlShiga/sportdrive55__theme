jQuery(document).ready(function($) {
    $(".basket-btn_counter").each(function() {
        $(this).html($(this).html().replace(/[\s()-]+/gi,""));
    });
    $("li.wc_payment_method payment_method_cod").children().each(function() {
        $(this).html($(this).html().replace(/доставке/gi,"получении"));
    });
    
    $(".woocommerce-product-gallery__image").click(function(){
    $(".woocommerce-product-gallery__trigger").trigger('click');
    });

})
