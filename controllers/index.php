<?php

$tasks = $quirey->selectAll('todos');

require 'views/index.view.php';