<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:53:43
  from 'c:\xampp\htdocs\tpl\template\includes\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d824d74a7784_12210279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7b1432df198e5ec6498cef022bb2f616b2d8fd' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\includes\\header.tpl',
      1 => 1708664020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d824d74a7784_12210279 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header-area style-1">
  <div class="header-main-logo d-lg-block d-none">
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/index/index"><img alt="image" src="/assets/images/header1-logo.svg" /></a>
  </div>
  <div class="menu-topbar-area">
    <div class="menu-area">
      <div class="header-logo">
        <a href="index.html"><img alt="image" class="img-fluid" src="/assets/images/header1-logo.svg" /></a>
      </div>
      <div class="main-menu">
        <ul class="menu-list">
          <li class="menu-item-has-children">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/index/index">首頁</a>
          </li>
          <li class="menu-item-has-children">
            <a href="#" class="drop-down">訪客</a><i class="bi bi-plus dropdown-icon"></i>
            <ul class="sub-menu">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/index/job_list">Job Listing</a></li>
              <li><a href="job-details.html">Job Details</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <?php if ($_SESSION['UserID'] > 0) {?>
          <?php echo $_SESSION['UserName'];?>

          <?php } else { ?>
              <div class="nav-right d-flex jsutify-content-end align-items-center">
                <ul id="testid">
                  <li class="d-md-flex d-none">
                    <div class="sign-in-btn">
                      <a class="primry-btn-1 lg-btn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/index/login">
                        登入</a>
                    </div>
                  </li>
                  <li class="d-md-flex d-none">
                    <div class="post-job-btn">
                      <a class="primry-btn-2 lg-btn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/brand/posting">
                        立即發案</a>
                    </div>
                  </li>
                  <li class="d-md-flex d-none">
                    <div class="post-job-btn">
                      <a class="primry-btn-2 lg-btn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/index/register">
                        註冊</a>
                    </div>
                  </li>
                </ul>
                <div class="sidebar-button mobile-menu-btn">
                  <i class="bi bi-list"></i>
                </div>
              </div>
            <?php }?>
    </div>
  </div>
</header><?php }
}
