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
				<div class="container content-area">
					<section class="section">
                    	<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
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