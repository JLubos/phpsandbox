<?php
  #Loops - Execute code set numbesr of times
  /*

    For
    While
    Do..While
    Foreach

  */

  #For Loop
  # @params - init, condition, inc

  /*for($i = 0; $i < 10; $i++){
    echo 'Number '. $i;
    echo '<br>';
  }*/

  #While Loop
  #para,s - condition

  /*$i = 0;

  while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
  }

  $i = 0;

  do {
    echo $i;
    echo '<br';
    $i++;
  }
  while($i < 10);*/

  # Foreach Loop - For arrays
  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

  foreach($people as $person => $email){
    echo $person. ': '.$email;
    echo '<br>';
  }


 ?>
