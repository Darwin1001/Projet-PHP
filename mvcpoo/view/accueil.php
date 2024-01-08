<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>

    <style>
        

        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;j
            height: 100vh;
            margin-top : 40px;
        }

        h1 {
            color: yellow;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            margin-top: 10px;
            color : white;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: white;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1> Efreiflix</h1>
        <p>Bienvenue sur le meilleur site de streaming de séries et films Star Wars.</p>
        <a href="Articles.php" class="button">Commencer</a>
    </div>

</body>
</html>
