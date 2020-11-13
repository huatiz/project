<div class="row justify-content-center">
    <form action="" class="row flex-column px-5 py-4 py-md-5 col-12 col-md-9 col-lg-9 wrapper__border bg-white">
        <h3 class="text-gray mb-5 fs-en"><span class="h1">Change </span>Password</h3>
        <div class="row justify-content-between mb-4">
            <div class="col-12 col-md-6">
                <input class="input-box form-control mb-3" type="password" placeholder="Old Password" id="oldPassword" name="oldPassword" required>
                <input class="input-box form-control mb-3" type="password" placeholder="New Password" id="newPassword" name="newPassword" required>
                <input class="input-box form-control mb-3" type="password" placeholder="Password Again" id="passwordAgain" name="passwordAgain" required>
            </div>
            <div class="col-md-6 row justify-content-center align-items-center p-0">
                <div class="lock">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
        </div>
        <button class="btn submit-btn btn-primary align-self-center mb-4" type="submit" id="submit">Submit</button>
    </form>
</div>