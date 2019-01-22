<?php
	include_once('views/layout/header.php'); ?>
<div class="card">
    <div class="box">
        <div class="img">
            <img src="public/images/employee/<?php echo $employee['employee_image']; ?>">
        </div>
        <h2><?php echo $employee['employee_code']; ?><br><span><?php echo $employee['employee_name']; ?></span></h2>
        <p> <?php echo $employee['employee_birthday']; ?></p>
        <p> <?php echo $employee['employee_address']; ?></p>
        <p> <?php echo $employee['employee_email']; ?></p>
        <span>
            <ul>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </span>
    </div>
</div>
<?php include_once('views/layout/footer.php'); ?>