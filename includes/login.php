<!-- Aside Content Start -->

<div class="aside__content">

              <div class="logonlogo">
                <img src="assets/images/logo-ray-b.png" alt="PLP LOGO HANDS">
              </div>
              <br>
              <center><p class="aside__title">LOGIN</p></center>
              <?php if (array_key_exists('error', $_GET)): ?>
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <div class="error-message">
                    <strong>Error</strong> - <?= $_GET['error'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                </div>
              <?php endif; ?>
             <!--  <p class="aside__text">Test</p> -->
              <form action="api/fetch_data/login_auth.php" method="post">
                <input 
                  type="text" 
                  name="input_email_address" 
                  class="login-style" 
                  placeholder="Email Address"
                  value="<?= array_key_exists('email', $_GET) ? $_GET['email'] : '' ?>" 
                  >
                <div class="password-toggle">
  <input type="password" id="input_password" name="input_password" placeholder="Password">
  <span id="input_password-toggle" class="toggle-btn" onclick="togglePasswordVisibility('input_password')"></span>
</div>
                <input type="submit" class="button-caption button button-solid-light transition-el transition-el-5" value="LOGIN">
                <a href="#" id="home-trigger" class="home-trigger">FORGOT PASSWORD</a></li>
                <br>
                <br>
                <br>
                <br>
                <br>
              </form>
              
    
            
            <div class="aside__socials">
           
              <ul class="socials">
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                              <li>
                  <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Aside Socials End -->

           
            <style>
  .login-style {
    background-color: #ffff;
    color: black;
    border: 1px solid #000000;
  }
  .password-toggle {
    position: relative;
  }

  .password-toggle input[type="password"] {
    padding-right: 25px;
    background-color: #ffff;
    color: black;
    border: 1px solid #000000;
  }

  .password-toggle .toggle-btn {
    position: absolute;
    top: 50%;
    right: 5px;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .error-message {
    font-size: 1.8em;
  }
</style>

<script>
  function togglePasswordVisibility(inputId) {
    var input = document.getElementById(inputId);
    var toggleBtn = document.getElementById(inputId + "-toggle");

    if (input.type === "password") {
      input.type = "text";
      toggleBtn.textContent = "Hide";
    } else {
      input.type = "password";
      toggleBtn.textContent = "Show";
    }
  }
</script>