$(function() {
  function updateTotals(){
    var length = $('[data-cart] [data-cart-item]:not(.template)').length;
    $('[data-cart-item-count]').html(length);
  }
  
  $('[data-cart-toggle]').on('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    
    $('[data-cart]').toggleClass('expanded');
  });
  
  $('[data-cart-products]').on('click', '[data-cart-add]', function(e){
    e.preventDefault();
    e.stopPropagation();
    
    var $button = $(this);
    var $template = $('.template[data-cart-item]').clone();
    var $cart = $('[data-cart]');
    
    var $itemImg = $button.closest('[data-cart-product]').find('[data-image]');
    var $itemImgClone = $itemImg.clone();
    
    if( $cart.hasClass('expanded') ){
    
      $itemImgClone
          .offset({ top: $itemImg.offset().top, left: $itemImg.offset().left })
          .css({ position: 'absolute', width: $itemImg.width(), height: $itemImg.height(), opacity: 0.75 })
          .appendTo($('body'))
          .animate({ width: $itemImg.width() / 2, height: $itemImg.height() / 2, left: $cart.offset().left - ($itemImg.width() / 2), top: $cart.offset().top, opacity: 0 }, function(){
            $itemImgClone.remove();
          }); 
      
    } else {
      
      setTimeout( function(){
        
        $itemImgClone
          .offset({ top: $itemImg.offset().top, left: $itemImg.offset().left })
          .css({ position: 'absolute', width: $itemImg.width(), height: $itemImg.height(), opacity: 0.75 })
          .appendTo($('body'))
          .animate({ width: $itemImg.width() / 2, height: $itemImg.height() / 2, left: $cart.offset().left - ($itemImg.width() / 2), top: $cart.offset().top, opacity: 0 }, function(){
            $itemImgClone.remove();
          }); 
        
      },200);
      
      
    }
    
    $template.find('[data-cart-name]').html( $button.data('cart-name') );
    $template.find('[data-cart-price]').html( $button.data('cart-price') );
    
    $template.find('[data-cart-thumb]').attr('src', $button.data('cart-thumb') );
    
    $template.removeClass('template').addClass('toggling');
    
    $('[data-cart-items-container]').prepend($template);
    
    if( !$cart.hasClass('expanded')){
      $cart.one('transitionend webkitTransitionEnd oTransitionEnd', function(){
        $template.removeClass('toggling');
      });
      $cart.addClass('expanded');
    } else {
      setTimeout( function(){
        $template.removeClass('toggling');
      }, 1); 
    }
    
    updateTotals();
    
    console.log($template);
  });
  
  $('[data-cart]').on('click', '[data-cart-remove]', function(e) {
    e.preventDefault();
    e.stopPropagation();
    
    var $button = $(this);
    var $cartItem = $(this).closest('[data-cart-item]');
    $cartItem.addClass('removing');

    $cartItem.one('transitionend webkitTransitionEnd oTransitionEnd', function(){
      $cartItem.remove();
      updateTotals();
    });
    
    $cartItem.addClass('toggling');
  });
});