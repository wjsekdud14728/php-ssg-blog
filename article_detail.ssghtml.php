  
<?php
if ( defined('STDIN') ) {
    $_GET['id'] = $argv[1];
}

require_once "data.php";
require_once "head.php";

$articleId = $_GET['id'];
$selectedArticle = &getArticleById($articleId);
?>

<link rel="stylesheet" href="css/about.css">
<script src="js/about.js" defer></script>

<section class="section-title con-min-width">
    <h1 class="con">
        <span><i class="fas fa-newspaper"></i></span>
        <span>DETAIL</span>
    </h1>
</section>

<section class="section-article-detail con-min-width padding-0-10">
    <div class="con">
    <h1 class="article-list-box__title"><a href="article_detail_1.ssghtml.php" class="cursor-big"><?=$selectedArticle["title"]?></a></h1>
                    <div class="article-list-box__reg-date"><?=$selectedArticle["regDate"]?></div>
                    <div class="article-list-box__writer">
                        <span><?=$selectedArticle["writerName"]?></span>
                        <span>
                        <?=$selectedArticle["writerAvatar"]?>
                        </span>
                    </div>
                    <div class="article-list-box__body">
                        <script type="text/x-template">
                        <?=$selectedArticle["body"]?>
                        </script>
                        <div class="toast-ui-viewer"></div>
                    </div>
    </div>
</section>

<section class="section-article-reply-box con-min-width padding-0-10">
    <div class="con">
    <div id="disqus_thread"></div>
<script>
    var disqus_config = function () {
        this.page.url = 'https://ssg-2020-12.oa.gg/article_detail_<?=$articleId?>.html';
        this.page.identifier = 'article_detail_<?=$articleId?>.html';
    };
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://phpblog-7.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
    </div>
</section>