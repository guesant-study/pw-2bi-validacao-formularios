function validarFormulario() {
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
  const dataNascimentoInput = document.getElementById("dataNascimentoInput");
  const nomeInput = document.getElementById("nome");
  const emailInput = document.getElementById("email");
  const telefoneInput = document.getElementById("telefone");
  const cidadeInput = document.getElementById("cidade");
  const estadoInput = document.getElementById("estado");
  const enderecoInput = document.getElementById("endereco");
  const generoInput = document.getElementById("genero");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    // Validar campos obrigatórios
    if (
      !dataNascimentoInput.value ||
      !nomeInput.value ||
      !emailInput.value ||
      !telefoneInput.value ||
      !cidadeInput.value ||
      !estadoInput.value ||
      !enderecoInput.value ||
      !generoInput.value
    ) {
      alert("Por favor, preencha todos os campos obrigatórios.");
      return;
    }

    // Validar formato de data de nascimento
    if (!validarDataNascimento(dataNascimentoInput.value)) {
      alert("Data de nascimento inválida.");
      return;
    }

    // Validar formato de email usando expressão regular
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regexEmail.test(emailInput.value)) {
      alert("Email inválido.");
      return;
    }

    const regexTelefone = /^\d{10}$/; 
    if (!regexTelefone.test(telefoneInput.value)) {
      alert("Telefone inválido. Insira apenas números (10 dígitos).");
      return;
    }


    const nome = nomeInput.value;
    const nomeMinimoCaracteres = 3;
    const nomeMaximoCaracteres = 50;
    if (
      nome.length < nomeMinimoCaracteres ||
      nome.length > nomeMaximoCaracteres
    ) {
      alert(
        `O campo nome deve ter entre ${nomeMinimoCaracteres} e ${nomeMaximoCaracteres} caracteres.`
      );
      return;
    }


    alert("Cadastro realizado com sucesso!");
    form.reset();
  });
}

validarFormulario();
