<?php 
	$page_title = "Administrator Login";
    include_once('../includes/header_admin.php');

?>
<form method="POST" class="form-horizontal">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="control-label col-lg-4">Email Address</label>
            <div class="col-lg-8">
                <input name="email" type="email" class="form-control" required />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-lg-4">Password</label>
            <div class="col-lg-8">
                <input name="pw" type="password" class="form-control" required />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-4 col-lg-8">
                <button name="login" type="submit" class="btn btn-success">
                    Login
                </button>
            </div>
        </div>
    </div>
</form>
<?php
	include_once('../includes/footer.php');
?>