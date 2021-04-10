
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
include_once 'data_access.class.php';
if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $res = null;

    DB::user_exists($user, $pass, $res);
    echo($user . " " . $pass. " ". $res);
}else{


?>
    <form method="post">
        <fieldset>
            <legend>Login</legend>
            <label>Usuario</label>
            <input type="text" name="user"><br>
            <label>Contraseña</label>
            <input type="password" name="pass"><br>
            <input type="submit" name="submit" value="Iniciar sesion">
        </fieldse>
    </form>
<?php
}
?>
</body>
</html>
