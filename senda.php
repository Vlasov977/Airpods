<?
if((isset($_POST['user_name'])&&$_POST['user_name']!="")&&(isset($_POST['user_phone'])&&$_POST['user_phone']!=""))
 {

     $choose_the_way=$_POST['choose_the_way'];
    $to = 'Freeairpods01@gmail.com';
    $subject = 'Order';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['user_name'].'</p>
                        <p>Phone: '.$_POST['user_phone'].'</p>    
                        <p>PCs 1</p> 
                         <p> Type payment '.$_POST['choose_the_way'].'</p>    
                           
                          
                                           
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <from@example.com>\r\n";
    mail($to, $subject, $message, $headers);
     header("Location: index.html");
 }
?>