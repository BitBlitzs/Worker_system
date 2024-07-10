<?php
/* Smarty version 4.3.4, created on 2023-12-06 18:11:46
  from 'c:\xampp\htdocs\tpl\template\brand\posting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657048e25c8b98_91351663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11160f6060630d5a0580c8ba86b323990967c1c1' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\brand\\posting.tpl',
      1 => 1701500761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/footer.tpl' => 1,
    'file:includes/js.tpl' => 1,
  ),
),false)) {
function content_657048e25c8b98_91351663 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="bg-wight">
    <div class="eg-preloder">
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <h1>招聘</h1>
                            <span></span>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URI']->value;?>
/brand/dashboard">回主頁</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">招聘</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="job-post-area pt-120 mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-wrapper">
                            <form method="post" name="form1" action="" onSubmit="return check()">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title2">
                                            <h5>招聘資訊:</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="jobtitle">職稱*</label>
                                            <div class="input-area">
                                                <img src="assets/images/icon/company-2.svg " alt="">
                                                <input type="text" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label>職務類別*</label>
                                            <div class="input-area">
                                                <img src="assets/images/icon/category-2.svg" alt="">
                                                <input type="text" name="category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="vacancies">需求人數*</label>
                                            <div class="input-area">
                                                <img src="assets/images/icon/user-2.svg" alt="">
                                                <input type="text" name="vacancies">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <div class="salary-wrap">
                                                <label class="label">工作待遇*</label>
                                                <div class="input-area">
                                                    <img src="assets/images/icon/user-2.svg" alt="">
                                                    <input type="text" name="salary">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-25">
                                            <label for="experiences">條件要求*</label>
                                            <div class="input-area">
                                                <img src="assets/images/icon/email-2.svg" alt="">
                                                <input type="text" name="experience">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-inner mb-30">
                                            <label for="summernote1">工作內容*</label>
                                            <textarea name="description" id="summernote1"
                                                placeholder="Something Write Yourself...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                            <div class="form-group two">
                                                <input type="checkbox" id="html">
                                                <label for="html">Here, I accepted company terms & conditions.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-inner">
                                            <button class="primry-btn-2 lg-btn w-unset" type="submit">Post Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 頁尾 -->
        <?php $_smarty_tpl->_subTemplateRender("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- js -->
            <?php $_smarty_tpl->_subTemplateRender("file:includes/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
