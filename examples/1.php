<?php

use Palmtree\Template\Template;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$template = new Template(__DIR__ . '/templates/1.php');

$template['document_title'] = 'Hello World Site';
$template['heading']        = 'Hello World';
$template['content']        = '<p>Welcome to the Hello World site</p>';

echo $template;
