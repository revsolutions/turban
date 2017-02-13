<section id="team" class="bg-light-gray">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-4 col-sm-push-4 col-md-4 col-md-push-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>assets/img/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <?php for($i=0;$i<count($data);$i++): ?>
                <div class="row text-center">
                    <?php echo $data[$i]['content']; ?>
                    <!-- <p class="row text-center">From last five year Mr. SAKATTAR SINGH GILL, a prominent name in the national and international arena in the field of turban coaching. He is one of the best turban tutor in whole national capital region including Delhi.</p>

                    <p>In house coachng/training at the Delhi and Delhi NCR region (Noida, Gurgaon ) and different States of India as well as in Foreign Countries.</p>

                    <p class="strong">Special DASTAAR (aka pugri or turban) tied for a punjabi sikh WEDDING of the grooms OR any other event at house wedding &amp; five star hotels if any.</p>

                    Special classes are arranged at the five star hotels visiting NRI’s from Canada USA. 

                    Youth of Delhi swear by my name as “SAKATTAR SINGH GILL” from their good turnout they to have a styles turban , they been coached &amp; trained by me. Now you can see a change in Delhi and Gurgaon Delhi NCR.

                    Keeping in mind all the facts, i am also available for those who are outside country and are willing to take turban tying services in UK, USA, Canada, Australia, New Zealand &amp; France. I am not doing this for money but the whole purpose is to spread the tradition of turban. You may contact us for any dastar competition, dastar sikhlai camp in gurduara sahib. we also have special arrangements for marriages, parties, events. Any one can take this service.</p> -->
                </div>
            <?php endfor; ?>
            </div>
        </div>
    </section>