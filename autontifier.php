<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logiiin.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <label for="username">Username :</label>
                <input type="text" id="username" placeholder="enter username"  name="Username"><br><br>

                <label for="password">Password :</label>
                <input type="text" id="password" placeholder="       password " name="password"> <br><br>
                <button name="connecter"><b>connecter</b></button><br>
                <small>Not having Acount yet? <a href="register.html"><b>register</b></a></small>

                
        </form>
        <?php
        require "conexion.php";
        if(isset($_POST['connecter'])){
            $Username = $_POST['Username'];
            $password = $_POST['password'];

            if(!empty($Username) && !empty($password)){
                $req = ("SELECT firstName,mot_passe FROM inscription WHERE firstName='$Username' AND mot_passe='$password'");
                $result = mysqli_query($cnx, $req);
                
            if(mysqli_fetch_assoc($result)){
              header("location:contact.php");
            }else{
              echo"<p style='color:red'>erreur!!</p>";
              
            }
            mysqli_close($cnx);

                // if($result){
                //     header("location: contact.php");
                // }
                // else{
                //     echo "<p style='color:red'>vous navez pas du compte</p>";
                // }
        
         }
        }
    

        ?>

</body>
</html>