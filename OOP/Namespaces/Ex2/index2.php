<?php
namespace Html;
include "Html2.php";

$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;
?>

<html>
<body>
<h1>Use classes from the Html namespace without the need for the Html\qualifier:</h1>
<?php $table->message(); ?>
<?php $row->message(); ?>


</body>
</html>