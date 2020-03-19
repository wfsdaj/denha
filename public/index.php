<?php
require __DIR__ . '/../vendor/autoload.php';

use denha\App;

(new App())->start()->mark()->view();
