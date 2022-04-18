
<main>
    <section class="trip_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="text-center heading_main">Plan a new trip</h1>
                </div>
                <div class="col-md-6">
                    <form autocomplete="off" action="<?= base_url('plan/start')?>" method='post'>
                     <!-- <form id="durationForm"> -->

                        <div class="form-row d-block d-md-flex position-relative justify-content-center align-items-end trip_select_form">
                            <label for="" class="where_label">Where to?</label>
                            <select id="adresCity" name="place[]" multiple="multiple" required>
                                <option value="" selected>e.g. Paris, London etc</option>
                                <option value="paris">Paris</option>
                                <option value="london">London</option>
                                <option value="rome">Rome</option>
                            </select>

                            <div class="small text-success pl-1 mt-1">Choose a destination to start planning</div>
                        </div>

                        <div class="form-row d-block d-md-flex position-relative mt-4  align-items-end trip_select_form">
                            <label for="" class="where_label">Dates (optional)</label>
                            <input type="text" name="duration" value="" class="date-selection" placeholder="Start Date | End Date" />
                            <input type="hidden" name="startDate" value="" id="startDate">
                            <input type="hidden" name="endDate" value="" id="endDate">
                        </div>
                        <div class="mt-4 text-center">
                            <!-- <a href="<?= base_url('activity');?>" class="btn btn_login btn_submit">Start planning</a> -->
                            <button onclick="sendDurationData()" value="Submit" class="btn btn_login btn_submit">Start planning</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<script type="text/javascript">

  var startDate;
  var endDate;

  $(function() {

    var today = new Date(); 
    var dd = today.getDate(); 
    var mm = today.getMonth()+1; //January is 0! 
    var yyyy = today.getFullYear(); 
    if(dd<10){ dd='0'+dd } 
        if(mm<10){ mm='0'+mm } 
            var today = mm+'/'+dd+'/'+yyyy; 
        $('input[name="duration"]').daterangepicker({
           minDate:today,
           autoUpdateInput: false,
           locale: {
              cancelLabel: 'Clear'
          }
      });

        $('input[name="duration"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

          startDate = picker.startDate.format('MM/DD/YYYY');
          endDate = picker.endDate.format('MM/DD/YYYY');
      });


        $('input[name="duration"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });

    });

  function sendDurationData(){
      $('input[id=startDate]').val(startDate);
      $('input[id=endDate]').val(endDate);
  }


</script>
