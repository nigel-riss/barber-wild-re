
<?php
$send = $_POST['button'];
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $juicy = $_POST['Juicy'];
    $icemelon = $_POST['Ice-melon'];
    $clay = $_POST['Clay'];
    $shaveoil= $_POST['Shave-Oil'];
    $beardoilidaho =$_POST['Beard-Oil-Idaho'];
    $beardoiltennessee =$_POST['Beard-Oil-Tennessee'];
    $soap =$_POST['Soap'];
    $aftershavebalm=$_POST['AfterShaveBalm'];
    $captcha=$_POST['g-recaptcha-response'];
    $secretkey="6LevdB0UAAAAAPb4NSaWkYfENrh22CKr0HhHxFJS";
    $to = "bwildorders@gmail.com";  
    $subject = "Заказ";        
    $mailheaders .="Reply-To: $mail";
    
    $msg .= "Имя: $name\r\nE-mail:$mail\r\nТелефон: $phone \r\nКомпания:$address\r\nJuicy: $juicy\r\nIce-melon: $icemelon\r\nClay: $clay\r\nShave-Oil: $shaveoil\r\nBeard-Oil-Idaho:$beardoilidaho \r\nBeard-Oil-Tennessee: $beardoiltennessee\r\nSoap: $soap\r\nAfterShaveBalm: $aftershavebalm" ;
    // mail ($to, $subject, $msg, $mailheaders);
    
    // $mess= "Уважаемый $name, ваше сообщение было успешно отправленно."; 
    
    // echo $mess;
    
//     }
// $url = 'https://www.google.com/recaptcha/api/siteverify?secret=YOU_SECRET_KEY&response='.(array_key_exists('g-recaptcha-response', $_POST) ? $_POST["g-recaptcha-response"] : '').'&remoteip='.$_SERVER['REMOTE_ADDR'];
// $resp = json_decode(file_get_contents($url), true);
// if ($resp['success'] == true) {
// mail ($to, $subject, $msg, $mailheaders);
    
// }
// else {

// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['g-recaptcha-response'])) {
        exit('Empty captcha');
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';

    // data POST
    $secretkey="6LevdB0UAAAAAPb4NSaWkYfENrh22CKr0HhHxFJS";
    $recaptcha = $_POST['g-recaptcha-response'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $url_data = $url.'?secret='.$secret.'&response='.$recaptcha.'&remoteip='.$ip;

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url_data);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $res = curl_exec($curl);
    curl_close($curl);

    $res = json_decode($res);

    if ($res->success) {
     
    }
    else {
        // exit ('Error');
        header('Location: http://barberwild.ru/order-acception.html');
        mail ($to, $subject, $msg, $mailheaders);
    }
}












?>