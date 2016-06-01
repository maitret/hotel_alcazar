<?php 
include_once("funciones.php"); 
include_once("header.php");
?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-top: 0px #CCC solid;">
<tr>
<td bgcolor="#F1F5F8">
<br><br>

<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>


<img src="img/Habitaciones_Title_Text.jpg" border="0" width="1100">
<br>
<br>
<div class="habitaciones_title" align="center">CONTAMOS CON 4 TIPOS DE HABITACIONES</div>
<br>
<br>

<div class="row row_custom">
<div class="col-md-3 habitaciones_tipos_active">
<span class="habitaciones_tipos_title">SENCILLA MATRIMONIAL</span>
<br>
<span class="habitaciones_tipos_price">$694</span>
</div>
<div class="col-md-3 habitaciones_tipos">
<span class="habitaciones_tipos_title">SENCILLA KING</span>
<br>
<span class="habitaciones_tipos_price">$767</span>
</div>
<div class="col-md-3 habitaciones_tipos">
<span class="habitaciones_tipos_title">SUPERIOR KING</span>
<br>
<span class="habitaciones_tipos_price">$826</span>
</div>
<div class="col-md-3 habitaciones_tipos">
<span class="habitaciones_tipos_title">DOBLE MATRIMONIAL</span>
<br>
<span class="habitaciones_tipos_price">$895</span>
</div>
</div>

<br>
<br>

<div class="row">
<div class="col-md-4 parrafo_welcome_index" align="center" style="">
<div align="center" style="background-color:#D2AE6D;color:#FFF;font-family:'Mission Gothic Light Italic';font-size:1.5em;padding:15px;">
Todas nuestras habitaciones cuentan con los siguientes servicios:
</div>
<br>
<br>
<img src="img/Habitaciones_Servicios.png" border="0" width="250">

</div>
<div class="col-md-8" align="center">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
        <img src="<?php echo $url_thumbs; ?>?w=730&h=&q=80&f=&cc=&zc=1&src=img/Habitaciones_Slide1.jpg" width="730" />
        </div>
        <div class="item">
        <img src="<?php echo $url_thumbs; ?>?w=730&h=&q=80&f=&cc=&zc=1&src=img/Habitaciones_Slide2.jpg" width="730" />
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</div>
</div>

<br>
<br>
<br>

</td>
</tr>
</table> 

</td>
</tr>
</table> 

<?php 
include_once("footer.php");
?>