<?php
/*
Template Name: Главная

*/
?>
<?php get_header() ?>
<div class="mobile-nav">
	<ul class="mobile-nav__list">
		<li><a href="#" class="active">Репродукции</a></li>
		<li><a href="#!">Новинки</a></li>
		<li><a href="#!">О нас</a></li>
	</ul>
</div>

		<section class="description__section">
    <div class="container">
        <div class="description__row">
            <div class="description__col1">
                <img src="<?= CFS()->get('description_img') ?>" alt="img">
            </div>
            <div class="descrition__col2">
                <h3 class="title1"><?= CFS()->get('description_title') ?></h3>
                <p class="text1"><?= CFS()->get('description_text') ?></p>
                <button class="btn1"><?= CFS()->get('description_btn') ?></button>
            </div>
        </div>
    </div>
</section>
		<section class="reproduction__section" id="reproduction">
    <div class="container">
        <div class="reproduction__row">
            <h2 class="reproduction__title"><?= CFS()->get('reproduction_title') ?></h2>
            
            <div class="reproduction__nav">
                <button data-tab="tab-1" for="france" class="reproduction__btn active" id="tab-1"><?= CFS()->get('reproduction_btn-1') ?></button>
                <button data-tab="tab-2" for="germany"  class="reproduction__btn"id="tab-2"><?= CFS()->get('reproduction_btn-2') ?></button>
                <button data-tab="tab-3" for="englang"  class="reproduction__btn" id="tab-3"><?= CFS()->get('reproduction_btn-3') ?></button>
            </div>
        </div>
        <div class="reproduction__grid france " data-tab-content id="ttab-1">
            <?php
            $loop = CFS()->get('reproduction_loop-1');
            foreach ($loop as $row) {
                ?>
                <div class="card__row">
                <img src="<?= $row['card_img-1']; ?>" alt="" class="card__img">
                <p class="card__artist"><?= $row['card_artist-1']; ?></p>
                <h3 class="title-3"><?= $row['card_title-1']; ?></h3>
                <p class="card__text"><?= $row['card_text-1']; ?></p>
                <p class="card__price"><?= $row['card_priсe-1']; ?></p>
                <button class="card__btn"><?= $row['card_btn-1']; ?></button>
                </div>
                <?php
            }
            
            ?>
        </div>

        
        <div class="reproduction__grid germany hidden" data-tab-content id="ttab-2">
        <?php
            $loop = CFS()->get('reproduction_loop-2');
            foreach ($loop as $row) {
                ?>
                <div class="card__row">
                <img src="<?= $row['card_img-2']; ?>" alt="hbib" class="card__img">
                <p class="card__artist"><?= $row['card_artist-2']; ?></p>
                <h3 class="title-3"><?= $row['card_title-2']; ?></h3>
                <p class="card__text"><?= $row['card_text-2']; ?></p>
                <p class="card__price"><?= $row['card_priсe-2']; ?></p>
                <button class="card__btn"><?= $row['card_btn-2']; ?></button>
                </div>
                <?php
            }
            
            ?>
        </div>

         
        <div class="reproduction__grid germany hidden" data-tab-content id="ttab-3">
            <?php
                $loop = CFS()->get('reproduction_loop-3');
                foreach ($loop as $row) {
                    ?>
                    <div class="card__row">
                    <img src="<?= $row['card_img-3']; ?>" alt="" class="card__img">
                    <p class="card__artist"><?= $row['card_artist-3']; ?></p>
                    <h3 class="title-3"><?= $row['card_title-3']; ?></h3>
                    <p class="card__text"><?= $row['card_text-3']; ?></p>
                    <p class="card__price"><?= $row['card_priсe-3']; ?></p>
                    <button class="card__btn"><?= $row['card_btn-3']; ?></button>
                    </div>
                    <?php
                }
                ?>
        </div>

    </div>
</section>
		<section class="collection__section" id="collection"  style="background: url(<?= CFS()->get('collection_bg') ?>) center top no-repeat  ;"  >
    <div class="container">
        <div class="collection__row" >
            
            <div class="collection__logo-title">
                <img src="<?= CFS()->get('collection_logo') ?>" alt="" class="collection__logo">
                <h2 class="collection__title"><?= CFS()->get('collection_title') ?></h2>
            </div>
            <p class="collection__text"><?= CFS()->get('collection_text-1') ?></p>
            <p class="collection__text"><?= CFS()->get('collection_text-2') ?></p>
            <button class="collection__btn"><?= CFS()->get('collection_btn') ?></button>
        </div>
    </div>
    
</section>
		<section class="team__section" id="team">

    <div class="container">
        <!-- <div class="team__bg"><img src="./img/team-bg.png" alt=""></div> -->
        <div class="team__row">
            <div class="team__bg"><img src="<?= CFS()->get('team_bg') ?>" alt=""></div>
            <h2 class="team__title"><?= CFS()->get('team_title') ?></h2>
            <p class="team__text"><?= CFS()->get('team_text') ?></p>
            <div class="team__photo">
                <?php
                    $loop = CFS()->get('team_photo');
                    foreach ($loop as $row) {
                        ?>
                            <img src="<?= $row['team_img']; ?>" alt="team" class="team__img">
                        <?php
                    }
                ?>


            </div>
        </div>
    </div>
</section>
<?php get_footer()?>