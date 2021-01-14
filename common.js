/* 폰트 적용 시작 */
@font-face {
    font-family: 'LotteMartDream';
    font-style: normal;
    font-weight: 400;
    src: url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamMedium.woff2') format('woff2'), url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamMedium.woff') format('woff');
  }
  
  @font-face {
    font-family: 'LotteMartDream';
    font-style: normal;
    font-weight: 700;
    src: url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamBold.woff2') format('woff2'), url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamBold.woff') format('woff');
  }
  
  @font-face {
    font-family: 'LotteMartDream';
    font-style: normal;
    font-weight: 300;
    src: url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamLight.woff2') format('woff2'), url('//cdn.jsdelivr.net/korean-webfonts/1/corps/lottemart/LotteMartDream/LotteMartDreamLight.woff') format('woff');
  }
  
  html {
    font-family: 'LotteMartDream', sans-serif;
  }
  /* 폰트 적용 끝 */
  
  /* 노말라이즈 시작 */
  body, ul, li {
    margin:0;
    padding:0;
    list-style: none;
  }
  
  a {
    color:inherit;
    text-decoration: none;
  }
  /* 노말라이즈 끝 */
  
  /* 라이브러리 시작 */
  .flex {
    display: flex;
  }
  
  .flex-jc-c {
    justify-content: center;;
  }
  
  .flex-jc-sb {
    justify-content:space-between;
  }
  
  .flex-ai-c {
    align-items: center;
  }
  
  .flex-as-c {
    align-self:center;
  }
  
  /* 성장성 부여 */
  .flex-grow-1 {
    flex-grow: 1;
  }
  
  /* 성장성 부여 */
  .flex-1-0-0 {
    flex:1 0 0;
  }
  
  .con {
    margin-left:auto;
    margin-right:auto;
  }
  
  .block {
    display: block;
  }
  
  .height-100p {
    height:100%;
  }
  
  .height-100vh {
    height:100vh;
  }
  
  .min-height-100vh {
    min-height:100vh;
  }
  
  .img-box > img {
    width:100%;
    display: block;
  }
  
  .bg-red {
    background-color:red;
  }
  
  .bg-gold {
    background-color: gold;
  }
  
  .bg-green {
    background-color:green;
  }
  
  .bg-blue {
    background-color:blue;
  }
  
  .border-box {
    box-sizing: border-box;
  }
  
  @media ( max-width:720px ) {
    .visible-md-up {
      display:none !important;
    }
  }
  
  @media ( min-width:721px ) {
    .visible-sm-down {
      display:none !important;
    }
  }
  /* 라이브러리 끝 */
  
  /* 커스텀 시작 */
  /* 커서 설정 시작 */
  * {
    cursor:none;
  }
  
  .cursor {
    position:fixed;
    width:10px;
    height:10px;
    border-radius:50%;
    background-color:white;
    pointer-events:none;
    transform:translateX(-50%) translateY(-50%);
    z-index:10;
    mix-blend-mode:difference;
  }
  
  .cursor-shadow {
    position:fixed;
    width:20px;
    height:20px;
    border-radius:50%;
    background-color:white;
    pointer-events:none;
    transform:translateX(-50%) translateY(-50%);
    transition:top .3s, left .3s;
    mix-blend-mode:difference;
    z-index:9;
  }
  /* 커서 설정 끝 */
  :root {
    --site-width:1200px;
  }
  
  .con {
    max-width: var(--site-width);
  }

  /* 바디컨텐트 시작 */
.body-content{
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-color: white;
}

.body-content> main{
  flex-grow: 1;
}
  /* 바디컨텐트 끝 */

  /* 섹션 타이틀 시작 */
.section-title {
  padding:0 10px;
}
/* 섹션 타이틀 끝 */
  
  /* 로고 시작 */
  .logo {
    display:flex;
    align-items:center;
    font-size:1.8rem;
  }
  
  .logo > span:last-child {
    white-space:nowrap;
    margin-left:10px;
    font-weight:bold;
    font-style:italic;
  }
  /* 로고 끝 */
  
  /* 탑바 시작 */
:root{
    --top-bar__background-color: #F2C063;
    --top-bar__color: #235CA6;
}

  .top-bar {
    background-color:var(--top-bar__background-color);
    color:var(--top-bar__color);
    height:100px;
  }
  
  .top-bar .logo {
    margin-left:10px;
  }
  
  .top-bar__menu-box-1 > ul > li {
    
  }
  
  .top-bar__menu-box-1 > ul > li > a {
    font-weight:bold;
    padding-left:20px;
    padding-right:20px;
  }
  
  .top-bar__menu-box-1 > ul > li:hover > a {
    background-color:#FFD382;
    color:var(--top-bar__color);
    text-decoration:underline;
  }
  
  .top-bar__menu-box-1 > ul > li > a > span:first-child {
    margin-right:3px;
  }
  
  /* 탑바 끝 */
  
  /* 모바일 탑바 시작 */
  :root {
    --mobile-top-bar__height:70px;
  }
  
  .mobile-top-bar {
    background-color:var(--top-bar__background-color);
    color:var(--top-bar__color);
    height:var(--mobile-top-bar__height);
  }
  
  :root {
    --mobile-top-bar__btn-toggle-side-bar__dur:.3s;
  }
  
  .mobile-top-bar__btn-toggle-side-bar {
    width:25px;
    height:25px;
    position:relative;
    margin-left:10px;
    cursor:pointer;
  }
  
  .mobile-top-bar__btn-toggle-side-bar > div {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:20%;
    background-color:var(--top-bar__color);
    transition: top var(--mobile-top-bar__btn-toggle-side-bar__dur), transform var(--mobile-top-bar__btn-toggle-side-bar__dur), opacity var(--mobile-top-bar__btn-toggle-side-bar__dur);
    border-radius:2px;
  }
  
  .mobile-top-bar__btn-toggle-side-bar > div:nth-child(2) {
    top:40%;
  }
  
  .mobile-top-bar__btn-toggle-side-bar > div:nth-child(3) {
    top:80%;
  }
  
  .mobile-top-bar__btn-toggle-side-bar.active > div:nth-child(1),
  .mobile-top-bar__btn-toggle-side-bar.active > div:nth-child(3) {
    top:40%;
    transform:rotate(-45deg);
  }
  
  .mobile-top-bar__btn-toggle-side-bar.active > div:nth-child(3) {
    transform:rotate(45deg);
  }
  
  .mobile-top-bar__btn-toggle-side-bar.active > div:nth-child(2) {
    opacity:0;
  }
  /* 모바일 탑바 끝 */
  
  /* 모바일 사이드바 시작 */
  .mobile-side-bar {
    position:fixed;
    top:var(--mobile-top-bar__height);
    left:-100%;
    width:100%;
    bottom:0;
    color:var(--top-bar__color);
    background-color:var(--top-bar__background-color);
    transition:left .3s;
    display:flex;
    align-items:center;
    padding-bottom:var(--mobile-top-bar__height);
  }
  
  .mobile-side-bar.active {
    left:0;
  }
  
  .mobile-side-bar__menu-box-1 {
    width:100%;
  }
  
  .mobile-side-bar__menu-box-1 > ul > li > a {
    padding:15px;
    text-align:center;
    font-size:1.3rem;
  }
  
  .mobile-side-bar__menu-box-1 > ul > li:hover > a {
    background-color:#FFD382;
    color:var(--top-bar__color);
  }
  /* 모바일 사이드바 끝 */

  /* 바텀바 시작 */
  .bottom-bar{
      background-color: var(--top-bar__background-color);
      color: var(--top-bar__color);
  }

  .bottom-bar>.con{
    padding: 20px 0;
  }

.bottom-bar__info{
    margin-left: 20px;
  }

  /* 바텀바 끝 */

  /* 게시물 리스트 박스 시작 */
.article-list-box {
  margin-left:10px;
  margin-right:10px;
  margin-top:30px;
}

.article-list-box > ul > li {
  border-top:2px dotted black;
  padding-top:20px;
  padding-bottom:20px;
}

.article-list-box__reg-date::before {
  content:"작성 : ";
}
/* 게시물 리스트 박스 끝 */

  /* 플러그인 시작 */
  .toast-ui-youtube-plugin-wrap {
    max-width:500px;
    margin-left:auto;
    margin-right:auto;
    position:relative;
  }
  
  .toast-ui-youtube-plugin-wrap > iframe {
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
  }
  
  .toast-ui-youtube-plugin-wrap::before {
    content:"";
    display:block;
    padding-top:calc(100% / 16 * 9);
  }
  
  .toast-ui-codepen-plugin-wrap > iframe {
    width:100%;
  }



  /* 기존의 코드 블록에 걸려있는 여백과 배경색 제거 */
.toast-ui-viewer .tui-editor-contents pre {
  margin:0;
  padding:0;
  background-color:transparent;
}
  /* 플러그인 끝 */
  /* 커스텀 끝 */