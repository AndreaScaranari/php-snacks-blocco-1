<?php 
$user_name = trim($_GET['name']);
$user_email = trim($_GET['email']);
$user_age = trim($_GET['age']);
$message = 'Accesso negato!';

// * Validazione
if (strlen($user_name) > 3 && str_contains($user_email, '@') && str_contains($user_email, '.') && $user_age > 18) {
    $message = 'Accesso riuscito!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Boolform</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1 class="text-center py-3 fs-1"><?= $message ?></h1>
    </main>
</body>
</html>