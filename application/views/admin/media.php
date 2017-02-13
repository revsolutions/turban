      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                            <li><i class="fa fa-bars"></i>Pages</li>
                            <li><i class="fa fa-square-o"></i>Pages</li>
                        </ol>
                    </div>
                </div>
            </section>
            <div class="col-md-12">
                <div class="col-md-3 col-md-offset-2">
                    <?php echo form_label('Choose jpg, png format only!', 'upload'); ?>
                    <?php echo form_open_multipart('admin/upload', 'upload'); ?>
                    <?php echo form_upload('pic'); ?>
                    <?php //echo form_dropdown('page_select', $media, 'default'); ?>
                </div><div class="col-md-2">
                    <?php echo form_label('Select page!', 'page_select').'<br>'; ?>
                    <select name="page_select" id="">
                        <?php foreach ($media as $key => $value) {?>
                            <option value="<?php echo $value['page_name']; ?>"><?php echo $value['page_name']; ?></option>
                        <?php } ?>
                    </select>
                    </div><div class="col-md-2">
                    <?php echo form_submit('upload', 'Upload', array('class'=>'btn btn-primary')); ?>
                    <?php form_hidden('page_name', 'page_name'); ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
</section>

<!-- Media UPload Modal -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>