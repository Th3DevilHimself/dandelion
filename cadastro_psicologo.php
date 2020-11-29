<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$CPF=$_POST['CPF'];
$CNP=$_POST['CNP'];
$CNPJ=$_POST['CNPJ'];
$formacao=$_POST['formacao'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];


include('conexao.php');
$sql="INSERT INTO tbl_psicologo (nome, sobrenome, CPF, CNP, CNPJ, formacao, email)
VALUES ('$nome','$sobrenome','$CPF','$CNP','$CNP','$formacao','$email')";

$sql="INSERT INTO tbl_telefone(telefone1) 
VALUES ('$telefone')";

$resultado=mysqli_query($conn,$sql) or die ('Falha no registro!');
mysqli_close($conn);

echo("<script> 
    ('Registro feito com sucesso!');
    window.location.href='index.html';
 </script>");
?>