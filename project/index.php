<!doctype html>
<html>
    <head>
	<title>Html darsi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link href="css/style.css" rel="stylesheet" />
    </head>

  
    
    <body>
		
    	<!-- <div class="spinner-border text-primary" role="status">
  	        <span class="visually-hidden">Loading...</span>
	    </div>
    	-->
 	<h1 align ="center">Shaxsiy ma'lumotlaringizni kiriting :</h1>
	<form method= "post" action = "user.php" >    
	    <div class="container-fluid">
	    	<div class="row">
		    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-dark">Familiya:<input type="text" placeholder="" name ="" size=21 /></div>
			<?php
				$_POST['user']; 
			?>
		    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-dark">Ism:<input type="text" placeholder="" name='name' size=21 /></div>
		    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-dark">Sharif:<input type="text" placeholder="" size=21 /></div>
	   	</div><br /><br />
		Jinsingizni kiriting:<br />
		<div class="container-fluid">
	    	    <div class="row">
		    	 <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-secondary"><input type="radio" name="sex" />Erkak</div>
		         <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-secondary"><input type="radio" name="sex" />Ayol</div>
		         <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3 bg-secondary"><p1><input type="radio" name="sex" />Astag'firullox<br /></p1></div>
	   	    </div>
	        <div/><br />
	
		<div class="container-fluid">
	    	    <div class="row">
		    	<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-primary">Tug'ilgan sana:<input type="date" />(KK.OO.YY)</div>
		        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-primary">Telefon raqam:<input type"number" placeholder="998 90 678 44 89" /></div>
		        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-primary">E-mail:<input type="text" placeholder="example@gmail.com" /></div>
		        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-primary">Rasmingizni joylang:<p2><input type="file" /></p2></div>
	   	    </div>
	        </div>
		
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 ">
			    Qaysi davlatda tug'ulgansiz:
    	    		    <select>
                                <option value="uz">O'zbekiston</option>
	        	 	<option value="ru">Rossiya</option>
			    	<option value="en">Angliya</option>
			    	<option value="kr">Janubiy Koreya</option>
            		    </select>
	         	</div>
		    </div>
		</div>
  		    
		Qaysi tillarni bilasiz:
		    <div class="container-fluid">
	    		<div class="row">
		    	    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-success "><input type="checkbox" />Rus tili</div>
		    	    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-success "><input type="checkbox" />O'zbek tili</div>
		    	    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-success "><input type="checkbox" />Ingliz tili</div>
			    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 bg-success "><input type="checkbox" />Koreys tili</div>
	   	        </div>
	            </div>
		<p>O'zingiz haqingizda qo'shimcha ma'lumot bering:<p>
	        <div class="form-floating">
  		    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name = 'message' style="height: 100px"></textarea>
  		    <label for="floatingTextarea2">Comments</label>
		</div>    
		
		<button class="btn btn-primary" type="submit">Button</button>
 		<input class="btn btn-primary" type="submit" value="Submit">
		<input class="btn btn-primary" type="reset" value="Reset">
	</form>
	
	
    </body> 

</html>	 
