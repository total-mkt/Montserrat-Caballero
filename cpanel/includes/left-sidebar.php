<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
							<?php if($foto == ''){?>
									<img src="../assets/images/users/1.jpg" class="img-circle" />
									<?php } else {?>
									<img src="<?php echo $foto?>" class="img-circle" />
									<?php } ?>
						</div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $nombre;?> <?php echo $paterno;?> <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="./perfil.php" class="dropdown-item"><i class="ti-user"></i> <?php echo _PERFIL;?></a>
                                <!-- text
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>-->
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> <?php echo _INBOX;?></a>
                                <!-- text-->
                               
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="<?php echo $logoutAction ?>" class="dropdown-item"><i class="fas fa-power-off"></i> <?php echo _LOGOUT;?></a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">--- MENU</li>
                        <li> <a class="waves-effect waves-dark" href="./" aria-expanded="false"><i class="icon-speedometer"></i>Dashboard</a>
                        </li>
						<!--
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="calendario.php">Calendario</a></li>
                                <li><a href="contactos.php">Contactos</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
							<ul aria-expanded="false" class="collapse">
                                <li><a href="correo.php">Correo</a></li>

                            </ul>
                        </li>
						-->
                        
                        <li class="nav-small-cap">--- Panel</li>
						


						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Blog</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="./catalogo-blog.php">Ver Blog</a></li>
                                <li><a href="./alta-blog.php">Alta Blog</a></li>
                            </ul>
                        </li>
						
						
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Logros</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="./catalogo-logros.php">Ver Logros</a></li>
                                <li><a href="./alta-logro.php">Alta Logro</a></li>
                            </ul>
                        </li>

						
					
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-ticket"></i><span class="hide-menu">Testimonios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./catalogo-testimonio.php">Ver Testimonios</a></li>
                                <li><a href="./alta-testimonio.php">Alta Testimonio</a></li>
                            </ul>
                        </li>
					
						

						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-ticket"></i><span class="hide-menu">Videos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./catalogo-video.php">Ver Videos</a></li>
                                <li><a href="./alta-video.php">Alta Video</a></li>
                            </ul>
                        </li>
						

						
						<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-agenda"></i><span class="hide-menu">Publicaciones</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./catalogo-publicacion.php">Ver Publicaciones</a></li>
                                <li><a href="./alta-publicacion.php">Alta Publicación</a></li>
                            </ul>
                        </li>
                   
                        <li class="nav-small-cap">--- <?php echo _CUENTA;?></li>
						

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo $logoutAction ?>" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu"><?php echo _SALIR;?></span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>