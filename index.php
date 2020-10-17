<?php
include "inc/functions.php";

$refreshWebsiteAfter = "10";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- this meta-tag refreshes the website after the seconds declared in the $refreshWebsiteAfter-variable  -->
  <meta http-equiv="refresh" content="<?php echo $refreshWebsiteAfter; ?>">
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    body {
      /** change background-color via changeBackgroundColor() */
      background-color: <?php changeBackgroundColor() ?>;
    }

  </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php
        # call printQuote with the $quotes-array as argument
        printQuote($quotes);
      ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>