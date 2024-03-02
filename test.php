<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <link rel="stylesheet" href="test.css">  -->
     <style>
        *{
          
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
:root{
    --light-purple-color: #8854C0;
    --light-color: #fff;
    --dark-color: #000;
    --grey-color: #f2f2f2;
    --transition: all 300ms ease-in-out;
}
.flex{
    display: flex;
    align-items: center;
    justify-content: center;
}
body{
    min-height: 100vh;
    font-family: 'Poppins', sans-serif;
    color: var(--dark-color);
    background: var(--grey-color);
   
    

}
.wrapper{
    background: var(--light-color);
    padding: 1.5rem 4rem 3rem 4rem;
    width: 600px;
    height: 680px;
    border-top-left-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
    position: relative;
    box-shadow: 0 4px 6px rgb(0 0 0 / 10%), 0 1px 3px rgb(0 0 0 / 10%);
}
.quiz-title{
    text-align: center;
    font-size: 2rem;
}
.quiz-score{
    text-align: right;
    font-weight: 600;
    font-size: 1.2rem;
    margin-bottom: 1rem;
    border: 5px solid var(--grey-color);
    font-weight: bold;
    width: 100px;
    height: 50px;
    margin: .5rem auto 1rem auto;
    color: var(--light-purple-color);
}
.quiz-question{
    font-size: 1.2rem;
    text-align: center;
    line-height: 1.3;
    margin-bottom: 2rem;
}
.quiz-question .category{
    font-size: 0.9rem;
    font-weight: 500;
    background-color: var(--light-purple-color);
    color: var(--light-color);
    padding: .2rem .4rem;
    border-radius: .2rem;
    margin-top: 0.5rem;
    display: inline-block;
}
.quiz-options{
    list-style-type: none;
    margin: 1rem 0;
}
.quiz-options li{
    border-radius: 0.5rem;
    font-weight: 600;
    margin: .7rem 0;
    padding: .4rem 1.2rem;
    cursor: pointer;
    border: 3px solid var(--light-purple-color);
    background-color: var(--light-purple-color);
    color: var(--light-color);
    box-shadow: 0 4px 0 0 #6c4298;
    transition: var(--transition);
}
.quiz-options li:hover{
    background-color: var(--grey-color);
    color: var(--dark-color);
    border-color: var(--grey-color);
    box-shadow: 0 4px 0 0 #bbbbbb;
}
.quiz-options li:active{
    transform: scale(0.97);
}
/* js related */
.selected{
    background-color: var(--grey-color)!important;
    color: var(--dark-color)!important;
    border-color: var(--grey-color)!important;
    box-shadow: 0 4px 0 0 #bbbbbb!important;
}
.quiz-foot button{
    border: none;
    border-radius: 0.5rem;
    outline: 0;
    font-family: 'Poppins', sans-serif;
    font-size: 1.2rem;
    font-weight: 600;
    padding: .5rem 1rem;    
    margin: 0 auto 0 auto;
    text-transform: uppercase;
    cursor: pointer;
    display: block;
    background-color: var(--grey-color);
    color: var(--dark-color);
    letter-spacing: 2px;
    transition: var(--transition);
    box-shadow: 0 4px 0 0 #bbbbbb;
}
.quiz-foot button:hover{
    background-color: #e6e6e6;
    box-shadow: 0 4px 0 0 #a7a7a7;
}
.quiz-foot button:active{
    transform: scale(0.95);
}
#play-again{
    display: none;
}
#result{
    padding: .7rem 0;
    text-align: center;
    font-weight: 600;
    font-size: 1.3rem;
}
#result i{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    line-height: 30px;
    margin-right: .5rem;
    margin-bottom: .5rem;
    background-color: var(--light-purple-color);
    color: var(--light-color);
}




@media(max-width: 678px){
    .quiz-title{
        font-size: 1.6rem;
    }
    .wrapper{
        margin: 3rem 0;
        width: 90%;
        height: 90%;
        padding: 1.5rem 1rem 3rem 1rem;
        border-top-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .quiz-foot button{
        font-size: 1rem;
    }
}
     </style>
    
</head>
<body class="flex">
    <div class = "wrapper">
        <div class = "quiz-container">
            <div class = "quiz-head">
                <h1 class = "quiz-title">Quiz Game</h1>
                <div class = "quiz-score flex">
                    <span id = "correct-score"></span>/<span id = "total-question"></span>
                </div>
            </div>
    <?php
 require "conexion.php";
 $current_question = isset($_POST['current_question']) ? $_POST['current_question'] : 1;
 $req="SELECT * FROM questions WHERE id_question=$current_question";
 $data=mysqli_query($cnx,$req);
 while($row=mysqli_fetch_assoc($data)){
    ?>
<div class = "quiz-body">
   
        <h2 class = "quiz-question"><?php echo $row['titre_question']; ?></h2>
    <?php
    
    $reqq="SELECT * FROM options WHERE id_question=$current_question";
    $dataa=mysqli_query($cnx,$reqq);
    ?>
    <form method="post" action="test.php"> <!-- Remplacez "page_actuelle.php" par le nom de votre script PHP -->
    <input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
    <?php
    while($row=mysqli_fetch_assoc($dataa)){
        ?>
        <ul class = "quiz-options">
   
     <li><?php echo $row['text_option'];?></li>
    </ul>
    <br>

        <?php

    }
}
 ?>
<div class="quiz-foot">
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
<script src = "script.js"></script>

 
</body>
</html>

 











 