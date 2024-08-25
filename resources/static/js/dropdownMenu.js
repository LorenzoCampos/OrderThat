/* const MENU_CONTAINER = document.querySelector(".menu-container");
const MENU_BUTTON = document.querySelector(".menu-button");

// Abrir menu
MENU_BUTTON.addEventListener("click", () => {
  MENU_CONTAINER.classList.toggle("show");
});

// Cerrar menu si hago click fuera.
 window.addEventListener("click", (event) => {
  if (!MENU_CONTAINER.contains(event.target)) {
    MENU_CONTAINER.classList.remove("show");
  }
}); */

// Selecciona todos los contenedores de menú y botones de menú
const MENU_CONTAINERS = document.querySelectorAll(".menu-container");
const MENU_BUTTONS = document.querySelectorAll(".menu-button");

MENU_BUTTONS.forEach((button, index) => {
  const MENU_CONTAINER = MENU_CONTAINERS[index];

  // Abrir el menú correspondiente
  button.addEventListener("click", (event) => {
    event.stopPropagation();
    MENU_CONTAINERS.forEach((container, i) => {
      if (i !== index) {
        container.classList.remove("show");
      }
    });
    MENU_CONTAINER.classList.toggle("show");
  });
});

// Cerrar el menú si hago click fuera de cualquier menú
window.addEventListener("click", () => {
  MENU_CONTAINERS.forEach((container) => {
    container.classList.remove("show");
  });
});