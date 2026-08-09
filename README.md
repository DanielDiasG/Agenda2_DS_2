🛍️ Brincos e Companhia — Cadastro de Colaboradores



📖 Sobre o projeto

Este projeto foi desenvolvido como uma aplicação web simples para realizar o cadastro de colaboradores da loja Brincos e Companhia.

O sistema apresenta um formulário no qual o usuário informa seus dados profissionais. Após o envio, as informações são encaminhadas para um arquivo PHP, que processa os dados recebidos pelo método POST e apresenta uma página de confirmação com as informações cadastradas.

O projeto demonstra a integração entre HTML, CSS e PHP, utilizando o HTML para estruturar a página, o CSS para sua aparência visual e o PHP para realizar o processamento das informações enviadas pelo formulário.

🖼️ Prévia do projeto



🚀 Funcionalidades

Cadastro do nome completo do colaborador.

Cadastro da idade.

Cadastro da profissão.

Informar o salário pretendido.

Informar experiências profissionais anteriores.

Validação dos campos obrigatórios através do atributo required.

Envio dos dados utilizando o método POST.

Processamento dos dados através do PHP.

Exibição de uma mensagem de confirmação após o cadastro.

Botão para retornar à página anterior.

Interface estilizada com CSS.

🧩 Como o programa funciona

O funcionamento do sistema pode ser dividido em duas etapas principais:

1. Formulário — Cadastro.html

O arquivo Cadastro.html apresenta o formulário de cadastro.

Os dados solicitados são:

Campo

Tipo

Obrigatório

Nome completo

Texto

✅

Idade

Numérico

✅

Profissão

Texto

✅

Salário pretendido

Numérico

✅

Experiência anterior

Área de texto

❌

O formulário utiliza:

<form method="post" action="processaCadastro.php">

Isso significa que, ao clicar no botão Enviar, os dados são enviados para o arquivo processaCadastro.php utilizando o método POST.

2. Processamento — processaCadastro.php

O PHP recebe os valores enviados pelo formulário através da variável $_POST.

Por exemplo:

$_POST['nome']
$_POST['idade']
$_POST['prof']
$_POST['salpre']
$_POST['expant']

Depois disso, o programa apresenta os dados cadastrados em uma página de confirmação.

Exemplo:

echo "<b>Nome:</b> " . $_POST['nome'];

Também é apresentada uma mensagem agradecendo a participação do colaborador.

🎨 Estilização — Agenda2_DS2.css

O arquivo Agenda2_DS2.css é responsável pela aparência da página.

Entre os recursos utilizados estão:

Cores de fundo.

Bordas arredondadas.

Sombras.

Centralização dos elementos.

Formatação dos campos do formulário.

Estilização do botão de envio.

Efeito hover no botão.

Dimensionamento da área de texto.

Formatação das imagens.

Exemplo do efeito aplicado ao botão:

input[type=submit]:hover {
    background-color: #ffffff;
    color: rgb(210, 119, 119);
    border: 1px solid #ca8c83;
}

Quando o usuário passa o mouse sobre o botão, sua aparência é alterada.

💻 Tecnologias utilizadas

HTML5



Utilizado para criar a estrutura da página, incluindo:

Títulos.

Formulário.

Campos de entrada.

Botões.

Imagens.

Área de texto.

CSS3



Utilizado para criar a aparência visual do sistema, incluindo:

Cores.

Fontes.

Espaçamentos.

Sombras.

Bordas.

Alinhamento.

Efeitos hover.

PHP



Utilizado no processamento no lado do servidor (server-side).

O PHP recebe os dados enviados pelo formulário HTML e gera a página de confirmação do cadastro.

📁 Estrutura do projeto

Daniel_DS_2_Agenda2/
│
├── Cadastro.html
├── processaCadastro.php
├── Agenda2_DS2.css
├── Loja_chat.png
│
├── ajuda com o css Chat/
│   ├── Botão forms.png
│   ├── Imagem da loja.png
│   ├── como centralizar o input.png
│   └── Textarea da experiência.png
│
└── README.md

🔄 Fluxo do sistema

┌──────────────────────┐
│     Cadastro.html    │
│                      │
│  Usuário preenche    │
│      o formulário    │
└──────────┬───────────┘
           │
           │ POST
           ▼
┌──────────────────────┐
│ processaCadastro.php │
│                      │
│ Recebe os dados      │
│ através de $_POST    │
└──────────┬───────────┘
           │
           ▼
┌──────────────────────┐
│ Página de confirmação│
│                      │
│ Dados cadastrados    │
│ são exibidos         │
└──────────────────────┘

▶️ Como executar

Como o projeto utiliza PHP, é necessário utilizar um servidor que consiga interpretar arquivos PHP.

Uma opção simples para ambiente de desenvolvimento é o XAMPP.

Passo 1 — Instalar o XAMPP

Instale e abra o XAMPP.

Passo 2 — Colocar o projeto no servidor

Copie a pasta do projeto para:

C:\xampp\htdocs\

Por exemplo:

C:\xampp\htdocs\Daniel_DS_2_Agenda2\

Passo 3 — Iniciar o Apache

No painel do XAMPP, inicie o serviço:

Apache → Start

Passo 4 — Abrir o projeto

No navegador, acesse:

http://localhost/Daniel_DS_2_Agenda2/Cadastro.html

Depois, preencha o formulário e clique em Enviar.

🛠️ Ferramentas utilizadas

HTML5

CSS3

PHP

XAMPP

Visual Studio Code

Git

📚 Objetivo acadêmico

O projeto tem como objetivo demonstrar conhecimentos básicos de desenvolvimento web, principalmente:

Estruturação de páginas com HTML.

Estilização com CSS.

Criação e validação de formulários.

Envio de informações utilizando POST.

Processamento server-side com PHP.

Organização de arquivos de um projeto web.

Utilização de servidor local para execução de PHP.

👨‍💻 Autor

Daniel Gomes

Projeto desenvolvido para estudos de Desenvolvimento de Sistemas / Tecnologia da Informação.

📌 Observação

Este projeto é uma aplicação acadêmica e, atualmente, os dados do formulário são apenas recebidos e exibidos pelo PHP. Não há um banco de dados conectado ao sistema.

Uma possível evolução seria adicionar MySQL para armazenar os cadastros permanentemente.
