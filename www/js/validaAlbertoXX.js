const inputs = document.querySelectorAll("input");

inputs.forEach((elemento) => {
  elemento.addEventListener("blur", (evento) => {
    if (evento.target.name === "txtNome") {
      validaCampo(evento.target);
    }
  });
});

function validaCampo(campo) {
  const msgErro = campo.parentNode.querySelector("[data-erro]");

  msgErro.textContent = "";

  if (campo.name === "txtNome") {
    if (campo.value.length < 5) {
      msgErro.textContent = "O nome deve ter no mínimo 5 caracteres";
    }
  }

  switch (campo.nome) {
    case "inputCadastrarPromocaoDataInicio": {
      break;
    }

    default:
      break;
  }
}
