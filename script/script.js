// header scrolling effect

window.addEventListener("scroll", function() {
    const distance = window.scrollY;
    document.querySelector("#layer0").style.transform = `translateY(${distance *  0.75}px)`;
    document.querySelector("#layer1").style.transform = `translateY(${distance *  0.70}px)`;
    document.querySelector("#layer2").style.transform = `translateY(${distance *  0.65}px)`;
    document.querySelector("#layer3").style.transform = `translateY(${distance *  0.60}px)`;
    document.querySelector("#layer4").style.transform = `translateY(${distance *  0.45}px)`;
    document.querySelector(".scrolldown").style.opacity = 1-`${distance *  0.003}`;
  });


// add class sticky to diffrent sections

var $output = $('#section');
$(window).on('scroll', function () {
    var scrollTop     = $(window).scrollTop(),
        elementOffset = $('.section__first').offset().top,
        distance      = (elementOffset - scrollTop);
        viewport_Height = window.innerHeight;
          
        if (distance <= 1){
          document.querySelector('.section__first').classList.add("sticky")
          document.querySelector('#navbar').classList.add("stickynav")
          }

        if (scrollTop <= viewport_Height) {
          document.querySelector('.section__first').classList.remove("sticky");
          document.querySelector('#navbar').classList.remove("stickynav");
          }

    var scrollTop1     = $(window).scrollTop(),
        elementOffset1 = $('.section__second').offset().top,
        distance1      = (elementOffset1 - scrollTop1);
        viewport_heightdoule = window.innerHeight*2;

        if (distance1 <= 1){
          document.querySelector('.section__second').classList.add("sticky")
          }

        if (scrollTop1 <= viewport_heightdoule) {
          document.querySelector('.section__second').classList.remove("sticky");
          }
    
});

