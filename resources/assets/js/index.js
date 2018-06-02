$(function(){
    // 滑動效果
    $("a[href^='#']").on('click', function (e) {
        e.preventDefault();
        let $id = $(this).attr('href');
        // 測試後這三個有差別
        // easInSine 逐步加速
        // spring 馬上跳到位置然後回彈一下 / 超活潑
        // easeInOutCirc 逐步加速然後快到位置時緩速
        $($id).velocity('scroll', {duration: 800, easing: "easeInOutCirc"});
    });
});
