<?php
if (isset($_POST['submit'])) {
    $umur = $_POST['umur'];
    if ($umur >= 40) {
        echo "Kamu terlalu tua untuk masuk";
    } else if ($umur >= 17) {
        echo "Kamu boleh masuk";
    } else if ($umur >= 13) {
        echo "Kamu boleh masuk, tapi harus didampingi";
    }
}
?>