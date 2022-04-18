<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>section</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section>
        <div class="container-fluid tabs my-5">
            <div class="row">
                <div class="col-12 mx-auto px-md-4 px-2">
                    <div class="text-center mb-5">
                        <h1 class="tabs-font">Money & Travel</h1>
                        <a href="<?= base_url('plan'); ?>" class="btn plan-btn">Plan Your Trip</a>
                    </div>
                    <ul class="nav nav-tabs justify-content-around" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active px-5 mt-2 mt-md-0" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Estancia Corta</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-5 mt-2 mt-md-0" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Estancia Media</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link px-5 mt-2 mt-md-0" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Estancia Larga</button>
                        </li>
                    </ul><br>
                    <!-- <form action="" class="filter-form d-flex mx-5 my-3">
                        <div class="form-group d-flex">
                            <label for="filter" class="tabs-font me-5 d-flex"><i
                                    class="fa fa-filter d-flex align-items-center"></i>
                                Filters:</label>
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">

                        </div>
                    </form> -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid">
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Grecia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Thilandia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Noruega</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container-fluid">
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Grecia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Thilandia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Noruega</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="container-fluid">
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Grecia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Thilandia</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                                <div class="row b-list mb-4">
                                    <!-- <div class="col-md-3 col-12 p-0">
                                        <img src="./traveler-image8.jpg" alt="" class="img-fluid">
                                    </div> -->
                                    <div class="col-md-8 py-3">
                                        <h3 class="tabs-font heading">Noruega</h3>
                                        <p class="tabs-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugiat itaque suscipit neque commodi magnam.</p>
                                        <div class="time d-flex">
                                            <div class="nights"><i class="fa fa-clock mx-md-2 mx-1"></i>4 Noches |</div>
                                            <div class="nights"><i class="fa fa-house-tsunami mx-md-2 mx-1"></i>Ocio |</div>
                                            <div class="nights"><i class="fa-solid fa-mountain-sun mx-md-2 mx-1"></i>turismo</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 fees py-3 d-flex flex-column align-items-center justify-content-center">
                                        <h3 class="tabs-font mb-0">$350</h3>
                                        <p class="tabs-font">/Per person</p>
                                        <button class="btn btn-bookn">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>