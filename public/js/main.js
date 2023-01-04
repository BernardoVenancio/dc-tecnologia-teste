$(function(){
    $(".delete-button").hover(
        function(){
            $(this).css('cursor','pointer');
        }
    );

    $(".quantidade-produto").change(function(){
        let totalProduto = $(this).val() * $(this).data('value');
        $(`#total-${$(this).data('product')}`).html(totalProduto);

        let totalCompra = 0;
        $('.total-produto').each(function(){
            totalCompra += Number($(this).html());
        });
        $("#total-compra").html(totalCompra)
    });
});