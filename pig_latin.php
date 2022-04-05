<?php
function PrimaVocale($word)
{
    $vocali = array("a", "e", "i", "o", "u");
    $indexVocale = 0;

    $chars = str_split($word);
    foreach ($chars as $char) {
        if (in_array($char, $vocali)) {
            break;
        }
        $indexVocale++;
    }
    return $indexVocale;
}

function PigLatinWord($word)
{
    $newStr = '';
    $vocali = array("a", "e", "i", "o", "u");

    if (in_array($word[0], $vocali)) {
        $newStr = $word . 'way';
    } else {
        $id = PrimaVocale($word);
        $newStr = substr($word, $id) . substr($word, 0, $id) . 'ey';
    }

    return $newStr;
}

function PigLatin($sentence)
{
    $words = explode(" ", $sentence);
    $newSentence = '';

    foreach ($words as $word) {
        $newSentence .= PigLatinWord($word) . ' ';
    }

    return $newSentence;
}

echo (PigLatinWord('aurora'));
echo '<hr/>';
echo (PigLatinWord('buongiorno'));
echo '<hr/>';
echo (PigLatin('buongiorno aurora'));
