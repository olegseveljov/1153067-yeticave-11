<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <?php foreach ($categories as $category): ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html"><?= esc($category); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <?php //var_dump($image); ?>

        <?php foreach ($items as $category => $item): ?>

            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= esc($item['image']); ?>" width="350" height="260" alt="<?= esc($item['title']); ?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= esc($item['category']); ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= esc($item['title']); ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= priceFormat($item['price']); ?></span>
                        </div>
                        <div class="lot__timer timer <?php if (get_dt_range($item['expire_date']) <= '00:60') echo 'timer--finishing' ?>">
                            <?= get_dt_range($item['expire_date']) ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
