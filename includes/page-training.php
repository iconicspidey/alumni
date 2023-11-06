<section class="container p-5">
    <div class="row p-2">
        <?php
          $args = [
            // 'numberposts'=>3,
            'order'=> 'ASC',
            'post_type'=>'training'
          ];
          
          $postslist = get_posts( $args );
          foreach ($postslist as $indx=>$post) :  setup_postdata($post); ?>
                <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-2 p-1">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('',['class' => 'w-100 h-100 rounded'] ); }else{ echo "<img src='https://files.idtechnology.com/VideoIcon-300px.jpg' class='img-full-width'/>"; } ?>
                    </div>
                    <div class="col-lg-10 p-1">
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt();?></p>
                        <small class="float-right"><?php the_date();?></small>
                        <a class="btn btn-warning" href="<?php the_permalink();?>">Read more</a>
                        <hr>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="col-lg-12">
            <?php the_posts_pagination();?> </div>

    </div>
</section>