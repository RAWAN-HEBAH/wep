<!DOCTYPE html> 
<html lang="tr">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RAWAN ILETIŞIM</title>
            <style>
            *{
                background-image: url(../FOTORAFLAR/siyah.jpg);
                text-align: center;
                color: aliceblue;
                margin: 0;
                padding: 0;
                font-size: 40px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            </style>
    </head>
    <body>
        <?php
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mesaj=$_POST['mesaj'];
        $bolum=$_POST['bolum'];

        if(isset($_POST['SUB']))
        {
            echo "<br>adiniz:<br><br>".$name;
            echo "<br>";
            echo "<br>epostaniz:<br><br>".$email;
            echo "<br>";
            echo "<br>mesajiniz:<br><br>".$mesaj;
            echo "<br>";
            echo "<br>bolumunuz:<br><br>".$bolum;
        }
        ?>
    </body>
</html>