$(document).ready(function () {
  /* Плавная прокрутка меню */
  $('.header a[href^="#"]').click(function () {
    let target = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top,
      },
      500
    );
    $('.header a[href^="#"]').parent().removeClass("active");
    $(this).parent().addClass("active");
    $(".menu__mobile .menu").toggle(500);
    $(".menu__burger").toggleClass("close");
    return false;
  });
  /* Мобильное меню */
  $(".menu__burger").click(function () {
    $(".menu__mobile .menu").toggle(500);
    $(this).toggleClass("close");
  });

  const swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
