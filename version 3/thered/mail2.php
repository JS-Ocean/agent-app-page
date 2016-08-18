<?

if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они

        $to = 'info@theredpin.com'; //Почта получателя, через запятую можно указать сколько угодно адресов

        $subject = 'TheRedPin Agent App Page | App Feedback Form'; //Загаловок сообщения

        $message = '

                <html>

                    <head>

                        <title>'.$subject.'</title>

                    </head>

                    <body>

                        <p>Name: '.$_POST['name'].'</p>

                        <p>Message: '.$_POST['message'].'</p>                         

                    </body>

                </html>'; //Текст нащего сообщения можно использовать HTML теги

        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма

        $headers .= "From: TheRedPin <from@example.com>\r\n"; //Наименование и почта отправителя

        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail

}

?>