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

            <div class="modal-002__wrap">
                <div class="modal-002">
                    <div class="modal-002__content-wrap">
                        <div class="modal-002__content">
                            <p class="label">会社名</p>
                            <input type="text" class="text_box" name="company" value="<?= h($result['company']) ?>"/>
                            <p class="label">ご担当者様</p>
                            <input type="text" class="text_box" name="name" value="<?= h($result['name']) ?>"/>
                            <p class="label">メール</p>
                            <input type="email" class="text_box" name="email" value="<?= h($result['email']) ?>"/>
                            <p class="label">折込日／デリバリー開始日</p>
                            <input type="date" id="del_day" class="text_box" value="<?= h($result['date']) ?>" name="date"/>
                            <p class="label">サイズ</p>
                            <select id="size" class="text_box" name="size">
                                <option value="B4">B4</option>
                                <option value="B3">B3</option>
                                <option value="B2">B2</option>
                                <option value="B1">B1</option>
                            </select>
                            <p>A地区合計</p>
                            <input type="number" value="<?= h($result['sum_a']) ?>">
                            <p>B地区合計：</p>
                            <input type="number" value="<?= h($result['sum_b']) ?>">
                            <p>C地区合計：</p>
                            <input type="number" value="<?= h($result['sum_c']) ?>">
                            <p>D地区合計：</p>
                            <input type="number" value="<?= h($result['sum_d']) ?>">
                            <p>E地区合計：</p>
                            <input type="number" value="<?= h($result['sum_e']) ?>">
                            <input type="submit" class="confirm" value="更新">
                        </div>
                    </div>
                </div>
            </div>
            
        </form> 

   </div>
</body>
</html>