<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        iframe {
            background: #141e30;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,
                    #243b55,
                    #141e30);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,
                    #243b55,
                    #141e30);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<?php

// initial database :)
if (!file_exists('database')) {
    mkdir('database');
}

// header("location: /src/login/");
?>

<body>
    <iframe src="src/login/" frameborder="0"></iframe>
</body>

</html>