<!doctype html>
  <head>
  		<title>Image Nagivation</title>
		<script src="<?php echo base_url();?>public/js/jquery-1.9.1.js"></script>
        <link href="<?php echo base_url();?>assets/css/semantic.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/semantic.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>public/js/bootstrap.js"></script>
        
        <style>
		#carousel-example-generic
		{
			max-height: 1549px;
			max-width: 942px;
		}
		body
		{
			padding-top : 2%;
		}
		
		</style>
   </head>
   
   <body>
   <center>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url();?>assets/banner.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <?php foreach($allimages as $banner)
	{
		?>
    <div class="item">
      <a href=" <?php echo "http://".$banner->img_link;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $banner->img_name;?>" alt="<?php echo $banner->img_name;?>"></a>
      <div class="carousel-caption">
       <?php echo $banner->img_name;?>
      </div>
    </div>
    <?php }?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
</body>
</html>