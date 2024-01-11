<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=/, initial-scale=1.0">
   
  
</head>
<style>
body {
    background-color:#064789;
    justify-content: center;
    align-items: center;
    
}

.alerta{
    margin-top: 25%;
    margin-left:40%;
    background-color:#EBF2FA;
    width: 300px;
    font-family: Arial;
    color: #064789;
    height: 60px;
    font-size: larger;
     border-radius :20px;
    text-align: center;
    align-items: center;

}
#menu {
    margin: auto;
    text-align: center;
    position: relative;
    
}
    
#menu ul li { display: inline; 
    list-style-type: none;
}

#menu ul li a { 
    margin-top: 20px;
    font-family: Arial;
    font-size: large;
    color: #EBF2FA;
    padding: 2px 30px; 
    display: inline-block; /* visual do link */ 
    text-decoration: none;
    
    
}

#menu ul li a:hover {
    background-color:#EBF2FA;
    color: #064789;
    border-radius: 50px;
    
}
#logo {
    margin: auto;
    position: absolute;
    height: 70px;
    width: auto;
    margin-left: 20px;
    
    
}


</style>
<body>
    <header>
    <span id="logo" ><a href="PAGINA HOME.html"><img src="LOGO.png" width="80px" height="75px"></a></span>
    <span id="menu">
         <ul>
            <li><a href="PAGINA HOME.html">INICIO</a></li>
            <li><a href="PAGINA HOME.html">SOBRE</a></li>
             <li><a href="PAGINA HOME.html">CONTATO</a></li>
             <li><a href="pgcadastro.html">CADASTRE-SE</a></li>
         </ul>
         
        </span>
    </header>
<div class= alerta>
    <?php
    $conexao = mysqli_connect("localhost", "root","","cept");

    //checar conexao

    if(!$conexao){
        echo"<br>NÃO CONECTADO<br>";
    }
    

    //RECUPERAR E VERIFICAR SE O CADASTRO EXISTE
    $email = $_POST ['email'];
    $sql = "SELECT email FROM cept.cadastro WHERE email='$email'";
    $retorno = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($retorno)>0){
        echo"<br>EMAIL JÁ CADASTRADO!";
    }else {
        
        $nome = $_POST ['nome'];
        $dataNascimento = $_POST ['dataNascimento'];
        $email = $_POST ['email'];
        $telefone = $_POST ['telefone'];
        $vagas = $_POST ['vagas'];
    
        $sql= "INSERT INTO cept.cadastro (nome,dataNascimetno, email,telefone,vagas) values ('$nome','$dataNascimento','$email','$telefone','$vagas')";
        $resultado = mysqli_query($conexao, $sql);
        echo"<br>CADASTRO EFETUADO!<br>";
        
    }
    
    ?>
    </div>
</body>
</html>
