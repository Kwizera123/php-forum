<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>

<?php 
  if(isset($_POST['submit'])) {
    if(empty($_POST['author_name']) OR empty($_POST['replay'])) {
      echo "<script>alert('One or More inputs are empty');</script>";
    }else{
      $author_name = $_POST['author_name'];
      $replay = $_POST['replay'];
      $post_id = $_POST['post_id'];

      $insert = $conn->prepare("INSERT INTO replies (author_name, replay ,post_id) VALUES
      (:author_name,:replay,:post_id)");

      $insert-> execute([
        ":author_name" => $author_name,
        ":replay" => $replay,
        ":post_id" => $post_id
      ]);

      header("location: single.php");
    }
  }
?>


          <!-- Main content -->
          <div style="margin-top: 43px;" class="col-lg-9 mb-3">
           
            <!-- End of post 1 -->
            <div class="mt-5 card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
              <div class="row align-items-center">
                <div class="col-md-12 mb-3 mb-sm-0">
                  <h5>
                    <a href="#" class="text-primary">Drupal 8 quick starter guide</a>
                  </h5>
                  <p>
                    Appropriately cultivate principle-centered infrastructures via world-class niches. Professionally morph cooperative methods of empowerment for out-of-the-box resources. Monotonectally create cross-unit web services via efficient vortals. Quickly architect bleeding-edge niche markets rather than goal-oriented vortals. Completely grow reliable customer service rather than interdependent action items.

Quickly engineer installed base content via client-based action items. Seamlessly transition backend models whereas business imperatives. Collaboratively optimize resource-leveling catalysts for change after cross-media paradigms. Assertively network extensible e-commerce whereas timely intellectual capital. Appropriately revolutionize premier infomediaries.
                  </p>
                  <p class="text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">20 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">KenyeW</a></p>
                  <div class="text-sm op-5"> <a class="text-black mr-2" href="#">Programming</a></div>
                </div>
                
              </div>
            </div>

            <div style="margin-left: 40px;" class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
              <div class="row align-items-center">
                <div class="col-md-12 mb-3 mb-sm-0">
                  <h5>
                    <a href="#" class="text-primary">Write Comment</a>
                  </h5>
                  <form method="POST" action="single.php?id=1">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Author Name</label>
                      <input type="text" name="author_name" class="form-control" id="exampleFormControlInput1" placeholder="author name">
                    </div>
            
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Reply</label>
                      <textarea class="form-control" name="replay" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      
                      <input type="hidden" name="post_id" value="1" class="form-control" id="exampleFormControlInput1" placeholder="author name">
                    </div>
                    <button name="submit" type="submit" class="mt-4 btn btn-primary w-100">Add Reply</button>
                  </form>
                </div>
                
              </div>
          </div>

            <!-- Replies -->
            <div style="margin-left: 40px;" class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                  <div class="col-md-12 mb-3 mb-sm-0">
                    <h5>
                      <a href="#" class="text-primary">Mohamed Hassan</a>
                    </h5>
                    <p>
                      Appropriately cultivate principle-centered infrastructures via world-class niches
                    </p>
                    <p class="text-sm"><span class="op-6">Commented</span> <a class="text-black" href="#">20 minutes</a> ago</p>
                  </div>
                  
                </div>
            </div>

            <div style="margin-left: 40px;" class="card row-hover pos-relative py-3 px-3 mb-3 border-primary border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                  <div class="col-md-12 mb-3 mb-sm-0">
                    <h5>
                      <a href="#" class="text-primary">Mohamed Hassan</a>
                    </h5>
                    <p>
                      Appropriately cultivate principle-centered infrastructures via world-class niches
                    </p>
                    <p class="text-sm"><span class="op-6">Commented</span> <a class="text-black" href="#">20 minutes</a> ago</p>
                  </div>
                  
                </div>
            </div>
 
          </div>
          <!-- Sidebar content -->
          <?php require "includes/footer.php"; ?>