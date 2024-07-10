<header class="header-area style-1">
  <div class="header-main-logo d-lg-block d-none">
    <a href="<{$BASE_URI}>/index/index"><img alt="image" src="/assets/images/header1-logo.svg" /></a>
  </div>
  <div class="menu-topbar-area">
    <div class="menu-area">
      <div class="header-logo">
        <a href="index.html"><img alt="image" class="img-fluid" src="/assets/images/header1-logo.svg" /></a>
      </div>
      <div class="main-menu">
        <ul class="menu-list">
          <li class="menu-item-has-children">
            <a href="<{$BASE_URI}>/index/index">首頁</a>
          </li>
          <li class="menu-item-has-children">
            <a href="#" class="drop-down">訪客</a><i class="bi bi-plus dropdown-icon"></i>
            <ul class="sub-menu">
              <li><a href="<{$BASE_URI}>/index/job_list">Job Listing</a></li>
              <li><a href="job-details.html">Job Details</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <{if $smarty.session.UserID > 0 }>
          <{$smarty.session.UserName}>
          <{else}>
              <div class="nav-right d-flex jsutify-content-end align-items-center">
                <ul id="testid">
                  <li class="d-md-flex d-none">
                    <div class="sign-in-btn">
                      <a class="primry-btn-1 lg-btn" href="<{$BASE_URI}>/index/login">
                        登入</a>
                    </div>
                  </li>
                  <li class="d-md-flex d-none">
                    <div class="post-job-btn">
                      <a class="primry-btn-2 lg-btn" href="<{$BASE_URI}>/brand/posting">
                        立即發案</a>
                    </div>
                  </li>
                  <li class="d-md-flex d-none">
                    <div class="post-job-btn">
                      <a class="primry-btn-2 lg-btn" href="<{$BASE_URI}>/index/register">
                        註冊</a>
                    </div>
                  </li>
                </ul>
                <div class="sidebar-button mobile-menu-btn">
                  <i class="bi bi-list"></i>
                </div>
              </div>
            <{/if}>
    </div>
  </div>
</header>