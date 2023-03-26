<?php

$box = [
  [
      0 => 'Тетрадь',
      1 => 'Книга',
      2 => 'Настольная игра',
      3 => [
          'Настольная игра',
          'Настольная игра',
      ],
      4 => [
          [
              'Ноутбук',
              'Зарядное устройство'
          ],
          [
              'Компьютерная мышь',
              'Набор проводов',
              [
                  'Фотография',
                  'Картина'
              ]
          ],
          [
              'Инструкция',
              [
                  'Ключ'
              ]
          ]
      ]
  ],
  [
      0 => 'Пакет кошачьего корма',
      1 => [
          'Музыкальный плеер',
          'Книга'
      ]
  ]
];

function findValue (array $array, string $value) :bool
{
// $string = '';
// $string = $value;
foreach($array as $el) {
  if(is_array($el)) {
    $result = findValue($el, $value);
    if($result != null) {
      return true;

    }
  } elseif ($el == $value) {
    return true;

  }
}
return false;
}

$searchResult = findValue ($box,'Ключ');
var_dump ($searchResult);



