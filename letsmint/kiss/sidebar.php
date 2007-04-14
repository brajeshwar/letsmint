<div id="sidebar">

<div class="side-sec search">
<h3>Search</h3>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>

<div class="side-sec misc">				
<h3>Meta</h3>
<p>
<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', TRUE, TRUE, -1, TRUE); ?>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
</p>
</div>

<div class="side-sec archives">
<h3>Archives</h3>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>

<div class="side-sec categories">
<h3>Categories</h3>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
</div>

</div>