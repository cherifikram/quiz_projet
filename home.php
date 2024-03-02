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
































</body>
</html>









<?php


require "conexion.php";
$id_question = isset($_GET['id_question']) ? intval($_GET['id_question']) : 1;


$req_all_questions = "SELECT id_question, titre_question FROM questions";
$result_all_questions = mysqli_query($cnx, $req_all_questions);
$cnt = 0;
if ($result_all_questions) {
    while ($question_info = mysqli_fetch_assoc($result_all_questions)) {
        $id_question = $question_info['id_question'];
        $titre_question = $question_info['titre_question'];
        echo "<h5>" . htmlspecialchars($titre_question) . "</h5>";

        $req_options = "SELECT text_option FROM options WHERE id_question = $id_question";
        $result_options = mysqli_query($cnx, $req_options);

        if ($result_options) { 
            
            if (mysqli_num_rows($result_options) > 0) {
                echo "<form id='optionsForm$id_question' action='question.php' method='get'>";
       
                while ($option_info = mysqli_fetch_assoc($result_options)) {
                    
                    $cnt= $cnt+1;
                    $text_option = $option_info['text_option'];
                    echo "<input type='radio' name='selected_option".$cnt."' value='" . htmlspecialchars($text_option) . "'>";
                    echo htmlspecialchars($text_option) ."<br>";
                }
        
        //         echo "<input type='hidden' name='id_question' value='$id_question'>";
        //     } else {
        //         echo "Aucune option trouvée pour l'id_question=$id_question";
        //     }
        // } else {
        //     echo "Erreur lors de l'exécution de la requête pour les options : " . mysqli_error($cnx);
        // }
    }
} else {
    echo "Erreur lors de l'exécution de la requête pour toutes les questions : " . mysqli_error($cnx);
}
    }}
mysqli_close($cnx);
?>

