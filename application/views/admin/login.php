  <body class="login-img3-body">

    <div class="container">
        <?php echo form_open('admin/valid_admin', array('class'=>'login-form')); ?>
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                  <span class="input-group-addon"><i class="icon_profile"></i></span>
                  <?php echo form_input('uname','', array('class'=>'form-control', 'placeholder'=>'Username')); ?>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <?php echo form_password('upass', '', array('class'=>'form-control', 'placeholder'=>'Password')); ?>
                </div>
                <label class="checkbox">                    
                    <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                </label>
                <?php echo form_submit('login', 'login', array('class'=>'btn btn-block btn-primary btn-lg')) ?>
            </div>
            <?php echo form_close(); ?>
    <div class="text-right">
            <div class="credits">
                Admin Panel by <a href="http://www.revsolutions.in/">Rev Solutions</a>
            </div>
        </div>
    </div>
  </body>
</html>
