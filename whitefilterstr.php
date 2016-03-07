<?php

/**
 * Filter a string and allow only characters in the white list string
 *
 * @param string $inpStr
 * @param string $whiteListStr Allowed characters
 * @return string If fault then empty
 */
 function whiteFilterStr($inpStr, $whiteListStr) {
  $strClean = '';
  
  if (!is_string($inpStr) or !is_string($whiteListStr)) {
     return $strClean;
    }
  $inpStrLen = strlen($inpStr);
  # Filter the input string with the whitelist
  $i = 0;
  while ($i < $inpStrLen) {
    if (strpos($whiteListStr, $inpStr{$i}, 0) !== false) {
      $strClean = $strClean.$inpStr{$i};
    }
  $i++;
  }
  return $strClean;
}
 ?>
