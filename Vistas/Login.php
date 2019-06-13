
<!-- La imagen de fondo se cambia en el css que esta en css luego login.css -->
<div class="container ">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="m-t-30" style="margin-top: 100px;padding: 30px; background-color: #F9F9F9; border-radius: 12px;">
                        <form id="validarlogin" method="post" class="login_validator">

                          <div class="row">
                            <div class="col-md-4 text-center">
                              <div style="padding-top: 20px;"></div>
                              <img src="Vistas/img/loginicon.png" height="130">
                            </div>
                            <div class="col-md-8">
                              <div class="form-group">
                                <label for="email" class="col-form-label"> Usuario</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-user text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" name="usuariologin" id="usuariologin">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="contrasenalogin" class="col-form-label">Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" name="contrasenalogin">
                                </div>
                            </div>
                            
                            </div>
                            

                           </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Ingresar" class="btn btn-primary btn-block login_button" id="btnlogin">
                                    </div>
                                </div>
                            </div>
                            <?php 
                            $login = new ControladorUsuarios();
                            $login -> ctrIngresoUsuario();
                             ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
