<?php

$email = "israelsalfer@gmail.com";
$name= $_POST['name'];
$subject= $_POST['subject'];
$message= $_POST['message'];

mail($email, $name, $subject, $message);
header("location:www.salferti.com.br");

?>