<?php
    //tramsforms special characters to prevent user from typing script 
    function e($string){
        return htmlspecialchars($string,ENT_QUOTES,'UTF-8');
    }

    $to = "odvozotpadazg@gmail.com";
    $subject = "Site Comment";
    $from = $_POST['email'];
    $msg = $_POST['message'];
    if(empty($from)){
        echo "<script>
                 alert('E-mail can't be empty'); 
                 window.history.go(-1);
             </script>"; 
        die();
    }
    if(empty($msg)){
        echo "<script>
                alert('Message can't be empty'); 
                 window.history.go(-1);
             </script>"; 
        die();
    }
    else{
        mail($to,$subject,$msg,"From: ".$from);
        echo "<script>
                alert('message sent succesfully'); 
                window.history.go(-1);
             </script>";
    }
?>