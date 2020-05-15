<?php
$page_title = "Jisc Heatmaps";
$maps = array(
    array("People Counting", "people.html"),
    array("Electricity Usage", "lightson.html"),
    array("Air Quality", "airquality.html"),
);
include_once '../includes/top.php';
?>

<div class="col-row m-page">
    <div class="article pbl left-col size4of4" style="width: 100%">
        <h1>Jisc IoT Hackathon</h1>
        <p class="lead">Our idea: Using Bluetooth sensors, ambient light sensors, and gas sensors to provide various data to the University.</p>
        <p>This information can help the University find out:
            <ul>
                <li>How much a room is being utilised</li>
                <li>If lights are being left switched on in empty rooms</li>
                <li>The status of air quality on campus and in surrounding areas</li>
            </ul>
            This could be used to save the University money on building costs, and to provide useful information to researchers (does bad air quality affect student performance?).
        </p>
        
        <?php foreach ($maps as $m) { ?>
        <div style="margin-bottom: 1%;" class="grey-box">
            <div class="j-slide-reveal collapsible closed pam brand-primary-bg-grey-light">
                <div class="clear-fix">
                    <abbr class="inline mrm size12of12 icon-plus-squared"></abbr>
                    <h5 class="man inline"><?php echo($m[0]); ?></h5>
                </div>
            </div>
            <div class="js-hidden j-slide-reveal-content phm">
                <div class="clear-fix pvm">
                    <iframe height="500" src="/assets/hm/pages/<?php echo($m[1]); ?>"></iframe>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
