<?php
//data
$data = [12,9,30,"A","M",99,82,"J","N","B"];
// pisahkan huruf dan angka
$letters = [];
$numbers = [];
foreach ($data as $item) {
    if (is_numeric($item)) {
        $numbers[] = $item;
    } else {
        $letters[] = $item;
    }
}

//sort huruf dan angka
sort($letters);
sort($numbers);

// merge huruf dan angka
$sorted = array_merge($letters, $numbers);

// hasil
print_r($sorted);
?>