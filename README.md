# Agenda 2 Desenvolvimento de Sistemas 2


# O projeto tem como objetivo demonstrar conhecimentos básicos de desenvolvimento web, principalmente:
-Estruturação de páginas com HTML.

-Estilização com CSS.

-Criação e validação de formulários.

-Envio de informações utilizando POST.

-Processamento server-side com PHP.

-Organização de arquivos de um projeto web.

-Utilização de servidor local para execução de PHP.


# O formulário utiliza:

form method="post" action="processaCadastro.php">

Isso significa que, ao clicar no botão Enviar, os dados são enviados para o arquivo processaCadastro.php utilizando o método POST.

#  RECURSOS UTILIZADOS

#HTML


#No HTML (Cadastro.html):
<html, <head> e <body> — estrutura básica da página.
<title — título da página.
<h1 — título principal.
<form — criação do formulário.
method="post" — envio dos dados pelo método POST.
action="processaCadastro.php" — define o arquivo PHP que receberá os dados.
<label — identificação dos campos.
<input type="text" — entrada de texto.
<input type="number" — entrada de números.
<input type="submit" — botão para enviar o formulário.
required — torna campos obrigatórios.
<textarea — campo para textos maiores, como experiência profissional.
<img — utilização de imagem na página.
placeholder — texto de orientação dentro dos campos.
<link rel="stylesheet" — conexão do HTML com o arquivo CSS.

    
#🎨 CSS


#No CSS (Agenda2_DS2.css):

Seletores de elementos, como body, input, textarea e h1.
Classes e/ou IDs para aplicar estilos específicos.
background-color — cores de fundo.
color — cores dos textos.
font-family — definição das fontes.
font-size — tamanho das letras.
width e height — dimensões dos elementos.
padding — espaço interno.
margin — espaçamento externo.
border — bordas.
border-radius — cantos arredondados.
box-shadow — sombras.
text-align — alinhamento dos textos.
display — controle de exibição dos elementos.
:hover — alteração do botão quando o mouse passa sobre ele.
Estilização específica de input[type=submit].
Estilização da <textarea>.



#🐘 PHP




#No PHP (processaCadastro.php):

$_POST — recebimento dos dados enviados pelo formulário.
Variáveis para trabalhar com os dados recebidos.
echo — exibição das informações na página.
Concatenação com . para juntar textos e valores.
Processamento server-side, ou seja, o código PHP é executado no servidor.
Recebimento de diferentes campos, como:
nome
idade
prof
salpre
expant

HTML dentro do PHP para montar a página de resposta.
