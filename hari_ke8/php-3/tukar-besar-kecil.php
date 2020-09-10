<?php
function tukar_besar_kecil($string)
{
    $output = "";
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (ctype_lower($string[$i])) {
            $output .= strtoupper($string[$i]);
        } else {
            $output .= strtolower($string[$i]);
        }
    }
    return $output . "<br>";

}
// strtoupper merubah string menjadi huruf besar
// strtolower merubah string menjadi huruf kecil

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>