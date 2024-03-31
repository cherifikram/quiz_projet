<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            color: black;
            background: linear-gradient(to bottom right, blue, pink);

        }
       
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }
        h3 {
            margin-top: 0;
            color: #555;
            margin-top: 30px;
            margin-bottom: 0;
            color: black;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .options {
            background-color: rgb(178, 98, 198);
            margin: 6px;
            padding: 10px;
            border-radius: 6px;
            box-shadow: 0 4px 0 0 #bbbbbb;
            
        }
        .btn-next {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .titre_question{
            
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Vérifier si l'identifiant du quiz est passé en paramètre

    // Connexion à la base de données
    require "conexion.php";

    // Sélectionner les questions pour ce quiz
    $sql = "SELECT id_question, titre_question FROM questions1";
    $result = $cnx->query($sql);

    if ($result->num_rows > 0) {
        // Afficher les questions
        echo "<h2>Quiz Guide</h2>";
        echo "<form action='submit_quiz.php' method='post'>";
        echo "<input type='hidden' name='id_quiz'>";
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="titre_question">
            <?php
            echo "<h3> - " . $row['titre_question'] . "</h3>";
            ?>
            </div>
            <?php

            // Sélectionner les options pour cette question
            $question_id = $row['id_question'];
            $options_sql = "SELECT id_option, text_option FROM options1 WHERE id_question = $question_id";
            $options_result = $cnx->query($options_sql);

            if ($options_result->num_rows > 0) {
                // Afficher les options comme des cases à cocher
                while ($option_row = $options_result->fetch_assoc()) {
                    ?>
                    <div class="options">

                    <?php
                    echo "<input type='checkbox' name='options[]' value='" . $option_row['id_option'] . "'>";
                    echo $option_row['text_option'] . "<br>";
                    ?>
                    </div>
                    <?php
                }

            }
        }
        ?>
        <div class='btn-next'>
        <?php
        echo "<input type='submit' value='Voir resultat' >";
        ?>
        </div>
        <?php
        echo "</form>";
    } else {
        echo "Aucune question disponible pour ce quiz.";
    }

    $cnx->close();
    ?>
</div>

</body>
</html>
