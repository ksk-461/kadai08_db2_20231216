<?php
    require_once('funcs.php');
    $pdo = db_conn();

    $stmt = $pdo->prepare("SELECT * FROM dsc_request WHERE status = 0");
    $status = $stmt->execute();

    $task_0="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }else{

        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $task_0 .= '<div class="list-004 task_list_0">';
            $task_0 .= '<div class="head head_0">';
            $task_0 .= '<h2>会社名：'.h($result['company']).'</h2>';
            $task_0 .= '<p>ご担当者：'.h($result['name']) .'様</p>';
            $task_0 .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
            $task_0 .= '<p>'.'折込日：'.h($result['date']).'<p>';
            $task_0 .= '<p>'.'サイズ：'.h($result['size']).'<p>';
            $task_0 .= '<p>'.'担当者：未着手<p>';
            $task_0 .= '</div>';
            $task_0 .= '<div class="status">';
            $task_0 .= '<a class="button update" href="detail.php?id='. $result['id'] .'">変更</a>';
            $task_0 .= '<a class="button delete" href="delete.php?id=' . $result['id'] .'">削除</a>';
            $task_0 .= '</div>';
            $task_0 .= '<ul>';
            $task_0 .= '<li>'. 'A地区：'.n(h($result['sum_a'])).'枚</li>';
            $task_0 .= '<li>'. 'B地区：'.n(h($result['sum_b'])) .'枚</li>';
            $task_0 .= '<li>'. 'C地区：'.n(h($result['sum_c'])) .'枚</li>';
            $task_0 .= '<li>'. 'D地区：'.n(h($result['sum_d'])) .'枚</li>';
            $task_0 .= '<li>'. 'E地区：'.n(h($result['sum_e'])) .'枚</li>';
            $task_0 .= '</ul>';
            $task_0 .= '</div>';
        }
    }

    $stmt = $pdo->prepare("SELECT * FROM dsc_request WHERE status = 1");
    $status = $stmt->execute();

    $task_1="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }else{

        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $task_1 .= '<div class="list-004 task_list_1">';
            $task_1 .= '<div class="head head_1">';
            $task_1 .= '<h2>会社名：'.h($result['company']).'</h2>';
            $task_1 .= '<p>ご担当者：'.h($result['name']) .'様</p>';
            $task_1 .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
            $task_1 .= '<p>'.'折込日：'.h($result['date']).'<p>';
            $task_1 .= '<p>'.'サイズ：'.h($result['size']).'<p>';
            $task_1 .= '<p>'.'担当者：'.h($result['assign']).'<p>';
            $task_1 .= '</div>';
            $task_1 .= '<div class="status">';
            $task_1 .= '<a class="button update" href="detail.php?id='. $result['id'] .'">変更</a>';
            $task_1 .= '<a class="button delete" href="#">削除</a>';
            $task_1 .= '</div>';
            $task_1 .= '<ul>';
            $task_1 .= '<li>'. 'A地区：'.n(h($result['sum_a'])).'枚</li>';
            $task_1 .= '<li>'. 'B地区：'.n(h($result['sum_b'])) .'枚</li>';
            $task_1 .= '<li>'. 'C地区：'.n(h($result['sum_c'])) .'枚</li>';
            $task_1 .= '<li>'. 'D地区：'.n(h($result['sum_d'])) .'枚</li>';
            $task_1 .= '<li>'. 'E地区：'.n(h($result['sum_e'])) .'枚</li>';
            $task_1 .= '</ul>';
            $task_1 .= '</div>';
        }
    }

    $stmt = $pdo->prepare("SELECT * FROM dsc_request WHERE status = 2");
    $status = $stmt->execute();

    $task_2="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }else{

        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $task_2 .= '<div class="list-004 task_list_2">';
            $task_2 .= '<div class="head head_2">';
            $task_2 .= '<h2>会社名：'.h($result['company']).'</h2>';
            $task_2 .= '<p>ご担当者：'.h($result['name']) .'様</p>';
            $task_2 .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
            $task_2 .= '<p>'.'折込日：'.h($result['date']).'<p>';
            $task_2 .= '<p>'.'サイズ：'.h($result['size']).'<p>';
            $task_2 .= '<p>'.'担当者：'.h($result['assign']).'<p>';
            $task_2 .= '</div>';
            $task_2 .= '<div class="status">';
            $task_2 .= '<a class="button update" href="detail.php?id='. $result['id'] .'">変更</a>';
            $task_2 .= '<a class="button delete" href="#">削除</a>';
            $task_2 .= '</div>';
            $task_2 .= '<ul>';
            $task_2 .= '<li>'. 'A地区：'.n(h($result['sum_a'])).'枚</li>';
            $task_2 .= '<li>'. 'B地区：'.n(h($result['sum_b'])) .'枚</li>';
            $task_2 .= '<li>'. 'C地区：'.n(h($result['sum_c'])) .'枚</li>';
            $task_2 .= '<li>'. 'D地区：'.n(h($result['sum_d'])) .'枚</li>';
            $task_2 .= '<li>'. 'E地区：'.n(h($result['sum_e'])) .'枚</li>';
            $task_2 .= '</ul>';
            $task_2 .= '</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="task_0port" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/select.css">
    <title>確認</title>
    <header>
        <h2>お問い合わせ受注状況</h2>
    </header>

    <div id="wrap">
        <div class="list task_0">
            <h2>未着手</h2>
            <?= $task_0 ?>
        </div>
        <div class="list task_1">
            <h2>着手</h2>
            <?= $task_1 ?>
        </div>
        <div class="list task_2">
            <h2>完了</h2>
            <?= $task_2 ?>
        </div>
    </div>
</head>
<body>
    
</body>
</html>