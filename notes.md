#### add custom message to read more expander
``` 
<?php the_content('Read more of this article &raquo;'); ?>
```

#### add this to index.php if you want to manually add an excerpt field, via the Wordpress dashboard
```
<?php if ($post->post_excerpt) { ?>
    <p><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
    </p>
<?php } else {

  the_content();

  } ?>
```
