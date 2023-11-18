<?php
include("koneksi.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($name)){
    echo "<script>alert('Nama belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
    }else
if (empty($email)){
    echo "<script>alert('Email belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
    }else   
if (empty($phone)){
    echo "<script>alert('Nomor Telepon belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
    }else    
 if (empty($subject)){
     echo "<script>alert('Subject belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
    }else  
if (empty($message)){
    echo "<script>alert('Message belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1 url=contact.php'>";
    }else     
    $sql = "INSERT INTO pertanyaan (name, email, phone, subject, message) VALUE ('$name', '$email', '$phone', '$subject', '$message')";
    $query = mysqli_query($db, $sql);

    if($query) {
        echo "<script>alert('you sent message successfully')</script>";
        echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
    } else {
        header('Location: contact.php?status=gagal');
    }

?>
