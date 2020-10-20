<?php $this->load->view('template/body_atas'); ?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php $this->load->view("template/sidebar"); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php $this->load->view("template/top"); ?>

            <section id="auth-button"></section>
            <section id="view-selector"></section>
            <section id="timeline"></section>

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
    (function(w, d, s, g, js, fjs) {
        g = w.gapi || (w.gapi = {});
        g.analytics = {
            q: [],
            ready: function(cb) {
                this.q.push(cb)
            }
        };
        js = d.createElement(s);
        fjs = d.getElementsByTagName(s)[0];
        js.src = 'https://apis.google.com/js/platform.js';
        fjs.parentNode.insertBefore(js, fjs);
        js.onload = function() {
            g.load('analytics')
        };
    }(window, document, 'script'));
</script>
<script>
    gapi.analytics.ready(function() {

        // Step 3: Authorize the user.

        var CLIENT_ID = '986948871783-fbh6k0jagsf5v2cm1nph92vossmd2igf.apps.googleusercontent.com';

        gapi.analytics.auth.authorize({
            container: 'auth-button',
            clientid: CLIENT_ID,
        });

        // Step 4: Create the view selector.

        var viewSelector = new gapi.analytics.ViewSelector({
            container: 'view-selector'
        });

        // Step 5: Create the timeline chart.

        var timeline = new gapi.analytics.googleCharts.DataChart({
            reportType: 'ga',
            query: {
                'dimensions': 'ga:date',
                'metrics': 'ga:sessions',
                'start-date': '30daysAgo',
                'end-date': 'yesterday',
            },
            chart: {
                type: 'LINE',
                container: 'timeline'
            }
        });

        // Step 6: Hook up the components to work together.

        gapi.analytics.auth.on('success', function(response) {
            viewSelector.execute();
        });

        viewSelector.on('change', function(ids) {
            var newIds = {
                query: {
                    ids: ids
                }
            }
            timeline.set(newIds).execute();
        });
    });
</script>
<script>
    $("#navbar-user").remove();
    $("body").attr("id", "page-top");
</script>
<?php $this->load->view('template/body_bawah') ?>