<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucarcod3r@eb.br']);
//echo $user->getSelect();

print_r(User::get(['name' => 'Chaves'], 'id, name ,email'));

echo '<br>';

foreach(User::get([], 'name') as $user) {
    echo $user->name, '<br>';
}