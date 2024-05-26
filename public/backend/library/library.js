(function(){
    var Switch = {};

    var $document = $(document)

    Switch.switchchery = () => {
        $('.js-switch').each(function(){
            var switchery = new Switchery(this, { color: '#1AB394' });
        })
    }

    $document.ready(function(){
        Switch.switchchery()
    })

})(jQuery);