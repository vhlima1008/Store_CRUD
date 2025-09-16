<?php
error_reporting(0);
//CONFIGURAÇÃO DA DATABASE
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const NAMEDATABASE = 'store';

//FUNCAO DE EXCLUSAO
function exclude1(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['cod_cliente'])){
        $id = (int)$_POST['cod_cliente'];
        $conn->exec("DELETE FROM clientes WHERE cod_clientes=$id");
        echo "<script>alert('Codigo $id deletado com Sucesso!'); window.location.replace('loja_1.2.php');</script>";
    }
}

function exclude2(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['cod_produtos'])){
        $id = (int)$_POST['cod_produtos'];
        $conn->exec("DELETE FROM produtos WHERE cod_produtos=$id");
        echo "<script>alert('Codigo $id deletado com Sucesso!'); window.location.replace('loja_1.2.php');</script>";
    }
}

function exclude3(){
    $server = HOST;
    $database = NAMEDATABASE;
    $conn = new PDO("mysql:host=$server;dbname=$database",USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['numero_vendas'])){
        $id = (int)$_POST['numero_vendas'];
        $conn->exec("DELETE FROM vendas WHERE numero_vendas=$id");
        echo "<script>alert('Codigo $id deletado com Sucesso!'); window.location.replace('loja_1.2.php');</script>";
    }
}

//FUNCAO DE REDIRECIONAMENTO
function redirect(){
    $option = $_POST['option'];
    switch($option){
    case "2":
        exclude1();
        break;
    case "5":
        exclude2();
        break;
    case "8":
        exclude3();
        break;
    }
}

$option = (int)$_POST['button'];
if($option == 2){
    $name = 'cod_cliente';
    $id = (int)$_POST['cod_cliente'];
}if($option == 5){
    $name = 'cod_produtos';
    $id = (int)$_POST['cod_produtos'];
}if($option == 8){
    $name = 'numero_vendas';
    $id = (int)$_POST['numero_vendas'];
}

echo "<form method='POST' id='form'><h2>Tem certeza que deseja excluir o codigo $id?<h2><br>";
?>
<!--FORMULARIO DE EXCLUSAO-->
    <input type='submit' name='yn' value='Sim' class='button'>
    <input type='submit' name='yn' value='Não' class='button'>
    <input type='hidden' name='option' value='<?php echo"$option";?>'>
    <input type='hidden' name='<?php echo"$name";?>' value='<?php echo"$id";?>'>
</form>

<?php
switch($_POST['yn']){
    case "Sim":
        redirect();
        break;
    case "Não":
        echo "<script>alert('Operação cancelada'); window.location.replace('loja_1.2.php');</script>";
        break;
    }
?>
<style>
body{
    background-color:white;
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
.button_clientes,.button_produtos,.button_vendas,.button_inicio{
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
  
  .button_inicio:hover .svgIcon,.button_clientes:hover .svgIcon, .button_produtos:hover .svgIcon, .button_vendas:hover .svgIcon {
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
  
  .button_inicio:hover::before,.button_clientes:hover::before,  .button_produtos:hover::before,  .button_vendas:hover::before {
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
</style>