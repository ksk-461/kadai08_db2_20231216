// 本日の日付を取得して、直近の締切日に間に合う日付を選択
function getDel_day() {
    var del_day = new Date();
    del_day.setDate(del_day.getDate()+3); //締切日を考慮
    var yyyy = del_day.getFullYear();
    var mm = ("0"+(del_day.getMonth()+1)).slice(-2);
    var dd = ("0"+del_day.getDate()).slice(-2);
    document.getElementById("del_day").value=yyyy+'-'+mm+'-'+dd;
}

getDel_day();

// 地域を選択した際の地図画像の挙動
$('.district_tab').on('change',($this)=>{
    const district = $this.currentTarget['id'];
    const time = 200;
    switch(district){
        case 'tab_all':
            $('.map').children('img').css('display','none');
            $('.h_all').css('display','block').fadeOut(time).fadeIn(time);
            break;
        case 'tab_center':
            $('.map').children('img').css('display','none');
            $('.h_all').css('display','block');
            $('.h_center').css('display','block').fadeOut(time).fadeIn(time);
            break;
        case 'tab_south':
            $('.map').children('img').css('display','none');
            $('.h_all').css('display','block');
            $('.h_south').css('display','block').fadeOut(time).fadeIn(time);
            break;
        case 'tab_north':
            $('.map').children('img').css('display','none');
            $('.h_all').css('display','block');
            $('.h_north').css('display','block').fadeOut(time).fadeIn(time);
            break;
        case 'tab_east':
            $('.map').children('img').css('display','none');
            $('.h_all').css('display','block');
            $('.h_east').css('display','block').fadeOut(time).fadeIn(time);
            break;
        default:
            console.log('ERROR');
    }
})

$('.modal-002__open-label').on('click',()=>{
    let sum_a = parseInt($('.center_a').val());
    let sum_b = parseInt($('.center_b').val());
    sum_b += parseInt($('.east_b').val());
    let sum_c = parseInt($('input[name="center_c"]').val());
     sum_c += parseInt($('input[name="south_c"]').val());
    let sum_d = parseInt($('input[name="north_d"]').val());
    let sum_e = parseInt($('input[name="north_e"]').val());
    sum_e += parseInt($('input[name="south_e"]').val());
    sum_e += parseInt($('input[name="east_e"]').val());
    let sum_all = sum_a + sum_b + sum_c + sum_d + sum_e;
    sum_all += parseInt($('input[name="all"]').val());

    $('.comp').html($('input[name="company"]').val());
    $('.name').html($('input[name="name"]').val());
    $('.email').html($('input[name="email"]').val());
    $('.date').html($('input[name="date"]').val());
    $('.size').html($('#size').val());


    // なんか文字列として認識されちゃう
    $('.sum_a').html(sum_a.toLocaleString());
    $('.sum_b').html(sum_b.toLocaleString());
    $('.sum_c').html(sum_c.toLocaleString());
    $('.sum_d').html(sum_d.toLocaleString());
    $('.sum_e').html(sum_e.toLocaleString());
    $('.sum_all').html(sum_all.toLocaleString());
});