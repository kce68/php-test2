<?php
// If the request is made from our space preview functionality then turn on PHP error reporting
if (isset($_SERVER['HTTP_X_FORWARDED_URL']) && strpos($_SERVER['HTTP_X_FORWARDED_URL'], '.w3spaces-preview.com/') !== false) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}
?>

<html>
<head>
<title>PHP blank template</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
  echo '<h1>My awesomesed space</h1>'; 
?>

</body>
</html>
