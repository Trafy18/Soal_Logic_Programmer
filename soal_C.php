<?php
function pattern_count($text, $pattern) {
    $count = 0;
    $text_len = strlen($text);
    $pattern_len = strlen($pattern);

    // Loop sampai batas agar pattern tidak keluar dari text
    for ($i = 0; $i <= $text_len - $pattern_len; $i++) {
        $match = true;
        for ($j = 0; $j < $pattern_len; $j++) {
            if ($text[$i + $j] !== $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            $count++;
        }
    }

    return $count;
}

// Contoh penggunaan
echo pattern_count("palindrom", "ind"); // Output: 1
echo pattern_count("ababab", "aba"); // Output: 2
echo pattern_count("abakadabra", "ab"); // Output: 2
echo pattern_count("hello", " "); // Output: 0
echo pattern_count("aaaaaa", "a"); // Output: 0
echo pattern_count("hell", "hello"); // Output: 0

?>