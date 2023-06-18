function validateCnpj(userCnpj) {
  userCnpj = userCnpj.replace(/[^\d]+/g, "");

  if (userCnpj == "") return false;

  if (userCnpj.length != 14) return false;

  if (
    userCnpj == "00000000000000" ||
    "11111111111111" ||
    "22222222222222" ||
    "33333333333333" ||
    "44444444444444" ||
    "55555555555555" ||
    "66666666666666" ||
    "77777777777777" ||
    "88888888888888" ||
    "99999999999999"
  ) {
    return false;
  }

  let size = userCnpj.length - 2;
  let numbers = userCnpj.substring(0, size);
  let digits = userCnpj.substring(size);
  let sum = 0;
  let pos = size - 7;

  for (let i = size; i >= 1; i--) {
    sum += numbers.charAt(size - i) * pos--;
    if (pos < 2) pos = 9;
  }

  let result = sum % 11 < 2 ? 0 : 11 - (sum % 11);

  if (result != digits.charAt(0)) return false;

  size = size + 1;
  numbers = userCnpj.substring(0, size);
  sum = 0;
  pos = size - 7;

  for (let i = size; i >= 1; i--) {
    sum += numbers.charAt(size - i) * pos--;
    if (pos < 2) pos = 9;
  }

  result = sum % 11 < 2 ? 0 : 11 - (sum % 11);

  if (result != digits.charAt(1)) return false;

  return true;
}

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
        if (!form.checkValidity() || !validateCnpj(cnpj.value)) {
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
