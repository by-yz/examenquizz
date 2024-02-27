$(document).ready(function () {
    $('#send_quizz1').click(function () {
        var question = {
            'valeur1': $('#question1').val(),
            'valeur2': $("#name1").val(),


        };
        $.ajax({
            url: 'http://127.0.0.1/submit.php',
            type: 'POST',
            dataType: 'json',
            data: question,
            success: function (data) {
                if (data.succes) {
                    //window.location.href = "index.html";
                    console.log("transfert terminé. Valeurs reçues : " + (data));
                }
                else {
                    console.log("force à toi bg")
                }
            },
            error: function (xhr, status, error) {
            }
        });
    });
});

/////VERFICATION DU NOM///////
$(document).ready(function () {
    $("#verifierNom").on("click", function () {
        var nomSaisi = $("#name_conn").val();

        // Effectuer la requête Ajax
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1/db_connect.php", // Remplacez par le chemin de votre script PHP
            dataType: "json",
            data: { nom: nomSaisi },
            success: function (result) {
                // Afficher le résultat dans la div
                $("#resultat").html(result);
            },
            error: function (error) {
                console.error("Erreur lors de la requête Ajax : ", error);
            }
        });
    });
});
