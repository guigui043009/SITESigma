<?php
// conexao com o banco de dados
include_once '../includes/_dados.php';
// includedo arquivo de head 
include_once '_head.php';
//SQL de consulta
$sql = "SELECT * FROM categorias";
// executa a consulta de dados(variavel de conexao de dados, variavel sql de consulta)
$resultado = mysqli_query($conexao,$sql);
// conta quantos registros existem
$total = mysqli_num_rows($resultado);
// inclui o menu na pagina
include_once '_menu.php';
?>
    <main>
        <h2>Administração de Categorias</h2>
        <a href="categoria-salvar.php">inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>    
            <?php
            // verificar se existe informacoes no banco de dados
            if($resultado){
                // converte os resultados em uma linha da matriz
                while ($dado = mysqli_fetch_array($resultado)) }
            ?>    
            <tr>
                <td><?php echo $dado['categoriaID'];?></td>
        
        
            </tr>


            }




