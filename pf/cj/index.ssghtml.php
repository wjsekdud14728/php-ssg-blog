<?php
$pageCode = "home";
$pageTitle = "Home";

require_once "head.php";
?>

<script>
  // 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.ssghtml.php 에도 추가해주세요.
  if (location.pathname.indexOf('index.ssghtml.php') !== -1 && location.pathname.indexOf('index.html') !== -1 &&
    location.pathname.substr(-1, 1) != '/') {
    location.replace(location.href + '/');
  }
</script>


<!-- 비주얼 -->
<div id="visual">
  <div class="my-slider-box-1">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-title="초개인화 디지털서비스" data-index="0">
          <div class="my-slider-box-1__txt">
            <div class="my-slider-box-1__title"><span>국내 대표 생활문화, 금융, 통신 데이터로</span><span>초개인화 디지털 서비스 제공</span></div>
            <div class="my-slider-box-1__content">신한은행, LG유플러스와 함께 각 사가 보유한 금융&비금융 데이터를 결합하여,<br>소비자의 데이터 주권과 혜택을 극대화한
              마이데이터 시대를 선도합니다.</div>
            <div class="my-slider-box-1__btn"><a href="#">view more</a></div>
          </div>
          <div class="my-slider-box-1__img"></div>
        </div>
        <div class="swiper-slide" data-title="광주e스포츠 경기장" data-index="1">
          <div class="my-slider-box-1__txt">
            <div class="my-slider-box-1__title"><span>광주 e스포츠 경기장 구축으로</span><span>융복합 문화산업 활성화 도모</span></div>
            <div class="my-slider-box-1__content">글로벌 수준의 디지털 미디어 분야의 IT기술 경쟁력을 바탕으로<br>공간 효율성과 비주얼을 모두 겸비한 광주 e스포츠
              상설경기장을 구축합니다.</div>
            <div class="my-slider-box-1__btn"><a href="#">view more</a></div>
          </div>
          <div class="my-slider-box-1__img"></div>
        </div>
        <div class="swiper-slide" data-title="AI팩토리" data-index="2">
          <div class="my-slider-box-1__txt">
            <div class="my-slider-box-1__title"><span>빅데이터, AI 등 신기술이 결합된 'AI팩토리' 사업 추진</span></div>
            <div class="my-slider-box-1__content">자동화 설비뿐 아니라 빅데이터 기반으로 실시간 분석 및 예측이 가능한<br>AI솔루션, 스마트 HACCP 등의 소프트웨어,
              그리고 유지보수 서비스 까지 통합적으로 제공합니다.</div>
            <div class="my-slider-box-1__btn"><a href="#">view more</a></div>
          </div>
          <div class="my-slider-box-1__img"></div>
        </div>
        <div class="swiper-slide" data-title="팩토리원HACCP" data-index="3">
          <div class="my-slider-box-1__txt">
            <div class="my-slider-box-1__title"><span>스마트 HACCP 솔루션 '팩토리원HACCP' 개발</span></div>
            <div class="my-slider-box-1__content">블록체인을 통해 데이터 위.변조를 방지하여 보안성과 신뢰성을 높이고, 클라우드방식으로 비용 부담을 낮춘 스마트 HACCP
              솔루션을 선보입니다.</div>
            <div class="my-slider-box-1__btn"><a href="#">view more</a></div>
          </div>
          <div class="my-slider-box-1__img"></div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-autoplay-btns">
      <div class="btn-stop-autoplay"></div>
      <div class="btn-start-autoplay"></div>
    </div>
  </div>
</div>

<!-- 컨텐츠 -->
<div id="content">

  <!-- 인디케이터 -->
  <a class="one-page-link" href="#page1">Work Rull</a>
  <a class="one-page-link" href="#page2">Business Introduction</a>
  <a class="one-page-link" href="#page3">Public Relations Center</a>
  <a class="one-page-link" href="#page5">Contact</a>

  <!-- 섹션 1 -->
  <section class="section-1" data-one-page-link="page1">
    <div class="section-1__box">
      <div class="section-1__title">
        <span>고객과 사회의 행복을 선도하는 TOP TIER</span>
        <span>디지털 서비스 기업, <strong>CJ올리브네트웍스</strong></span>
      </div>
      <div class="section-1__sub-title">
        <span>CJ OLIVE NETWORKS</span>
      </div>
      <div class="section-1__des">
        <span>우리는 OnlyOne 기술과 서비스로 고객의 성공을 견인하고 더 나은 세상을 만드는데 기여한다</span>
        <span>CJ올리브네트웍스는 빠르게 변화하는 경영환경 속에서 다가올 미래를 위해 남들보다 먼저, 더 멀리, 예측하여</span>
        <span>고객의 혁신적인 성공을 견인하고 사회적 문제 해결을 통한 더 나은 세상을 실현하는데 앞장서겠습니다.</span>
      </div>
      <nav class="section-1__work-rule-item">
        <ul class="flex">
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-1.png" alt="">
              <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-1-white.png" alt=""></div>
            <div class="txt">고객성공과 가치향상을 위해<br>최선을 다하고 신뢰 관계를 구축한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-2.png" alt="">
              <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-2-white.png" alt=""></div>
            <div class="txt">이해관계자와의 동반성장과<br>사회적 책임을 다하기 위해 노력한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-3.png" alt="">
              <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-3-white.png" alt=""></div>
            <div class="txt">ONLYONE 제품/서비스를 위해 최고의<br>기술과 역량을 확보한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-4.png" alt="">
              <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-4-white.png" alt=""></div>
            <div class="txt">지속적인 혁신, 끊임없는 도전과<br>다양성 추구로 새로운 가치를 창출한다</div>
          </li>
        </ul>
      </nav>

      <div class="section-1__btn">
        <a href="#">
          More View <i class="fas fa-plus"></i>
        </a>
      </div>


  </section>

  <!-- 섹션 2 -->
  <section class="section-2 relative flex" data-one-page-link="page2">
    <div class="section-2__bg-image">
      <div class="section-2__title-box">
        <div class="title">Business<br>Introduction</div>
        <nav class="list">
          <ul>
            <li class="active">디지털 비즈니스</li>
            <li>솔루션 비즈니스</li>
            <li>서비스형 비즈니스</li>
            <li>시스템형 비즈니스</li>
          </ul>
        </nav>
      </div>
    </div>
    <nav class="section-2__list-items">
      <ul>
        <li class="active">
          <div class="img">
            <div class="my-slider-box-2">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-title="지능형물류관제시스템" data-index="0">
                    <div class="my-slider-box-2__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="빅데이터분석" data-index="1">
                    <div class="my-slider-box-2__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-104.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="스마트워크플레이스" data-index="2">
                    <div class="my-slider-box-2__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-105.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="미디어컬처스페이스" data-index="3">
                    <div class="my-slider-box-2__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-106.png" alt=""></div>
                  </div>
                </div>
              </div>

              <div class="swiper-nav-2 swiper-nav">
                <div class="swiper-prev"><i class="fas fa-angle-left"></i></div>
                <div class="swiper-next"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
            <div class="swiper-pagination-2 swiper-pagination"></div>

          </div>
          <div class="des">최신 IT기술의 융합으로 산업별 최고의 Digital Experience를 제공하여 고객의 비즈니스혁신을 선도합니다.</div>
          <div class="section-2__btn">
            <a href="#">
              More View <i class="fas fa-plus"></i>
            </a>
          </div>
        </li>
        <li>
          <div class="img">
            <div class="my-slider-box">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" data-title="ㅇㅇ" data-index="0">
                    <div class="my-slider-box-3__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="ㄹㄹ" data-index="1">
                    <div class="my-slider-box-3__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-104.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="ㄴㄴ" data-index="2">
                    <div class="my-slider-box-3__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-105.png" alt=""></div>
                  </div>
                  <div class="swiper-slide" data-title="ㅁㅁ" data-index="3">
                    <div class="my-slider-box-3__img img-box"><img
                        src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/Rectangle-106.png" alt=""></div>
                  </div>
                </div>
              </div>
              <div class="swiper-nav swiper-nav-3">
              <div class="swiper-prev"><i class="fas fa-angle-left"></i></div>
              <div class="swiper-next"><i class="fas fa-angle-right"></i></div>
            </div>
            </div>
            <div class="swiper-pagination swiper-pagination-3"></div>
            
          </div>
          <div class="des">고객의 비즈니스 성공을 위해 수준 높은 솔루션을 제공합니다.</div>
          <div class="section-2__btn">
            <a href="#">
              More View <i class="fas fa-plus"></i>
            </a>
          </div>
        </li>
        <li>
          <div class="img"></div>
          <div class="des">고객의 비즈니스 성공을 위해 차별화된 서비스를 제공합니다.</div>
          <div class="section-2__btn">
            <a href="#">
              More View <i class="fas fa-plus"></i>
            </a>
          </div>
        </li>
        <li>
          <div class="img"></div>
          <div class="des">비즈니스 이해를 바탕으로 기업의 경쟁력 강화를 위해 최고의 IT서비스를 제공합니다.</div>
          <div class="section-2__btn">
            <a href="#">
              More View <i class="fas fa-plus"></i>
            </a>
          </div>
        </li>
      </ul>

    </nav>

  </section>

  <!-- section-3 -->

  <section class="section-3" data-one-page-link="page3">
    <div class="section-3__title">
      <span>Public Relations Center</span>
    </div>
    <div class="section-3__articles-box flex">
      <div class="section-3__main-article-box">
        <a href="#">
          <div class="thumb img-box">
            <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/cj.jpg" alt="">
            <div class="box"></div>
          </div>
          <div class="txt">
            <div class="category">news</div>
            <div class="title">CJ ONE, 걷기만 해도 포인트가 쌓이는<br>'ONE워크' 서비스 출시</div>
            <div class="des">CJ올리브네트웍스의 통합 멤버십 서비스 CJ ONE이<br>헬스케어 서비스 'ONE워크'를 출시했습니다.</div>
          </div>
          <div class="arrow">
            <div></div>
            <div></div>
            <div>click</div>
          </div>
        </a>

      </div>
      <nav class="section-3__article-box">
        <ul class="flex flex-wrap">
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article1-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 던험비와 빅데이터 분석 신사업개발 나서</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article2-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">CJ올리브네트웍스, 스마트테크 코리아에서 고객니즈에 최적화된 최첨단 IT서비스를 선보이다!</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article3-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">"오늘배송..."택배기사도 'AI비서' 쓴다.</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article4-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 'CJ SW창의캠프'대학생 봉사단모집</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article5-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">미리보는 2021 글로벌 IT트렌드</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article6-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스-LG전자 CES에서 협력 기술 선보여</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article7-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 코그넥스와 AI 머신비전 공동 사업추진</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article8-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 의약품 전문 무인화 스마트 물류센터 짓는다</div>
              <div class="date">2021. 01. 28 </div>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- section-4 -->
  </section>
  <section class="section-4-wrap" data-one-page-link="page4" data-one-page-menu-target-diff-y="-300px">
    <div class="section-4">
      <div class="section-4__title">
        <span>Contact us</span>
        <span>CJ올리브네트웍스는 귀사의 비즈니스를 위한 IT전문 기술 제공 및 컨설팅을 지원합니다.</span>
      </div>
    </div>
  </section>
</div>

<?php
require_once "foot.php";
?>