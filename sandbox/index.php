<?php
header('Location: /dashboard', TRUE, 301);

error_reporting(E_ALL | E_STRICT);

ini_set('display_errors', 1);

ini_set('log_errors_max_len', 0);

ini_set('error_log', './error_log.txt');

echo '<h1>Triggering notice</h1>';