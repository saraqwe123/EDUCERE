let cadastrar = document.getElementById("tres");
let mensagem = document.querySelector(".mostrar");
let botao_veri = document.getElementById("")
let consultar = document.getElementById("dois")

function protecao(event) {
  if (event.target === cadastrar) {
    mensagem.style.display = "block";
  } else {
    mensagem.style.display = "none";
  }
}

cadastrar.addEventListener("click", protecao);

document.addEventListener("click", function (event) {
  if (
    !mensagem.contains(event.target) &&
    event.target !== cadastrar &&
    !cadastrar.contains(event.target)
  ) {
    mensagem.style.display = "none";
  }
});

document.addEventListener("click", function(event) {
    if (event.target === botao_veri) {
        
        //aq ele tem pegar o php e ver se tem no bp papo, ou seja outro if
        //se tiver, ele vai liberar acesso pra pessoa cadastrar o item, se nao, ov innertext muda e aparece q a pessoa nao tm acesso p cadastrar ou pede pra digitsr a chave dnv 

        
    }
})

function consulta(event) {
  if (event.target == consultar) {
    //aqui tem que pegar as chaves do banco de dados e ver se ta tudo certo
     
  }
}