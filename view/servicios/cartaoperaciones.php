<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Carta de Operaciones</h1>
            <small>Asignación de Carta de Operaciones</small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-bd">
                  <div class="panel-heading">
                      <div class="panel-title">
                          <h4>Carta con número de Guía: <?php echo $_REQUEST['guia'];  ?></h4>
                      </div>
                  </div>
                  <div class="panel-body">
                    <form action="?c=Servicio&a=guardarcarta" id="formGuardarCarta" method="post">
                    <div class="row">
                        <div class="col-xs-24 col-sm-24 col-md-12 m-b-40">
                            <div class="col-xs-3 p-0"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left">
                                    <li class="active"><a href="#tab6" data-toggle="tab">Datos de Contactos</a></li>
                                    <li><a href="#tab7" data-toggle="tab">Información del Producto</a></li>
                                    <li><a href="#tab8" data-toggle="tab">Datos Servicio</a></li>
                                    <li><a href="#tab9" data-toggle="tab">Adicionales</a></li>
                                    <li><a href="#tab10" data-toggle="tab">Documentos</a></li>
                                    <li><a href="#tab11" data-toggle="tab">Extras</a></li>
                                    <li><a href="#tab12" data-toggle="tab">Guardar Carta de Operaciones</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-9 p-0">
                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in  active" id="tab6">
                                        <div class="panel-body">
                                            <legend>Datos del Remitente</legend>
                                              <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Remitente</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->remitente; ?>" id="remitente" name="remitente" >
                                                      <input type="hidden" value="<?php echo $_REQUEST['guia'] ?>" id="guiadato" name="guiadato" >
                                                      <input type="hidden" value="<?php echo $clienteGuia->id_cliente; ?>" id="idCliente" name="idCliente" >
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">RFC</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->rfc; ?>" id="rfcremitente" name="rfcremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Dirección</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->direccion; ?>" id="direccionremitente" name="direccionremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Ciudad</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->ciudad; ?>" id="ciudadremitente" name="ciudadremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Pais</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->pais; ?>" id="paisremitente" name="paisremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Contacto</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->contacto; ?>" id="contactoremitente" name="contactoremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Teléfono</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->telefono; ?>" id="telefonoremitente" name="telefonoremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Fax</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->fax; ?>" id="faxremitente" name="faxremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->email; ?>" id="emailremitente" name="emailremitente">
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="example-text-input" class="col-sm-3 col-form-label">TAX ID</label>
                                                  <div class="col-sm-9">
                                                      <input disabled class="form-control" type="text" value="<?php echo $clienteGuia->tax; ?>" id="taxremitente" name="taxremitente">
                                                  </div>
                                              </div>


                                              <legend>Datos del Comprador o Agente Aduanal</legend>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Comprador</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="comprador" name="comprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">RFC</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="rfccomprador" name="rfccomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Dirección</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="direccioncomprador" name="direccioncomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Ciudad</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="ciudadcomprador" name="ciudadcomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Pais</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="paiscomprador" name="paiscomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Contacto</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="contactocomprador" name="contactocomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Teléfono</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="telefonocomprador" name="telefonocomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Fax</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="faxcomprador" name="faxcomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="emailcomprador" name="emailcomprador">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-3 col-form-label">TAX ID</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" value="" id="taxcomprador" name="taxcomprador">
                                                    </div>
                                                </div>

                                                <legend>Datos del Consignatario</legend>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Consignatario</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="consignatario" name="consignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">RFC</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="rfcconsignatario" name="rfcconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Dirección</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="direccionconsignatario" name="direccionconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Ciudad</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="ciudadconsignatario" name="ciudadconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Pais</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="paisconsignatario" name="paisconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Contacto</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="contactoconsignatario" name="contactoconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Teléfono</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="telefonoconsignatario" name="telefonoconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Fax</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="faxconsignatario" name="faxconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="emailconsignatario" name="emailconsignatario">
                                                      </div>
                                                  </div>
                                                  <div class="form-group row">
                                                      <label for="example-text-input" class="col-sm-3 col-form-label">TAX ID</label>
                                                      <div class="col-sm-9">
                                                          <input class="form-control" type="text" value="" id="taxconsignatario" name="taxconsignatario">
                                                      </div>
                                                  </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab7">
                                        <div class="panel-body">
                                          <div class="table-responsive">
                                              <table class="table table-bordered table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th># Bultos </th>
                                                          <th>Descripción </th>
                                                          <th>Peso Neto </th>
                                                          <th>Peso Bruto</th>
                                                          <th>Volumen</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                        <td><input class="form-control" type="text" value="" id="bultos1" name="bultos1" ></td>
                                                        <td><input class="form-control" type="text" value="" id="descripcion1" name="descripcion1"></td>
                                                        <td><input class="form-control" type="text" value="" id="peson1" name="peson1"></td>
                                                        <td><input class="form-control" type="text" value="" id="pesob1" name="pesob1"></td>
                                                        <td><input class="form-control" type="text" value="" id="volumen1" name="volumen1"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control" type="text" value="" id="bultos2" name="bultos2" ></td>
                                                        <td><input class="form-control" type="text" value="" id="descripcion2" name="descripcion2"></td>
                                                        <td><input class="form-control" type="text" value="" id="peson2" name="peson2"></td>
                                                        <td><input class="form-control" type="text" value="" id="pesob2" name="pesob2"></td>
                                                        <td><input class="form-control" type="text" value="" id="volumen2" name="volumen2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control" type="text" value="" id="bultos3" name="bultos3" ></td>
                                                        <td><input class="form-control" type="text" value="" id="descripcion3" name="descripcion3"></td>
                                                        <td><input class="form-control" type="text" value="" id="peson3" name="peson3"></td>
                                                        <td><input class="form-control" type="text" value="" id="pesob3" name="pesob3"></td>
                                                        <td><input class="form-control" type="text" value="" id="volumen3" name="volumen3"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control" type="text" value="" id="bultos4" name="bultos4" ></td>
                                                        <td><input class="form-control" type="text" value="" id="descripcion4" name="descripcion4"></td>
                                                        <td><input class="form-control" type="text" value="" id="peson4" name="peson4"></td>
                                                        <td><input class="form-control" type="text" value="" id="pesob4" name="pesob4"></td>
                                                        <td><input class="form-control" type="text" value="" id="volumen4" name="volumen4"></td>
                                                    </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab8">
                                        <div class="panel-body">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Tipo de Unidad</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="<?php echo $this->convertirUnidad($GuiaUnica->tipounidad); ?>" disabled id="tipounidad">
                                              </div>
                                          </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Medio de Transporte</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="<?php echo $this->convertirMedio($GuiaUnica->tipomediotransporte); ?>" disabled id="mediotransporte">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Tipo de Servicio</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="<?php echo $this->tipoServicio($GuiaUnica->tiposervicio); ?>" disabled id="tiposervicio">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Modalidad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="<?php echo $GuiaUnica->tipomodalidadtexto; ?>" disabled id="modalidad">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Tipo de Carga</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="<?php echo $this->tipoCarga($GuiaUnica->tipocarga); ?>" disabled id="tipocargat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab9">
                                        <div class="panel-body">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Lugar de descarga</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="lugardescarga" name="lugardescarga">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Término de venta(INCOTERM)</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="terminoventa" name="terminoventa">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Regimen de exportación (Def, temp, otro)</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="regimenexportacion" name="regimenexportacion">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Despacho Aduanal</label>
                                              <div class="col-sm-9">
                                                  <select id="despachoaduanal" name="despachoaduanal">
                                                      <option value="NO">NO</option>
                                                      <option value="SI">SI</option>
                                                  </select>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab10">
                                        <div class="panel-body">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Documentación</label>
                                              <div class="col-sm-9">
                                                <input tabindex="13" onchange="noaplica()" type="checkbox" id="checknoaplica" name="checknoaplica">
                                                <label for="flat-checkbox-1">No Aplica</label>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Factura comercial</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="facturacomercial" name="facturacomercial">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Lista de empaque</label>
                                              <div class="col-sm-9">
                                                <input tabindex="13" type="checkbox" id="listaempaqueoriginal" name="listaempaqueoriginal">
                                                <label for="flat-checkbox-1">Original</label>
                                                <input tabindex="13" type="checkbox" id="listaempaquecopia" name="listaempaquecopia">
                                                <label for="flat-checkbox-1">Copia</label>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Certificado original</label>
                                              <div class="col-sm-9">
                                                <input tabindex="13" type="checkbox" id="certificadooriginal" name="certificadooriginal">
                                                <label for="flat-checkbox-1">Original</label>
                                                <input tabindex="13" type="checkbox" id="certificadocopia" name="certificadocopia">
                                                <label for="flat-checkbox-1">Copia</label>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Otro (Especifique)</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="otrodocumento" name="otrodocumento">
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab11">
                                        <div class="panel-body">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-3 col-form-label">Observaciones</label>
                                              <div class="col-sm-9">
                                                  <input class="form-control" type="text" value="" id="observaciones" name="observaciones">
                                              </div>
                                          </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Comentarios adicionales</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="" id="comentariosadicionales" name="comentariosadicionales">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Instrucciones especiales</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="" id="instruccionesespeciales" name="instruccionesespeciales">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab12">
                                        <div class="panel-body" align="center">
                                          <div class="form-group row">
                                              <label for="example-text-input" class="col-sm-6 col-form-label">Guardar Carta de Instrucciones</label>
                                              <div class="col-sm-6">
                                                <button onclick="guardar(this.id)" id="<?php echo $_REQUEST['guia'] ?>" type="button" class="btn btn-labeled btn-success m-b-5">
                                                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Guardar
                                                </button>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                  </form>




                  </div>
              </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
    <strong>Sistema de Gestión de Servicios para: <a href="http://www.vimexi.com/">Vimexi SA de CV</a>.</strong>
</footer>
</div> <!-- ./wrapper -->

<script>

function guardar(id)
{
  //alert("Guardar");
  //window.location.replace("index.php?c=Cliente&a=Consulta");
  //alert(id);
  $.get("index.php?c=Servicio&a=verificarGuiaExistencia",{id:id},function(data){
    //alert(data);
    if(data=="existe")
    {
      //alert("Lo Lamento, la carta ya existe");
      $("#formGuardarCarta").submit();
    }
    else if (data=="noexiste") {
        $("#formGuardarCarta").submit();
    }
  });
}

function noaplica()
{

  if($("#listaempaqueoriginal").is(':disabled'))
  {
    //alert("deshabilitado");


    $("#listaempaqueoriginal").prop("disabled",false);
    $("#listaempaquecopia").prop("disabled",false);
    $("#certificadooriginal").prop("disabled",false);
    $("#certificadocopia").prop("disabled",false);

    document.getElementById("facturacomercial").value="";
    document.getElementById("otrodocumento").value="";

  }
  else {
    document.getElementById("facturacomercial").value="No Aplica";
    document.getElementById("otrodocumento").value="No Aplica";

    $("#listaempaqueoriginal").prop("disabled",true);
    $("#listaempaquecopia").prop("disabled",true);
    $("#certificadooriginal").prop("disabled",true);
    $("#certificadocopia").prop("disabled",true);

  }
}

</script>
