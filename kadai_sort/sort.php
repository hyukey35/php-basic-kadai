<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($nums, $order = true) {
            if ($order) {
                sort($nums); // 昇順にソート
                echo "配列を昇順にソート<br>";
            } else {
                rsort($nums); // 降順にソート
                echo "配列を降順にソート<br>";
            }
            foreach ($nums as $num) {
                echo $num . "<br>";
            }
        }
        
        $nums = [15, 4, 18, 23, 10];
        
        sort_2way($nums, true); // 昇順でソート
        sort_2way($nums, false); // 降順でソート
    
        ?>
    </p>
</body>

</html>