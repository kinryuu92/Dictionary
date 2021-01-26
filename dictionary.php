<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
    <title>dictionary</title>
</head>
<body>
<h2>Dictionary English - Vietnamese</h2>
<form method="post">
    <input type="text" placeholder="input text find">
    <input type="submit" id="submit" value="Find">
</form>
<?php
$dictionary = array(
        "hello"=>"xin chào",
    "how"=>"thế nào",
    "book"=>"quyển vở",
    "computer"=>"máy tính"
);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $key => $value){
        if ($key == $searchword){
            echo "Từ:".$key.".<br>nghĩa của từ: ".$value;
            $flag = 1;
        }
    }
    if ($flag == 0){
        echo "Tu nay khong tim ra.";
    }
}

?>
</body>
</html>
