      <!--main content start-->
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
              <!-- page start-->
              <?php echo form_open('admin/pages_submit'); ?>
              <?php foreach ($h_data as $key => $value): ?>
              <?php echo form_textarea('content', $value["content"], array('id'=>'content')); ?>
	          <?php echo form_submit('submit', 'Submit', array('class'=>'btn btn-primary')); ?>
	          <?php echo form_hidden('slug', $value['slug']); ?>
	          <?php endforeach; ?>
              <?php echo form_close(); ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->