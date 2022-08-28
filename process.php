<?php 
//var_dump(535345);
require_once "admin/DbConnection.php";
//var_dump($conn);
if(!isset($_POST['question1']) || !isset($_POST['question2']) || !isset($_POST['question3'])){
    session_start();
    $_SESSION['msg'] = "chọn câu trả lời li!";
    header("Location: index.php");
    exit();
    
}

$sql = "INSERT INTO ks (question1, question2, question3,question4) VALUES ('".$_POST['question1']."', '".$_POST['question2']."','".$_POST['question3']."','".$_POST['question4']."')";
$result = $conn->query($sql);
//var_dump($result);
// Associative array
if($result>0){
    session_start();
    $_SESSION['question1'] = $_POST['question1'];
    $_SESSION['question2'] = $_POST['question2'];
    $_SESSION['question3'] = $_POST['question3'];
    $_SESSION['question4'] = $_POST['question4'];
    header("Location: ketqua.php");
    exit();
}
//var_dump($data[0]["id"]);

// Free result set
$result->free_result();

$conn->close();

?>