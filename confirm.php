<?php
    $company = $_POST['company'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $size = $_POST['size'];
    $all = $_POST['all'];
    $center_a = $_POST['center_a'];
    $center_b = $_POST['center_b'];
    $center_c = $_POST['center_c'];
    $south_c = $_POST['south_c'];
    $south_e = $_POST['south_e'];
    $north_d = $_POST['north_d'];
    $north_e = $_POST['north_e'];
    $east_b = $_POST['east_b'];
    $east_e = $_POST['east_e'];

    $sum_a = $center_a;
    $sum_b = $center_b + $east_b;
    $sum_c = $center_c + $south_c;
    $sum_d = $north_d;
    $sum_e = $south_e + $north_e + $east_e;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/confirm.css">
    <title>確認画面</title>
</head>
<body>
    <div id="wrap">
        <form action="./index.php">
            <div class="list-004">
                <div>お見積もりご依頼内容</div>
                <ul>
                    <li>会社名：<?= $company ?></li>
                    <li>お名前：<?= $name ?></li>
                    <li>メール：<?= $email ?></li>
                    <li>折込日：<?= $date ?></li>
                    <li>サイズ：<?= $size ?></li>
                    <li>全道域：<?= $all ?></li>
                    <li>Ａ地区：<?= $sum_a ?></li>
                    <li>Ｂ地区：<?= $sum_b ?></li>
                    <li>Ｃ地区：<?= $sum_c ?></li>
                    <li>Ｄ地区：<?= $sum_d ?></li>
                    <li>Ｅ地区：<?= $sum_e ?></li>

                    <p>こちらの内容でお間違えないでしょうか？</p>
                </ul>
            </div>
            <div class="goback">
            <button class="back" onclick="location.href='./index.php'">戻る</button>
        </form>
            <form method="post" action="./submit.php" >
                <input type="hidden" name="company" value="<?= $company ?>">
                <input type="hidden" name="name" value="<?= $name ?>">
                <input type="hidden" name="email" value="<?= $email ?>">
                <input type="hidden" name="date" value="<?= $date ?>">
                <input type="hidden" name="size" value="<?= $size ?>">
                <input type="hidden" name="all" value="<?= $all ?>">
                <input type="hidden" name="center_a" value="<?= $center_a ?>">
                <input type="hidden" name="center_b" value="<?= $center_b ?>">
                <input type="hidden" name="center_c" value="<?= $center_c ?>">
                <input type="hidden" name="south_c" value="<?= $south_c ?>">
                <input type="hidden" name="south_e" value="<?= $south_e ?>">
                <input type="hidden" name="north_d" value="<?= $north_d ?>">
                <input type="hidden" name="north_e" value="<?= $north_e ?>">
                <input type="hidden" name="east_b" value="<?= $east_b ?>">
                <input type="hidden" name="east_e" value="<?= $east_e ?>">

                <input type="submit" class="submit">
            </form>
        </div>
    </div>
</body>
</html>