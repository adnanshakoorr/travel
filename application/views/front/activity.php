
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
                                <div id="body">
                                    <h1>Hotels and lodgings</h1>
                                    <!-- <div class="hotel-det p-3 mt-4 mb-2">
                                        <h2>Hotel Riu Palace Zanzibar</h2>
                                        <p>Nungwi Rd, Nungwi, North Coast Zanzibar 73107</p>
                                    </div> -->
                                </div>
                                <button class="btn add-btn mb-2" id="add-hotel">+ Add lodging</button>
                                <!-- <button class="btn add-btn mb-2"><i class="fa-solid fa-bed mr-2"></i><span>Find
                                        hotels</span></button> -->
                                <div class="add-hotels">
                                    <div class="d-flex">
                                        <h1>Hotels and lodgings</h1>
                                    </div>
                                    <div>
                                        <form class="form container-fluid" onsubmit="input(event);">
                                            <div class="hotel-det p-3 mt-4 mb-2 row">
                                                <div class="col-6">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="hotel">HOTEL OR LODGING NAME</label>
                                                            <input type="text" id="hotel-name" name="hotel">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">HOTEL OR LODGING ADDRESS</label>
                                                            <input type="text" id="hotel-address" name="hotel">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="hotel">CHECK IN</label>
                                                            <input type="date" id="check-in" placeholder="Date"
                                                                name="hotel" required>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="hotel">CHECK OUT</label>
                                                            <input type="date" id="check-out" placeholder="Date"
                                                                name="hotel" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 confo">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="hotel">CONFIRMATON #</label>
                                                            <input type="text" id="hotel-conf" name="hotel" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">NOTES</label>
                                                            <input type="text" id="hotel-notes" name="hotel">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">COST</label>
                                                            <input type="number" id="hotel-cost" min="0.00"
                                                                max="10000.00" step="0.01" name="hotel" placeholder="$"
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
                                <div id="body2">
                                    <h1>Flights</h1>
                                    <!-- <div class="hotel-det p-3 mt-4 mb-2">
                                        <h2>VY 2003</h2>
                                        <p>FEB 24  ||  9:00 pm  ||  Calgary Airport</p>
                                    </div> -->
                                    <button class="btn add-btn mb-2" id="add-flight">+ Add flight</button>
                                </div>
                                <div class="add-flights">
                                    <div class="d-flex">
                                        <h1>Flights</h1>
                                    </div>
                                    <div class="">
                                        <form action="" class="form container-fluid" onsubmit="flightInput(event);">
                                            <div class="row hotel-det p-3 mt-4 mb-2">
                                                <div class="col-7">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="flight">Flights</label>
                                                            <input type="text" id="flight-name" name="flight" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="depart">Depart</label>
                                                            <div class="row">
                                                                <div class="col-3 pr-0">
                                                                    <input type="date" id="flight-date"
                                                                        placeholder="Date" name="depart" required>

                                                                </div>
                                                                <div class="col-3 pr-0">
                                                                    <input type="time" id="flight-time"
                                                                        placeholder="Time" name="depart" required>

                                                                </div>
                                                                <div class="col-6 pr-0">
                                                                    <input type="text" id="airport"
                                                                        placeholder="Airport" name="depart" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="arrive">Arrive</label>
                                                            <div class="row">
                                                                <div class="col-3 pr-0">
                                                                    <input type="date" id="flight-date2"
                                                                        placeholder="Date" name="arrive" required>

                                                                </div>
                                                                <div class="col-3 pr-0">
                                                                    <input type="time" id="flight-time2"
                                                                        placeholder="Time" name="arrive" required>

                                                                </div>
                                                                <div class="col-6 pr-0">
                                                                    <input type="text" id="airport2"
                                                                        placeholder="Airport" name="arrive" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5 confo">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="hotel">CONFIRMATON #</label>
                                                            <input type="text" id="flight-conf" name="hotel" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">NOTES</label>
                                                            <input type="text" id="flight-notes" name="hotel">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="hotel">COST</label>
                                                            <input type="number" id="flight-cost" min="0.00"
                                                                max="10000.00" step="0.01" name="hotel" placeholder="$"
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
                        <ul class="nav nav-tabs">
                            <div class="owl_tabs owl-carousel owl-theme">
                                <div class="item">
                                    <li class="active"><a data-toggle="tab" class="btn_login" href="#home">Day 1</a></li>
                                </div>
                                <div class="item">
                                    <li><a data-toggle="tab" class="btn_login" href="#menu1">Day 2</a></li>
                                </div>
                                <div class="item">
                                    <li><a data-toggle="tab" class="btn_login" href="#menu2">Day 3</a></li>
                                </div>
                                <div class="item">
                                    <li><a data-toggle="tab" class="btn_login" href="#menu3">Day 4</a></li>
                                </div>
                                <div class="item">
                                    <li><a data-toggle="tab" class="btn_login" href="#menu4">Day 5</a></li>
                                </div>
                            </div>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active show">
                                <div class="row p-md-0 p-3">
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> morning</p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> Afternoon </p>
                                        </div>
                                        <p class="border-bottom-0 border-top-0 phase_para">It is a long established fact
                                            that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> night </p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> morning</p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> Afternoon </p>
                                        </div>
                                        <p class="border-bottom-0 border-top-0 phase_para">It is a long established fact
                                            that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> night </p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> morning</p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> Afternoon </p>
                                        </div>
                                        <p class="border-bottom-0 border-top-0 phase_para">It is a long established fact
                                            that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                    <div class="col-12 event_phase_main">
                                        <div class="event_phase">
                                            <p> night </p>
                                        </div>
                                        <p class="phase_para">It is a long established fact that a reader will be
                                            distracted by the
                                            readable
                                            content of a page when
                                            looking at its layout. The point of using Lorem Ipsum is that it has a
                                            more-or-less
                                            normal distribution
                                            of letters, as opposed to using 'Content here, content here', making it look
                                            like
                                            readable English. Many
                                            desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their
                                            default model text, and a
                                            search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                            Various
                                            versions have
                                            evolved over the years, sometimes by accident, sometimes on purpose
                                            (injected humour
                                            and the like).</p>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <h3> 4</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution
                                    of letters, as opposed to using 'Content here, content here', making it look like
                                    readable English. Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                    versions have
                                    evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                    and the like).</p>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <h3>5</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when
                                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution
                                    of letters, as opposed to using 'Content here, content here', making it look like
                                    readable English. Many
                                    desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a
                                    search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                    versions have
                                    evolved over the years, sometimes by accident, sometimes on purpose (injected humour
                                    and the like).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 offset-lg-1 mt-3 mt-md-0">

                        <form class="form_tabs_main">
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Name Of Activity" id="">
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="60" class="form-control" rows="5"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Cost $">
                                </div>
                                <div class="form-group col-md-6">

                                    <select id="inputState" class="form-control">
                                        <option selected>Schedule...</option>
                                        <option value="morning">Morning</option>
                                        <option value="afternoon">Afternoon</option>
                                        <option value="night">Night</option>
                                    </select>
                                </div>
                            </div>
                            <div id="mapDetails">
                                <div class="form-group">

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fulladdressText"
                                            placeholder="Enter Your Loaction">
                                        <span class="input-group-btn">
                                            <button class="btn_location btn" id="geolocateButton" type="button"
                                                data-toggle="tooltip" data-placement="top"
                                                title="Use your current location" data-title-clear="Clear address field"
                                                data-title-geolocate="Use your current location"
                                                data-title-loading="Please wait, finding your loaction..."><i
                                                    class="fa fa-location-arrow" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>

                                <div id="map-container">
                                    <div id="map-container-inner">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_theme">Add Activity</button>
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </main>

    