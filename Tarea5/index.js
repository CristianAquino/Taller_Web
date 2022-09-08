const archivo = document.querySelector(".archivo");
const perro = document.querySelector(".perro img");

const mensaje = document.querySelector("p .mensaje");

archivo.addEventListener("change", () => {
  if (archivo.value == "") {
    perro.src = "https://i.postimg.cc/TPSjLdnb/ejemplo.webp";
  } else {
    perro.src = archivo.value;
  }
  console.log(perro.src);
});

setTimeout(() => {
  mensaje.classList.remove("active");
}, 1000);
