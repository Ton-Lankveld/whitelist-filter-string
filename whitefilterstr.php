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
  $WLstrLen = strlen($whiteListStr);

  $i = 0;
  while ($i < $inpStrLen) {
    $j = 0;
    while ($j < $WLstrLen) {
      if ($inpStr{$i} == $whiteListStr{$j}) {
        $strClean = $strClean.$inpStr{$i};
        break;
      }
    $j++;
    }
  $i++;
  }
  return $strClean;
}
