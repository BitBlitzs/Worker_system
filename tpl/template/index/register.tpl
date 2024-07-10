<link rel="stylesheet" href="/assets/css/login.css" />

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" name="form1" id="form1" action="" onSubmit="return check()" class="sign-in-form">
          <input type="hidden" name="login_type" value="freelancer">
          <h2 class="title">接案註冊</h2>
          <{if !empty($errormsg)}>
              <tr>
                <td style="color:#FF0000">錯誤訊息 : <{$errormsg}>
                </td>
              </tr>
            <{/if}>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="email" name="account" placeholder="帳號" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="密碼" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="名稱" />
              </div>
              <input type="submit" class="btn" value="Sign up" />
        </form>
        <form method="post" name="form1" id="form1" action="" onSubmit="return check()" class="sign-up-form">
          <input type="hidden" name="login_type" value="brand">
          <h2 class="title">品牌註冊</h2>
          <{if !empty($errormsg)}>
              <tr>
                <td style="color:#FF0000">錯誤訊息 : <{$errormsg}>
                </td>
              </tr>
            <{/if}>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="email" name="account" placeholder="帳號" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="密碼" />
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="名稱" />
              </div>
              <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>品牌註冊?</h3>
          <p>
          </p>
          <button class="btn transparent" id="sign-up-btn">
            註冊
          </button>
        </div>
        <img src="\assets\images\login\log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>接案註冊?</h3>
          <p>
          </p>
          <button class="btn transparent" id="sign-in-btn">
            註冊
          </button>
        </div>
        <img src="\assets\images\login\register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="\assets\js\login.js"></script>

</body>

</html>