<?php
$page_title = "Service Status";
$services = array(
    // array("Name", "Description", "success/critical", "incident"),
    array("ChirpStack", "LoRaWAN server", "success", ""),
    array("Grafana", "Data visualisation and dashboarding", "critical", "Grafana is currently offline due to an unforseen fault."),
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

        <?php foreach ($services as $s) {
            echo("<div class='panel-" . $s[2] . " mvm'>");
                echo("<h5>" . $s[0] . "</h5>");
                echo("<p class='lead'>" . $s[1] . "</p>");
                if ($s[2] == "critical") {
                    echo("<p>" . $s[3] . "</p>");
                }
            echo("</div>");
        } ?>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
