(function(){
    var HT = {};

    var $document = $(document)

    HT.switchchery = () => {
        $('.js-switch').each(function(){
            var switchery = new Switchery(this, { color: '#1AB394' });
        })
    }

    HT.select2 = () => {
        $('.setupSelect2').select2();
    }

    $document.ready(function(){
        HT.switchchery();
        HT.select2();
    })

})(jQuery);