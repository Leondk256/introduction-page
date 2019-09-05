<?php
include('header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Portfolio Leon - Profiel
    </title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-xl-6 col-12">
                <div class="row">
                    <div class="col-12 ml-5">
                        <img src="img/firstlook-foto.jpg" class="img-fluid" alt="Foto van Leon" width="600px;">
                    </div>
                    <div class="col-12 ml-5">
                        <div id="skillset">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-12">
                <div class="row ml-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Over mij</h5>
                            </div>
                            <ul>
                                <li>
                                    <b>Persoonlijke kenmerken </b>
                                </li>
                                <ul>
                                    <li> Sociaal </li>
                                    <li> Behulpzaam </li>
                                    <li> Begripvol </li>
                                </ul>
                            </ul>

                            <ul>
                                <li>
                                    <b>Interesses </b>
                                </li>
                                <ul>
                                    <li> Gamen </li>
                                    <ul>
                                        <li>
                                            RPG's/action RPG's
                                        </li>
                                        <li>
                                            Hack and slash
                                        </li>
                                        <li>
                                            Action-adventure
                                        </li>
                                    </ul>
                                    <li> Sporten </li>
                                    <ul>
                                        <li>
                                            Tennis
                                        </li>
                                        <li>
                                            Joggen
                                        </li>
                                    </ul>
                                    <li> Muziek luisteren </li>
                                    <ul>
                                        <li>
                                            Rock
                                        </li>
                                        <li>
                                            Metal
                                        </li>
                                        <li>
                                            Klassiek
                                        </li>
                                        <li>
                                            Pop
                                        </li>
                                        <li>
                                            Jazz
                                        </li>
                                    </ul>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('footer.php');
        ?>
    </div>
</body>

</html>

<script type="text/javascript">
    var object = [

        {
            'headline': 'HTML & CSS',
            'value': 8,
            'length': 10,
        },
        {

            'headline': 'JavaScript & jQuery',
            'value': 7,
            'length': 10,

        },
        {
            'headline': 'PHP',
            'value': 7,
            'length': 10,

        },
    ];

    $(document).ready(function() {

        $("#skillset").skillset({
            object: object,
            duration: 80
        });
    });
</script>