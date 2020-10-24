<?
$products = [
    1 => [
        'name' => 'Кухонная мойка №3',
        'desc-size' => '51×510×191 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/1.jpg',
        'image_min' => 'upload/products/catalog_marbax/1.jpg',
    ],
    2 => [
        'name' => 'Кухонная мойка №8',
        'desc-size' => '500×425×195 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/2.jpg',
        'image_min' => 'upload/products/catalog_marbax/2.jpg',
    ],
    3 => [
        'name' => 'Кухонная мойка №9',
        'desc-size' => '570×505×200 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/3.jpg',
        'image_min' => 'upload/products/catalog_marbax/3.jpg',
    ],
    4 => [
        'name' => 'Кухонная мойка №10',
        'desc-size' => '575×440×215 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/4.jpg',
        'image_min' => 'upload/products/catalog_marbax/4.jpg',
    ],
    5 => [
        'name' => 'Кухонная мойка №23',
        'desc-size' => '945×500×175 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/5.jpg',
        'image_min' => 'upload/products/catalog_marbax/5.jpg',
    ],
    6 => [
        'name' => 'Кухонная мойка №26',
        'desc-size' => '780×500×190 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/6.jpg',
        'image_min' => 'upload/products/catalog_marbax/6.jpg',
    ],
    7 => [
        'name' => 'Кухонная мойка №161',
        'desc-size' => '750×505×218 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/7.jpg',
        'image_min' => 'upload/products/catalog_marbax/7.jpg',
    ],
    8 => [
        'name' => 'Кухонная мойка №191',
        'desc-size' => '765×500 мм',
        'desc-color' => 'белый лед, сигнально-белый, бежевый, бежевый фреш, черный, песочный, слоновая кость, хлопок, темно-серый, терракот, светло-серый, светло-розовый, салатовый, голубой, ваниль, белый гранит, шоколад, красный блеск, крем',
        'price' => '0',
        'image' => 'upload/products/catalog_marbax/8.jpg',
        'image_min' => 'upload/products/catalog_marbax/8.jpg',
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
                        <i>Мойки  Milani (Marbax)</i>
                    </div>
                    <a href="javascript:;" class="dev_order_btn button" data-name="<?= trim($product['name']) ?>"
                       data-img="<?= trim($product['image']) ?>">Купить</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
