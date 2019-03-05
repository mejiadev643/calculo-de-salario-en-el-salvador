<?php 

$sueldo=$_POST['calculo'];//solo para provar, viene de form.html
$afp=($sueldo*7.25)/100;
$isss=$sueldo*0.03;
$salarioBruto=$sueldo-$isss-$afp;
$cuotaFija1=17.67;
$cuotaFija2=60.00;
$cuotaFija3=288.57;
$tramo1=472;
$tramo2=895.24;
$tramo3=2038.10;
if ($sueldo<=0) {
	print("Datos incorrectos");
}elseif ($salarioBruto<=$tramo1) {
	
	$renta="no pagas renta";
	$sueldoMensual=$salarioBruto;
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".$renta."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);
}elseif ($salarioBruto>$tramo1 and $salarioBruto<=$tramo2) {
	$renta=(($salarioBruto-$tramo1)*0.10+$cuotaFija1);
	$sueldoMensual=$salarioBruto-$renta;
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);

}elseif ($salarioBruto>$tramo2 and $salarioBruto<=$tramo3) {
	$renta=(($salarioBruto-$tramo2)*0.20+$cuotaFija2);
	$sueldoMensual=round($salarioBruto-$renta,2);
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("Tramo 2:<p>"."sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);

}elseif ($salarioBruto>$tramo3) {
	$renta=(($salarioBruto-$tramo3)*0.30+$cuotaFija3);
	$sueldoMensual=round($salarioBruto-$renta,2);
	$sueldoQuincenal=round($sueldoMensual/2,2);

	print("Tramo 4:<p>"."sueldo: ".$sueldo."<p>afp: ".$afp."<p>isss: ".$isss."<p>salarioBruto: ".$salarioBruto."<p>renta: ".round($renta,2)."<p> Sueldo neto Mensual: ".$sueldoMensual."<p>sueldo neto Quincenal: ".$sueldoQuincenal);
}else{
	print("datos incorrectos");
}


?>