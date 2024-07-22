<div class="container mt-0 mb-0">
  <div class="card-header text-justify">
     <div class="row d-flex justify-content-center">
          <div class="card col-lg-3" style="width: 50%;">
   <h1>Iniciar Sesión</h1>

  <?php if(session()->getFlashdata('msg')): ?>
          <div class="alert alert-warning">
            <?= session()->getFlashdata('msg')?>
          </div>
  <?php endif ?>
  
 <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
    <input type="submit" class="btn btn-success" value="Ingresar">
    <a href="<?php echo base_url('login'); ?>"  class="btn btn-danger">Cancelar</a>
    <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registrar'); ?>">
    Registrarse aquí </a></span>
  </form>
</div>
</div>
</div>
</div>