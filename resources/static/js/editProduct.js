const file = document.getElementById( 'image' );
const img = document.getElementById( 'preview-image' );

const defaultFile = img.src;

file.addEventListener( 'change', e => {
  if( e.target.files[0] ){
    const reader = new FileReader( );
    reader.onload = function( e ){
      img.src = e.target.result;
    }
    reader.readAsDataURL(e.target.files[0])
  }else{
    img.src = defaultFile;
  }
});

const ADD_INPUT = document.getElementById( 'add-input' );
const DIV_INGREDIENT = document.getElementById( 'div-ingredient' );

let counter = 0;

ADD_INPUT.addEventListener('click', function() {

  counter++;

  const NEW_DIV = document.createElement('div');

  NEW_DIV.setAttribute('class', 'edit-product-form__ingredients__ingredient-container__item-form');
  NEW_DIV.setAttribute('id', 'div-ingredient');

  const NEW_LABEL = document.createElement('label');

  NEW_LABEL.setAttribute('for', 'input-ingredient');
  NEW_LABEL.textContent = 'Nuevo Ingrediente ' + counter;

  const NEW_INPUT = document.createElement('input');

  NEW_INPUT.setAttribute('type', 'text');
  NEW_INPUT.setAttribute('name', 'new-ingredient-' + counter);
  NEW_INPUT.setAttribute('id', 'input-ingredient');

  NEW_DIV.appendChild(NEW_LABEL);
  NEW_DIV.appendChild(NEW_INPUT);

  DIV_INGREDIENT.appendChild(NEW_DIV);
});



document.getElementById("buttonModifProduct").addEventListener("click", function() {
  alert("Se ha modificado el producto.");

  window.location.href = "../public/";
});