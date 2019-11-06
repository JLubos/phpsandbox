<?php

  # CONDITIONALS

  /*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
  */

  $num = '6';

  if($num == 5){
    echo '5 passed';
  } elseif($num == 6){
    echo '6 passed';
  }else {
    echo'did not pass';
  }

  #NESTING if

  $num = 5;

  if($num > 5){
    if($num < 10){
      echo "$num passed";
    }
  }

  /*

    LOGICAL OPERATORS
    and &&
    or ||
    xor


  */

  /*if($num > 4 XOR $num <10){
    echo "$num passed";
  }*/

  #SWITCH

  $favColor = 'red';

  switch($favColor){
    case 'red':
    echo 'Your favorite color is red';
    break;
    case 'blue':
    echo 'Your favorite color is blue';
    break;
    default: echo 'Your favorite color is something else.';
  }



 ?>
