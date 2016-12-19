<div class="navbar">
        <div class="navbar-inner">
            	<div class="container">
              		<a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/GREEDGE.png" alt="image" height="50px" width="200px"/></a>
              		<a class="brand" href="<?php echo base_url();?>" style="padding-top: 20px; font-size : 30px;">Home</a>
              		<a class="brand" href="<?php echo base_url(); ?>navigate" style="padding-top: 20px; font-size : 30px;">Navigate</a>
              		<a class="brand" href="#" style="padding-top: 20px; font-size : 30px;">About</a>
                   <div class="dropdown pull-right">
                    <a class="btn btn-large btn-primary dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" >
                    	<?php echo $this->session->userdata('user_name'); echo " "; ?> <b class="caret"></b>
                    </a>
					<ul class="dropdown-menu" >
						<li><a href="#">About</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url();?>home/logout">Logout</a></li>
					</ul>
				</div>
				</div>
		</div>
	</div>
       