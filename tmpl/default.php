<?php
defined('_JEXEC') or die;
/*
?>
<div class="image-galleries">
    <?php foreach ($galleries as $gallery): ?>
        <div class="image-gallery">
            <h2><?php echo htmlspecialchars($gallery['title']); ?></h2>
            <p>Date: <?php echo htmlspecialchars($gallery['date']); ?></p>
            <div class="images">
                <?php foreach ($gallery['images'] as $image): ?>
                    <img src="<?php echo $gallery['image_folder'] . '/' . $image; ?>" alt="Gallery image">
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php */ ?>
<?php foreach ($galleries as $gallery): ?>
    <div class="lg:ml-[1.6rem] xl:ml-20 2xl:mx-auto w-full xl:w-[1102px] rounded-15px lg:mb-8 h-auto bg-white virtue-shado my-12 py-12 lg:py-0 lg:my-0 relative">
        <!-- button/card -->
        <div class="fair-btn animaation-hover">
            <!-- date -->
            <?php $dt = new DateTime($gallery['date']);?>
            <span class="my-2 text-24px lg:text-30px"> <?php echo $dt->format('j F'); ?> </span>

            <!-- duration -->
            <span class="my-2 text-21px"> <?php echo $dt->format('Y'); ?> </span>
        </div>

        <div class="relative h-full">
            <!-- slides arrow left -->
            <div class="z-50 fair-arrow-left swiper-button-prev"
                style="box-shadow: 25px 5px 70px #71293b99">
                <img class="w-[15px] lg:w-[21px] h-[35]" src="/images/home/community-love/left.png"
                    alt="" />
            </div>

            <div class="relative h-full py-4 lg:ml-36">
                <h4
                    class="px-3 py-4 capitalize text-24px lg:text-30px text-deep-maroon Montserrat-Medium">
                    Queens Jubliee Street Party Wembley
                </h4>

                <div class="relative px-4 lg:px-8 xl:px-0 card__container swiper lg:mr-20">
                    <div class="grid w-full grid-cols-1 gap-8 text-center fail_festival_slider xl:grid-cols-3">
                        <div class="swiper-wrapper">
                            <?php foreach ($gallery['images'] as $image): ?>
                                <article class="swiper-slide">
                                    <img class="w-full h-full xl:w-[228px] xl:h-[228px] rounded-15px object-cover animation-hover"
                                        src="<?php echo $gallery['image_folder'] . '/' . $image; ?>"
                                        alt="" />
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- slides arrow right -->
                <div class="z-50 fair-arrow-right swiper-button-next"
                    style="box-shadow: 25px 5px 70px #71293b99">
                    <img class="w-[15px] lg:w-[21px] h-[35]"
                        src="/images/home/community-love/right.png" alt="" />
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<script>
        var swiper = new Swiper('.fail_festival_slider', {
            loop: true,
            spaceBetween: 32,
            grabCursor: true,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev', // Fixed typo here
            },
            breakpoints: {

                600: {
                    slidesPerView: 2,
                },
                968: {
                    slidesPerView: 3,
                },
            },
        });
    </script>