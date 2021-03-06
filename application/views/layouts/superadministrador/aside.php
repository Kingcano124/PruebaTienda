  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4 ">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="<?php echo base_url();?>assets/img/logo5.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span  class="brand-text font-weight-light">IntraRuk Gestión</span>
      </a>




      <!-- Sidebar -->
      <div class="sidebar  ">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">

                  <img src="<?php echo base_url();?>assets/img/AvatarDavid.jpeg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
				  <a href="#" class="d-block text-center" >David Sánchez Cano</a>
				  <p class="text-muted text-center">Administrador</p>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>inicio/principalsuper" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-dog-house-50.png" class="nav-icon">
                          <p>

                              Inicio
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>usuario/listausuariosu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-management-30.png"
                              class="nav-icon">
                          <p>

                              Usuarios
                          </p>
                      </a>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-people-30.png" class="nav-icon">
                          <p>
                              Clientes
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>cliente/listaclientesu" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-list-50.png"
                                      class="nav-icon">
                                  <p>Lista de clientes</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>cliente/historialcliente" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-order-history-50.png"
                                      class="nav-icon">
                                  <p>Historial de clientes </p>
                              </a>
                          </li>

                      </ul>
                  </li>






                  <li class="nav-item">
                      <a href="<?php echo base_url();?>producto/listaproductosu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-price-tag-50.png" class="nav-icon">
                          <p>
                              Productos
                          </p>
                      </a>
                  </li>


                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-barbershop-50.png"
                              class="nav-icon">
                          <p>
                              Servicios
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>servicio/listaserviciosu" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-list-50.png"
                                      class="nav-icon">
                                  <p>Lista de servicios</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>servicio/listasvacunas" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-syringe-50.png"
                                      class="nav-icon">
                                  <p>Vacunación</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>servicio/crearmedicamento" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-pill-50.png"
                                      class="nav-icon">
                                  <p>Desparasitación</p>
                              </a>
                          </li>

                      </ul>
                  </li>




                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-bookmark-100.png" class="nav-icon">
                          <p>
                              Agenda
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>agenda/calendario" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-calendar-50.png"
                                      class="nav-icon">
                                  <p>Calendario</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>agenda/historialcitasu" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-schedule-50.png"
                                      class="nav-icon">
                                  <p>Programación</p>
                              </a>
						  </li>

                      </ul>
                  </li>




                  <li class="nav-item">
                      <a href="<?php echo base_url();?>compras/historialcomprasu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-delivery-30.png" class="nav-icon">
                          <p>
                              Compras
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>proveedor/listaproveedoresu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-supplier-30.png" class="nav-icon">
                          <p>
                              Proveedores
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>venta/historialventasu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-shop-30.png" class="nav-icon">
                          <p>
                              Ventas
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?php echo base_url();?>informe/generarinformesu" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-business-report-30.png"
                              class="nav-icon">
                          <p>
                              Informes
                          </p>
                      </a>
                  </li>

                  <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-job-30.png" class="nav-icon">
                          <p>
                              Configuración
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="<?php echo base_url();?>usuario/perfilusuariosu" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-resume-website-50.png"
                                      class="nav-icon">
                                  <p>Mi perfil</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo base_url();?>configuracion/home" class="nav-link">
                                  <img src="<?php echo base_url();?>assets/img/iconos/icons8-home-office-50.png"
                                      class="nav-icon">
                                  <p>Home</p>
                              </a>
                          </li>



                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="listado" class="nav-link">
                          <img src="<?php echo base_url();?>assets/img/iconos/icons8-decision-30.png" class="nav-icon">
                          <p>
                              Ayuda
                          </p>
                      </a>
                  </li>

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
