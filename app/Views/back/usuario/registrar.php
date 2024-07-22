<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-6">
                <h4>Registrarse</h4>

                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?= csrf_field(); ?>
                    <?= csrf_field(); ?>
                    <?php if (!empty (session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    
                    <?php if (!empty (session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        <?php if ($validation->getError('nombre')) { ?>
                            <div class="alert alert-danger mt-2"><?= $error = $validation->getError('nombre'); ?></div>
                        <?php }?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                        <?php if ($validation->getError('apellido')) { ?>
                            <div class="alert alert-danger mt-2"><?= $error = $validation->getError('apellido'); ?></div>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                        <?php if ($validation->getError('usuario')) { ?>
                            <div class="alert alert-danger mt-2"><?= $error = $validation->getError('usuario'); ?></div>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <?php if ($validation->getError('email')){ ?>
                            <div class="alert alert-danger mt-2"><?= $error = $validation->getError('email'); ?></div>
                        <?php } ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <?php if ($validation->getError('password')) { ?>
                            <div class="alert alert-danger mt-2"><?= $error = $validation->getError('password'); ?></div>
                        <?php } ?>
                    </div>

                    <input type="submit" value="Guardar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>