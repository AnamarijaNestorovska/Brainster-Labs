<?php

$servername = "localhost";
$username = "baza1";
$password = "A!123456";
$database = 'baza1';
$port = 3306;

$link = mysqli_connect($servername, $username, $password, $database, $port);
if (!$link) {
    $message = 'Информациите не може да бидат испратени.';
} else {
    $sql = 'INSERT INTO contact_form VALUES(NULL,
    "' . mysqli_real_escape_string($link, $_POST['name']) . '",
    "' . mysqli_real_escape_string($link, $_POST['company']) . '",
    "' . mysqli_real_escape_string($link, $_POST['email']) . '",
    "' . mysqli_real_escape_string($link, $_POST['phone']) . '",
    "' . mysqli_real_escape_string($link, $_POST['type']) . '"
    );';

    $result = mysqli_query($link, $sql);
    if ($result) {
        $message = 'Вашите информации се успешно испратени.';
    } else {
        $message =  'Информациите не може да бидат испратени.';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Brainster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/first.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body data-spy="scroll" data-target="#navbar">
    <nav class="navbar navbar-default menu navbar-fixed-top" id="navbar">
        <div class="container-fluid menu3">
            <div class="row">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div class="navigation">
                        <div onclick="showSidebar()" class="toggle-nav">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                        <div class="sidebar">
                            <a onclick="closeSidebar()"><i class="fa fa-times"></i></a>
                            <a href="https://www.brainster.io/marketpreneurs">Академија за маркетинг</a>
                            <a href="http://codepreneurs.co/">Академија за програмирање</a>
                            <a href="https://www.brainster.io/data-science">Академија за data science</a>
                            <a href="https://www.brainster.io/design">Академија за дизајн</a>
                            <a href="contact_form.html">Вработи наш студент</a>
                        </div>
                    </div>

                    <a class="navbar-brand" href="index.html">
                        <img alt="Brainster" src="assets/default.png" width="30px" height="30px">
                        <p><b>Brainster</b></p>
                    </a>
                </div>


                <div class="collapse navbar-collapse col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2"
                    id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="https://www.brainster.io/marketpreneurs"><b>Академија за маркетинг</b></a></li>
                        <li><a href="http://codepreneurs.co/"><b>Академија за програмирање</b></a></li>
                        <li><a href="https://www.brainster.io/data-science"><b>Академија за data science</b></a></li>
                        <li><a href="https://www.brainster.io/design"><b>Академија за дизајн</b></a></li>
                        <li><a href="contact_form.html" class="btn">Вработи наш студент</a></li>

                    </ul>
                </div>
                <ul class="ipadDropdown">
                    <li><a href=""><b>Академии за: </b></a></li>
                    <li><a href="https://www.brainster.io/marketpreneurs"><b>Маркетинг </b></a></li>

                    <li><a href="http://codepreneurs.co/"><b>Програмирање</b></a></li>
                    <li><a href="https://www.brainster.io/data-science"><b>Data Science</b></a></li>
                    <li><a href="https://www.brainster.io/design"><b>Дизајн</b></a></li>
                    <li><a href="contact_form.html" class="btn">Вработи наш студент</a></li>

                </ul>
            </div>

        </div>
    </nav>

    <div class="container-fluid fifth">
        <h1 class="text-center">Вработи студенти</h1>
        <h3 class="text-center"><?php echo $message; ?></h3>
        
    </div>



    <div class="container-fluid fourthDiv">
        <p class="text-center"><b>Изработено со <span style="font-size:20px;color:red;">&hearts;</span>
                од студентите на Brainster</b></p>
    </div>



</body>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
    crossorigin="anonymous"></script>

<script>
    function showSidebar() {
        let mySidebar = document.querySelector('.sidebar');
        mySidebar.style.width = '100vw';
    }

    function closeSidebar() {
        let mySidebar = document.querySelector('.sidebar');
        mySidebar.style.width = '0';
    }
</script>


</html>
