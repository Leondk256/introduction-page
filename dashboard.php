<?php
include('header.php');

include('db_connection.php');
$conn = OpenCon();
$allCursusses = getAllCursussus($conn);
$conn->close();

$ec = 0;
foreach ($allCursusses as $cursus) {
    if ($cursus['behaald'] == 1) {
        $ec += $cursus['ec'];
    }
}
$percentageEc = ($ec / 60) * 100;
$percentageEc = (int) $percentageEc;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio Leon - Dashboard</title>
</head>

<body>
    <div class="container">
        <h1> Mijn dashboard </h1>
        <div class="row">
            <div class="col-12">
                <form method="post" action="">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Blok</th>
                                <th>Cursus</th>
                                <th>Toets</th>
                                <th>Weging</th>
                                <th>EC</th>
                                <th>Cijfer</th>
                            </tr>
                        </thead>
                        <?php foreach ($allCursusses as $cursus) { ?>
                            <tr>
                                <td><?= $cursus['blok'] ?></td>
                                <input type="hidden" value="<?= $cursus['id'] ?>" name="cursusId">
                                <td><?= $cursus['cursus'] ?></td>
                                <td><?= $cursus['toets'] ?></td>
                                <td><?= $cursus['weging'] ?>%</td>
                                <td style="<?php if ($cursus['behaald'] == 0) {
                                                    echo '';
                                                } else if ($cursus['behaald'] == 1) {
                                                    echo 'background-color: green';
                                                } else {
                                                    echo 'background-color: red';
                                                } ?>"><?= $cursus['ec'] ?></td>
                                <td><?= $cursus['cijfer'] ?></td>

                            </tr>

                        <?php } ?>
                    </table>
                </form>
            </div>
        </div>

        <!-- NBSA-bar -->
        <div class="row">
            <div class="col-12">
                <p> De bedoeling is om in het 1e schooljaar minimaal 45 EC te behalen. Het maximale is 60 EC en indien je dit behaald hebt, heb je je propedeuse. Niet behaalde EC's zijn herkansbaar.</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?= $percentageEc ?>%" aria-valuenow="<?= $percentageEc ?>" aria-valuemin="0" aria-valuemax="60"><?= $percentageEc ?>% (<?= $ec ?> EC)</div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                Relevante links
                <ul>
                    <li><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Onderwijs- en examenregelingen</a></li>
                    <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/PUB-Uitvoeringsregeling-2017%E2%80%932018-HBO-ICT-voltijd-v1.4.pdf">Uitvoeringsregeling </a></li>
                    <li><a href="https://learn.hz.nl/my/">Leer omgeving </a></li>
                    <li><a href="https://teams.microsoft.com/_#/school/conversations/Algemeen?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel">Teams omgeving </a></li>
                    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studievoortgang </a></li>
                    <li><a href="https://github.com/HZ-HBO-ICT">Github omgeving </a></li>
                </ul>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>