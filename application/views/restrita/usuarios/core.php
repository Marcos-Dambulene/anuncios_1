
    <div class="main-wrapper main-wrapper-1">

        <?php $this->load->view('restrita/layout/navbar') ?>

        <?php $this->load->view('restrita/layout/sidebar') ?>




      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $titulo; ?></h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group col-md-3">
                    <div class="form-group">
                      <label>Nome</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-user text-info"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" name="first_name" value="<?php echo (isset($usuario) ? $usuario->first_name : set_value('first_name')) ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Password Strength</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="<?php echo base_url('restrita/' .$this->router->fetch_class());?>" class="btn btn-dark">Voltar</a>
                  </div>
                </div>

              </div>

            </div>

        </section>

          <?php $this->load->view('restrita/layout/sidebar_configuracoes') ?>
      
      </div>
