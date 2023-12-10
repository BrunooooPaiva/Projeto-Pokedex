<?php
     include_once("templates/header.php");
?>
     <main>
          <div id="title-container">
               <h1>Bem vindos à Pokedéx Pokémon</h1>
               <p>Informações detalhadas sobre Pokémons</p>
          </div>

          <div id="principal-home">
               <?php foreach($posts as $post): ?>
                    <div class="post-box">
                              <img src="<?php echo $BASE_URL ?>/images/<?php echo $post['img'] ?>" alt="<?php echo $post['title'] ?>">
                              <h2 class="post-title">
                                   <a href="<?php echo $BASE_URL ?>post.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a>
                              </h2>
                    </div>
               <?php endforeach; ?>
          </div>


     </main>
<?php
     include_once("templates/footer.php");
?>
     
