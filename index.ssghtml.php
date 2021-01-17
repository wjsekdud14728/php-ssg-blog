<?php
require_once "data.php";
require_once "head.php";
?>

<script src="js/index.js" defer></script>
<link rel="stylesheet" href="css/index.css">
<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-fire"></i>
    </span>
    <span>
      LATEST ARTICLES
    </span>
  </h1>
</section>

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <li>
          <h1 class="article-list-box__title">자바스크립트 사용법</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 자바스크립트 사용법
```html
<<!--REPLACE:script-->>
var a = 10;
</<!--REPLACE:script-->>
<div class="a"></div>
```
              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <li>
          <h1 class="article-list-box__title">코드팬 사용법</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 코드팬 사용법
```codepen
https://codepen.io/wjsekdud789/embed/Exgdagw?height=265&theme-id=light&default-tab=html,result
```
              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <li>
          <h1 class="article-list-box__title">유튜브 사용법</h1>
          <div class="article-list-box__reg-date">2020-01-12 12:12:14</div>
          <div class="article-list-box__body">
            <script type="text/x-template">
              # 유튜브 사용법
```youtube
r8czeYIyJ1k
```
              </script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php
require_once "foot.php";
?>