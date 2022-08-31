<script>
    document.addEventListener('DOMContentLoaded', () => {
        const teamsMenu = document.getElementById("mega-menu-item-85");
        if (teamsMenu) {
            teamsMenu.classList.add('teams-menu');

            const seniorTeams = teamsMenu.getElementsByClassName('mega-sub-menu')[1];
            const juniorTeams = teamsMenu.getElementsByClassName('mega-sub-menu')[2];
            seniorTeams.classList.add('teams-submenu');
            juniorTeams.classList.add('teams-submenu');
        }
        const headMenu = document.getElementsByClassName('mega-menu-item-has-children');

        for (let i = 0; i < headMenu.length; i++) {
            if (headMenu[i].classList.contains('mega-main-menu-item')) {
                let subHeadMenu = headMenu[i].getElementsByClassName('mega-sub-menu')[0];
                if (!subHeadMenu.classList.contains('teams-submenu')) {
                    subHeadMenu.classList.add('left-menu');
                }
            }
        }

        let waitForEl = function (selector, callback) {
            if (jQuery(selector).length) {
                callback();
            } else {
                setTimeout(function () {
                    waitForEl(selector, callback);
                }, 100);
            }
        };

        $("img").on("error", function () {
            $(this).hide();
        });

        function loadLastImage(path, target) {
            $('<img class="clublogo" src="' + path + '">').load(function (data, status) {
                if (this.complete) {
                    $(this).appendTo(target);
                } else {
                    target.style.display = 'none';
                }
            });
        }

        let lastMatchMen = ".last-match-men table";
        let lastMatchWomen = ".last-match-women table";

        waitForEl(lastMatchMen, function () {
            jQuery(".last-match-men table tbody tr").each(function () {
                const childMenHome = jQuery(this).children('td').slice(0, 1);
                const matchMenHome = childMenHome.find('span').text();
                const homeMenUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + matchMenHome;
                childMenHome.html('');
                loadLastImage(homeMenUrl, childMenHome);

                const childManAway = jQuery(this).children('td').slice(3, 4);
                const matchManAway = childManAway.find('span').text();
                const awayMenUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + matchManAway;
                childManAway.html('');
                loadLastImage(awayMenUrl, childManAway);
            });
        });

        waitForEl(lastMatchWomen, function () {
            jQuery(".last-match-women table tbody tr").each(function () {
                const childWomenHome = jQuery(this).children('td').slice(0, 1);
                const matchWomenHome = childWomenHome.find('span').text();
                const homeMenUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + matchWomenHome;
                childWomenHome.html('');
                loadLastImage(homeMenUrl, childWomenHome);

                const childWomenAway = jQuery(this).children('td').slice(3, 4);
                const matchWomenAway = childWomenAway.find('span').text();
                const awayWomenUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + matchWomenAway;
                childWomenAway.html('');
                loadLastImage(awayWomenUrl, childWomenAway);
            });
        });

        function loadClubImage(path, target) {
            $('<img class="clublogo" src="' + path + '">').load(function () {
                if (this.complete) {
                    $(this).appendTo(target);
                } else {
                    target.style.display = 'none';
                }
            });
        }

        let standClub = ".desktopRanking table"
        waitForEl(standClub, function () {
            jQuery(".desktopRanking table tbody tr").each(function () {
                const childClub = jQuery(this).children('td').slice(1, 2);
                const rankingClub = childClub.find('span').text();
                const rankingClubUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + rankingClub;
                childClub.html('');
                loadClubImage(rankingClubUrl, childClub);
            });
        });

        let standTeam = "#teamRanking table"
        waitForEl(standTeam, function () {
            jQuery("#teamRanking table tbody tr").each(function () {
                const childTeam = jQuery(this).children('td').slice(1, 2);
                const rankingTeam = childTeam.find('span').text();
                const rankingTeamUrl = "https://logoapi.voetbal.nl/logo.php?clubcode=" + rankingTeam;
                childTeam.html('');
                loadClubImage(rankingTeamUrl, childTeam);
            });
        });
    });

    window.onload = function () {
        add_ids();
    };

    function add_ids() {
        if (document.getElementsByClassName('programma')) {
            let aboveDiv_men = document.getElementsByClassName("last-match-men");
            let aboveDiv_women = document.getElementsByClassName("last-match-women");

            if (aboveDiv_men && typeof aboveDiv_men[0] !== 'undefined') {
                if (aboveDiv_men[0].getElementsByTagName("table")[0]) {
                    let theTable_men = aboveDiv_men[0].getElementsByTagName("table")[0];
                    theTable_men.id = 'programma';
                    theTable_men.classList.add('table');
                }
            }
            if (aboveDiv_men && typeof aboveDiv_women[0] !== 'undefined') {
                if (aboveDiv_women[0].getElementsByTagName("table")[0]) {
                    let theTable_women = aboveDiv_women[0].getElementsByTagName("table")[0];
                    theTable_women.id = 'programma';
                    theTable_women.classList.add('table');
                }
            }
        }

        if (document.getElementsByClassName('poulestand')) {
            let aboveDivMob = document.getElementById("rankingMob");
            let aboveDivDes = document.getElementById("rankingDes");
            if (aboveDivDes) {
                let theTableDes = aboveDivDes.getElementsByTagName("table")[0];
                theTableDes.id = 'poulestand';
                theTableDes.classList.add('table');
            }
            if (aboveDivMob) {
                let theTableMob = aboveDivMob.getElementsByTagName("table")[0];
                theTableMob.id = 'poulestand';
                theTableMob.classList.add('table');
            }
        }

        let thead_men = $(".last-match-men table thead");
        let thead_women = $(".last-match-women table thead");
        if (typeof thead_men[0] !== 'undefined' && typeof thead_women[0] !== 'undefined') {
            thead_men[0].style.display = 'none';
            thead_women[0].style.display = 'none';
        }

        $(".last-match-women .programma tr:eq(2)").wrapAll("<td>");
        $(".last-match-men .programma tr:eq(2)").wrapAll("<td>");

        const dateWomen = $(".last-match-women .programma td:nth-child(2)");
        if (typeof dateWomen[0] !== 'undefined') {
            dateWomen[0].style.display = 'block';
            dateWomen[0].classList.add('programmaDatum');
        }

        const dateMen = $(".last-match-men .programma td:nth-child(2)");
        if (typeof dateMen[0] !== 'undefined') {
            dateMen[0].style.display = 'block';
            dateMen[0].classList.add('programmaDatum');
        }

        const timeWomen = $(".last-match-women .programma td:nth-child(3)");
        if (typeof timeWomen[0] !== 'undefined') {
            timeWomen[0].style.display = 'block';
            timeWomen[0].classList.add('programmaTijd');
        }

        const timeMen = $(".last-match-men .programma td:nth-child(3)");
        if (typeof timeMen[0] !== 'undefined') {
            timeMen[0].style.display = 'block';
            timeMen[0].classList.add('programmaTijd');
        }

        $('.last-match-men .programma tr:eq(3)').each(function () {
            $(this).prev().andSelf().wrapAll('<td>');
        });

        $('.last-match-women .programma tr:eq(3)').each(function () {
            $(this).prev().andSelf().wrapAll('<td>');
        });

        const homeLogoMen = $(".last-match-men .programma tr td:nth-child(1)");
        const homeLogoWomen = $(".last-match-women .programma tr td:nth-child(1)");

        const awayLogoMen = $(".last-match-men .programma tr td:nth-child(4)");
        const awayLogoWomen = $(".last-match-women .programma tr td:nth-child(4)");

        if (typeof homeLogoMen[0] !== 'undefined' && typeof awayLogoMen[0] !== 'undefined') {
            homeLogoMen[0].classList.add('clublogoThuis');
            homeLogoMen[0].classList.add('clublog');
            awayLogoMen[0].classList.add('clublogoUit');
            awayLogoMen[0].classList.add('clublog');
        }

        if (typeof homeLogoWomen[0] !== 'undefined' && typeof awayLogoWomen[0] !== 'undefined') {
            homeLogoWomen[0].classList.add('clublogoThuis');
            homeLogoWomen[0].classList.add('clublog');
            awayLogoWomen[0].classList.add('clublogoUit');
            awayLogoWomen[0].classList.add('clublog');
        }

        for (let i = 1; i < 14; i++) {
            if ($(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(1)")[0]) {
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(1)")[0].classList.add('rangNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(2)")[0].classList.add('pouleLogo');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(3)")[0].classList.add('club');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(4)")[0].classList.add('gespeeldNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(5)")[0].classList.add('winstNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(6)")[0].classList.add('gelijkNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(7)")[0].classList.add('verliesNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(8)")[0].classList.add('saldoNum');
                $(".stand-heren .poulestand tr:nth-child(" + i + ") td:nth-child(9)")[0].classList.add('puntenNum');
            }
            let ii = i + 1;
            if (!$(".stand-heren .poulestand tr:nth-child(" + ii + ") td:nth-child(1)")[0]) {
                break;
            }
        }

        for (let ix = 1; ix < 14; ix++) {
            if ($(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(1)")[0]) {
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(1)")[0].classList.add('rangNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(2)")[0].classList.add('pouleLogo');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(3)")[0].classList.add('club');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(4)")[0].classList.add('gespeeldNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(5)")[0].classList.add('winstNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(6)")[0].classList.add('gelijkNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(7)")[0].classList.add('verliesNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(8)")[0].classList.add('saldoNum');
                $(".stand-vrouwen .poulestand tr:nth-child(" + ix + ") td:nth-child(9)")[0].classList.add('puntenNum');
            }
            let ixix = ix + 1;
            if (!$(".stand-vrouwen .poulestand tr:nth-child(" + ixix + ") td:nth-child(1)")[0]) {
                break;
            }
        }

        for (let is = 1; is < 14; is++) {
            let standVrouwen = document.getElementsByClassName("stand-vrouwen")[0];
            if (standVrouwen) {
                let poulestandVrouwen = standVrouwen.getElementsByClassName("poulestand");
                let poulestandClubDoc = poulestandVrouwen[0].getElementsByClassName("club");
                if (poulestandClubDoc[is]) {
                    let docSpanFirst = poulestandClubDoc[is].getElementsByTagName("span")[0].innerHTML;
                    poulestandClubDoc[is].getElementsByTagName("span")[0].innerHTML = docSpanFirst.replace("/", "/<wbr>");
                }
            }
        }

        for (let ipi = 1; ipi < 30; ipi++) {
            let thuisClubProgramma = $(".team-data .programma tr:nth-child(" + ipi + ") td:nth-child(3)")[0];
            let uitClubProgramma = $(".team-data .programma tr:nth-child(" + ipi + ") td:nth-child(4)")[0];
            if (thuisClubProgramma && uitClubProgramma) {
                thuisClubProgramma.classList.add('thuisclub');
                let thuisClubContent = thuisClubProgramma.getElementsByTagName("span")[0].textContent;

                if (thuisClubContent.includes('sv Loil') || thuisClubContent.includes('Loil sv')) {
                    thuisClubProgramma.style.fontWeight = 'bold';
                }
                uitClubProgramma.classList.add('uitclub');
                let uitClubContent = uitClubProgramma.getElementsByTagName("span")[0].textContent;

                if (uitClubContent.includes('sv Loil') || uitClubContent.includes('Loil sv')) {
                    uitClubProgramma.style.fontWeight = 'bold';
                }
            }
        }

        for (let ipu = 1; ipu < 30; ipu++) {
            let thuisClubUitslag = $(".team-data .uitslagen tr:nth-child(" + ipu + ") td:nth-child(3)")[0];
            let uitClubUitslag = $(".team-data .uitslagen tr:nth-child(" + ipu + ") td:nth-child(4)")[0];
            if (thuisClubUitslag && uitClubUitslag) {
                thuisClubUitslag.classList.add('thuisclub');
                let thuisClubContent = thuisClubUitslag.getElementsByTagName("span")[0].textContent;

                if (thuisClubContent.includes('sv Loil') || thuisClubContent.includes('Loil sv')) {
                    thuisClubUitslag.style.fontWeight = 'bold';
                }
                uitClubUitslag.classList.add('uitclub');
                let uitClubContent = uitClubUitslag.getElementsByTagName("span")[0].textContent;

                if (uitClubContent.includes('sv Loil') || uitClubContent.includes('Loil sv')) {
                    uitClubUitslag.style.fontWeight = 'bold';
                }
            }
        }

        let lastMatchWomen = document.getElementsByClassName("last-match-women");
        let lastMatchMen = document.getElementsByClassName("last-match-men");

        if (lastMatchWomen[0] && lastMatchMen[0]) {
            let lastMatchWomenProgram = lastMatchWomen[0].getElementsByTagName("table");
            let lastMatchWomenProgramContent = lastMatchWomenProgram[0].getElementsByTagName("td");

            let lastMatchMenProgram = lastMatchMen[0].getElementsByTagName("table");
            let lastMatchMenProgramContent = lastMatchMenProgram[0].getElementsByTagName("td");

            if (!lastMatchWomenProgramContent[0]) {
                lastMatchWomen[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
            }

            if (!lastMatchMenProgramContent[0]) {
                lastMatchMen[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
            }
        }

        let clubMatchesDiv = document.getElementsByClassName('club-matches__div');

        if (clubMatchesDiv[0]) {
            let clubMatchesDivTable = clubMatchesDiv[0].getElementsByTagName("table");
            let clubMatchesDivTableContent = clubMatchesDivTable[0].getElementsByTagName("td");

            if (!clubMatchesDivTableContent[0]) {
                clubMatchesDiv[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
            }
        }

        let programOverview = document.getElementsByClassName('program-overview');
        let resultOverview = document.getElementsByClassName('result-overview');

        if (programOverview[0]) {
            let programOverviewTable = programOverview[0].getElementsByTagName("table");
            let programOverviewTableContent = programOverviewTable[0].getElementsByTagName("td");

            if (!programOverviewTableContent[0]) {
                programOverview[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
            }
        }

        if (resultOverview[0]) {
            let resultOverviewTable = resultOverview[0].getElementsByTagName("table");
            let resultOverviewTableContent = resultOverviewTable[0].getElementsByTagName("td");

            if (!resultOverviewTableContent[0]) {
                resultOverview[0].innerHTML = "<p> Er zijn geen wedstrijden meer!</p>";
            }
        }
    }
</script>
