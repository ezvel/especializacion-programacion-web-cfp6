<style>
	.rojo {
		color: red;
	}
</style>
<?php

//TABLAS DINÁMICAS 1
echo "<table border = 1>";
for ($i = 0; $i < 2 ; $i++) { 
	echo "<tr>";
	for ($j=0; $j < 2; $j++) { 
		echo "<td>ALGO</td>";
	}
	echo "</tr>";
}
echo "</table>";


//TABLA DINÁMICAS 2
echo "<table border = 1>";
for ($i=0; $i < 2; $i++) { 
	echo "<tr>";
	for ($j=0; $j < 2; $j++) { 
		if ($j % 2 == 0) {
			echo "<td class='rojo'>ALGO</td>";
		}else{
			echo "<td>ALGO</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";




//TABLA DINÁMICAS 3
echo "<table border = 1>";
for ($i=0; $i < 2; $i++) { 
	if ($i % 2 == 0) {
		echo "<tr class='rojo'>";
	}else{
		echo "<tr>";
	}
	for ($j=0; $j < 2; $j++) { 
		echo "<td>ALGO</td>";
	}
	echo "</tr>";
}
echo "</table>";


//TABLA DINÁMICAS 3
echo "<table border = 1>";
for ($i=0; $i < 2; $i++) { 
	echo "<tr>";
	for ($j=0; $j < 2; $j++) { 
		if ($i % 2 == 0 && $j % 2 == 0) {
			echo "<td class='rojo'>ALGO</td>";
			echo "<td>ALGO</td>";
		}else if($i % 2 == 1 && $j % 2 == 1){
			echo "<td>ALGO</td>";
			echo "<td class='rojo'>ALGO</td>";
		}
	}
	echo "</tr>";
}
echo "</table>"
?>