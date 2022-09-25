<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
        header("Location: ./index.php");
    }
    if (!isset($_SESSION['type'])){
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareforBharat</title>
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profile-css/settings.css">
    <link rel="stylesheet" href="css/utils.css">

</head>

<body>
    <div class="flex-row">
        <?php
            include './header.php';
        ?>
        <h2>Settings</h2>

        <section class="settings">



            <div class="container3">
                <?php echo "<form id='settingsForm' action='./database/changeSettings.php?userEmail=" . $_SESSION['email'] . "' method='POST'>"; ?>
                    <div class="row input-container">
                        <div class="col-md-12">
                            <div class="styled-input wide">
                                <input name="mobile" type="phone" required value=<?php echo $_SESSION['mobile'] ?> />
                                <label class="settings-label">Phone</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input">
                                <input type="password" name="currPassword" required/>
                                <label class="settings-label">Old Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input id='updatedPassword' type="password" name="updatedPassword" required />
                                <label class="settings-label">New Password</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input id='confirmPassword' type="password" name="updatedPasswordConfirmation" required />
                                <label class="settings-label">Retype New Password</label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="styled-input wide">
                                <textarea name="address" required><?php echo $_SESSION['address']?></textarea>
                                <label class="settings-label">Address</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <button ref='submitSettings' class="btn-lrg submit-btn settingSubmit">Save</button>
                        </div>
                    </div>
                    <button id='submitSettings' class='d-none' type="submit"></button>
                </form>
            </div>


        </section>
        <br>

        <h2>Support</h2>

        <section class="support">
            <div class="container3">

            <?php echo "<form id='supportForm' action='./database/support.php?userEmail=" . $_SESSION['email'] . "&username=" . $_SESSION['username'] . "' method='POST'>"; ?>
                    <div class="row input-container">
                        <div class="col-xs-12">
                            <h3 style="margin: 20px;">Enquiry</h3>
                            <div class="styled-input wide">
                                <textarea name='enquiry' required></textarea>
                                <label class="settings-label">Type</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="overflow: hidden;">
                            <button ref='submitSupport' class="btn-lrg submit-btn">Save</button>
                        </div>

                    </div>
                    <button id="submitSupport" class='d-none' type="submit"></button>
                </form>

            </div>
        </section>
    </div>
    
    <script src="js/sideBar.js"></script>
    <script>
            const password = document.getElementById("updatedPassword"), confirm_password = document.getElementById("confirmPassword");
            const submitBtn = document.querySelector('settingSubmit');
            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Didn't Match, Try Again");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>
