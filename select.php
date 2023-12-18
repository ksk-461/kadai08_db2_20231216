<?php
    require_once('funcs.php');

    try {
        $pdo = new PDO('mysql:dbname=dsc_db; charset=utf8; host=localhost','root','');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }

    $stmt = $pdo->prepare("SELECT * FROM dsc_request");
    $status = $stmt->execute();

    $view="";
    if ($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    }else{

    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<li>'.'会社名：'.h($result['company']).' （ご担当者様：'.h($result['name']) .'）';
        $view .= '<p>'.'折込日：'.h($result['date']).'<p>';
        $view .= '<p>'.'連絡先：'.h($result['email']) .'</p>';
        $view .='<p>'. 'A地区：'.h($result['sum_a']) .'枚</p>';
        $view .='<p>'. 'B地区：'.h($result['sum_b']) .'枚</p>';
        $view .='<p>'. 'C地区：'.h($result['sum_c']) .'枚</p>';
        $view .='<p>'. 'D地区：'.h($result['sum_d']) .'枚</p>';
        $view .='<p>'. 'E地区：'.h($result['sum_e']) .'枚</p>';
        $view .= '</li>';
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
            <ul class="list-009">
                <?= $view ?>
            </ul>
        </div>
    </div>
</head>
<body>
    
</body>
</html>