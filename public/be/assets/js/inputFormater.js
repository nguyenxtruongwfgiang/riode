const couponName = document.querySelector('#coupon_name');

couponName.addEventListener('input', () => {
    couponName.value = couponName.value.toUpperCase();
});
