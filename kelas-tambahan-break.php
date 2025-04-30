<?php 

// break didalam perulangan itu sangat penting. 
// digunakan untuk menghentikan seluruh perulangan. 
// jadi dengan adanya break, perulangan akan berhenti. 

// $i = 0; ini awal nilai i di mulai
// $i < 5;
for ($i = 0; $i < 5; $i++) {
    if ($i == 0) {
    // ketika nilai i adalah sama dengan 3 
    // maka looping akan berhenti
        break;
    }
    echo "$i<br>";
}

$member_yang_ada = ['andi', 'budi', 'caca', 'doni', 'evi'];
$member_yang_dicari = 'disini pencariannya';
$apakah_ada = false;

for ($i = 0; $i < count($member_yang_ada); $i++) {
    if ($member_yang_ada[$i] == $member_yang_dicari) {
        $apakah_ada = true;
        break;
    }
}

if ($apakah_ada == true) {
    echo "Member yang dicari ada di dalam list member yang ada";
} else {
    echo "Member yang dicari tidak ada di dalam list member yang ada";
}
