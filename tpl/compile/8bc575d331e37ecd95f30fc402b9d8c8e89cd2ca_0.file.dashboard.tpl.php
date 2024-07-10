<?php
/* Smarty version 4.3.4, created on 2023-12-06 17:13:57
  from 'c:\xampp\htdocs\tpl\template\freelancer\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65703b55616f05_18516163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc575d331e37ecd95f30fc402b9d8c8e89cd2ca' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\freelancer\\dashboard.tpl',
      1 => 1701504427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/header.tpl' => 1,
    'file:includes/f_dash_bar.tpl' => 1,
    'file:includes/footer.tpl' => 1,
    'file:includes/js.tpl' => 1,
  ),
),false)) {
function content_65703b55616f05_18516163 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
  <div class="eg-preloder">
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="dashboard-area pt-120 mb-120">
      <div class="container">
        <div class="row g-lg-4 gy-5 mb-90">
          <?php $_smarty_tpl->_subTemplateRender("file:includes/f_dash_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="col-lg-9">
              <div class="dashboard-inner">
                <div class="author-area">
                  <div class="author-img">
                    <img src="/assets/images/bg/author1.png" alt="">
                  </div>
                  <div class="author-content">
                    <span>Hello, I’m</span>
                    <h4>
                      <?php echo $_SESSION['UserName'];?>

                    </h4>
                  </div>
                </div>
                <div class="counter-area">
                  <div class="row g-lg-4 g-md-5 gy-5 justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                      <div class="counter-single">
                        <div class="counter-icon">
                          <img src="/assets/images/icon/tt-applied.svg" alt="image">
                        </div>
                        <div class="coundown">
                          <p>Total Applied</p>
                          <div class="d-flex align-items-center">
                            <h3 class="odometer">
                              250
                            </h3>
                            <span>+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="counter-single two">
                        <div class="counter-icon">
                          <img src="/assets/images/icon/save-job.svg" alt="image">
                        </div>
                        <div class="coundown">
                          <p>Saved Jobs</p>
                          <div class="d-flex align-items-center">
                            <h3 class="odometer">
                              150
                            </h3>
                            <span>+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="counter-single three">
                        <div class="counter-icon">
                          <img src="/assets/images/icon/massage.svg" alt="image">
                        </div>
                        <div class="coundown">
                          <p>Message</p>
                          <div class="d-flex align-items-center">
                            <h3 class="odometer">
                              120
                            </h3>
                            <span>+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="counter-single four">
                        <div class="counter-icon">
                          <img src="/assets/images/icon/cv-review.svg" alt="image">
                        </div>
                        <div class="coundown">
                          <p>Review CV</p>
                          <div class="d-flex align-items-center" id="Applied">
                            <h3 class="odometer">
                              500
                            </h3>
                            <span>+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-wrapper">
                  <h5 class="title">Current Applied Jobs:</h5>
                  <div class="scroll-table">
                    <table class="eg-table table category-table mb-0">
                      <thead>
                        <tr>
                          <th>Job Tittle</th>
                          <th>Apply Date</th>
                          <th>Company</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-label="Job Title">
                            <div class="company-info">
                              <div class="logo">
                                <img src="/assets/images/bg/company-logo/company-06.png" alt="">
                              </div>
                              <div class="company-details">
                                <div class="top">
                                  <h6><a href="job-details.html">Senior UI/UX Designer</a></h6>
                                  <span><img src="/assets/images/icon/calender2.svg" alt=""> 1 days ago</span>
                                </div>
                                <ul>
                                  <li><img src="/assets/images/icon/location.svg" alt="">New-York, USA</li>
                                  <li>
                                    <img src="/assets/images/icon/arrow2.svg" alt="">
                                    <p><span class="title">Salary:</span> $60-$90 / <span class="time">Per Hour</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td data-label="Apply Job">03/07/2022</td>
                          <td data-label="Company"><a class="view-btn" href="company-details.html">Tech.Bath Com... </a>
                          </td>
                          <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button></td>
                        </tr>
                        <tr>
                          <td data-label="Job Title">
                            <div class="company-info">
                              <div class="logo">
                                <img src="assets/images/bg/company-logo/company-02.png" alt="">
                              </div>
                              <div class="company-details">
                                <div class="top">
                                  <h6><a href="job-details.html">React JS Developer</a></h6>
                                  <span><img src="assets/images/icon/calender2.svg" alt=""> 1 days ago</span>
                                </div>
                                <ul>
                                  <li><img src="assets/images/icon/location.svg" alt="">Dhaka, Bangladesh</li>
                                  <li>
                                    <img src="assets/images/icon/arrow2.svg" alt="">
                                    <p><span class="title">Salary:</span> $80-$100 / <span class="time">Per Hour</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td data-label="Apply Job">07/07/2022</td>
                          <td data-label="Company"><a class="view-btn" href="company-details.html">Gangster Group</a>
                          </td>
                          <td data-label="Status"><button class="eg-btn yellow-btn">Interview</button></td>
                        </tr>
                        <tr>
                          <td data-label="Job Title">
                            <div class="company-info">
                              <div class="logo">
                                <img src="assets/images/bg/company-logo/company-03.png" alt="">
                              </div>
                              <div class="company-details">
                                <div class="top">
                                  <h6><a href="job-details.html">WordPress Developer</a></h6>
                                  <span><img src="assets/images/icon/calender2.svg" alt=""> 2 days ago</span>
                                </div>
                                <ul>
                                  <li><img src="assets/images/icon/location.svg" alt="">West London, UK</li>
                                  <li>
                                    <img src="assets/images/icon/arrow2.svg" alt="">
                                    <p><span class="title">Salary:</span> $30K-$40K / <span class="time">Monthly</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td data-label="Apply Job">10/07/2022</td>
                          <td data-label="Company"><a class="view-btn" href="company-details.html">Zoomly.Co Ltd</a>
                          </td>
                          <td data-label="Status"><button class="eg-btn orenge-btn">Canceled</button></td>
                        </tr>
                        <tr>
                          <td data-label="Job Title">
                            <div class="company-info">
                              <div class="logo">
                                <img src="assets/images/bg/company-logo/company-04.png" alt="">
                              </div>
                              <div class="company-details">
                                <div class="top">
                                  <h6><a href="job-details.html">Mern-Stack Developer</a></h6>
                                  <span><img src="assets/images/icon/calender2.svg" alt=""> 1 week ago</span>
                                </div>
                                <ul>
                                  <li><img src="assets/images/icon/location.svg" alt="">New-York, USA</li>
                                  <li>
                                    <img src="assets/images/icon/arrow2.svg" alt="">
                                    <p><span class="title">Salary:</span> $20-$50 / <span class="time">Per Hour</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td data-label="Apply Job">13/07/2022</td>
                          <td data-label="Company"><a class="view-btn" href="company-details.html">Marko-land Ltd</a>
                          </td>
                          <td data-label="Status"><button class="eg-btn purple-btn">Viewed</button></td>
                        </tr>
                        <tr>
                          <td data-label="Job Title">
                            <div class="company-info">
                              <div class="logo">
                                <img src="assets/images/bg/company-logo/company-05.png" alt="">
                              </div>
                              <div class="company-details">
                                <div class="top">
                                  <h6><a href="job-details.html">PHP Developer</a></h6>
                                  <span><img src="assets/images/icon/calender2.svg" alt=""> 2 week ago</span>
                                </div>
                                <ul>
                                  <li><img src="assets/images/icon/location.svg" alt="">New-York, USA</li>
                                  <li>
                                    <img src="assets/images/icon/arrow2.svg" alt="">
                                    <p><span class="title">Salary:</span> $40K-$60K / <span class="time">Per
                                        Month</span>
                                    </p>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </td>
                          <td data-label="Apply Job">18/08/2022</td>
                          <td data-label="Company"><a class="view-btn" href="company-details.html">Bistro.Tech Group</a>
                          </td>
                          <td data-label="Status"><button class="eg-btn green-btn">Success</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
</body><?php }
}
