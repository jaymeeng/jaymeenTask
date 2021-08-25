<?php
    /**
    * Template Name: Change Email Template
    */

    get_header();

    $my_error = '';
    $my_suces = '';

    if(isset($_POST['old_email']) && isset($_POST['new_email'])){

        global $wpdb;

        $Old_Email = $_POST['old_email'];
        $New_Email = $_POST['new_email'];

        $users_detail = $wpdb->get_row( "SELECT user_email,ID FROM $wpdb->users WHERE user_email = '$Old_Email'",ARRAY_A);

        if(!empty($users_detail)){

            $check_user_detal = $wpdb->get_row( "SELECT user_email,ID FROM $wpdb->users WHERE user_email = '$New_Email'",ARRAY_A);

            if(!empty($check_user_detal)){

                $my_error = "Email alredy exist";

            }else{

                $args = array(
                'ID'         => $users_detail['ID'],
                'user_email' => esc_attr( $New_Email )
                );

                wp_update_user( $args );

                $my_suces = "Your Email Changed successfully"; 
            }

        }else{

            $my_error = "Your enter email is not found"; 
        }



    }
?>

<main id="site-content" role="main">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="post-inner"> 

            <div class="entry-content"> 

                <?php

                    if ( have_posts() ) {

                        while ( have_posts() ) {

                            the_post();


                        ?>

                        <?php if(isset($my_error) && !empty($my_error)){ ?>

                            <div>
                                <span style="font-weight: bold;color: red;border: 2px solid #000;padding: 10px;">Error : <?php echo $my_error; ?></span>
                            </div>

                            <?php } ?>

                        <?php if(isset($my_suces) && !empty($my_suces)){ ?> 

                            <div>
                                <span style="font-weight: bold;color: green;border: 2px solid #000;padding: 10px;"><?php echo $my_suces; ?></span>
                            </div>

                            <?php } ?>

                        <form action="" method="post">

                            <div style="margin-bottom: 10px;">
                                <label for="old_email">Old Email</label>
                                <input type="email" name="old_email" id="old_email" placeholder="Enter old email" required>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <label for="new_email">New Email</label>
                                <input type="email" name="new_email" id="new_email" placeholder="Enter new email" required>
                            </div>

                            <input type="submit" name="change_email" value="Change Your Email">
                        </form>

                        <?php 


                        }
                    }

                ?>

            </div>
        </div>

    </article>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
