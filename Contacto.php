<?php 
include_once("funciones.php"); 
include_once("header.php");
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-top: 0px #CCC solid;">
<tr>
<td bgcolor="#F1F5F8">
<br>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>

<br>
<div class="contacto_title" align="center">Llena este formulario y nos pondremos en contacto contigo.</div>
<br>
<br>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  style="">
<tr>
<td width="270" valign="top" style="padding:10px; font-family: 'Mission Gothic Bold'; <?php if($default_color_bar == ""){ echo "background-color: #D2AE6D"; } else { echo "background-color: ".$default_color_bar; } ?>;">

<form role="form" method="post" action="<?php echo $server_url; ?>/Contacto_Ok.php">
  <div class="form-group">
    <label for="Nombre"><span style="font-size:1.5em;color:#ffffff;"><?php if($lang['contacto_nombre']){ echo $lang['contacto_nombre']; } else { echo "NOMBRE"; } ?></span></label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="" required="required" title="Ingresa tu nombre">
  </div>
  <div class="form-group">
    <label for="Email"><span style="font-size:1.6em;color:#ffffff;">E-MAIL</span></label>
    <input type="email" class="form-control" name="Email" id="Email" placeholder="" required="required" title="Ingresa un email valido">
  </div>
  <div class="form-group">
    <label for="Email"><span style="font-size:1.6em;color:#ffffff;">ASUNTO</span></label>
    <input type="text" class="form-control" name="Asunto" id="Asunto" placeholder="" required="required" title="Ingrese un asunto">
  </div>
  <div class="form-group">
    <label for="Tema"><span style="font-size:1.6em;color:#ffffff;"><?php if($lang['contacto_tema']){ echo $lang['contacto_tema']; } else { echo "TEMA"; } ?></span></label>
	<textarea class="form-control" name="Mensaje" id="Mensaje" rows="3" required="required" title="Ingrese su mensaje"></textarea>
  </div>

  <br>
  <input type="hidden" name="Seccion" value="Contacto">
  <div style="font-size:1.3em;color:#ffffff;" align="center">(por el momento este formulario se encuentra en construcci&oacute;n)</div>
  <button type="submit" class="btn btn-default_ btn-lg btn-block disabled" disabled style="background-color:#BA9C68 !important;"><span style="font-size:1.6em;color:#ffffff;"><strong><?php if($lang['contacto_enviar']){ echo $lang['contacto_enviar']; } else { echo "ENVIAR"; } ?><strong></span></button>
</form>
</td>
</tr>
</table>

<br>
<br>
<br>
<div style="background-color:#E6E7E8; height:10px;"></div>
<br>
<div class="estamos_esperando" align="center">ESTAMOS ESPERANDO PARA SERVIRTE</div>
<br>

</td>
  </tr>
</table> 

<?php 
include_once("footer.php");
?>