/*
  JavaScript for Hangman
  version: 1.0.0
  date: 10/25/2020 m/d/y
  author: Robert Charles
*/

var wordlist = [
  "one",
  "two",
  "three",
  "four",
  "five",
  "six"
];

function randomWord() {
  answer = wordlist[Math.floor(Math.random() * wordlist.length)];
}

function reset() {
  randomWord();
  alert(answer);
}