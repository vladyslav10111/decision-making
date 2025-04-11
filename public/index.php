<?php

require __DIR__ . '/../vendor/autoload.php';

use Vladyslav10111\DecisionMaking\FormRenderer;
use Vladyslav10111\DecisionMaking\DecisionProcessor;

$form = new FormRenderer();
$processor = new DecisionProcessor();

$result = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["options"])) {
    $processor->processInput($_POST["options"]);
    $options = $processor->getOptions();

    if (!empty($options)) {
        $randomOption = $options[array_rand($options)];
        $result = "<p><strong>Випадковий варіант:</strong> " . htmlspecialchars($randomOption, ENT_QUOTES, 'UTF-8') . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang='uk'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Decision Making</title>
    <script defer src="inc/js/validation.js"></script>
</head>
<body>
<?php echo $form->render(); ?>
<?php echo $result; ?>
</body>
</html>
