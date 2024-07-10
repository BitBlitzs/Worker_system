<?php
/* Smarty version 4.3.4, created on 2023-12-06 18:11:43
  from 'c:\xampp\htdocs\tpl\template\brand\listing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657048df0460d0_99083363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5527ad7dc58f2a383d504e50bb055446019038' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\brand\\listing.tpl',
      1 => 1701502302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657048df0460d0_99083363 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
  <div class="inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-content text-center">
            <h1>Job Listing</h1>
            <span></span>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/brand/dashboard">回主頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">招聘職缺 </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="job-listing-area pt-120 mb-120">
    <div class="container">
      <div class="row g-lg-4 gy-5">
        <div class="col-lg-8 order-lg-2 order-1">
          <div class="job-listing-wrrap">
            <div class="row g-4 mb-25">
              <div class="col-lg-6 d-flex align-items-center">
                <p class="show-item">招聘職缺一覽</p>
              </div>
            </div>
            <div class="row ">
              <?php
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['result']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total !== 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                  <div class="col-lg-12 mb-30">
                    <div class="job-listing-card">
                      <div class="job-top">
                        <div class="job-list-content">
                          <div class="company-area">
                            <div class="logo">
                              <img src="/assets/images/bg/company-logo/company-01.png" alt="">
                            </div>
                            <div class="company-details">
                              <div class="name-location">
                                <h5><a href="#">
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['title'];?>

                                  </a></h5>
                                <p><a href="#">
                                    <?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['post_brand'];?>

                                  </a></p>
                              </div>
                            </div>
                          </div>
                          <div class="job-discription">
                            <ul>
                              <li>
                                <p><span class="title">工作待遇:</span>
                                  <?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['salary'];?>

                                </p>
                              </li>
                              <li>
                                <p><span class="title">需求人數:</span>
                                  <?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['vacancies'];?>

                                </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
}
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body><?php }
}
