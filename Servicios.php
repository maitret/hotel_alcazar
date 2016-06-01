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
 
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
        <img src="<?php echo $url_thumbs; ?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Restaurant_1.jpg" width="1100" height="500" />
        </div>
        <div class="item">
        <img src="<?php echo $url_thumbs; ?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Restaurant_2.jpg" width="1100" height="500" />
        </div>
        <div class="item">
        <img src="<?php echo $url_thumbs; ?>?w=1100&h=500&q=80&f=&cc=&zc=1&src=img/Restaurant_3.jpg" width="1100" height="500" />
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
    </td>
  </tr>
</table>
<br>
<br>

<div class="row row_custom">
<div class="col-md-8 parrafo_welcome_index" align="justify" style="padding-left: 0px;">
<p>En el restaurant galer&iacute;a del hotel alc&aacute;zar contamos con un excelente men&uacute; nacional e internacional, sin embargo, el &eacute;xito que nos ha etiquetado es un hibrido culinario entre la cocina &ldquo;huasteca&rdquo; y la milenaria cocina &ldquo;totonaca&rdquo;.</p>
<p>De igual manera, le invitamos a deleitarse con nuestro &uacute;nico e inigualable pan dulce, elaborado con nuestra distintiva receta familiar.</p>
</div>
<div class="col-md-4" align="center" style="background-color:#D2AE6D;color:#FFF;font-family:'Mission Gothic Light Italic';font-size:2.8em;padding-top:15px;padding-bottom:15px;">Restaurante Galer&iacute;a</div>
</div>
<br>
<div style="background-color:#E6E7E8; height:5px;"></div>

<br>
<br>

<div class="row">
<div class="col-md-4" align="center"><img src="./img/Servicios_Sala_de_Juntas.jpg" border="0" class="img-responsive"></div>
<div class="col-md-4" align="center"><img src="./img/Servicios_Gran_Servicio.jpg" border="0" class="img-responsive"></div>
<div class="col-md-4" align="center"><img src="./img/Servicios_Valet_Parking.jpg" border="0" class="img-responsive"></div>
</div>

<br>

<div class="row">
<div class="col-md-4 parrafo_welcome_index" align="justify">
Para tus juntas de negocios, cursos o cualquier necesidad, tenemos una sala de juntas ubicada a pocas cuadras de Hotel Alc&aacute;zar, con todos los servicios a tu alcance.
</div> 
<div class="col-md-4 parrafo_welcome_index" align="justify">
Para tus juntas de negocios, cursos o cualquier necesidad, tenemos una sala de juntas ubicada a pocas cuadras de Hotel Alc&aacute;zar, con todos los servicios a tu alcance.
</div> 
<div class="col-md-4 parrafo_welcome_index" align="justify">
Nuestro servicio de Valet Parkig se encarga de llevar tu coche a nuestro amplio estacionamiento ubicado a unas cuadras de Hotel Alc&aacute;zar.
</div> 

</div>

<br>
<br>

</td>
  </tr>
</table> 

<?php 
include_once("footer.php");
?>