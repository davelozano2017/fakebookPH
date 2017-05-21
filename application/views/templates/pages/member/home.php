<?php
foreach ($user_data as $r):
  $udata = array(
    'id'     => $r->id,  'picture'   => $r->picture,
    'lastname' => $r->lastname, 'firstname' => $r->firstname,
    'email' => $r->email
    
    );
endforeach;
$name = $udata['firstname']. ' ' .$udata['lastname'];
?>

<section class="content">

	<div class="row">
	    
      <?php $this->load->view('templates/pages/member/left-sidebar')?>

	    <div class="col-md-6">
	    
      <!-- start -->
        <div class="box box-widget">
            
            <div class="box-header with-border">
              
              <div class="user-block">
                <img class="img-circle" src="<?php echo $udata['picture']?>" alt="<?php echo $udata['lastname'] . ' ' . $udata['firstname']?>">
                <span class="username"><a href="#"><?php echo$name?></a></span>
                <!-- <span class="description"></span> -->
              </div>

            </div>
	        
	        <form method="post">
	            <div class="box-body">

	             	<textarea class="form-control costum"  id='comment' name='message' placeholder="What's on your mind?"></textarea>   
	           
	            </div>

	            <div class="box-footer">
		           	<div class="pull-right">
                  <input type="hidden" name="email" value='<?php echo $udata['email']?>'>
                  <input type="hidden" name="name" value='<?php echo $name?>'>
                  <button id="post" class="btn btn-primary flat">POST</button>  
		           	</div>
	            </div>	
            </form>


    	</div>

    	
        <?php $this->load->view('templates/pages/member/newsfeed')?>

          <!-- end -->

        </div>

      	<?php $this->load->view('templates/pages/member/right-sidebar')?>


  	</div>

</section>
     