<?php
    $title = "Login";
    $headerTitle = "Willkommen auf meiner Website";
    require_once './assets/layout/header.php';
    ?>

<main>
    <h1>Login</h1>
    <form>
        <label for="username">Benutzername:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Passwort:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Einloggen">
    </form>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</main>

<?php include('assets/layout/footer.php'); ?>
