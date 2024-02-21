<?php session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de Quizz</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <h1>GG BG</h1>
<form action="submit1.php" method="post">
    <label for="Question">Votre premiere Question :</label>
    <input type="text" id="question1" name="question"><br><br>
    <input type="radio" id="repA_1" name="rep_qts1" value="1">
    <label for="repA_1">""</label><br>
    <input type="radio" id="repB_1" name="rep_qts1" value="2">
    <label for="repB_1">""</label><br>
    <input type="radio" id="repC_1" name="rep_qts1" value="3">
    <label for="repC_1">""</label><br>
    <input type="radio" id="repD_1" name="rep_qts1" value="4">
    <label for="repD_1">""</label><br>  </form>
    
    <button id ="id_qts1"onclick="addQCM()">Ajouter une question à la QCM</button>
    <button id = "valid_quizz1" onclick="gen_code1()"type = "submit">Valider le quizz</button><br>

<input type="integer" id="code1" name="code" placeholder="Code personnel - ex : 1234" required style="display: none"><br>
<button id="send_quizz1" type="submit" style="display: none">Enregister le quizz</button>

    
<script>
    function addQCM() {
        $("#form2").show();
        $("#question2").show();
        $("#id_qts2").show()
        $("#valid_quizz1").hide()
        $("#valid_quizz2").show()
    }
    function gen_code1(){
        $("#code1").show()
        $("#send_quizz1").show()
        $("enter_code1").show()
    }
    </script>
    
    
<form action="submit1.php" method="post" id="form2" style="display: none">
    <label for="Question">Votre deuixeme Question :</label>
    <input type="text" id="question2" name="question"><br><br>
    <input type="radio" id="repA_2" name="rep_qts2" value="1">
    <label for="repA_2">""</label><br>
    <input type="radio" id="repB_2" name="rep_qts2" value="2">
    <label for="repB_2">""</label><br>
    <input type="radio" id="repC_2" name="rep_qts2" value="3">
    <label for="repC_2">""</label><br>
    <input type="radio" id="repD_2" name="rep_qts2" value="4">
    <label for="repD_2">""</label><br>
</form>

<button id ="id_qts2"onclick="addQTS()" style="display: none">Ajouter une question à la QCM</button>
<button id = "valid_quizz2" onclick="gen_code2()"type = "submit" style="display: none">Valider le quizz</button><br>

<input type="integer" id="code2" name="code" placeholder="Code personnel - ex : 1234" required style="display: none"><br>
<button id="send_quizz2" type="submit" style="display: none">Enregister le quizz</button>


<script>
    function addQTS(){
        $("#form3").show()
        $("#question3").show()
        $("#id_qts3").show()
        $("#valid_quizz2").hide()
        $("#valid_quizz3").show()

    }
    function gen_code2(){
        $("#code2").show()
        $("#send_quizz2").show()
        $("enter_code2").show()
    }
</script>

<form action="submit1.php" method="post" id="form3" style="display: none">
    <label for="Question">Votre troisieme Question :</label>
    <input type="text" id="question3" name="question"><br><br>
    <input type="radio" id="repA_3" name="rep_qts3" value="1">
    <label for="repA_3">""</label><br>
    <input type="radio" id="repB_3" name="rep_qts3" value="2">
    <label for="repB_3">""</label><br>
    <input type="radio" id="repC_3" name="rep_qts3" value="3">
    <label for="repC_3">""</label><br>
    <input type="radio" id="repD_3" name="rep_qts3" value="4">
    <label for="repD_3">""</label><br>
</form>

<button id ="id_qts3"onclick="addQT()" style="display: none">Ajouter une question à la QCM</button>
<button id = "valid_quizz3" onclick="gen_code3()" style="display: none">Valider le quizz</button><br>

<input type="integer" id="code3" name="code" placeholder="Code personnel - ex : 1234" required style="display: none"><br>
<button id="send_quizz3" type="submit" style="display: none">Enregister le quizz</button>


<script>
    function addQT(){
        $("#form4").show()
        $("#question4").show()
        $("#id_qts4").show()
        $("#valid_quizz3").hide()
        $("#valid_quizz4").show()
    }
    function gen_code3(){
        $("#code3").show()
        $("#send_quizz3").show()
        $("enter_code3").show()
    }
</script>

<form action="submit1.php" method="post" id="form4" style="display: none">
    <label for="Question">Votre quatrieme Question :</label>
    <input type="text" id="question4" name="question"><br><br>
    <input type="radio" id="repA_4" name="rep_qts4" value="1">
    <label for="repA_4">""</label><br>
    <input type="radio" id="repB_4" name="rep_qts4" value="2">
    <label for="repB_4">""</label><br>
    <input type="radio" id="repC_4" name="rep_qts4" value="3">
    <label for="repC_4">""</label><br>
    <input type="radio" id="repD_4" name="rep_qts4" value="4">
    <label for="repD_4">""</label><br>
</form>

<button id ="id_qts4"onclick="addQCM()" style="display: none">Ajouter une question à la QCM</button>
<button id = "valid_quizz4" onclick="gen_code4()" type = "submit" style="display: none">Valider le quizz</button><br>

<input type="integer" id="code4" name="code" placeholder="Code personnel - ex : 1234" required style="display: none"><br>
<button id="send_quizz" type="submit" style="display: none">Enregister le quizz</button>

<script>
    function gen_code4(){
        $("#code4").show()
        $("#send_quizz4").show()
        $("enter_code4").show()
    }
</script>



</body>
</html>
