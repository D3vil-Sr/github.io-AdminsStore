<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <?php
			require './includes/header.php';
			require './includes/check-if-added.php';
		?>
    <div class="container">
        <div class="jumbotron">
            <center>
                <h1>Welcome to our Admin's Store!</h1>
                <p>We have the best Technologys for Inoveteres. No need to hunt around , we have all in one
                    place</p>
            </center>
        </div>
        <div class="row text-center" id="camera">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//y.jpg" alt="Asus Rog Strix">
                    <div class="caption">
                        <h3>Asus Rog Strix</h3>
                        <p>price: Rs. 62990.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//z.jpg" alt="Apple MacBook 13">
                    <div class="caption">
                        <h3>Apple MacBook 13</h3>
                        <p>price: Rs. 122900.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//x.jpg" alt="lenovo thinkpad">
                    <div class="caption">
                        <h3>lenovo thinkpad</h3>
                        <p>price: Rs. 99900.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//w.jpg" alt="HP Omen">
                    <div class="caption">
                        <h3>HP Omen</h3>
                        <p>price: Rs. 59900.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//9.jpg" alt="Moto 360 Smartwatch">
                    <div class="caption">
                        <h3>Moto 360 Smartwatch</h3>
                        <p>price: Rs. 13000.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//8.jpg" alt="Apple Watch 6">
                    <div class="caption">
                        <h3>Apple Watch 6</h3>
                        <p>price: Rs. 35000.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia//7.jpg" alt="Samsung Galaxy Gear">
                    <div class="caption">
                        <h3>Samsung Galaxy Gear</h3>
                        <p>price: Rs. 16000.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="Faber Luba #111">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>price: Rs. 180000.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="row text-center" id="shirts">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia/a1.jpg" alt="Microsoft Surface go">
                    <div class="caption">
                        <h3>Microsoft Surface go</h3>
                        <p>price: Rs. 800.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia/a2.jpg" alt="Galaxy Tab A7">
                    <div class="caption">
                        <h3>Galaxy Tab A7</h3>
                        <p>price: Rs. 14000.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia/a3.jpg" alt="chromebook duet 10.1">
                    <div class="caption">
                        <h3>chromebook duet</h3>
                        <p>price: Rs. 18500.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./kia/a4.jpg" alt=" Huawei MatePad Pro ">
                    <div class="caption">
                        <h3> Huawei MatePad Pro </h3>
                        <p>price: Rs. 33690.00</p>
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <?php
			require './includes/footer.php';
		?>
</body>

</html>