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

const addInput = document.getElementById( 'add-input' );
const divIngredient = document.getElementById( 'div-ingredient' );

let counter = 0;

addInput.addEventListener('click', function() {

  counter++;

  const newDiv = document.createElement('div');

  newDiv.setAttribute('class', 'edit-product-form__ingredients__ingredient-container__item-form');
  newDiv.setAttribute('id', 'div-ingredient');

  const newLabel = document.createElement('label');

  newLabel.setAttribute('for', 'input-ingredient');
  newLabel.textContent = 'Ingrediente';

  const newInput = document.createElement('input');

  newInput.setAttribute('type', 'text');
  newInput.setAttribute('name', 'new-ingredient-' + counter);
  newInput.setAttribute('id', 'input-ingredient');

  newDiv.appendChild(newLabel);
  newDiv.appendChild(newInput);

  divIngredient.appendChild(newDiv);
});