<div class="container">
	<header class="content-header">
        <!--change the_date() params to get it in desired format, like age in months, day of the week pubblished, etc copilot linked this lol (https://developer.wordpress.org/reference/functions/the_date/)-->
	    <div class="meta mb-3"><span class="date"><?php the_date();?></span>
        <?php
            the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>',);
        ?>


        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number()?></a></span></div>
	</header>

    <?php
        the_content();
        comments_template();
    ?>
</div>