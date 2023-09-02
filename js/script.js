$(function () {
    const headerHeight = $(".js-header").height();
    $('a[href^="#"]').click(function () {
        const speed = 600;
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? "html" : href);
        let position = target.offset().top - headerHeight;
        $("body,html").animate({ scrollTop: position }, speed, "swing");
        return false;
    });

    $(".js-hamburger, .js-drawer, .js-drawer a").click(function () {
        $(".js-hamburger").toggleClass("is-active");
        $(".js-drawer").fadeToggle();
    });

    $(".js-slick").slick({
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $(".js-flow-slider").slick({
        arrows: false, //左右の矢印はなし
        autoplay: true, //自動的に動き出すか。初期値はfalse。
        autoplaySpeed: 0, //自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
        speed: 6900, //スライドのスピード。初期値は300。
        infinite: true, //スライドをループさせるかどうか。初期値はtrue。
        pauseOnHover: false, //オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
        pauseOnFocus: false, //フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
        cssEase: "linear", //動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
        slidesToShow: 3, //スライドを画面に4枚見せる
        slidesToScroll: 1, //1回のスライドで動かす要素数
        responsive: [
            {
                breakpoint: 769, //モニターの横幅が769px以下の見せ方
                settings: {
                    slidesToShow: 2, //スライドを画面に2枚見せる
                },
            },
            {
                breakpoint: 426, //モニターの横幅が426px以下の見せ方
                settings: {
                    slidesToShow: 1.5, //スライドを画面に1.5枚見せる
                },
            },
        ],
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
        $(".js-inview").on("inview", function () {
            $(this).addClass("is-inview");
        });
    });
});
