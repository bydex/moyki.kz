<?
$products = [
    1 => [
        'name' => 'Кухонная мойка «G001»',
        'desc-size' => '502×502 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '15 500',
        'image' => 'upload/products/catalog_granikom/1.jpg',
        'image_min' => 'upload/products/catalog_granikom/1.jpg',
    ],
    2 => [
        'name' => 'Кухонная мойка «G002»',
        'desc-size' => '777×485 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '24 500',
        'image' => 'upload/products/catalog_granikom/2.jpg',
        'image_min' => 'upload/products/catalog_granikom/2.jpg',
    ],
    3 => [
        'name' => 'Кухонная мойка «G004»',
        'desc-size' => '780×495 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '28 300',
        'image' => 'upload/products/catalog_granikom/3.jpg',
        'image_min' => 'upload/products/catalog_granikom/3.jpg',
    ],
    4 => [
        'name' => 'Кухонная мойка «G006»',
        'desc-size' => '740×485 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '23 300',
        'image' => 'upload/products/catalog_granikom/4.jpg',
        'image_min' => 'upload/products/catalog_granikom/4.jpg',
    ],
    5 => [
        'name' => 'Кухонная мойка «G012»',
        'desc-size' => '790×495 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '28 200',
        'image' => 'upload/products/catalog_granikom/5.jpg',
        'image_min' => 'upload/products/catalog_granikom/5.jpg',
    ],
    6 => [
        'name' => 'Кухонная мойка «G015»',
        'desc-size' => '613×494 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '19 000',
        'image' => 'upload/products/catalog_granikom/6.jpg',
        'image_min' => 'upload/products/catalog_granikom/6.jpg',
    ],
    7 => [
        'name' => 'Кухонная мойка «G016»',
        'desc-size' => '640×495 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '26 700',
        'image' => 'upload/products/catalog_granikom/7.jpg',
        'image_min' => 'upload/products/catalog_granikom/7.jpg',
    ],
    8 => [
        'name' => 'Кухонная мойка «G017»',
        'desc-size' => '640×492 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '28 200',
        'image' => 'upload/products/catalog_granikom/8.jpg',
        'image_min' => 'upload/products/catalog_granikom/8.jpg',
    ],
    9 => [
        'name' => 'Кухонная мойка «G018»',
        'desc-size' => '790×495 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '28 500',
        'image' => 'upload/products/catalog_granikom/9.jpg',
        'image_min' => 'upload/products/catalog_granikom/9.jpg',
    ],
    10 => [
        'name' => 'Кухонная мойка «G019»',
        'desc-size' => '58×495 мм',
        'desc-color' => 'антрацит, грей, дакар, жасмин, кремовый, сахара, серебристый, шампань, шоколад',
        'price' => '23 000',
        'image' => 'upload/products/catalog_granikom/10.jpg',
        'image_min' => 'upload/products/catalog_granikom/10.jpg',
    ],
]
?>
<div class="product-list">
    <div class="row large-up-3 medium-up-2 small-up-1">
        <? foreach ($products as $product): ?>
            <div class="column">
                <div class="product-list_item">
                    <a href="<?= trim($product['image']) ?>" class="img" data-lightbox="group-products">
                        <div class="img-overlay"></div>
                        <div class="img-container">
                            <img src="<?= trim($product['image_min']) ?>" alt="<?= trim($product['name']) ?>"/>
                        </div>
                    </a>
                    <div class="name">
                        <?= trim($product['name']) ?>
                    </div>
                    <div class="desc">
                        <p class="desc__description">
                            <span class="desc__name">Размер мойки:</span>
                            <?= trim($product['desc-size']) ?>
                        </p>
                        <p class="desc__description">
                            <span class="desc__name">Цвет:</span>
                            <?= trim($product['desc-color']) ?>
                        </p>
                    </div>
                    <div class="price">
                        <span><?= trim($product['price']) ?> тг</span>
                        <i>Мойки Granicom</i>
                    </div>
                    <a href="javascript:;" class="dev_order_btn button" data-name="<?= trim($product['name']) ?>"
                       data-img="<?= trim($product['image']) ?>">Купить</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
