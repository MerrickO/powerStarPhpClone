<!DOCTYPE html>
<?php $title="Contact Powerstar Service Center" ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
<?php include './partials/header.php'; ?>

<body>
        <a id="button"></a>
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
                        <p><strong>Khetha Dludla</strong></p>
                        <p class="m-0">Sales & Marketing</p>
                        <p class="m-0">
                            <a href="mailto:salesexec@powerstarsc.com"
                                data-link="mailto:salesexec@powerstarsc.com">salesexec2@powerstarsc.com</a>
                        </p>
                        <p class="mt-0">082 870 4362 / 035 772 1739</p>
                        <p class="mb-0">Sales</p>
                        <p class="m-0">
                            <a href="mailto:salesexec@powerstarsc.com"
                                data-link="mailto:salesexec@powerstarsc.com">salesexec@powerstarsc.com</a>
                        </p>
                        <p class="mt-0">035 772 1539</p>
                    </div>
                    <div>
                        <p class="mb-0"><strong>Jay Reddy</strong></p>
                        <p class="m-0">Tel 082 924 8421 / 084 763 0505</p>
                        <p class="mt-0">
                            <a data-link="mailto:jayreddy@powerstarsc.com"
                                href="mailto:jayreddy@powerstarsc.com">jayreddy@powerstarsc.com</a>
                        </p>
                        <p>Unit B8C Magazulu Park C/o R34 to Melmoth & D254 Empangeni, 3880</p>
                        <p class="mt-0"> Email:
                            <a data-link="mailto:admin@powerstarsc.com"
                                href="mailto:admin@powerstarsc.com">admin@powerstarsc.com</a>
                        </p>
                    </div>
                    <div class="row mt-5 m-0">
                        <p><strong>Registered with:</strong></p>
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
                    <!-- Contact Form and Maps -->
                    <div class="p-5 row">
                        <div class="col-xl-6">
                            <p>Google Maps</p>
                        </div>
                        <div class="col-xl-6">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="name">Name:</label>
                                        <input class="form-control" type="text" name="name"/>
                                        <label for="surname">Surname</label>
                                        <input class="form-control" type="text" name="surname"/>
                                    </div>
                                    <div class="col-12">
                                        <label for="tel">Telephone:</label>
                                        <input class="form-control" type="tel" name="tel" pattern="[+27][0-9]{10}"/>
                                        <label for="email"><span>*</span>Email:</label>
                                        <input class="form-control" type="email" name="email" required/>
                                    </div>
                                    <div class="col-12">
                                        <label for="message">Message:</label>
                                        <textarea class="form-control" name="message"></textarea>
                                    </div>
                                    <button class="btn btn-lg">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php include './partials/footer.php'; ?>
    </body>

</html>