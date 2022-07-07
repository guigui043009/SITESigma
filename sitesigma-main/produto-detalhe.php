<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
$id = $_GET['id'];

?>
<div class="container">
 <div class="row">
    <div class="col">   
<h1><?php echo $produtos[$id]['nome']?></h1>
<h4><?php echo $produtos[$id]['descricao']?></h1>
<h4><?php echo $produtos[$id]['preco']?></h1>
<img src="./content/<?php echo $produtos[$id]['imagem'];?>"
</div>
</div>
</div>
<div class="row">
<div class="col">voltar</div>
<div class="col">comprar</div>

</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>