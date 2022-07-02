<!DOCTYPE html>
<html>

<head>
    <title>Sistema Acadêmico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container">
            <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                <i class="fa fa-remove"></i>
            </a>
            <img src="https://seedsofchange.org/wp-content/uploads/2021/12/hopeicon21.png" style="width:45%;" class="w3-round"><br><br>
            <h4><b>Sistema Acadêmico</b></h4>
        </div>
        <div class="w3-bar-block">
            <a href="/" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>DASHBOARD</a>
            <a href="/aluno" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa fa-graduation-cap w3-margin-right"></i>ALUNOS</a>
            <a href="/disciplina" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa fa-book w3-margin-right"></i>DISCIPLINAS</a>
            <a href="/professor" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa fa-user w3-margin-right"></i>PROFESSORES</a>
        </div>

    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px">

        <!-- Header -->
        <header id="portfolio">
            <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
            <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
            <div class="w3-container">
                <h1><b>Sistema Acadêmico</b></h1>
                <div class="w3-section w3-bottombar w3-padding-16">
                    <button onclick="location.href = '/aluno'" class="w3-button w3-white"><i class="fa fa-graduation-cap w3-margin-right"></i>ALUNOS</button>
                    <button onclick="location.href = '/disciplina'" class="w3-button w3-white"><i class="fa fa-book w3-margin-right"></i>DISCIPLINAS</button>
                    <button onclick="location.href = '/professor'" class="w3-button w3-white w3-hide-small"><i class="fa fa-user w3-margin-right"></i>PROFESSORES</button>
                </div>
            </div>
        </header>



    </div>
    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }
        $(document).ready(function() {
            $('.multiselect').select2();
        });
    </script>

</body>

</html>
