$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(function(){

    var url = "{{ route('changeLang') }}";  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

    $('.fa-plus').on('click',function(){
        $('#ncate').css('display','block');
        $('.fa-minus').css('display','block');
        $('.fa-plus').css('display','none');
        $('#cat').prop('disabled',true);		
    });

    $('.fa-minus').on('click',function(){
        $('#ncate').css('display','none');
        $('.fa-minus').css('display','none');
        $('.fa-plus').css('display','block');
        $('#cat').prop('disabled',false);
        $('#ncate').prop('disabled',true);
        $('#ncate').val('');		
    });

    setInterval(function()
    { 
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        var date = new Date(); 
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';

        var datetime = days[date.getDay()]+ ","
                +date.getDate() + ","
                + months[date.getMonth()]  + "," 
                + date.getFullYear() + " @ "  
                + hours + ":"  
                + minutes + ":" 
                + date.getSeconds()+" "+ampm;
                $('#time').text(datetime);
    },1000);
}); 

    