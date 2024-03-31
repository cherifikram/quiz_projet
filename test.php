<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Votre CSS existant */
    </style>
</head>
<body>
    <main class="main">
        <?php
        require "conexion.php"; // Assurez-vous que le fichier de connexion est correctement inclus

        // Initialisez le score
        $score = 0;

        $current_question = isset($_POST['current_question']) ? $_POST['current_question'] : 1;
        $req = "SELECT * FROM questions1 WHERE id_question=$current_question";
        $data = mysqli_query($cnx, $req);
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
            <div class="container">
                <div class="container-content">
                    <h1>Quiz Guide</h1>
                    <h2><?php echo $row['titre_question']; ?></h2>
                    <?php
                    $reqq = "SELECT * FROM options1 WHERE id_question=$current_question";
                    $dataa = mysqli_query($cnx, $reqq);
                    ?>
                    <form method="post" action="test3.php">
                        <input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
                        <?php
                        while ($row = mysqli_fetch_assoc($dataa)) {
                            ?>
                            <div class="options">
                                <input type="radio" name="check[<?php echo $row['id_question']; ?>]" value="<?php echo $row['correction'] ?>" ><?php echo $row['text_option']; ?><br>
                            </div>
                            <br>
                        <?php
                        }
                        ?>
                        <div class="btn-next">
                            <button type="submit" name="continuee" value="continuee" class="continuee">continuee</button>
                        </div>
                    </form>
                </div>
            </div>

        <?php
        }
        ?>

        <!-- Affichage du score -->
        <div class="score-section">
            <h2>Score: <?php echo $score; ?></h2>
        </div>

    </main>

    <script>
        document.querySelector('button[name="continuee"]').addEventListener('click', function() {
            var options = document.querySelectorAll('input[name^="check"]:checked');
            options.forEach(function(option) {
                if (option.value === 'true') {
                    <?php $score++; ?> // Augmentez le score si l'option est correcte
                }
            });
        });
    </script>

</body>
</html>
