<style>
body{
    margin-left: 30px;
    margin-right: 30px;
    background-color: #e1cfcf;
}


h1 {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: #ffffff;
    text-shadow: 2px 2px 5px #d9c556;
    box-shadow: 5px 5px 10px #ffffff;
    background-color: #ca8c83;
    border-radius: 10px;
}



div {
    margin-left: 20%;
    margin-right: 20%;
    padding: 20px;
    background-color: #ca8c83;
    border-radius: 10px;

}
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

img{
    border-radius: 10px;
    box-shadow: 5px 5px 10px #ffffff;
    margin-left: 10%;
    
    
}
p{ text-align: center;
    color: #100f0f;
    background-color: #ffffff; 
    margin-left: 20%;
    margin-right: 20%;
    border-radius: 10px;


}

#informacoes{
    text-align: center;
    background-color: #ffffff; 
    margin-left: 20%;
    margin-right: 20%;
    border-radius: 10px;
}
</style>

<?php

echo "<h1>Cadastro realizado com sucesso!</h1>";
echo "<div id='informacoes'><b>Nome:</b> " .$_POST['nome']. "<br>";
echo "<b>Idade:</b> " .$_POST['idade']. "<br>";
echo "<b>Profissão:</b> " .$_POST['prof']. "<br>";
echo "<b>Salário pretendido:</b> " .$_POST['salpre']. "<br>";
echo "<b>Experiência anterior:</b> " .$_POST['expant']. " </div><br>";
echo "<p>Obrigado ".$_POST['prof'].", ".$_POST['nome']. " pela colaboração, a loja Brincos e Companhia agradece! <br> 
experiência: ".$_POST['expant'].".</p>";

echo "<input type='button' value='Voltar' onclick='history.go(-1)'> <br><br>";

echo "<div><img src='Loja_chat.png' alt='Fundo da página' width='80%' height='80%'></div>";