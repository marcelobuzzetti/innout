<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucarcod3r@eb.br']);
print_r($user);
echo '<hr>';
$user->email = 'marcelo@cod3r.com.br';
print_r($user->email);