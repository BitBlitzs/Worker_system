<body>
  <div class="inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-content text-center">
            <h1>Job Listing</h1>
            <span></span>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<{$BASE_URI}>/brand/dashboard">回主頁</a></li>
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
              <{section name=sec1 loop=$result}>
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
                                    <{$result[sec1].title}>
                                  </a></h5>
                                <p><a href="#">
                                    <{$result[sec1].post_brand}>
                                  </a></p>
                              </div>
                            </div>
                          </div>
                          <div class="job-discription">
                            <ul>
                              <li>
                                <p><span class="title">工作待遇:</span>
                                  <{$result[sec1].salary}>
                                </p>
                              </li>
                              <li>
                                <p><span class="title">需求人數:</span>
                                  <{$result[sec1].vacancies}>
                                </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <{/section}>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>