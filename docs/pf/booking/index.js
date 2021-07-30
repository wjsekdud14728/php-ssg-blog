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

  function s6__init() {
    for ( let i = 5; i <= 9; i++ ) {
      gsap.from(".section-6 li:nth-child("+i+")", {
        duration:1,
        y:50,
        opacity:0,
        ease: "circ.out",
        scrollTrigger:{
          start:"top 70%",
          trigger:".section-6 li:nth-child("+i+")"
        }
      });
    }
  }
  
  s6__init();

  let s6 = gsap.timeline({
    scrollTrigger:{
      trigger:".section-6 li.three",
      start:"20% center",
    }
  });
  
  s6.from('.section-6 li:nth-child(10)', {
    y:50,
    opacity:0,
    duration: .8
  });
  
  s6.from('.section-6 li:nth-child(11)', {
    x:-50,
    opacity:0,
    duration: .8
  });

  // section-7

gsap.from('.section-7 li.one', {
    scrollTrigger: {
      trigger:".section-7",
      start:"top center",
    },
    y:50,
    opacity:0,
    duration: .8,
    stagger: 0.5
  });

  gsap.from('.section-7 li.two', {
    scrollTrigger: {
      trigger:".section-7",
      start:"center 60%",
    },
    y:50,
    opacity:0,
    duration: .8
  });

  // section-8

  gsap.from('.section-8-background li.one', {
    scrollTrigger: {
      trigger:".section-8-background",
      start:"center 90%",
    },
    opacity:0,
    duration: .8,
    stagger: 0.5
  });

  // section-9
  gsap.from('.section-9 li.one', {
    scrollTrigger: {
      trigger:".section-9",
      start:"center 80%",
    },
    y:50,
    opacity:0,
    duration: .8,
    stagger: 0.5
  });

  let s9 = gsap.timeline({
    scrollTrigger:{
      trigger:".section-9",
      start:"top center"
    }
  });
  
  s9.from('.section-9 li:nth-child(4)', {
    opacity:0,
    duration: .8
  });
  
  s9.from('.section-9 li:nth-child(5)', {
    x:-50,
    opacity:0,
    duration: .8
  });

  // section-10
  let s10 = gsap.timeline({
    scrollTrigger:{
      trigger:".section-10",
      start:"top center"
    }
  });
  
  s10.from('.section-10 li:nth-child(2)', {
    y:50,
    opacity:0,
    duration: .8
  });
  
  s10.from('.section-10 li:nth-child(3)', {
    y:50,
    opacity:0,
    duration: .8
  },"-=.3");
  
  s10.from('.section-10 li:nth-child(4)', {
    opacity:0,
    duration: .8
  },"-=.3");

  s10.from('.section-10 li:nth-child(7)', {
    y:50,
    opacity:0,
    duration: .8
  });

  s10.from('.section-10 li:nth-child(8)', {
    y:50,
    opacity:0,
    duration: .8
  });

  s10.from('.section-10 li:nth-child(5)', {
    y:50,
    opacity:0,
    duration: .8
  });

  s10.from('.section-10 li:nth-child(9)', {
    y:50,
    opacity:0,
    duration: .8
  });

  s10.from('.section-10 li:nth-child(6)', {
    y:50,
    opacity:0,
    duration: .8
  });
