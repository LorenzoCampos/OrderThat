const MENU_CONTAINER = document.querySelector(".user-container");
const MENU_BUTTON = document.querySelector(".user-container__button");

// Abrir menu
MENU_BUTTON.addEventListener("click", () => {
  MENU_CONTAINER.classList.toggle("show");
});

// Cerrar menu si hago click fuera.
 window.addEventListener("click", (event) => {
  if (!MENU_CONTAINER.contains(event.target)) {
    MENU_CONTAINER.classList.remove("show");
  }
});