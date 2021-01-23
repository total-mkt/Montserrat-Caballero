<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
								
								
								<li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Inventario Total</a>
                                    <ul aria-expanded="false" class="collapse">
<?php 
$query_ = "SELECT * FROM usuarios_clientes_ver WHERE track_usuario = '$Bee_in' ORDER BY nombre_cliente DESC";
$resultado_ = mysql_query($query_);
while($row = mysql_fetch_array($resultado_))
{
?>
                                <li><a href="inventario.php?cliente=<?php echo $row['nombre_cliente'];?>"><?php echo $row['nombre_cliente'];?></a></li>
<?php 
}
?>
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