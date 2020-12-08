<?php
/* Define a página atual pela URL */
$pagina = 'home';
 
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
 
/* Carrega o header.php */
include 'header.php';
 
/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'equipe':
        include 'app/views/equipe.php';
        break;
    case 'tabela':
        include 'app/views/tabela.php';
        break;  
     case 'deletar':
        include 'app/views/delet.php';
        break;  
    case 'update':
        include 'app/views/Up.php';
        break;          
 
    default:
        include 'app/views/home.php';
        break;
}
 
/* Carrega o footer.php */
include 'footer.php';