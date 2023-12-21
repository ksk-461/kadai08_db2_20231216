<?php
require_once('funcs.php');
$id = $_GET['id'];

$pdo =  db_conn();

$stmt = $pdo->prepare('SELECT * FROM dsc_request WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/detail.css">
    <title>詳細</title>
</head>
<body>
<div id="wrap">
        <form method="post" action="./update.php">
            <header>
                <h2>受注状況詳細</h2>
            </header>
            <div id="wrap">
                <div class="content">
                    <p class="text_label">社内担当者</p>
                    <input type="text" class="text_box" name="assign" value="<?= h($result['assign']) ?>" placeholder="社内担当者を入力してください"/>
                    <p class="text_label">受注状況</p>
                    <select class="text_box" id="status" class="text_box" name="status">

                        <?php
                            $statuses_sql = [0 => '未着手', 1 => '進行中', 2 => '完了'];
                            foreach($statuses_sql as $key => $value){
                                if($result['status'] === $key){
                                    echo '<option value="'. $key .'" selected>'. $value .'</option>';
                                } else {
                                    echo '<option value="'. $key .'">'. $value .'</option>';
                                }
                            }
                        ?>

                    </select>
                    <p class="line"></p>
                    <p class="text_label">会社名</p>
                    <input type="text" class="text_box" name="company" value="<?= h($result['company']) ?>"/>
                    <p class="text_label">ご担当者様</p>
                    <input type="text" class="text_box" name="name" value="<?= h($result['name']) ?>"/>
                    <p class="text_label">メール</p>
                    <input type="email" class="text_box" name="email" value="<?= h($result['email']) ?>"/>
                    <p class="text_label">折込日／デリバリー開始日</p>
                    <input type="date" id="del_day" class="text_box" value="<?= h($result['date']) ?>" name="date"/>
                    <p class="text_label">サイズ</p>
                    <select class="text_box" id="size" class="text_box" name="size">

                        <?php
                            $sizes = ['B4', 'B3', 'B2', 'B1'];
                            foreach($sizes as $size){
                                if($result['size'] === $size){
                                    echo '<option value="'. $size .'" selected>'. $size .'</option>';
                                } else {
                                    echo '<option value="'. $size .'">'. $size .'</option>';
                                }
                            }
                        ?>

                    </select>
                    <p class="text_label">A地区合計</p>
                    <input class="text_box num_inp" type="number" name="sum_a" value="<?= h($result['sum_a']) ?>">
                    <p class="text_label">B地区合計：</p>
                    <input class="text_box num_inp" type="number" name="sum_b" value="<?= h($result['sum_b']) ?>">
                    <p class="text_label">C地区合計：</p>
                    <input class="text_box num_inp" type="number" name="sum_c" value="<?= h($result['sum_c']) ?>">
                    <p class="text_label">D地区合計：</p>
                    <input class="text_box num_inp" type="number" name="sum_d"  value="<?= h($result['sum_d']) ?>">
                    <p class="text_label">E地区合計：</p>
                    <input class="text_box num_inp" type="number" name="sum_e" value="<?= h($result['sum_e']) ?>">
                    <input type="hidden" name="id" value="<?= $result['id'] ?>">
                    <input type="submit" class="confirm" value="更新">
                </div>
            </div>
        </form> 

   </div>
</body>
</html>