<?php $this->load->view('template/body_atas'); ?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>

            <div class="container">
                <!-- The Sign-in button. This will run `queryReports()` on success. -->
                <p class="g-signin2" data-onsuccess="queryReports"></p>

                <!-- The API response will be printed here. -->
                <textarea cols="80" rows="20" id="query-output"></textarea>
            </div>

            <!-- End of Topbar -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<script>
    // Replace with your view ID.
    var VIEW_ID = '231578076';

    // Query the API and print the results to the page.
    function queryReports() {
        gapi.client.request({
            path: '/v4/reports:batchGet',
            root: 'https://analyticsreporting.googleapis.com/',
            method: 'POST',
            body: {
                reportRequests: [{
                    viewId: VIEW_ID,
                    dateRanges: [{
                        startDate: '7daysAgo',
                        endDate: 'today'
                    }],
                    metrics: [{
                        expression: 'ga:sessions'
                    }]
                }]
            }
        }).then(displayResults, console.error.bind(console));
    }

    function displayResults(response) {
        var formattedJson = JSON.stringify(response.result, null, 2);
        document.getElementById('query-output').value = formattedJson;
    }
</script>

<!-- Load the JavaScript API client and Sign-in library. -->
<script src="https://apis.google.com/js/client:platform.js"></script>
<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");
</script>
<?php $this->load->view('template/body_bawah') ?>