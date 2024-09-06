

// var priceStatic = parseInt(document.getElementById(`price-static`).textContent);

// var amount = parseInt(document.getElementById(`amount`).textContent);

// console.log(amount);

// if (amount <= 1) {

//     document.getElementById(`minus`).removeAttribute(`href`);

//     document.getElementById(`price`).innerHTML += priceStatic;

// } else if (amount > 1) {

//     document.getElementById(`price`).innerHTML += priceStatic * amount;

// }

// --------------------------------------------------------------------------------------------------------------------------------------------------------

var amount = document.querySelectorAll(`.amount`);

console.log(amount);

var priceAllProducts = document.querySelectorAll(`.price`);

console.log(priceAllProducts);

var priceAll = 0;

priceAllProducts.forEach(element => {
    priceIncompleto = parseInt(element.firstChild.data);
    priceAll += priceIncompleto;
});

if (priceAllProducts.length == 1) {
    document.getElementById(`products`).innerHTML = `Producto`;
} else {
    document.getElementById(`products`).innerHTML = `Productos (${priceAllProducts.length})`;
}

document.getElementById(`total-p`).innerHTML = `$ ${priceAll}`;
