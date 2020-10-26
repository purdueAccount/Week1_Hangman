<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hangman</title>
  <meta charset="utf-8">
	
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
  <!-- description and keywords -->
  <meta name="description" content="Hangman, the simple guessing game enjoyed by children of all ages." />
  <meta name="keywords" content="hangman, game, search, word, English, language, fun" />
	
  <!-- external document - links and scripts -->
  <link href="./css/adjust.css" rel="stylesheet" type="text/css" />
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<header>
	<nav></nav>
</header>

<!-- Start Hangman -->
<main class="container-786">
  <h1 class="text-center">Hangman</h1>
  
  <!-- TEMP BEGIN -->
  <div>Guess: <span>0</span> of 6</div>
  <!-- TEMP END -->
  
  <p>
    <img width="50%" src="./img/0.png"/>
  </p>
  <p>Guess the word?</p>
  <p>_ _The work to be guessed goes here_ _</p>
  
  <p>
    <div id="keyboard"></div>
  </p>
  
  <button class="btn" onclick="reset();">Reset</button>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</main>
<!-- End Hangman -->

<footer>
  <!-- JS Libraries -->
  <script src="./js/hangman.js" type="text/javascript"></script>
</footer>

</body>

</html>
