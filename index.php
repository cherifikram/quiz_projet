
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            color: black;
            background: linear-gradient(to bottom right, blue, pink);
        }
        .main {
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .container {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container-content {
            border: 1px solid grey;
            border-radius: 6px;
            padding: 25px 15px;
            height: 55%;
            width: 50%;
            background: #fff;
        }
        .container-content h1 {
            text-align: center;
            margin-top: 0px;
        }
        .options {
            background-color: rgb(178, 98, 198);
            margin: 0px;
            padding: 10px;
            border-radius: 6px;
            box-shadow: 0 4px 0 0 #bbbbbb;
        }
        .btn-next {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .Continue, .Voir-resultat {
            width: 110px;
            height: 30px;
            background: blue;
            border: none;
            outline: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            transition: .5s;
            margin-right: 10px;
        }
        .Continue:hover, .Voir-resultat:hover {
            background: #fff;
            color: #c40094;
        }
    </style>
</head>
<body>
    <main class="main">
        <?php
        require "conexion.php";
        
        $current_question = isset($_POST['current_question']) ? $_POST['current_question'] : 1;
        
        // Vérifier si des options ont été soumises
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['options'])) {

            $selected_options = $_POST['options'];

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
        }
        ?>
        <div class="container">
            <div class="container-content">
                <h1>Quiz Guide</h1>
                <?php
                $req = "SELECT * FROM questions1 WHERE id_question = $current_question";
                $data = mysqli_query($cnx, $req);
                $question_row = mysqli_fetch_assoc($data);
                ?>
                <h2><?php echo $question_row['titre_question']; ?></h2>
                <?php
                $reqq = "SELECT * FROM options1 WHERE id_question = $current_question";
                $dataa = mysqli_query($cnx, $reqq);
                ?>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
                    <?php
                    while ($option_row = mysqli_fetch_assoc($dataa)) {
                    ?>
                    <div class="options">
                        <input type="checkbox" name="options[]" value="<?php echo $option_row['id_option'];?>">
                        <?php echo $option_row['text_option'];?><br>
                    </div>
                    <br>
                    <?php
                    }
                    ?>
                    <div class="btn-next">
                        <button type="submit" name="Continue" value="Continue" class="Continue">Continue</button>
                        <a href="res.php" class="Voir-resultat">Voir Résultat</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
