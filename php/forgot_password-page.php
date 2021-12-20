<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <title>Il Dojo dei Panini - Password dimenticata</title>
        <link id="theme-style-signup" rel="stylesheet" type="text/css" href="../css/signup_style.css" />

        <!-- FONTAWESOME -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <!-- TODO: link al file js per il signup. -->
        <script type="text/javascript" src="../js/signup/signup_theme.js"></script> <!-- TODO: cercare di utilizzare un singolo script sia per il login che per il signup. -->
    </head>
    <body>
        <div class="page-content d-flex align-items-center">
            <div class="container d-flex justify-content-center">
                <div class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-5"> <!-- TODO: fix cols -->
                    <div class="signup">
                        <div class="logo-section">
                            <img class="logo" src="../imgs/logo.png" alt="Dojo Logo" />
                        </div>
                        <h3 class="signup-title">Password dimenticata</h3>
                        <form action="forgot-password.php" method="POST">
                        <?php if(isset($templateParams["erroreforgotpassword"])): ?>
                            <p style="color:red"><?php echo $templateParams["erroreforgotpassword"]; ?></p>
                        <?php endif; ?>
                            <div class="mb-2 mt-5">
                                <input type="text" class="form-control username-input" placeholder="Username" name="username"/>
                                <img src="../icons/user-solid.svg" alt="User icon" class="img-user" />
                                <input type="email" class="form-control email-input" placeholder="Email" name="email"/>
                                <img src="../icons/envelope-open-solid.svg" alt="Email Icon" class="img-email" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control new-password-input" placeholder="New Password" id="password" oninput="passwordStrengthChecker()" name="password"/>
                                <img src="../icons/key-solid.svg" alt="Password Icon" class="img-password" />
                                <i class="fas fa-exclamation-circle exclamation-icon" id="exclamation-circle"></i>
                                <p class="password-strength-status" id="password-strength-status"></p> 
                                <img src="../icons/signup/eye-regular.svg" class="password-visibility" id="password-visibility" alt="Password-visibility" onclick="toggleVisibility()" />
                            </div>
                            
                            <div class="mb-3">
                                <input type="password" class="form-control password-reinput" placeholder="Confirm Password" id="confirm-password" oninput="passwordMatching()" name="confirm-password"/>
                                <img src="../icons/signup/eye-regular.svg" class="password-visibility-confirmation" id="password-visibility-confirmation" alt="Password-visibility-confirmation" onclick="toggleVisibilityConfirmation()" />
                                <img src="../icons/unlock-alt-solid.svg" alt="Passowrd Confirmation Icon" class="img-password-confirmation" />
                                <i class="fas fa-exclamation-circle exclamation-confirmation-icon" id="exclamation-circle-confirmation"></i>
                            </div>

                            <input type="submit" class="btn btn-signup mt-3 bm-3" value="Cambia Password" />
                        </form>
                        <hr class="hr-separator" />
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <input type="image" src="../icons/theme/lightbulb-solid.svg" class="btn img-theme" id="icon_theme" onclick="swapTheme()" alt="Theme" />

        <script type="text/javascript" src="../js/signup/password_strength_checker.js"></script> <!-- !Questo deve stare in fondo al file, altrimenti non funziona perchè non trova il div. -->
        <script type="text/javascript" src="../js/signup/password_matching.js"></script>
        <script type="text/javascript" src="../js/password_visibility.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>