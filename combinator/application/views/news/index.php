<h1><?php echo $title; ?></h1>

<?php foreach ($news as $news_item): ?>

        <div class="well">
        <h3><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a></h3>
        <div class="main">
           	<?php echo $news_item['text']; ?>
        </div>
        <hr>
        <p><a class="btn btn-default" href="<?php echo site_url('news/'.$news_item['slug']); ?>">Read Article &gt;</a></p>
        </div>

<?php endforeach; ?>