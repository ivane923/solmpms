<div id="viewMoreSermon" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
              <h4 class="modal-title modal-title-cus" id="myModalLabel">Priest Sermon</h4>
              <div class="modal-body">
                  <div class="form-group">
                      <input type="hidden" name="comment_id_1" class="comment_id_1">
                  </div>
                  <div class="text-center">
                      <p style="font-style: italic;" >
                        <span class="fa fa-quote-left"></span>
                        <span class="p_content"></span> 
                        <span class="fa fa-quote-right"></span><br>

                      </p>
                        <span class="p_dateAdded"></span>
                      <br>
                      <p style="text-align: right; margin-right: 5px;"><span class="p_fullName"></span></p>
                      <p style="text-align: right; margin-right: 35px;">Parish Priest</p>
                      <p class="sermon_id hidden"></p>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="form-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger btndeleteComment" data-dismiss="modal">Delete</button>

                    <!-- <a href="#" id="deletePost" class="btn btn-danger" >Delete Post</a> -->
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin:40px 0px 0px 0px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner center-block" role="listbox" style="background: linear-gradient(to bottom, #0066ff 0%, #3399ff 100%); height: 325px; width: 100%; color:white; font-family: cursive;">
      <div class="item active" style="height: 100%;">
        <div class="col-sm-4 col-md-offset-4" style="margin-top: 30px;">
          <h3 class="text-center">
            DIOCESE OF NOVALICHES
            <hr>
          </h3>
          <h5 class="text-center">
            Welcome to Shrine of Our Lady of Mercy Parish. <br> We hope you find what you need about our Diocese, Parishes, Departments, and Offices.
            <br>
            <br>
            In case you need more information, feel free to get in touch with us through phone, email, or in our various Social Media accounts
            <br>
            <br>
            <button type="button" class="btn btn-primary" style="border:1px solid white; border-radius: 50px;">&nbsp; Contact Us &nbsp; </button>
            <br>
            <br>
          </h5>
        </div>
      </div>
      <?php foreach($sermons->result() as $sermon) { ?>
      <div class="item" style="height: 100%;">
        <div class="col-sm-4 col-md-offset-4" style="margin-top: 30px;">
          <img src="<?=@base_url();?><?php echo $sermon->profile; ?>" alt="" class='retina-ready center-block' width="80" height="80" style="border-radius: 100%;">
          <h5 class="text-center sermonName" id="lblpname<?php echo $sermon->sermon_id; ?>">
            Fr. <?php echo $sermon->FULLNAME; ?>
          </h5>
          <h5 class="text-center sermonText" style="margin-top: -3px;" id="lblcontent_0<?php echo $sermon->sermon_id; ?>">
            <?php echo $sermon->content; ?>
          </h5>
          <a href="#viewMoreSermon" data-toggle="modal" data-target="#viewMoreSermon" class="btn btn-danger center-block"  style="border-radius: 50px; width: 40%;" id="showReadmore<?php echo $sermon->sermon_id; ?>">Read more</a>
          <p class="hidden" id="lblcontent_1<?php echo $sermon->sermon_id; ?>"><?php echo $sermon->content; ?></p>
          <p class="hidden" id="lblid<?php echo $sermon->sermon_id; ?>"><?php echo $sermon->sermon_id; ?></p>
          <p class="hidden" id="lbldate<?php echo $sermon->sermon_id; ?>"><?php echo $sermon->date_added; ?></p>
        </div>
      </div>
      <?php } ?>
    
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    checkSermonLength();
  });

  function checkSermonLength() {
    var sermon = $(".sermonText").text().length; 
    console.log(sermon);
    if (sermon >= 225) {
      $('.showReadmore').show();
    } else {
      $('.showReadmore').remove();
    }
  }

  function truncateText(selector, maxLength) {
    var element = document.querySelector(selector),
    truncated = element.innerText;
    if (truncated.length > maxLength) {
      truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
  }
  document.querySelector('.sermonText').innerText = truncateText('.sermonText', 225);
  
  <?php foreach($sermons->result() as $sermon) { ?>
    $('#showReadmore<?php echo $sermon->sermon_id; ?>').click(function(){
      var p_name = $("#lblpname<?php echo $sermon->sermon_id; ?>").text();    
      var p_content = $("#lblcontent_1<?php echo $sermon->sermon_id; ?>").text();    
      var sermon_id = $("#lblid<?php echo $sermon->sermon_id; ?>").text();   
      var date_added = $("#lbldate<?php echo $sermon->sermon_id; ?>").text();   
      $('.p_fullName').html(p_name);
      $('.p_content').html(p_content);
      $('.sermon_id').html(sermon_id);
      $('.p_dateAdded').html(date_added);
      // console.log(date_added);
      // console.log('asd');
    });
  <?php } ?>
  
</script>

<!-- Under ng sermon 
    - merong dashboard ang registere parishians
    - nakalagay ang no. of events recorded, today's events, notification
 -->