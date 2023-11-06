    <div class="row">
        <?php
          $args = [ 'order'=> 'DESC'];
          $postslist = get_posts( $args );
          
          foreach ($postslist as $indx=>$post) :  setup_postdata($post); ?>
            <div class="col-md-4">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid2']);?>
                <h3><?php the_title();?></h3>
                <p><?php echo strip_tags(substr(get_the_content(),0, 120));?></p>
                <a class="btn btn-warning" href="<?php the_permalink();?>">Read more</a>
            </div>
          <?php endforeach; ?>
    
        <div class="col-lg-12">
            <?php the_posts_pagination();?> 
        </div>
    </div>