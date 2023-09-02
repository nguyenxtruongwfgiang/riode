// const cartQuantity = document.querySelector('.cart-quantity');
const minus = document.querySelectorAll('.quantity-minus');
const plus = document.querySelectorAll('.quantity-plus');
minus.forEach((button) => {
    button.addEventListener('click', (event) => {
        const cartQuantity = event.target.parentNode.querySelector('.cart-quantity');
        let quantity = parseInt(cartQuantity.value);
        if (quantity > 1) {
            quantity--;
            cartQuantity.value = quantity;
        }
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
