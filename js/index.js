function getDel_day() {
    var del_day = new Date();
    del_day.setDate(del_day.getDate()+3); //締切日を考慮
    var yyyy = del_day.getFullYear();
    var mm = ("0"+(del_day.getMonth()+1)).slice(-2);
    var dd = ("0"+del_day.getDate()).slice(-2);
    document.getElementById("del_day").value=yyyy+'-'+mm+'-'+dd;
}

getDel_day();

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