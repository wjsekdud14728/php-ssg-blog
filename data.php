<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 전다영";
$siteDescription = "디자이너 전다영의 기술 블로그 입니다.";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "DESIGN LEMON";
$siteThumbUrl = "https://ssg-2020-12.oa.gg/img/logo/logo_opengraph.png";

// 태그정보 시작
$tagInfos = [
    "flex" => [
        "pageThumbUrl" => "자바스크립트 관련 글 전용 이미지",
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
];
// 태그정보 끝

// 게시물3
$article3 = [];
$article3["id"] = "3";
$article3["title"] = "3화, 변수";
$article3["regDate"] = "2021-01-13 18:33:42";
$article3["writerName"] = "전다영";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["CSS"];
$article3["body"] = <<<'EOT'
# 숫자와 문장의 연산
```javascript
//숫자 + 숫자
console.log(10+10) // type = number

//문장 + 숫자(문장)
console.log("점수 : " + "10") // type = string

//문장 + 숫자
console.log("점수 : " + 10) // type = string
```

# 연산의 우선순위
```javascript
//문장 + 숫자 + 숫자
console.log("점수 : " + 10 + 20);

//문장 + 숫자 * 숫자
console.log("점수 : " + 10 * 20);

//문장 + (숫자 + 숫자)
console.log("점수 : " + (10 + 20));
```
문장 + 숫자 + 숫자 의 경우에는 문장과 숫자가 더해지면서 문장이 되고 그 문장과 다른 숫자가 또 더해지면서 문장이 된다. 결국 문자의 형태로 결과가 나온다.
문장 + 숫자 * 숫자 의 경우에는 *먼저 계산이 되기 때문에 숫자 * 숫자가 먼저 계산되지만 마지막엔 문장 + 숫자가 되면서 문자의 형태로 결과가 나오지만 숫자는 계산된 결과로 문자형태로 나온다.
문장 + (숫자 + 숫자) 의 경우에는 괄호안의 숫자 식이 먼저 계산되고 문장과 숫자가 계산되면서 문자형태로 결과값이 나온다.

EOT;

// 게시물2
$article2 = [];
$article2["id"] = "2";
$article2["title"] = "2화, 숫자와 문장";
$article2["regDate"] = "2021-01-12 18:33:42";
$article2["writerName"] = "전다영";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["CSS"];
$article2["body"] = <<<'EOT'
# 숫자와 문장의 연산
```javascript
//숫자 + 숫자
console.log(10+10) // type = number

//문장 + 숫자(문장)
console.log("점수 : " + "10") // type = string

//문장 + 숫자
console.log("점수 : " + 10) // type = string
```

# 연산의 우선순위
```javascript
//문장 + 숫자 + 숫자
console.log("점수 : " + 10 + 20);

//문장 + 숫자 * 숫자
console.log("점수 : " + 10 * 20);

//문장 + (숫자 + 숫자)
console.log("점수 : " + (10 + 20));
```
문장 + 숫자 + 숫자 의 경우에는 문장과 숫자가 더해지면서 문장이 되고 그 문장과 다른 숫자가 또 더해지면서 문장이 된다. 결국 문자의 형태로 결과가 나온다.
문장 + 숫자 * 숫자 의 경우에는 *먼저 계산이 되기 때문에 숫자 * 숫자가 먼저 계산되지만 마지막엔 문장 + 숫자가 되면서 문자의 형태로 결과가 나오지만 숫자는 계산된 결과로 문자형태로 나온다.
문장 + (숫자 + 숫자) 의 경우에는 괄호안의 숫자 식이 먼저 계산되고 문장과 숫자가 계산되면서 문자형태로 결과값이 나온다.

EOT;



// 게시물1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "1화, 출력";
$article1["regDate"] = "2021-01-12 18:33:17";
$article1["writerName"] = "전다영";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["SCRIPT"];
$article1["body"] = <<<'EOT'

```html
<t-script>
console.clear();
console.log("HI");
</t-script>>
```

# 실습
```codepen
https://codepen.io/wjsekdud789/embed/ExgdVja?height=265&theme-id=dark&default-tab=js,result&editable=true
```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}