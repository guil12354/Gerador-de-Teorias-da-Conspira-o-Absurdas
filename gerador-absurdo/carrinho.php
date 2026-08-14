
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>

    <h1> Adicione o item </h1>

   

    <form action="carrinho.php" method="POST">

  <p>Escolha o produto</p>
    <input type="radio" name="item" value="Banana"> Banana<br>
    <input type="radio" name="item" value="Uva"> Uva<br>
    <input type="radio" name="item" value="Laranja"> Laranja<br>

        <input type="submit" value="Cadastrar item"/>

    </form>

<hr> 

</body>
</html>


<?php

if($_POST ) {
$item = $_POST["item"];
$item = []



//$_SESSION['compras'] = $item;


//echo $_SESSION['compras'];
}



 //<?php echo "<h3> $msg </h3>"; 

 ?>