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
