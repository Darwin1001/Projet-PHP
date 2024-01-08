<h1>Films</h1>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        .container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .movie {
            width: 250px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .movie img {
            width: 100%;
            height: auto;
        }

        .movie h2 {
            text-align: center;
            margin: 10px 0;
        }

        .movie p {
            text-align: center;
            padding: 0 10px;
        }
    </style>
    <div class="container">
        <?php foreach ($articles as $article) { ?>

            <div class = "movie">
                <img src="<?= $article['image'] ?>" alt="<?= $article['nom'] ?>">
                <h2><?= $article['nom'] ?></h2>
                <p><?php echo $article['description']; ?></p>
            </div>
    </div>

    <?php } ?>
