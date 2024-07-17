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
    var nome = document.getElementById("inome").value
    var senha = document.getElementById("isenha").value

    let inputs = [nome, senha]

    let i = 0
    for (let input  of inputs) {
        if (input !== "" && senha.length >= 5) {
            i += 0
        } else {
            i += 1
        }
    }   

    if (i != 0) {
        alert("Preencha os campos corretamente!")
    } else {
        alert("Cadastro realizado com sucesso!")
    }
}