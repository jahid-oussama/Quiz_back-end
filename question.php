<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-----------------Include CSS MAIn that has nav  --------------------->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/main.css" />
  <!-- UniIcon CDN Link  -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <title>Document</title>
</head>

<body>
  <div class="main">
    <ul>
      <li>
        <i class="icon uil uil-check"></i>
        <div class="progress one">
          <p>1</p>
          <i class="uil uil-check"></i>
        </div>
        <p class="text">Quiz selected</p>
      </li>
      <li>
        <i class="icon uil uil-clipboard-notes"></i>
        <div class="progress two">
          <p>2</p>
          <i class="uil uil-check"></i>
        </div>
        <p class="text">Name selected</p>
      </li>
      <li>
        <i class="icon uil-accessible-icon-alt"></i>
        <div class="progress three">
          <p>3</p>
          <i class="uil uil-check"></i>
        </div>
        <p class="text">Taken the Quizz</p>
      </li>
      <li>
        <i class="icon uil-thumbs-up"></i>
        <div class="progress four">
          <p>4</p>
          <i class="uil uil-check"></i>
        </div>
        <p class="text">FINISHED</p>
      </li>
    </ul>
  </div>

  <div class="quiz-app">
    <div class="quiz-info">
      <div class="category">
        User Name:

        <span id="full_name1"></span>
      </div>

      <div class="count">Questions : <span></span></div>
    </div>
    <div class="quiz-area"></div>
    <div class="answer-area"></div>
    <button class="submit-button">Submit Answer</button>
    <div class="bullets">
      <div class="spans"></div>
      <div class="countdown"></div>
    </div>
    <div class="results"></div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/test.js"></script>
  <script src="js/js.js"></script>
</body>
<script>
  // document.getElementById("full_name1").innerText = sessionStorage.getItem("full_name");
</script>

</html>