<?php
require_once('funcs.php');
$pdo = db_conn();

$company = $_POST['company'];
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$size = $_POST['size'];
$sum_a = $_POST['sum_a'];
$sum_b = $_POST['sum_b'];
$sum_c = $_POST['sum_c'];
$sum_d = $_POST['sum_d'];
$sum_e = $_POST['sum_e'];

$id = $_POST['id'];

$stmt = $pdo->prepare('UPDATE
                        dsc_request
                        SET
                        company = :company ,name = :name, email = :email, date = :date, size = :size
                        where id = :id; ');

$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}