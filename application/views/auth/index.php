  <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center pt-5">

          <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                          <div class="col-lg-6">
                              <div class="p-5">
                                  <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali!</h1>
                                  </div>
                                  <form action="<?= base_url('main/login') ?>" method="POST" class="user">
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Masukkan Username Anda...">
                                          <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password...">
                                          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                      </div>
                                      <button type="submit" class="btn btn-success btn-user btn-block">
                                          Login
                                      </button>
                                      <hr>
                                      <a href="<?= base_url('main/register') ?>" class="btn btn-success btn-user btn-block"> Register</a>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>