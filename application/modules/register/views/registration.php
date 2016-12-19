<!doctype html>
<html>
	<head>
    	<title>Registration Form</title>
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
        <link href="<?php echo base_url();?>assets/css/semantic.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/semantic.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    </head>
    
    <body>
        <center>	
            <div class="ui form segment " style="margin-top:30px; width:550px; background-color: rgba(202, 202, 202, 0.32); ">
            <center><img src="<?php echo base_url();?>assets/GREEDGE.png" alt="image"/></center>
            <br/>
           	<div><?php echo validation_errors();?></div>
           
            <form name="form" id="myform" action="<?php echo base_url();?>register" method="post">
                
                <div class="field">
                <div class="ui left labeled icon input" style="alignment-adjust:central">
                <input type="text" name="username"  placeholder="Email ID" required/>
                <i class="mail icon" style="alignment-adjust:central"></i>
                <div class="ui corner label">
                <i class="icon asterisk"></i>
                </div>
                </div>
                </div>
                
                           
                <div class="field">
                <div class="ui left labeled icon input">
                <input type="text" name="name"  placeholder="Name" required />
                <i class="add user icon"></i>
                <div class="ui corner label">
                <i class="icon asterisk"></i>
                </div>
                </div>
                </div>
                
                <div class="field">
                <div class="ui left labeled icon input">
                <input type="tel" name="mnum" placeholder="Mobile Number" maxlength="10" required />
                <i class="mobile icon"></i>
                <div class="ui corner label">
                <i class="icon asterisk"></i>
                </div>
                </div>
                </div>
                
                 <div class="field">
                <div class="ui left labeled icon input">
                <input type="password" name="password"  id="pass1" placeholder="Password"  minLength="8" maxlength="16" required />
                <i class="lock icon"></i>
                <div class="ui corner label">
                <i class="icon asterisk"></i>
                </div>
                </div>
                </div>
                
                 <div class="field">
                <div class="ui left labeled icon input">
                <input type="password" name="confirm_password"  id="pass2 " placeholder="Enter Your Password Again"  minLength="8" maxlength="16" required onkeyup="checkPass(); return false;" />
                <i class="lock icon"></i>
                <div class="ui corner label">
                <i class="icon asterisk"></i>
                </div>
                </div>
                </div>
                <div class="ui error message">
                <div class="header" style="margin-top:300%; margin-left:30%"></div>
                </div>
				<input class="btn btn-primary" type="submit" id="submit" name="submit" value="Submit"/><br>
				<br>
				<a href="<?php echo base_url();?>login">Already have an account, Click here to Login</a>
                
			</form>
            </div>
        </center>
       </body>
</html>

