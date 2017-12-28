<!DOCTYPE html>
<html lang="bn">
	<head>
		<title> নিজের বিশ্ব </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/bootstrap.CSS">
		<script src="js/jquery.js"></script>
		<script src="js/main.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>
	<!---code for navigation-->
	<div class="navbar navbar-inverse navbar-fixed-top" >
	<div class="container-fluid">
    <div class="navbar-header">
    	<a href="#" class="navbar-brand">Apon World</a>
    </div>
    <ul class="nav navbar-nav">
    	<li><a href="#"><span class="glyphicon glyphicon-home">Home</span></a></li>
    	<li><a href="#"><span class="glyphicon glyphicon-modal-window">Product</span></a></li>
    	<li><a href="#"><span class="glyphicon glyphicon-inbox">Details</span></a></li>
    	<li style="width: 300px; left: 10px;top: 10px;"><input type="text" class="form-control" id="search"></li>
    	<li style="top: 10px;left: 20px;"><input type="submit" class="btn btn-primary" id="search_btn"></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-inbox">Message</span></a></li>
    <!--add to cart-->		
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class=" glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
        <div class="dropdown-menu" style="width: 400px; padding: 5px;">
            <div class="panel panel-success" style="color:darkred;padding: 5px; margin: 5px;" > 
              <div class="panel-panel-heading">
              	<div class="row">
              		<div class="col-md-3">Sl.No</div>
              		<div class="col-md-3">Product Image</div>
              		<div class="col-md-3">Product Name</div>
              		<div class="col-md-3">Product Price In BDT &#2547;</div>
              	</div>
              	<div class="panel-body"></div>
              	<div class="panel-footer"></div>
            </div>
        </div>
        </div>>
      </li><!--Cart end-->
<!--Code for sign in-->
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-user">SignIn</span></a>
        <ul class="dropdown-menu" style="width: 300px;">
            <div class="panel panel-primary" >
              <div class="panel-panel-heading"> Login</div>
              <div class="panel-heading">
                <label for="email"> Email </label>
                <input type="email" class="form-control" id="email" required="required"/>
                <label for="email">Password</label>
                <input type="Password" class="form-control" id="Password" required/>
                <p><br/></p>
                <a href="#" style="color: white; list-style: none;"> Forgotten Password </a>
              </div>
                <input type="submit" class="btn btn-success" style="float: right;" id="Login" value="Login">
              <div class="panel-footer" id="E_msg"></div>
            </div>
        </ul>
      </li>
    	<!--Code for sign in End-->
    	<li><a href="#"><span class=" glyphicon glyphicon-user">SignUP</span></a></li>
    </ul>
    </div>
	</div>
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid"></div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2">
			<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#"><h4>Categories</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div>
		    <div class="nav nav-pills nav-stacked">
			<li class="active"><a href="#"><h4>Brands</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
		    </div>
	    </div>
	    <!-- coding for product-->
	    <div class="col-md-8">
	    	<div class="panel panel-info">
	    		<div class="panel-heading">Products</div>
	    		<div class="panel-body">
	    			<div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; সেভেন আচার</div>
	    					<div class="panel-body">
	    						<img src="images/2.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 65.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>
	    					</div>
	    			    </div>
	    		    </div>
                	<div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; লাভ পাম</div>
	    					<div class="panel-body">
	    						<img src="images/1.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 100.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; আমের আচার</div>
	    					<div class="panel-body">
	    						<img src="images/33.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 99.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp;  লাভ পাম </div>
	    					<div class="panel-body">
	    						<img src="images/1.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 100.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; সেভেন আচার </div>
	    					<div class="panel-body">
	    						<img src="images/2.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 65.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; আমের আচার </div>
	    					<div class="panel-body">
	    						<img src="images/33.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 99.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; সেভেন আচার </div>
	    					<div class="panel-body">
	    						<img src="images/2.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 65.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; আমের আচার </div>
	    					<div class="panel-body">
	    						<img src="images/33.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 99.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    		    <div class="col-md-4">
	    				<div class="panel panel-info">
	    					<div class="panel-heading">   &nbsp;&nbsp;&nbsp;&nbsp; লাভ পাম </div>
	    					<div class="panel-body">
	    						<img src="images/1.jpg">
	    					</div>
	    					<div class="panel-heading">BDT 100.00&#2547;<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
	    			    </div>
	    		    </div>
	    	    </div>
	    	    <div class="panel-footer"> 	&reg; Copyright of নিজের বিশ্ব ! &copy; 2017</div>
	    	    <div>
	    	<div class="col-md-1"></div>
	    </div>
	</div>
	<!-- Coding for products end-->
</body>
</html>
