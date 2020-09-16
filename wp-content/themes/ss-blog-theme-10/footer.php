<!-- Begin footer -->
    <div class="row footer-header mx-1 footer-mode-desktop">
        <div class="col-6">
            <div class="row">
                <div class="col-12 pt-5">
                    <h2>We'll do anything for good time.</h2>
                </div>
                <div class="col-12 py-2 font-left35-regular">
                    <p>Need to get in touch? <br> <a class="link-send-us " href="mailto:hello@social-studies.com?Subject=Hello!" _top="">Send us an email</a> and we'll get back ASAP</p>
                </div>

                <div class="col-6 pt-3">
                    <hr class="general"/>
                    <h5 class="font-weidemann">Get on our guestlist</h5>
                    <p class="font-left35-light" style="font-size: 14px">No cover charge. Just high quality emails, delivery occasionaly</p>

                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control form-email-footer font-left35-light" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2" style="font-size: 10px; height: 42px; border-radius: 0px;">
                        <div class="input-group-append" >
                            <button class="btn btn-outline-secondary form-email-footer" type="button" style="border-radius: 0px;  height: 42px;"> <div style="font-size: 10px" > <i class="fas fa-arrow-right"></i></div></button>
                        </div>
                    </div>
                </div>
                <div class="col-6 pt-3">
                    <hr class="general"/>
                    <!-- Maybe sidebar -->
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
        <div class="col-6 ">
            <!-- Image  -->
            <?php if ( is_active_sidebar( 'footer_sidebar_social_5' ) ) : ?>
                <?php dynamic_sidebar( 'footer_sidebar_social_5' ); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mx-1 footer-mode-mobile">
        <div class="col-12">
            <h3 style="font-size: 40px;">We'll do anything for good time.</h3>
        </div>
        <div class="col-5 mt-4 pr-0">
            <p class="footer-text-mobile">Need to get in touch? <br> <a class="link-send-us" href="mailto:hello@social-studies.com?Subject=Hello!" _top="">Send us an email</a> and we'll get back ASAP</p>
        </div>
        <div class="col-7 pl-0">
            <!-- Image  -->
            <?php if ( is_active_sidebar( 'footer_sidebar_social_5' ) ) : ?>
                <?php dynamic_sidebar( 'footer_sidebar_social_5' ); ?>
            <?php endif; ?>
        </div>
        <div class="col-12 mt-3">
            <hr class="general"/>
            <h3 class="font-weidemann" >Get on our guestlist</h3>
            <p style="font-size: 14px">No cover charge. Just high quality emails, delivery occasionaly</p>
            <div class="input-group mb-3 ">
                <input type="text" class="form-control form-email-footer font-left35-light" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon2" style="font-size: 10px; height: 42px; border-radius: 0px;">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary form-email-footer" type="button" style="border-radius: 0px; height: 42px;"><div style="font-size: 10px"> <i class="fas fa-arrow-right"></i></div></button>
                </div>
            </div>
        </div>
        <div class="col-12">
            <hr class="general"/>
            <!-- Maybe sidebar -->
            <?php get_template_part( 'sidebar', 'recommendations' );?>
        </div>
    </div>


    <div class="container-fluid mt-3 py-1 footer-end">
        <span style="font-size: 10px">2019, Social Studies. All rights reserved</span>
    </div>

    <?php wp_footer();?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>