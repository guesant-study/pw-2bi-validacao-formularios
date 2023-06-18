(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");
  const cnpj = document.querySelector(".cnpj");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          cnpj.classList.add("is-invalid");
          form.classList.add("was-validated");
        } else {
          cnpj.classList.remove("is-invalid");
          form.classList.add("was-validated");
        }
      },
      false
    );
  });
})();

const precoDeCusto = document.querySelector(".preco-de-custo");
const precoTotal = document.querySelector(".preco-total");
const quantidade = document.querySelector(".quantidade");

precoDeCusto.addEventListener("keyup", () => {
  precoTotal.value = precoDeCusto.value * quantidade.value;
});