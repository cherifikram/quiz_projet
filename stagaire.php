<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stagaire</title>
    <!-- <link rel="stylesheet" href="stagaire.css"> -->
    <style>
      body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: none;

}

html {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.div1{
  padding: 50px;
  background-color:rgb(143, 68, 213);
  color: white;
  height: 100px;
}
.div1 .h1{
  font-size: xx-large;
  text-align: center;
  font-family: Verdana, Tahoma, sans-serif;
}



.container {
  padding: 0 16px;
 
  
}
.container p{
  text-align: center;
}
.container a{
  display: flex;
  justify-content: center;
}

.container .title {
  color: grey;
}

.button {    display: inline-block;
    background-color: rgb(49, 51, 190);
    color: white;
    font-size: 18px;
    padding: 8px 16px;
    width: 80px;
    height: 40px;
    margin-bottom: 20px;
    border-radius: 6px;
    border: 1px solid black;
    transition: all 0.3s ease;
}


.button:hover {
  background-color:gray;
  
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  padding-top: 15px;
}  




    </style>
</head>
<body>
<div class="div1">
    <?php
    require "conexion.php";
  
   

    // Requête SQL pour récupérer le nom du stagiaire
    $sql = "SELECT firstname FROM utilisateurs1 "; // Remplacez id_stagiaire par l'ID du stagiaire que vous souhaitez récupérer

    $result = $cnx->query($sql);

    if ($result->num_rows > 0) {
        // Afficher le nom du stagiaire dans l'en-tête de la page
        while($row = $result->fetch_assoc()) {
            echo "<h1>Bienvenue, " . $row["firstname"] . "</h1>";
        }
    } else {
        echo "<h1>Bienvenue, Stagiaire</h1>"; // Message par défaut si aucun nom n'est trouvé
    }

    // Fermer la connexion à la base de données
    $cnx->close();
    ?>
</div>

    
</div>


  <div class="div1">
        <h1>Quiz</h1>
      
</div>

<div class="column">
    <div class="card">
     <img src="HTML5_logo_and_wordmark.svg.png" alt="" style="width:50%" height=":50%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php?"> <button class="button" > start</p></button></a>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
     <img src="CSS3_logo_and_wordmark.svg.png" alt="" style="width:37%" height=":37%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php?"> <button class="button" > start</p></button></a>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
     <img src="image.webp" alt="" style="width:46%" height=":46%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php"> <button class="button" > start</p></button></a>
      </div>
      <br>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
     <img src="phpp-logo.png" alt="" style="width:50%" height=":50%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php"> <button class="button" > start</p></button></a>
      </div>
    </div>
  </div>

 
  <div class="column">
    <div class="card">
     <img src="python.png" alt="" style="width:45%" height=":45%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php"> <button class="button" > start</p></button></a>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="card">
     <img src="react.png" alt="" style="width:50%" height=":50%" class="img">
      <div class="container">
        <p class="title"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam praesentium eum . </p>
        <a href="quiz.php"> <button class="button" > start</p></button></a>
      </div>
    </div>
  </div>
    
</body>
</html>








