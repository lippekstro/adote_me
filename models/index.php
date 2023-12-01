
 <!-- CRUDE DO ADMINISTRADOR -->
<?php
$pdo = new PDO('mysql:host=localhost;dbname=adoteme','root','');
if(isset($_GET['delete'])){
 $id= (int) $_GET['delete'];
 $pdo->exec("DELETE clientes WHERE id=$id");
 echo 'deletado com sucesso o id' .$id;
}
if(isset($_POST['nome'])){
  $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
  $sql->execute(array($_POST['nome'],$_POST['email']));
  echo 'inserido com sucesso';
}
?>
<form method="post">
<input type="text"name="nome">
<input type="text" name="email">
<input type="submit" value="enviar">
</form>
<?php

$sql=$pdo->prepare("SELECT * FROM clientes");
$sql->execute();
$fetchclientes = $sql->fetchALL();
foreach ($fetchclientes as $key => $value){
  echo '<a href="?delete='.$value['id'].'">(x)</a>'.$value['nome'].' | '.$value['email'];
  echo '<hr>';
}
?>





  