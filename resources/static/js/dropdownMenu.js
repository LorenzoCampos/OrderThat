const menuContainer = document.querySelector(".menu-container");
const menuButton = document.querySelector(".menu-button");

// Abrir menu
menuButton.addEventListener("click", () => {
  menuContainer.classList.toggle("show");
});

// Cerrar menu si hago click fuera.
 window.addEventListener("click", (event) => {
  if (!menuContainer.contains(event.target)) {
    menuContainer.classList.remove("show");
  }
});