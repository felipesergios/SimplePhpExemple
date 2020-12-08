<?php
$con = new PDO("mysql:host=localhost;dbname=Lazarus", "root", ""); 
$stmt = $con->prepare("INSERT INTO produtos(produto, valor,descricao) VALUES(?, ?,?)");
$Produto=$_GET['Produto'];
$Valor=$_GET['Valor'];
$Desc=$_GET['Desc'];
$stmt->bindParam(1,$Produto);
$stmt->bindParam(2,$Valor);
$stmt->bindParam(3,$Desc);
$stmt->execute();

if (!$stmt){
          echo"<script language='javascript' type='text/javascript'>alert('Erro');window.location.href='index.php';</script>";
          die();
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Cadastrado!');window.location.href='index.php';</script>";
        }
?>