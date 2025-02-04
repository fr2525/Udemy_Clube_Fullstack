<!DOCTYPE html>
<?php include_once('includes/header.inc.php');
	  include_once('includes/menu.inc.php');
      require "..fullstack/functions/pages.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - Fullstack</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2> Fullll Stack </h2>
    <div class="container">
        <?php require load(); ?>
    </div>

</body>
<?php include_once('includes/footer.inc.php');
?>