const archivo = document.querySelector(".archivo");
const perro = document.querySelector(".imgRegister img");

archivo.addEventListener("change", () => {
  if (archivo.value == "") {
    perro.src = "https://i.postimg.cc/TPSjLdnb/ejemplo.webp";
  } else {
    perro.src = archivo.value;
  }
  console.log(perro.src);
});
