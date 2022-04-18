
<main>
    <section class="activity_bg">
        <div class="container-fluid">
            <div class="row justify-content-center main_tabs">
                <div class="col-12 text-center">
                    <h1 class="text-center heading_main">Add Activity</h1>
                </div>
                <div class="col-md-6 lodgings">
                    <div class="row mb-5">
                        <div class="col-lg-6 col-12">

                            <?php if(!empty($hotel)) { ?>
                                <h1>Hotels and lodgings</h1>
                                <?php foreach($hotel as $data): ?>
                                    <div id="body">
                                        <div class="hotel-det p-3 mt-4 mb-2">
                                            <h2><?= $data->hotel_name ?></h2>
                                            <p><?= $data->hotel_address ?></p>
                                            <p class="mb-2"> <strong>Check in : </strong>   <span><?= $data->hotel_start_data ?></span></p>
                                            <p>  <strong> Check out :</strong><span><?= $data->hotel_end_date ?></span> </p>
                                            <hr>
                                            <div class="row justify-content-between">
                                               <div class="col-md-6">
                                                   <h4><strong>Confirmation #</strong> </h4>
                                                   <p><?= $data->hotel_confirmation ?></p>
                                               </div>
                                               <div class="col-md-6">
                                                   <h4> <strong>Cost</strong> </h4>
                                                   <p>$<?= $data->hotel_cost ?></p>
                                               </div>
                                           </div>
                                           <hr>
                                           <h4><strong>Notes #</strong> </h4>
                                           <p><?= $data->hotel_notes ?></p>
                                       </div>
                                   </div>
                               <?php endforeach;?>
                           <?php } else { ?>

                             <h4>No Hotels found</h4>

                         <?php } ?>


                         <button class="btn add-btn mb-2" id="add-hotel">+ Add lodging</button>
                                <!-- <button class="btn add-btn mb-2"><i class="fa-solid fa-bed mr-2"></i><span>Find
                                hotels</span></button> -->
                                <div class="add-hotels">
                                    <div class="d-flex">
                                        <h1>Hotels and lodgings</h1>
                                    </div>
                                    <div>
                                        <!-- onsubmit="input(event);" -->
                                        <form action="<?= base_url('activity/hotel');?>" method="post" class="form container-fluid">
                                            <div class="hotel-det p-3 mt-4 mb-2 row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="hotel">HOTEL OR LODGING NAME</label>
                                                            <input type="text" id="hotel-name" name="hotel_name" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">HOTEL OR LODGING ADDRESS</label>
                                                            <input type="text" id="hotel-address" name="hotel_address">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="hotel">CHECK IN</label>
                                                            <input type="date" id="check-in" placeholder="Date"
                                                            name="hotel_start_data" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="hotel">CHECK OUT</label>
                                                            <input type="date" id="check-out" placeholder="Date"
                                                            name="hotel_end_date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 confo">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="hotel">CONFIRMATON #</label>
                                                            <input type="text" id="hotel-conf" name="hotel_confirmation" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">NOTES</label>
                                                            <input type="text" id="hotel-notes" name="hotel_notes">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">COST</label>
                                                            <input type="number" id="hotel-cost" min="0.00"
                                                            max="10000.00" step="0.01" name="hotel_cost" placeholder="$"
                                                            required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn_login mb-2" type="submit">+ Add</button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-12">
                                <?php if(!empty($flight)) { ?>
                                    <?php foreach($flight as $data):?>
                                        <div id="body2">
                                            <h1>Flights</h1>
                                            <div class="hotel-det p-3 mt-4 mb-2">
                                                <h2><?= $data->flight_name ?></h2>
                                                <p class="mb-2"> <strong>Depart :</strong>   <span><?= $data->flight_depart_date ?>  ||  <?= $data->flight_depart_time ?>  ||  <?= $data->flight_depart_airport ?></span> 
                                                 </p>
                                                <p>  <strong> Arrive :  </strong><span><?= $data->flight_arrive_date ?>  ||  <?= $data->flight_arrive_time ?>  ||  <?= $data->flight_arrive_airport ?></span> </p>
                                                <hr>
                                                <div class="row justify-content-between">
                                                   <div class="col-md-6">
                                                       <h4><strong>Confirmation #</strong> </h4>
                                                       <p><?= $data->flight_conformation ?></p>
                                                   </div>
                                                   <div class="col-md-6">
                                                       <h4> <strong>Cost</strong> </h4>
                                                       <p>$<?= $data->flight_cost ?></p>
                                                   </div>
                                               </div>
                                               <hr>
                                               <h4><strong>Notes #</strong> </h4>
                                               <p><?= $data->flight_notes ?></p>
                                           </div>
                                       </div>
                                   <?php endforeach;?>
                               <?php } else { ?>

                                <h4>No Flights found</h4>

                            <?php } ?> 
                            <button class="btn add-btn mb-2" id="add-flight">+ Add flight</button>


                            <div class="add-flights">
                                <div class="d-flex">
                                    <h1>Flights</h1>
                                </div>
                                <div class="">
                                    <!-- onsubmit="flightInput(event);" -->
                                    <form action="<?= base_url('activity/flight');?>" method="post" class="form container-fluid">
                                        <div class="row hotel-det p-3 mt-4 mb-2">
                                            <div class="col-7">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="flight">Flights</label>
                                                        <input type="text" id="flight-name" name="flight_name" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="depart">Depart</label>
                                                        <div class="row">
                                                            <div class="col-3 pr-0">
                                                                <input type="date" id="flight-date"
                                                                placeholder="Date" name="flight_depart_date" required>

                                                            </div>
                                                            <div class="col-3 pr-0">
                                                                <input type="time" id="flight-time"
                                                                placeholder="Time" name="flight_depart_time" required>

                                                            </div>
                                                            <div class="col-6 pr-0">
                                                                <input type="text" id="airport"
                                                                placeholder="Airport" name="flight_depart_airport" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="arrive">Arrive</label>
                                                        <div class="row">
                                                            <div class="col-3 pr-0">
                                                                <input type="date" id="flight-date2"
                                                                placeholder="Date" name="flight_arrive_date" required>

                                                            </div>
                                                            <div class="col-3 pr-0">
                                                                <input type="time" id="flight-time2"
                                                                placeholder="Time" name="flight_arrive_time" required>

                                                            </div>
                                                            <div class="col-6 pr-0">
                                                                <input type="text" id="airport2"
                                                                placeholder="Airport" name="flight_arrive_airport" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 confo">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="hotel">CONFIRMATON #</label>
                                                        <input type="text" id="flight-conf" name="flight_conformation" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="hotel">NOTES</label>
                                                        <input type="text" id="flight-notes" name="flight_notes">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="hotel">COST</label>
                                                        <input type="number" id="flight-cost" min="0.00"
                                                        max="10000.00" step="0.01" name="flight_cost" placeholder="$"
                                                        required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn_login mb-2">+ Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="nav nav-tab">
                        <div class="owl_tabs owl-carousel owl-theme">

                            <?php foreach($days as $key => $val):?>
                                <div class="item" id="<?= $val; ?>">
                                    <a value="<?= $val;?>" data-toggle="tab" class="btn_login" role="pill" aria-controls="home<?= $val; ?>" 
                                        href="#home<?= $val; ?>">Day <?= $key+1; ?></a>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </ul>


                        <div class="tab-content">
                            <?php foreach($days as $key => $val): ?>
                                <div id="home<?=$val;?>" class="tab-pane <?= $key+1==1 ? 'active': ''; ?>" role="tabpanel">
                                    <h4>Day <?= $key+1;?></h4>
                                    <div class="row p-md-0 p-3">
                                        <div class="col-12 event_phase_main">
                                            <div class="event_phase" id="morning">
                                                <p> Morning</p>
                                            </div>
                                            <p class="phase_para morning_desc">No description to show</p>
                                        </div>
                                        <div class="col-12 event_phase_main">
                                            <div class="event_phase">
                                                <p> Afternoon </p>
                                            </div>
                                            <p class="border-bottom-0 border-top-0 phase_para afternoon_desc">No description to show</p>
                                        </div>
                                        <div class="col-12 event_phase_main">
                                            <div class="event_phase">
                                                <p> Night </p>
                                            </div>
                                            <p class="phase_para night_desc">No description to show</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>



                    </div>
                    <div class="col-lg-3 col-md-5 offset-lg-1 mt-3 mt-md-0">

                        <form class="form_tabs_main" action="<?= base_url('activity/add');?>" method="post">
                            <div class="form-group">
                                <input type="text" name="activity_name" class="form-control" placeholder="Name Of Activity" id="">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="desc" id="editor1" cols="60" class="form-control" rows="5"
                                placeholder="Description"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" name="activity_cost" class="form-control" id="inputEmail4" placeholder="Cost $">
                                </div>

                                <div class="form-group col-md-6">
                                    <select id="inputState" class="form-control shift" name="shift">
                                        <option disabled selected>Schedule...</option>
                                        <option value="morning">Morning</option>
                                        <option value="afternoon">Afternoon</option>
                                        <option value="night">Night</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <select id="inputState" class="form-control days" name="day">
                                        <option disabled selected>Select a day</option>
                                        <?php foreach($days as $key => $val): ?>
                                            <option value="<?= $val;?>">Day <?= $key+1;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <select onchange="check()"  id="inputState" class="form-control getPlace" name="place">
                                        <option disabled selected>Select a Place</option>
                                        <?php foreach($destination as  $val): ?>
                                            <option value="<?= $val;?>"><?= $val;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                            </div>

                            <div id="map">
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="380" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=usa&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:380px;}</style><a href="https://www.embedgooglemap.net">map embed iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:380px;}</style></div></div>
                            </div>


                            <br>

                            <button type="submit" class="btn btn_theme">Add Activity</button>
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </main>


    <script type="text/javascript">

        function check() {
            var city = $('.getPlace').find(":selected").text();
            var gMap =
            `<div class="mapouter"><div class="gmap_canvas"><iframe width="380" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=${city}&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:380px;}</style><a href="https://www.embedgooglemap.net">map embed iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:380px;}</style></div></div>`
            $('#map').html(gMap)
        }
    </script>


    <script>
        $(".days").on('change',function(e){
            var day = $(".days").val();
            $("#hiddenDay").val(day);
            var shift = $("#hiddenShift").val();
            $(".tab-pane").removeClass('active');
            $("#home"+day).addClass('active');

            e.preventDefault();
            $(".morning_desc").html("No description show");
            $(".afternoon_desc").html("No description show");
            $(".night_desc").html("No description show");
            $.ajax({
                type: "POST",
                url: "<?= base_url('activity/getSearch'); ?>",
                data: {day: day},
                dataType: "json",
                success: function(response)
                {
                    if(response.length > 0) {
                        for(var i=0; i < response.length; i++) {
                            if(response[i].activity_shift == "morning") {
                                $(".morning_desc").html("morning"+response[i].activity_desc)
                            }
                            if(response[i].activity_shift == "afternoon") {
                                $(".afternoon_desc").html(response[i].activity_desc)
                            }
                            if(response[i].activity_shift == "night") {
                                $(".night_desc").html(response[i].activity_desc)
                            }
                        }
                    }
                }
            });
        });

        $(".item").on('click',function(e){
            var day = this.id;
            $("#hiddenDay").val(day);
            $(".tab-pane").removeClass('active');
            $("#home"+day).addClass('active');

            e.preventDefault();
            $(".morning_desc").html("No description to show");
            $(".afternoon_desc").html("No description to show");
            $(".night_desc").html("No description to show");
            $.ajax({
                type: "POST",
                url: "<?= base_url('activity/getSearch'); ?>",
                data: {day: day},
                dataType: "json",
                success: function(response)
                {
                    console.log(response);
                    if(response.length > 0) {
                        for(var i=0; i < response.length; i++) {
                            if(response[i].activity_shift == "morning") {
                                $(".morning_desc").html(response[i].activity_desc)

                            }
                            if(response[i].activity_shift == "afternoon") {
                                $(".afternoon_desc").html(response[i].activity_desc)

                            }
                            if(response[i].activity_shift == "night") {
                                $(".night_desc").html(response[i].activity_desc)

                            }
                        }
                    }
                }
            });
        });
    </script>

