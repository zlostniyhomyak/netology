<?php 
$pdo = new PDO("mysql:host=localhost;dbname=global;charset=utf8", "shesterin", "neto1766");
$sql = "SELECT * FROM books";
foreach ($pdo->query($sql) as $row) {
	$newBase[] = $row;
}
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
<h1>Библиотека успешного человека</h1>
<table>
    <tbody>
    	<tr>
	        <th>Название</th>
	        <th>Автор</th>
	        <th>Год выпуска</th>
	        <th>Жанр</th>
	        <th>ISBN</th>
    	</tr>
    	<?php 
    	foreach ($newBase as $key => $value) {
    		echo '<tr>';
    				echo '<td>'.$value['name'].'</td>';    				
    				echo '<td>'.$value['author'].'</td>'; 				
    				echo '<td>'.$value['year'].'</td>';			
    				echo '<td>'.$value['genre'].'</td>';			
    				echo '<td>'.$value['isbn'].'</td>';
    		echo '</tr>';
    	}
?>
</tbody>
</table>
