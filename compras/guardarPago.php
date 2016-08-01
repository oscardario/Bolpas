<?php
session_start();
					$arreglo=$_SESSION['carrito'];
					$total=0;
					for($i=0;$i<count($arreglo);$i++){
						$total=($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
					}
					$_SESSION['TotalPago'] = $total;
					echo $total;
          header('Location: ../pago.php');
?>
