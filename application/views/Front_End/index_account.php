
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row mx-auto">
            <div class="col-lg-5 d-none d-lg-block"><img src="<?php echo base_url('assets/image/finance_0bdk.svg') ?>" alt="Foto Gw" width="460" height="600" style="margin-left: 10px;"></div>
            <div class="col-lg-7">
                <div class="p-5" style="margin-top: 50px;">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="<?php echo base_url('account/input')?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name" name="first">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name" name="last">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" name="email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" name="password">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" type="submit" value="Register">
                        </input>
                        <hr>
                    </form>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('Auth/index')?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>