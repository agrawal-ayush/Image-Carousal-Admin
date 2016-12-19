 
(function(jQuery) {
    jQuery.fn.printPage = function() {
       return this.each(function() {
            // Wrap each element in a <a href="#">...</a> tag
            var $current = jQuery(this);
            $current.wrapInner('<a href="#"></a>');
            
            jQuery('span.print > a').click(function() {
                window.print(); 
                return false;    
            });
       });
    }
})(jQuery);