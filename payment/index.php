<?php
session_start();
       

?>
<!DOCTYPE html>
<html>
<head>
<title>CURLZ CHECKOUT</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
    
</head>
<body>
    <img src="../img/logod.png">
	<div class="main">
		<h1>CURLZ CHECKOUT</h1>
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>UPI</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form>
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" value="<?php echo $_SESSION["email"];?>">
													<h5>NAME</h5>													
														<input type="text" value="<?php echo $_SESSION["fname"] ; echo " ", $_SESSION["lname"];?>">
                                                    <h5>DELIVERY ADDRESS</h5>													
														<input type="text" value="<?php echo $_SESSION["addr1"];?>">
                                                        <input type="text" value="<?php echo $_SESSION["addr2"];?>">
                                                        <input type="text" value="<?php echo $_SESSION["city"];echo ", ", $_SESSION["state"];echo ", ", $_SESSION["pincode"];?>">
												</div>			
											</form>
											<h3 class="pay-title">Credit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" plcaeholder="0000 0000 0000 0000" maxlength="16" min="1111111111111111"  required>
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												 
                                              <a href="../invoice/index.php" target="_blank">  GET RECEIPT</a><br><br>
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Bank Of China </label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Industrial and Commerical Bank Of China</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Standard Charterted Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>China Construction Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Agriculture Bank Of China</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Citic Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HSBC Bank(China) Company Limited</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Of America </label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>United Overseas Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>China Construction Bank</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>The Royal Bank Of Scotland</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>BNP Paris Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Industrial Bank Of Korea</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>JP Morgan Chase Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Korea Exchange Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>OCBC Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>China Merchant Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Of Communications</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>UPI</h3>
											<h4>Pay through any UPI ID.</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>UPI ID</h2>
													
													<form>
														<input type="text" placeholder="Enter UPI ID"  required>
														
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" required/>	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxx" maxlength="3" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required>
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © 2021 CURLZ. | All Rights Reserved |<a href="../main.php"><font color="red" face="georgia">HOME</font></a> </p>
	</div>
    
</body>
</html>