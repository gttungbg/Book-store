function cartUpdate(event) {
    event.preventDefault();
    let urlUpdateCart = $('.update-cart-url').data('url');
    let id = $('.cart_update').data('id');
    console.log(id);
    // let quantity = $(this).parents('tr').find('input.cart_quantity_input').val();
    // $.ajax({
    //     type: "GET",
    //     url: urlUpdateCart,
    //     data: {id: id, quantity: quantity},
    //     success: function (data) {
    //         $('.cart-wrapper').html(data.cart_component);
    //     },
    //     error: function () {
    //         alert('error');
    //     }
    // });
}

$(function () {
    $(document).on('click', '.cart_update', cartUpdate);
})