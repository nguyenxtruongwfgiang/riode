const cartQuantity = document.querySelector('.cart-quantity');
const minus = document.querySelector('.quantity-minus');
const plus = document.querySelector('.quantity-plus');
const min = 0;

minus.addEventListener('click', (event) => {
    cartQuantity.value--;
});

plus.addEventListener('click', (event) => {
    cartQuantity.value++;
});
