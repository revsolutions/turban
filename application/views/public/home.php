    <section id="services1">
    <?php for($i=0;$i<count($data);$i++): ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $data[$i]['page_name']; ?></h2>
                    <!-- <h3 class="section-subheading text-muted"></h3> -->
                </div>
            </div>
            <div class="row text-center">
                <?php echo $data[$i]['content']; ?>
                <!-- <p>A turban also known as pagg, pagri or dumala is derived from the Persian word which is a necessary headgear for Sikhs. Pagg is closely related to religion and is a vital part of the Sikh culture supporting a Sikh turban is necessary for all Amritdhari (baptized) Sikhs (also called Khalsa) and also for non-baptized Sikhs who belong to Sikh families. A turban is a pride for every Punjabi and Sikh because it gives them uniqueness from other people.</p>

                <p>Among the Sikhs, the turban is an article of faith that represents honour, self-respect, courage, spirituality, and piety. The Khalsa Sikhs, who adorn the Five Ks, wear the turban partly to cover their long, uncut hair (kesh). The turban is mostly identified with the Sikh males, although some Sikh women also wear turban. The Khalsa Sikhs regard the turban as an important part of the unique Sikh identity. They are easily recognizable by their distinctive turbans. Some Sahajdhari Sikhs do not wear turbans.</p>

                <h2>HISTORY OF Turban</h2>

                <p>The turban has been an important part of the Sikh culture since the time of the Sixth Guru. At Guru Ram Das Jyoti jyot, his elder son Pirthi Chand wore a special turban, which is usually worn by an elder son when his father passes away. At that time Guru Arjan Dev was honoured with the turban of Guruship:<br>

                <quote>"Marne di pag Pirthiye badhi. Guriyaee pag Arjan Ladhi"</quote>
                Guru Angad Dev honoured Guru Amar Das ji with a Siropa (turban) when he was made the Guru. Guru Gobind Singh, the last human Sikh Guru, wrote:
                <quote>"Kangha dono vaqt kar, paag chune kar bandhai". ("Comb your hair twice a day and tie your turban carefully, turn by turn.")</quote>

                Bhai Rattan Singh Bhangu, one of the earliest Sikh historians, wrote in Sri Gur Panth Parkash:

                <quote>"Doi vele utth bandhyo dastare, pahar aatth rakhyo shastar sambhare
                Kesan ki kijo pritpal, nah(i) ustran se katyo vaal"</quote></p>


                <p>Tie your turban twice a day and wear shaster (weapons to protect dharma), and keep them with care, 24 hours a day. </p>

                <p>Take good care of your hair. Do not cut or damage your hair</p> -->
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
        </div>
    <?php endfor; ?>
    </section>