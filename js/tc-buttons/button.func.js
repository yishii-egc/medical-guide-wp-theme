(function() {
    tinymce.PluginManager.add('custom_button', function( editor, url ) {
        editor.addButton( 'custom_button', {
            title : 'ボタンリンク',
            image : url+'/icons/framed.png',
            onclick: function() {
                editor.insertContent('<a href="右のえんぴつを押し、歯車ボタンにてリンク設定" class="tc-button" >押して編集</a>');
            }
        });
    });
})();