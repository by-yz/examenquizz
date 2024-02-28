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
//question 2
$(document).ready(function () {
    $('#send_quizz2').click(function () {
        var question = {
            'valeur3': $('#question2').val(),
            'valeur4': $("#name2").val(),


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
// question 3
$(document).ready(function () {
    $('#send_quizz3').click(function () {
        var question = {
            'valeur5': $('#question3').val(),
            'valeur6': $("#name3").val(),


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
//question 4
$(document).ready(function () {
    $('#send_quizz4').click(function () {
        var question = {
            'valeur7': $('#question4').val(),
            'valeur8': $("#name4").val(),


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



