<!DOCTYPE html>
<html>
    <head>
        <title>Image Gallery</title>
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
 			<?php $this->load->view('header');?>
       
    <div class="tabbable tabs-left"> 
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="<?php echo base_url();?>home" data-toggle="tab">Image Gallery</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>home/add">Add New Images</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" >
				
                <?php if(!empty($allimages)) 
				{ ?>
                <table><?php 
                $i=0;
                foreach ($allimages as $imge){
                if($i==3){
                $i=$i+1;
                ?><tr><td>
                 <ul class="thumbnails" style="padding: 10px">
                <li class="span4">
					<div class="thumbnail" style="padding: 10px; ">
                    <img data-src="holder.js/260x220" alt="260x220" src="<?php echo base_url();?>assets/uploads/<?php echo $imge->img_name;?>" style="width: 300px; height: 250px; border:1px solid;">
					<div class="caption">
                             <h3><?php echo $imge->img_name;?></h3>
                             <p><?php echo $imge->img_link;?></p>
                             <p><a href="<?php echo site_url('home/edit_page/'.$imge->img_id) ?>" class="btn btn-info" role="button">Edit</a>
                             <a href="<?php echo site_url('home/delete_image/'.$imge->img_id) ?>" class="btn btn btn-danger" role="button">Delete</a></p>
					</div>
					</div>
				</li>
				</ul>
                </td> 
				
				<?php $i = 0; 
                        }
                        else {
                        ?><td>  <ul class="thumbnails" style="padding: 10px">
                <li class="span4">
					<div class="thumbnail" style="padding: 10px; ">
                    <img data-src="holder.js/260x220" alt="260x220" src="<?php echo base_url();?>assets/uploads/<?php echo $imge->img_name;?>" style="width: 300px; height: 250px; border:1px solid;">
					<div class="caption">
                             <h3><?php echo $imge->img_name;?></h3>
                             <p><?php echo $imge->img_link;?></p>
                             <p><a href="<?php echo site_url('home/edit_page/'.$imge->img_id) ?>" class="btn btn-info" role="button">Edit</a>
                             <a href="<?php echo site_url('home/delete_image/'.$imge->img_id) ?>" class="btn btn btn-danger" role="button">Delete</a></p>
					</div>
					</div>
				</li>
				</ul></td><?php } $i = $i+1;
                        }
						?>
                        </table>
                        <?php   }
                    	
						else { ?>
                        <div class="alert" style="width:50%; "><button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><h2>No Images Found !!</h2></strong> <br/><h4>Add Some Images First !</h4>
</div>
<?php }
?>      
                  </div>
		</div>
		</div>

      
    <script src="<?php echo base_url();?>public/js/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>

