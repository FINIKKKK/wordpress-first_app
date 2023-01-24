  <?php get_header();?>

  <div class="about" id="about" style=" background: url(<?=CFS()->get('bg__light')?>) center 100% repeat-x,
    url(<?=CFS()->get('bg__dark')?>) center 100% repeat-x,
    #1d1d1d;">
    <div class="container">
      <div class="about__inner">
        <?php
$loop = CFS()->get('card');
foreach ($loop as $card) {;
    ?>
              <div class="about__item">
                <div class="about__year"><?=$card['card__year'];?></div>
                <div class="about__text"><?=$card['card__text'];?></div>
              </div>
              <?php
}
?>


      </div>
    </div>
  </div>
  <div class="team" id="team">
    <div class="container">
      <div class="block__head">
        <h2 class="block__title"><?=CFS()->get('team__title')?></h2>
        <p class="block__text"><?=CFS()->get('team__text')?></p>
      </div>
      <div class="team__inner">
        <div class="swiper">
          <div class="swiper-wrapper">
             <?php
$loop = CFS()->get('team__card');
foreach ($loop as $card) {
    ?>
    <div class="swiper-slide">
        <div class="team__item">
          <img class="team__item-img" src="<?=$card['team__card-img']?>" alt="">
          <h3 class="team__item-title"><?=$card['team__card-name']?></h3>
          <p class="team__item-text"><?=$card['team__card-post']?></p>
          <div class="team__icon-box">
            <?php
if (!empty($card['team__card-twitter']['url'])) {
        ?>
            <a href="<?=$card['team__card-twitter']['url']?>" target="<?=$card['team__card-twitter']['target']?>"><i class="icon-twitter"></i></a>
            <?php
}
    ?>
    <?php
if (!empty($card['team__card-instagram']['url'])) {
        ?>
            <a href="<?=$card['team__card-instagram']['url']?>" target="<?=$card['team__card-instagram']['target']?>"><i class="icon-instagram"></i></a>
            <?php
}
    ?>
          </div>
        </div>
        </div>
        <?php
}
?>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="provide" id="provide">
    <div class="container">
      <div class="block__head inverse">
        <h2 class="block__title"><?=CFS()->get('services__title')?></h2>
        <p class="block__text"><?=CFS()->get('services__text')?></p>
      </div>
      <div class="provide__inner">
        <?php $loop = CFS()->get('service');
foreach ($loop as $service) {
    ?>
        <div class="provide__item">
          <img src="<?=$service['service__img']?>" alt="icon">
          <h3 class="provide__item-title"><?=$service['service__title']?></h3>
          <p class="provide__item-text"><?=$service['service__text']?></p>
        </div>
        <?php
}
?>
      </div>
    </div>
  </div>
  <div class="contact" id="contact">
    <div class="container">
      <div class="block__head">
        <h2 class="block__title"><?=CFS()->get('footer__title')?></h2>
        <p class="block__text"><?=CFS()->get('footer__text')?></p>
      </div>
      <div class="contact__inner">
        <div class="contact__icon-box">
          <div class="contact__item">
            <i class="icon-phone"></i>
            <div class="contact__text"><a href="tel:<?=CFS()->get('footer__phone')?>"><?=CFS()->get('footer__phone')?></a></div>
          </div>
          <div class="contact__item">
            <i class="icon-location"></i>
            <div class="contact__text"><a href="<?=CFS()->get('footer__address')['url']?>" target="<?=CFS()->get('footer__address')['target']?>">Here is some address</a></div>
          </div>
          <div class="contact__item">
            <i class="icon-mail-alt"></i>
            <div class="contact__text"><a href="mailto:<?=CFS()->get('footer__email')?>"><?=CFS()->get('footer__email')?></a></div>
          </div>
        </div>
        <form action="" class="contact__form">
          <input class="contact__name" type="text" placeholder="Full Name">
          <input class="contact__email" type="email" placeholder="Email">
          <input class="contact__number" type="number" placeholder="Number">
          <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
          <input type="submit" class="contact__button" value="Submit">
        </form>
        <?php the_content()?>
      </div>
    </div>
  </div>

  <?php get_footer();?>