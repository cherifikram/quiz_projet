<!DOCTYPE html>
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

<?php
require "conexion.php";

$id_question = 3; // Remplacez par l'id de la question que vous souhaitez récupérer

// Sélectionnez le titre de la question et les options associées
$req = "SELECT questions.titre_question, options.option_text 
        FROM questions 
        LEFT JOIN options ON questions.id_question = options.id_question
        WHERE questions.id_question = $id_question";

$result = mysqli_query($cnx, $req);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $question_info = mysqli_fetch_assoc($result);
        $titre_question = $question_info['titre_question'];
        echo "<h1>" . htmlspecialchars($titre_question) . "</h1>";

        // Afficher les options
        echo "<ul>";
        do {
            $option_text = $question_info['option_text'];
            echo "<li>" . htmlspecialchars($option_text) . "</li>";
        } while ($question_info = mysqli_fetch_assoc($result));
        echo "</ul>";
    } else {
        echo "Aucun résultat trouvé pour l'id_question=$id_question";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($cnx);
}

mysqli_close($cnx);
?>
































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