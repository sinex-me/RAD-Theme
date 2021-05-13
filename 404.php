<main> <h1>page not found, sorry</h1> </main>

<h1>Reccent Posts</h1>
<?php wp_get_archives(array('type' => 'postbypost', 'limit'
=> 10, 'format' =>
 'custom','before' =>'', 'after'
=> '<br />')); ?>

<?php
get_footer();
?>