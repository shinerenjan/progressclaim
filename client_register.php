<?php
    require 'Config.php';
    $obj=new Config();
    // $obj->AdminWall();

      $Client=$obj->myQuery("select * from client_register");
      $error="";
    if(isset($_POST["btn_send"])){      
            $clientData["Client_ID"] = $_POST["Client_ID"];
            $clientData["Client_ABN"]=$_POST["Client_ABN"];
            $clientData["Client_Type"]=$_POST["Client_Type"];
            $clientData["Client_Name"]=$_POST["Client_Name"];
            $clientData["Client_Email"]=$_POST["Client_Email"];
            $clientData["Client_Phone"]=$_POST["Client_Phone"];
            $clientData["Client_Address"]=$_POST["Client_Address"];
            $result=$obj->myInsert("client_register", $clientData);
            if($result>0){
                 $obj->Redirect("client-register-display.php");
            }else{
                $error="<div class=\"alert alert-danger\">Something Wrong...</div>";
            }
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
                            <li class="breadcrumb-item active">  Add Client</li>
							<li class="ml-auto d-lg-flex d-none">
								<span class="float-left border-">
									<a href="client-register-display.php" class="btn btn-success"><i class="fa fa-list "></i> Display</a>
								</span>
																
							</li>
                        </ol>

						<div class="row">
							<div class="col-xs-12 col-sm-6 m-auto" > 
								<div class="card">
									<div class="card-header">
										<h4>ADD Client</h4>
									</div>
									<div class="card-body">
					<form  method="post" action="#" id="form" class="bValidator">
                        <div class="row">
                           
                           <div class="form-group col-lg-12">
                              
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Client_ABN"  placeholder="Enter Client ABN" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Client_Type"  placeholder="Enter Client Type" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Client_Name"  placeholder="Enter Client Name" >
                              <input style="margin-top: 10px;" type="text" class="form-control" name="Client_Email"  placeholder="Enter Client Email" >
                              <input style="margin-top:10px;" type="text" class="form-control" name="Client_Phone"  placeholder="Enter Client Phone" required="">
                              <input style="margin-top:10px;" type="text" class="form-control" name="Client_Address"  placeholder="Enter Client Address" required="">
                           </div>
                          
                           
                        <div class="text-center m-auto">
                           <button type="submit" name="btn_send" class="btn btn-success">Submit</button>
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