/* Alertas de myAddress */
  function deleteAddress(id) {

    if (confirm("Estas seguro?")){
      window.location.href = "../public/deleteAddress/" + id;
      alert("Se ha borrado su dirección!");
    }
  }