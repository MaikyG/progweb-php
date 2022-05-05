 <?php
 /* 
 $_SERVER['PHP_SELF'] -> traz os dados completos do endereço basename($_SERVER['PHP_SELF']) -> extrai apenas o nome.extensão */
$pagina = basename($_SERVER['PHP_SELF']);

/* parte 2: Condicional para avaliar qual pagina esta aberta e definir qual titulo usar */
switch ($pagina) {
    case 'index.php': $titulo = "Pagina Inicial";break;
    case 'produtos.php': $titulo = "Produtos";break;
    case 'servicos.php': $titulo = "Serviços";break;
    default:$titulo = "Contatos"; break;
}
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?=$titulo?> - Site ABC</title>
     <link rel="stylesheet" href="css/estilos.css">
 </head>
 <body>
     <header>
         <h1>Site XYZ</h1>
         <nav>
             <a href="index.php">Home</a>
             <a href="produtos.php">Produtos</a>
             <a href="servicos.php">Serviços</a>
             <a href="contatos.php">Contatos</a>
         </nav>
     </header>
  
     <main>