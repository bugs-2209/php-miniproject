<?php include './Views/admin/layouts/header.php' ?>

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm tài khoản</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tài Khoản</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="?controller=user&action=store">
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" class="form-control">
                        <p class="text-danger">
                            <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                        <p class="text-danger">
                            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <p class="text-danger">
                            <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                        </p>
                    </div>
                    <button type="submit" name="createUser" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php include './Views/admin/layouts/footer.php' ?>
