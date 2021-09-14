<?php

$name = $_POST['name'];
$tel = $_POST['tel'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);

$name = urldecode($name);
$tel = urldecode($tel);

$name = trim($name);
$tel = trim($tel);

if (mail("admin@mail.ru" ,
"Новое письмо с сайта" ,
"Имя: ".$name."\n".
"Телефон: ".$tel."\n".)
) {
    echo ('Заявка успешно отправлена');
}
else {
    echo ('Есть ошибки! Проверьте данные...');

}


?>