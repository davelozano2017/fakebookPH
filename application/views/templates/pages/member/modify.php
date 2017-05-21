<?php 
foreach ($results as $row):
  $get = array(
    'picture' => $row->picture, 'name' => $row->name,
    'message' => $row->message, 'post_id' => $row->post_id,
    'likes' => $row->likes, 'date' => $row->date, 'id' => $row->id
    );
endforeach;
?>

<div class="row">
  <div class='col-md-12'>
  <br>
    
     <div class="box box-widget">
            
            <div class="box-header with-border">
              
              <div class="user-block">
                <img class="img-circle" src="<?php echo $get['picture']?>" alt="<?php echo $get['name']?>">
                <span class="username"><a href="#"><?php echo$get['name']?></a></span>
                <!-- <span class="description"></span> -->
              </div>

            </div>
          
          <form method="post">
              <div class="box-body">

                <textarea class="form-control costum"  id='comment' name='message' placeholder="What's on your mind?"><?php echo$get['message']?></textarea>   
             
              </div>

              <div class="box-footer">
                <div class="pull-right">
                  <input type="text" name="post_id" value='<?php echo $get['post_id']?>'>
                  <button id="update" class="btn btn-primary flat">Update</button>  
                </div>
              </div>  
            </form>


      </div>


  </div>

</div>


  