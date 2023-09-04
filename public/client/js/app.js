const minus = document.querySelectorAll('.quantity-minus');
const plus = document.querySelectorAll('.quantity-plus');
minus.forEach((button) => {
    button.addEventListener('click', (event) => {
        const cartQuantity = event.target.parentNode.querySelector('.cart-quantity');
        let quantity = parseInt(cartQuantity.value);
        quantity--;
        cartQuantity.value = quantity;
    });
});

plus.forEach((button) => {
    button.addEventListener('click', (event) => {
        const cartQuantity = event.target.parentNode.querySelector('.cart-quantity');
        let quantity = parseInt(cartQuantity.value);
        quantity++;
        cartQuantity.value = quantity;
    });
});
$(function () {
    const TIME_TO_UPDATE = 500;

    $(document).on('click', '.btn-update-quantity', _.debounce(function (e) {
        let url = $(this).data('action')
        let id = $(this).data('id')

        let csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });

        let data = {
            quantity: $(`#productQuantity-${id}`).val()
        }

        $.post(url, data, res => {
            const cartId = res.data.id;
            const cart = res.data;

            $('#count-cart').text(res.data.count_cart);

            if (res.delete_cart_item) {
                $(`#row-${cartId}`).remove();
                $(`#cart-item-${cartId}`).remove();
            }

            $('.summary-subtotal-price').text(`${cart.total_amount.toLocaleString()}đ`)
            $('#quantity-product').text(`${cart.quantity}`)

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'cart updated successfully',
                showConfirmButton: false,
                time: 500
            })
        })
    }, TIME_TO_UPDATE))
});
