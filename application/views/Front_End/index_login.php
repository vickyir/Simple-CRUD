<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row mx-auto">
                            <div class="col-lg-6 d-none d-lg-block"><img src="<?php echo base_url('assets/image/finance_0bdk.svg') ?>" alt="Foto" width="460" height="600" style="margin-left: 10px;"></div>
                            <div class="col-lg-6">
                                <div class="p-5" style="margin-top: 80px;">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Amikom Scolarships</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo site_url('Auth/auth_action')?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" value="login">
                                        </input>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('Account/index')?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>