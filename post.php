<?php
     include_once("templates/header.php");

     if(isset($_GET['id'])) {
          $postId = $_GET['id'];

          $currentPost;

          foreach($posts as $post) {
               if($post['id'] == $postId) {
                    $currentPost = $post;
               }
          }
     }
?>
<main id="post-container">
     <div id="content-container">
          <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
          <p id="post-description"><?php echo $currentPost['description'] ?></p>
          <div id="img-container">
               <img src="<?php echo $BASE_URL ?>/images/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
          </div>
     </div>
</main>

<?php
     include_once("templates/footer.php");
?>
     