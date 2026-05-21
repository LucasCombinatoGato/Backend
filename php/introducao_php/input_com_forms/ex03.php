<form method="POST">
    <label>Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Enviar">
</form>

<?php
    $email = $_POST["email"];
    echo "Email informado: $email";
?>