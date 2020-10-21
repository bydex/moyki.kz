<?php

require($_SERVER['DOCUMENT_ROOT'] . '/dev/plugins/libmail.php');

$arFields = array(
    "name" => "Имя",
    "phone" => "Телефон",
    "email" => "E-mail",
    "product_name" => "Название товара"
);

$errors = true;

foreach ($_POST['data'] as $data) {
    if (!empty($data["value"])) {
        $mBody .= $arFields[$data["name"]] . ": " . htmlspecialchars($data["value"]) . "<br/>";
        $errors = false;
    } else {
        $errors = true;
    }
}

if (!$errors) {
    $mSubject = 'Оставили заявку на сайте Оптимакухни';

    $m = new Mail;
    $m->From("info@optimakuhni.kz");
    $m->To("info@optimakuhni.kz");
    $m->Subject($mSubject);
    $m->Body($mBody, "html");
    $m->Send();

    $response = array("response" => true);
    print json_encode($response);
}
