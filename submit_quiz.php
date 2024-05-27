<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz Score</title>
    <style>
        /* style.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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
        #Precedent {
            text-decoration: none;
            background-color: #008CBA;
        }
        .tous {
            border: 2px solid gray;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="tous">
        <div class="score">
            <?php
            // Start the session
            session_start();

            // Check if options have been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['options'])) {
                $selected_options = $_POST['options'];

                // Database connection
                require "conexion.php";

                // Initialize score and total questions
                $score = 0;
                $total_questions = 0;

                // Select correct options for each question
                $sql = "SELECT o.id_option, o.correction FROM options1 o JOIN questions1 q ON o.id_question = q.id_question";
                $result = $cnx->query($sql);

                if ($result->num_rows > 0) {
                    // Calculate score
                    while ($row = $result->fetch_assoc()) {
                        $total_questions++;
                        if (in_array($row['id_option'], $selected_options) && $row['correction'] == 1) {
                            $score++;
                        }
                    }
                }

                // Display score
                echo "<h1>Votre score pour ce quiz :</h1>";
                echo "<h2>Score : $score / $total_questions</h2>";

                $cnx->close();
            } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
            // Vérifier si l'utilisateur est connecté
            if(isset($_SESSION['email'])) {
                // Si oui, détruire la session
                session_destroy();
            }

            // Redirection vers la page d'accueil
            header("Location: autontifier.php");
            exit();

            } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Precedent'])) {
                header("Location: quiz.php");
                exit();
            } else {
                echo "Aucune réponse soumise.";
            }
            ?>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="button-container">
                <button type="submit" name="logout">Déconnexion</button>
                <button type="submit" name="Precedent" id="Precedent">Précédent</button>
            </div>
        </form>
    </div>
</body>
</html>
