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
                <img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-1-white.png" alt=""></div>
            <div class="txt">고객성공과 가치향상을 위해<br>최선을 다하고 신뢰 관계를 구축한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-2.png" alt="">
                <img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-2-white.png" alt=""></div>
            <div class="txt">이해관계자와의 동반성장과<br>사회적 책임을 다하기 위해 노력한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-3.png" alt="">
                <img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-3-white.png" alt=""></div>
            <div class="txt">ONLYONE 제품/서비스를 위해 최고의<br>기술과 역량을 확보한다</div>
          </li>
          <li>
            <div class="image img-box"><img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-4.png" alt="">
                <img
                src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-1_img-4-white.png" alt=""></div>
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
  <section class="section-2 relative" data-one-page-link="page2">

    <div class="section-2__title-box">
      <div class="section-2__title-img">
        <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_title-image.png" alt="">
      </div>
      <div class="section-2__title">
        <span>Business</span><span>Introduction</span>
      </div>
    </div>

    <div class="section-2__bg-image"></div>

    <section class="section-2__inner-pages">
      <section class="section-2__inner-page active">
        <section class="section-2__ip-title-box">
          <div class="section-2__inner-page-title">
            디지털 비지니스
          </div>
          <div class="section-2__inner-page-des">
            최신 IT기술의 융합으로 산업별 최고의 Digital Experience를 제공하여 고객의 비즈니스혁신을 선도합니다.
          </div>
        </section>
        <div class="section-2__ip-slider-box">
          <!-- Swiper -->
          <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-1.png" alt="">
                </div>
                <div class="section-2__ip-title">지능형 물류 관제 시스템</div>
                <div class="section-2__ip-des">물류 솔루션과 자동화 설비를 통한 물류 프로세스의 표준화, 자동화 및 정보 가시화를 지원합니다</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-2.png" alt="">
                </div>
                <div class="section-2__ip-title">빅데이터 분석</div>
                <div class="section-2__ip-des">기업 내·외부에 산재한 Data를 연결, 융합, 가공하여 핵심 자산화하고, Data 분석·활용 인프라 제공을 통해 실질적인
                  경영성과를 지원합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-3.png" alt="">
                </div>
                <div class="section-2__ip-title">스마트 워크플레이스</div>
                <div class="section-2__ip-des">언제, 어디서나 소통하고 협업할 수 있는 최적의 솔루션을 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-4.png" alt="">
                </div>
                <div class="section-2__ip-title">미디어 컬처 스페이스</div>
                <div class="section-2__ip-des">미디어 융합 기술 및 디지털 서비스 기반으로 고객의 새로운 경험을 제공합니다</div>
              </div>


              <!-- 루프 모드의 데이터 양이 slidesPerView의 값보다 작아서 두번 넣는다 -->
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-1.png" alt="">
                </div>
                <div class="section-2__ip-title">지능형 물류 관제 시스템</div>
                <div class="section-2__ip-des">물류 솔루션과 자동화 설비를 통한 물류 프로세스의 표준화, 자동화 및 정보 가시화를 지원합니다</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-2.png" alt="">
                </div>
                <div class="section-2__ip-title">빅데이터 분석</div>
                <div class="section-2__ip-des">기업 내·외부에 산재한 Data를 연결, 융합, 가공하여 핵심 자산화하고, Data 분석·활용 인프라 제공을 통해 실질적인
                  경영성과를 지원합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-3.png" alt="">
                </div>
                <div class="section-2__ip-title">스마트 워크플레이스</div>
                <div class="section-2__ip-des">언제, 어디서나 소통하고 협업할 수 있는 최적의 솔루션을 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_slider-bg-4.png" alt="">
                </div>
                <div class="section-2__ip-title">미디어 컬처 스페이스</div>
                <div class="section-2__ip-des">미디어 융합 기술 및 디지털 서비스 기반으로 고객의 새로운 경험을 제공합니다</div>
              </div>
              <!-- 루프 모드의 데이터 양이 slidesPerView의 값보다 작아서 두번 넣는다 -->

            </div>
          </div>
          <div class="section-2__ip-nav">
            <div class="section-2__ip-btn-left"><i class="fas fa-caret-left"></i></div>
            <div class="section-2__ip-btn-right"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
        <div class="section-2__ip-bg"
          style="background-image:url(https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_bg-1.jpg)"></div>
      </section>
      <section class="section-2__inner-page">
        <section class="section-2__ip-title-box">
          <div class="section-2__inner-page-title">
            솔루션 비즈니스
          </div>
          <div class="section-2__inner-page-des">
            고객의 비즈니스 성공을 위해 수준 높은 솔루션을 제공합니다.
          </div>
        </section>
        <div class="section-2__ip-slider-box">
          <!-- Swiper -->
          <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-1.png" alt="">
                </div>
                <div class="section-2__ip-title">디지털마케팅솔루션</div>
                <div class="section-2__ip-des">실시간 정보를 기반으로 자동화 된 타깃 마케팅을 지원합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-2.png" alt="">
                </div>
                <div class="section-2__ip-title">티켓통합솔루션(One Ticket)</div>
                <div class="section-2__ip-des">다양한 장르에 대한 티켓 판매 노하우를 바탕으로 온라인 예매에서 최종 발권까지 통합적인 티켓 판매 솔루션을 제공합니다.
                </div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-3.png" alt="">
                </div>
                <div class="section-2__ip-title">Q-Finder</div>
                <div class="section-2__ip-des">소셜네트워크서비스(SNS) 데이터의 수집/분석/시각화를 통해 비즈니스 성공을 위한 인사이트를 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-4.png" alt="">
                </div>
                <div class="section-2__ip-title">FrameOne</div>
                <div class="section-2__ip-des">FrameOne은 J2EE 표준 기반의 Web / Batch Applicaton Framework 입니다</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-5.png" alt="">
                </div>
                <div class="section-2__ip-title">APOne</div>
                <div class="section-2__ip-des">APOne은 Java 기반의 어플리케이션 모니터링 솔루션 입니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-6.png" alt="">
                </div>
                <div class="section-2__ip-title">보안 단말기 솔루션</div>
                <div class="section-2__ip-des">글로벌 최고 보안 수준에 부합하는 하드웨어 기반의 신용카드 결제 장비를 공급하여 고객의 안전한 결제 및 부가 수익 창출에
                  기여합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-7.png" alt="">
                </div>
                <div class="section-2__ip-title">스마트 스토어 솔루션</div>
                <div class="section-2__ip-des">고객에게는 차별화된 경험을 선사하고 매장운영 효율을 극대화하는 차세대 스마트 스토어 솔루션입니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-2-8.png" alt="">
                </div>
                <div class="section-2__ip-title">스마트 팩토리 솔루션</div>
                <div class="section-2__ip-des">제조 현장의 혁신적인 디지털화를 실현하는 스마트 팩토리 솔루션입니다.</div>
              </div>
            </div>
          </div>
          <div class="section-2__ip-nav">
            <div class="section-2__ip-btn-left"></div>
            <div class="section-2__ip-btn-right"></div>
          </div>
        </div>
        <div class="section-2__ip-bg"
          style="background-image:url(https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_bg-2.jpg"></div>
      </section>
      <section class="section-2__inner-page">
        <section class="section-2__ip-title-box">
          <div class="section-2__inner-page-title">
            서비스형 비즈니스
          </div>
          <div class="section-2__inner-page-des">
            고객의 비즈니스 성공을 위해 차별화된 서비스를 제공합니다.
          </div>
        </section>
        <div class="section-2__ip-slider-box">
          <!-- Swiper -->
          <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-1.png" alt="">
                </div>
                <div class="section-2__ip-title">PG서비스(OnePG)</div>
                <div class="section-2__ip-des">온라인을 통해 상품 및 서비스 판매가 이루어질 수 있도록 다양한 결제수단과 결제대금 정산 서비스를 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-2.png" alt="">
                </div>
                <div class="section-2__ip-title">메시징 서비스(mplace)</div>
                <div class="section-2__ip-des">고객의 비즈니스 성공을 위한 메시징 및 모바일 마케팅 One-Stop 서비스를 지원하여 고객의 업무 편의를 극대화 합니다.
                </div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-3.png" alt="">
                </div>
                <div class="section-2__ip-title">웹/앱 서비스</div>
                <div class="section-2__ip-des">CJ그룹 웹/앱서비스의 온라인 마케팅 및 프로모션 업무를 지원합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-4.png" alt="">
                </div>
                <div class="section-2__ip-title">e-러닝 서비스</div>
                <div class="section-2__ip-des">Total HRD 온라인 서비스를 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-5.png" alt="">
                </div>
                <div class="section-2__ip-title">AI/ROBOT</div>
                <div class="section-2__ip-des">비즈니스에 인공지능 기술을 융합하여 새로운 가치를 창출하고 혁신적인 고객 서비스를 제공합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-3-6.png" alt="">
                </div>
                <div class="section-2__ip-title">RPA 서비스</div>
                <div class="section-2__ip-des">로봇 소프트웨어를 통해 사람이 수행하던 반복 업무를 자동화 하여 신속하고 정확한 업무처리를 지원합니다.</div>
              </div>
            </div>
          </div>
          <div class="section-2__ip-nav">
            <div class="section-2__ip-btn-left"></div>
            <div class="section-2__ip-btn-right"></div>
          </div>
        </div>
        <div class="section-2__ip-bg"
          style="background-image:url(https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_bg-3.jpg)"></div>
      </section>
      <section class="section-2__inner-page">
        <section class="section-2__ip-title-box">
          <div class="section-2__inner-page-title">
            시스템형 비즈니스
          </div>
          <div class="section-2__inner-page-des">
            비즈니스 이해를 바탕으로 기업의 경쟁력 강화를 위해 최고의 IT서비스를 제공합니다.
          </div>
        </section>
        <div class="section-2__ip-slider-box">
          <!-- Swiper -->
          <div class="swiper-container" dir="rtl">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-4-1.png" alt="">
                </div>
                <div class="section-2__ip-title">시스템 통합</div>
                <div class="section-2__ip-des">기업의 경영목표 달성 및 업무 효율성 제고를 위해 필요한 정보시스템을 구축합니다</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-4-2.png" alt="">
                </div>
                <div class="section-2__ip-title">시스템 운영</div>
                <div class="section-2__ip-des">CJ그룹 계열사(국내: 68개社, 해외 15개국 153개 법인)의 IT시스템을 운영/개발하여, 다양한 비즈니스 성과 창출에
                  기여합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-4-3.png" alt="">
                </div>
                <div class="section-2__ip-title">IT인프라</div>
                <div class="section-2__ip-des">최고의 인터넷 데이터센터(IDC)를 바탕으로 CJ그룹 및 고객의 정보자원을 안전하고 효율적으로 운영합니다.</div>
              </div>
              <div class="swiper-slide">
                <div class="section-2__ip-image-box img-box">
                  <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_page-4-4.png" alt="">
                </div>
                <div class="section-2__ip-title">IT컨설팅</div>
                <div class="section-2__ip-des">Digital Transformation의 동반자로서 컨설팅 그 이상의 서비스를 제공합니다.</div>
              </div>
            </div>
          </div>
          <div class="section-2__ip-nav">
            <div class="section-2__ip-btn-left"></div>
            <div class="section-2__ip-btn-right"></div>
          </div>
        </div>
        <div class="section-2__ip-bg"
          style="background-image:url(https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-2_bg-4.jpg"></div>
      </section>
    </section>

  </section>

  <section class="section-3" data-one-page-link="page3">
    <div class="section-3__title">
      <span>Public Relations Center</span>
    </div>
    <div class="section-3__articles-box flex">
      <div class="section-3__main-article-box">
        <a href="#">
          <div class="thumb img-box">
            <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__main-img.png" alt="">
            <div class="box"></div>
          </div>
          <div class="txt">
            <div class="category">Intelligent Transformation</div>
            <div class="title">도전의 기회, 성장의 기회! CJ올리브네트웍스<br>'카이로스 랩(Kairos-Lab)'을 소개합니다.</div>
            <div class="des">CJ그룹의 사보 NI:M을 통해 신사업 인큐베이팅 프로그램<br>‘카이로스 랩’이 소개되었습니다. </div>
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
              <div class="des">CJ올리브네트웍스가 빅데이터 분석 기업 던험비와 빅데이터 비즈니스에 관해 업무협약을 체결하고 글로벌 수준의 데이터 관리 체계를 구축함과 동시에 CJ ONE 고객
                데이터를 정밀 분석해 새로운 고객 가치를 제공합니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article2-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">CJ올리브네트웍스, 스마트테크 코리아에서 고객니즈에 최적화된 최첨단 IT서비스를 선보이다!</div>
              <div class="des">CJ올리브네트웍스가 빅데이터 분석 기업 던험비와 빅데이터 비즈니스에 관해 업무협약을 체결하고 글로벌 수준의 데이터 관리 체계를 구축함과 동시에 CJ ONE 고객
                데이터를 정밀 분석해 새로운 고객 가치를 제공합니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article3-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">"오늘배송..."택배기사도 'AI비서' 쓴다.</div>
              <div class="des"><헤럴드경제> 기사를 통해 CJ올리브네트웍스의 가상비서 솔루션 적용 사례가 소개됐습니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article4-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 'CJ SW창의캠프'대학생 봉사단모집</div>
              <div class="des">CJ올리브네트웍스의 대표 사회공헌 활동인 CJ SW창의캠프가 비대면 디지털 SW코딩교육을 함께 이끌어 나갈 대학생 봉사단을 모집합니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article5-img.png" alt="">
              </div>
              <div class="category">Intelligent Transformation</div>
              <div class="title">미리보는 2021 글로벌 IT트렌드</div>
              <div class="des">다가오는 2021 IT업계의 화두는 무엇일까요? 내년을 맞이하기에 앞서 꼭 주목해야 할 '잇'한 IT키워드를 소개합니다!</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article6-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스-LG전자 CES에서 협력 기술 선보여</div>
              <div class="des">CJ올리브네트웍스가 LG전자와 함께 가전과 고객을 연결하는 데이터 기반AI기술을 개발해  CES에서 선보입니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article7-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 코그넥스와 AI 머신비전 공동 사업추진</div>
              <div class="des">CJ올리브네트웍스가 AI 머신비전 개발 기업 코그넥스와 MOU를 체결하고 스마트팩토리 솔루션의 역량을 강화합니다.</div>
            </a>
          </li>
          <li>
          <a href="#">
              <div class="thumb img-box">
                <img src="https://cdn.jsdelivr.net/gh/wjsekdud14728/web-res/cj/section-3__article8-img.png" alt="">
              </div>
              <div class="category">news</div>
              <div class="title">CJ올리브네트웍스, 의약품 전문 무인화 스마트 물류센터 짓는다</div>
              <div class="des">CJ올리브네트웍스가 LG전자와 함께 가전과 고객을 연결하는 데이터 기반AI기술을 개발해  CES에서 선보입니다.</div>
            </a>
          </li>
        </ul>
      </nav>
    </div>

  </section>
  <section class="section-4-wrap" data-one-page-link="page4">
    <div class="section-4">
      <div class="section-4__title">
        <span>Sustainability</span>
        <span>Social Contribution</span>
      </div>
      <div class="section-4__page-content flex flex-jc-sa">
        <div class="card">
          <div class="card-bg"></div>
            <div class="content">
              <div class="title">공평한 교육</div>
              <div class="des">業의 특성을 살린 지속 가능한 임직원 나눔 활동입니다</div>
              <button class="btn">View more</button>
            </div>
        </div>
        <div class="card">
        <div class="card-bg"></div>
            <div class="content">
              <div class="title">경제적 기회</div>
              <div class="des">허브팟은 집단지성을 통해 성장동력 발굴과 문제해결을 위한 솔루션을 찾을 수 있도록 돕는 개방형 혁신 플랫폼 입니다.</div>
              <button class="btn">View more</button>
            </div>
        </div>
        <div class="card">
        <div class="card-bg"></div>
            <div class="content">
              <div class="title">건강한 복지</div>
              <div class="des">임직원들의 시간과 재능을 기부하는 자원봉사를 통해 지역사회의 건강한 복지에 기여하고 있습니다.</div>
              <button class="btn">View more</button>
            </div>
        </div>
        <div class="card">
        <div class="card-bg"></div>
            <div class="content">
              <div class="title">환경보전</div>
              <div class="des">중앙집중식시스템(UPS&냉동기)과 고효율 인버터냉동기 사용, 냉수/냉각수 펌프 회전속도 및 항온기 풍속 제어 등을 통해 에너지 절감을 위한 노력을 계속하고 있습니다.</div>
              <button class="btn">View more</button>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-5-wrap" data-one-page-link="page5" data-one-page-menu-target-diff-y="-300px">
    <div class="section-5">
      <div class="section-5__title">
        <span>Contact us</span>
        <span>CJ올리브네트웍스는 귀사의 비즈니스를 위한 IT전문 기술 제공 및 컨설팅을 지원합니다.</span>
      </div>
    </div>
  </section>
</div>

<?php
require_once "foot.php";
?>