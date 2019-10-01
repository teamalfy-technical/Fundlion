<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php
    $title = 'Become a Fundlion Lending Partner - FundLion';
    include 'head.php';
    ?>
</head>

<body class="light-version">

    <?php
    include 'preloader.php';
    include 'header.php';
    $hero_title = 'Become a Fundlion Lending Partner';
    $hero_subtitle = 'Sub title will go here.';
    $hero_id = 'home_about';
    include 'hero.php';
    ?>

    <!-- body -->
    <section class="about-us-area clearfix">

        <div class="container" style="padding: 30px 15px;">

            <div class="row">

                <div class="col-lg-12">

                    <h3 class="text-dark">

                        Partner With Us
                    </h3>

                    <p class="text-dark">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas animi quasi recusandae quidem ad quia iure velit
                        facilis dolor delectus ipsum libero, ipsa eaque incidunt! At consectetur reiciendis illo maxime.

                    </p>
                </div>

            </div>

        </div>

    </section>

    <section class="mb-50">
        <div class="container">
            <form>
                <div class="bg_become_member">
                    <h6>Your Fundlion Account</h6>
                    <p class="text-dark">To create your Fundlion login we need:</p>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label-sm become_label">Title *</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-sm" id="title" required>
                                        <option value="mr">Mr</option>
                                        <option value="mrs">Mrs</option>
                                        <option value="miss">Miss</option>
                                        <option value="ms">Ms</option>
                                        <option value="dr">Dr</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="first_name" class="col-sm-4 col-form-label-sm become_label">First name *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="first_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-sm-4 col-form-label-sm become_label">Last name *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="last_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-sm-4 col-form-label-sm become_label">Date of birth *</label>
                                <div class="col-sm-4">
                                    <input id="dob" type="text" class="form-control form-control-sm datepicker-here" data-position="bottom left" data-language='en' required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label-sm become_label">Email *</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-sm" id="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_again" class="col-sm-4 col-form-label-sm become_label">Email again *</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-sm" id="email_again" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label-sm become_label">Password *</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_again" class="col-sm-4 col-form-label-sm become_label">Password again</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control form-control-sm" id="password_again" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-sm-4 col-form-label-sm become_label">Company name *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="text" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-sm-4 col-form-label-sm become_label">Telephone number *</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control form-control-sm" id="telephone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="position" class="col-sm-4 col-form-label-sm become_label">Company position *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="position" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label-sm become_label">Partnership type *</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-sm" id="title" required>
                                        <option value="lender">Lender</option>
                                    </select>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>

                <div class="bg_become_member mt-50">

                    <h6>Security Questions</h6>
                    <p class="text-dark">
                        Please answer the following security questions. Your answers will help us identify you in future dealings:
                    </p>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label for="grow" class="col-sm-4 col-form-label-sm become_label">Where did you grow up? *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="grow" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="school" class="col-sm-4 col-form-label-sm become_label">What school did you attend when you were 10 years old? *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="school" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="friend" class="col-sm-4 col-form-label-sm become_label">What was the name of your best friend at school? *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" id="friend" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <h6>Address</h6>
                            <div class="col-md-6">
                                <div class="form-group row ">
                                    <label for="postcode" class="col-sm-4 col-form-label-sm become_label">Find Address by Postcode</label>
                                    <div class="col-sm-8 form-inline">
                                        <input type="text" class="form-control form-control-sm" id="postcode" required>
                                        <button class="btn btn-success btn-sm" type="button">Find Address</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </section>

    <?php
    // recurring html
    include 'consistent_body.php';
    // footer
    include 'footer.php';
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/datepicker.en.js"></script>
    <script src="js/dzsparallaxer.js"></script>
    <script src="js/jquery.syotimer.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/become_a_fundlion_lending_partner.js"></script>

</body>

</html>