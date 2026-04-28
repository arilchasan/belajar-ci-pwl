<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">

        <h5 class="card-title">Profile Information</h5>

        <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label fw-bold text-muted">Username</div>
            <div class="col-lg-9 col-md-8">
                <?= session()->get('username') ?>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label fw-bold text-muted">Role</div>
            <div class="col-lg-9 col-md-8">
                <span class="badge bg-danger">
                    <?= session()->get('role') ?>
                </span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label fw-bold text-muted">Email</div>
            <div class="col-lg-9 col-md-8 text-primary">
                <?= session()->get('email') ?>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label fw-bold text-muted">Login Time</div>
            <div class="col-lg-9 col-md-8">
                <?= date('Y-m-d H:i:s', session()->get('time_login')) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-4 label fw-bold text-muted">Status</div>
            <div class="col-lg-9 col-md-8">
                <span class="badge bg-success">
                    <i class="bi bi-check-circle"></i>
                    <?php if (session()->get('status') == 'success'):
                        echo 'Sudah Login';
                    endif; ?>
                </span>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection() ?>