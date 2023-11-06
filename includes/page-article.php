<section class="container p-5">
    <div class="row">
        <div class="col-lg-8">
          <h2><?php the_title();?></h2>
          By 
          <span class="meta_author"><?php the_author_link();?> </span>
          <small class="float-right"><?php the_date();?></small>
          <?php //if ( has_post_thumbnail() ) { the_post_thumbnail('',['class'=> 'img-fluid']);} ?>
            <p class="news-content pt-3 pb-3"><?php the_content( ); ?></p>
            <!-- <span class="float-right right-comment"><span class="float-right right-comment light-red"><?php //comments_number(); ?> <i class="fa fa-comment"></i></span></span> -->
            
        </div>
        <div class="col-lg-4">
            <h2>MORE ACTIVITIES</h2>
            <?php
          $args = [
            'numberposts'=>3,
            'order'=> 'DESC',
            // 'post_type'=>'training'
          ];
          
          $postslist = get_posts( $args );
          foreach ($postslist as $indx=>$post) :  setup_postdata($post); ?>

                <div class="row">
                    <div class="col-lg-12 p-2">
                        <a   href="<?php the_permalink();?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('',['class' => 'img-thumbnail w-100 rounded'] ); }else{ echo "<img src='https://files.idtechnology.com/VideoIcon-300px.jpg' class='img-full-width'/>"; } ?>
                        <p><?php the_title(); ?>
                        <small class="float-right"><?php the_date();?></small>
                        <hr>
                        </p>
                    </a>

                    </div>
                </div>

        <?php endforeach; ?>
        </div>
    </div>
</section>