<!-- Inicio Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1><img src="<?php echo base_url();?>assets/img/iconos/icons8-resume-website-50.png"> Mi perfil
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="">Configuración</a></li>
                        <li class="breadcrumb-item active">Mi perfil</li>
                    </ol>
                </div>
            </div>
        </div><!-- FIN/.container-fluid -->
    </section>

    <!-- Incio seccion contenido -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?php echo base_url()?>assets/img/AvatarDavid.jpeg"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">David Sánchez Cano</h3>

                            <p class="text-muted text-center">Administrador</p>

							

							



							<a href="#" class="btn 	btn-outline-info btn-block"><i style="color:#fff; border-radius:50%; font-size:25px; width: 40px; height: 40px; line-height: 40px;position: relative;"class="fa fa-camera bg-info"></i></a>
							
                            <a href="#" class="btn btn-outline-danger btn-block"><b>Eliminar</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills ">

                                <li class="nav-item "><a class="nav-link active " href="#settings"
                                        data-toggle="tab">Información general</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#contrasena" data-toggle="tab">Cambiar
                                        contraseña</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane " id="settings">
                                    <form class="form-horizontal">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
												<label>Tipo documento</label> 
                                                    <input name="tipodocumento" type="text" class="form-control "
                                                        placeholder=" " value="Cedula" readonly="Readonly">
                                                    <?php echo form_error('documento','<p class="text-danger">','</p>'); ?>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label>Documento</label> 
                                                    <input name="documento" type="text" class="form-control "
                                                        placeholder="Ingrese el documento "  value="10012456" readonly="Readonly">
                                                    <?php echo form_error('documento','<p class="text-danger">','</p>'); ?>




                                                </div>



                                            </div>


                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Nombre completo</label> 
                                                    <input name="nombre" type="text" class="form-control"
                                                        placeholder="Ingrese el nombre" value="David Sánchez Cano" readonly="Readonly">

                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Teléfono</label>
                                                    <input name="telefono" type="text" class="form-control"
                                                        placeholder="Ingrese el teléfono" value="3017473" readonly="Readonly">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Celular</label> 
                                                    <input name="celular" type="text" class="form-control"
                                                        placeholder="Ingrese el celular" value="3017474836" readonly="Readonly">
                                                    <?php echo form_error('celular','<p class="text-danger">','</p>');?>
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input name="direccion" type="text" class="form-control"
                                                        placeholder="Ingrese la dirección" value="Carrera 80" readonly="Readonly">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input name="correo" type="email" class="form-control"
                                                        placeholder="Ingrese el correo" value="DavidCano@gmail.com" readonly="Readonly">

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Nombre de usuario</label> <label style="color: red;">
                                                        *</label>
                                                    <input name="username" type="text" class="form-control "
                                                        placeholder="Ingrese el nombre de usuario" value="Admin">
                                                    <?php echo form_error('username','<p class="text-danger">','</p>');?>
                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Pregunta de seguridad</label><label style="color: red;">
                                                        *</label>
                                                    <select name="tipoDocumento" class="form-control">

                                                        <option hidden selected>¿En qué ciudad nació tu madre?
                                                        </option>
                                                        <option value="1">¿Cuál es tu comida favorita?</option>
                                                        <option value="2">¿Cómo se llamaba tu primera mascota?</option>
                                                        <option value="3">¿En qué ciudad nació tu madre?</option>
                                                        <option value="4">¿En qué ciudad nació tu madre?</option>
                                                        <option value="5">¿Con qué soñaba trabajar de pequeño?</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label>Respuesta</label> <label style="color: red;">
                                                        *</label>
                                                    <input name="username" type="text" class="form-control "
                                                        placeholder="Ingrese la respuesta a su pregunta de seguridad" value="Medellin">

                                                </div>

                                            </div>


                                        </div>


                                        <button type="submit" class="btn btn-success col-2">Actualizar</button>

                                    </form>



                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="contrasena">
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Contraseña actual</label> <label style="color: red;"> *</label>
                                                <input name="contrasenaactual" type="password" class="form-control"
                                                    placeholder="Ingrese su contraseña actual">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Nueva contraseña</label> <label style="color: red;"> *</label>
                                                <input name="nuevacontrasena" type="password" class="form-control"
                                                    placeholder="Ingrese su nueva contraseña">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Confirmar nueva contraseña</label> <label style="color: red;">
                                                    *</label>
                                                <input name="confirmcontrasena" type="password" class="form-control"
                                                    placeholder="Confirme su contraseña ">
                                            </div>

                                        </div>





                                    </div>
                                    <button type="submit" class="btn btn-success col-2">Actualizar</button>
                                </div>


                                <!-- /.tab-pane -->

                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->

                </div>
            </div>

    </section><!-- Fin seccion contenido -->
</div><!-- Fin content-wrapper -->
