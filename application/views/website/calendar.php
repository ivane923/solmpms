<?php $this->load->view('includes/header_1');?>
<hr>
<center>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>
          <i class="fa fa-calendar"></i> Calendar of Events
          <span style="font-size: 16px;color: grey;"><br>Parish's and Community events</span>
        </h2>
        <div id="calendar"></div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Calendar Event</h4>
        </div>
        <?php echo form_open(site_url("calendar/edit_event"), array("class" => "form-horizontal")) ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="p-in" class="col-md-4 label-heading">Event Name</label>
              <div class="col-md-8 ui-front">
                  <input type="text" class="form-control" name="name" value="" id="name" readonly="readonly">
              </div>
            </div>
            <div class="form-group">
              <label for="p-in" class="col-md-4 label-heading">Description</label>
              <div class="col-md-8 ui-front">
                  <input type="text" class="form-control" name="description" id="description" readonly="readonly">
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">Color</label>
              <div class="col-sm-8">
                <select name="color" class="form-control chosen-select" id="color">
                  <option value="">Choose color</option>
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                  <option style="color:#008000;" value="#008000">&#9724; Green</option>             
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                  <option style="color:#000;" value="#000">&#9724; Black</option>  
                </select>
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">Time</label>
              <div class="col-md-8">
                  <select name="time" class="form-control chosen-select" id="time">
                    <option value="">Select Time</option>
                    <option value="8am">8am</option>
                    <option value="9am">9am</option>
                    <option value="10am">10am (Public)</option>
                    <option value="11am">11am</option>
                    <option value="12PM">12pm</option>
                    <option value="1PM">1pm</option>
                    <option value="2PM">2pm</option>
                    <option value="3PM">3pm</option>
                    <option value="4PM">4pm</option>
                </select>
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">Start Date</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="start_date">
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">End Date</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="end_date">
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
              <div class="col-md-8">
                <input type="checkbox" name="delete" value="1">
              </div>
              <input type="hidden" name="eventid" id="event_id" value="0" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</center>

    
<script type="text/javascript">
$(".chosen-select").chosen({
  disable_search_threshold: 10,
  search_contains: true,
  width: '100%'
});
$(document).ready(function() {
  var date_last_clicked = null;
  $('#calendar').fullCalendar({
    eventSources: [
      {
        events: function(start, end, timezone, callback) {
          $.ajax({
            url: '<?php echo base_url() ?>calendar/get_events',
            dataType: 'json',
            data: {
              // our hypothetical feed requires UNIX timestamps
              start: start.unix(),
              end: end.unix()
            },
            success: function(msg) {
              var events = msg.events;
              callback(events);
            }
          });
        }
      },
    ],
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,basicWeek,basicDay'
    },
    // defaultDate: '2018-11-01',
    // editable: true,
    eventLimit: true, // allow "more" link when too many events
    selectable: true,
    selectHelper: true,
    eventClick: function(event, jsEvent, view) {
      $('#name').val(event.title);
      $('#description').val(event.description);
      $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      if(event.end) {
        $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
      } else {
        $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      }
      $('#event_id').val(event.id);

      $('#editModal').modal();
    },
  });
});
    
</script>