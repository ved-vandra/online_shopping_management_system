

<div class="main">
    <div class="content" style="text-align: center">
         <div class="login_panel" style="width:400px;text-align:center;display:inline-block;float: none">
            <h3>Customer Login</h3>
            <p>Sign in with the form below.</p>
            
            
            <form action="<?php echo base_url('customer/logincheck');?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text"/>
                <input name="customer_password" placeholder="Enter Your Password" type="password"/>
                <br> <br>
                <label class="remember" for="remember"><input type="checkbox" id="remember" /> Remember me</label>
                    <div class="clearfix"></div> 
                <br>
                <div class="buttons"><div><button class="grey">Sign In</button></div></div>
            </form>
        </div>	
        <div class="clear"></div>
    </div>
</div>