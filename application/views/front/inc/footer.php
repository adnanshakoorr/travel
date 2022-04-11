<footer>
        <div class="container ">

            <div class="row justify-content-between footer_main">
                <div class="col-md-4 main_footer_content text-center text-md-left">
                    <div>
                        <img src="<?= base_url();?>assets/front/images/logo.png" class="img-fluid" width="160" alt="">
                    </div>
                    <p>Build, organize, and map your itineraries in a free travel app designed for vacations
                        & road trips
                    </p>
                </div>
                <div class="col-md-2 main_footer_content d-flex justify-content-center">
                    <ul class="footer_link list-unstyled">
                        <li><a href="<?= base_url()?>">Home</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
                <div class="align-items-center col-md-3 d-flex flex-column main_footer_content">
                    <ul class="footer_link list-unstyled">
                        <li><a href=""><i class="fa fa-envelope mr-3"></i> info@gmail.com</a></li>
                        <li><a href=""><i class="fa fa-phone-alt mr-3"></i> 12345678</a></li>
                    </ul>
                    <ul class="list-unstlyed list-inline footer_img">
                        <li class="list-inline-item"><a href=""><img src="<?= base_url();?>assets/front/images/Facebook.png" class="img-fluid"
                                    alt=""></a></li>
                        <li class="list-inline-item"><a href=""><img src="<?= base_url();?>assets/front/images/Insta.png" class="img-fluid"
                                    alt=""></a></li>
                        <li class="list-inline-item"><a href=""><img src="<?= base_url();?>assets/front/images/Inkedin.png" class="img-fluid"
                                    alt=""></a></li>
                        <li class="list-inline-item"><a href=""><img src="<?= base_url();?>assets/front/images/twitter.png" class="img-fluid"
                                    alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <p class="text-center mb-0 pb-4">Made with ❤ by Webions
                    © 2022 Travel Dream</p>
            </div>

        </div>
    </footer>
    <!-- Back To Top -->
    <a id="backToTop">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- Scripts -->
    
    
    <script>
        let first = {
            hotelName: "abcd",
            checkIn: "abcd",
            checkOut: "abcd",
            hotelConf: "abcd",
            hotelNotes: "abcd",
            hotelCost: "abcd",
            hotelAddress: "abcd"
        }
        // localStorage.setItem('formData', JSON.stringify(first));

        var a = !!localStorage.getItem('formData') ? JSON.parse(localStorage.getItem('formData')) : [];
        var b = first;
        a.push(b);
        localStorage.setItem('formData', JSON.stringify(a));


        const input = (e) => {
            e.preventDefault()
            let formData = {
                hotelName: document.getElementById('hotel-name').value,
                checkIn: document.getElementById('check-in').value,
                checkOut: document.getElementById('check-out').value,
                hotelConf: document.getElementById('hotel-conf').value,
                hotelNotes: document.getElementById('hotel-notes').value,
                hotelCost: document.getElementById('hotel-cost').value,
                hotelAddress: document.getElementById('hotel-address').value
            }
            // localStorage.setItem('formData',JSON.stringify(formData));


            var aNumber = !!localStorage.getItem('formData') ? JSON.parse(localStorage.getItem('formData')) : [];
            var number = formData;
            aNumber.push(number);
            localStorage.setItem('formData', JSON.stringify(aNumber));
            var length = JSON.parse(localStorage.getItem('formData')).length;
            var i = 0;
            while (i < length) {

                console.log(i);
                // console.log(JSON.parse(localStorage.getItem('formData'))[i])
                stupid = JSON.parse(localStorage.getItem('formData'))[i];
                if(stupid.hotelName == "abcd"){
                    console.log("old one")
                }
                else{
                    console.log("Newly entered")
                }
                i++;


            }
        }
        
        stupid = JSON.parse(localStorage.getItem('formData'))
        var length = JSON.parse(localStorage.getItem('formData')).length;

        var i = 0
        while (i < length) {
            if(stupid[i].hotelName == "abcd"){
                console.log("0")
            }
            else{
                // console.log(stupid[i].hotelConf)
                const para = document.createElement("div");
                const node = document.createTextNode(stupid[i].hotelName);
                para.className = "hotel-det p-3 mt-4 mb-2"
                para.id = `hotel[${i}]`
                para.appendChild(node);
                const element = document.getElementById("body");
                element.appendChild(para);
                document.getElementById(`hotel[${i}]`).innerHTML = `<h2>${stupid[i].hotelName}</h2> <p>${stupid[i].hotelAddress}</p> <h2>${stupid[i].checkIn} - ${stupid[i].checkOut}`;
                }
            i++
        }



        const flightInput = (e) => {
            e.preventDefault()
            let formData2 = {
                flightName: document.getElementById('flight-name').value,
                departdate: document.getElementById('flight-date').value,
                departtime: document.getElementById('flight-time').value,
                departairport: document.getElementById('airport').value,
                arrivedate: document.getElementById('flight-date2').value,
                arrivetime: document.getElementById('flight-time2').value,
                arriveairport: document.getElementById('airport2').value,
                hotelConf: document.getElementById('flight-conf').value,
                flightNotes: document.getElementById('flight-notes').value,
                flightCost: document.getElementById('flight-cost').value,
            }
            // localStorage.setItem('formData2',JSON.stringify(formData2));

            console.log("abcd")
            var aNumber2 = !!localStorage.getItem('formData2') ? JSON.parse(localStorage.getItem('formData2')) : [];
            var number = formData2;
            aNumber2.push(number);
            localStorage.setItem('formData2', JSON.stringify(aNumber2));
            var length2 = JSON.parse(localStorage.getItem('formData2')).length;
            var j = 0;
            while (j < length2) {
                console.log(j);
                // console.log(JSON.parse(localStorage.getItem('formData'))[i])
                stupid2 = JSON.parse(localStorage.getItem('formData2'))[j];
                console.log(stupid2.flightName)
                j++;
            }
        }

        stupid2 = JSON.parse(localStorage.getItem('formData2'))
        var length2 = JSON.parse(localStorage.getItem('formData2')).length;

        var i = 0
        while (i < length) {
            const para = document.createElement("div");
            const node = document.createTextNode(stupid2[i].flightName);
            para.className = "hotel-det p-3 mt-4 mb-2"
            para.id = `hotel1[${i}]`
            para.appendChild(node);
            const element = document.getElementById("body2");
            element.appendChild(para);
            document.getElementById(`hotel1[${i}]`).innerHTML = `<h2>${stupid2[i].flightName}</h2> <h2>${stupid2[i].departdate} - ${stupid2[i].arrivedate}`;
            i++
            }

    </script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiSYYYt195b1LN-16ynYeMkzLfa3S6DAQ&amp;libraries=places">
        </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/geocomplete/1.7.0/jquery.geocomplete.min.js"></script>
    <script src="<?= base_url();?>assets/front/js/script.js"></script>

    <script>
        $(document).ready(function () {
            $('#adresCity').selectize({

            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#countryId').selectize({

            });
        });
    </script>

</body>

</html>