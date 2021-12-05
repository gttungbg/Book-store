function addToCart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url');
    $.ajax({
        type: "GET",
        url: urlCart,
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.code === 201) {
                Swal.fire({
                    icon: 'error',
                    text: 'Add to cart fail',
                })
            }
            if (data.code === 200) {
                Swal.fire({
                    icon: 'success',
                    title: 'Oops...',
                    text: 'Add to cart complete',
                })
            }
        },
        error: function (data) {

        }
    })
}
$(function () {
$('.add_to_cart').on('click', addToCart);
})