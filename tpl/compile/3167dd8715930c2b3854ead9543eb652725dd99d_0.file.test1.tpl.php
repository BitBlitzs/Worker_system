<?php
/* Smarty version 4.3.4, created on 2023-12-06 14:10:18
  from 'c:\xampp\htdocs\tpl\template\index\test1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6570104aac7662_15200058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3167dd8715930c2b3854ead9543eb652725dd99d' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\index\\test1.tpl',
      1 => 1701842999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6570104aac7662_15200058 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("a.custom-link").click(function(event) {
            event.preventDefault(); // Prevent the default behavior of the link
            var valueToSend = $(this).attr("id"); // Get the ID of the clicked link
            $.get("test", { id: valueToSend }, function(data, status) {
                alert("数据: " + data + "\n状态: " + status);
                // You can do something else with the data here, like updating the HTML
            });
        });
    });
<?php echo '</script'; ?>
>

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
                                    <h5><a href="job-details.html">
                                            <?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['title'];?>

                                        </a>
                                    </h5>
                                    <p><a href="company-details.html">
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
                    <div class="bookmark">
                        <i class="bi bi-bookmark-fill"></i>
                    </div>
                </div>
                <div class="job-type-apply">
                    <div class="apply-btn">
                        <a href="" class="custom-link" id=<?php echo $_smarty_tpl->tpl_vars['result']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'];?>
>
                            <span><img src="/assets/images/icon/apply-ellipse.svg" alt=""></span> 立即申請
                        </a>
                    </div>
                </div>
            </div>
        </div>
<?php
}
}
}
}
