<?php $page_title = "Internal Server Error"; ?>
<?php include_once '../../includes/top.php'; ?>

<div class="col-row m-page">
    <div class="article pbl left-col size4of4">
        <h1>Whoops!</h1>
        <h2>Error 500 - Internal server error</h2>
        <h3>There's been a problem carrying out the request. Please try again later.</h3>
        <p class="lead">If you feel that you've reached this page in error, please contact us using <a href="/contact">this</a> page, choosing <i>Website Bug / Request</i> as the Query Type.</p>
        <?php if ($err_detail) {
            echo('<p>' . $err_detail . '</p>');
        }
        ?>
    </div>
</div>

<?php include_once '../../includes/bottom.php'; ?>