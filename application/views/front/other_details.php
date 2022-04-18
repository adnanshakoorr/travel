
<main>
    <section class="activity_bg">
        <div class="container-fluid">
            <div class="row justify-content-center main_tabs">
                <div class="col-12 text-center">
                    <h1 class="text-center heading_main">Hotels and Flight details</h1>
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
                                <h1>Flights</h1>
                                <?php if(!empty($flight)) { ?>
                                    <?php foreach($flight as $data):?>
                                        <div id="body2">
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

                </div>


            </div>
        </div>
    </section>
</main>