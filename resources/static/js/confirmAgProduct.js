document.getElementById('.product__description-btn').addEventListener('click', function (){
    let product = document.getElementById('.product').value;

    let confirms = confirm(`Estás seguro de que queres agregar el ${product} al carrito`);

    if (confirms) {
        document.getElementById('general-container__list-products__product').innerText = `Haz agregado el ${product} correctamente.`
    }
    else {
        document.getElementById('general-container__list-products__product').innerText = `No haz agregado el ${product} correctamente.`
    }
});