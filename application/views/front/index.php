
    <main>
        <section class="trip_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1 class="text-center heading_main">Plan a new trip</h1>
                    </div>
                    <div class="col-md-6">

                        <div class="form-row d-block d-md-flex position-relative justify-content-center align-items-end trip_select_form">
                            <label for="" class="where_label">Where to?</label>
                            <select id="adresCity" name="adresCity" multiple="multiple">
                                <option value="" selected>e.g. Paris, Hawaii, Japan</option>
                                <option value="istanbul">istanbul</option>
                                <option value="Ankara">ankara</option>
                                <option value="izmir">izmir</option>
                                <option value="Adana">adana</option>
                                <option value="Adıyaman">adıyaman</option>
                                <option value="Afyon">afyon</option>
                                <option value="Ağrı">ağrı</option>
                                <option value="Aksaray">aksaray</option>
                                <option value="Amasya">amasya</option>
                                <option value="Antalya">antalya</option>
                                <option value="Ardahan">ardahan</option>
                                <option value="Artvin">artvin</option>
                                <option value="Aydın">aydın</option>
                                <option value="Balıkesir">balıkesir</option>
                                <option value="Bartın">bartın</option>
                                <option value="Batman">batman</option>
                                <option value="Bayburt">bayburt</option>
                                <option value="Bilecik">bilecik</option>
                                <option value="Bingöl">bingöl</option>
                                <option value="Bitlis">bitlis</option>
                                <option value="Bolu">bolu</option>
                                <option value="Burdur">burdur</option>
                                <option value="Bursa">bursa</option>
                                <option value="canakkale">canakkale</option>
                                <option value="cankırı">cankırı</option>
                                <option value="corum">corum</option>
                                <option value="Denizli">denizli</option>
                                <option value="Diyarbakır">diyarbakır</option>
                                <option value="Düzce">düzce</option>
                                <option value="Edirne">edirne</option>
                                <option value="Elazığ">elazığ</option>
                                <option value="Erzincan">erzincan</option>
                                <option value="Erzurum">erzurum</option>
                                <option value="Eskişehir">eskişehir</option>
                                <option value="Gaziantep">gaziantep</option>
                                <option value="Giresun">giresun</option>
                                <option value="Gümüşhane">gümüşhane</option>
                                <option value="Hakkari">hakkari</option>
                                <option value="Hatay">hatay</option>
                                <option value="Iğdır">iğdır</option>
                                <option value="Isparta">isparta</option>
                                <option value="icel">icel</option>
                                <option value="Kahramanmaraş">kahramanmaraş</option>
                                <option value="Karabük">karabük</option>
                                <option value="Karaman">karaman</option>
                                <option value="Kars">kars</option>
                                <option value="Kastamonu">kastamonu</option>
                                <option value="Kayseri">kayseri</option>
                                <option value="Kırıkkale">kırıkkale</option>
                                <option value="Kırklareli">kırklareli</option>
                                <option value="Kırşehir">kırşehir</option>
                                <option value="Kilis">kilis</option>
                                <option value="Kocaeli">kocaeli</option>
                                <option value="Konya">konya</option>
                                <option value="Kütahya">kütahya</option>
                                <option value="Malatya">malatya</option>
                                <option value="Manisa">manisa</option>
                                <option value="Mardin">mardin</option>
                                <option value="Muğla">muğla</option>
                                <option value="Muş">muş</option>
                                <option value="Nevşehir">nevşehir</option>
                                <option value="Niğde">niğde</option>
                                <option value="Ordu">ordu</option>
                                <option value="Osmaniye">osmaniye</option>
                                <option value="Rize">rize</option>
                                <option value="Sakarya">sakarya</option>
                                <option value="Samsun">samsun</option>
                                <option value="Siirt">siirt</option>
                                <option value="Sinop">sinop</option>
                                <option value="Sivas">sivas</option>
                                <option value="Şanlıurfa">şanlıurfa</option>
                                <option value="Şırnak">şırnak</option>
                                <option value="Tekirdağ">tekirdağ</option>
                                <option value="Tokat">tokat</option>
                                <option value="Trabzon">trabzon</option>
                                <option value="Tunceli">tunceli</option>
                                <option value="Uşak">uşak</option>
                                <option value="Van">van</option>
                                <option value="Yalova">yalova</option>
                                <option value="Yozgat">yozgat</option>
                                <option value="Zonguldak">zonguldak</option>
                            </select>

                            <div class="small text-success pl-1 mt-1">Choose a destination to start planning</div>
                        </div>

                        <div class="form-row d-block d-md-flex position-relative mt-4  align-items-end trip_select_form">
                            <label for="" class="where_label">Dates (optional)</label>
                            <input type="text" name="datefilter4" value="" class="date-selection" placeholder="Start Date | End Date" />

                        </div>
                        <div class="mt-4 text-center">
                            <a href="<?= base_url('activity');?>" class="btn btn_login btn_submit">Start planning</a>
                            <!-- <button type="submit" value="Submit" class="btn btn_login btn_submit">Start planning</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
   