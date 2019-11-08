<?php
include '../inc/questions.php';
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */

// Include questions


// Keep track of which questions have been asked



// Show which question they are on
// Show random question

function getRandomQuestions($questions){
  $generation = rand(0,9);
return $questions[$generation];
}

function printQuestions($questions){
$random = getRandomQuestions($questions);
  echo $random["leftAdder"] . " ";
  echo $random["rightAdder"] . "  ";
  echo $random["firstIncorrectAnswer"]. "  ";
  echo $random ["correctAnswer"] . " ";
  echo $random["secondIncorrectAnswer"] . "  ";
  
}
 echo printQuestions($questions);
// Shuffle answer buttons
//----------//rand($questions)//----------

// Toast correct and incorrect answers 
  
 /* if "correctAnswer" {
  echo "Yay! You got it right!"
} else if {
  echo "Incorrect"}
// Keep track of answers */
  

// If all questions have been asked, give option to show score


// else give option to move to next question


// Show score