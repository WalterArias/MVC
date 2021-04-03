<?php require RUTA_APP . '/views/inc/header.php';?>
<div class="row">
    <div class="col-sm-12">

        <div class="card">

            <div class="card-body">
                <div class="card-title"><b>Usuario</b></div>
                <!--    CUERPO -->
                <form action="">
                    <div class="class row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Nombre"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Apellido"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Email"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Telefono"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Login"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""></label>
                                <input type="text" name="" id="" class="form-control" placeholder="Password"
                                    aria-describedby="helpId">

                            </div>

                        </div>
                    </div>







            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-secondary" i><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
                <button type="button" class="btn btn-secondary"><i class="bi bi-x"></i> Cancelar</button>
                <button type="button" id="guardar" class="btn btn-primary"><i class="bi bi-save-fill"></i>
                    Guardar</button>

            </div>
            </form>

        </div>
    </div>













    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="<?php echo RUTA_URL; ?>public/js/menu.js"></script>
    <script src="<?php echo RUTA_URL; ?>public/js/modulos/pedido.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js">
    </script>
    <?php require RUTA_APP . '/views/inc/footer.php'; ?>