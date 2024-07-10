<body>
    <div class="eg-preloder">
    </div>

    <{include file="includes/header.tpl" }>

        <div class="dashboard-area company-dashboard pt-120 mb-120">
            <div class="container">
                <div class="row g-lg-4">

                    <{include file="includes/b_dash_bar.tpl" }>

                        <div class="col-lg-12">
                            <div class="dashboard-inner">
                                <div class="author-and-action-btn-area two mb-40">
                                    <div class="author-area two">
                                        <div class="author-img">
                                            <img src="/assets/images/bg/company-img2.png" alt="">
                                        </div>
                                        <div class="author-content">
                                            <span>Hello,</span>
                                            <h4>
                                                <{$smarty.session.UserName}>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="action-btn-group">
                                        <ul>
                                            <li><a href="company-profile.html"><span><img
                                                            src="/assets/images/icon/edit2.svg" alt=""></span>Edit
                                                    Profile</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="new-applied-job-area">
                                    <h5>New Applied List:</h5>
                                    <div class="table-wrapper2">
                                        <table class="eg-table table category-table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td data-label="Candidate Name">
                                                        <div class="employee-info">
                                                            <div class="employee-img">
                                                                <img src="/assets/images/bg/employee-img1.png" alt="">
                                                            </div>
                                                            <div class="employee-content">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">Mr.
                                                                    Willium Jacson</button>

                                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div
                                                                            class="row justify-content-center g-lg-4 gy-5 mb-90">
                                                                            <div class="col-lg-10">
                                                                                <div class="resume-area">
                                                                                    <div class="edit-resume-btn">
                                                                                        <a href="edit-profile.html">Edit
                                                                                            Resume
                                                                                            <svg width="12" height="12"
                                                                                                viewBox="0 0 12 12"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M11.8798 1.19201C11.9563 1.26957 11.9993 1.37462 11.9993 1.48414C11.9993 1.59365 11.9563 1.6987 11.8798 1.77627L11.0253 2.64024L9.3868 0.98512L10.2413 0.121149C10.3181 0.0435774 10.4223 0 10.5309 0C10.6395 0 10.7437 0.0435774 10.8205 0.121149L11.8798 1.19118V1.19201ZM10.4461 3.22449L8.8076 1.56938L3.22607 7.20836C3.18098 7.2539 3.14704 7.30944 3.12694 7.37056L2.46745 9.36829C2.45549 9.40471 2.45379 9.44377 2.46254 9.48111C2.4713 9.51844 2.49016 9.55259 2.51702 9.57972C2.54388 9.60685 2.57768 9.62591 2.61464 9.63475C2.65161 9.64359 2.69028 9.64188 2.72633 9.62979L4.70399 8.96361C4.76442 8.94355 4.8194 8.90955 4.86456 8.8643L10.4461 3.22532V3.22449Z" />
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M0 10.7585C0 11.0878 0.12947 11.4035 0.359928 11.6363C0.590385 11.8691 0.902953 11.9999 1.22887 11.9999H10.2406C10.5665 11.9999 10.8791 11.8691 11.1095 11.6363C11.34 11.4035 11.4694 11.0878 11.4694 10.7585V5.79319C11.4694 5.68345 11.4263 5.5782 11.3495 5.50061C11.2727 5.42301 11.1685 5.37941 11.0598 5.37941C10.9512 5.37941 10.847 5.42301 10.7702 5.50061C10.6934 5.5782 10.6502 5.68345 10.6502 5.79319V10.7585C10.6502 10.8683 10.607 10.9735 10.5302 11.0511C10.4534 11.1287 10.3492 11.1723 10.2406 11.1723H1.22887C1.12023 11.1723 1.01604 11.1287 0.939222 11.0511C0.862403 10.9735 0.819246 10.8683 0.819246 10.7585V1.6554C0.819246 1.54566 0.862403 1.44041 0.939222 1.36281C1.01604 1.28522 1.12023 1.24162 1.22887 1.24162H6.55397C6.66261 1.24162 6.7668 1.19803 6.84362 1.12043C6.92044 1.04283 6.96359 0.937583 6.96359 0.827842C6.96359 0.718101 6.92044 0.612854 6.84362 0.535256C6.7668 0.457657 6.66261 0.414063 6.55397 0.414062H1.22887C0.902953 0.414063 0.590385 0.544846 0.359928 0.777642C0.12947 1.01044 0 1.32618 0 1.6554V10.7585Z" />
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="row g-4 mb-40">
                                                                                        <div class="col-lg-6">
                                                                                            <div class="author-area">
                                                                                                <div class="author-img">
                                                                                                    <img src="/assets/images/bg/resume-author.png"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="name-degination">
                                                                                                    <h4>Mr. Jacoline
                                                                                                        Frankly
                                                                                                    </h4>
                                                                                                    <span>UI/UX
                                                                                                        Engineer</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div class="contact-area">
                                                                                                <h4>Contact Info</h4>
                                                                                                <ul>
                                                                                                    <li>Phone:<a
                                                                                                            href="#">+880-177
                                                                                                            443 5455
                                                                                                            <span><img
                                                                                                                    src="/assets/images/icon/phone-5.svg"
                                                                                                                    alt=""></span></a>
                                                                                                    </li>
                                                                                                    <li>Email:<a
                                                                                                            href="#"><span
                                                                                                                class="__cf_email__"
                                                                                                                data-cfemail="b4dddad2dbf4d1ccd5d9c4d8d19ad7dbd9">[email&#160;protected]</span>
                                                                                                            <span><img
                                                                                                                    src="/assets/images/icon/envlop-5.svg"
                                                                                                                    alt=""></span></a>
                                                                                                    </li>
                                                                                                    <li>Website:<a
                                                                                                            href="#">www.infositeexample.com
                                                                                                            <span><img
                                                                                                                    src="/assets/images/icon/web-5.svg "
                                                                                                                    alt=""></span></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Career Objective
                                                                                                </h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div class="description">
                                                                                                <p>I'm a passionate
                                                                                                    UI/UX
                                                                                                    designer and can
                                                                                                    bring
                                                                                                    innovative ideas &
                                                                                                    concepts
                                                                                                    to life for
                                                                                                    client-based
                                                                                                    design projects. I
                                                                                                    have
                                                                                                    more
                                                                                                    than 3 years of
                                                                                                    design
                                                                                                    experience in
                                                                                                    digital/e-commerce.
                                                                                                    I
                                                                                                    experienced at
                                                                                                    tackle
                                                                                                    various needs from
                                                                                                    landing
                                                                                                    page designs, web
                                                                                                    app
                                                                                                    interfaces. I have
                                                                                                    skills in
                                                                                                    User Experience
                                                                                                    Design
                                                                                                    (UXD), user-centered
                                                                                                    Design,
                                                                                                    Interaction and
                                                                                                    Visual
                                                                                                    Design for websites,
                                                                                                    applications, web,
                                                                                                    and
                                                                                                    mobile products,
                                                                                                    wireframes,
                                                                                                    mock-ups,
                                                                                                    qualitative
                                                                                                    and
                                                                                                    quantitative user
                                                                                                    studies,
                                                                                                    usability analysis,
                                                                                                    and
                                                                                                    informal usability
                                                                                                    audits.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Personal Information
                                                                                                </h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div class="row g-4">
                                                                                                <div
                                                                                                    class="col-lg-6 devaider1 position-relative">
                                                                                                    <div
                                                                                                        class="informations">
                                                                                                        <ul>
                                                                                                            <li><span>Father’s
                                                                                                                    Name:</span>
                                                                                                                Mr.
                                                                                                                Norman
                                                                                                                Frankly
                                                                                                            </li>
                                                                                                            <li><span>Date
                                                                                                                    of
                                                                                                                    Birth:</span>
                                                                                                                03
                                                                                                                January,1998
                                                                                                            </li>
                                                                                                            <li><span>Nationality:</span>
                                                                                                                Bangladeshi
                                                                                                            </li>
                                                                                                            <li><span>Marital
                                                                                                                    Status:</span>
                                                                                                                Unmarried
                                                                                                            </li>
                                                                                                            <li><span>Height:</span>
                                                                                                                5’ 5’’
                                                                                                            </li>
                                                                                                            <li><span>Blood
                                                                                                                    Group:</span>
                                                                                                                O ve+
                                                                                                            </li>
                                                                                                            <li><span>Permanent
                                                                                                                    Address:</span>
                                                                                                                Village:
                                                                                                                Mirpur-12
                                                                                                                Block-C,
                                                                                                                Thana:
                                                                                                                Pallavi,
                                                                                                                District:
                                                                                                                Dhaka,
                                                                                                                Division:
                                                                                                                Dhaka
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-6 pl-40">
                                                                                                    <div
                                                                                                        class="informations d-flex justify-content-end">
                                                                                                        <ul>
                                                                                                            <li><span>Mother’s
                                                                                                                    Name:</span>
                                                                                                                Mrs.
                                                                                                                Macoline
                                                                                                                Frankly
                                                                                                            </li>
                                                                                                            <li><span>National
                                                                                                                    ID:</span>
                                                                                                                88 9919
                                                                                                                6712
                                                                                                                8762
                                                                                                            </li>
                                                                                                            <li><span>Religion:</span>
                                                                                                                Islam
                                                                                                            </li>
                                                                                                            <li><span>Gender:</span>
                                                                                                                Male
                                                                                                            </li>
                                                                                                            <li><span>Weight:</span>
                                                                                                                75 KG
                                                                                                            </li>
                                                                                                            <li><span>Height:</span>
                                                                                                                5’ 5’’
                                                                                                            </li>
                                                                                                            <li><span>Present
                                                                                                                    Address:</span>
                                                                                                                Village:
                                                                                                                Mirpur
                                                                                                                DOSH,
                                                                                                                Block-C,
                                                                                                                Avenue-02,
                                                                                                                Thana:
                                                                                                                Pallavi,
                                                                                                                District:
                                                                                                                Dhaka,
                                                                                                                Division:
                                                                                                                Dhaka.
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Educational
                                                                                                    Qualification
                                                                                                </h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="educational-qualification mb-30">
                                                                                                <div
                                                                                                    class="passing-year">
                                                                                                    <p><span>01.</span>April,
                                                                                                        2016- May, 2020
                                                                                                    </p>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="education-dt">
                                                                                                    <h6>Royals Republic
                                                                                                        Science
                                                                                                        & Technology
                                                                                                        University
                                                                                                    </h6>
                                                                                                    <ul>
                                                                                                        <li><span>Education
                                                                                                                Level:</span>
                                                                                                            Graduation
                                                                                                        </li>
                                                                                                        <li><span>My
                                                                                                                Major:</span>
                                                                                                            Bachelor
                                                                                                            Degree
                                                                                                            In
                                                                                                            CSE</li>
                                                                                                        <li><span>Result/GPA:</span>
                                                                                                            3.75/4.00
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="educational-qualification">
                                                                                                <div
                                                                                                    class="passing-year">
                                                                                                    <p><span>02.</span>June,
                                                                                                        2014- April,
                                                                                                        2016
                                                                                                    </p>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="education-dt">
                                                                                                    <h6>International
                                                                                                        Collegiate
                                                                                                        School & College
                                                                                                    </h6>
                                                                                                    <ul>
                                                                                                        <li><span>Education
                                                                                                                Level:</span>
                                                                                                            HSC</li>
                                                                                                        <li><span>My
                                                                                                                Major:</span>
                                                                                                            Science</li>
                                                                                                        <li><span>Result/GPA:</span>
                                                                                                            4.96/5.00
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Career Application
                                                                                                </h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div class="row g-4 ">
                                                                                                <div
                                                                                                    class="col-lg-6 devaider1 position-relative">
                                                                                                    <div
                                                                                                        class="informations">
                                                                                                        <ul>
                                                                                                            <li><span>Current
                                                                                                                    Job
                                                                                                                    Place:</span>
                                                                                                                Norland
                                                                                                                Tech
                                                                                                                of
                                                                                                                Industry
                                                                                                            </li>
                                                                                                            <li><span>Position:</span>
                                                                                                                UI/UX
                                                                                                                Engineer
                                                                                                            </li>
                                                                                                            <li><span>Experiences:</span>
                                                                                                                3 Years
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-6 pl-40">
                                                                                                    <div
                                                                                                        class="informations">
                                                                                                        <ul>
                                                                                                            <li><span>Current
                                                                                                                    Salary:</span>
                                                                                                                30000/=
                                                                                                            </li>
                                                                                                            <li><span>Expected
                                                                                                                    Salary:</span>
                                                                                                                40000/=
                                                                                                            </li>
                                                                                                            <li><span>Available:</span>
                                                                                                                Full
                                                                                                                Time
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Professionals
                                                                                                    Information
                                                                                                </h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="educational-qualification mb-30">
                                                                                                <div
                                                                                                    class="passing-year">
                                                                                                    <p><span>01.</span>April,
                                                                                                        2021- May, 2022
                                                                                                    </p>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="education-dt">
                                                                                                    <h6>Bistro.Tech
                                                                                                        Group of
                                                                                                        Industry</h6>
                                                                                                    <p class="position">
                                                                                                        <span>Position:</span>
                                                                                                        UI/UX Engineer (
                                                                                                        Full-Time)
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="responsibility">
                                                                                                        <h6>Responsibility:
                                                                                                        </h6>
                                                                                                        <ul>
                                                                                                            <li>Creating
                                                                                                                high
                                                                                                                quality
                                                                                                                landing
                                                                                                                pages
                                                                                                                optimized
                                                                                                                for
                                                                                                                client
                                                                                                                website
                                                                                                                brands.
                                                                                                            </li>
                                                                                                            <li>Creating
                                                                                                                e-commerce
                                                                                                                interfaces,
                                                                                                                design
                                                                                                                enhancements,
                                                                                                                and
                                                                                                                overall
                                                                                                                improved
                                                                                                                user
                                                                                                                experience
                                                                                                                of
                                                                                                                existing
                                                                                                                sites
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="educational-qualification">
                                                                                                <div
                                                                                                    class="passing-year">
                                                                                                    <p><span>02.</span>April,
                                                                                                        2022- Continuing
                                                                                                    </p>
                                                                                                    <span></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="education-dt">
                                                                                                    <h6>Norland Tech of
                                                                                                        Industry
                                                                                                    </h6>
                                                                                                    <p class="position">
                                                                                                        <span>Position:</span>
                                                                                                        UI/UX Engineer (
                                                                                                        Full-Time)
                                                                                                    </p>
                                                                                                    <div
                                                                                                        class="responsibility">
                                                                                                        <h6>Responsibility:
                                                                                                        </h6>
                                                                                                        <ul>
                                                                                                            <li>Creating
                                                                                                                high
                                                                                                                quality
                                                                                                                landing
                                                                                                                pages
                                                                                                                optimized
                                                                                                                for
                                                                                                                client
                                                                                                                website
                                                                                                                brands.
                                                                                                            </li>
                                                                                                            <li>Creating
                                                                                                                e-commerce
                                                                                                                interfaces,
                                                                                                                design
                                                                                                                enhancements,
                                                                                                                and
                                                                                                                overall
                                                                                                                improved
                                                                                                                user
                                                                                                                experience
                                                                                                                of
                                                                                                                existing
                                                                                                                sites
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Special Skills</h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div class="tag-area">
                                                                                                <ul>
                                                                                                    <li>Web Development,
                                                                                                    </li>
                                                                                                    <li>UI/UX Designer,
                                                                                                    </li>
                                                                                                    <li>React
                                                                                                        Development.
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="single-information-area">
                                                                                            <div class="section-title">
                                                                                                <h6>Social Network</h6>
                                                                                                <div class="dash"></div>
                                                                                            </div>
                                                                                            <div class="social-area">
                                                                                                <ul>
                                                                                                    <li><a
                                                                                                            href="https://www.facebook.com/">Facebook</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="https://twitter.com/">Twitter</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="https://www.linkedin.com/">Linkedin</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="https://www.pinterest.com/">Pinterest</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="https://dribbble.com/">Dribbble</a>
                                                                                                    </li>
                                                                                                    <li><a
                                                                                                            href="https://www.behance.net/">Behance</a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="declaration-area">
                                                                                            <h6>Declaration &
                                                                                                Authentication-
                                                                                            </h6>
                                                                                            <p>I do hereby declare that
                                                                                                the
                                                                                                information given above
                                                                                                is
                                                                                                true
                                                                                                of my knowledge.</p>
                                                                                        </div>
                                                                                        <div class="gratitude-area">
                                                                                            <span>Yours Faithful,</span>
                                                                                            <h6>Jacoline Frankly</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dowunload-btn pt-50">
                                                                                    <a class="primry-btn-2 lg-btn"
                                                                                        href="#">Download CV</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span><img src="assets/images/icon/company-2.svg"
                                                                        alt="">Internation Colliegate University</span>
                                                                <p><span>Applied On:</span> 02 April, 2023</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-label="Carrer Summary">
                                                        <div class="carrer-summary">
                                                            <h6>Colliegate Ltd <span>(Teaching Assistant)</span></h6>
                                                            <ul>
                                                                <li><span>Experience:</span> 2+ Years</li>
                                                                <li><span>Salary:</span> $800/ Per Month</li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td data-label="Actions">
                                                        <div class="action-btn-group">
                                                            <ul>
                                                                <li><button><img
                                                                            src="assets/images/icon/shortlist-icon.svg"
                                                                            alt=""> Shortlist</button></li>
                                                                <li><button class="reject"><img
                                                                            src="assets/images/icon/rejected-icon.svg"
                                                                            alt="">
                                                                        Rejected</button></li>
                                                            </ul>
                                                        </div>
                                                    </td>
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
        <{include file="includes/footer.tpl"}>

            <!-- js -->
            <{include file="includes/js.tpl" }>
</body>

</html>