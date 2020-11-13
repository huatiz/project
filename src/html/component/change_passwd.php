<div class="row justify-content-center">
    <form id="submit" class="row flex-column px-5 py-4 py-md-5 col-12 col-md-9 col-lg-9 wrapper__border bg-white">
        <h3 class="text-gray mb-5"><span class="h1">修改</span>密碼</h3>
        <div class="row justify-content-between mb-4">
            <div class="col-12 col-md-6">
                <input class="input-box form-control mb-3" type="password" placeholder="舊密碼" id="oldPassword" required>
                <input class="input-box form-control mb-3" type="password" placeholder="新密碼" id="newPassword" required>
                <input class="input-box form-control mb-3" type="password" placeholder="再次確認" id="passwordAgain" required>
            </div>
            <div class="col-md-6 row justify-content-center align-items-center p-0">
                <div class="lock">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
        </div>
        <button class="btn submit-btn btn-primary align-self-center mb-4" type="submit">完成</button>
    </form>
</div>