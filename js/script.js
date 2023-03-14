$(function () {
    $(".js-slick").slick({
        //開発中はautoplayしない
        //autoplay: true,
        autoplaySpeed: 3000,
    });

    //流れるテキスト
    //変数
    var $flowText = $(".js-flowing-box"),
        $fixBox = $flowText.find(".js-flowing-box__inner"),
        $flowBox = $fixBox.find(".js-flowing-box__body"),
        flowbox_width = $flowBox.width(), //流れてくるBoxの横幅
        flowTime = 10000, //全てのテキストが流れ終わるまでの時間．初期値10000ms
        easing = "linear", //アニメーションの軌跡
        right_start, //流れるBoxの右側の初期位置を入れる変数
        right_running, //動作中の右側の位置を入れる変数
        timer;

    //流れてくるBoxの初期値
    $flowBox.css({ left: "100%" });
    //流れるBoxの右側の初期位置
    right_start = $flowBox.offset().left + flowbox_width;

    //ボックスを流す関数
    function flowingStart() {
        $flowBox.animate(
            { left: -flowbox_width },
            flowTime,
            easing,
            function () {
                //アニメーション後に行うコールバック関数
                $flowBox.css({ left: "100%" });
            }
        );
        flowTime = 10000; //次のアニメーションの時間を設定
    }

    //繰り返し，flowingStart()を実行するための関数
    function flowingMonitor() {
        timer = setInterval(function () {
            flowingStart();
        }, 300);
    }

    flowingMonitor();

    // スクロールして表示領域に入ったらclass付与
    $(function () {
        $(".js-side-fade-in, .js-top-fade-in").on("inview", function () {
            $(this).addClass("is-inview");
        });
    });
});
