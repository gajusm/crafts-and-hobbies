
window.listing = {

	setProductTile: function() {
        var arrHeight = [];
        var imgWidth = $('.prodBox').find('.prodImg').outerWidth();
        // var imgHeight = parseFloat(340 / 255) * imgWidth;
        var imgHeight = parseFloat(1 / 1) * imgWidth;
        // console.log(imgHeight);
        $('.prodBox').each(function() {
            $(this).find('.prodImg').css({
                'min-height': imgHeight,
                'max-height': imgHeight
            });
            $(this).find('.prodImg img').css({
                'max-height': imgHeight
            });
            var elementHeight = '';
            $(this).find('.prodElement').each(function() {
                elementHeight = parseFloat(elementHeight + $(this).outerHeight());
            });
            var borderWidth = $(this).css('border');
            borderWidth = borderWidth.split('px');
            $(this).find('.hiddenInfo').css('width', parseFloat(imgWidth + (borderWidth[0] * 2)));
            var nH = $(this).find('.hiddenInfo').outerHeight();
            var totalHeight = parseFloat(imgHeight + elementHeight) - parseFloat(nH);
            arrHeight.push(totalHeight);
            // console.log('imgHeight: ' + imgHeight);
            nH = parseFloat(nH);
            nH = '-' + nH + 'px';
            // $(this).find('.hiddenInfo').css('bottom', nH);
        });
        $('.prodBox').css("height", parseFloat(Math.max.apply(Math, arrHeight) + 15));
    },
}