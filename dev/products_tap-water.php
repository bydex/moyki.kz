<?
$products = [
    1 => [
        'name' => 'Модель G003',
        'desc-color' => false,
        'desc-choose' => 'Цвет на выбор под цвет мойку ',
        'price' => '19 000',
        'image' => 'upload/products/catalog_tap-water/1.jpg',
        'image_min' => 'upload/products/catalog_tap-water/1.jpg',
    ],
    2 => [
        'name' => 'Модель G005',
        'desc-color' => false,
        'desc-choose' => 'Цвет на выбор под цвет мойку ',
        'price' => '27 000',
        'image' => 'upload/products/catalog_tap-water/2.jpg',
        'image_min' => 'upload/products/catalog_tap-water/2.jpg',
    ],
    3 => [
        'name' => 'Модель G007',
        'desc-color' => false,
        'desc-choose' => 'Цвет на выбор под цвет мойку ',
        'price' => '30 000',
        'image' => 'upload/products/catalog_tap-water/3.jpg',
        'image_min' => 'upload/products/catalog_tap-water/3.jpg',
    ],
    4 => [
        'name' => 'Модель G013',
        'desc-color' => false,
        'desc-choose' => 'Цвет на выбор под цвет мойку ',
        'price' => '35 000',
        'image' => 'upload/products/catalog_tap-water/4.jpg',
        'image_min' => 'upload/products/catalog_tap-water/4.jpg',
    ],
    5 => [
        'name' => 'Модель F 4352',
        'desc-color' => 'белый, черный, бронза',
        'desc-choose' => false,
        'price' => '30 000',
        'image' => 'upload/products/catalog_tap-water/5.jpg',
        'image_min' => 'upload/products/catalog_tap-water/5.jpg',
    ],
    6 => [
        'name' => 'Модель G 4398-1',
        'desc-color' => 'белый, черный, бронза',
        'desc-choose' => false,
        'price' => '45 000',
        'image' => 'upload/products/catalog_tap-water/6.jpg',
        'image_min' => 'upload/products/catalog_tap-water/6.jpg',
    ],
    7 => [
        'name' => 'Модель R  558 L',
        'desc-color' => 'белый, черный, бронза',
        'desc-choose' => false,
        'price' => '45 000',
        'image' => 'upload/products/catalog_tap-water/7.jpg',
        'image_min' => 'upload/products/catalog_tap-water/7.jpg',
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
                        <? if (trim($product['desc-color'])): ?>
                            <p class="desc__description">
                                <span class="desc__name">Цвет:</span>
                                <?= trim($product['desc-color']) ?>
                            </p>
                        <? endif; ?>
                        <? if (trim($product['desc-choose'])): ?>
                            <p class="desc__description">
                                <?= trim($product['desc-choose']) ?>
                            </p>
                        <? endif; ?>
                    </div>
                    <div class="price">
                        <span><?= trim($product['price']) ?> тг</span>
                        <i>Смесители Granicom</i>
                    </div>
                    <a href="javascript:;" class="dev_order_btn button" data-name="<?= trim($product['name']) ?>"
                       data-img="<?= trim($product['image']) ?>">Купить</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
