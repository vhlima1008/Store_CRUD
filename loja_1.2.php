<!--ESTILIZAÇÃO NATIVA -------------------------------------------------------->
<style>
body{
    background-color:#888;
}
nav{
    display: flex;
    justify-content: center;
}
nav form{
    background-color: rgb(20, 20, 20);
    border-radius: 50px;
    padding: .5rem;
}
.button_clientes,.button_produtos,.button_vendas,.button_inicio,.button_procurar{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background-color: rgb(20, 20, 20);
    border: none;
    font-weight: 600;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
    cursor: pointer;
    transition-duration: .3s;
    overflow: hidden;
    position: relative;
  }
  
  .svgIcon {
    width: 12px;
    transition-duration: .3s;
  }
  
  .svgIcon path {
    fill: white;
  }
  
  .button_inicio:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(0, 255, 170);
    align-items: center;
  }
  .button_clientes:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(0, 195, 255);
    align-items: center;
  }
  .button_produtos:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(0, 68, 255);
    align-items: center;
  }
  .button_vendas:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(212, 0, 255);
    align-items: center;
  }
  .button_procurar:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .3s;
    background-color: rgb(255, 0, 93);
    align-items: center;
  }
  
  .button_inicio:hover .svgIcon,.button_clientes:hover .svgIcon, .button_produtos:hover .svgIcon, .button_vendas:hover .svgIcon,.button_procurar:hover .svgIcon {
    width: 50px;
    transition-duration: .3s;
    transform: translateY(60%);
  }
  
  .button_inicio::before {
    position: absolute;
    top: -20px;
    content: "Início";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
  }
  .button_clientes::before {
    position: absolute;
    top: -20px;
    content: "Clientes";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
  }
  .button_produtos::before {
    position: absolute;
    top: -20px;
    content: "Produtos";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
  }
  .button_vendas::before {
    position: absolute;
    top: -20px;
    content: "Vendas";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
  }
  .button_procurar::before {
    position: absolute;
    top: -20px;
    content: "Pesquisar";
    color: white;
    transition-duration: .3s;
    font-size: 2px;
  }
  
  .button_inicio:hover::before,.button_clientes:hover::before,  .button_produtos:hover::before,  .button_vendas:hover::before, .button_procurar:hover::before {
    font-size: 13px;
    opacity: 1;
    transform: translateY(30px);
    transition-duration: .3s;
  }

.form1,.form2,.form3,.inicio{
    display: flex;
}

.form_container {
  width: 45%;
}
.list_container{
    width: 55%;
}


#form{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size:10px;
    text-align: center;
    color:#f8f9fa;
    border-radius: 20px;
    padding-top:1rem;
    padding-bottom:1rem;
    padding-right:1rem;
    padding-left:1rem;
    background-color: rgb(20, 20, 20);
    transition: all .2s;
    margin-left:10%;
    margin-right:10%;
}

.form_container form input{
    color:#212529;
    padding: 0.5rem;
    margin-right: 20%;
    margin-left: 20%;
    margin-bottom: 1rem;
    border: none;
    outline: none;
    border-radius: 15px;
    background-color: white;
    box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
    transition: 300ms ease-in-out;
    outline: none;
    border: none;
    margin: none;

}

.form_container form input:hover{
    background-color: white;
    transform: scale(1.05);
    box-shadow: 13px 13px 100px #969696,
              0px 0px 30px 1px rgba(45, 59, 255, 0.37);
}

.button {
    
    padding: 1rem;
    border-radius: 10px;
    background: #333;
    justify-content: center;
    align-items: center;
    box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #444, inset -5px -5px 10px #222;
    border: none;
    font-size: 16px;
    color:#f8f9fa;
    transition: 500ms;
}
.button:hover {
    box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #222, inset -5px -5px 10px #444;
    color: #d6d6d6;
    transition: 500ms;
}

.select{
    color:#212529;
    padding: 0.5rem;
    margin-right: 20%;
    margin-left: 20%;
    margin-bottom: 1rem;
    border: none;
    outline: none;
    border-radius: 15px;
    background-color: #f8f9fa;
    box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
    transition: 300ms ease-in-out;
    outline: none;
    border: none;
    margin: none;
}
.select:hover{
    background-color: white;
    transform: scale(1.05);
    box-shadow: 13px 13px 100px #969696,
              0px 0px 30px 1px rgba(45, 59, 255, 0.37);
}

table{
    text-align:center;
    width:100%;
    margin-bottom:1rem;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size:15px;
    color:#f8f9fa;
    border-radius: 20px;
    padding-top:1rem;
    padding-bottom:1rem;
    background-color: rgb(20, 20, 20);
    transition: all .2s;
    margin-right:10%;
}

h2{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size:15px;
    text-align:center;
}

.data{
    font-size:15px;
    color:transparent;
}

.data:hover{
    color:white;
}

li{
    list-style:none;
}

a{ 
    font-size: 15px;
    text-decoration: none;
    color:white;
}

a:hover{
    text-decoration: underline;
}

img{
    width:100%;
    border-radius: 20px;
}

</style>

<!--FORMATACAO DO FORMULARIO -------------------------------------------------------->
<script>
    function formatacaoCPF(i){
        var v = i.value;

        if(isNaN(v[v.length-1])){
            i.value = v.substring(0, v.length-1);
            return;
        }
        i.setAttribute("maxlength", "14");
        if(v.length == 3 || v.length == 7) i.value += ".";
        if(v.length == 11) i.value += "-";
    }

    function formatacaoTEL(i){
        var v = i.value;

        if(isNaN(v[v.length-1])){
            i.value = v.substring(0, v.length-1);
            return;
        }
        i.setAttribute("maxlength", "15");
        if(v.length == 1) i.value = "(";
        if(v.length == 3) i.value += ") ";
        if(v.length == 10) i.value += "-";
    }
</script>


<!-- PHP ---------------------------------------------------------------------------------------->
<?php
error_reporting(0);
//CONFIGURAÇÃO DA DATABASE
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const NAMEDATABASE = 'store';

//CONECTANDO COM O XAMMP E VERIFICANDO A DATABASE
$server = HOST;
$database = NAMEDATABASE;
$conn = new PDO("mysql:host=$server", USER, PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$conn->exec($sql);
$conn = null;

try{
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    //TABELAS
    $statements=[
        "CREATE TABLE IF NOT EXISTS clientes(
            cod_clientes int(11) AUTO_INCREMENT UNIQUE NOT NULL,
            nome varchar(255) NOT NULL,
            cpf varchar(14) NOT NULL,
            telefone varchar(15) NOT NULL,
            endereco varchar(255) NOT NULL,
            nascimento date NOT NULL,
            CONSTRAINT PK_clientes PRIMARY KEY(cod_clientes)
            );"
        ,
        "CREATE TABLE IF NOT EXISTS produtos(
            cod_produtos int(11) AUTO_INCREMENT UNIQUE NOT NULL,
            nome_prod varchar(255) NOT NULL,
            desc_prod varchar(255) NOT NULL,
            preco decimal(10,2) NOT NULL,
            qtd int(11) NOT NULL,
            estoque int(11) NOT NULL,
            CONSTRAINT PK_produtos PRIMARY KEY(cod_produtos)
            );"
        ,
        "CREATE TABLE IF NOT EXISTS vendas(
            numero_vendas int(11) AUTO_INCREMENT UNIQUE NOT NULL,
            data_venda date NOT NULL,
            valor decimal(10,2) NOT NULL,
            vendedor varchar(255) NOT NULL,                          
            cod_clientes int(11) NOT NULL,
            cod_produtos int(11) NOT NULL,
            CONSTRAINT PK_vendas PRIMARY KEY(numero_vendas),
            CONSTRAINT FK_vendas_clientes FOREIGN KEY(cod_clientes) REFERENCES clientes(cod_clientes),
            CONSTRAINT FK_vendas_produtos FOREIGN KEY(cod_produtos) REFERENCES produtos(cod_produtos)         
            );"
        
    ];

    foreach($statements as $statement){
        $conn->exec($statement);
    }
}catch(PDOException $e){
    echo 'ERROR: '. $e->getMessage();
}
?>
<!--HTML E FORMULÁRIOS -------------------------------------------------------------------------->
<head>
    <title>Loja</title>
</head>
<body>

<nav>
    <form method='POST'>
    <button type='submit' name='option' value='1' class='button_inicio' id='nav0'>
        <svg class='svgIcon' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
        </svg>
    </button>
    <button type='submit' name='option' value='2' class='button_clientes' id='nav1'>
        <svg class='svgIcon' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
        </svg>
    </button>
    <button type='submit' name='option' value='3' class='button_produtos' id='nav2'>
        <svg class='svgIcon' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
        </svg>
    </button>
    <button type='submit' name='option' value='4' class='button_vendas' id='nav3'>
        <svg class='svgIcon' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
        </svg>
    </button>
    <button type='submit' name='option' value='5' class='button_procurar' id='nav4'>
        <svg class='svgIcon' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
    </form>
</nav>

<?php

if(strlen($_POST['option']) == 0){
    echo "<style>.form1{display:none;}.form2{display:none;}.form3{display:none;}.form4{display:none;}body{background-image:linear-gradient(180deg, rgba(0,255,170,1) 0%, rgba(196,255,235,1) 7%, rgba(234,255,248,1) 12%, rgba(255,255,255,1) 16%);}</style>";
}else{
$option = $_POST['option'];
switch($option){
    case "1":
        echo "<style>.inicio{display:show;}.form1{display:none;}.form2{display:none;}.form3{display:none;}.form4{display:none;}body{background-image:linear-gradient(180deg, rgba(0,255,170,1) 0%, rgba(196,255,235,1) 7%, rgba(234,255,248,1) 12%, rgba(255,255,255,1) 16%);}</style>";
        break;
    case "2":
        echo "<style>.deletar{display:none;}.form1{display:show;}.form2{display:none;}.form3{display:none;}.form4{display:none;}.inicio{display:none;}body{background-image:linear-gradient(180deg, rgba(0,195,255,1) 0%, rgba(203,243,255,1) 7%, rgba(237,251,255,1) 12%, rgba(255,255,255,1) 16%);}</style>";
        break;
    case "3":
        echo "<style>.form1{display:none;}.form3{display:none;}.form4{display:none;}.inicio{display:none;}body{background-image:linear-gradient(180deg, rgba(0,68,255,1) 0%, rgba(202,216,255,1) 7%, rgba(232,238,255,1) 12%, rgba(255,255,255,1) 16%);}</style>";
        break;
    case "4":
        echo "<style>.form4{display:none;}.form1{display:none;}.form2{display:none;}.inicio{display:none;}body{background-image: linear-gradient(180deg, rgba(212,0,255,1) 0%, rgba(246,204,255,1) 7%, rgba(250,227,255,1) 12%, rgba(255,255,255,1) 16%);}</style>";
        break;
    case "5":
        echo "<style>.form1{display:none;}.form2{display:none;}.form3{display:none;}.inicio{display:none;}body{background-image:linear-gradient(180deg, rgba(255,0,93,1) 0%, rgba(255,190,213,1) 7%, rgba(255,235,242,1) 12%, rgba(255,255,255,1) 16%);}</style>";
        break;
        
    }
}
?>
<div class='inicio'>
<!--PÁGINA INICIAL -------------------------------------------------------------------------->
<div class='form_container'>
<div id='form'>
<h2>Olá, seja bem vindo(a)!</h2>
<h3>Este é o painel principal, em que você pode ver todos os cadastros efetuados no sistema.</h3>
</div><br>
<div id='form'>
    <h2>Aqui vão algumas observações:</h2>
    <h3>Pessoas/produtos cadastradas(os) no sistema e vinculadas(os) a alguma venda não serão excluídas(os);</h3>
    <h3>Campos de seleção que não tiverem opções selecionadas retornarão valores nulos;</h3>
    <h3>Todas as vendas serão efetuadas com a data presente na máquina do usuário (podendo ser alterada no campo "Alterar");</h3>
    <h3>O campo "Pesquisar" utiliza-se do mecanismo por caractere, aceitando a pesquisa por nomes e números presentes em todas as listas.</h3>
</div><br>
<div id='form'>
<h2>Da equipe</h2>
<h3>Esta página foi desenvolvida por:</h3>
<h3><a href='https://github.com/Gannicos'>Victor Hugo</a> e <a href='https://github.com/mapeso'>Mariana Pereira</a></h3>
<img src='you and i.png'>
</div>
</div>
<div class='list_container'>
<?php
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();

    echo  '<h2>Clientes</h2><table><tr><th>Cod. Cliente</th><th>Nome</th><th>CPF</th><th>Telefone</th><th>Endereço</th><th>Nascimento</th></tr>';
    foreach($fetchClientes as $key => $value){
        echo '<tr><td>'.$value['cod_clientes'].'</td><td>'.$value['nome'].'</td><td>'.$value['cpf'].'</td><td>'.$value['telefone'].'</td><td>'.$value['endereco'].'</td><td>'.$value['nascimento'].'</tr>';
    }
    echo '</table>';


    $sql = $conn->prepare("SELECT * FROM produtos");
    $sql->execute();

    $fetchProdutos = $sql->fetchAll();

    echo '<h2>Produtos</h2><table><tr><th>Cod. Produto</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Quantidade</th><th>Estoque</th></tr><tr>';
    foreach($fetchProdutos as $key => $value){
       echo '<td>'.$value['cod_produtos'].'</td><td>'.$value['nome_prod'].'</td><td>'.$value['desc_prod'].'</td><td>'.$value['preco'].'</td><td>'.$value['qtd'].'</td><td>'.$value['estoque'].'</tr>';
    }
    echo '</table>';


    $sql = $conn->prepare("SELECT * FROM vendas");
    $sql->execute();

    $fetchVendas = $sql->fetchAll();
    echo  '<h2>Vendas</h2><table><tr><th>Cod. Venda</th><th>Data</th><th>Valor</th><th>Vendedor</th><th>Cod. Comprador</th><th>Cod. Produto</th></tr><tr>';
    foreach($fetchVendas as $key => $value){
        echo '<td>'.$value['numero_vendas'].'</td><td>'.$value['data_venda'].'</td><td>'.$value['valor'].'</td><td>'.$value['vendedor'].'</td><td>'.$value['cod_clientes'].'</td><td>'.$value['cod_produtos'].'</tr>';
    }
    echo '</table>';
    
?>
</div>
</div>

<!--CLIENTES -------------------------------------------------------------------------->
<?php
//TABELA CLIENTES || ADD; DELETE; UPDATE
function add1(){
    try{
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("INSERT INTO clientes(cpf, endereco, nascimento, nome, telefone) VALUES (?, ?, ?, ?, ?)");
    if(isset($_POST['nome']) || isset($_POST['cpf'])|| isset($_POST['nascimento'])){
        if(strlen($_POST['nome']) == 0){
            echo "<script>alert('Preencha seu nome')</script>";}
        else if (strlen($_POST['cpf']) == 0){
            echo "<script>alert('Preencha seu CPF')</script>";}
        else if (strlen($_POST['nascimento']) == 0){
            echo "<script>alert('Preencha sua data de nascimento')</script>";
        }else{
        $nome = $_POST['nome'];
    $sql -> execute(array($_POST['cpf'],$_POST['endereco'],$_POST['nascimento'],$_POST['nome'],$_POST['telefone']));
    echo "<script>alert('$nome cadastrado com sucesso!')</script>";
        }
    }
    }catch(PDOException $e){
        echo 'ERROR: '. $e->getMessage();
        }
    }

function update1(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['cod_cliente'])){
        $id = (int)$_POST['cod_cliente'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $nascimento = $_POST['nascimento'];
        $conn->exec("UPDATE clientes SET nome='$nome', cpf='$cpf', telefone='$telefone', endereco='$endereco', nascimento='$nascimento' WHERE cod_clientes=$id");
        echo "<script>alert('Codigo: $id atualizado com Sucesso!')</script>";
    }
    }
?>
<div class='form1'>
    <div class='form_container'>
<form method='POST' id='form'>
    <h1>Adicionar</h1>
    <input type='text' name='nome' required placeholder='Nome'><br>
    <input type='text' name='cpf' required placeholder='CPF' oninput='formatacaoCPF(this)'><br>
    <input type='text' name='telefone' required placeholder='Telefone' oninput='formatacaoTEL(this)'><br>
    <input type='text' name='endereco' placeholder='Endereço'><br>
    <label name='nascimento'  class='data'>Data de nascimento<br><input class='input' type='date' name='nascimento' required placeholder='Data Nascimento'></label><br>
    <button class='button' type='submit' value='1' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
<form action='loja_1.2_delete.php' method='POST' id='form'>
    <h1>Deletar</h1>
    <?php
        $server = HOST;
        $database = NAMEDATABASE;
        $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //OPTION PARA CLIENTES
        $sql = $conn->prepare("SELECT * FROM clientes WHERE NOT EXISTS (SELECT cod_clientes FROM vendas WHERE clientes.cod_clientes = vendas.cod_clientes)");
        $sql->execute();

        $fetchClientes = $sql->fetchAll();
            echo "
            <select name='cod_cliente' class='select'>
            <option value=''>Codigo do Cliente</option>";
        foreach($fetchClientes as $option){
            ?>
                <option value="<?php echo $option['cod_clientes']?>"><?php echo $option['nome']?></option>
            <?php
        }echo"</select><br>";
    ?>
    <button class='button' type='submit' value='2' name='button'>Enviar</button><button type='reset' class='button'>X</button>
</form>
<form method='POST' id='form'>
    <h1>Alterar</h1>
    <?php
            //OPTION PARA CLIENTES
            $sql = $conn->prepare("SELECT * FROM clientes");
            $sql->execute();
    
            $fetchClientes = $sql->fetchAll();
                echo "
                <select name='cod_cliente' class='select'>
                <option value=''>Codigo do Cliente</option>";
            foreach($fetchClientes as $option){
                ?>
                    <option value="<?php echo $option['cod_clientes']?>"><?php echo $option['nome']?></option>
                <?php
            }echo"</select><br>";    
    ?>
    <input type='text' name='nome' required placeholder='Nome'><br>
    <input type='text' name='cpf' required placeholder='CPF' oninput='formatacaoCPF(this)'><br>
    <input type='text' name='telefone' required placeholder='Telefone' oninput='formatacaoTEL(this)'><br>
    <input type='text' name='endereco' placeholder='Endereço'><br>
    <label name='nascimento'  class='data'>Data de nascimento<br><input class='input' type='date' name='nascimento' required placeholder='Data Nascimento'></label><br>
    <button class='button' type='submit' value='3' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
</div>
<div class='list_container'>
<?php
$operation = $_POST['button'];
switch($operation){
    case "1":
        add1();
        break;
    case "3":
        update1();
        break;
        
    }

    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();
    echo  '<table><tr><th>Cod. Cliente</th><th>Nome</th><th>CPF</th><th>Telefone</th><th>Endereço</th><th>Nascimento</th></tr>';
    foreach($fetchClientes as $key => $value){
        echo '<tr><td>'.$value['cod_clientes'].'</td><td>'.$value['nome'].'</td><td>'.$value['cpf'].'</td><td>'.$value['telefone'].'</td><td>'.$value['endereco'].'</td><td>'.$value['nascimento'].'</tr>';
    }
    echo '</table>';

?>
</div>
</div>

<!--PRODUTOS -------------------------------------------------------------------------->
<?php
//TABELA PRODUTOS || ADD; DELETE; UPDATE
function add2(){
    try{
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("INSERT INTO produtos(nome_prod, desc_prod, preco, qtd, estoque) VALUES (?, ?, ?, ?, ?)");
    if(isset($_POST['nome_prod']) || isset($_POST['desc_prod'])|| isset($_POST['preco'])){
        if(strlen($_POST['nome_prod']) == 0){
            echo "<script>alert('Preencha o nome')</script>";}
        else if (strlen($_POST['desc_prod']) == 0){
            echo "<script>alert('Preencha a Descrição')</script>";}
        else if (strlen($_POST['preco']) == 0){
            echo "<script>alert('Preencha o preço')</script>";
        }else{
        $nome_prod = $_POST['nome_prod'];
    $sql -> execute(array($_POST['nome_prod'],$_POST['desc_prod'],$_POST['preco'],$_POST['qtd'],$_POST['estoque']));
    echo "<script>alert('Produto $nome_prod inserido com sucesso!')</script>";
        }
    }
    }catch(PDOException $e){
        echo 'ERROR: '. $e->getMessage();
        }
    }

function update2(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['cod_produtos'])){
        $id = (int)$_POST['cod_produtos'];
        $nome = $_POST['nome_prod'];
        $desc = $_POST['desc_prod'];
        $preco = $_POST['preco'];
        $qtd = $_POST['qtd'];
        $estoque = $_POST['estoque'];
        $conn->exec("UPDATE produtos SET nome_prod='$nome', desc_prod='$desc', preco='$preco', qtd='$qtd', estoque='$estoque' WHERE cod_produtos=$id");
        echo "<script>alert('Codigo $id atualizado com Sucesso!')</script>";
    }
    }
?>
<div class='form2'>
    <div class='form_container'>
<form method='POST' id='form'>
    <h1>Adicionar</h1>
    <input type='text' name='nome_prod' required placeholder='Nome'><br>
    <input type='text' name='desc_prod' required placeholder='Descrição'><br>
    <input type='number' name='preco' step='.01' required placeholder='Preço'><br>
    <input type='number' name='qtd' placeholder='Quantidade'><br>
    <input type='number' name='estoque' required placeholder='Estoque'><br>
    <button class='button' type='submit' value='4' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
<form action='loja_1.2_delete.php' method='POST' id='form'>
    <h1>Deletar</h1>
    <?php
        //OPTION PARA PRODUTOS
        $sql = $conn->prepare("SELECT * FROM produtos WHERE NOT EXISTS (SELECT cod_produtos FROM vendas WHERE produtos.cod_produtos = vendas.cod_produtos)");
        $sql->execute();
    
        $fetchProdutos = $sql->fetchAll();
            echo "
            <select name='cod_produtos' class='select'> 
            <option value=''>Codigo do Produto</option>";
        foreach($fetchProdutos as $option){
            ?>
                <option value="<?php echo $option['cod_produtos']?>"><?php echo $option['nome_prod']?></option>
            <?php
        } echo "</select><br>";   
    ?>
    <button class='button' type='submit' value='5' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
<form method='POST' id='form'>
    <h1>Alterar</h1>
    <?php
    
        //OPTION PARA PRODUTOS
        $sql = $conn->prepare("SELECT * FROM produtos");
        $sql->execute();
    
        $fetchProdutos = $sql->fetchAll();
            echo "
            <select name='cod_produtos' class='select'> 
            <option value=''>Codigo do Produto</option>";
        foreach($fetchProdutos as $option){
            ?>
                <option value="<?php echo $option['cod_produtos']?>"><?php echo $option['nome_prod']?></option>
            <?php
        } echo "</select><br>";     
        
    ?>
    <input type='text' name='nome_prod' required placeholder='Nome'><br>
    <input type='text' name='desc_prod' required placeholder='Descrição'><br>
    <input type='number' name='preco' step='.01' required placeholder='Preço'><br>
    <input type='number' name='qtd' placeholder='Quantidade'><br>
    <input type='number' name='estoque' required placeholder='Estoque'><br>
    <button class='button' type='submit' value='6' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
</div>
<div class='list_container'>
<?php
$operation = $_POST['button'];
switch($operation){
    case "4":
        add2();
        break;
    case "6":
        update2();
        break;
        
    }

    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM produtos");
    $sql->execute();

    $fetchProdutos = $sql->fetchAll();

    echo '<table><tr><th>Cod. Produto</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Quantidade</th><th>Estoque</th></tr><tr>';
    foreach($fetchProdutos as $key => $value){
       echo '<td>'.$value['cod_produtos'].'</td><td>'.$value['nome_prod'].'</td><td>'.$value['desc_prod'].'</td><td>'.$value['preco'].'</td><td>'.$value['qtd'].'</td><td>'.$value['estoque'].'</tr>';
    }
    echo '</table>';

?>
</div>
</div>

<!--VENDAS -------------------------------------------------------------------------->
<?php
//TABELA VENDAS || ADD; DELETE; UPDATE
function add3(){
    try{
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = (int)$_POST['cod_produtos'];
        $sql = $conn->prepare("SELECT * FROM produtos WHERE cod_produtos=$id");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
        foreach($fetchProdutos as $option){
            $valor = $option['preco'];
            }
    $sql = $conn->prepare("INSERT INTO vendas(data_venda, valor, vendedor, cod_clientes, cod_produtos) VALUES (?, ?, ?, ?, ?)");
    if(isset($_POST['cod_clientes']) || isset($_POST['cod_produtos'])|| isset($_POST['vendedor'])){
        if(strlen($_POST['cod_clientes']) == 0){
            echo "<script>alert('Preencha codigo do Cliente')</script>";}
        else if (strlen($_POST['cod_produtos']) == 0){
            echo "<script>alert('Preencha codigo do Produto')</script>";}
        else if (strlen($_POST['vendedor']) == 0){
            echo "<script>alert('Selecione o vendedor')</script>";
        }else{
        $date = date("Y-m-d");  
        $sql -> execute(array($date,$valor,$_POST['vendedor'],$_POST['cod_clientes'],$_POST['cod_produtos']));
        echo "<script>alert('Venda realizada com sucesso!')</script>";
        }
    }
    }catch(PDOException $e){
        echo 'ERROR: '. $e->getMessage();
        }
    }

function update3(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['numero_vendas'])){
        $id = (int)$_POST['numero_vendas'];
        $data = $_POST['data_venda'];
        $valor = $_POST['valor'];
        $vendedor = $_POST['vendedor'];
        $cod_clientes = $_POST['cod_clientes'];
        $cod_produtos = $_POST['cod_produtos'];
        $conn->exec("UPDATE vendas SET data_venda='$data', valor='$valor', vendedor='$vendedor', cod_clientes='$cod_clientes', cod_produtos='$cod_produtos' WHERE numero_vendas=$id");
        echo "<script>alert('Dados da venda $id atualizados!')</script>";
    }
    }
?>
<div class='form3'>
    <div class='form_container'>
<form method='POST' id='form' >
    <h1>Adicionar</h1>
    <?php
        $server = HOST;
        $database = NAMEDATABASE;
        $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //OPTION PARA CLIENTES
        $sql = $conn->prepare("SELECT * FROM clientes");
        $sql->execute();

        $fetchClientes = $sql->fetchAll();
            echo "
            <select name='cod_clientes' class='select'>
            <option value=''>Cliente</option>";
        foreach($fetchClientes as $option){
            ?>
                <option value="<?php echo $option['cod_clientes']?>"><?php echo $option['nome']?></option>
            <?php
        }echo"</select>";


        //OPTION PARA PRODUTOS
        $sql = $conn->prepare("SELECT * FROM produtos");
        $sql->execute();
    
        $fetchProdutos = $sql->fetchAll();
            echo "
            <select name='cod_produtos' class='select'> 
            <option value=''>Produtos</option>";
        foreach($fetchProdutos as $option){
            ?>
                <option value="<?php echo $option['cod_produtos']?>"><?php echo $option['nome_prod']?></option>
            <?php
        } echo "</select><br>";     
        
    ?>

    <select class='select' name='vendedor'><option value=''>Vendedor</option><option value='Mariana Pereira'>Mariana Pereira</option><option value='Victor Hugo'>Victor Hugo</option></select><br>
    <button class='button' type='submit' value='7' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
<form action='loja_1.2_delete.php' method='POST' id='form'>
    <h1>Deletar</h1>
    <?php
        //OPTION PARA VENDAS
        $sql = $conn->prepare("SELECT * FROM vendas");
        $sql->execute();

        $fetchVendas = $sql->fetchAll();
            echo "
            <select name='numero_vendas' class='select'>
            <option value=''>Codigo da Venda</option>";
        foreach($fetchVendas as $option){
         ?>
             <option value="<?php echo $option['numero_vendas']?>"><?php echo $option['numero_vendas']?></option>
         <?php
     }echo"</select><br>";

    ?>
    <button class='button' type='submit' value='8' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
<form method='POST' id='form'>
    <h1>Alterar</h1>
    <?php
        $server = HOST;
        $database = NAMEDATABASE;
        $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //OPTION PARA VENDAS
        $sql = $conn->prepare("SELECT * FROM vendas");
        $sql->execute();

        $fetchVendas = $sql->fetchAll();
            echo "
            <select name='numero_vendas' class='select'>
            <option value=''>Codigo da Venda</option>";
        foreach($fetchVendas as $option){
            ?>
                <option value="<?php echo $option['numero_vendas']?>"><?php echo $option['numero_vendas']?></option>
            <?php
        }echo"</select>";


        
        //OPTION PARA CLIENTES
        $sql = $conn->prepare("SELECT * FROM clientes");
        $sql->execute();

        $fetchClientes = $sql->fetchAll();
            echo "
            <select name='cod_clientes' class='select'>
            <option value=''>Cliente</option>";
        foreach($fetchClientes as $option){
            ?>
                <option value="<?php echo $option['cod_clientes']?>"><?php echo $option['nome']?></option>
            <?php
        }echo"</select>";


        //OPTION PARA PRODUTOS
        $sql = $conn->prepare("SELECT * FROM produtos");
        $sql->execute();
    
        $fetchProdutos = $sql->fetchAll();
            echo "
            <select name='cod_produtos' class='select'> 
            <option value=''>Produtos</option>";
        foreach($fetchProdutos as $option){
            ?>
                <option value="<?php echo $option['cod_produtos']?>"><?php echo $option['nome_prod']?></option>
            <?php
        } echo "</select>";     
        
    ?>
    <select class='select' name='vendedor'><option value=''>Vendedor</option><option value='Mariana Pereira'>Mariana Pereira</option><option value='Victor Hugo'>Victor Hugo</option></select><br>
    <label name='data_venda'  class='data'>Data da venda<br><input type='date' name='data_venda' required placeholder='Data da venda'></label><br>
    <input type='number' name='valor' step='.01' required placeholder='Valor'><br>
    <button class='button' type='submit' value='9' name='button'>Enviar</button><button class='button' type='reset'>X</button>
</form>
</div>
<div class='list_container'>
<?php
$operation = $_POST['button'];
switch($operation){
    case "7":
        add3();
        break;
    case "9":
        update3();
        break;
        
    }

    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM vendas");
    $sql->execute();

    $fetchVendas = $sql->fetchAll();

    echo  '<table><tr><th>Cod. Venda</th><th>Data</th><th>Valor</th><th>Vendedor</th><th>Cod. Comprador</th><th>Cod. Produto</th></tr><tr>';
    foreach($fetchVendas as $key => $value){
        echo '<td>'.$value['numero_vendas'].'</td><td>'.$value['data_venda'].'</td><td>'.$value['valor'].'</td><td>'.$value['vendedor'].'</td><td>'.$value['cod_clientes'].'</td><td>'.$value['cod_produtos'].'</tr>';
    }
    echo '</table>';
?>
</div>
</div>
<form class='form4' id='form'>
<input class='select' type="text" id="lista" onkeyup="searchFor()" placeholder="Pesquise por nomes, n°..." title="Type in a name">
<ul id="listagem">
<?php
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //PESQUISAR PARA CLIENTES
    $sql = $conn->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();
    echo '<h2>Clientes:</h2>';
    foreach($fetchClientes as $key => $value){
        echo '<li><a href="#">'.$value['cod_clientes'].' - '.$value['nome'].' || CPF: '.$value['cpf'].' || Tel: '.$value['telefone'].' || '.$value['endereco'].' || '.$value['nascimento'].'</a></li>';
    }

    //PESQUISAR PARA PRODUTOS
    $sql = $conn->prepare("SELECT * FROM produtos");
    $sql->execute();

    $fetchProdutos = $sql->fetchAll();
    echo '<br><h2>Produtos:</h2>';
    foreach($fetchProdutos as $key => $value){
        echo '<li><a href="#">'.$value['cod_produtos'].' - '.$value['nome_prod'].' || '.$value['desc_prod'].' || R$'.$value['preco'].' || Quantidade: '.$value['qtd'].' || Estoque: '.$value['estoque'].'</a></li>';
    }

    //PESQUISAR PARA VENDAS
    $sql = $conn->prepare("SELECT * FROM vendas");
    $sql->execute();

    $fetchVendas = $sql->fetchAll();
    echo '<br><h2>Vendas:</h2>';
    foreach($fetchVendas as $key => $value){
        echo '<li><a href="#">'.$value['numero_vendas'].' - '.$value['data_venda'].' || R$'.$value['valor'].' || '.$value['vendedor'].' || Cod. Cliente: '.$value['cod_clientes'].' || Cod. Produto: '.$value['cod_produtos'].'</a></li>';
    }
?>
</ul>

<script>
function searchFor() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("lista");
    filter = input.value.toUpperCase();
    ul = document.getElementById("listagem");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</form>
</body>