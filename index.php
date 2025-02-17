<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Brain Quest</title>

  <!-- STYLESHEETS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/front_style.css">


  <!-- ICON -->
  <link rel="icon" href="icon.ico">


  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- FONT AWESOME JS -->
  <script src="https://kit.fontawesome.com/7cec356310.js" crossorigin="anonymous"></script>

</head>

<body>
  <section id="navigation-bar">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">
        <img src="ASSETS/icon.png" width="50" height="50" class="d-inline-block align-top" alt="">
        Brain Quest
      </a>
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
        </div>
      </div>
    </nav>

  </section>

  <section id="front-page">
    <div class="top-container">
      <h1 class="name">BRAIN QUEST</h1>
      <i class="fad fa-head-side-brain"></i>
      <h2 class="subhead">QUIZ TIME</h2>
      <button class="spec"><a href="login.php">BEGIN</a></button>
    </div>
  </section>


  <section id="footer">
    <div class="bottom-container">
      <p class="love">Made with ❤️ by group D</p>
      <div class="open-source">
        <p>This website is <a href="https://github.com/Innoreva/Quiz-Web-App"><strong> open source</strong></a>.</p>
      </div>
    </div>


  </section>


</body>

</html>
