<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <title>Form Validation</title>
</head>

<body>
    <section class="container border mt-5 mb-5 me-auto m5-auto p-3">
        <h5>Hanif Mitsal Mahatta</h5>
        <h5>Mitsal</h5>
        <h5>5026201046</h5>
        <form action="" class="container-fluid me-auto ms-auto" id="validation">
            <h1 class="text-center mb-5">Form Input Data Barang</h1>
            <div class="row">
                <div class="col-4"></div>
                <div class="col">
                    <div class=" row mb-3">
                        <label class="col-sm-5">Nama Barang :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5">Harga :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5">Jenis Barang :</label>
                        <div class="col-sm-7">
                            <select id="state" name="barang" class="form-select">
                                <option value="">Please Choose</option>
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                                <option value="3">Non Mamin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5">Kode Barcode :</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="kode" name="kode">
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="col-sm-auto">
                            <button type="submit" class="mx-4 form-control btn btn-primary btn-lg">Kirim</button>
                        </div>
                        <div class="col-sm-auto">
                            <button type="reset" class="mx-4 form-control btn btn-success btn-lg">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </form>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="./jquery.js"></script>

        <!--Alert-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </section>
</body>

</html>
