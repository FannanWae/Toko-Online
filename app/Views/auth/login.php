<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokoabc</title>
    <link href="<?= base_url('../css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('../bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-4 text-center">

                            <div class="mb-md-5 mt-md-4">
                                <?= form_open('Auth/login'); ?>
                                <h2 class="fw-bold text-uppercase pb-5">Sign in</h2>
                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                    <label class="form-label" for="Username">Username</label>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Sign in</button>
                                <p class="">Don't have an account? <a href="<?= site_url('auth/register') ?>" class="text-white-50 fw-bold">Sign up</a>
                                </p>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>