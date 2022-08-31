<?php
/*
Template Name: Wedstrijdoverzicht
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
                        <p class="block-head__program">Programma</p>
                        <div class="sportlink-table program tabletProgram program-overview"
                             data-article="programma"
                             data-format-wedstrijddatum="dddd D MMMM"
                             data-param-aantalregels="25"
                             data-param-aantaldagen="21"
                             data-fields="wedstrijddatum,aanvangstijd,thuisteam,uitteam"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
