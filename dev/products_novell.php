<?
$products = [
    1 => [
        'name' => 'Кухонная мойка «Аврора»',
        'desc-size' => '502×502 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '14 000',
        'image' => 'upload/products/catalog_novell/1.jpg',
        'image_min' => 'upload/products/catalog_novell/1.jpg',
    ],
    2 => [
        'name' => 'Кухонная мойка «Капри»',
        'desc-size' => '437×437 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '13 800',
        'image' => 'upload/products/catalog_novell/2.jpg',
        'image_min' => 'upload/products/catalog_novell/2.jpg',
    ],
    3 => [
        'name' => 'Кухонная мойка «Нимфа»',
        'desc-size' => '570×460 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '15 800',
        'image' => 'upload/products/catalog_novell/3.jpg',
        'image_min' => 'upload/products/catalog_novell/3.jpg',
    ],
    4 => [
        'name' => 'Кухонная мойка «Аврора»',
        'desc-size' => '612×494 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '19 000',
        'image' => 'upload/products/catalog_novell/4.jpg',
        'image_min' => 'upload/products/catalog_novell/4.jpg',
    ],
    5 => [
        'name' => 'Кухонная мойка «Кролина»',
        'desc-size' => '740×485 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '18 300',
        'image' => 'upload/products/catalog_novell/5.jpg',
        'image_min' => 'upload/products/catalog_novell/5.jpg',
    ],
    6 => [
        'name' => 'Кухонная мойка «Аделаида»',
        'desc-size' => '625×505 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '17 400',
        'image' => 'upload/products/catalog_novell/6.jpg',
        'image_min' => 'upload/products/catalog_novell/6.jpg',
    ],
    7 => [
        'name' => 'Кухонная мойка «Атланта»',
        'desc-size' => '463×501 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '17 700',
        'image' => 'upload/products/catalog_novell/7.jpg',
        'image_min' => 'upload/products/catalog_novell/7.jpg',
    ],
    8 => [
        'name' => 'Кухонная мойка «Ирбис»',
        'desc-size' => '410×410 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '18 300',
        'image' => 'upload/products/catalog_novell/8.jpg',
        'image_min' => 'upload/products/catalog_novell/8.jpg',
    ],
    9 => [
        'name' => 'Кухонная мойка «Глория»',
        'desc-size' => '623×480 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '18 700',
        'image' => 'upload/products/catalog_novell/9.jpg',
        'image_min' => 'upload/products/catalog_novell/9.jpg',
    ],
    10 => [
        'name' => 'Кухонная мойка «Маура»',
        'desc-size' => '781×495 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '23 100',
        'image' => 'upload/products/catalog_novell/10.jpg',
        'image_min' => 'upload/products/catalog_novell/10.jpg',
    ],
    11 => [
        'name' => 'Кухонная мойка «София»',
        'desc-size' => '673×495 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '21 700',
        'image' => 'upload/products/catalog_novell/11.jpg',
        'image_min' => 'upload/products/catalog_novell/11.jpg',
    ],
    12 => [
        'name' => 'Кухонная мойка «Грация»',
        'desc-size' => '775×495 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '26 600',
        'image' => 'upload/products/catalog_novell/12.jpg',
        'image_min' => 'upload/products/catalog_novell/12.jpg',
    ],
    13 => [
        'name' => 'Кухонная мойка «Бьянка»',
        'desc-size' => '595×495 мм',
        'desc-color' => 'калорадо, белый, терра, терракотовый, латте, серый обсидиан, графит, морокко',
        'price' => '22 200',
        'image' => 'upload/products/catalog_novell/13.jpg',
        'image_min' => 'upload/products/catalog_novell/13.jpg',
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
                        <i>Мойки NOVELL</i>
                    </div>
                    <a href="javascript:;" class="dev_order_btn button" data-name="<?= trim($product['name']) ?>"
                       data-img="<?= trim($product['image']) ?>">Купить</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
