<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <p class="pull-right contact"><i class="fa fa-phone" aria-hidden="true"></i><?php echo nbs(3); ?>+91 9953 17 2004 | +91 8802 61 6575</p>
        </div>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <?php echo anchor('turban', 'Turban Trainer', array('class'=>'navbar-brand page-scroll')); ?>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Turban Trainer</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <?php echo anchor('turban', '', ''); ?>
                        <!-- <a href="#page-top"></a> -->
                    </li>
                    <li>
                        <?php echo anchor('turban/about', 'About Us', array('class'=>'page-scroll')); ?>
                        <!-- <a class="page-scroll" href="#about">About Us</a> -->
                    </li>
                    <li>
                        <?php echo anchor('turban/style', 'Turban Styles', array('class'=>'page-scroll')); ?>
                        <!-- <a class="page-scroll" href="#portfolio">Turban Styles</a> -->
                    </li>
                    <li>
                        <?php echo anchor('turban/classes', 'Punjabi Classes', array('class'=>'page-scroll')); ?>
                        <!-- <a class="page-scroll" href="#services">Punjabi Classes</a> -->
                    </li>
                    <li>
                        <?php echo anchor('turban/gallery', 'Gallery', array('class'=>'page-scroll')); ?>
                        <!-- <a class="page-scroll" href="#team">Gallery</a> -->
                    </li>
                    <li>
                        <?php echo anchor('turban/contact', 'Contact', array('class'=>'page-scroll')); ?>
                        <!-- <a class="page-scroll" href="#contact">Contact</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>