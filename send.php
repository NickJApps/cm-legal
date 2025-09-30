<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "ma-chernov@yandex.ru";
    $subject = $_POST['subject'];
    $message = "Имя: ".$_POST['name']."\nEmail: ".$_POST['email']."\n\n".$_POST['message'];
    $headers = "From: ".$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке.";
    }
}
?>