<?php

extract($_POST)

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c2dfdb544f.js" crossorigin="anonymous"></script>


<div class="card" style="width: 230px; margin-left: 40%;border: 10px blur red;box-shadow: 0px 0px 10px 0px red; margin-top:20px; margin-bottom: 20px;">
  <img src="supermarket_logo.png" class="card-img-top" alt="...">
  <svg preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 380 92" class="svg1">
								<path d="M7.174 31.656C73.809 80.861 129.796 88.389 219.82 45.231 309.844 2.073 350.291 12.247 390.295 27.481 390.362 26.724 390.893 20.647 390.959 19.89 299.906-24.314 217.212 40.044 156.407 52.592 95.593 65.13 58.217 49.101 9.737 2.358 9.224 8.216 7.43 28.727 7.174 31.656Z">
									<img src="https://ownbuz.com/b/visitcard_design/flip.png" style="width: 40px;margin-left: 70%;">
								</path>	
							</svg>			
  <div class="card-body">
    <div style="border-left: 5px solid ; height:65px; padding:5px;margin-left: 5px;">
						    <b style="font-size:20px;"><?php echo "$B_name";?><br></b>
	</div>
    <h6 style="margin-top: 5px;"><?php echo "$location";?></h6>
    <div style="font-size:15px; color:green;">
    	<a href="tel:tel:07447752338"><i class="fa-solid fa-square-phone"></i></a>
    	<a href="https://wa.me"><i class="fa-brands fa-square-whatsapp" style="margin-left: 5px;"></i></a>
    	<a href="tel:07447752338"><b style="margin-left: 10px;"><?php echo "$mobile";?></b></a>
  </div>

  <div>
  	<a href="mailto:hsakshi28@gmail.com"><i class="fa-solid fa-square-envelope" style=" color:red;font-size: 15px;"></i><b style="font-size:12px;margin-left: 10px;"><?php echo "$email";?></b> </a>
  </div>
  <div style="margin-left: 50%;">
  	<b style="font-size:10px;color: red;">VISIT US</b>
  	<a href="https://facebook.com"><i class="fa-brands fa-square-facebook" style="margin-left: 5px;"></i></a>
  	<a href="https://wa.me"><i class="fa-brands fa-square-whatsapp" style="margin-left: 5px;"></i></a>
  </div>

  <div style="border:1px solid red;padding: 5px;">
  	<i class="fa-brands fa-whatsapp" style="color: red; font-size: 15px;" ></i>
  	<input type="text" placeholder="enter 10 digit mob" style="font-size:10px;border: 0px;">
  	<i class="fa-sharp fa-solid fa-share" style="color: red; font-size: 15px;"></i>
  </div>
  <div>
  	<button style="margin-top:10px;background-color: blue; text-align: center; font-size: 15px;color: white;border: 0px;padding: 5px;"><i class="fa-regular fa-address-book" style="color: white;"></i>Save contact</button>

  	<button style="margin-top:10px;background-color: red; text-align: center; font-size: 15px;color: white;border: 0px;padding: 5px;"><i class="fa-solid fa-download"></i>PDF</button>
  	<i class="fa-solid fa-arrow-right" style="color:red;float:right;margin-top: 10px;font-size: 20px;font-weight: bold;"></i>
  </div>

  </div>
</div>