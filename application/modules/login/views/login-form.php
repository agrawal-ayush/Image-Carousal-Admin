<!doctype html>
<html>
    <head>
    	<title>Login Form</title>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
        <link href="<?php echo base_url();?>assets/css/semantic.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/semantic.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    </head>
    
    </body>
      <center>	
        <div class="ui form segment " style="margin-top:60px; width:350px; background-color: rgba(202, 202, 202, 0.32); ">
          <center><img src="<?php echo base_url();?>assets/GREEDGE.png" alt="image"/></center>
          <br/>
          <form id="form" name="form" action="<?php echo base_url();?>login/login_check" method="post">
          
            <div class="ui left labeled icon input" style="alignment-adjust:central">
            <input type="text" name="did" id="did" placeholder="Username" required/>
			<i class="user icon" style="alignment-adjust:central"></i>
            <div class="ui corner label">
            <i class="icon asterisk"></i>
            </div>
            </div>
            
            <br/><br/>
            <div class="field">
            <div class="ui left labeled icon input">
            <input type="password" name="password" id="password" placeholder="Password" required />
            <i class="lock icon"></i>
            <div class="ui corner label">
            <i class="icon asterisk"></i>
            </div>
            </div>
            </div>
            
            <div class="ui error message">
            <div class="header" style="margin-top:300%; margin-left:30%"></div>
            </div>
            
            <input class="btn btn-primary" type="submit" id="submit" name="submit" value="Login"/>
            <a href="<?php echo base_url(); ?>register" class="btn btn-primary">Registration</a>
            <br>
            
            <?php 	
            if(isset($msg))
            {
            echo $msg;
            } ?>
          </form>
        </div>
      </center>
    </body>
</html>