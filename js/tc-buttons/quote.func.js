(function() {
    tinymce.PluginManager.add('quote_button', function( editor, url ) {
        editor.addButton( 'quote_button', {
            title : '引用',
            image : url+'/icons/quote_bubble.png',
            onclick: function() {
                editor.insertContent('<blockquote><p>引用文</p><div>出典:<a href="URLリンクはえんぴつ→歯車マークで編集できます">出典元URLリンクを必ず入れること！</a></div></blockquote>');
            }
        });
    });
})();