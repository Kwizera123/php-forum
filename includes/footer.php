<?php 

  $posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
  $posts->execute();

  $allPosts = $posts->fetchAll(PDO::FETCH_OBJ);


 ?>

<div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
  <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div>
  <div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;">
    <div class="sticky-inner">
      <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="create-post.php">Ask Question</a>
      <div class="bg-white mb-3">
        <h4 class="px-3 py-4 op-5 m-0">
          Latest Posts
        </h4>
        <hr class="m-0">
        <?php foreach ($allPosts as $post): ?>
        <div class="pos-relative px-3 py-3">
          <h6 class="text-primary text-sm">
            <a href="single.php?id=<?php echo $post->id; ?>" class="text-primary"><?php echo $post->title; ?></a>
          </h6>
          <p class="mb-0 text-sm"><span class="op-6">Posted</span> <?php echo $post->created_at; ?>  <a class="text-black" href="#"><?php echo $post->category; ?></a></p>
        </div>
        <hr class="m-0">
        <?php endforeach; ?>
    </div>
  </div>
</div>
</div>
</div>
</body>

</html>