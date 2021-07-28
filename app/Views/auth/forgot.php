<?= $this->extend('auth/template-auth'); ?>

<?= $this->section('content-auth'); ?>>
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-4 pt-5 pb-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.forgotPassword') ?></h1>
                                <!-- <h6 class="mb-4">Bank Sampah Bersemi</h6> -->
                            </div>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>
                            <form action="<?= route_to('forgot') ?>" method="post" class="user">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    <?= lang('Auth.sendInstructions') ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>