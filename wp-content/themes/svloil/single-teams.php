<?php

get_header();

// fields & field items
$teamPhoto_field = get_field('teamphoto');
$teamLead_field = get_field('teammanagement');

if (isset($teamPhoto_field['url'])) {
    $teamPhoto_URL = $teamPhoto_field['url'];
}

$shirtSponsor_field = get_field('shirtsponsor');
if ($shirtSponsor_field) {
    $shirtSponsor_logoUrl = get_the_post_thumbnail_url($shirtSponsor_field->ID);
}

$clothingSponsor_field = get_field('clothingsponsor');
if ($clothingSponsor_field) {
    $clothingSponsor_logoUrl = get_the_post_thumbnail_url($clothingSponsor_field->ID);
}

$teamCode = get_field('teamcode');
$regularCode = get_field('leaguecode');
?>
    <script>
        window.onload = function () {
            add_ids();
        };

        function add_ids() {
            if (document.getElementsByClassName('poulestand')) {
                const aboveDivStand = document.getElementById("teamRanking");
                const theTableStand = aboveDivStand.getElementsByTagName("table")[0];
                const theTableStand_name = theTableStand.className.split(' ')[1];

                if (theTableStand_name === 'poulestand') {
                    const theTableStand_div = document.getElementsByClassName(theTableStand_name)[0];
                    theTableStand_div.id = "teamRanking";
                    theTableStand_div.classList.add('table');
                }
            }

            if (document.getElementsByClassName('poule-programma') || document.getElementsByClassName('programma')) {
                const aboveDiv_programMobile = document.getElementById("resultMobile");
                const theTable_programMobile = aboveDiv_programMobile.getElementsByTagName("table")[1];

                if (theTable_programMobile) {
                    const theTable_programMobile_name = theTable_programMobile.className.split(' ')[1];

                    if (theTable_programMobile_name === 'poule-programma'
                        || theTable_programMobile_name === 'programma') {
                        const theTable_programMobile_div = aboveDiv_programMobile.getElementsByClassName(theTable_programMobile_name)[0];
                        theTable_programMobile_div.id = "programsMobile";
                        theTable_programMobile_div.classList.add('table');
                    }
                }
                const aboveDiv_programTablet = document.getElementById("resultTablet");
                const theTable_programTablet = aboveDiv_programTablet.getElementsByTagName("table")[1];

                if (theTable_programTablet) {
                    const theTable_programTablet_name = theTable_programTablet.className.split(' ')[1];

                    if (theTable_programTablet_name === 'poule-programma'
                        || theTable_programTablet_name === 'programma') {
                        const theTable_programTablet_div = aboveDiv_programTablet.getElementsByClassName(theTable_programTablet_name)[0];
                        theTable_programTablet_div.id = "programsTablet";
                        theTable_programTablet_div.classList.add('table');
                    }
                }
            }

            if (document.getElementsByClassName('uitslagen')) {
                const aboveDivMobile = document.getElementById("resultMobile");
                const theTableMobile = aboveDivMobile.getElementsByTagName("table")[0];
                if (theTableMobile) {
                    theTableMobile.id = "resultsMobile";
                }

                const aboveDivTablet = document.getElementById("resultTablet");
                const theTableTablet = aboveDivTablet.getElementsByTagName("table")[0];
                if (theTableTablet) {
                    theTableTablet.id = "resultsTablet";
                }
            }

            $(".poulestand tr th:nth-child(2)")[0].classList.add('pouleLogo');
            $(".poulestand tr th:nth-child(4)")[0].classList.add('gespeeld');
            $(".poulestand tr th:nth-child(8)")[0].classList.add('saldoNum');
            $(".poulestand tr th:nth-child(9)")[0].classList.add('saldoNum');
            $(".poulestand tr th:nth-child(10)")[0].classList.add('saldoNum');

            let resultEmptyItem = document.getElementById('resultsMobile');
            let resultTabletEmptyItem = document.getElementById('resultsTablet');
            let agendaEmptyItem = document.getElementById('programsMobile');
            let agendaTabletEmptyItem = document.getElementById('programsTablet');

            if (resultEmptyItem && agendaEmptyItem) {
                const resultEmpty = resultEmptyItem.rows.length <= 1;
                const agendaEmpty = agendaEmptyItem.rows.length <= 1;

                const mobileVisibleItem = window.getComputedStyle(document.getElementById('resultTablet'));
                const tabletVisible = (mobileVisibleItem.display === "none");

                if (resultEmpty && !tabletVisible) {
                    const resultTable = $("#resultsTablet tr");
                    resultTable.after('<td class="emptyTable">Geen uitslagen bekend.</td>');
                }
                if (agendaEmpty) {
                    const agendaTable = $("#programsMobile tr");
                    agendaTable.after('<td class="emptyTable">Geen programma bekend.</td>');
                }
            }


            if (resultTabletEmptyItem && agendaTabletEmptyItem) {
                const resultTabletEmpty = resultTabletEmptyItem.rows.length <= 1;
                const agendaTabletEmpty = agendaTabletEmptyItem.rows.length <= 1;

                const mobileVisibleItem = window.getComputedStyle(document.getElementById('resultMobile'));
                const mobileVisible = (mobileVisibleItem.display === "none");

                if (resultTabletEmpty && !mobileVisible) {
                    const resultMobile = $("#resultsMobile tr");
                    resultMobile.after('<td class="emptyTable">Geen uitslagen bekend.</td>');
                }
                if (agendaTabletEmpty) {
                    const agendaTablet = $("#programsTablet tr");
                    agendaTablet.after('<td class="emptyTable">Geen programma bekend.</td>');
                }
            }

            for (let i = 1; i < 15; i++) {
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(1)")[0].classList.add('rangNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(2)")[0].classList.add('pouleLogo');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(4)")[0].classList.add('gespeeld');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(5)")[0].classList.add('winstNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(6)")[0].classList.add('gelijkNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(7)")[0].classList.add('verliesNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(8)")[0].classList.add('saldoNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(9)")[0].classList.add('saldoNum');
                $(".poulestand tr:nth-child(" + i + ") td:nth-child(10)")[0].classList.add('saldoNum');
            }

            let tabletBlock = document.getElementsByClassName('team-data__tablet');
            let mobileBlock = document.getElementsByClassName('team-data__mobile');

            if (tabletBlock[0]) {
                let tabletTeamProgram = tabletBlock[0].getElementsByClassName('team-program');

                if (tabletTeamProgram[0]) {
                    let tabletTeamProgramTable = tabletTeamProgram[0].getElementsByTagName("table");
                    let tabletTeamProgramTableContent = tabletTeamProgramTable[0].getElementsByTagName("td");

                    if (!tabletTeamProgramTableContent[0]) {
                        tabletTeamProgram[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
                    }
                }
            }

            if (mobileBlock[0]) {
                let mobileTeamProgram = mobileBlock[0].getElementsByClassName('team-program');

                if (mobileTeamProgram[0]) {
                    let mobileTeamProgramTable = mobileTeamProgram[0].getElementsByTagName("table");
                    let mobileTeamProgramTableContent = mobileTeamProgramTable[0].getElementsByTagName("td");

                    if (!mobileTeamProgramTableContent[0]) {
                        mobileTeamProgram[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
                    }
                }
            }
        }
    </script>
    <div class="container content-container main-container team-container">
        <div class="row">
            <div class="col-12 content single-teams">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col single-page-post-heading">
                                <h1><?php
                                    echo get_the_title(); ?></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8 team-photo">
                                <?php
                                if (isset($teamPhoto_URL)) {
                                    echo '<img src="' . $teamPhoto_URL . '"/>';
                                }
                                ?>
                            </div>
                            <div class="col-12 col-md-3 offset-md-1 team-sponsors">
                                <?php
                                if ($shirtSponsor_field) {
                                    ?>
                                    <div class="shirt-field">
                                        <p class="shirt">Shirt sponsor</p>
                                        <img src="<?php
                                        echo $shirtSponsor_logoUrl ?>"/>
                                    </div>
                                    <?php
                                }
                                if ($clothingSponsor_field) {
                                    ?>
                                    <div class="clothing-field">
                                        <p class="clothing">Kleding sponsor</p>
                                        <img src="<?php
                                        echo $clothingSponsor_logoUrl ?>"/>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if ($teamLead_field['trainername'] || $teamLead_field['coachname']) { ?>
                            <div class="row result-block__program table-block__mobile team-data" id="resultMobile">
                                <p class="block-head__program">Trainer</p>
                                <div class="team-lead">
                                    <div class="team-lead__name team-lead__trainer">
                                        <p><?php
                                            echo $teamLead_field['trainername']; ?></p>
                                    </div>
                                </div>
                                <p class="block-head__program team-data">Leider</p>
                                <div class="team-lead">
                                    <div class="team-lead__name team-lead__coach">
                                        <p><?php
                                            echo $teamLead_field['coachname']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } ?>
                        <div class="row result-block__program table-block__mobile team-data team-data__mobile" id="resultMobile">
                            <p class="block-head__program">Uitslagen</p>
                            <div id="result" class="sportlink-table result"
                                 data-article="uitslagen"
                                 data-param-teamcode="<?php
                                 echo $teamCode; ?>"
                                 data-param-thuis="JA"
                                 data-param-uit="JA"
                                 data-format-wedstrijddatum="DD/MM"
                                 data-fields="wedstrijddatum,thuisteam,uitteam,uitslag"
                            ></div>
                            <p class="block-head__program team-data">Programma</p>
                            <div id="program" class="sportlink-table program team-program"
                                 data-article="poule-programma"
                                 data-param-poulecode="<?php
                                 echo $regularCode; ?>"
                                 data-param-aantaldagen="21"
                                 data-param-gebruiklokaleteamgegevens="NEE"
                                 data-format-wedstrijddatum="DD/MM"
                                 data-fields="wedstrijddatum,aanvangstijd,thuisteam,uitteam"
                            ></div>
                        </div>
                        <?php
                        if ($teamLead_field['trainername'] || $teamLead_field['coachname']) { ?>
                            <div class="row result-block__program table-block__tablet" id="resultTablet">
                                <div class="team-lead col-md-6">
                                    <p class="block-head__program">Trainer</p>
                                    <div class="team-lead__name team-lead__trainer">
                                        <p><?php
                                            echo $teamLead_field['trainername']; ?></p>
                                    </div>
                                </div>
                                <div class="team-lead col-md-5 offset-md-1 team-data">
                                    <p class="block-head__program">Leider</p>
                                    <div class="team-lead__name team-lead__coach">
                                        <p><?php
                                            echo $teamLead_field['coachname']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        if ($teamLead_field['first_teamstaf'] || $teamLead_field['second_teamstaf']) {
                            if ($teamLead_field['first_teamstaf']['first_teamstaf_name']) { ?>
                                <div class="row result-block__program table-block__tablet" id="resultTablet">
                                    <div class="team-lead col-md-6">
                                        <p class="block-head__program"><?php
                                            echo $teamLead_field['first_teamstaf']['first_teamstaf_type']; ?></p>
                                        <div class="team-lead__name team-lead__trainer">
                                            <p><?php
                                                echo $teamLead_field['first_teamstaf']['first_teamstaf_name']; ?></p>
                                        </div>
                                    </div>
                                    <div class="team-lead col-md-5 offset-md-1 team-data">
                                        <p class="block-head__program"><?php
                                            echo $teamLead_field['second_teamstaf']['second_teamstaf_type']; ?></p>
                                        <div class="team-lead__name team-lead__coach">
                                            <p><?php
                                                echo $teamLead_field['second_teamstaf']['second_teamstaf_name']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                        <div class="row result-block__program table-block__tablet program-result__item"
                             id="resultTablet">
                            <div class="team-data col-md-6">
                                <div class="resultTablet_div">
                                    <p class=" block-head__program">Uitslagen</p>
                                </div>
                                <div id="result" class="sportlink-table tabletResult result"
                                     data-article="uitslagen"
                                     data-param-teamcode="<?php
                                     echo $teamCode; ?>"
                                     data-param-thuis="JA"
                                     data-param-uit="JA"
                                     data-format-wedstrijddatum="D MMMM"
                                     data-fields="wedstrijddatum,thuisteam,uitteam,uitslag"
                                ></div>
                            </div>
                            <div class="team-data col-md-5 offset-md-1 team-data__tablet">
                                <div class="resultTablet_div team-data">
                                    <p class="block-head__program">Programma</p>
                                </div>
                                <div id="program" class="sportlink-table program tabletProgram team-program"
                                     data-article="poule-programma"
                                     data-param-poulecode="<?php
                                     echo $regularCode; ?>"
                                     data-param-aantaldagen="21"
                                     data-param-gebruiklokaleteamgegevens="NEE"
                                     data-format-wedstrijddatum="D MMMM"
                                     data-fields="wedstrijddatum,aanvangstijd,thuisteam,uitteam"
                                ></div>
                            </div>
                        </div>
                        <div class="row result-block__program team-data program-result__item">
                            <div id="teamRanking" class="sportlink-table teamstand"
                                 data-article="poulestand"
                                 data-param-poulecode="<?php
                                 echo $regularCode; ?>"
                                 data-param-gebruiklokaleteamgegevens="NEE"
                                 data-label-positie="#"
                                 data-label-teamnaam="T"
                                 data-label-gespeeldewedstrijden="GS"
                                 data-label-gewonnen="W"
                                 data-label-gelijk="G"
                                 data-label-verloren="V"
                                 data-label-doelpuntenvoor="+"
                                 data-label-doelpuntentegen="-"
                                 data-label-doelsaldo="D"
                                 data-label-punten="P"
                                 data-label-clubrelatiecode=""
                                 data-fields="positie,clubrelatiecode,teamnaam,gespeeldewedstrijden,
                         gewonnen,gelijk,verloren,doelpuntenvoor,doelpuntentegen,doelsaldo,
                         punten"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();
