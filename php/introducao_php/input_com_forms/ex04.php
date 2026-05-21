<form method="POST">
	<label>nome</label>
	<input type="text" name="nome" id="nome">
    <hr>
	<label>Email:</label>
	<input type="email" name="email" id="email">
    <hr>
	<label>Mensagem</label>
	<input type="text" name="mensagem" id="mensagem">
    <br>
	<input type="submit" value="Enviar">
</form>
<hr>

// Essa seria a exibição padrão, entretanto, na primeira vez em que ainda não se deu o input, ele é considerado erro/incongruência.
<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

echo "<h2>Dados Recebidos</h2>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Mensagem: $mensagem";

echo "<hr><hr><hr>";

function exibirCampo($label, $valor) {
	echo "$label: $valor <br>";
}
if (isset($_POST["nome"], $_POST["email"])){
exibirCampo("Nome", $_POST["nome"]);
exibirCampo("Email", $_POST["email"]);

    /*Usando ??
    exibirCampo("Nome: ", $_POST["nome"] ?? "");
    exibirCampo("E-mail: ", $_POST["email"] ?? "");
    */
}

?>