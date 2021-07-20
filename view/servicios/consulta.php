<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="ti-truck"></i>
        </div>
        <div class="header-title">
            <h1>Consulta de Servicios</h1>
            <small>Detalles de los servicios creados</small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-bd">
                  <div class="panel-heading">
                      <div class="panel-title">
                          <h4>Detalles de Servicios </h4>
                      </div>
                  </div>
                  <div class="panel-body">
                      <p>Consulta</p>
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>Origen </th>
                                      <th>Destino </th>
                                      <th>Guia </th>
                                      <th>Opciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach($modelGuia->ListarGuias() as $r): ?>
                                    <tr>
                                        <td><?php echo $r->origen; ?></td>
                                        <td><?php echo $r->destino; ?></td>
                                        <td><?php echo $r->guiafull; ?></td>
                                        <td>
                                            <?php echo "<button onclick='agregar(this.id)' id='".$r->guiafull."' class='btn btn-info btn-sm' data-toggle='tooltip' data-placement='left' title='Llenar Datos Carta'><i class='fa fa-plus' aria-hidden='true'></i></button>"; ?>
                                            <?php echo "<button onclick='imprimirGuia(this.id)' id='".$r->guiafull."' class='btn btn-warning btn-sm' data-toggle='tooltip' data-placement='left' title='Imprimir Carta'><i class='fa ti-printer' aria-hidden='true'></i></button>"; ?>

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
  //alert(id);
  window.location ="index.php?c=Servicio&a=cartaoperaciones&guia="+id;
}
function imprimirGuia(id)
{
  //index.php?c=Servicio&a=imprimircarta&id=DIF-GUA/B/TEFG016-17
  window.open("index.php?c=Servicio&a=imprimircarta&id="+id,'_blank');
}
</script>
