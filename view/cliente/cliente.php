
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="header-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="header-title">
                        <h1>Nuevo Cliente</h1>
                        <small>Espacio para crear y asociar un nuevo cliente.</small>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Asistente para dar de alta clientes.</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                                            <form method="post" class="f1">
                                                <h3 class="m-t-0">Datos del Clientes</h3>

                                                <div class="f1-steps">
                                                    <div class="f1-progress">
                                                        <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 10%;"></div>
                                                    </div>
                                                    <div class="f1-step active">
                                                        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                                        <p>Datos</p>
                                                    </div>
                                                    <div class="f1-step">
                                                        <div class="f1-step-icon"><i class="ti-user"></i></div>
                                                        <p>Contacto</p>
                                                    </div>
                                                </div>
                                                <fieldset>
                                                  <h4 class="m-t-0">Empresa:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value="" id="remitente" name="remitente">
                                                  </div>
                                                  <h4 class="m-t-0">RFC:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="rfccliente" name="rfccliente">
                                                  </div>
                                                  <h4 class="m-t-0">Dirección:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="direccioncliente" name="direccioncliente">
                                                  </div>
                                                  <h4 class="m-t-0">Ciudad:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="ciudadcliente" name="ciudadcliente">
                                                  </div>
                                                  <h4 class="m-t-0">Pais:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="paiscliente" name="paiscliente">
                                                  </div>
                                                  <h4 class="m-t-0">Tax:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="taxcliente" name="taxcliente">
                                                  </div>
                                                  <div class="f1-buttons">
                                                      <button type="button" class="btn btn-success btn-next">Siguiente</button>
                                                  </div>
                                                </fieldset>
                                                <fieldset>
                                                  <h4 class="m-t-0">Contacto:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="contactocliente" name="contactocliente">
                                                  </div>
                                                  <h4 class="m-t-0">Teléfono:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="telefonocliente" name="telefonocliente">
                                                  </div>
                                                  <h4 class="m-t-0">Fax:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="faxcliente" name="faxcliente">
                                                  </div>
                                                  <h4 class="m-t-0">Email:</h4>
                                                  <div class="form-group">
                                                      <input  class="form-control" type="text" value=" " id="emailcliente" name="emailcliente">
                                                  </div>
                                                    <div class="f1-buttons">
                                                        <button type="button" class="btn btn-previous">Anterior</button>
                                                        <button type="button" class="btn btn-success btn-submit" onclick="guardarCliente()">Guardar Cliente</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
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

        <script type="text/javascript">
        function guardarCliente()
        {
          //alert("Cliente Guardar");
          var remitente = $("#remitente").val();
          var rfccliente = $("#rfccliente").val();
          var direccioncliente = $("#direccioncliente").val();
          var ciudadcliente = $("#ciudadcliente").val();
          var paiscliente = $("#paiscliente").val();
          var taxcliente = $("#taxcliente").val();
          var contactocliente = $("#contactocliente").val();
          var telefonocliente = $("#telefonocliente").val();
          var faxcliente = $("#faxcliente").val();
          var emailcliente = $("#emailcliente").val();

          //alert(remitente+" "+rfccliente+" "+direccioncliente+" "+ciudadcliente+" "+paiscliente+" "+taxcliente+" "+contactocliente+" "+telefonocliente+" "+faxcliente+" "+emailcliente);

          swal({
              title: "Todos los datos son correctos?",
              text: "",
              type: "warning",
              showCancelButton: true,
              confirmButtonText: "OK",
              cancelButtonText: "Editar",
              closeOnConfirm: false,
              closeOnCancel: true},
                  function (isConfirm) {
                      if (isConfirm) {

                          $.get("index.php?c=Cliente&a=insertarCliente",{remitente:remitente,rfccliente:rfccliente,direccioncliente:direccioncliente,ciudadcliente:ciudadcliente,paiscliente:paiscliente,taxcliente:taxcliente,contactocliente:contactocliente,telefonocliente:telefonocliente,faxcliente:faxcliente,emailcliente:emailcliente},function(data){
                              if(data=="OkCliente")
                              {
                                swal({
                                    title: "Cliente Agregado!",
                                    text: "Se agregó un nuevo cliente al sistema!",
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonText: "OK",
                                    cancelButtonText: "Editar",
                                    closeOnConfirm: false,
                                    closeOnCancel: true},
                                        function (isConfirm) {
                                            if (isConfirm) {
                                                window.location.replace("index.php?c=Cliente&a=Consulta");
                                            }
                                        });
                              }
                          });
                          //alert("Cliente guardado");
                      }
                  });


        }

        </script>
