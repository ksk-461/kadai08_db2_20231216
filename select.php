<?php
    require_once('funcs.php');

    function getTask($status_sql){
        $pdo = db_conn();
        $stmt = $pdo->prepare("SELECT * FROM dsc_request WHERE status = :status");
        $stmt->bindParam(":status", $status_sql);
        $status = $stmt->execute();
        
        $view="";
        if ($status==false) {
            $error = $stmt->errorInfo();
            exit("ErrorQuery:".$error[2]);
        }else{

            while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
                $view .= '<div class="list-004 task_list_'. $status_sql .'">';
                $view .= '<div class="head head_'. $status_sql .'">';
                $view .= '<h2>会社名：'.h($result['company']).'</h2>';
                $view .= '<p>ご担当者：'.h($result['name']) .'様</p>';
                $view .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
                $view .= '<p>'.'折込日：'.h($result['date']).'<p>';
                $view .= '<p>'.'サイズ：'.h($result['size']).'<p>';
                $view .= '<p>'.'担当者：'.h($result['assign']).'<p>';
                $view .= '</div>';
                $view .= '<div class="status">';
                $view .= '<a class="button update" href="detail.php?id='. $result['id'] .'">変更</a>';
                $view .= '<a class="button delete" href="delete.php?id=' . $result['id'] .'">削除</a>';
                $view .= '</div>';
                $view .= '<ul>';
                $view .= '<li>'. 'A地区：'.n(h($result['sum_a'])).'枚</li>';
                $view .= '<li>'. 'B地区：'.n(h($result['sum_b'])) .'枚</li>';
                $view .= '<li>'. 'C地区：'.n(h($result['sum_c'])) .'枚</li>';
                $view .= '<li>'. 'D地区：'.n(h($result['sum_d'])) .'枚</li>';
                $view .= '<li>'. 'E地区：'.n(h($result['sum_e'])) .'枚</li>';
                $view .= '</ul>';
                $view .= '</div>';
            }

            return $view;
        }
    }

    $task_0 = getTask(0);
    $task_1 = getTask(1);
    $task_2 = getTask(2);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h2>進行中</h2>
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