<?php
$con = new PDO("mysql:host=localhost;dbname=Lazarus", "root", ""); 
?>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aventador-SistemaWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
     <link href="css/estilo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
                              
                            <!-- <nav class="nav">
                                <li>
                                    <a href="Up.php">Atualizar</a>
                                </li>
                                <li>
                                    <a href="Del.php">Deletar</a>
                                </li>
                                <li>
                                    <a href="Cria.php">Inserir</a>
                                </li>                             
                            </nav>-->
                            <br>

  
<body>

    <div id="Interface">
                                  <nav>
                                <a href="?pagina=home">inicio</a> |
<a href="?pagina=update">Atualizar</a> |
<a href="?pagina=deletar">Deletar</a> |
<a href="?pagina=equipe">Inserir</a> |
</nav>