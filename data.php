<?php

$siteTitle = "디자이너 전다영";

// 게시물2
$article2 = [];
$article2["id"] = "2";
$article2["title"] = "2화, 숫자와 문장";
$article2["regDate"] = "2021-01-12 18:33:42";
$article2["writerName"] = "전다영";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["body"] = <<<EOT
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
```

# 실습
```codepen
https://codepen.io/jangka44/embed/XWjxbgy?height=300&theme-id=light&default-tab=js,result&editable=true
```
EOT;



// 게시물1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "1화, 출력";
$article1["regDate"] = "2021-01-12 18:33:17";
$article1["writerName"] = "전다영";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["body"] = <<<EOT

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

if ( isset($articleId) ){
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}



