/* Alertas de myAddress */
function deleteAddress(id) {

  if (confirm("Estas seguro?")) {
    window.location.href = "../public/deleteAddress/" + id;
    alert("Se ha borrado su dirección!");
  }
}

document.getElementById("buttonModifAddress").addEventListener("click", function() {
  alert("Se ha modificado su dirección!");

  window.location.href = "../public/myAddress";
});