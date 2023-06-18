function validarDataNascimento(dataNascimento) {
  const regexData = /^(\d{2})\/(\d{2})\/(\d{4})$/;
  if (!regexData.test(dataNascimento)) {
    return false;
  }

  const partesData = dataNascimento.split("/");
  const dia = parseInt(partesData[0]);
  const mes = parseInt(partesData[1]);
  const ano = parseInt(partesData[2]);

  if (dia < 1 || dia > 31 || mes < 1 || mes > 12 || ano < 1900 || ano > 2023) {
    return false;
  }

  return true;
}

function validarFormulario() {
  const form = document.querySelector("#cadastroForm");
  const dataNascimentoInput = document.getElementById("dataNascimentoInput");
  const telefoneInput = document.getElementById("telefone");

  dataNascimentoInput.addEventListener("input", function (event) {
    let dataNascimento = this.value;
    dataNascimento = dataNascimento.replace(/\D/g, ""); // Remove tudo o que não é dígito
    dataNascimento = dataNascimento.slice(0, 8); // Limita a data de nascimento a 8 caracteres
    dataNascimento = dataNascimento.replace(/(\d{2})(\d)/, "$1/$2"); // Coloca uma barra entre o segundo e o terceiro dígitos
    dataNascimento = dataNascimento.replace(/(\d{2})(\d)/, "$1/$2"); // Coloca uma barra entre o segundo e o terceiro dígitos novamente (para o segundo bloco de números)
    this.value = dataNascimento;
  });

  telefoneInput.addEventListener("input", function (event) {
    this.value = this.value.replace(/\D/g, ""); // Remove tudo o que não é dígito
  });

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    event.stopPropagation();
    form.classList.add("was-validated");

    const dataNascimento = dataNascimentoInput.value;

    if (!dataNascimento || !validarDataNascimento(dataNascimento)) {
      dataNascimentoInput.setCustomValidity(
        "Por favor, insira uma data de nascimento válida."
      );
    } else {
      dataNascimentoInput.setCustomValidity("");
    }

    if (form.checkValidity()) {
      form.submit();
    }
  });
}

window.addEventListener("load", validarFormulario);
