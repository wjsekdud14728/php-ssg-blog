// 스크롤 트리거 플러그인 활성화
gsap.registerPlugin(ScrollTrigger);

// section-2
gsap.from('.section-2 li.one>img', {
    scrollTrigger: {
      trigger:".section-2",
      start:"top center",
    },
    y:-50,
    opacity:0,
    duration: .8,
    stagger: 0.3
  });

  gsap.from('.section-2 li.two>img', {
    scrollTrigger: {
      trigger:".section-2",
      start:"40% center",
    },
    y:50,
    opacity:0,
    duration: .8,
    stagger: 0.3
  });

  // section-3
  gsap.from('.section-3 li.one>img', {
    scrollTrigger: {
      trigger:".section-3",
      start:"top center",
    },
    y:50,
    opacity:0,
    duration: .8,
    stagger: 0.1
  });

  // section-4
  gsap.from('.section-4 li.one>img', {
    scrollTrigger: {
      trigger:".section-4",
      start:"top center",
    },
    y:30,
    opacity:0,
    duration: .8,
    stagger: 0.4
  });

  gsap.from('.section-4 li.two>img', {
    scrollTrigger: {
      trigger:".section-4",
      start:"center center",
    },
    y:30,
    opacity:0,
    duration: .8,
    stagger: 0.4
  });

  // section-5
  let s5 = gsap.timeline({
    scrollTrigger:{
      trigger:".section-5",
      start:"20% center"
    }
  });
  
  s5.from('.section-5 li.one>img', {
    x:-50,
    opacity:0,
    duration: .8
  });
  
  s5.from('.section-5 li.two>img', {
    x:50,
    opacity:0,
    duration: .8
  },"-=.8");

  s5.from('.section-5 li.three>img', {
    y:50,
    opacity:0,
    duration: .8,
    stagger: 0.5
  });

  // section-6
  gsap.from('.section-6 li.one>img', {
    scrollTrigger: {
      trigger:".section-6",
      start:"top 35%",
    },
    y:30,
    opacity:0,
    duration: .8,
    stagger: 0.3
  });