const defaultFile = '../resources/static/img/default/default.png';

const file = document.getElementById( 'image' );
const img = document.getElementById( 'preview-image' );
const imgPreview = document.getElementById( 'view-image' );

file.addEventListener( 'change', e => {
  if( e.target.files[0] ){
    const reader = new FileReader( );
    reader.onload = function( e ){
      img.src = e.target.result;
      imgPreview.src = e.target.result;
    }
    reader.readAsDataURL(e.target.files[0])
  }else{
    img.src = defaultFile;
    imgPreview.src = defaultFile;
  }
} );


let inputName = document.querySelector('#name');
let inputPrice = document.querySelector('#price');
let inputDescription = document.querySelector('#description');

let previewName = document.getElementById('view-name');
let previewPrice = document.getElementById('view-price');
let previewDescription = document.getElementById('view-description');

inputName.addEventListener('keyup',()=>{
  previewName.innerHTML = inputName.value;
});

inputPrice.addEventListener('keyup',()=>{
  previewPrice.innerHTML = inputPrice.value;
});

inputDescription.addEventListener('keyup',()=>{
  previewDescription.innerHTML = inputDescription.value;
});