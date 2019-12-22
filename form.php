<?php


//Database Connection

$conn = mysqli_connect('localhost','root','','sandyspa');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['text'];
    $stmt = "INSERT INTO feedback (name, email, questions) VALUES ('$name', '$email', '$feedback')";

    if(!mysqli_query($conn,$stmt)){
        echo "<script type='text/javascript'>alert('Not inserted');</script>"; 
    }else{
        echo "<script type='text/javascript'>alert('Form sucesfully sent');</script>";
 
    }

    header ("refresh:0; url=Contact Us.html ");

    //if($mysqli -> query($conn,$stmt)){

    //}
    //$stmt->bind_param("sss", $name, $email, $feedback);
    //$stmt->execute();
    //$stmt->close();
    //$conn->close();




?>
