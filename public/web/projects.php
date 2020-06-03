<?php
$page_title = "Projects";
$projects = array(
    // array("PROJECT NAME", "COMPANY (IF THERE IS ONE, OTHERWISE LEAVE BLANK BUT WITH QUOTES)"," <COMPANY URL (IF COMPANY)>", "COMPANY LOGO", "PROJECT LEAD", "DESCRIPTION", "STATUS"),
    array(
        "Customer Trajectory Monitoring",
        "Central England Co-Op",
        "https://centralengland.coop",
        "coop.png",
        "John Hayes",
        "Deploying sensors that will track customer trajectory and help to inform store layout and promotional decisions.",
        "Ongoing"
    ),
    array(
        "LoRaWAN Gateways as Remote Access Servers",
        "MultiTech",
        "https://www.multitech.com",
        "multitech.png",
        "Luke Tainton",
        "Companies are still using analogue modems to access network devices at remote locations such as branch offices. The current product offered by MultiTech has gone End of Life (EoL), and we have been asked to develop a replacement solution that allows for secure remote management of devices over an IP connection.",
        "Completed"
    ),
    array(
        "Inductive Loop Road Traffic Monitoring",
        "Birmingham City Council",
        "https://www.birmingham.gov.uk",
        "bcc.png",
        "Mohammad Nour Al-baarini",
        "An innovative, effective, and reliable end-to-end inductive loop monitoring solution using a low-cost dual-loop detection board integrated with LoRaWAN connectivity technology.",
        "Completed"
    )
);

include_once '../includes/top.php';
?>

<div class="col-row m-page">
    <div class="article pbl left-col size4of4">
        <h1>Our Projects</h1>
        <p class="lead">Birmingham City University prides itself on its strong industrial links, and this is proven both through the industrial placements that students undertake, and the accredited courses that the university runs. Our IoT Initiative hopes to take this further and create a community of academics, technologists, and customers who can work collaboratively to solve real-world problems using the Internet of Things.</p>
        <p class="lead">Interested in working with us? Use our <a href="/contact">contact form</a> to send us a message.</p>

        <?php foreach ($projects as $p) { ?>
        <div style="margin-bottom: 1%;" class="grey-box">
            <div class="j-slide-reveal collapsible closed pam brand-primary-bg-grey-light">
                <div class="clear-fix">
                    <abbr class="inline mrm size12of12 icon-plus-squared"></abbr>
                    <h5 class="man inline"><?php echo($p[0]); ?></h5>
                </div>
            </div>
            <div class="js-hidden j-slide-reveal-content phm">
                <div class="clear-fix pvm">
                    <div class="grid mtm">
                        <div class="left size3of4">
                            <?php if ($p[1] != "") {
                                echo("<b>Partnered with:</b><br><a href=" . $p[2] . ">" . $p[1] . "</a><br><br>");
                            } ?>
                            <?php if ($p[4] != "") {
                                echo("<b>Project Lead:</b><br>" . $p[4] . "<br><br>");
                            } ?>
                            <?php if ($p[6] != "") {
                                echo("<b>Status:</b><br>" . $p[6] . "<br><br>");
                            } ?>
                        </div>
                        <div class="right size1of4">
                            <?php if ($p[3] != "") {
                                echo("<center><img style='max-width: 100%;' src='/assets/img/companies/" . $p[3] . "'></center>");
                            } ?>
                        </div>
                    </div>
                    <div>
                        <?php echo("<p>" . $p[5] . "</p>"); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
