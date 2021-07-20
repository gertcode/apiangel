
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Carta</h1>
            <small>Detalle de la carta</small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-bd">
                  <div class="panel-heading">
                      <div class="panel-title">
                          <h4>Fólio: <?php echo " ".$numerocarta; ?></h4>
                      </div>
                  </div>
                  <div class="panel-body">
                    <div class="modal-text-header">
                        <h1><?php echo $textoMensaje; ?><span>Haz clic sobre el boton 'Imprimir Carta' para ver la carta en PDF</span> </h1>
                    </div>
                    <div class="text-center">
                        <button onclick="imprimirCartaOp()" type="button" class="btn btn-success">Imprimir Carta</button>
                        <button onclick="menu()" type="button" class="btn btn-success">Menú Servicios</button>
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
  function imprimirCartaOp()
  {
    //alert("OK");
    window.open("index.php?c=Servicio&a=imprimircarta&id=<?php echo $numerocarta ?>",'_blank');
  }

  function menu()
  {
    //alert("OK");
    window.location = "index.php?c=Servicio&a=Consulta";

  }

</script>
