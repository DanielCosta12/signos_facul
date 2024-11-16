<?php
function getZodiacSign($date) {
    $month = (int)$date->format('m');
    $day = (int)$date->format('d');

    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "Aquário";
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "Peixes";
    } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return "Áries";
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "Touro";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return "Gêmeos";
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return "Câncer";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "Leão";
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "Virgem";
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "Libra";
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "Escorpião";
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "Sagitário";
    } else {
        return "Capricórnio";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataNascimento = $_POST['dataNascimento'];

    // Convertendo a string da data em um objeto DateTime
    $date = new DateTime($dataNascimento);
    $signo = getZodiacSign($date);

    include('layouts/header.php');
    ?>
    
    <main class="container mt-5">
        <h2 class="text-center">Seu signo é: <?php echo $signo; ?></h2>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </main>

    <?php include('layouts/footer.php'); ?>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>
