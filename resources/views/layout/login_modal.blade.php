<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h2 class="mb-4">Login</h2>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12 borde-bottom">
                        <label for="validationCustomUsername" class="form-label">USERNAME</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control input-img-one" placeholder="Name" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>

                        </div>
                    </div>

                    <div class="col-12 borde-bottom mt-5">
                        <label for="validationCustomPassword" class="form-label">PASSWORD</label>
                        <div class="input-group has-validation">
                            <div class="hide-show position-relative w-100">
                                <input type="text" class="form-control input-img-one input-img-two" placeholder="Password" id="validationCustomPassword" aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>

                    </div>


                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label ms-2" for="invalidCheck">
                                    remember me
                                </label>

                            </div>
                            <div>
                                <span class="forget-pass">forgot password</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
