<?php

session_start();

require_once '../PHPMailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['contact_name'], $_POST['contact_email'], $_POST['contact_message'])){
       $fields = [
            $name = $_POST['contact_name'],
            $email = $_POST['contact_email'],
            $message = $_POST['contact_message']
        ];
       
        foreach($fields as $field=>$data){
            
            if(empty($data)){
                $errors = 'The ' .$field . 'is required.';
            } 
        }
        if (empty($errors)) {
            
            $m = new PHPMailer();
            $m->isSMTP();
            $m->SMTPAuth =true;
            $m->Host = 'smtp.gmail.com';
            $m->Username = "ashwinichandra.br@gmail.com";
            $m->Password = "progeon04";
            $m->SMTPSecure = 'tls';
            $m->Port = 587;
            
            $m->isHTML();
            $m->Subject = 'Contact Form Submitted';
            $m->Body = 'From: ' . $fields['name'] . '('. $fields['email'] . ')<p>'. $fields['messsage'] .'<p>';
            $m->FromName = 'Contact';
            $m->addAddress('ashwinichandra.br@gmail.com', 'Ashwini');
            
            if ($m->send()) {
                header('Location: thanks.php'); 
                die();
            }else{$errors[] = 'Sorry something went wrong, try again later';}
        }
        
}else{ $errors[] = 'Something went wrong';}

$_SESSION['errors'] =$errors;
$_SESSION['fields'] = $fields;

header('Location: ind.php');
        


