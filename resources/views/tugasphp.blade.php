<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>MadLibsGame</title>
    <style type="text/css">
        body {
            background: linear-gradient(90deg, #b7f8db 0%, #50a7c2 100%);
        }

        .container .border {
            border: 2px solid black !important;
        }

        .btn-success {
            background-color: #23bd9c;
            color: #ffff;
        }

        .btn-success:hover {
            background-color: transparent;
            color: #ffff;
            border: 2px solid #23bd9c;
        }
    </style>
</head>

<body>
    <section class=" mt-5 mb-5 me-auto m5-auto p-3">
        <form action="resultphp" method="post" class="container-fluid me-auto ms-auto">
            @csrf
            <div class="content">
                <h1 class="text-center mt-4 mb-5">Welcome to Mad Libs Game!</h1>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-md-8">
                        <div class=" row mb-3">
                            <label class="col-sm-5">Love call with your couple :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lovecall">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name one of your favorite teacher :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="teacher">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Number between 100 to 200 :</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="number">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name an animal :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="animal">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name a plant :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="plant">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name one of your favorite actor :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="actor">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name of your favourite city :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Name of your favourite food :</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="food">
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <label class="col-sm-5">Your birthday year :</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="birthday">
                            </div>
                        </div>
                        <div class="row mt-5 mb-5">
                            <div class="col-sm-8">
                                <button type="submit" class="mx-4 form-control btn btn-success btn-lg">Create
                                    Story!</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
        </form>
    </section>
</body>

</html>
