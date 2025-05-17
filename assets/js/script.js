// === ハンバーガーメニュー ===

// メニューボタンをクリックすると、メニューが開閉する
$(document).ready(function () {
    $('.sp-header-navbtn').on('click', () => {
        $('body').toggleClass('is-nav-open');
    });
});

// リンクをクリックすると、メニューが閉じる
$(document).ready(function () {
    $('.sp-header-nav').on('click', 'a', () => {
        $('body').toggleClass('is-nav-open');
    });
});



// --- .fadein の設定 ---

// ロボットにやって欲しい事を設定
const animateFade = (entries, obs) => {
    // console.log('じゅわっ');

    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            // console.log(entry.target);

            entry.target.animate(
                {
                    opacity: [0, 1],
                    filter: ['blur(1rem)', 'blur(0)'],
                    // translate: ['0 3rem', 0],
                },
                {
                    duration: 1200,
                    easing: 'ease',
                    fill: 'forwards',
                }
            );

            // 一回ふわっとさせたら、監視の対象外にする。
            obs.unobserve(entry.target);
        }
    });

};

const options = {
    threshold: 1,
};

// 監視ロボット fadeObserber を用意
const fadeObserber = new IntersectionObserver(animateFade, options);

// 監視するものを設定
const fadeElements = document.querySelectorAll('.fadein');
fadeElements.forEach(element => {
    fadeObserber.observe(element);
});


// --- .fadein_2 (card) の設定 ---

// ロボットにやって欲しいことを書く
const animateFade2 = (entries2, obs2) => {
    // console.log('ふわっ');

    entries2.forEach((entry2) => {
        if (entry2.isIntersecting) {
            // console.log(entry2.target);

            entry2.target.animate(
                {
                    opacity: [0, 1],
                    filter: ['blur(.5rem)', 'blur(0)'],
                    translate: ['0 5rem', 0],

                },
                {
                    duration: 1500,
                    easing: 'ease',
                    fill: 'forwards',
                }
            );

            // 一回ふわっとさせたら、監視の対象外にする。
            obs2.unobserve(entry2.target);
        };
    });
};

const options2 = {
    threshold: 0.8,
};

// 監視ロボットを用意
const fadeObserber2 = new IntersectionObserver(animateFade2, options2);

// 監視するものを設定
const fadeElements2 = document.querySelectorAll('.fadein_2');
fadeElements2.forEach(element2 => {
    fadeObserber2.observe(element2);
});





// ロボットにやって欲しい動きを作る
const showHamburger = (entries3, obs3) => {
    // console.log(entries4[0].target);

    entries3.forEach((entry3) => {
        if (entry3.isIntersecting) {
            // console.log(entry3.target);


            // ハンバーガーメニューを順番に表示
            const hamburger = document.querySelectorAll('.hamburger');
            // console.log(hamburger);

            for (let i = 0; i < hamburger.length; i++) {

                const hbgKeyframes = {
                    opacity: [0, 1],
                    filter: ['blur(.5rem)', 'blur(0)'],
                    translate: ['0 -3rem', 0],
                };

                const hbgOptions = {
                    duration: 1000,
                    delay: i * 150,
                    easing: 'ease',
                    fill: 'forwards',
                };

                hamburger[i].animate(hbgKeyframes, hbgOptions);

                // 一回ふわっとさせたら、監視の対象外にする。
                obs3.unobserve(entry3.target);
            };

        };
    });


};

const options3 = {
    threshold: 0.3,
};

// 監視ロボットを導入する
const hamburgerObserber = new IntersectionObserver(showHamburger, options3);

// 監視するものを指示する
hamburgerObserber.observe(document.querySelector('.sp-humburger'));