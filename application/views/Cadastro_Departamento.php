
<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastre novos departamentos</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar departamento</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <!-- start form for validation -->
              <form id="demo-form" data-parsley-validate>

                <div class="form-group">
                    <label for="id_secao">ID Seção: </label>
                    <input type="text" name="id_secao" placeholder="ID secao" class="form-control">
                </div>
                <div class="clearfix"></div>
                <label for="fullname">Nome * :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required /><br />                

                <div class="clearfix"></div>

              <span class="btn btn-primary">Cadastrar</span>
              <a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

          </form>
          <!-- end form for validations -->

      </div>
  </div>
</div>
</div>
</div>
<!-- /page content -->