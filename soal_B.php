<?php
function hitungHuruf($input) {
    $result = [];

    // Loop setiap karakter
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) { // Hanya huruf
            if (!isset($result[$char])) {
                $result[$char] = 1;
            } else {
                $result[$char]++;
            }
        }
    }

    // Urutkan berdasarkan kunci (huruf), case-sensitive
    ksort($result);

    return $result;
}

$input = "Bismillah";
$output = hitungHuruf($input);
print_r($output);
?>
