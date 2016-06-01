<?php 
//$file = "http://api.meteored.mx/index.php?api_lang=mx&localidad=22319&affiliate_id=ms7vtgr826xh&v=2&h=1";
$file='http://api.tiempo.com/index.php?api_lang=es&localidad=22319&affiliate_id=ms7vtgr826xh';
//$sxml = simplexml_load_file($url);
//echo $sxml->

if($xml = simplexml_load_file($file)){ //ABRIMOS EL FICHERO CON LA LIBRERIA SIPLEXML_LOAD_FILE
		//LEEMOS LOS DATOS QUE NECESITAMOS//
		$i=0;
		$url= $xml->location->interesting->url;
		$array=explode('-', $url);	
		$lugar = $xml->location->attributes();
		$city = explode('[', $lugar);
	
		// En este ejemplo, para obtener los iconos del tiempo y del viento usaremos el atributo id del nodo forecast correspondiente
		// y obtenemos de esta forma el valor númerico que corresponde a cada icono
		foreach ($xml->location->var as $var) {
			switch ($i) {
				case 0: 
					//LEEMOS LA TEMPERATURA MINIMA//
					$TempMin = htmlentities($xml->location->var[0]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
				break;
				case 1:
					//LEEMOS LA TEMPERATURA MAXIMA//
					$TempMax = htmlentities($xml->location->var[1]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
				break;
				case 2:
					//LEEMOS EL ICONO DEL VIENTO//
					// En este ejemplo, usaremos los valores númericos de los iconos					
					$Viento = htmlentities($xml->location->var[2]->data->forecast[0]->attributes()->id,ENT_COMPAT,'UTF-8');
				break;
				case 3:
					//LEEMOS EL ICONO DEL TIEMPO//
					// En este ejemplo, usaremos los valores númericos de los iconos				
					$Simbolo = htmlentities($xml->location->var[3]->data->forecast[0]->attributes()->id,ENT_COMPAT,'UTF-8');
				break;
				case 4: 
					//LEEMOS EL DIA DE LA SEMANA//
					$Dia = htmlentities($xml->location->var[4]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
				break;
			}
			$i++;
		}
} //TERMINAMOS LA LECTURA DEL FICHERO, TENEMOS LOS DATOS ACUMULADOS EN LOS ARRAYS TEMPERATURAMINIMA, TEMPERATURAMAXIMA, DIASEMANA
else {echo "No se pudo leer el fichero"; exit;}

//echo "<br>";
?>
<table align="center" border="0" width="100%">
<td align="right" class="Museo100" width="70%">
<a href="#http://bit.ly/1dh2ROE" target="" title="Informaci&oacute;n obtenida de: www.meteored.mx" target="_blank">
<span class="text-clima text-primary"><?php echo "Min: ".$TempMin."&deg; C"; ?></span>
<br>
<span class="text-clima text-danger"><?php echo "Max: ".$TempMax."&deg; C"; ?></span>
</a>
</td>
<td align="right" width="30%">
<a href="#http://bit.ly/1dh2ROE" target="" title="Informaci&oacute;n obtenida de: www.meteored.mx" target="_blank">
<?php 
				if ($Simbolo == "1") {echo " <img src='./clima/simbolo/1.png' class='img_clima' alt='Despejado' title='Despejado'/>";}
				if ($Simbolo == "2"){echo " <img src='./clima/simbolo/2.png' class='img_clima' alt='Intervalos Nubosos' title='Intervalos Nubosos'/>";}
				if ($Simbolo == "3") {echo " <img src='./clima/simbolo/3.png' class='img_clima' alt='Cielos Nubosos' title='Cielos Nubosos'/>";}
				if ($Simbolo == "4") {echo " <img src='./clima/simbolo/4.png' class='img_clima' alt='Cielos Cubiertos' title='Cielos Cubiertos'/>";}	
				if ($Simbolo == "5") {echo " <img src='./clima/simbolo/5.png' class='img_clima' alt='Intervalos nubosos con lluvia debil' title='Intervalos nubosos con lluvia debil'/>";}
				if ($Simbolo == "6") {echo " <img src='./clima/simbolo/6.png' class='img_clima' alt='Cielos nubosos con lluvia debil' title='Cielos nubosos con lluvia debil'/>";}
				if ($Simbolo == "7") {echo " <img src='./clima/simbolo/7.png' class='img_clima' alt='Cielos cubiertos con lluvia debil' title='Cielos cubiertos con lluvia debil'/>";}
				if ($Simbolo == "8") {echo " <img src='./clima/simbolo/8.png' class='img_clima' alt='Intervalos nubosos con lluvia moderada' title='Intervalos nubosos con lluvia moderada'/>";}	
				if ($Simbolo == "9") {echo " <img src='./clima/simbolo/9.png' class='img_clima' alt='Cielos nubosos con lluvia moderada' title='Cielos nubosos con lluvia moderada'/>";}
				if ($Simbolo == "10") {echo " <img src='./clima/simbolo/10.png' class='img_clima' alt='Cielos cubiertos con lluvia moderada' title='Cielos cubiertos con lluvia moderada'/><BR>";}
				if ($Simbolo == "11") {echo " <img src='./clima/simbolo/11.png' class='img_clima' alt='Intervalos nubosos con chubascos tormentosos' title='Intervalos nubosos con chubascos tormentosos'/><BR>";}	
				if ($Simbolo == "12") {echo " <img src='./clima/simbolo/12.png' class='img_clima' alt='Cielos nubosos con chubascos tormentosos' title='Cielos nubosos con chubascos tormentosos'/><BR>";}
				if ($Simbolo == "13") {echo " <img src='./clima/simbolo/13.png' class='img_clima' alt='Cielos cubiertos con chubascos tormentosos' title='Cielos cubiertos con chubascos tormentosos'/><BR>";}
				if ($Simbolo == "14") {echo " <img src='./clima/simbolo/14.png' class='img_clima' alt='Intervalos nubosos con chubascos tormentosos y granizo' title='Intervalos nubosos con chubascos tormentosos y granizo'/><BR>";}
				if ($Simbolo == "15") {echo " <img src='./clima/simbolo/15.png' class='img_clima' alt='Cielos nubosos con chubascos tormentosos y granizo' title='Cielos nubosos con chubascos tormentosos y granizo'/><BR>";}
				if ($Simbolo == "16"){echo " <img src='./clima/simbolo/16.png' class='img_clima' alt='Cielos cubiertos con chubascos tormentosos y granizo' title='Cielos cubiertos con chubascos tormentosos y granizo'/><BR>";}
				if ($Simbolo == "17") {echo " <img src='./clima/simbolo/17.png' class='img_clima' alt='Intervalos nubosos con nevadas' title='Intervalos nubosos con nevadas'/><BR>";}
				if ($Simbolo == "18"){echo " <img src='./clima/simbolo/18.png' class='img_clima' alt='Cielos nubosos con nevadas' title='Cielos nubosos con nevadas'/><BR>";}
				if ($Simbolo == "19"){echo " <img src='./clima/simbolo/19.png' class='img_clima' alt='Cielos cubiertos con nevadas' title='Cielos cubiertos con nevadas'/><BR>";}
?>
</a>
</td>
</table>