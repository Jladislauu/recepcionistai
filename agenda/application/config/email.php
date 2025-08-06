<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'RecepcionistAI';
$config['protocol'] = 'smtp'; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_debug'] = '0'; // or '1'
$config['smtp_auth'] = TRUE; //or FALSE for anonymous relay.
$config['smtp_host'] = 'smtp.gmail.com'; // Example: 'smtp.gmail.com'
$config['smtp_user'] = 'recepcionistaistartup@gmail.com';
$config['smtp_pass'] = 'mwacninmxmcmzdnv';
$config['smtp_crypto'] = 'tls'; // or 'ssl'
$config['smtp_port'] = 465;
$config['from_name'] = 'RecepcionistAI';
$config['from_address'] = 'recepcionistaistartup@gmail.com';
$config['reply_to'] = 'recepcionistaistartup@gmail.com';
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
