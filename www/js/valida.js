function validarFormulario() {
  function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, "");
    if (cpf.length !== 11) {
      return false;
    }

    if (/^(\d)\1+$/.test(cpf)) {
      return false;
    }

    let sum = 0;
    for (let i = 0; i < 9; i++) {
      sum += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let remainder = sum % 11;
    let digit = remainder < 2 ? 0 : 11 - remainder;
    if (parseInt(cpf.charAt(9)) !== digit) {
      return false;
    }

    sum = 0;
    for (let i = 0; i < 10; i++) {
      sum += parseInt(cpf.charAt(i)) * (11 - i);
    }

    remainder = sum % 11;
    digit = remainder < 2 ? 0 : 11 - remainder;
    if (parseInt(cpf.charAt(10)) !== digit) {
      return false;
    }

    return true;
  }

  function validarDataNascimento(dataNascimento) {
    const regexData = /^(\d{2})\/(\d{2})\/(\d{4})$/;
    if (!regexData.test(dataNascimento)) {
      return false;
    }

    const partesData = dataNascimento.split("/");
    const dia = parseInt(partesData[0]);
    const mes = parseInt(partesData[1]);
    const ano = parseInt(partesData[2]);

    if (
      dia < 1 ||
      dia > 31 ||
      mes < 1 ||
      mes > 12 ||
      ano < 1900 ||
      ano > 2023
    ) {
      return false;
    }

    return true;
  }

  const form = document.querySelector("#cadastroForm");
  const cpfInput = document.getElementById("cpfInput");
  const dataNascimentoInput = document.getElementById("dataNascimentoInput");

  cpfInput.addEventListener("input", function (event) {
    let cpf = this.value;
    cpf = cpf.replace(/\D/g, ""); // Remove tudo o que não é dígito
    cpf = cpf.slice(0, 11); // Limita o CPF a 11 caracteres
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca um ponto entre o terceiro e o quarto dígitos
    cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2"); // Coloca um ponto entre o terceiro e o quarto dígitos novamente (para o segundo bloco de números)
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Coloca um hífen entre o terceiro e o quarto dígitos
    this.value = cpf;
  });

  dataNascimentoInput.addEventListener("input", function (event) {
    let dataNascimento = this.value;
    dataNascimento = dataNascimento.replace(/\D/g, ""); // Remove tudo o que não é dígito
    dataNascimento = dataNascimento.slice(0, 8); // Limita a data de nascimento a 8 caracteres
    dataNascimento = dataNascimento.replace(/(\d{2})(\d)/, "$1/$2"); // Coloca uma barra entre o segundo e o terceiro dígitos
    dataNascimento = dataNascimento.replace(/(\d{2})(\d)/, "$1/$2"); // Coloca uma barra entre o segundo e o terceiro dígitos novamente (para o segundo bloco de números)
    this.value = dataNascimento;
  });

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    const cpf = cpfInput.value;
    const dataNascimento = dataNascimentoInput.value;

    if (!cpf || !dataNascimento) {
      alert("Por favor, preencha todos os campos.");
      return;
    }

    if (cpf.length !== 14 || !validarCPF(cpf)) {
      alert("CPF inválido.");
      return;
    }

    if (!validarDataNascimento(dataNascimento)) {
      alert("Data de nascimento inválida.");
      return;
    }

  });
}

(() => {
  "use strict";

  const forms = document.querySelectorAll(".needs-validation");

  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  validarFormulario();
})();
