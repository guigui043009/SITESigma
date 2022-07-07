<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
$validado=FALSE;
if (isset($_POST['txtNome'] ) ) {
    $nometxt = strtoupper($_POST['txtNome'] );
    $validado = TRUE;
}

if (isset($_POST['txtEmail'] ) ) {
    $email = strtoupper($_POST['txtEmail'] );
    $validado = TRUE;
}
if (isset($_POST['txtTelefone'] ) ) {
    $Telefone = strtoupper($_POST['txtTelefone'] );
    $validado = TRUE;
}
if (isset($_POST['txtMensagem'] ) ) {
    $Mensagem = strtoupper($_POST['txtMensagem'] );
    $validado = TRUE;
}
if($validado === TRUE){
echo $nometxt. '<br>';
echo $Telefone. '<br>';
echo $email. '<br>';
echo $Mensagem. '<br>';
}
?>

<h1>Contato</h1>
<form action="./contato.php" method="post">

    <ul>
        <li>
            <label for="txtNome">Email</label>
            <input type="text" name="txtEmail" id="txtEmail">
        </li>
        
        <li>
            <label for="txtNome">Telefone</label>
            <input type="text" name="txtTelefone" id="txtTelefone">
        </li>
        
        <li>
            <label for="txtNome">Nome Completo</label>
            <input type="text" name="txtNome" id="txtNome">
        </li>
        <li>
        <label for="txtNome">Mensagem</label>
            <input type="text" name="txtMensagem" id="txtMensagem">
        </li>
    </ul>

    <input type="submit" value="Cadastrar">

</form>

<?php
// include do footer
include_once './includes/_footer.php';
?>
