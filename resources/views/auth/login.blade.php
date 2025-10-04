<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .error { color: red; font-size: 0.9em; }
        button { padding: 10px 20px; background: #2b6cb0; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #1a4971; }
        a { color: #2b6cb0; text-decoration: none; }
        .nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Connexion</h1>
    <form method="" action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Se connecter</button>
        <p><a href="">Inscription</a></p>
    </form>
</body>
</html>