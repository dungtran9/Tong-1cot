<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label{
            width: 150px;
            padding-left: 10px;
            float: left;
        }
    </style>
</head>
<body>
<form method="post">
    <label>Nhap so hang</label>
    <input type="text" name="row"><br>
    <label>Nhap so cot</label>
    <input type="text" name="col"><br>
    <label>Nhap cột cần tính tổng </label>
    <input type="text" name="num"><br>
    <input type="submit" value="Result">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $row = $_POST["row"];
    $col = $_POST["col"];
    $N = $_POST["num"];
    $arr = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $arr[$i][$j] = rand(1, 100);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    $sum = 0;
for ($i = 0; $i < $row; $i++) {

        $sum+=$arr[$i][$N];

}
    echo "<br>".$sum;
}

?>
</body>
</html>
