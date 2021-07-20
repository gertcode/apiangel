<h1 class="page-header">Usuario en Línea: <?php echo "".$_SESSION['user']; ?> </h1>





<form id="frm-alumno" action="?c=Dashboard&a=leerArchivo" method="post">
<table id="listCheck" class="table table-striped">
    <tbody>
        <tr>
            <td><input type="hidden" name="fechaInicio" value="<?php echo "".$fecha; ?>"><input type="hidden" name="tipoConfiguracionVal" value="<?php echo "".$tipoConfiguracion; ?>"><strong>Generación:</strong></td>
            <td>
                <select name="selectgeneracion">
                    <?php 
                     for ($i=1; $i <= 15; $i++) {
                     echo "<option value='G".$i."'>G".$i."</option>";
                     }
                    ?> 
                    <option value='No Aplica'>No Aplica</option>
                </select>
            </td>
            <td><strong>Módulo:</strong></td>
            <td>
                <select name="selectModulo">
                    <?php 
                     for ($i=0; $i <= 23; $i++) {
                     echo "<option value='M".$i."'>Módulo ".$i."</option>";
                     }
                    ?>
                </select>
            </td>
            <td><strong>Campus:</strong></td>
            <td>
                <select name="selectCampus">
                    <?php 
                     for ($i=1; $i <= 10; $i++) {
                     echo "<option value='C".$i."'>Campus ".$i."</option>";
                     }
                    ?>
                </select>
            </td>
            <td><strong>Tipo Configuración:</strong></td>
            <td>
                <?php echo "".$tipoConfiguracion; ?>
            </td>
        </tr>
    </tbody>
</table> 
<table id="listCheck" class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Configuración</th>
            <th></th>
            <th >Observaciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mi Avance</td><td><input id="avance" type="checkbox" name="avance" value="1" checked></td><td><input size="100" type="text" name="obsavance" value=""></td>
        </tr>
        <tr>
            <td>Bloque Evidencias</td><td><input id="evidencias" type="checkbox" name="evidencias" value="evidencias" checked></td><td><input size="100" type="text" name="obsevidencias" value=""></td>
        </tr>
        <tr>
            <td>Bloque Foros</td><td><input type="checkbox" id="foros" name="foros" value="foros" checked></td><td><input size="100" type="text" name="obsforos" value=""></td>
        </tr>
        <tr>
            <td>Presentación</td><td><input type="checkbox" id="presentacion" name="presentacion" value="presentacion" checked></td><td><input size="100" type="text" name="obspresentacion" value=""></td>
        </tr>
        <tr>
            <td>PIA</td><td><input type="checkbox" id="pia" name="pia" value="pia" checked></td><td><input size="100" type="text" name="obspia" value=""></td>
        </tr>
        <tr>
            <td>Configuración Portafolio</td><td><input type="checkbox" id="portafolio" name="portafolio" value="portafolio" checked></td><td><input size="100" type="text" name="obsportafolio" value=""></td>
        </tr>
        <tr>
            <td>Reflexión de mis Evidencias</td><td><input type="checkbox" id="reflexion" name="reflexion" value="reflexion" checked></td><td><input size="100" type="text" name="obsreflexion" value=""></td>
        </tr>
        <tr>
            <td>Finalización de Actividad</td><td><input type="checkbox" id="finalizacion" name="finalizacion" value="finalizacion" checked></td><td><input size="100" type="text" name="obsfinalizacion" value=""></td>
        </tr>
        <tr>
            <td>
            <div><input type="submit" id="btnSubmit" value="Generar PDF" class="btnSubmit" /></div>
            </td>
            <td><input type="submit" id="btnSubmit" value="Subir Nuevo Archivo" class="btnSubmit" /></td>
            <td></td>
        </tr>
    </tbody>
</table> 
</form>

<form id="frm-alumno" action="?c=Dashboard" method="post">
<table class="table table-striped">
    <tbody>
        <tr>
            <td>
                <input type="submit" id="btnSubmit" value="Subir Nuevo Archivo" class="btnSubmit" />
            </td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table> 
</form>

<h2 class="page-header">Detalles del Archivo:</h2>

<script type="text/javascript">

$(document).ready(function() { 

    //$('#listCheck').hide();//listCheck
}); 

</script>