const menu = document.getElementById('menu');

function adc_menu(event) {
    console.log(event.target);
    console.log("adc_menu function called");
    if (!menu.contains(event.target) && event.target.id !== 'botao') {
        menu.classList.remove("aparecer");
        //!menu.contains ve se esta fora do menu, se nao tivesse a ! veria se esta dentro//
    } else {
        menu.classList.toggle("aparecer");
    }
}

document.addEventListener("click", adc_menu);

function cadastro() {
  var cpf = document.getElementById("icpf").value;
  var rg = document.getElementById("irg").value;
  var email = document.getElementById("iemail").value;
  var nome = document.getElementById("inome").value;
  var senha = document.getElementById("isenha").value;
  var premium = document.getElementById("ipremium").value;

  if (
    cpf === "" ||
    rg === "" ||
    email === "" ||
    nome === "" ||
    senha === "" ||
    email.indexOf("@") === -1 ||
    senha.length < 5 ) {
    alert("Por favor, preencha todos os campos corretamente!");
    return;
  }

//continuar dps
  var existente = new XMLHttpRequest(); //CRIANDO UMA VARIAVEL QUE "CHAMA A REQUSICAO HTTP"


 existente.open("POST", "processa.php", true); //parametros da requisicao


 existente.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //pega o valor???


 existente.send("cpf=" + cpf); //o jeito que vai ficar


 existente.onreadystatechange = function() { //vai ser chamada sempre que a operação mudar
    if  (existente.readyState === 4 && existente.status === 200) {// =4 operacao completa =200 operacao bem sucedida 
      var digitado = existente.responseText; //vendo se o existente é igual o valor digitado
      if (digitado === "true") {
        alert("CPF já existe no banco de dados!");
      } else {
        
      }
    }
  };
}