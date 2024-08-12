// Dark Mode

document.getElementById("darkMode").addEventListener("change", function () {
  if (this.checked) {
    document.documentElement.style.setProperty('--color-950', '#1e1e1e');
  } else {
    document.documentElement.style.setProperty('--color-950', '#1a2c32');
  }
});

