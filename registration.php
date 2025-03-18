<?php
include 'views/header.php';
?>

<form id="loginform" action="models/register_user.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="uname">Username</label>
            <input type="text" class="form-control" name="uname" id="uname" placeholder="Username" required>
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
        </div>
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>

    <div class="form-group">
        <label for="bdate">Birthdate</label>
        <input type="date" class="form-control" name="bdate" id="bdate" required>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
        </div>
        <div class="form-group col-md-6">
            <label for="conpass">Confirm Password</label>
            <input type="password" class="form-control" name="conpass" id="conpass" placeholder="Confirm Password" required>
        </div>
    </div>

   <div class="form-group d-flex align-items-center">
    <input class="form-check-input me-2" type="checkbox" name="eula" id="eula" value="eula" required>
    <label class="form-check-label m-0" for="eula">
        Agree to <a href="">End User License Agreement</a>
    </label>
</div>


    <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php
include 'views/footer.php';
?>