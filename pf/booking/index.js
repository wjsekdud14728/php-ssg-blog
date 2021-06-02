// 스크롤 트리거 플러그인 활성화
gsap.registerPlugin(ScrollTrigger);

gsap.from('.section-2 li:nth-child(2)>img', {
    scrollTrigger: {
      trigger:".section-2",
      markers:true,
      start:"top center",
    },
    y:-50,
    opacity:0,
    duration: 1
  },"-=1");

  gsap.from('.section-2 li:nth-child(3)>img', {
    scrollTrigger: {
      trigger:".section-2",
      markers:true,
      start:"top center",
    },
    y:-50,
    opacity:0,
    duration: 1
  });