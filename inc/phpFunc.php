<?php
function pal($String){
  $strToArray = str_split($String);

  for ($i=count($strToArray); $i >= 0; $i--) {
    echo "$strToArray[$i]";
  }
}
?>
