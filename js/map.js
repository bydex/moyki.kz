var spinner = $('.ymap-container').children('.loader');
var check_if_load = false;
var myMapTemp, myPlacemarkTemp;
function init() {
    var myMapTemp = new ymaps.Map("map-yandex", {
        center: [49.794861, 73.1323096],
        zoom: 17,
        controls: ['zoomControl', 'fullscreenControl']
    });
    var myPlacemarkTemp = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [49.794861, 73.1293096]
        }
    });
    myMapTemp.geoObjects.add(myPlacemarkTemp);
    var layer = myMapTemp.layers.get(0).get(0);
    waitForTilesLoad(layer).then(function () {
        spinner.removeClass('is-active');
    });

    // $('#dev_contact_tabs').on('change.zf.tabs', function (tabs, tab) {
    //     var $cordinates = [51.105239631460904, 71.42925015840528];
    //     switch (tab.index()) {
    //         case 0:
    //             $cordinates = [51.105239631460904, 71.42925015840528];
    //             break;
    //         case 1:
    //             $cordinates = [50, 71.3];
    //             break;
    //     }
    //     myPlacemarkTemp.geometry.setCoordinates($cordinates);
    //     myMapTemp.setCenter($cordinates, 17);
    // });
}


function waitForTilesLoad(layer) {
    return new ymaps.vow.Promise(function (resolve, reject) {
            var tc = getTileContainer(layer)
                , readyAll = true;
            tc.tiles.each(function (tile, number) {
                if (!tile.isReady()) {
                    readyAll = false;
                }
            });
            if (readyAll) {
                resolve();
            } else {
                tc.events.once("ready", function () {
                    resolve();
                });
            }
        }
    );
}
function getTileContainer(layer) {
    for (var k in layer) {
        if (layer.hasOwnProperty(k)) {
            if (layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer || layer[k] instanceof ymaps.layer.tileContainer.DomContainer) {
                return layer[k];
            }
        }
    }
    return null;
}
function loadScript(url, callback) {
    var script = document.createElement("script");
    if (script.readyState) {
        script.onreadystatechange = function () {
            if (script.readyState == "loaded" || script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        }
    } else {
        script.onload = function () {
            callback();
        }
    }
    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}

$('.ymap-container').mouseenter(function () {
    if (!check_if_load) {
        check_if_load = true;
        spinner.addClass('is-active');
        loadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;loadByRequire=1", function () {
            ymaps.load(init);
        });
    }
});

