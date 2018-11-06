<?php
$base = file_get_contents("base.json");

$table = json_decode($base, true);
?>

<style>
 table { 
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>

<table>

<?php
	foreach ($table as $value) {
?>
<tr>
	<?php 
		echo "<td>{$value['firstName']}</td>";
		echo "<td>{$value['lastName']}</td>";
		echo "<td>{$value['address']}</td>";
		echo "<td>{$value['phoneNumber']}</td>";
	?>
</tr>

<?php
}
?>
</table>
