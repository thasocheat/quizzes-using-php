<?php
    session_start();
    require_once ('../database/connection.php');
    require_once ('../function/function.php');
    
      $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom To Bootstrap Quizes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Link Style -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/navbar.css">

    <link rel="stylesheet" href="../style/quize.css">

    <!-- Khmer Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Hanuman:wght@300;400&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Battambang', cursive;
            font-family: 'Hanuman', serif;
            font-family: 'Kdam Thmor Pro', sans-serif;
        }
    </style>


</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid hello">
    <span>Hello🖐<span style="color: red;"> <?php echo $user_data['user_name']; ?></span></span>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
        <!-- <p id="demo"></p> -->
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        
       
      </ul>

      <div class="button-logout">
        <a href="../start-quizes.php" class="btn btn-info">Back</a>
        <a href="forms/sign_up.php" class="btn btn-info">Log Out</a>
      </div>
     
    </div>
    
  </div>
  
</nav>


<?php
            
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];


    $totalCorrect = 0;
    // 1
    if ($answer1 == "B") { 
      $totalCorrect++;
      $answer1 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">'; 
    }else{
      $answer1 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }
    // 2
    if ($answer2 == "A") { 
      $totalCorrect++;
      $answer2 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">';  
    }else{
      $answer2 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }
    // 3
    if ($answer3 == "C") { 
      $totalCorrect++;
      $answer3 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">';  
    }else{
      $answer3 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }
    // 4
    if ($answer4 == "B") { 
      $totalCorrect++;
      $answer4 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">';  
    }else{
      $answer4 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }
    // 5
    if ($answer5 == "D") { 
      $totalCorrect++; 
      $answer5 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">'; 
    }else{
      $answer5 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }
    // 6
    if ($answer6 == "C") { 
      $totalCorrect++; 
      $answer6 = '<img src="../quizes-img/images/right-answer.png" alt="Check Image" width="20%">'; 
    }else{
      $answer6 = '<img src="../quizes-img/images/wrong-answer.png" alt="Wrong Image" width="20%">';
    }

    $totalAnswer = $totalCorrect;
    if ($totalAnswer >= 5) { 
      // $totalCorrect++;
      $totalAnswer = '<img src="../quizes-img/images/happy.png" alt="Happy Image" width="50%">'; 
    }else{
      $totalAnswer = '<img src="../quizes-img/images/sad.png" alt="Sad Image" width="50%">'; 
    }


    
    
    
    
    
    
    
?>
<!-- <img src="../quizes-img/images/happy.png" alt="Sad Image" width="15%"> -->
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <?php echo "<h4 class='text-center' id='results'>$totalCorrect / 6 correct</h4>";?>
            <div class="continer">
              <div class="row">
                <div class="col-sm-4">
                  <?php 
                  echo $totalAnswer; 
                  ?>
                  
                </div>
                <div class="col-sm-4">
                  <table class="table table-bordered" style="border: 1px solid black;">
                      <thead>
                          <tr  style="width: 150px;">
                            <th scope="col">Number</th>
                            <th scope="col">Answers</th>
                            <th scope="col">Your Choose</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>B</td>
                              <td ><?php echo $_POST['question-1-answers']; ?></td>
                              <td ><?php echo $answer1; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>A</td>
                              <td ><?php echo $_POST['question-2-answers']; ?></td>
                              <td><?php echo $answer2; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>C</td>
                              <td ><?php echo $_POST['question-3-answers']; ?></td>
                              <td><?php echo $answer3; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>B</td>
                              <td ><?php echo $_POST['question-4-answers']; ?></td>
                              <td><?php echo $answer4; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">5</th>
                              <td>D</td>
                              <td ><?php echo $_POST['question-5-answers']; ?></td>
                              <td><?php echo $answer5; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">6</th>
                              <td>C</td>
                              <td ><?php echo $_POST['question-6-answers']; ?></td>
                              <td><?php echo $answer6; ?></td>
                          </tr>
                          
                      </tbody>
                  </table>
                </div>
                <div class="col-sm-4">
                  <?php 
                  echo $totalAnswer; 
                  ?>
                  
                </div>
                <div class="col-sm-12 text-center">
                  <a href="../bootstrap-quizes.php" class="start-quize">Play Again</a>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>

    
    
</body>
</html>