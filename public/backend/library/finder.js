(function($) {
    var HT = {};

    var $document = $(document);

    HT.inputImage = function() {
        $document.on('click', '.input-image', function() {
            let _this = $(this);
            let fileUpload = _this.attr('data-upload');
            HT.BrowserServerInput(_this, fileUpload);
        });
    };

    HT.BrowserServerInput = function($object, type) {
        if (typeof type === 'undefined') {
            type = 'Images';
        }
        CKFinder.popup({
            resourceType: type,
            chooseFiles: true,
            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    var file = evt.data.files.first();
                    var fileUrl = file.getUrl();
                    console.log(fileUrl);
                    $object.val(fileUrl);
                });

                finder.on('file:choose:resizedImage', function(evt) {
                    var fileUrl = evt.data.resizedUrl;
                    console.log(fileUrl);
                    $object.val(fileUrl);
                });
            }
        });
    };

    $(document).ready(function() {
        HT.inputImage();
    });
})(jQuery);
