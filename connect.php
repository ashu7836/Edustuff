<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no = $_POST['no'];
?> 

$conn= new mysqli('localhost,'root,'test1');
if($conn->connect_error){
    die('connection failed : .$conn->connect_error);
}
else{
    $stmt=$conn->connect_prepare("insert into registration(name,email,no)
    values(?,?,?)");
    $stmt->blind_param("ssi",$name, $email, $no);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();

}
