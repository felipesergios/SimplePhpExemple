<?php
$con = new PDO("mysql:host=localhost;dbname=Lazarus", "root", ""); 
$stmt = $con->prepare("DELETE FROM produtos WHERE id = ?");
$id=$_GET['id'];
$stmt->bindParam(1, $id);
$stmt->execute();
if (!$stmt){
          echo"<script language='javascript' type='text/javascript'>alert('Erro');window.location.href='index.php';</script>";
          die();
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Deletado com Sucesso!');window.location.href='index.php';</script>";
        }

?>