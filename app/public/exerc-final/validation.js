const nameInput = document.getElementById("name");
const matriculaInput = document.getElementById("matricula");
const nota1Input = document.getElementById("nota1");
const nota2Input = document.getElementById("nota2");
const button = document.getElementById("button");

button.addEventListener("click", function (event) {
  if (!nameInput.value.length) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nome é obrigatório",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (!matriculaInput.value.length) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo matrícula é obrigatório",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (!nota1Input.value.length) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 1 é obrigatório",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (!nota2Input.value.length) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 2 é obrigatório",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (isNaN(nota1Input.value)) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 1 deve ser um número",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (isNaN(nota2Input.value)) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 2 deve ser um número",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }

  if (nota1Input.value < 0 || nota1Input.value > 10) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 1 deve ser entre 0 e 10",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
  if (nota2Input.value < 0 || nota1Input.value > 10) {
    event.preventDefault();
    Swal.fire({
      title: "Erro",
      text: "O campo nota 2 deve ser entre 0 e 10",
      icon: "error",
      confirmButtonText: "OK",
    });
    return;
  }
});
