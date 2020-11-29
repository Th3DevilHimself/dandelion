<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$CPF=$_POST['CPF'];
$email=$_POST['email'];
$celular1=$_POST['ncelular1'];
$celular2=$_POST['ncelular2'];
$telefone=$_POST['ntelefone'];

include('conexao.php');

$sql="INSERT INTO tbl_usuario(nome, sobrenome, CPF, email) VALUES ('$nome','$sobrenome','$CPF','$email')";

$sql="INSERT INTO tbl_celular(celular1,celular2) VALUES ('$celular1','$celular2')";

$sql="INSERT INTO tbl_telefone(Telefone1) VALUES ('$telefone')";

$resultado=mysqli_query($conn,$sql) or die ('Falha no registro!');
mysqli_close($conn);

echo("<script> 
    ('Registro feito com sucesso!');
    window.location.href='index.html';
 </script>");
?>