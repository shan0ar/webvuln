<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'webadmin') {
        header('Location: /17b3c0102907df7eeb70a4abb148bf74f2e087fd82d0e865d5b1c895c3d7467d/index.php');
        exit();
    } elseif ($username === 'admin') {
        $message = 'Le mot de passe n\'est pas le bon, mais à force d\'essayer, tu trouveras ;)';
    } else {
        $message = 'Utilisateur inconnu au bataillon jeune homme !';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        p {
            color: #ff0000;
            text-align: center;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>

    <form method="post" action="login.php">
        <h2>Connexion</h2>

        <?php
        if (isset($message)) {
            echo '<p>' . $message . '</p>';
        }
        ?>

        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Connexion">
    </form>

</body>
</html>
