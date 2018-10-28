<?php

    use PHPMailer\PHPMailer\PHPMailer;

    $php_mailer = new PHPMailer();
    $php_mailer->isSMTP();
    $php_mailer->SMTPAuth = true;
    $php_mailer->SMTPSecure = 'tls';

    $php_mailer->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    $php_mailer->CharSet = 'utf-8';
    // $php_mailer->SMTPDebug = 2;

    // https://mailtrap.io
    $php_mailer->Username = '';
    $php_mailer->Password = '';

    $php_mailer->Host = 'smtp.gmail.com';
    $php_mailer->Port = 587;
    $php_mailer->isHTML(true);

    $email_to = get_bloginfo('admin_email');
    $site_name = get_bloginfo('name');
    $php_mailer->addAddress($email_to, $site_name);
    $php_mailer->setFrom = $site_name;
    $php_mailer->From = $email_to;
    $php_mailer->FromName = $site_name.' Support';
    $php_mailer->Subject = $mail_subject.' - '.$site_name;
