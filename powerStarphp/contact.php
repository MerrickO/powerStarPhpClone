<!DOCTYPE html>
<?php $title="Contact Powerstar Service Center" ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
<?php include './partials/header.php'; ?>

<body>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include './partials/notification.php'; ?>
            <?php include 'partials/nav.php'; ?>
                <header class="text-center">
                    <h1 class="display-3 theme-bg theme-header-space"><b>ABOUT US</b></h1>
                </header>
                <div class="text-center theme-body-space">
                    <div>
                        <p class="m-0"><strong>Khetha Dludla</strong></p>
                        <p class="m-0">Sales & Marketing</p>
                        <p class="m-0">
                            <a href="mailto:sale@ai.com"
                                data-link="mailto:sales@ai.com">sales@ai.com</a>
                        </p>
                        <p>082 870 4362 / 035 772 1739</p>
                        <p class="m-0"><strong>Sharon</strong></p>
                        <p class="m-0">Finance</p>
                        <p>
                            <a href="mailto:finance@ai.com"
                                data-link="mailto:finance@ai.com">finance@ai.com</a>
                        </p>

                        <p class="m-0"><strong>Reuel</strong></p>
                        <p class="mb-0">Parts</p>
                        <p>
                            <a href="mailto:parts@ai.com"
                                data-link="mailto:parts@ai.com">parts@ai.com</a>
                        </p>

                        <p class="m-0"><strong>Ritesh</strong></p>
                        <p class="mb-0">Parts</p>
                        <p>
                            <a href="mailto:workshop@ai.com"
                                data-link="mailto:workshop@ai.com">workshop@ai.com</a>
                        </p>
                    </div>
                    <div>
                        <p>Unit B8C Magazulu Park C/o R34 to Melmoth & D254 Empangeni, 3880</p>
                        <p class="mt-0"> Email:
                            <a data-link="mailto:sales@ai.com"
                                href="mailto:sales@ai.com">sales@ai.com</a>
                        </p>
                    </div>

                    <div class="mt-5">
                        <p class="text-center"><strong>Registered with:</strong></p>
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-avis.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-eqstra.jpg" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-fleetafrica.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-kcs.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-umhlath.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/logo-wesbank.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/standard-bank.png" alt="">
                            </div>
                            <div class="col">
                                <img class="img-fluid" src="/public/imgs/site-images/eskom-logo.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form and Maps -->
                    <div class="p-5 row">
                        <div class="col-xl-6">
                            <p>Google Maps</p>
                        </div>
                        <div class="col-xl-6">
                            <form action="./mail-handler.php" method="POST">
                                <div class="row">
                                    <?php include './partials/contact-form.php'; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col pb-5">
                        <p>Download Our Company Profile</p>
                        <a class="btn btn-lg theme-btn" href="/public//imgs/downloads/pstar-company-profile-sm.pdf" download>Download</a>
                    </div>
                </div>
            <?php include './partials/footer.php'; ?>
    </body>

</html>