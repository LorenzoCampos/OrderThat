

let priceStatic = parseInt(document.getElementById(`price-static`).textContent);

let amount = parseInt(document.getElementById(`amount`).textContent);

console.log(amount);

if (amount <= 1) {

    document.getElementById(`minus`).removeAttribute(`href`);

    document.getElementById(`price`).innerHTML += priceStatic;

} else if (amount > 1) {

    document.getElementById(`price`).innerHTML += priceStatic * amount;

}
