<div class="row">

<div class="one-half column">
<b id="create"><a href="http://www.rebeccawallwork.co.uk/AIDA/rebeccawallworkci/index.php/news/create">Insert a new article</a></b> <h4><u><?php echo $title; ?></u></h4>

<?php foreach ($news as $news_item): ?>

        <h5><?php echo $news_item['title']; ?></h5>
        <br>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
        <hr>



<?php endforeach; ?>  
</div>
</div>
