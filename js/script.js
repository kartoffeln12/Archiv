$(function () {


    var Affiche = $('#visuAffiche');
    var Titre = $('#visuTitre');
    var Renseignement = $('#visuDateTime');
    var Lieu = $('#visuLieu');
    var Description = $('#visuDescription');

    function preview() {
        $('#zoneAffiche').empty().append('<div class="viewTemp"><img src=" ' + $('.saisie_url').val() + ' " alt="Affiche" height="360" width="240"></div>');
        $('#zoneTitre').empty().append('<div class="viewTemp">' + $('.saisie_titre').val() + '</div>');
        $('#zoneRenseignement').empty().append('<div class="viewTemp">' + $('.saisie_jour').val().split("-").reverse().join("/") + ' à ' + $('.saisie_horaire').val() + '</div>');
        $('#zoneLieu').empty().append('<div class="viewTemp">' + $('#saisie_lieu').val() + '</div>');
        $('#zoneDescription').empty().append('<div class="viewTemp">' + $('.saisie_description').val() + '</div>');
    }

    /*Affiche la saisie du "Affiche" dans la partie view*/
    Affiche.on('click', function () {
        preview();
    });

    /*Affiche la "titre" dans la partie view*/
    Titre.on('click', function () {
        preview();
    });

    /*Affiche les "reseignements" dans la partie view*/
    Renseignement.on('click', function () {
        preview();
    });

    /*Affiche le "lieu" dans la partie view*/
    Lieu.on('click', function () {
        preview();
    });

    /*Affiche la "description" dans la partie view*/
    Description.on('click', function () {
        preview();
    });

    /*Active le bouton "Annuler"*/
    $('#Annuler').on('click', function () {
        $('.viewTemp').fadeOut(300, function () {
            $('.viewTemp').remove();
        });
    });

    /*Gére l'autocompletion du champs #lieu*/
    $('#saisie_lieu').autocomplete({
        source: 'formulaire_creaPage/autocomplete.php',
        minLength: 1
    });

});