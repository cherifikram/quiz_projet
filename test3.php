
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
        .Continue {
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
        }
        .Continue:hover {
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
        $score = 0; // Initialisation du score
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check'])) {
            $user_answer = $_POST['check'];
            $sql = "SELECT correction FROM options1 WHERE id_option = '$user_answer'";
            $result = mysqli_query($cnx, $sql);
            $row = mysqli_fetch_assoc($result);
            $correct_answer = $row['correction'];
            if ($user_answer == $correct_answer) {
                $score++; // Incrémentation du score si la réponse est correcte
            }
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
                        <input type="radio" name="check" value="<?php echo $option_row['id_option'];?>">
                        <?php echo $option_row['text_option'];?><br>
                    </div>
                    <br>
                    <?php
                    }
                    ?>
                    <div class="btn-next">
                        <button type="submit" name="Continue" value="Continue" class="Continue">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <script>
    document.querySelector('button[name="Continue"]').addEventListener('click', function() {
        var currentQuestionInput = document.querySelector('input[name="current_question"]');
        currentQuestionInput.value = parseInt(currentQuestionInput.value) + 1;
    });
    </script>
</body>
</html>
