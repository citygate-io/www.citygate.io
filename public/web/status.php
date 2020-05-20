<?php
$page_title = "Service Status";
$services = array(
    // array("Name", "Description", "success/critical", "incident"),
    array("ChirpStack", "LoRaWAN server", "success", ""),
    array("Grafana", "Data visualisation and dashboarding", "success", ""),
    array("InfluxDB", "Time-series data storage", "success", ""),
    array("Jenkins", "CI and automation system", "critical", ""),
    array("Keycloak", "Authentication and identity management", "success", ""),
    array("MQTT", "LoRaWAN message broker", "success", ""),
    array("Node-RED", "User-friendly application development", "success", ""),
    array("Prometheus", "Application monitoring", "critical", ""),
    array("Traefik", "Load balancing", "success", ""),
);

include_once '../includes/top.php';
?>

<div class="col-row m-page">
    <div class="article pbl size4of4">
        <h1>Service Status</h1>
        <p class="lead">Check the status of CityGate services here.</p>

        <?php foreach ($services as $s) { ?>
            <div class="panel-<?php echo($s[2]); ?> mvm">
                <h5><?php echo($s[0]); ?></h5>
                <p class="lead"><?php echo($s[1]); ?></p>
                <?php if ($s[2] == "critical") { ?>
                <p><?php echo($s[3]); ?></p>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
