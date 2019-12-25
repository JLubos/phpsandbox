<?php
  $path = '/dir1/myfile.php';
  $file = 'file1.txt';

  // Return filename
  #echo basename($path);

  //Return filename without extenstion
  #echo basename($path, '.php');

  //Return the sir name from path
  #echo dirname($path);

  // Check if file exists
  #echo file_exists('file1.txt');

  // Get abs path
  #echo realpath($file);

  //Checks to see if file
  #echo is_file('text');

  //Check if writeable
  #echo is_writeable($file);

  //Check if readable
  #echo is_readeable($file);

  //Get the filesize
  #echo filesize($file);

  //Create a directory
  #mkdir('testing');

  //Remove dir if empty
  #rmdir('testing');

  //Copy file
  #echo copy('file.txt', 'file2.txt');

  //Rename a file
  #rename('file2.txt', 'myfile.txt');

  //delete a file
  #unlink('myfile.txt');

  //Write from file to string
  #echo file_get_contents($file);

  //Write string to  file
  #echo file_put_contents($file, 'Goodbye World');

  #$current = file_get_contents($file);
  #$current .= ' Goodbye World';
  #file_put_contents($file, $current);

  //Open File for reading
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data

  //Open file for writing
  $handle = fopen($file, 'w');
  $txt = "John Doe\n";
  fwrite($handle,$txt);
  $txt = 'Steve Smith';
  fwrite($handle,$txt);

  fclose($handle);














 ?>
