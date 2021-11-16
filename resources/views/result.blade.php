<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $lovecall = 'honey';
    $teacher = 'Johan';
    $number = '101';
    $animal = 'tiger';
    $plant = 'aloevera';
    $actor = 'Tom Cruise';
    $city = 'Surabaya';
    $food = 'Soto';
    $birthday = '2002';

    if ($_POST['lovecall'] != NULL) {
        $lovecall = $_POST['lovecall'];
    }
    if ($_POST['favoriteteacher'] != NULL) {
        $teacher = $_POST['teacher'];
    }
    if ($_POST['number'] != NULL) {
        $number = $_POST['number'];
    }
    if ($_POST['animal'] != NULL) {
        $animal = $_POST['animal'];
    }
    if ($_POST['plant'] != NULL) {
        $plant = $_POST['plant'];
    }
    if ($_POST['actor'] != NULL) {
        $actor = $_POST['actor'];
    }
    if ($_POST['city'] != NULL) {
        $city = $_POST['city'];
    }
    if ($_POST['food'] != NULL) {
        $food = $_POST['food'];
    }
    if ($_POST['birthday'] != NULL) {
        $birthday = $_POST['birthday'];
    }

    $favoriteteacher = ucwords($favoriteteacher);
    $actor = ucwords($actor);
    $city = ucwords($city);

    "</span>";

    $title = "Once Upon A Time in Casting Room";
    echo "<title>$title</title>";
    ?>

    <style type="text/css">
        form {
            text-align: right;
        }

        .content {
            background: #F2F1E9;
            border-right: #25201A 1px solid;
            border-top: #25201A 1px solid;
            border-left: #25201A 1px solid;
            border-bottom: #25201A 1px solid;
            padding: 10px 10px 10px 10px;
            font-size: medium;
            margin: auto;
            width: 340px;
            font-family: Verdana, "Myriad Web", Syntax, sans-serif;
        }

        body {
            padding: 0;
            border: 0;
            background: linear-gradient(90deg, #b7f8db 0%, #50a7c2 100%);
            width: auto;
            text-align: center;
        }

        h1 {
            padding: 10px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php
        echo "<h1>$title</h1>";
        ?>

        <div class="madlibbox">
            <?php
            echo "Once upon a time in casting room, HRD said to aspiring actor : 'Why are you so slow, can not you get here quickly?'. And then the aspiring actor replied : 'Okay,$lovecall just wait a second'.
            The interview just begun and the actor introduces himself 'My name is $teacher and I am $number years old. I intend to cast for a film $animal vs $plant and replace the role by $actor who is on vacation to $city.'
            The HRD start to underestimate the aspiring actor, but he can handle that and immediately show his impersonate talent by impersonating $food. And without any chitchat again the HRD who are already captivated directed offer the desired salary.
            The aspiring actor want $birthday dollars per month. They both came to an agreement. And the story end.";
            ?>
        </div>
    </div>
</body>

</html>
