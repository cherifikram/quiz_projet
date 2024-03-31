<?php
// Vérifier si des options ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['options'])) {

    // Vérifier si l'identifiant du quiz est passé en paramètre
   


    $selected_options = $_POST['options'];

    // Connexion à la base de données
    require "conexion.php";

    // Initialiser le score et le nombre total de questions
    $score = 0;
    $total_questions = 0;

    // Sélectionner les options correctes pour chaque question
    $sql = "SELECT o.id_option, o.correction FROM options1 o JOIN questions1 q ON o.id_question = q.id_question ";
    $result = $cnx->query($sql);

    if ($result->num_rows > 0) {
        // Calculer le score
        while ($row = $result->fetch_assoc()) {
            $total_questions++;
            if (in_array($row['id_option'], $selected_options) && $row['correction'] == 1) {
                $score++;
            }
        }
    }

    // Afficher le score
    echo "<h2>Votre score pour ce quiz :</h2>";
    echo "<p>Score : $score / $total_questions</p>";

    $cnx->close();
} else {
    echo "Aucune réponse soumise.";
}
?>
