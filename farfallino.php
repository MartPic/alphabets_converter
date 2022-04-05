<?php
function farfallino($word)
{
   $newStr = '';
   $vocali = array("a", "e", "i", "o", "u");

   $chars = str_split($word);
   foreach ($chars as $char) {
      if (in_array($char, $vocali)) {
         $newStr .= $char . 'f' . $char;
      } else {
         $newStr .= $char;
      }
   }
   return $newStr;
}

echo (farfallino('buongiorno'));
