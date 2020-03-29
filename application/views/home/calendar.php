<center>
  <div class="container" style="margin-top: 30px;">
    <div class="row">
      <div class="box" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1)">
        <div class="box-title">
          <h2>
            <i class="fa fa-calendar"></i> Calendar of Events
            <span style="font-size: 16px;color: grey;"><br>Parish's and Community events</span>
          </h2>
        </div>
        <div class="box-content">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
        </div>
        <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
          <div class="modal-body">
            <div class="form-group">
              <label for="p-in" class="col-md-4 label-heading">Event Name</label>
              <div class="col-md-8 ui-front">
                  <input type="text" class="form-control" name="name" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="p-in" class="col-md-4 label-heading">Description</label>
              <div class="col-md-8 ui-front">
                  <input type="text" class="form-control" name="description">
              </div>
            </div>
            <div class="form-group">
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
            <div class="form-group" >
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
            <div class="form-group hidden" >
              <label for="p-in" class="col-md-4 label-heading">Start Date</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="start_date" id="start_date">
              </div>
            </div>
            <div class="form-group hidden">
              <label for="p-in" class="col-md-4 label-heading">End Date</label>
              <div class="col-md-8">
                <input type="text" class="form-control" name="end_date"  id="end_date">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <?php if ($this->session->userdata('user_type') != 'Member') {  ?>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Add Event">
            <?php } else { ?>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <?php } ?>
          </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-left" style="color:dodgerblue"><i class="fa fa-calendar"></i> Event</h4>
        </div>
        <?php echo form_open(site_url("calendar/edit_event"), array("class" => "form-horizontal")) ?>
          <div class="modal-body text-left">
            <div class="col-sm-12">
              <div class="form-group">
                  <label for="LastName" class="control-label">Event Name:</label>
                  <p class="p-event" id="name"></p>

                  <label for="LastName" class="control-label">Description:</label>
                  <p class="p-event" id="description"></p>
              </div>
            </div>
            <div class="form-group" >
              <label for="p-in" class="col-md-4 label-heading">Time</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="time" id="time" readonly="">
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
            <?php if ($this->session->userdata('user_id')<>'') {  ?>
              <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                <div class="col-md-8">
                  <input type="checkbox" name="delete" value="1">
                </div>
                <input type="hidden" name="eventid" id="event_id" value="0" />
              </div>
          </div>
          <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Update Event">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <?php } else { ?>
              <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            <?php } ?>
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
    select: function(start, end) {
      $('#addModal #start_date').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
      $('#addModal #end_date').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
      $('#addModal').modal('show');
    },
    dayClick: function(date, jsEvent, view) {
      date_last_clicked = $(this);
      $(this).css('background-color', '#F4F4F4');
      $('#addModal').modal();
    },
    eventClick: function(event, jsEvent, view) {
      $('#name').html(event.title);
      $('#description').html(event.description);
      $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      if(event.end) {
        $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
      } else {
        $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      }
      $('#event_id').val(event.id);
      $('#event_id').val(event.startTime);
      $('#editModal').modal();
    },
  });
});
    
</script>