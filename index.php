<?php 
include_once("funciones.php");
include_once("header.php");
?>
<p>&nbsp;</p><table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">  <tr>    <td>    
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">      
<ol class="carousel-indicators">        
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>        
<li data-target="#carousel-example-generic" data-slide-to="1"></li>       
<li data-target="#carousel-example-generic" data-slide-to="2"></li>      
</ol>      
<div class="carousel-inner">        
<div class="item active">        
<img src="<?php echo $url_thumbs;
?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Slide_Index_1.png" width="1100" height="500" />        
</div>
<div class="item">        
<img src="<?php echo $url_thumbs;
?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Slide_Index_2.png" width="1100" height="500" />        
</div>
<div class="item">        
<img src="<?php echo $url_thumbs;
?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Slide_Index_3.png" width="1100" height="500" />        
</div>
</div>      
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">        
<span class="glyphicon glyphicon-chevron-left"></span>      
</a>      
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">        
<span class="glyphicon glyphicon-chevron-right"></span>      
</a>    
</div>    </td>  </tr></table><p>&nbsp;</p><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-top: 5px #CCC solid;">  <tr>    <td bgcolor="#F1F5F8">    <br><br>    <table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">      <tr>        <td width="668"> <div align="center">    <span class="title_parrafo_index">BIENVENIDO A HOTEL ALC&Aacute;ZAR</span></div><br>          <div style="background-color:#E6E7E8; height:5px;"></div>          
<br><div class="parrafo_welcome_index">
    
<p>El Hotel Alc&aacute;zar de Poza Rica, Veracruz, ofrece un excelente servicio e instalaciones ideales para el hombre de negocios y visitantes de la ciudad.</p><p>Nos encontramos ubicados en el primer cuadro de la ciudad, a escazas 3 cuadras de la Puerta 1 de PEMEX, por lo cual nos posicionamos entre las principales opciones de alojamiento entre los viajeros del ramo comercial y petrolero.</p><p>Nuestras habitaciones cuentan con instalaciones y acabados de primer nivel, tenemos tambi&eacute;n a su alcance servicios como el de internet gratuito wifi, sistema de cable, room service, valet parking, despertador 24 hrs, y muchas amenidades que har&aacute;n de su estad&iacute;a en Hotel Alc&aacute;zar algo inolvidable.</p><p>Tambi&eacute;n podr&aacute; disfrutar de nuestro Restaurante Galer&iacute;a, que cuenta con un excelente men&uacute; nacional e internacional que encanta a todos nuestros visitantes.</p></div>  <br>
<div style="background-color:#E6E7E8; height:5px;"></div><br><br>           </td>        <td width="38">&nbsp;</td>    <td width="394" align="right" valign="top"><p><img src="img/Imagen_Parrafo_Index.png" width="418" height="211"></p>          <p>&nbsp;</p>          <table width="100%" border="0" cellspacing="0" cellpadding="0">            <tr>              <td class="txt_clima" width="50%">El clima en la ciudad</td>              <td width="50%"><script>$(document).ready(function() {$( "#Widget_Clima" ).load( "clima/get_info_clima.php");});</script><div id="Widget_Clima"></div>                  </td>            </tr>          </table>          <p>&nbsp;</p></td>      </tr>      <tr>        <td>&nbsp;</td>        

<td>&nbsp;</td>        <td>&nbsp;</td>      </tr>    </table></td>  </tr></table> 

<?php 
include_once("footer.php");
?>