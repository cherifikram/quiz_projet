<?php
// Connexion à la base de données
require "conexion.php";

// Vérifier si l'identifiant du quiz est passé en paramètre
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_quiz'])) {
    $id_quiz = $_POST['id_quiz'];

    // Sélectionner les questions pour ce quiz
    $sql = "SELECT id_question, titre_question FROM questions1 WHERE id_quiz = $id_quiz";
    $result = $cnx->query($sql);

    if ($result->num_rows > 0) {
        // Afficher les questions
        echo "<h2>Quiz Guide</h2>";
        echo "<form action='submit_quiz.php' method='post'>";
        echo "<input type='hidden' name='id_quiz' value='$id_quiz'>";
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
        echo "<input type='submit' value='Voir résultat' >";
        ?>
        </div>
        <?php
        echo "</form>";
    } else {
        echo "Aucune question disponible pour ce quiz.";
    }
} else {
    echo "Erreur : Identifiant du quiz non spécifié.";
}

$cnx->close();
?>
