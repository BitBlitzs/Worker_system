<?php
/* Smarty version 4.3.4, created on 2023-12-06 17:13:48
  from 'c:\xampp\htdocs\tpl\template\index\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65703b4c3182e1_83350451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce4100e2bae1e5d474000d5c220ef3f073ebe60' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\index\\login.tpl',
      1 => 1701500188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65703b4c3182e1_83350451 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="/assets/css/login.css" />

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" name="form1" action="" onSubmit="return check()" class="sign-in-form">
          <input type="hidden" name="login_type" value="freelancer">
          <h2 class="title">接案登入</h2>
          <?php if (!empty($_smarty_tpl->tpl_vars['errormsg']->value)) {?>
              <tr>
                <td style="color:#FF0000">錯誤訊息 : <?php echo $_smarty_tpl->tpl_vars['errormsg']->value;?>

                </td>
              </tr>
            <?php }?>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="text" name="account" placeholder="帳號" />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="密碼" />
              </div>
              <input type="submit" value="Login" class="btn solid" />
        </form>
        <form method="post" name="form1" action="" onSubmit="return check()" class="sign-up-form">
          <input type="hidden" name="login_type" value="brand">
          <h2 class="title">品牌登入</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" name="account" placeholder="帳號">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="密碼" />
          </div>
          <input type="submit" value="Login" class="btn" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>品牌登入?</h3>
          <p>
          </p>
          <button class="btn transparent" id="sign-up-btn">
            登入
          </button>
        </div>
        <img src="\assets\images\login\log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>接案登入?</h3>
          <p>
          </p>
          <button class="btn transparent" id="sign-in-btn">
            登入
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
