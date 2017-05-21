<?php 
foreach ($results as $row):
  $get = array(
    'picture' => $row->picture, 'name' => $row->name,
    'message' => $row->message, 'post_id' => $row->post_id,
    'likes' => $row->likes, 'date' => $row->date, 'id' => $row->id
    );

?>
<div class="box box-widget">
    
    <div class="box-header with-border">
      
      <div class="box-tools pull-right">
        

          <button class="dropdown-toggle btn btn-box-tool" data-toggle="dropdown" href="#">
             <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li role="presentation"><a href="<?= site_url('modify/'.$get['post_id']) ?>" role="menuitem" tabindex="-1" >
            <i class='fa fa-pencil'></i> Edit Post</a></li>
            <li role="presentation"><a href="<?= site_url('delete/'.$get['post_id']) ?>" role="menuitem" tabindex="-1" >
            <i class='fa fa-remove'></i> Delete Post</a></li>
          </ul>


      </div>

      <div class="user-block">
        <img class="img-circle" src="<?php echo$get['picture']?>" alt="User Image">
        <span class="username"><a href="#"><?php echo$get['name']?></a></span>
        <span class="description">Shared publicly - <?php echo$get['date']?></span>
      </div>

    </div>


    <div class="box-body">

      <p><?php echo$get['message']?></p>

      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
      <span class="pull-right text-muted"><?php echo$get['likes']?> likes</span>
   
    </div>

    <!-- <div class="box-footer box-comments">
        <div class="box-comment">
          <img class="img-circle img-sm" src="<?php echo base_url()?>assets/dist/img/user3-128x128.jpg" alt="User Image">
          <div class="comment-text">
                <span class="username">
                  Maria Gonzales
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span>
            It is a long established fact that a reader will be distracted
            by the readable content of a page when looking at its layout.
          </div>
        </div>
    </div> -->

    <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="<?php echo$get['picture']?>" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
          </div>
        </form>
    </div>

</div>



<?php endforeach; ?>


  