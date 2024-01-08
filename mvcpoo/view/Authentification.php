<h2>Connection</h2>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; 
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .navbar {
            background-color: black;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px; 
        }

        h2 {
            color: yellow;
        }

        input {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: black;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

<form action="" method="post">
    email <input type="email" name="email"><br>
    Mot de passe <input type="password" name="mdp"><br>
    <button>Se connecter</button>

</form>