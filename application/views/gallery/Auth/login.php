<?php $this->load->view("gallery/Side/header"); ?>
<style>
  .red-text {
    color: red;
  }
</style>
<div class="page page-center">
  <div class="container container-tight py-4">
    <!--Konten-->
    <style>
        .logo {
            width: 150px; 
            height: auto; 
            margin-right: 10px;
            margin-left: 150px;
            margin-bottom: 1px;
        }
    </style>
    <div>
        <img src="<?= base_url('dist/img/logo/pixel2.png') ?>" alt="Logo Perusahaan" class="logo">
    </div>
    <div class="text-center mb-2">
      <a class="navbar-brand navbar-brand-autodark"></a>
    </div>
    <div class="card card-md bg-transparent">
      <div class="card-body ">
        <h3 class="h2 text-center mb-4 text-danger ">
          <?php
          $error = $this->session->flashdata('error');

          if (!empty($error)) {
            echo '<span style="color: red;">' . $error . '</span>';
          } else {
            echo "LOGIN";
          }
          ?>
        </h3>
        <form action="<?= base_url('Auth/loginAkun') ?>" method="post" autocomplete="off">
          <div class="mb-3">
            <label class="form-label text-danger">Username</label>
            <input type="text" name="Username" class="form-control" placeholder="<?php
                                                                                  if (!empty(form_error('Username'))) {
                                                                                    echo "Form ini harus di isi!";
                                                                                  } else {
                                                                                    echo "Your Username";
                                                                                  }
                                                                                  ?>" autocomplete="off">
          </div>
          <div class="mb-2">
            <label class="form-label text-danger">Password</label>
            <div class="input-group input-group-flat">
              <input type="password" name="Password" class="form-control" placeholder="<?php
                                                                                        if (!empty(form_error('Password'))) {
                                                                                          echo "Form ini harus di isi!";
                                                                                        } else {
                                                                                          echo "Your Password";
                                                                                        }
                                                                                        ?>" autocomplete="off">

            </div>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-success w-100 bg-blue">Log In</button>
            <label class="form-check">
              <input type="checkbox" class="form-check-input">
              <span class="form-check-label">
                Remember me on this device

              </span>
            </label>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center text-muted mt-3 ">
      Don't have account yet? <a href="<?= base_url('Auth/masuk'); ?>" tabindex="-1">Sign up</a>
    </div>
  </div>
</div>
<?php $this->load->view("gallery/Side/fotter"); ?>