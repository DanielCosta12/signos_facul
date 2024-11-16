<?php include('layouts/header.php'); ?>

<main class="container mt-5">
    <h2 class="text-center">Consulte seu signo</h2>
    <form method="post" action="./show_zodiac.php" class="text-center">
    <div class="form-group">
        <label for="dataNascimento">Digite sua data de nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Consultar</button>
</form>
</main>

<?php include('layouts/footer.php'); ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
