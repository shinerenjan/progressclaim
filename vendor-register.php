    <?php
    require 'Config.php';
    $obj=new Config();
    // $obj->AdminWall();

      $Vendor=$obj->myQuery("select * from vendor_register");
      $error="";
    if(isset($_POST["btn_send"])){      
            $vendorData["Vendor_ID"] = $_POST["Vendor_ID"];
            $vendorData["Vendor_ABN"]=$_POST["Vendor_ABN"];
            $vendorData["Vendor_Type"]=$_POST["Vendor_Type"];
            $vendorData["Vendor_Name"]=$_POST["Vendor_Name"];
            $vendorData["Vendor_Email"]=$_POST["Vendor_Email"];
            $vendorData["Vendor_Phone"]=$_POST["Vendor_Phone"];
            $vendorData["Vendor_Address"]=$_POST["Vendor_Address"];
            $result=$obj->myInsert("vendor_register", $vendorData);
            if($result>0){
                 $obj->Redirect("vendor-register-display.php");
            }else{
                $error="<div class=\"alert alert-danger\">Something Wrong...</div>";
            }
    }
?>

<?php
$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

		<?php
			require "header.php";
		?>

	</head>

	<body class="app ">
		<div id="spinner"></div>
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
                            <li class="breadcrumb-item active">  Add Vendor</li>
							<li class="ml-auto d-lg-flex d-none">
								<span class="float-left border-">
									<a href="vendor-register-display.php" class="btn btn-primary"><i class="fa fa-list "></i> Display</a>
								</span>
																
							</li>
                        </ol>

						<div class="row">
							<div class="col-xs-12 col-sm-6 m-auto" > 
								<div class="card">
									<div class="card-header">
										<h4>ADD Vendor</h4>
									</div>
									<div class="card-body">
									    <form  method="post" action="#" id="form" class="bValidator">
                        <div class="row">
                           
                           <div class="form-group col-lg-12">
                              <input  type="text" class="form-control" name="Vendor_ID"  placeholder="Enter Vendor_ID" required="" value="<?php echo getName($n); ?>">
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Vendor_ABN"  placeholder="Enter Vendor ABN" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Vendor_Type"  placeholder="Enter Vendor Type" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Vendor_Name"  placeholder="Enter Vendor Name" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Vendor_Email"  placeholder="Enter Vendor Email" >
                              <input style="margin-top:10px;" type="text" class="form-control" name="Vendor_Phone"  placeholder="Enter Vendor Phone" required="">
                              <input style="margin-top:10px;" type="text" class="form-control" name="Vendor_Address"  placeholder="Enter Vendor_Address" required="">
                           </div>
                          
                           
                        <div class="text-center m-auto">
                           <button type="submit" name="btn_send" class="btn btn-primary loginbtn">Submit</button>
                           <button type="reset" class="btn btn-default">Reset</button>

                        </div>
                          <?php
                                        echo $error;
                           ?>
                     </form>
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