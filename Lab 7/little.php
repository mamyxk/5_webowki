<?php
  $var = 3.4;
  echo "Var = $var <br>";
  settype($var, "string");
  echo "Var = $var <br>";
  echo "Var = ". (integer)$var . "<br>";
  echo "Type of var: " . gettype($var) . "<br>";
  $arr = array("el1", "el2", "el3");
  print_r($arr);
  echo "<br>";
  $asarr = array(
    "key1" => "val1",
    "key2" => "val2"
  );
  print_r($asarr);
  echo "<p>" . count($arr) . "</p>";
  echo $arr[1] . "<br>";
  echo $asarr["key1"] . "<br><br>";
  foreach($arr as $el){
      echo $el . "<br>";
  }
?>