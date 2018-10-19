(function() {
    tinymce.PluginManager.add('block_link', function( editor, url ) {
        editor.addButton( 'block_link', {
            title : 'Block Link',
            icon : 'block-link',
            onclick: function() {
                editor.insertContent('' +
                    '<a class="blockLink clearfix" href="URLリンクはえんぴつ→歯車マークで編集できます">\n' +
                    '<img class="alignnone wp-image-11 size-medium" src="'+ url.replace('themes/medical-guide/js/tc-buttons', '') + 'uploads/2018/06/medical-ED3-300x202.jpg" alt="" width="300" height="202" />\n' +
                    '<span class="container">\n' +
                    '<strong>Title</strong>\n' +
                    '<small>Description</small>\n' +
                    '</span>\n' +
                    '</a>\n');
            }
        });
    });
})();