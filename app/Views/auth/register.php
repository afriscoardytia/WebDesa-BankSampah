<?= $this->extend('auth/template-auth'); ?>

<?= $this->section('content-auth'); ?>
<div class="row justify-content-center">
    <div class="col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-4 pt-5 pb-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900"><?= lang('Auth.register') ?></h1>
                                <h6 class="mb-4">Bank Sampah Bersemi</h6>
                            </div>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <form action="<?= route_to('register') ?>" method="post" class="user">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user<?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    <?= lang('Auth.register') ?>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= route_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>