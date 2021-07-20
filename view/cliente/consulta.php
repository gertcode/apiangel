<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-user"></i>
        </div>
        <div class="header-title">
            <h1>Consulta de Clientes</h1>
            <small>Detalles de los clientes</small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-bd">
                  <div class="panel-heading">
                      <div class="panel-title">
                          <h4>Clientes </h4>
                      </div>
                  </div>
                  <div class="panel-body">
                      <p>Consulta</p>
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>Nombre </th>
                                      <th>RFC </th>
                                      <th>Dirección </th>
                                      <th>Ciudad </th>
                                      <th>País </th>
                                      <th>Contácto </th>
                                      <th>Teléfono </th>
                                      <th>Fax </th>
                                      <th>Email </th>
                                      <th>Tax </th>
                                      <th>Opciones </th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach($modelCliente->ListarClientes() as $r): ?>
                                    <tr>
                                        <td><?php echo $r->remitente; ?></td>
                                        <td><?php echo $r->rfc; ?></td>
                                        <td><?php echo $r->direccion; ?></td>
                                        <td><?php echo $r->ciudad; ?></td>
                                        <td><?php echo $r->pais; ?></td>
                                        <td><?php echo $r->contacto; ?></td>
                                        <td><?php echo $r->telefono; ?></td>
                                        <td><?php echo $r->fax; ?></td>
                                        <td><?php echo $r->email; ?></td>
                                        <td><?php echo $r->tax; ?></td>
                                        <td>
                                            <?php echo "<button onclick='eliminarCliente(this.id)' id='".$r->id_cliente."' class='btn btn-danger btn-sm' data-toggle='tooltip' data-placement='left' title='Eliminar Cliente'><i class='ti-trash' aria-hidden='true'></i></button>"; ?>
                                            <!--<button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Eliminar "><i class="fa fa-print" aria-hidden="true"></i></button>-->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                              </tbody>
                          </table>
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

<script>
function agregar(id)
{
  alert(id);
  //window.location ="index.php?c=Servicio&a=cartaoperaciones&guia="+id;
}

function eliminarCliente(id)
{
  //alert("Eliminar Cliente");
  swal({
      title: "Eliminar Cliente",
      text: "Realmente deseas eliminar el cliente seleccionado?",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Eliminar",
      cancelButtonText: "Cancelar",
      closeOnConfirm: false,
      closeOnCancel: true},
          function (isConfirm) {
              if (isConfirm) {
                $.get("index.php?c=Cliente&a=eliminarCliente",{id:id},function(data){
                  if(data=="ClienteEliminado")
                  {
                    //alert("Cliente eliminado");
                    swal({
                        title: "Cliente Eliminado",
                        text: "El cliente se eliminó con éxito del sistema",
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
                  //window.location.replace("index.php?c=Cliente&a=Consulta");
              }
          });
}
</script>
