<?php
$base = file_get_contents("http://university.netology.ru/u/shesterin/base.json");

$table = json_decode($base, true);
?>

<table>
<style>
	td{
		border: 1px solid #000;
	}
</style>

<?php
foreach ($table as $value) {
?>

	<tr>
		<td style="">
			<?=implode('<td>', $value); ?>
		</td>
	</tr>

<?php
}
?>

</table>
