/*
  JavaScript for Hangman
  version: 1.0.0
  date: 10/25/2020 m/d/y
  author: Robert Charles
*/

let answer = "";
let maxWrong = 6;
let mistakes = 0;
let guessed = [];
let wordStatus = null;
let gameOver = false;

function randomWord() {
  answer = document.getElementById('word').innerHTML;
  document.getElementById('word').innerHTML = '';
}

function createKeyboard() {
  let buttonsHTML = 'abcdefghijklmnopqrstuvwxyz'.split('').map(
    letter => `<button id="` + letter + `" 
    onClick="handleGuess('` + letter + `')">` + letter.toUpperCase() + `</button>`
  ).join('');
  document.getElementById('keyboard').innerHTML = buttonsHTML;
}

function guessWord() {
  wordStatus = answer.split('').map(
    letter => 
    (guessed.indexOf(letter) >= 0 ? ' ' + letter + ' ' : " _ ")
  ).join('');
  document.getElementById('wordSpotLight').innerHTML = wordStatus;
  if(!wordStatus.includes('_')) {
    alert('You Win!!!');
  }
}


function handleGuess(chosenLetter) {
  if(gameOver) return;
  guessed.indexOf(chosenLetter) === -1 ? guessed.push(chosenLetter) : null;
  document.getElementById(chosenLetter).setAttribute('disabled', true);
  
  if(answer.indexOf(chosenLetter) >= 0) {
    guessWord();
  } else if(answer.indexOf(chosenLetter) === -1) {
    mistakes++;
    updateMistakes();
  }
  if(mistakes >= maxWrong) {
    gameOver = true;
    alert('Game Over\nYou LOSE!!!\n"' + answer + '"');
  }
}

function updateMistakes() {
  document.getElementById('image').setAttribute('src', './img/' + mistakes + '.png');
}

function reset() {
  
  location.reload(true);
  window.location.reload;
  
  answer = "";
  maxWrong = 6;
  mistakes = 0;
  guessed = [];
  wordStatus = null;
  gameOver = false;
  
  randomWord();
  createKeyboard();
  guessWord();
  updateMistakes();
}

randomWord();
createKeyboard();
guessWord();
