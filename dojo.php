<?php

# Aprendizes:
# Dieison X (Sexta Feira 13)
# Juliana (Gabriela)
# Benjamin Button (Borges)
# Ericson (MD110)
# Prof. Xavier
# Rivelindo 
# Salgado (Doce)
# Marcão
# Vieira
# Pinheiro
# Domingão
# Fábio Henrique (Reginaldo Rossi)
# Smurfs - Mumfim (Diego)


$numero_romano=str_split(trim(strtoupper($_GET["romano"])));
$total=0;
$anterior =0;

$valor=0;
$lista_valor=[];

for($i=0;$i<=count($numero_romano);$i++){

	if ($numero_romano[$i]=="I"){
		#array_push($lista_valor, 1);
	 	$total=$total+1;
	}	


	if ($numero_romano[$i]=="V"){
		if($i>0){
			if($numero_romano[$i-1] == "I"){
				$total = $total + 3;
			}
		}else{
			
		$total=$total+5;			
		}
		

		#array_push($lista_valor, 5);

		
	}

	if ($numero_romano[$i]=="X") {
		if($i>0){
			if($numero_romano[$i-1] == "I"){
				$total = $total + 8;
			}
		}else{
			
		$total=$total+10;			
		}
		#array_push($lista_valor, 10);
		#$total=$total+10;
	}

	if($numero_romano[$i] == "L"){
		if($i>0){
			if($numero_romano[$i-1] == "X"){
				$total = $total + 30;
			}
		}else{
			
		$total=$total+50;			
		}
		#array_push($lista_valor, 50);
		#$total=$total+50;
	}

	if($numero_romano[$i] == "C"){
		if($i>0){
			if($numero_romano[$i-1] == "X"){
				$total = $total + 80;
			}
		}else{
			
		$total=$total+100;			
		}
		#array_push($lista_valor, 100);
		#$total=$total+100;
	}

	if($numero_romano[$i] == "D"){
		if($i>0){
			if($numero_romano[$i-1] == "C"){
				$total = $total + 300;
			}
		}else{
			
		$total=$total+500;			
		}
		#array_push($lista_valor, 500);
		#$total=$total+500;
	}

	if($numero_romano[$i] == "M"){
		if($i>0){
			if($numero_romano[$i-1] == "C"){
				$total = $total + 800;
			}
		}else{
			
		$total=$total+1000;			
		}

		#array_push($lista_valor, 1000);
		#$total=$total+1000;
	}
}

foreach ($lista_valor as $key=> $value) {
	if($lista_valor[$key]==0){
		$total=$total+$value;
	}
	if($value>$lista_valor[$key-1]){
		$total = $total-$value;
	}else{
		$total = $total+$value;
	}

}

echo $total;
/*
if ($numero_romano=="I") {
	echo "1";
}elseif ($numero_romano=="II") {
	echo "2";
}elseif ($numero_romano=="III") {
	echo "3";
}elseif ($numero_romano=="IV") {
	echo "4";
}elseif ($numero_romano=="V") {
	echo "5";
}elseif ($numero_romano=="VI") {
	echo "6";
}elseif ($numero_romano=="VII") {
	echo "7";
}elseif ($numero_romano=="VIII") {
	echo "8";
}elseif ($numero_romano=="IX") {
	echo "9";
}elseif ($numero_romano=="X") {
	echo "10";
}elseif ($numero_romano=="XI") {
	echo "11";
}else {
	echo "bugou, me concerte!";
}
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Conversor Romano-Arabico</title>
</head>
<body>

<form method="GET" action="#">
	<label>Número Romano</label>
	<input type="text" name="romano" value="">
	<input type="submit" value="ok">

</form>


</body>
</html>