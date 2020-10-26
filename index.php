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

<?php
  /* connect to database and get word list */
  include './inc/init.php';
  /* select a random word from the list */
  $sql = "SELECT `word` FROM `hangman` ORDER BY RAND() LIMIT 1";
  $query = mysqli_query($db, $sql);
  $fetch = mysqli_fetch_assoc($query);
  $word = $fetch['word'];
?>

<body>

<header>
	<nav></nav>
</header>

<!-- Start Hangman -->
<main class="container">
  
  <h1 class="text-center">Hangman</h1>
  
  <img id='image' src="./img/0.png" />
  
  <p class="text-center">Guess the word?</p>
  <p id="wordSpotLight" class="text-center pad-bot">_ _The word to be guessed goes here_ _</p>
  
  <div class="object-center">
    <div id="keyboard" class="text-center"></div>
  </div>
  
  <div class="object-center">
    <button class="btn-wide" onclick="reset();">Reset</button>
  </div>
  
  <div class="pad-bot"></div>
</main>
<!-- End Hangman -->

<footer>
  <!-- JS Libraries -->
  <div id="word"><?php echo $word; ?></div>
  <script src="./js/hangman.js" type="text/javascript"></script>
</footer>

</body>

</html>
