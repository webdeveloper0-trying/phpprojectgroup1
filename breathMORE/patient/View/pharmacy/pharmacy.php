<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./pharmacy.css">
    <script src="../js/jquery3.6.0.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <script src="../js/drugs.js" defer></script>
</head>

<body class="pharmacybg">
    <div class="display-4"><u>Pharmacies Near Me</u></div>
    <div class="state">
        <h6>State & Regins</h6>
    </div>
    <div class="container">
        <class class="row">
            <div class="col-6 col-sm-5 col-md-6">
                <div class="row">
                    <!-- selectstart -->
                    <div class="state col-6">
                        <select class="form-select state" id="state" aria-label="Default select example">
                            <option>Rakhine State</option>
                            <option value="1">1</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Shan State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Mon State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Kachin State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Kayin State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Chin State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Kayah State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <!-- selectend -->
                    <div class="state col-6">
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Yangon Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Mandalay Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Bago Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Magway Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Sagaing Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Ayeyarwady Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select  state" aria-label="Default select example">
                            <option>Tanintharyi Regin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- pharmacyleftend -->
            <!-- drugs -->
            <div class="col-6 col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                <div class="row" mt-5>
                    <div class="col-6">
                        <input type="text" id="searchtext" class="form-control" placeholder="drugs deal with diseases">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" id="search">Search</button>
                    </div>
                    <div class="drug" id="searchResult"></div>
                </div>
                <!-- end drugs -->
                <div class="pharmacy mt-5">

                    <!-- end pharmacy1 -->
                    <div class="holebody col-sm-5 offset-sm-2 " style="background-color:#8a39ab;">
                        <div class=" card " style=" width: 10rem;">
                            <img src="./glass-shelves-retail-pharmacy-interior-design-016-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card " style="width: 10rem;">
                            <img src="./glass-shelves-retail-pharmacy-interior-design-016-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card" style="width: 18rem;">
                            <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <!--End holebody  -->
                    </div>

                </div>
            </div>
    </div>
    </div>
</body>

</html>