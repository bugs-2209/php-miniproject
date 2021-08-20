<?php include './Views/admin/layouts/header.php' ?>

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa thông tin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Thông tin người dùng</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="?controller=user&action=update&id=<?=$user['id'] ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input type="text" value="<?=$user['username'] ?? '' ?>" name="username" class="form-control">
                    </div>
                    <p class="text-danger">
                        <?php echo isset($error['username']) ? $error['username'] : ''; ?>
                    </p>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" value="<?=$user['email'] ?? '' ?>" name="email" class="form-control">
                    </div>
                    <p class="text-danger">
                        <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                    </p>
                    <button type="submit" name="updateUser" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>

<?php include './Views/admin/layouts/footer.php' ?>
