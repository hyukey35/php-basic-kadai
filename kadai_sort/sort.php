<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        

function sortAndPrintArray($nums) {
    sort($nums); 
    echo "昇順にソートします<br>";
    foreach ($nums as $num) {
        echo $num . "<br>";
        
    }
}

$nums = [15, 4, 18, 23, 10];
sortAndPrintArray($nums);


function sortAndPrintArrayDescending($nums) {
    rsort($nums); 
    echo "降順にソートします<br>";
    foreach ($nums as $num) {
        echo $num . "<br>"; 
    }
}

$nums = [15, 4, 18, 23, 10];
sortAndPrintArrayDescending($nums);





        
      
        ?>
    </p>
</body>

</html>