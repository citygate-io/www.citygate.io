<?php
$page_title = "Project Team";
$team = array(
    array("Adel Aneiba", "Lead Project Co-ordinator", "aaneiba.jpg", "Dr. Adel Aneiba is the lead academic on the project. He is head of the Centre for Networks and Cyber Security at the university."),
    array("Bruno Junior", "Network Engineer", "bjunior.jpg", "Bruno is the main network engineer. His dissertation is based on the private LoRaWAN backend."),
    array("Dalia El-Banna", "Researcher", "delbanna.jpg", "Dalia is our main researcher. She is a PhD student at the university, focussing on software-defined networks."),
    array("John Hayes", "Technical Manager", "jhayes.jpg", "John is a PhD student at the university, focussing on blockchain."),
    array("Mohammad Nour Al-baarini", "Project Staff Member", "malbaarini.jpg", "Mohammad is a visiting lecturer at the university."),
    array("Stephen Kinsey", "Data Analyst", "skinsey.jpg", "Stephen is a final year student at the university. He is responsible for writing methods of processing and analysing data received by the platform."),
    array("Waldo Cervantes", "Researcher", "wcervantes.jpg", "Waldo is a senior lecturer in Distributed Systems at the university."),
);
include_once '../includes/top.php';
?>

<div class="col-row m-page">
    <div class="article pbl left-col size4of4">
        <h1>CityGate Project Team</h1>
        <p class="lead">The CityGate project is made up of a diverse team of dedicated staff members and students, at varying stages of their degree courses.</p>
        <div class="relative">
            <ul class="no-bullets mln">
                <?php foreach ($team as $member) {
                echo("<li class='pvl clear-fix bb-line bw1 bc5'>");
                    echo("<div class='col-row'>");
                        echo("<div class='left size2of12'><img style='max-height: 128px;' class='person' alt='" . $member[0] . "' src='/assets/img/team/" . $member[2] . "'></img></div>");
                        echo("<div class='left size10of12'>");
                            echo("<div class='mls'>");
                                echo("<h5 class='mbm'>" . $member[0] . "</h5>");
                                echo("<p class='bold mbs'>" . $member[1] . "</p>");
                                echo("<p>" . $member[3] . "</p>");
                            echo("</div>");
                        echo("</div>");
                    echo("</div>");
                echo("</li>");
                } ?>
            </ul>
        </div>

    </div>
</div>

<?php include_once '../includes/bottom.php'; ?>
