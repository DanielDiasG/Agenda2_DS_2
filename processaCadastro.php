// style para a estilização do php //
<style>
    /*margem e cor de fundo*/
body{
    margin-left: 30px;
    margin-right: 30px;
    background-color: #e1cfcf;
}

/* estilo para o título */
h1 {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: #ffffff;
    text-shadow: 2px 2px 5px #d9c556;
    box-shadow: 5px 5px 10px #ffffff;
    background-color: #ca8c83;
    border-radius: 10px;
}


 /* estilo para a div de fundo da imagem*/
div {
    margin-left: 20%;
    margin-right: 20%;
    padding: 20px;
    background-color: #ca8c83;
    border-radius: 10px;

}

/* estilo para o input de voltar*/
input{
    padding: 5px;
    margin: 5px;
   font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    background-color: #ca8c83;
    color: white;
    text-shadow: 2px 2px 5px #d3c67a;
    border: none;
    padding: 10px 20px;
    display: block;
    margin: 0 auto;
    box-sizing: border-box;

}

/* estilo para a imagem */
img{
    border-radius: 10px;
    box-shadow: 5px 5px 10px #ffffff;
    margin-left: 10%;
    
    
}

/* estilo para o parágrafo */
p{ text-align: center;
    color: #100f0f;
    background-color: #ffffff; 
    margin-left: 20%;
    margin-right: 20%;
    border-radius: 10px;


}
/* estilo para a div de informações */
#informacoes{
    text-align: center;
    background-color: #ffffff; 
    margin-left: 20%;
    margin-right: 20%;
    border-radius: 10px;
}
</style>

/* php */
<?php
   /* título */
echo "<h1>Cadastro realizado com sucesso!</h1>";

/* informações do cadastro - criação das variáveis ------------------------------------------------------- */
echo "<div id='informacoes'><b>Nome:</b> " .$_POST['nome']. "<br>";
echo "<b>Idade:</b> " .$_POST['idade']. "<br>";
echo "<b>Profissão:</b> " .$_POST['prof']. "<br>";
echo "<b>Salário pretendido:</b> " .$_POST['salpre']. "<br>";
echo "<b>Experiência anterior:</b> " .$_POST['expant']. " </div><br>";


/* agradecimento pelo preenchimento do formulário */
echo "<p>Obrigado ".$_POST['prof'].", ".$_POST['nome']. " pela colaboração, a loja Brincos e Companhia agradece! <br> 
experiência: ".$_POST['expant'].".</p>";

/* botão de voltar */
echo "<input type='button' value='Voltar' onclick='history.go(-1)'> <br><br>";

/* imagem da loja*/
echo "<div><img src='Loja_chat.png' alt='Fundo da página' width='80%' height='80%'></div>";