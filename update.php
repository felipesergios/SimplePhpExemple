<?php
$con = new PDO("mysql:host=localhost;dbname=Lazarus", "root", ""); 
$stmt = $con->prepare("UPDATE produtos SET produto = ?, descricao = ?,valor = ?  WHERE id = ?");
$nome=$_GET['Produto'];
$desc=$_GET['Desc'];
$id=$_GET['id'];
$valor=$_GET['valor'];
$stmt->bindParam(1,$nome );
$stmt->bindParam(2,$desc);
$stmt->bindParam(3,$valor);
$stmt->bindParam(4,$id);
$stmt->execute();
if (!$stmt){
          echo"<script language='javascript' type='text/javascript'>alert('Erro');window.location.href='index.php';</script>";
          die();
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Atualizado com Sucesso!');window.location.href='index.php';</script>";
        }

?>