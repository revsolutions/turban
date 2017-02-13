<section id="services1">
    <div class="container">
        <?php for($i=0; $i<count($data); $i++): ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?php echo $data[$i]['page_name']; ?></h2>
                <h4>by</h4>
                <h3 class="section-subheading text-muted">Turban Trainer</h3>
            </div>
        </div>
        <div class="row text-center">
            <?php echo $data[$i]['content']; ?>
            <!-- <p>As you that now is the time of kalyug and Guru sahib said that we should recite the name of lord and read gurbani in this dangerous kalyug to get rid of this life and death circle. For all this we should have knowledge of how to read, write and speak Punjabi. Keeping in mind all these things we have a team of good reputed teachers who impart Punjabi language (both written and spoken) along with gurmat classes and history of sikhs.In house coaching classes for <strong>GURBANI PATH</strong> with correct pronunciation for children.</p>
            
            <p>You must associate your childrens in learning Punjabi language as this is one of the important part of our life because this is our mother tongue. Become a turban king alongwith your own language.</p>

            <p>To learn punjabi you may contact: +91 995 317 2004, +91 880 261 6575, +91 880 071 6900 or mail us at: turbantrainer1@gmail.com, sakattargill@gmail.com</p> -->
            <!-- <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div> -->
        </div>
    <?php endfor; ?>
    </div>
</section>