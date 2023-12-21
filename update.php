<?php
require_once('funcs.php');

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
$assign = $_POST['assign'];
$status_sql = $_POST['status'];
$id = $_POST['id'];

$pdo = db_conn();
$stmt = $pdo->prepare('UPDATE
                        dsc_request
                        SET
                            company = :company , name = :name, email = :email, date = :date, size = :size,
                            sum_a = :sum_a, sum_b = :sum_b, sum_c = :sum_c, sum_d = :sum_d, sum_e = :sum_e,
                            assign = :assign, status = :status
                            WHERE id = :id; ');

$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':sum_a', $sum_a, PDO::PARAM_INT);
$stmt->bindValue(':sum_b', $sum_b, PDO::PARAM_INT);
$stmt->bindValue(':sum_c', $sum_c, PDO::PARAM_INT);
$stmt->bindValue(':sum_d', $sum_d, PDO::PARAM_INT);
$stmt->bindValue(':sum_e', $sum_e, PDO::PARAM_INT);
$stmt->bindValue(':assign', $assign, PDO::PARAM_STR);
$stmt->bindValue(':status', $status_sql, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}