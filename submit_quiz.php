
<style>
/* style.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.score {
    text-align: center;
    margin-top: 50px;
}

h1 {
    font-size: 24px;
}

h2 {
    font-size: 20px;
    margin-top: 20px;
}

.button-container {
    text-align: center; /* Centrer le contenu horizontalement */
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}

#Precedent{
    text-decoration: none;
    background-color: #008CBA;
}

.tous{
   
    border:2px solid gray;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}


</style>
<?php
// Vérifier si des options ont été soumises
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['options'])) {

    


    $selected_options = $_POST['options'];

    // Connexion à la base de données
    require "conexion.php";

    // Initialiser le score et le nombre total de questions
    $score = 0;
    $total_questions = 0;

    // Sélectionner les options correctes pour chaque question
   // $sql = "SELECT o.id_option, o.correction FROM options1 o JOIN questions1 q ON o.id_question = q.id_question ";
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
    ?>
    <div class="tous">
    <div class="score">
    <?php
    echo "<h1>Votre score pour ce quiz :</h1>";
    echo "<h2>Score : $score / 5</h2>";
    ?>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="button-container">
    <button type="submit" name="logout">Déconnexion</button>
    <button type="submit" name="Precedent" id="Precedent">Précédent</button>
    <!-- <a href="quiz.php"><button class="button">Précédent</button></a> -->
</div>
    </form>
    <?php

    $cnx->close();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    // Déconnexion de l'utilisateur
    session_start();
    session_destroy();

    // Redirection vers la page d'authentification
    header("Location: autontifier.php");

    exit();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Precedent'])) {
    
    header("Location: quiz.php");{
    
}}else{
    echo "Aucune réponse soumise.";
}
?>


</div>