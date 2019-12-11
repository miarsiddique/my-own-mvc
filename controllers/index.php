<?php
$quirey = $app['database'];
$tasks = $quirey->selectAll('todos');

require 'views/index.view.php';