<?php
/* Smarty version 4.3.4, created on 2024-02-23 03:12:42
  from 'c:\xampp\htdocs\tpl\template\index\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d79caaa625e6_66218504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adae5971aff98635492f72d3c97209e9054ac1f9' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\index\\register.tpl',
      1 => 1708629158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d79caaa625e6_66218504 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/assets/css/login.css" />

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" name="form1" id="form1" action="" onSubmit="return check()" class="sign-in-form">
          <input type="hidden" name="login_type" value="freelancer">
          <h2 class="title">接案註冊</h2>
          <?php if (!empty($_smarty_tpl->tpl_vars['errormsg']->value)) {?>
              <tr>
                <td style="color:#FF0000">錯誤訊息 : <?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>

                </td>
              </tr>
            <?php }?>
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
          <?php if (!empty($_smarty_tpl->tpl_vars['errormsg']->value)) {?>
              <tr>
                <td style="color:#FF0000">錯誤訊息 : <?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>

                </td>
              </tr>
            <?php }?>
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

  <?php echo '<script'; ?>
 src="\assets\js\login.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
