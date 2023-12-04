<?php

echo "<pre>";
function passwordHash(
    #[\SensitiveParameter] string $password
) {
    var_dump($password);
    debug_print_backtrace();
}

passwordHash('password');
