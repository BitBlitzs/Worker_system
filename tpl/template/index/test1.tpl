<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
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
</script>

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
                                    <h5><a href="job-details.html">
                                            <{$result[sec1].title}>
                                        </a>
                                    </h5>
                                    <p><a href="company-details.html">
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
                    <div class="bookmark">
                        <i class="bi bi-bookmark-fill"></i>
                    </div>
                </div>
                <div class="job-type-apply">
                    <div class="apply-btn">
                        <a href="" class="custom-link" id=<{$result[sec1].id}>>
                            <span><img src="/assets/images/icon/apply-ellipse.svg" alt=""></span> 立即申請
                        </a>
                    </div>
                </div>
            </div>
        </div>
<{/section}>