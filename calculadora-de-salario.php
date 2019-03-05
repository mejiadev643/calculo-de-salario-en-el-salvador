<?php 

$sueldo=$_POST['calculo'];//solo para provar, viene de form.html
$afp=($sueldo*7.25)/100;//sacamos el afp del sueldo 
$isss=$sueldo*0.03;//sacamos el iss del sueldo
$salarioBruto=$sueldo-$isss-$afp;//salario bruto = sueldo menos isss menos afp
$cuotaFija1=17.67;//cuota fija correspondiente a tramo 1
$cuotaFija2=60.00;//cuota fija correspondiente a tramo 2
$cuotaFija3=288.57;//cuota fija correspondiente a tramo 3
$tramo1=472;//tramo 1 de renta
$tramo2=895.24;//tramo 2 de renta
$tramo3=2038.10;//tramo 3 de renta
if ($sueldo<=0) {//si el sueldo es menor a cero centavos
	print("Datos incorrectos");
}elseif ($salarioBruto<=$tramo1) {//si salario bruto es menor que el tramo 1
	
	$renta="no pagas renta";//no excede  de tramo 1 asi que no necesita operaciones
	$sueldoMensual=$salarioBruto;
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".$renta."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);// un print para mostrar ordenadamente los datos
}elseif ($salarioBruto>$tramo1 and $salarioBruto<=$tramo2) {
	$renta=(($salarioBruto-$tramo1)*0.10+$cuotaFija1);//excede de tramo 1 asi que se aplica el 10% de descuento
	$sueldoMensual=$salarioBruto-$renta;
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);

}elseif ($salarioBruto>$tramo2 and $salarioBruto<=$tramo3) {
	$renta=(($salarioBruto-$tramo2)*0.20+$cuotaFija2);//excede de tramo 2 asi que se aplica el 20% de descuento
	$sueldoMensual=round($salarioBruto-$renta,2);
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("Tramo 2:<p>"."sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);

}elseif ($salarioBruto>$tramo3) {
	$renta=(($salarioBruto-$tramo3)*0.30+$cuotaFija3);//excede de tramo 3 asi que se aplica el 30% de descuento
	$sueldoMensual=round($salarioBruto-$renta,2);
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("Tramo 4:<p>"."sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);
}else{//por si algun bruto no ingresa numeros
	print("datos incorrectos, por favor ingrese datos numericos");
}


?>
