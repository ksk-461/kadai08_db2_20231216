<?php
    require_once('funcs.php');
    $pdo = db_conn();

    db_conn();

    $stmt = $pdo->prepare("SELECT * FROM dsc_request");
    $status = $stmt->execute();

    $view="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }else{

    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<div class="list-004">';
        $view .= '<div class="head">';
        $view .= '<h2>会社名：'.h($result['company']).'</h2>';
        $view .= '<p>ご担当者：'.h($result['name']) .'様</p>';
        $view .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
        $view .= '<p>'.'折込日：'.h($result['date']).'<p>';
        $view .= '</div>';
        $view .= '<div class="status">';
        // 担当者は変更画面で設定？？
        // $view .= 
        //     '<select type="select">
        //         <option>a</option>
        //         <option>b</option>
        //     </select>';
        $view .= '<a class="a" href="detail.php?id='. $result['id'] .'">変更</a>';
        $view .= '<a class="a" href="#">削除</a>';
        $view .= '</div>';
        $view .= '<ul>';
        $view .='<li>'. 'A地区：'.n(h($result['sum_a'])).'枚</li>';
        $view .='<li>'. 'B地区：'.n(h($result['sum_b'])) .'枚</li>';
        $view .='<li>'. 'C地区：'.n(h($result['sum_c'])) .'枚</li>';
        $view .='<li>'. 'D地区：'.n(h($result['sum_d'])) .'枚</li>';
        $view .='<li>'. 'E地区：'.n(h($result['sum_e'])) .'枚</li>';
        $view .= '</ul>';
        $view .= '</div>';
  }

}

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
        <div class="list">
            <?= $view ?>
        </div>
    </div>
</head>
<body>
    
</body>
</html>