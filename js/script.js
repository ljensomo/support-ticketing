$(document).ready(function(){

    function load_unseen_notifications(view = ''){

        var user_id = $('#logged_id').val();

        $.ajax({
                url:"includes/fetch-notifications.php",
                method:"POST",
                data:{
                    user_id:user_id,
                    view:view
                },
                dataType:"json",
                success:function(data){
                    $('#notifications').html(data.notifications);
                    if(data.count > 0){
                        $('#count').html(data.count);
                        $('#count').show();
                    }
                }
        });

    }

    load_unseen_notifications();

    setInterval(function(){
        load_unseen_notifications();
    }, 5000);

    $('#notif-dropdown').on('click',function(){
        $('#count').hide();
        load_unseen_notifications('yes');
    });

});

