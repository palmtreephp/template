# Palmtree PHP Template

Templating component for Palmtree PHP

## Usage
```php
<?php
use Palmtree\Template\Template;

$template = new Template('front-page.php');

$template['document_title'] = 'Hello World Site';
$template['heading']        = 'Hello World';
$template['content']        = '<p>Welcome to the Hello World site</p>';

echo $template;
```

```html
<!-- front-page.php -->
<!doctype html>
<html>
<head>
    <title><?php echo $document_title; ?></title>
</head>
<body>
<main>
    <h1><?php echo $heading; ?></h1>
    <?php echo $content; ?>
</main>
</body>
</html>

```

## License

Released under the [MIT license](LICENSE)
