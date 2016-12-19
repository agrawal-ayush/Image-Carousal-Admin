<!DOCTYPE html>
<html>
    <head>
        <title>Add Images</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        
        <style type="text/css">
            .form-signin 
			{
				max-width: 1000px;
				padding: 19px 29px 29px;
	
				background-color: #fff;
				border: 1px solid #e5e5e5;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,.form-signin .checkbox
			 {
            	margin-bottom: 10px;
             }
          .form-signin input[type="text"],form-signin input[type="password"]
		  	 {
				font-size: 16px;
				height: auto;
				margin-bottom: 15px;
				padding: 7px 9px;
             }
        </style>
        <script type="text/javascript">
            function readURL(input) 
			{
            if (input.files && input.files[0])
			{
				var reader = new FileReader();
				reader.onload = function (e) 
				{
					$('#test').attr('src', e.target.result);
				};
                reader.readAsDataURL(input.files[0]);
        	}
        	}
		</script>
    </head>
	<body>
    
    <!-- Navigation Bar      -->
    
    			<?php $this->load->view('header');?>

    <!-- Side Panel -->
    
	<div class="tabbable tabs-left"> 
		<ul class="nav nav-tabs">
			<li class="active">
 				<a href="#tab1" data-toggle="tab">Add New Images</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>home">Image Gallary</a>
			</li>
		</ul>
        
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
				<div class="row-fluid">
					<form class="form-signin" action="<?php echo base_url();?>home/save" method="post" enctype="multipart/form-data">
                    	<h2 class="form-signin-heading">Add New Images</h2>
						<input type="text" class="input-block-level" name="img_name" placeholder="Name" required>
						<input type="text" class="input-block-level" name="img_link" placeholder="Link" required>
						<input type="file" class="input-block-level" name="img_file" onchange="readURL(this);" required></button><br/>
						<img alt="Image Display Here" id="test" src="<?php echo base_url();?>assets/getimage.jpg" width= 250px height=200px/><br/>
						<br/>
						<button class="btn btn-large btn-primary" type="submit">Submit</button>
						<br/>
   						<br/>
						<?php 
						if(isset($success))
						{ ?>
						<div class="alert alert-success" role="alert"><?php echo "Success"; ?> </div>
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>

      
    		<script src="<?php echo base_url();?>public/js/jquery-1.9.1.js"></script>
    		<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
	</body>
</html>

