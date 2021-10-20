<?php

include_once '../../../../db.php';
include_once '../../../../Datos/admin/includes/header.php';

?>


<body class="animsition">
	<div class="page-wrapper">
	
	<?php

		include_once '../../../../Datos/admin/includes/navMobile.php';
		include_once '../../../../Datos/admin/includes/nav.php';

		?>

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
								<button class="au-btn--submit" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
							<div class="header-button">
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="../../assetAdmin/images/icon/avatar-01.jpg" alt="John Doe" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#">john doe</a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="images/icon/avatar-01.jpg" alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#">john doe</a>
													</h5>
													<span class="email">johndoe@example.com</span>
												</div>
											</div>
											<div class="account-dropdown__body">
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-account"></i>Account</a>
												</div>
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-settings"></i>Setting</a>
												</div>
												<div class="account-dropdown__item">
													<a href="#">
														<i class="zmdi zmdi-money-box"></i>Billing</a>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="#">
													<i class="zmdi zmdi-power"></i>Logout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Codigo Postal</th>
                                                <th>Actividad IAE</th>
                                                <th>Actividad CNAE</th>
                                                <th>Forma Juridica</th>
                                                <th>N. Sucursales</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
 											<?php

                                                    $query = "SELECT * FROM datos_basicos";
                                                    $result_postals = mysqli_query($conn, $query);
                                            
                                                while($row = mysqli_fetch_array($result_postals)) { ?>
                                                <tr>
                                                        <td><?php echo $row['codigo'] ?></td>
                                                        <td><?php echo $row['nombre'] ?></td>
                                                        <td><?php echo $row['codigo_postal'] ?></td>
                                                        <td><?php echo $row['actividad_IAE'] ?></td>
                                                        <td><?php echo $row['actividad_CNAE'] ?></td>
                                                        <td><?php echo $row['forma_juridica'] ?></td>
                                                        <td><?php echo $row['num_sucursales'] ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>


<?php

include_once '../../../../Datos/admin/includes/footer.php';

?>