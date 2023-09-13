<?php   
$host = "localhost";
$user = "root";
$senha = "";
$database = "formprogr";

$conn = mysqli_connect($host, $user, $senha, $database) or die("Erro de conexão");

if(isset($_POST['Enviar'])){
    $nome = $_POST['nome'];
    $siape = $_POST['siape'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $just = $_POST['just'];
    $soma = $_POST['soma'];
    $data = $_POST['data'];
    $query = mysqli_query($conn, "INSERT INTO usuarios (nome, siape, cargo, email, tel, just, soma, data) VALUES ('$nome', '$siape', '$cargo', '$email', '$tel', '$just', '$soma', '$data')");

    if($query){
        echo 'Cadastro realizado com sucesso';
    }else{
        echo 'Não foi possível cadastrar';
    }
}
?>