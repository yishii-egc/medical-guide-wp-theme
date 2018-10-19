jQuery(function ($) {

    $('.column-pickup a').on('click',function(){
       var $this = $(this);
        $.ajax({
            type: "post",
            url: ajaxurl,
            data: {
                'action' : 'pickup',
                'post_id' : $this.data('post-id')
            },
            dataType: 'json'
        }).done(function (data) {
            if(typeof data.error != "undefined"){
                alert(data.error);
                return false;
            }
            $this.attr('class', data.class);
        });
    });


});