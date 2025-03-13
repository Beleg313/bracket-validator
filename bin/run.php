#!/usr/bin/env php
<?php

namespace App;

use function cli\line;
use function cli\prompt;
use function App\Engine\bracketsValidator;

require_once __DIR__ . '/../vendor/autoload.php';

function runTerminal()
{
  $question = prompt("Enter your expression");

  $result = bracketsValidator($question);

  line($result);
}

runTerminal();