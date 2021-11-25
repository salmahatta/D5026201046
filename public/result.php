<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <?php

    $lovecall = $_GET['lovecall'];
    $teacher = $_GET['teacher'];
    $number = $_GET['number'];
    $animal = $_GET['animal'];
    $plant = $_GET['plant'];
    $actor = $_GET['actor'];
    $city = $_GET['city'];
    $food = $_GET['food'];
    $birthday = $_GET['birthday'];

    $teacher = ucwords($teacher);
    $actor = ucwords($actor);
    $city = ucwords($city);

    "</span>";

    $title = "Once Upon A Time In Casting Room";
    echo "<title>$title</title>";
    ?>

    <style type="text/css">
        form {
            text-align: right;
        }

        .card-body {
            background: #F2F1E9;
            border-right: #25201A 1px solid;
            border-top: #25201A 1px solid;
            border-left: #25201A 1px solid;
            border-bottom: #25201A 1px solid;
            padding: 20px 45px 50px 40px;
            font-size: medium;
            width: 800px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            font-family: arial;
        }

        body {
            background: linear-gradient(90deg, #b7f8db 0%, #50a7c2 100%);

        }

        h1 {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container-form p-3 p-md-5 mt-5">
            <div class="card" ;">
                <div class="card-body">
                    <?php
                    echo "<h1>$title</h1>";
                    ?>

                    <p class="card-text">
                        <?php
                        echo "Once upon a time in casting room, The HRD said to aspiring actor : Why are you so slow, can't you get here quickly ? ";
                        echo "And then the aspiring actor replied : Okay $lovecall, just wait a second.";
                        echo "The aspiring actor start to introduce herself : Good morning Mr.HRD, my name is $teacher and I am $number years old. I have interest for casting this $animal vs $plant movie and very worthy to replace the role of $actor who is still on vacation in $city. ";
                        echo "The HRD start to underestimate the aspiring actor, but he can handle that and immediately show his impersonate talent by impersonating $food. And without any chitchat again the HRD who are already captivated, directed offer the desired salary. ";
                        echo "The aspiring actor firmily said : I want $birthday dollars per month. ";
                        echo "The HRD immediately looked into his eyes and said : DEAAAL!!!. ";
                        echo "After they both came to an agreement, the story finally end.";
                        ?>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>
