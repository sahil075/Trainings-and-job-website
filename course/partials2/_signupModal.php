<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SignUp to Train->Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/halkat/partials/_signupHandle.php" method="post">
            <div class="modal-body">
                    <div class="container1 mt-2">
                        <div class="mb-2">
                            <label for="email" class="form-label">
                                <h3>Email</h3>
                            </label>
                            <input type="email" maxlength="30" class="form-control" id="email" name="email"
                                placeholder="abc@gmail.com">
                        </div>
                        <div class="mb-2">
                            <label for="pass" class="form-label">
                                <h3>Password</h3>
                            </label>
                            <input type="password" maxlength="20" class="form-control" id="pass" name="pass"
                                placeholder="12345">
                        </div>
                        <div class="mb-2">
                            <label for="copass" class="form-label">
                                <h3>Confirm Password</h3>
                            </label>
                            <input type="password" maxlength="20" class="form-control" id="copass" name="copass"
                                placeholder="12345">
                            <div class="form-text">We'll never share your password with anyone else.</div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <h3>First name</h3>
                                <input type="text" maxlength="20" class="form-control" id="fname" name="fname"
                                    placeholder="john">
                            </div>
                            <div class="col">
                                <h3>Last name</h3>
                                <input type="text" maxlength="20" class="form-control" id="lname" name="lname"
                                    placeholder="shaw">
                            </div>
                        </div>
                        <br>

                        <center><button class="btn btn-primary col-md-2" type="submit">signup</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>