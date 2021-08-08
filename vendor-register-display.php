<?php
require 'Config.php';
$obj=new Config();
//$obj->AdminWall();
// $obj->checkSuper();
if(isset($_GET["id"])){
    $wh["V_ID"]=$_GET["id"];
    $obj->myDelete("vendor_register",$wh);
    $obj->Redirect("vendor-register-display.php");
}


$rData=$obj->myQuery( "SELECT * FROM `vendor_register`" );
?>
<!DOCTYPE html>
<html lang="en">
<head>

		<?php
			require "header.php";
		?>

	</head>

	<body class="app ">
		<!-- <div id="spinner"></div> -->
		<div id="app" class="page">
			<div class="main-wrapper page-main" >
				<?php
					require "navigation.php"
				?>
				<!--Horizontal-menu-->
				

				<div class="container content-area">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Display</li>
							<li class="ml-auto d-lg-flex d-none">
								<span class="float-left border-">
									<a href="vendor-register.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Vendor</a>
								</span>
																
							</li>
                        </ol>

						<div class="row">
							<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Display</h4>
									</div>
									<div class="card-body">
										<table class="table table-bordered  mytable table-responsive" >
                                    <thead>
                                       <tr>
                                            <th>NO</th>
                                            <th>Vendor_ID</th>
                                            <th>Vendor_ABN</th>
                                            <th>Vendor_Type</th>
                                            <th>Vendor_Name</th>
                                            <th>Vendor_Email</th>
                                            <th>Vendor_Phone</th>
                                            <th>Vendor_Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no=0;
                                        while($row=$rData->fetch_assoc()) {
                                            $no++;
                                            ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['Vendor_ID']; ?></td>
                                                <td><?php echo $row['Vendor_ABN']; ?></td>
                                                <td><?php echo $row["Vendor_Type"]; ?></td>
                                                <td><?php echo $row["Vendor_Name"]; ?></td>
                                                <td><?php echo $row["Vendor_Email"]; ?></td>
                                                <td><?php echo $row["Vendor_Phone"]; ?></td>
                                                <td><?php echo $row["Vendor_Address"]; ?></td>
                                                <!-- <td>Update</a></td> -->
                                                <td><a href="vendor-register-update.php?id=<?php echo $row["V_ID"]; ?>"><span  title="Update"><i style="font-size:23px;margin-left: 10px;" class="fa fa-pencil-square-o text-center" aria-hidden="true"></i>
                                                         </span></a>                                         
                                                 
                                                 <a href="vendor-register-display.php?id=<?php echo $row["V_ID"]; ?>" onClick="return confirm('are you sure delete this record ?');"><span title="Delete"><i style="font-size:23px;" class="fa fa-trash-o" aria-hidden="true"></i>
                                                         </span></a></td>                                          
                                                 
                                                
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
									</div>
								</div>
							</div>
							
						</div>


					</section>
				</div>

		
			</div>
		</div>

		<!--Jquery.min js-->
		<?php
			require "script.php";
		?>

	 </body>


</html>