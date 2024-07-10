<body class="bg-wight">
    <div class="eg-preloder">
    </div>

    <{include file="includes/header.tpl" }>

        <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <h1>招聘</h1>
                            <span></span>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<{$BASE_URI}>/brand/dashboard">回主頁</a></li>
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
        <{include file="includes/footer.tpl"}>

            <!-- js -->
            <{include file="includes/js.tpl" }>
</body>

</html>