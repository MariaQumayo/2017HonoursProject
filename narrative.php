﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="icon" href="images/logo2.png" />

    <script type="text/javascript" src="jquery-3.2.1.js"></script>

    <link rel="stylesheet" type="text/css" href="materialize/materialize/css/materialize.css">
    <script type="text/javascript" src="materialize/materialize/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript">
        $(document).ready(function () {

            $('.modal').modal('open');
        });
    </script>

    <style>
        img {
            position: absolute;
            width: 4%;
            height: auto;
        }
        #loc {
            
            bottom: 18%;
            right: 28%;
           
        }

        #loc2 {
           
            bottom: 33%;
            left: 34%;
           
        }

        #loc3 {
           
            top: 9%;
            left: 38.5%;
           
        }
    </style>

</head>
<body>
    <a id="celeb" href="theCar.html"><img id="loc" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Part 1- The Celebration"></a>
    <a id="architecture" href="architecture.html"><img id="loc2" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Part 2- Arhitecture Company"></a>
    <a id="casino" href="casino.html"><img id="loc3" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Part 4- Casino"></a>
    <a id="Hospital" href="#modal1"><img id="loc4" src="images/location.png" class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Part 3- Hospital"></a>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <script type="text/javascript">
                $.ajax({
                    url: "./narrative/intro.txt",
                    dataType: "text",
                    success: function (data) {
                        $(".modal-content").html(data);
                    }
                    });
            </script>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Dismiss</a>
        </div>
    </div>


</body>
</html>