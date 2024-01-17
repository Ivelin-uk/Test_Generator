<?php
    echo "Task 1: ";
    $arr = [9,9,1,2,1,1,2,2];
    echo ($arr[4] + $arr[0]) * 2;
    echo "<br>";

    echo "Task 2: ";
    $arr = [1,2,7,6,5,4,3,2,1];
    echo $arr[count($arr) - 3];
    echo "<br>";

    echo "Task 4: ";
    $arr = [5,4,9,1,5,1,2,5];
    echo $arr[1] + $arr[2] + $arr[3];
    echo "<br>";

    echo "Task 5: ";
    $arr = [1,4,6,3,5,1];
    echo count($arr) % 2;
    echo "<br>";

    echo "Task 6: ";
    $arr = [5,2,5,3,3,4,2,5,2];
    for($i = 0; $i < count($arr) - 2; $i++){
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 7: ";
    $arr = [3,4,2,1,7,1,2,5];
    for($i = 2; $i < count($arr); $i++){
        if($i % 2 == 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 8: ";
    $arr = [8,7,2,7,7,1,5,2,52];
    for($i = 4; $i < count($arr); $i++){
        if($i % 2 == 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 9: ";
    $arr = [1,2,3,4,5,6,7,8,9];
    for($i = 3; $i < count($arr); $i++){
        if($i % 2 == 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 10: ";
    $arr = [3,3,3,2,4,5,2,1];
    for($i = 8; $i < count($arr); $i++){
        if($i % 2 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 11: ";
    $arr = [1,2,3,2,1,4,2];
    $s = 0;
    for($i = 1; $i < count($arr) - 2; $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 12: ";
    $arr = [1,2,4,2,1,4,2];
    $s = 0;
    for($i = 2; $i < count($arr); $i++){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 13: ";
    $arr = [1,7,2,2,1,4,2];
    $s = 0;
    for($i = 1; $i < count($arr) - 2; $i+=2){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 14: ";
    $arr = [1,2,9,9,1,2];
    $s = 10;
    for($i = 1; $i < count($arr) - 2; $i+=2){
        if($i % 2 == 0){
            $s += $arr[$i];
        }
    }
    echo $s;
    echo "<br>";

    echo "Task 15: ";
    $arr = [4,2,4,2,4,1,4,2];
    $s = 10;
    for($i = 1; $i < count($arr); $i+=2){
        if($i % 2 == 0){
            $s += $i;
        }
    }
    echo $s;
    echo "<br>";

    echo "Task 16: ";
    $arr = [4,2,4,3,4,1,4,2];
    $s = 0;
    for($i = 1; $i < 5; $i+=3){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 17: ";
    $arr = [4,2,4,3,4,1,4,2];
    $s = 0;
    for($i = 0; $i < 5; $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 18: ";
    $arr = [1,2,4,3,4,1,4,1,2,3,4];
    $s = 0;
    for($i = 3; $i <= 5; $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 19: ";
    $arr = [4,2,4,3,4,1,4,2];
    $s = 0;
    for($i = 3; $i <= 5; $i+=3){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 20: ";
    $arr = [1,4,2,1,5,1,2,5];
    for($i = 0; $i < count($arr); $i+=3){
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 21: ";
    $arr = [4,7,2,4,5,3,2,4];
    for($i = 5; $i < count($arr); $i+=4){
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 22: ";
    $arr = [3,3,3,3,3];
    $sum = 5;
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    echo $sum;
    echo "<br>";

    echo "Task 23: ";
    $arr = [1,2,2,1];
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        $sum += $i;
    }
    echo $sum;
    echo "<br>";

    echo "Task 24: ";
    $arr = [3,3,3,3,3];
    $sum = 0;
    for($i = 1; $i < count($arr); $i+=2){
        $sum += $i;
    }
    echo $sum;
    echo "<br>";

    echo "Task 25: ";
    $arr = [2,2,3,4,5,6];
    if($arr[2] != $arr[2]){
        echo "yes";
    }else{
        echo "no";
    }
    echo "<br>";

    echo "Task 26: ";
    $arr = [1,2,3,4,5,6];
    if($arr[2] == $arr[2]){
        echo "yes";
    }else{
        echo "no";
    }
    echo "<br>";

    echo "Task 27: ";
    $a = 4;
    $b = 5;
    $c = 6;
    if($a != $b){
        if($a % 2 != 0){
            $c = 5;
        }else{
            $c = 7;
        }
    }else{
        echo $c = 8;
    }
    echo $c;
    echo "<br>";

    echo "Task 28: ";
    $a = 1;
    $b = 2;
    $c = 3;
    if($a != $b){
        if($a % 2 == 0){
            $c = 4;
        }else{
            $c = 5;
        }
    }else{
        echo $c = 6;
    }
    echo $c;
    echo "<br>";

    echo "Task 29: ";
    $arr = [1,2,3,2,1,4,2];
    $s = 0;
    for($i = 1; $i < count($arr); $i+=2){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 30: ";
    $arr = [4,3,32,3,42];
    $s = 0;
    for($i = 1; $i < count($arr); $i+=6){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 31: ";
    $arr = [3,3,4,2,1,3,3,3];
    $s = 0;
    for($i = 2; $i < count($arr); $i+=5){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 32: ";
    $arr = [4,3,1,1,3,2,5,25,2,5,2,1,4,4];
    $s = 0;
    for($i = 3; $i <= 5; $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 33: ";
    $arr = [1,2,3,4,1,2,3,2,1,2,6,7];
    $s = 0;
    for($i = 3; $i <= 5; $i+=2){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 34: ";
    $arr = [4,4,2,1,5,1,2,5];
    for($i = 0; $i < count($arr); $i++){
        if($i % 2 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 35: ";
    $arr = [9,8,7,6,3,2,1];
    for($i = 0; $i < count($arr) - 3; $i++){
        if($i % 2 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 36: ";
    $arr = [9,8,7,6,3,2,1];
    for($i = 3; $i < count($arr); $i++){
        if($i % 2 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 37: ";
    $num1 = 10;
    $num2 = 5;
    function add($a, $b) {
        return $a + $b;
    }
    $result = add($num1, $num2);
    if ($result > 15) {
        echo "0";
    } elseif ($result == 15) {
        echo "1";
    } else {
        echo "2";
    }
    echo "<br>";

    echo "Task 38: ";
    $counter = 1;
    while ($counter <= 5) {
        $counter++;
    }
    echo $counter;
    echo "<br>";

    echo "Task 39: ";
    $arr = [1,2,3,4,5,6];
    if($arr[2] % 2 == 0){
        echo $arr[1];
    }else{
        echo $arr[1] * 2;
    }
    echo "<br>";

    echo "Task 40: ";
    $arr = [4,7,2,4,42,42,323,1,3,4];
    for($i = 0; $i < count($arr) - 2; $i+=2){
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 41: ";
    echo "Дайте пример как се дефинира и извиква функция в PHP .";
    echo "<br>";

    echo "Task 42: ";
    echo "Дайте пример как се дефинира масив в PHP .";
    echo "<br>";

    echo "Task 43: ";
    $arr = [1,2,4,2,1,4,2];
    $s = 10;
    for($i = 0; $i < count($arr); $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 44: ";
    $arr = [0,1,2,23,3,4,2,2,5];
    $s = 0;
    for($i = 0; $i < count($arr); $i++){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 45: ";
    $number = 10;
    if ($number != 10) {
        if($number % 2 == 0){
            echo "yes";
        }else{
            echo "no";
        }
    } else {
        echo "error";
    }
    echo "<br>";

    echo "Task 46: ";
    $arr = [4,4,2,4,5,1,2,5];
    echo ($arr[3] % 2) + $arr[0];
    echo "<br>";

    echo "Task 47: ";
    $arr = [6,4,2,0,4,3];
    $sum = 0;
    for ($i = 0; $i < count($arr)/2; $i++) {
        $sum += $i;
    }
    echo $sum;
    echo "<br>";

    echo "Task 48: ";
    function my_func($arr) {
        $result = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $result += $arr[$i];
        }
        return $result;
    }
    $my_arr = [7,3,2];
    if (my_func($my_arr) % 2 == 0) {
        echo "yes";
    } else {
        echo "no";
    }
    echo "<br>";

    echo "Task 49: ";
    $arr = [1,2,3,4,5,6,7];
    echo $arr[0] + $arr[count($arr)-2];
    echo "<br>";

    echo "Task 50: ";
    $arr = [1,6,3,7,2];
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($sum < 10) {
            echo $arr[$i] . " ";
        }
        $sum += $arr[$i];
    }
    echo "<br>";

    echo "Task 51: ";
    $arr = [7,6,5];
    for ($i = count($arr)-1; $i >= 0; $i--) {
        echo $i . " ";
    }
    echo "<br>";

    echo "Task 52: ";
    $arr = [7,5,3,5];
    $c = count($arr);
    for ($i = 0; $i < $c; $i++) {
        $arr[] = 0;
    }
    echo count($arr);
    echo "<br>";

    echo "Task 53: ";
    $arr = [6,4,8];
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $sum) {
            $sum += $arr[$i];
        } else {
            $sum -= $arr[$i];
        }
    }
    echo $sum;
    echo "<br>";  

    echo "Task 54: ";
    $arr = [5,5,5];
    $s = 5;
    for($i = 0; $i < count($arr); $i++){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 55: ";
    $arr = [5,4,3,2,1];
    $s = 4;
    for($i = 0; $i < 4; $i+=2){
        $s += $i;
    }
    echo $s;
    echo "<br>";

    echo "Task 56: ";
    $arr = [5,4,3,2,1];
    $s = 0;
    for($i = 0; $i < 4; $i++){
        $s += $arr[$i];
    }
    echo $s;
    echo "<br>";

    echo "Task 57: ";
    $arr = [5,4,3,2,1,2,1,4,2];
    $s = 0;
    for($i = 1; $i < 4; $i+=2){
        if($arr[$i] % 2 == 0){
            $s += $arr[$i];
        }
    }
    echo $s;
    echo "<br>";

    echo "Task 58: ";
    $arr = [4,4,2,1,5,1,2,5];
    for($i = 0; $i < count($arr) -2; $i+=2){
        if($i % 2 == 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 59: ";
    $arr = [9,4,2,4,3,4,4,2,2];
    $s = 0;
    for($i = 0; $i <= 5; $i+=2){
        if($i > 3){
            $s += $arr[$i];
        }
    }
    echo $s;
    echo "<br>";

    echo "Task 60: ";
    $arr = [8,7,7,7,7,1,5,2,52];
    for($i = 4; $i < count($arr); $i++){
        if($i % 2 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 61: ";
    $arr = [1,2,3,4,5,6];
    if($arr[2] == $arr[2]){
        if($arr[2] != $arr[2]){
            echo "1";
        }else{
            echo "2";
        }
    }else{
        echo "3";
    }
    echo "<br>";

    echo "Task 62: ";
    $arr = [2,2,2,2,2];
    if($arr[2] != $arr[2]){
        if($arr[2] == $arr[2]){
            echo "1";
        }else{
            echo "3";
        }
    }else{
        if($arr[2] == $arr[2]){
            echo "2";
        }else{
            echo "4";
        }
    }
    echo "<br>";

    echo "Task 63: ";
    $arr = [5,4,3,2,1,1,2,3,4];
    $s = 0;
    for($i = 2; $i < 4; $i+=2){
        if($arr[$i] % 2 != 0){
            echo $i . " ";
        }
    }
    echo $s;

    echo "Task 64: ";
    $arr = [5,4,3,2,1,1,2,3,4];
    $s = 10;
    for($i = 2; $i < 4; $i+=2){
        if($arr[$i] % 2 != 0){
            echo $i . " ";
        }
    }
    echo $s;
    echo "<br>";

    echo "Task 65: ";
    $arr = [45,55,20,44,34,55];
    for ($i = 0; $i < count($arr); $i++) {
        $newNum = $arr[$i] % 10;
        echo $newNum . " ";
    }
    echo "<br>";

    echo "Task 66: ";
    $arr = [45,20,44,34,65];
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 10 == 5){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 67: ";
    $arr = [10,21,30,41,50,61,71];
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 10 != 0){
            echo $arr[$i] . " ";
        }
    }
    echo "<br>";

    echo "Task 68: ";
    $arr = [10,21,30,41,50,61];
    for ($i = 0; $i < count($arr); $i+=2) {
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 69: ";
    $arr = [10,21,30,41,50,61];
    for ($i = 0; $i < count($arr); $i+=3) {
        echo $arr[$i] . " ";
    }
    echo "<br>";

    echo "Task 70: ";
    $arr = [30,41,50,61];
    for ($i = 1; $i < count($arr); $i+=6) {
        echo $arr[$i] . " ";
    }
    echo "<br>";
?>
    