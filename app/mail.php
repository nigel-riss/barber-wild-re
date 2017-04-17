<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <strong><?php
    $send = $_POST['button'];
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $status = "<br>";
    if ($send != "button"){
    
    $to = "bwildorders@gmail.com";                 // вставте свой емаил
    $subject = "Заказ";        
    $mailheaders .="Reply-To: $mail";
    
    $msg .= "Имя :$name\r\nE-mail :$mail\r\nТелефон: $phone \r\nКомпания:$address " ;
    // $msg .= "E-mail :$mail";
    // $msg .= "Телефон: $phone ";
    // $msg .= "Компания:$address ";
    
    
    mail ($to, $subject, $msg, $mailheaders);
    
        $mess= "Уважаемый $name, ваше сообщение было успешно отправленно."; 
    
    echo $mess;
        
    }
    ?></strong>
</body>
</html>