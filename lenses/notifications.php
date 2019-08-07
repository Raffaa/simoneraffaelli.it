<?php if(isset($_GET['error'])) {?>
  <div class="alert alert-danger">
	 <div class="container">
		 <div class="alert-icon">
			<i class="material-icons">error_outline</i>
		</div>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true"><i class="material-icons">clear</i></span>
		</button>
		 <b>Error Alert:</b> Ouch! You screwed up the server this time. You should find a good excuse for your Boss...
	</div>
    </div>
<?php }
if(isset($_GET['bot'])) { ?>
  <div class="alert alert-danger">
        <div class="container">
			 <div class="alert-icon">
				<i class="material-icons">error_outline</i>
			</div>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="material-icons">clear</i></span>
			</button>
			 <b>Error Alert:</b> Ouch! Go home bot, you're drunk :|
        </div>
    </div>
<?php }
if(isset($_GET['emailSentSuccesfully'])) { ?>
  <div class="alert alert-success">
            <div class="container">
                <div class="alert-icon">
                    <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                <b>Email sent successfully:</b> Yuhuuu!
         </div>
    </div>
<?php }
  if(isset($_GET['emailFail'])) { ?>
    <div class="alert alert-danger">
       <div class="container">
         <div class="alert-icon">
           <i class="material-icons">error_outline</i>
         </div>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
          </button>
             <b>Error Alert:</b> Ouch! There was an error during he mail delivery. Please retry!
          </div>
    </div>
<?php }
if(isset($_GET['thankYou'])) { ?>
  <div class="alert alert-success">
     <div class="container">
       <div class="alert-icon">
         <i class="material-icons">check</i>
       </div>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
           <b>Thank You:</b> Your Translation Was Submitted Successfully!
        </div>
  </div>
<?php } ?>
