<?php
    $title = "Index";
    $headerTitle = "Willkommen auf meiner Website";
    require_once './assets/layout/header.php';
    ?>

<main>
    <h1>Willkommen auf meiner persönlichen Website!</h1>
    <p>Kurs: Web Programmierung von Ali Khorsandfard</p>
    <p>Informatiker Winter 2024</p>
    <p>Name: Serkan, Özcoban</p>
    <p>Ort: Mönchengladbach</p>

    <h2>Kontaktieren Sie mich</h2>
    <form>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Nachricht:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Absenden">
    </form>
    <br> <br> <br>
</main>

<?php include('assets/layout/footer.php'); ?>
