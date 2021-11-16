<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="formvalidation.css" />

    <title>Form Validation</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>JavaScript Form Validation</h2>
            </div>
            <div class="card-body">
                <form id="validation" class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Username(6-8 Characters)</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="ex: its.ac.id@gmail.com">
                    </div>
                    <div class="col-12">
                        <label class="form-label">State</label>
                        <select id="state" name="state" class="form-select">
                            <option value="">Please Choose</option>
                            <option value="1">Jawa Tengah</option>
                            <option value="2">Jawa Barat</option>
                            <option value="3">Jawa Timur</option>
                            <option value="4">DKI Jakarta</option>
                            <option value="5">Banten </option>
                            <option value="6">Bali </option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Address </label>
                        <input type="text" class="form-control" id="Address" name="Address">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip" name="zip">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="my-4 form-control btn btn-primary">SUBMIT</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="./formvalidation.js"></script>

    <!--Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
