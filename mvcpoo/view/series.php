<h1>Séries</h1>
<?php foreach ($series as $serie) { ?>

        <div>
            <h2><?= $serie['nom'] ?></h2>
            <p><?php echo $serie['description']; ?></p>
        </div>


<?php } ?>