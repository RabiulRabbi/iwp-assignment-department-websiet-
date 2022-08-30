<?php
include('./includes/html-header.php');
?>

<body>
    <?php
    include('./topheader.php');
    include('../pages/navbar.php');
    ?>
    <div class="d-flex justify-content-center login-section">
        <div class="container" style="z-index: 1;">
            <div class="login-container">
                <ul class="nav nav-pills mb-3 tab-content d-flex justify-content-center custom-login" style="padding: 10px; border-radius: 10px;" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">Login</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="pills-register-tab" data-bs-toggle="pill" data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register" aria-selected="false">Register</div>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-facebook"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->
                            <div class="form-outline mb-4 email">
                                <label class="form-label" for="loginName">Email or username</label>
                                <input style="padding: 0px 3px;" type="email" id="loginName" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginPassword">Password</label>
                                <input style="padding: 0px 3px;" type="password" id="loginPassword" class="form-control" />
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" unchecked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <!-- <div class="text-center">
                                <p>Not a member? <a href="#">Register</a></p>
                            </div> -->
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                        <form style="line-height: 4px;">
                            <!-- Name input -->
                            <div class="form-outline mb-4 row">
                                <div class="col-md-6">
                                    <label class="form-label" for="registerName">Name</label>
                                    <input style="padding: 0px 3px;" type="text" id="registerName" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="registerUsername">Username</label>
                                    <input style="padding: 0px 3px;" type="text" id="registerUsername" class="form-control" />
                                </div>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="registerEmail">Email</label>
                                <input style="padding: 0px 3px;" type="email" id="registerEmail" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input style="padding: 0px 3px;" type="password" id="registerPassword" class="form-control" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                <input style="padding: 0px 3px;" type="password" id="registerRepeatPassword" class="form-control" />
                            </div>

                            <!-- Repeat Password input -->


                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" unchecked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-register-overlay"></div>
    </div>
</body>
<?php
include('./footer.php');
?>

</html>