<?php
/*
Template Name: Uitslagenoverzicht
*/

get_header();
?>
    <div class="container content-container main-container overview-container">
        <div class="row">
            <div class="col-12 content">
                <h1><?php
                    echo get_the_title(); ?></h1>
                <div class="row matches">
                    <div class="team-data col-md-10 col-11">
                        <p class="block-head__program">Uitslagen</p>
                        <div class="sportlink-table program result-overview"
                             data-article="uitslagen"
                             data-param-sorteervolgorde="datum-omgekeerd"
                             data-param-aantalregels="25"
                             data-param-aantaldagen="21"
                             data-format-wedstrijddatum="dddd D MMMM"
                             data-fields="wedstrijddatum,thuisteam,uitteam,uitslag"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
