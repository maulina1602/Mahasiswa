<?php
//display selected user data based on id
//getting id from url
$id = $_GET['id'];

//fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM user WHERE id=$id");

while ($data = mysqli_fetch_array($result)) {
    $username    = $data['username'];
    $password   = $data['password'];
}
?>

<div class="card">
    <div class="card-header">
        <strong>Ubah Data User</strong>
    </div>
    <div class="card-body">
        <form method="POST" action="?page=user-update">
        <!-- <?php echo $password ?> -->
            <input type="hidden" class="form-control" name="password_lama1" value="<?php echo $password; ?>" required>
        <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password_lama2" class="col-sm-3 col-form-label">Password Lama</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password_lama2" placeholder="Password Lama" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password_baru" class="col-sm-3 col-form-label">Password Baru</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password_baru" placeholder="Password Baru" required>
            </div>
        </div>

        <div class="card-footer bg-transparent">
            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <button type="submit" name="update" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            </div>
    </form>
    </div>
</div>