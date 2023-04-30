<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - InterviewIQ</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="/assets/css/Banner-Heading-Image-images.css">
</head>

<body>
    <section class="py-5">
        <div class="container py-5"><span id="startup-name"><strong>&nbsp;InterviewIQ&nbsp; &nbsp;&nbsp;</strong></span><img class="rounded-circle img-fluid" src="/assets/img/logo.png" width="26" height="26">
            <?php echo form_open(base_url() . 'login/check_login'); ?>
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2"></p>
                    <h2 class="fw-bold">Welcome back to InterviewIQ!</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <form method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="form-group">
                                    <?php echo $error; ?>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit">Log in</button></div>
                                <div class="form-check" style="margin-left: 21px;padding-left: 21px;padding-right: 42px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><strong>Remember me</strong></label></div>
                                <p class="text-muted">New to InterviewIQ? <a href="/signup.html">Sign up</a>&nbsp;here.</p>
                                <p class="text-muted">Forgot your password?&nbsp;<a href="#">Click here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </section><!-- Start: Footer Multi Column -->
    <footer class="bg-dark"></footer><!-- End: Footer Multi Column -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/bold-and-dark.js"></script>
</body>

</html>