<?php
$quirey = $app['database'];
$users = $quirey->selectAll('users');

require 'views/index.view.php';