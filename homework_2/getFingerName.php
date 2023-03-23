<?php

// Вариант 1

/*do {
  $input = +readline("Введите целое положительное число  ");
  if ($input == 0) {
    $input = -1;
  }
  if ($input == 1 || $input % 8 == 1) {
    echo "Большой палец"; 
    break;
  }
  if ($input == 2 || $input % 8 == 0 || $input % 8 == 2) {
    echo "Указательный палец"; 
    break;
  }
  if ($input == 3 || $input == 7 || $input % 8 == 3 || $input % 8 == 7) {
    echo "Средний палец"; 
    break;
  }
  if ($input == 4 || $input == 6 || $input % 8 == 4 || $input % 8 == 6) {
    echo "Безымянный палец"; 
    break;
  }
  if ($input == 5 || $input % 8 == 5) {
    echo "Мизинец"; 
    break;
  }
}
while ($input < 0);*/


// Вариант 2

do {
  $input = +readline("Введите целое положительное число  ");  
  } while ($input <= 0);

$input %= 8;

switch (true) {
    case $input == 1:
      echo "Большой палец";
      break;
    case $input == 2 || $input == 0:
      echo "Указательный палец";
      break;
    case $input == 3 || $input == 7:
      echo "Средний палец"; 
      break;
    case $input == 4 || $input == 6:
      echo "Безымянный палец"; 
      break;    
    default:
      echo "Мизинец"; 
}

  // if ($input == 1) {
  //   echo "Большой палец"; 
  //   }
  // if ($input == 2 || $input % 8 == 0) {
  //   echo "Указательный палец"; 
  //     }
  // if ($input == 3 || $input == 7) {
  //   echo "Средний палец"; 
  //     }
  // if ($input == 4 || $input == 6) {
  //   echo "Безымянный палец"; 
  //     }
  // if ($input == 5) {
  //   echo "Мизинец"; 
  //     }
