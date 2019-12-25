<?php
# substr()
# Returns a portion of a string

//$output = substr('Hello', 1, 3);
//echo $output;

# strlen()
# Returns the length os a string

//$output = strlen("Hello World");
//echo $output;

# strpos()
# Finds the position of the first occurence of a substring

//$output = strpos('Hello World', o);
//echo $output;

# strrpos()
# Finds the position of thelast occurence of a substring

//$output = strrpos('Hello World', o);
//echo $output;

# trim()
$text = 'Hello World           ';
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);

#strtoupper
# Makes everything uppercase
$output = strtoupper('Hello World');
echo $output;

#strtolower
# Makes everything uppercase
$output = strtolower('Hello World');
echo $output;

# ucwords()
# Capitalize every world

$output = ucwords('hello world');

str_replace()
# Replace all occurances of a search string with a replacement

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);

# is_string()
# check if string

$val = 'Hello';
$output = is_string($val);
echo $output;

$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4','', ' ', 0, '0');

foreach($values as $value){
  if(is_string($value)){
    echo "{$value} is a string<br>";
  }
}

# gzcompress()
#Compress a string

$string = "fdsfkdsjfnkjsdfnkjsdnfkjds";
$compressed = gzcompress($string);
echo $compressed;

$original = gzuncompress($compressed);
echo original;

 ?>
