<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs5 edit profile account details - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
#profile-section{
    margin-top: 20vh !important;
}
    </style>
</head>
<?php require_once "views/layout/public/head.php" ?>

<body>
<?php require_once "views/layout/public/header.php" ?>
<div class="container-xl px-4 mt-5" id="profile-section">
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" 
                         src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
            <div class="card mb-4">
                <!-- Header with buttons -->
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Profile</h5>
                    <div class="btn-group" role="group">
                    <a href="/user/<?= $user['id'] ?>/edit" class="btn btn-outline-primary me-2">
                        Account Details
                    </a>
                    <a href="/user/<?= $user['id'] ?>/security" class="btn btn-primary">
                        Security Settings
                    </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label class="small mb-1">First Name</label>
                            <div class="form-control-static"><?= $user['first_name'] ?></div>
                        </div>
                        <div class="col-md-6">
                            <label class="small mb-1">Last Name</label>
                            <div class="form-control-static"><?= $user['last_name'] ?></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1">Address</label>
                        <div class="form-control-static"><?= $user['address'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1">Email</label>
                        <div class="form-control-static"><?= $user['email'] ?></div>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1">Phone</label>
                        <div class="form-control-static"><?= $user['phone_number'] ?></div>
                    </div>
                    <a href="/user/<?= $user['id'] ?>/edit" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "views/layout/public/footer.php" ?>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>