<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>register</title>
</head>
<body>

<form action="#" method="POST">
            <fieldset>
                <legend><b>Register</b></legend>
                <label for="firstname">FirstName:</label>
                <input type="text"  placeholder="   enter firstname" name="firstname" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"  placeholder="gmail@gmail.com" required><br><br>

                <label for="password">Password:</label>
                <input type="text" id="password" name="password" placeholder="      password"  required> <br><br>
                <label for="type">type:</label>
                <input type="radio" name="choix" id="stagaire" value="stagaire">
                <label for="option1">stagaire</label>
                
                <input type="radio" name="choix" id="administrateur" value="administrateur">
                <label for="option2">administrateur</label> <br><br>
                <input type="checkbox" id="terms_and_condition">
                <label for="terms_and_condition"> I agree with the terms and condition</label><br><br>
                
                <button name="register">Register</button><br><br>   
                <!-- <small>having Acount? <a href="logiiin.html"><b>login</b></a></small> -->
            </fieldset>
        </form>
        
    </main>
</body>
</html>



<?php

//  require "conexion.php";
//     if(isset($_POST['register'])){
//         $lg=$_POST['firstname'];
//         $email=$_POST['email'];
//         $pssword=$_POST['password'];
//         $choix=$_POST['choix'];
//         if(!empty($lg) && !empty($email) && !empty($pssword) && !empty($choix) ){
//             $req=("INSERT INTO inscription(firstName, email, mot_passe) VALUES('$lg','$email','$pssword',$choix)");
//             $result=mysqli_query($cnx,$req);
//             if(mysqli_fetch_assoc($result)){
//               header("location:contact.php");
//             }else{
//               echo"<p style='color:red'>erreur!!</p>";
              
//             }
//             mysqli_close($cnx);
            
//         }else{
//             echo"<p style='color:red'>essayez de saisir votre information</p>";
//         }
//     }
//     ?>

<?php
require "conexion.php";

if(isset($_POST['register'])){
    $lg = $_POST['firstname'];
    $email = $_POST['email'];
    $pssword = $_POST['password'];
    $choix = $_POST['choix'];

    if(!empty($lg) && !empty($email) && !empty($pssword) && !empty($choix)){
        $req = "INSERT INTO utilisateurs(firstName, email, mot_passe, typee) VALUES ('$lg', '$email', '$pssword', '$choix')";
        $result = mysqli_query($cnx, $req);

        if($result){
            if($choix=='stagaire'){
                header("location: stagaire.php");
            }
            elseif ($choix=='administrateur') {
                header("location: administrateur.php");
                
            }
            exit();
        } else {
            echo "<p style='color:red'>Error: " . mysqli_error($cnx) . "</p>";
        }

        mysqli_close($cnx);
    } else {
        echo "<p style='color:red'>Please fill in all the information</p>";
    }
}
?>