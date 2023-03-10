<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-----------------Include CSS MAIn that has nav  --------------------->
  <link rel="stylesheet" href="css/main.css" />
  <!-- UniIcon CDN Link  -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <title>Document</title>
</head>

<body>
  <!-- --------------------------nav bar  -->
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="#!">🍀 Clover Quiz</a>
      </div>

      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <li><a href="#!">Home</a></li>
          <li><a href="#!">Quizs</a></li>
          <li>
            <a href="#!">Services</a>
            <ul class="nav-dropdown">
              <li><a href="#!">Made a Quiz</a></li>
              <li><a href="#!">See al the Quizs</a></li>
              <li><a href="#!">chi7Aja</a></li>
            </ul>
          </li>
          <li><a href="#!">About Us</a></li>
          <li><a href="#!">Contact</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- --------------------------nav bar  -->

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

  <!---------------------------------- cards -------------------------------->
  <div class="body">
    <ul class="card-wrapper">
      <li class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZzsiJ_yjuPBxwZJhnDgR_tqJqLTtMAx26EHFUb-BFtONB1D9vr5_XkpRsajCdo-h19hA&usqp=CAU" alt="" />
        <h3><a href="#popup1" id="one_one">AWS Training Certified </a></h3>

        <div id="popup1" class="popup-overlay">
          <div class="popup">
            <h2>Please enter your name</h2>
            <a class="close" id="back_back" href="#">&times;</a>
            <div class="slabel">
              <input id="credit-card" type="text" placeholder="Full Name" />
              <label for="credit-card">Full Name</label>
            </div>
            <div class="butt">
              <button class="button-23" id="two_two" role="button">
                Let's start
              </button>
            </div>
          </div>
        </div>
        <p>Lorem ipsum sit dolor amit</p>
      </li>

      <li class="card">
        <img src="https://images.unsplash.com/photo-1611083360739-bdad6e0eb1fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHw&ixlib=rb-1.2.1&q=80&w=400" alt="" />
        <h3><a href="">SON!</a></h3>
        <p>Lorem ipsum sit dolor amit</p>
      </li>

      <li class="card">
        <img src="https://images.unsplash.com/photo-1613230485186-2e7e0fca1253?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHw&ixlib=rb-1.2.1&q=80&w=400" alt="" />
        <h3><a href="">SON!</a></h3>
        <p>Lorem ipsum sit dolor amit</p>
      </li>
    </ul>
  </div>
  <!---------------------------------- cards -------------------------------->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



  <script src="js/js.js"></script>
  <script src="js/test.js"></script>
</body>

</html>