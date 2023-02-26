let product_price = document.querySelector(".product_price");
let product_quantity = document.querySelector(".product_quantity");
let subTotal = document.querySelector(".subTotal");
let all_subtotal = document.querySelector(".all_subtotal");
let all_total = document.querySelector(".all_total");

product_quantity.addEventListener("click", () => {
    let subTotal_value = subTotal.textContent.slice(1);
    let product_price_value = product_price.textContent.slice(1);
    let product_quantity_value = product_quantity.value;
    if (product_quantity_value > 0) {
        subTotal.innerHTML = "$" + product_price_value * product_quantity_value + ".00";
    } else {
        return;
    }
});
