const swalStyled = Swal.mixin({
  showConfirmButton: false,
  showCloseButton: true,
  closeButtonHtml: '<i class="icon-close"></i>',
  scrollbarPadding: false,
  timer: 3000,
});
const swalRemoveWarn = Swal.mixin({
  showConfirmButton: true,
  showCancelButton: true,
  showCloseButton: true,
  closeButtonHtml: '<i class="icon-close"></i>',
  scrollbarPadding: false,
  reverseButtons: true,
  confirmButtonText: '確定',
  cancelButtonText: '取消',
  customClass: {
    popup: 'popup-medium no-icon'
  },
});
function pdRemove(arg) {
  swalRemoveWarn.fire({
    title: '您確定要移除此商品嗎？',
  }).then(function(result) {
    if ( result.value ) {
      if ( arg === 'cart' ) {
        $('.cart-overlay').addClass('active').trigger('overlayShown');
      } else {
        swalStyled.fire({
          title: '商品已移除',
          icon: 'success',
          customClass: {
            popup: 'popup-small',
          }
        });
      }
    }
  });
}
function calcMenuWrapperPaddingTop(flag){
  let $headerH;
  if(flag=="noSpotlight"){
    $headerH=$(".header-main").height();
  }
  else{
    $headerH=$("header").height();
  }
  $(".menu-wrapper").css("padding-top",$headerH);
}
function calcMainPaddingTop(arg){
  let $spotlightH=arg==0?0:$(".spotlight").height();
  $("main").css("padding-top",$spotlightH);
}
function aosInit(){
    AOS.init({
        duration: 500,
        offset: 10,
        mirror: true,
    });
}
function imgFill() {
    $('.imgFill').imgLiquid();
    $('.imgFill').each(function () {
    let imgUrl;
    const $this = $(this),
            $picture = $this.find('picture'),
            query = $this.data('query');
    const ww = window.innerWidth, wh = window.innerHeight;
    if ($picture.length) {
        const sourceLength = $picture.find('source').length;
        let sourceArry = [];
        $picture.find('source').each(function() {
        const srcset = $(this).attr('srcset');
        const node = $(this).attr('media').replace(/\(|\)| /g, '');
        const minmax = node.split(':')[0];
        const breakpoint = node.split(':')[1];
        sourceArry.push({
            srcset: srcset,
            minmax: minmax,
            breakpoint: breakpoint
        });
        });
        if ( query === 'size' ) {
        sourceArry.forEach(function(img) {
            if ( img.minmax === 'min-width' && ww >= parseFloat(img.breakpoint) ) {
            imgUrl = img.srcset;
            } else if ( img.minmax === 'max-width' && ww <= parseFloat(img.breakpoint) ) {
            imgUrl = img.srcset;
            }
        });
        } else if ( query === 'orientation' ) {
        sourceArry.forEach(function(img) {
            if ( img.breakpoint === 'landscape' && ww/wh > 1 ) {
            imgUrl = img.srcset;
            } else if ( img.breakpoint === 'portrait' && ww/wh <= 1 ) {
            imgUrl = img.srcset;
            }
        });
        }
        $this.css('background-image', 'url("' + imgUrl + '")');
    }
    });
}