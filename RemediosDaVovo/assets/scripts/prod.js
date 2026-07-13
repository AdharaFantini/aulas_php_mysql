const botoes = document.querySelectorAll(".categoria");
const produtos = document.querySelectorAll(".produto");

botoes.forEach(botao => {

    botao.onclick = function(){

        let categoria = this.dataset.categoria;

        produtos.forEach(produto => {

            if(categoria == "todos"){
                produto.style.display = "block";
            }
            else if(produto.dataset.categoria == categoria){
                produto.style.display = "block";
            }
            else{
                produto.style.display = "none";
            }

        });

    };

});