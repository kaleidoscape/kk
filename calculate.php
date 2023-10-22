<?php
$expression = $_POST["expression"];

// Calculate the result using eval() function
$result = eval("return $expression;");

echo json_encode(array("result" => $result));
?>
