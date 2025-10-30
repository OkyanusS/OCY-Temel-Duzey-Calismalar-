<?php
$a = $_GET['sayi1'];
switch ($a) {
    case '1':
        echo "Pazartesi";
        break;
    case "2":
        echo "Salı";
        break;
    case "3":
        echo "Çarşamba";
        break;
    case "4":
        echo "Perşembe";
        break;
    case "5":
        echo "Cuma";
        break;
    case "6":
        echo "Cumartesi";
        break;
    case "7":
        echo "Pazar";
        break;
}
?>