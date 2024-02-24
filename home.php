<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

label {
display: block;
}

input {
width: 30px;
margin-left: 20px;
}



/* 
</style>
</head>
<body>
  
<form id="form1">
    <?php
    //  require "conexion.php";
    //  $req=("SELECT titre_question FROM question WHERE id_question=3");
    //  $result = mysqli_query($cnx, $req);
    //  if ($result) {
    //     $res = mysqli_fetch_assoc($result);
        
    //     if ($res) {
    //         echo "<h1>".$req."</h1>";
    //     } else {
    //         echo "Aucun résultat trouvé pour l'id_question=3";
    //     }
    // } 
    
//     require "conexion.php";
    
//     $id_question = 3; // Remplacez par l'id de la question que vous souhaitez récupérer

//     $req = "SELECT titre_question FROM questions WHERE id_question = $id_question";
//     $result = mysqli_query($cnx, $req);

//     if ($result) {
//         $res = mysqli_fetch_assoc($result);
        
//         if ($res) {
//             $titre_question = $res['titre_question'];
//             echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";
//         } else {
//             echo "Aucun résultat trouvé pour l'id_question=$id_question";
//         }
//     } else {
//         echo "Erreur lors de lexécution de la requête : " . mysqli_error($cnx);}

// ?>

// <?php
// require "conexion.php";

// $id_question = 3; // Remplacez par l'id de la question que vous souhaitez récupérer

// // Sélectionnez le titre de la question et les options associées
// $req = "SELECT questions.titre_question, options.option_text 
//         FROM questions 
//         LEFT JOIN options ON questions.id_question = options.id_question
//         WHERE questions.id_question = $id_question";

// $result = mysqli_query($cnx, $req);

// if ($result) {
//     if (mysqli_num_rows($result) > 0) {
//         $question_info = mysqli_fetch_assoc($result);
//         $titre_question = $question_info['titre_question'];
//         echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";

//         // Afficher les options
//         echo "<ul>";
//         do {
//             $option_text = $question_info['option_text'];
//             echo "<li>" . htmlspecialchars($option_text) . "</li>";
//         } while ($question_info = mysqli_fetch_assoc($result));
//         echo "</ul>";
//     } else {
//         echo "Aucun résultat trouvé pour l'id_question=$id_question";
//     }
// } else {
//     echo "Erreur lors de l'exécution de la requête : " . mysqli_error($cnx);
// }

// mysqli_close($cnx);
?> */ -->
































<!-- <h2>1. HTML est considéré comme ______ ?</h2>
<label for="a1"><input type="radio" name="var1" value="0" id="a1" />Langage de programmation</label>
<label for="a2"><input type="radio" name="var1" value="0" id="a2" /> Langage POO</label>
<label for="a3"><input type="radio" name="var1" value="0" id="a3" />Langage de haut niveau</label>
<label for="a4"><input type="radio" name="var1" value="1" id="a4"/> Langage de balisage</label>

<h2>2. Si nous souhaitons définir le style d'un seule élément, quel sélecteur css utiliserons-nous?</h2>
<label for="b1"><input type="radio" name="var2" value="1" id="b1" /> id</label>
<label for="b2"><input type="radio" name="var2" value="0" id="b2" /> text</label>
<label for="b3"><input type="radio" name="var2" value="0" id="b3" /> name</label>
<label for="b4"><input type="radio" name="var2" value="0" id="b4"/> class</label>

<h2>3. Une page conçue en HTML s'appelle _____?</h2>
<label for="c1"><input type="radio" name="var3" value="1" id="c1" /> Application</label>
<label for="c2"><input type="radio" name="var3" value="0" id="c2" />  Page de garde</label>
<label for="c3"><input type="radio" name="var3" value="0" id="c3" /> Front-end</label>
<label for="c4"><input type="radio" name="var3" value="0" id="c4"/>  Page Web</label> -->
<!-- <h2>1. HTML est considéré comme ______ ?</h2>

<label for="a1"><input type="radio" name="variable" value="1" id="a1" />Langage de programmation</label>
<label for="a2"><input type="radio" name="variable" value="0" id="a2" /> Langage POO</label>
<label for="a3"><input type="radio" name="variable" value="0" id="a3" />Langage de haut niveau</label>
<label for="a4"><input type="radio" name="variable" value="0" id="a4"/> Langage de balisage</label>

<h2>1. HTML est considéré comme ______ ?</h2>
<label for="a1"><input type="radio" name="variable" value="1" id="a1" />Langage de programmation</label>
<label for="a2"><input type="radio" name="variable" value="0" id="a2" /> Langage POO</label>
<label for="a3"><input type="radio" name="variable" value="0" id="a3" />Langage de haut niveau</label>
<label for="a4"><input type="radio" name="variable" value="0" id="a4"/> Langage de balisage</label> -->
</body>
</html>









<?php


require "conexion.php";

// $id_question = 3; // Remplacez par l'id de la question que vous souhaitez récupérer

// // Sélectionnez le titre de la question
// $req_question = "SELECT titre_question FROM questions WHERE id_question = $id_question";
// $result_question = mysqli_query($cnx, $req_question);

// if ($result_question) {
//     $question_info = mysqli_fetch_assoc($result_question);

//     if ($question_info) {
//         $titre_question = $question_info['titre_question'];
//         echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";
//     } else {
//         echo "Aucun résultat trouvé pour l'id_question=$id_question";
//     }
// } else {
//     echo "Erreur lors de l'exécution de la requête pour la question : " . mysqli_error($cnx);
// }

// //Sélectionnez les options de la question
// $req_options = "SELECT text_option FROM options WHERE id_question = $id_question";
// $result_options = mysqli_query($cnx, $req_options);

// if ($result_options) {
//     if (mysqli_num_rows($result_options) > 0) {
//         echo "<div>";

//         while ($option_info = mysqli_fetch_assoc($result_options)) {
//             $text_option = $option_info['text_option'];
//             echo "<input type='radio' name='options' value='" . htmlspecialchars($text_option) . "'>";
//             echo htmlspecialchars($text_option) ."<br>";
//         }

//         echo "</div>";
//     } else {
//         echo "Aucune option trouvée pour l'id_question=$id_question";
//     }
// } else {
//     echo "Erreur lors de l'exécution de la requête pour les options : " . mysqli_error($cnx);
// }

//  mysqli_close($cnx);
// ?>
<!-- // <button type="button">next</button> -->





<?php
// ... (connexion à la base de données et récupération des données)

// $id_question = isset($_GET['id_question']) ? intval($_GET['id_question']) : 1;

// // Récupérer le titre de la question
// $req_question = "SELECT id_question, titre_question FROM questions WHERE id_question = $id_question";
// $result_question = mysqli_query($cnx, $req_question);

// if ($result_question) {
//     $question_info = mysqli_fetch_assoc($result_question);

//     if ($question_info) {
//         $titre_question = $question_info['titre_question'];
//         $id_question = $question_info['id_question'];
//         echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";

//         // Récupérer les options de la question
//         $req_options = "SELECT text_option FROM options WHERE id_question = $id_question";
//         $result_options = mysqli_query($cnx, $req_options);

//         if ($result_options) {
//             if (mysqli_num_rows($result_options) > 0) {
//                 echo "<form id='optionsForm'>";
        
//                 while ($option_info = mysqli_fetch_assoc($result_options)) {
//                     $text_option = $option_info['text_option'];
//                     echo "<input type='radio' name='selected_option' value='" . htmlspecialchars($text_option) . "'>";
//                     echo htmlspecialchars($text_option) ."<br>";
//                 }
        
//                 echo "<input type='hidden' name='id_question' value='$id_question'>";
//                 echo "<button type='button' onclick='loadNextQuestion()'>Next</button>";
//                 echo "</form>";
//             } else {
//                 echo "Aucune option trouvée pour l'id_question=$id_question";
//             }
//         } else {
//             echo "Erreur lors de l'exécution de la requête pour les options : " . mysqli_error($cnx);
//         }
//     } else {
//         echo "Aucun résultat trouvé pour l'id_question=$id_question";
//     }
// } else {
//     echo "Erreur lors de l'exécution de la requête pour la question : " . mysqli_error($cnx);
// }

// mysqli_close($cnx);
// ?>
// <script>
// function loadNextQuestion() {
//     var form = document.getElementById('optionsForm');
//     var selectedOption = form.querySelector('input[name="selected_option"]:checked');

//     if (selectedOption) {
//         // Envoyer une requête asynchrone pour récupérer la prochaine question
//         var xhr = new XMLHttpRequest();
//         xhr.onreadystatechange = function() {
//             if (xhr.readyState == 4 && xhr.status == 200) {
//                 // Mettre à jour le contenu de la page avec la nouvelle question
//                 var response = JSON.parse(xhr.responseText);
//                 document.getElementById('questionContainer').innerHTML = response.question_html;

//                 // Réinitialiser les boutons radio
//                 var radioButtons = form.querySelectorAll('input[name="selected_option"]');
//                 radioButtons.forEach(function(button) {
//                     button.checked = false;
//                 });
//             }
//         };

//         // Envoyer une requête GET au fichier PHP pour obtenir la prochaine question
//         var nextQuestionId = <?php echo $id_question + 1; ?>;
//         xhr.open('GET', 'question.php?id_question=' + nextQuestionId, true);
//         xhr.send();
//     } else {
//         alert("Veuillez sélectionner une option avant de passer à la question suivante.");
//     }
// }
// </script>
<?php
// ... (connexion à la base de données et récupération des données)

$id_question = isset($_GET['id_question']) ? intval($_GET['id_question']) : 1;

// Récupérer le titre de la question
$req_question = "SELECT id_question, titre_question FROM questions WHERE id_question = $id_question";
$result_question = mysqli_query($cnx, $req_question);

if ($result_question) {
    $question_info = mysqli_fetch_assoc($result_question);

    if ($question_info) {
        $titre_question = $question_info['titre_question'];
        $id_question = $question_info['id_question'];
        echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";

        // Récupérer les options de la question
        $req_options = "SELECT text_option FROM options WHERE id_question = $id_question";
        $result_options = mysqli_query($cnx, $req_options);

        if ($result_options) {
            if (mysqli_num_rows($result_options) > 0) {
                echo "<form id='optionsForm' action='question.php' method='get'>";
        
                while ($option_info = mysqli_fetch_assoc($result_options)) {
                    $text_option = $option_info['text_option'];
                    echo "<input type='radio' name='selected_option' value='" . htmlspecialchars($text_option) . "'>";
                    echo htmlspecialchars($text_option) ."<br>";
                }
        
                echo "<input type='hidden' name='id_question' value='$id_question'>";
                echo "<button type='button' onclick='loadNextQuestion()'>Next</button>";
                echo "</form>";
            } else {
                echo "Aucune option trouvée pour l'id_question=$id_question";
            }
        } else {
            echo "Erreur lors de l'exécution de la requête pour les options : " . mysqli_error($cnx);
        }
    } else {
        echo "Aucun résultat trouvé pour l'id_question=$id_question";
    }
} else {
    echo "Erreur lors de l'exécution de la requête pour la question : " . mysqli_error($cnx);
}

mysqli_close($cnx);
?>

<script>
function loadNextQuestion() {
    var form = document.getElementById('optionsForm');
    var selectedOption = form.querySelector('input[name="selected_option"]:checked');

    if (selectedOption) {
        // Envoyer une requête asynchrone pour récupérer la prochaine question
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Actualiser la page avec la nouvelle question
                document.open();
                document.write(xhr.responseText);
                document.close();
            }
        };

        // Envoyer une requête GET au fichier PHP pour obtenir la prochaine question
        var nextQuestionId = <?php echo $id_question + 1; ?>;
        xhr.open('GET', 'question.php?id_question=' + nextQuestionId, true);
        xhr.send();
    } else {
        alert("Veuillez sélectionner une option avant de passer à la question suivante.");
 }
}
</script>
