
$( document ).ready(function() {
    $( ".list-show-sublist" ).on( "mouseenter", function() {
        $( ".desktop-category-menu" ).each(function() {
            $( this ).addClass( "hidden" );
        });
        $( ".list-show-sublist.active" ).next('div.toggle-btn').toggleClass( "hidden" );
        $( ".list-show-sublist.active" ).removeClass('active');
        $(this).toggleClass('active');
        $(this).next('div.toggle-btn').toggleClass( "hidden" );
    } );
    $( ".chekbox-box-custom" ).on( "click", function() {
        if (!$(this).hasClass("chekbox-box-custom-active")) {
            $(".chekbox-box-custom-active").removeClass('chekbox-box-custom-active');
            $(this).addClass('chekbox-box-custom-active');
          }
    } );

    /// navbar hover
    $( ".hover-menu-item" ).on( "mouseenter", function(e) {
        e.preventDefault();
        if($(this).hasClass('active')) {
            let item = $(this).attr('data-hoverItem');
            $(this).removeClass('active');
            $(`.${item}`).addClass('hidden');
        } else {
            let item = $(this).attr('data-hoverItem');
            let activeitem = $('.hover-menu-item.active').attr('data-hoverItem');

            $(`.${activeitem}`).addClass('hidden');
            $('.hover-menu-item.active').removeClass('active');

            $(this).addClass('active');
            $(`.${item}`).removeClass('hidden');
        }
    } );

    $('.menu-item-main').on( "mouseleave", function(e) {
        $( ".hover-menu-item.active" ).removeClass('active');
        $(this).addClass('hidden');
    } );

    // login btn
    $( ".login-btn-dropdown" ).on( "click", function(e) {
        e.preventDefault();
        
        $(this).toggleClass('active');
        $( ".login-btn-dropdown-main" ).toggleClass('hidden');
    } );

    // language-btn
    $( ".language-btn,.language-btn-modal" ).on( "click", function(e) {
        e.preventDefault();
        
        $('.language-btn').toggleClass('active');
        $( ".language-select-main" ).toggleClass('hidden');
    } );

    // info-btn
    $( ".info-dropdown-btn" ).on( "click", function(e) {
        e.preventDefault();
        
        $(this).toggleClass('active');
        $( ".info-dropdown-main" ).toggleClass('hidden');
    } );

    // button-toggle-checked
    $( ".button-toggle-checked" ).on( "click", function(e) {
        e.preventDefault();
        
        $(this).toggleClass('active');
        $(this).children(".btn-toggle-active" ).toggleClass('hidden');
        $(this).children(".btn-toggle-inactive" ).toggleClass('hidden');
    } );

    // button-toggle-checked2
    $( ".button-toggle-checked2" ).on( "click", function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            $(this).closest(".button-toggle-checked-main").find('.button-toggle-checked2.active').children(".btn-toggle-active" ).toggleClass('hidden')
            $(this).closest(".button-toggle-checked-main").find('.button-toggle-checked2.active').children(".btn-toggle-inactive" ).toggleClass('hidden')
            $(this).closest(".button-toggle-checked-main").find('.button-toggle-checked2.active').toggleClass('active');
            $(this).toggleClass('active');
            $(this).children(".btn-toggle-active" ).toggleClass('hidden');
            $(this).children(".btn-toggle-inactive" ).toggleClass('hidden');
        }
    } );

    // button-toggle-checked3
    $( ".button-toggle-checked3" ).on( "click", function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            let text_last = $(this).closest('.button-toggle-checked-main').find('.button-toggle-checked3.active').attr('data-tab');
            $(this).closest('.button-toggle-checked-main').find('.button-toggle-checked3.active').children(".btn-toggle-active" ).toggleClass('hidden');
            $(this).closest('.button-toggle-checked-main').find('.button-toggle-checked3.active').children(".btn-toggle-inactive" ).toggleClass('hidden');
            $(`.${text_last}`).addClass('hidden');

            $(this).closest(".button-toggle-checked-main").find('.button-toggle-checked3.active').toggleClass('active');
            $(this).toggleClass('active');
            $(this).children(".btn-toggle-active" ).toggleClass('hidden');
            $(this).children(".btn-toggle-inactive" ).toggleClass('hidden');

            let text = $(this).attr('data-tab');
            $(`.${text}`).toggleClass('hidden');
        }
    } );

    // btn-choose-hours
    $( ".btn-choose-hours" ).on( "click", function(e) {
        e.preventDefault();
        
        $('.active-hours').removeClass('active-hours');
        $(this).addClass('active-hours');
        let text = $(this).text();
        $('.heading-choose-time span.btn-choose-hours').text(text);
        $('.choose-date-calendar-results-main p').text();

        $('.choose-date-calendar-results-main p').append('<span class="btn-choose-date-end">'+text+'</span>');
    } );

    // checkbox-btn-toggle
    $(document).on("change",".checkbox-btn-toggle",function(e) {
        $(this).toggleClass('active-checkbox');
        $(this).closest('.checkbox-btn-toggle-main').toggleClass('checkbox-btn-toggle-main-active');
    });

    $(document).on("DOMSubtreeModified",".select-selected",function(e) {
        let title = $('.select-selected').text().trim().toLowerCase();
        setTimeout(() => {
            $( ".custom-select-js select option" ).each(function( index ) {
                if($(this).text().trim().toLowerCase() == title) {
                    let attr = $(this).attr('value');
                    window.location.href = attr;
                }
            }); 
        }, "1000");
    });

    $(document).on("click",".chooe-date-calendar-main button",function(e) {
        if(!$(this).hasClass('active')) {
            let dateTime = $(this).attr('data-time');

            $('.choose-date-calendar-results-main').addClass('display-mobile');
            $('.choose-date-calendar-results-main p').html('<span class="btn-choose-date-start">'+dateTime+'</span>');

            $('.chooe-date-calendar-main button.active').removeClass('active');
            $(this).toggleClass('active');

        }
    });

    $(document).on("click",".choose-date-calendar-results-main button",function(e) {
        let next = parseInt($('.choose-date-calendar-results-main button').attr('data-next'));
        let nextPlus = next + 1;
        if(next == 1) {
            $('.chooe-date-calendar-main').addClass('hidden-mobile');
            $('.choose-date-calendar-time-main').removeClass('hidden-mobile');
            $('.choose-date-calendar-results-main button span').text('Kontaktinė informacija');
        } else if(next == 2) {
            $('.choose-date-calendar-time-main').addClass('hidden-mobile');
            $('.choose-date-calendar-last-main').removeClass('hidden-mobile');
            $('.choose-date-calendar-results-main').addClass('hidden');
            $('.choose-date-calendar-results-main').removeClass('display-mobile');
        }
        $('.choose-date-calendar-results-main button').attr('data-next',nextPlus);

    });
    // toggle-btns-state
    $( ".toggle-btns-state button" ).on( "click", function(e) {
        e.preventDefault();
        
        if(!$(this).hasClass('active')) {
            $(this).closest('.toggle-btns-state').find('.active').removeClass('active');
            $(this).addClass('active');
        }
    } );

    // toggle-btns-state


    $(document).on("mouseenter", ".star-rating-choose button", function() {
        let count = parseInt($(this).attr('data-count'));

        for (let i = 1; i < count+1; i++) {
            $(`button[data-count="${i}"]`).find('img').attr('src','http://localhost/pitshop/images/icon-star-active.svg');
        }
        for (let i = count+1; i < 6; i++) {
            $(`button[data-count="${i}"]`).find('img').attr('src','http://localhost/pitshop/images/icon-star-inactive.svg');
        }
    });
    
    $(document).on("mouseleave", ".star-rating-choose button", function() {
        // hover ends code here
    });

    // info-box-tooltip
    $( ".info-box-tooltip" ).on( "click", function(e) {
        e.preventDefault();
        $(this).toggleClass('info-box-tooltip-active');
        $(this).find( ".info-box-tooltip-main" ).toggleClass('hidden');
    } );

    // info-box-tooltip
    $( ".info-box-tooltip-close" ).on( "click", function(e) {
        e.preventDefault();
        $(this).parent('.info-box-tooltip').toggleClass('info-box-tooltip-active');
        $(this).parent('.info-box-tooltip').find( ".info-box-tooltip-main" ).toggleClass('hidden');
    } );

    // header-cart-btn
    $( ".header-cart-btn" ).on( "click", function(e) {
        e.preventDefault();
        $('.header-cart-btn-main').toggleClass('hidden');
    } );

    // show-more-text-btn
    $( ".show-more-text-btn" ).on( "click", function(e) {
        e.preventDefault();
        $(this).closest('.show-more-text-main').find('p').toggleClass('active');
        $(this).closest('.show-more-text-main').find('button').toggleClass('hidden');
    } );

    // game-btn-selected
    $( ".game-btn-selected" ).on( "click", function(e) {
        e.preventDefault();
        $('.game-box-main').toggleClass('game-box-main-active');
        $('.game-box-main').toggleClass('hidden-mobile');
        $('.game-box-main-second').toggleClass('hidden-mobile');
        $( ".game-btn-selected" ).each(function( index ) {
            if(!$(this).hasClass('chekbox-box-custom-active')) {
                $(this).closest('.col-span-12').toggleClass('hidden-mobile');
            }
        });
    } );

    // categories show
    $( ".btn-show-categories-menu" ).on( "mouseenter", function(e) {
        e.preventDefault();
        if($('.active-category-menu-main').length) {
            $('.active-category-menu').removeClass('active-category-menu');
            $('.active-category-menu-main').addClass('hidden');
            $('.active-category-menu-main').removeClass('active-category-menu-main');
        }
        $(this).addClass('active-category-menu');

        let text = $(this).attr('data-menu');
        
        $(`.${text}`).toggleClass('hidden').addClass('active-category-menu-main');
    } );

    $(document).on("mouseleave", ".active-category-menu-main", function (e) {
        $(this).addClass('hidden').removeClass('active-category-menu-main');
        $( ".list-show-sublist.active" ).next('div.toggle-btn').toggleClass( "hidden" );
        $( ".list-show-sublist.active" ).removeClass('active');
    } );

    // left menu
    $( ".left-menu-list-main button" ).on( "click", function(e) {
        e.preventDefault();
        
        if(!$(this).parent('li').hasClass('active')) {

            let last = $( ".left-menu-list-main li.active" ).children('button').attr('data-item');
            $(`.${last}`).addClass('hidden');
            $(`.${last}-second`).addClass('hidden');

            $( ".left-menu-list-main li.active" ).removeClass('active');

            $(this).parent('li').addClass('active');
            let item = $(this).attr('data-item');
            $(`.${item}`).removeClass('hidden');
            $(`.${item}-second`).removeClass('hidden');
        }
    } );

    // button-toggle-checked-main4
    $( ".button-toggle-checked-main4 button" ).on( "click", function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active-mobile')) {
            $( ".button-toggle-checked-main4 button.active" ).removeClass(['active-mobile', 'active']);
            $(this).toggleClass(['active-mobile', 'active']);
            $('.offer-main').toggleClass('hidden-mobile');
            $('.button-toggle-checked-main4').toggleClass('hidden-mobile');
            $('.offer-main-title').toggleClass('hidden-mobile');
        }
    } );
    
    // accordion-custom-main-title show
    $( ".request-modal-btn" ).on( "click", function(e) {
        e.preventDefault();
        $('.request-modal-main').toggleClass('hidden');
    } );

    // accordion-custom-main-title show
    $( ".accordion-custom-main-title" ).on( "click", function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent('.accordion-custom-main').children('.accordion-custom-main-body').toggleClass('hidden');
    } );

    // accordion-custom-main-body-more-btn show
    $( ".accordion-custom-main-body-more-btn" ).on( "click", function(e) {
        e.preventDefault();
        
        $(this).toggleClass('hidden');
        $(this).parent('.accordion-custom-main-body').children('.accordion-custom-main-body-more-main').toggleClass('hidden');
    } );

    // product tabs
    $( "button.custom-tabs-main-title-btn" ).on( "click", function(e) {
        $(this).toggleClass('active');
        if(!$(this).hasClass('custom-tabs-main-title-active')) {
            $('.custom-tabs-main-title-active').removeClass('custom-tabs-main-title-active');
            $('.custom-tabs-main-body-active').removeClass('custom-tabs-main-body-active');

            $(this).addClass('custom-tabs-main-title-active');
            let attr = $(this).attr('data-tab');
            $(`.${attr}`).addClass('custom-tabs-main-body-active');
        }

        let attr_html2 = $(this).attr('data-tab');
        let attr_html = $(`.${attr_html2}`).html();
        if(!$(`.${attr_html2}-active`).length) {
            $(this).after(`<div class="${attr_html2}-active border-b-[1px] border-black w-full block lg:hidden">${attr_html}</div>`);
        } else {
            $(`.${attr_html2}-active`).remove();
        }
    } );

    // product tabs
    $( ".product-change-photo button" ).on( "click", function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active-product-button')) {
            let attr = $(this).attr('data-img');
            $('.active-product-button').removeClass('active-product-button');

            $(this).addClass('active-product-button');
            $('.main-product-photo').css('background', `url('${attr}')`);
        }
    } );

    // product tabs
    $( ".choose-brand-main button" ).on( "click", function(e) {
        e.preventDefault();
        $(this).toggleClass('active');  
    } );

    // choose-category-btn
    $( ".choose-category-btn" ).change(function() {
        $(this).toggleClass('active');  
    } );

    // select-all-items
    $( ".select-all-items" ).on( "click", function() {
        $( '.select-all-items-main' ).find('label').each(function( index ) {
            $(this).find('input').attr('checked', true);
        });
    } );
    
    // select-all-items2
    $( ".select-all-items2" ).on( "click", function() {
        $( '.select-all-items-main2' ).find('label').each(function( index ) {
            $(this).find('input').attr('checked', true);
        });
    } );

    // deselect-all-items2
    $( ".deselect-all-items2" ).on( "click", function() {
        $( '.select-all-items-main2' ).find('label').each(function( index ) {
            $(this).find('input').attr('checked', false);
        });
    } );

    // collapse-all-btn
    $( ".collapse-all-btn" ).on( "click", function() {
        $( '.select-all-items-main2' ).find('.collapsable-title').each(function( index ) {
        let attr = $(this).attr('data-select');

            // For some browsers, `attr` is undefined; for others,
            // `attr` is false.  Check for both.
            if (typeof attr !== 'undefined' && attr !== false) {
                $(`[data-choose="${attr}"]`).addClass('hidden');
            }
        });
    } );

    // choose-brand-logo button
    $( ".choose-brand-logo button" ).on( "click", function() {
        $( this ).toggleClass('active');
    } );

    // show-more-btn
    $( ".show-more-btn" ).on( "click", function() {
        $( this ).toggleClass('hidden');
        $( '.show-more-btn-main' ).toggleClass('hidden');
    } );

    // collapse-all-btn
    $( ".collapsable-title" ).change(function() {
        let attr = $(this).attr('data-select');
            // For some browsers, `attr` is undefined; for others,
            // `attr` is false.  Check for both.
            if (typeof attr !== 'undefined' && attr !== false) {
                let attr2 = $(`[data-choose="${attr}"]`).attr('data-select');
                $(`[data-choose="${attr}"]`).toggleClass('hidden');
                if (typeof attr2 !== 'undefined' && attr2 !== false) {
                    $(`[data-choose="${attr2}"]`).toggleClass('hidden');
                }
                
            }
    } );

    // prev
    $( ".product-change-photo-prev" ).on( "click", function(e) {
        e.preventDefault();
        let count = $('.product-change-photo button').length;
        let current = parseInt($('.active-product-button').attr('data-position'));

        $('.active-product-button').removeClass('active-product-button');

        if(current - 1 == 0){
            $(`.product-button-${count}`).addClass('active-product-button');
            let attr = $(`.product-button-${count}`).attr('data-img');
            $('.main-product-photo').css('background', `url('${attr}')`);
        } else {
            $(`.product-button-${current - 1}`).addClass('active-product-button');
            let attr = $(`.product-button-${current - 1}`).attr('data-img');
            $('.main-product-photo').css('background', `url('${attr}')`);
        }
    } );

    // login-modal-btn
    $( ".login-modal-btn" ).on( "click", function() {
        $( '.login-modal-main' ).toggleClass('hidden');
    } );

    // register-modal-btn
    $( ".register-modal-btn" ).on( "click", function() {
        $( '.register-modal-main' ).toggleClass('hidden');
    } );

    // forgot-password-modal-btn
    $( ".forgot-password-modal-btn" ).on( "click", function() {
        $( '.login-modal-main' ).toggleClass('hidden');
        $( '.forgot-password-modal-main' ).toggleClass('hidden');
    } );

    // forgot-password-modal-btn
    $( ".forgot-modal-btn-close" ).on( "click", function() {
        $( '.forgot-password-modal-main' ).toggleClass('hidden');
    } );

    //  login-register-btn-modal
    $( ".login-register-btn-modal" ).on( "click", function() {
        $( '.login-modal-main' ).toggleClass('hidden');
        $( '.register-modal-main' ).toggleClass('hidden');
    } );

    //  forgot-register-btn-modal
    $( ".forgot-register-btn-modal" ).on( "click", function() {
        $( '.forgot-password-modal-main' ).toggleClass('hidden');
        $( '.register-modal-main' ).toggleClass('hidden');
    } );

    //  create-modal-submit-btn
    $( ".create-modal-submit-btn" ).on( "click", function() {
        $( '.success-modal-main' ).toggleClass('hidden');
        $( '.register-modal-main' ).toggleClass('hidden');
    } );

    //  create-modal-submit-btn2
    $( ".create-modal-submit-btn2" ).on( "click", function() {
        $( '.success-modal-main2' ).toggleClass('hidden');
        $( '.register-modal-main' ).toggleClass('hidden');
    } );

    //  success-modal-submit-btn
    $( ".success-modal-submit-btn" ).on( "click", function() {
        $( '.success-modal-main' ).toggleClass('hidden');
    } );

    //   toggle-active-main
    $( ".toggle-active-main button" ).on( "click", function(e) {
        e.preventDefault();
        $(this).closest('.toggle-active-main').find('button.active').removeClass('active');
        $(this).toggleClass('active');
    } );

    //  toggle-checkout-title
    $(document).on("change",".toggle-checkout-title",function(e) {

        $('.toggle-checkout-title-activeBTN').removeClass('toggle-checkout-title-activeBTN');
        $(this).addClass('toggle-checkout-title-activeBTN');
        
        let attr = $(this).attr('data-id');
        
        $( ".toggle-checkout-title-active" ).each(function() {
            $( this ).removeClass( "toggle-checkout-title-active" );

            let attr2 = $(this).attr('data-id');
            $(`.${attr2}`).addClass('hidden');
        });
        
          if(!$( `.${attr}` ).hasClass('toggle-checkout-title-active')) {
            $('.toggle-checkout-title-active').removeClass('toggle-checkout-title-active');
        }
        $( `.${attr}` ).toggleClass('toggle-checkout-title-active');
    } );

    //  toggle-account-title-main
    $( ".toggle-account-title-main" ).on( "click", function() {

        $( '.account-title-main' ).toggleClass('active');
        $( '.left-menu-list-main-mobile' ).toggleClass('hidden lg:block');
        $('.breadcrumbs-control-main').text('');
        if($('.account-benefits-mobile-active').length) {
            $('.account-benefits-mobile-active').removeClass('account-benefits-mobile-active');
        }
        let attr = $('.left-menu-list-main-mobile').find('li.active').find('button').attr('data-item');
        $(`.${attr}`).addClass('hidden');
        $(`.${attr}-second`).addClass('hidden');
        
    } );

        //  toggle-account-title-main2
        $( ".toggle-account-title-main2" ).on( "click", function() {

            if($('.account-main-active').hasClass('lg:block')) {
                $('.account-main-active').removeClass('lg:block');
            }
            let attr = $(this).attr('data-item');
            if(attr == "account-main" ) {
                if($('.account-main').hasClass('hidden')) {
                    $(`.${attr}`).toggleClass('hidden');
                }
            }

            $( '.account-title-main' ).toggleClass('active');
            $( '.left-menu-list-main-mobile' ).toggleClass('hidden lg:block');
            let text = $(this).text();
            $('.breadcrumbs-control-main').text('');
            $('.breadcrumbs-control-main').append( `<div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div><button class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">${text}</button>`);
            
            if($(this).attr('data-item') == 'subscriptions-main' || $(this).attr('data-item') == 'loyalty-main' || $(this).attr('data-item') == 'loyalty-main2' || $(this).attr('data-item') == 'liked-items-main' || $(this).attr('data-item') == 'ordered-items-main' || $(this).attr('data-item') == 'bought-items-main') {
                $('.account-benefits-mobile').addClass('account-benefits-mobile-active');
            }
        } );

    //  success-modal-submit-btn
    $( ".menu-click-open-btn" ).on( "click", function() {
        if($(this).closest( '.menu-click-open' ).find('div').hasClass('hidden')) {
            $(this).closest( '.menu-click-open' ).find('img').attr('src','http://localhost/pitshop/images/icon-menu-close.svg');
            
        } else {
            $(this).closest( '.menu-click-open' ).find('img').attr('src','http://localhost/pitshop/images/icon-plus-white.svg');
        }
        $(this).closest( '.menu-click-open' ).find('div').toggleClass('hidden');
    } );

    // show-password-btn
    $( ".show-password-btn" ).on( "click", function() {
        let attr = $( this ).closest('.relative').find('input').attr('type');

        if(attr =='password') {
            $( this ).closest('.relative').find('input').attr('type','text');
        } else {
            $( this ).closest('.relative').find('input').attr('type','password');
        }
    } );

    //  success-modal-submit-btn
    $( ".success-modal-submit-btn2" ).on( "click", function() {
        $( '.success-modal-main2' ).toggleClass('hidden');
    } );

    // forgot-password-modal-btn
    $( ".submit-forgot-password-btn" ).on( "click", function() {
        $( '.submit-forgot-password-main' ).toggleClass('hidden');
        $( '.forgot-password-modal-main' ).toggleClass('hidden');
    } );

    // forgot-password-modal-btn
    $( ".submit-forgot-password-btn-close" ).on( "click", function() {
        $( '.submit-forgot-password-main' ).toggleClass('hidden');
    } );

    // forgot-password-modal-btn
    $( ".btn-filters-toggle" ).on( "click", function() {
        $( '.toggle-filters-select' ).toggleClass('hidden');
        $(this).find( '.toggle-image' ).toggleClass('invisible');
    } );
    
    // category-mobile-menu-control back
    $( ".category-mobile-menu-control button" ).on( "click", function() {
        $(this).closest('li').closest('ul').closest('.data-menu').toggleClass('hidden');
        $('.data-menu-active').addClass('hidden').removeClass('data-menu-active');
        $( '.category-mobile-menu-control' ).addClass('hidden');
        $( '.category-mobile-menu-main' ).toggleClass('hidden');
    } );

    // category-mobile-menu-main-list
    $( ".category-mobile-menu-main-list button, .data-menu-category-btn" ).on( "click", function() {

        if($(this).attr('data-menu')) {
            $( '.category-mobile-menu-main' ).addClass('hidden');
            $( '.category-mobile-menu-control' ).removeClass('hidden');

            $('.data-menu-active').addClass('hidden').removeClass('data-menu-active');

            let data = $(this).attr('data-menu');
            $(`.data-menu-${data}`).removeClass('hidden').addClass('data-menu-active');

            let name = $(this).text();
            $('.category-mobile-menu-control p').text(name);

            $('.category-mobile-menu-control button').attr('data-back');
        }
    } );

    // forgot-password-modal-btn
    $( ".back-to-login-btn" ).on( "click", function() {
        $( '.login-modal-main' ).toggleClass('hidden');
        $( '.forgot-password-modal-main' ).toggleClass('hidden');
    } );

    // next
    $( ".product-change-photo-next" ).on( "click", function(e) {
        e.preventDefault();
        let count = $('.product-change-photo button').length;
        let current = parseInt($('.active-product-button').attr('data-position'));

        $('.active-product-button').removeClass('active-product-button');

        if((current + 1) > count){
            $(`.product-button-1`).addClass('active-product-button');
            let attr = $(`.product-button-1`).attr('data-img');
            $('.main-product-photo').css('background', `url('${attr}')`);
        } else {
            console.log('a12sdsa');
            $(`.product-button-${current + 1}`).addClass('active-product-button');
            let attr = $(`.product-button-${current + 1}`).attr('data-img');
            $('.main-product-photo').css('background', `url('${attr}')`);
        }
    } );

    // input count
    $( ".input-items-main-decrease" ).on( "click", function(e) {
        e.preventDefault();
        let number = parseInt($(this).closest('.input-items-main').find('input').val())
        if(number - 1 !== 0 ) {
            $(this).closest('.input-items-main').find('input').attr('value', `${number-1}`);
        }
    } );
    $( ".input-items-main-increase" ).on( "click", function(e) {
        e.preventDefault();
        let number = parseInt($(this).closest('.input-items-main').find('input').val());
        
        $(this).closest('.input-items-main').find('input').attr('value', `${number+1}`);
    } );

    // coupon btns
    $( ".coupon-select-main button" ).on( "click", function(e) {
        e.preventDefault();
        if(!$(this).hasClass('coupon-select-main-active')) {
            $('.coupon-select-main-active').removeClass('coupon-select-main-active');
            $(this).addClass('coupon-select-main-active');
        }
    } );
});

/// price range
const rangevalue =  
    document.querySelector(".slider-container .price-slider"); 
const rangeInputvalue =  
    document.querySelectorAll(".range-input input"); 
  
// Set the price gap 
let priceGap = 1; 
  
// Adding event listners to price input elements 
const priceInputvalue =  
    document.querySelectorAll(".price-input input"); 
for (let i = 0; i < priceInputvalue.length; i++) { 
    priceInputvalue[i].addEventListener("input", e => { 
  
        // Parse min and max values of the range input 
        let minp = parseInt(priceInputvalue[0].value); 
        let maxp = parseInt(priceInputvalue[1].value); 
        let diff = maxp - minp 
  
        if (minp < 0) { 
            alert("minimum price cannot be less than 0"); 
            priceInputvalue[0].value = 0; 
            minp = 0; 
        } 
  
        // Validate the input values 
        if (maxp > 10000) { 
            alert("maximum price cannot be greater than 10000"); 
            priceInputvalue[1].value = 10000; 
            maxp = 10000; 
        } 
  
        if (minp > maxp - priceGap) { 
            priceInputvalue[0].value = maxp - priceGap; 
            minp = maxp - priceGap; 
  
            if (minp < 0) { 
                priceInputvalue[0].value = 0; 
                minp = 0; 
            } 
        } 
  
        // Check if the price gap is met  
        // and max price is within the range 
        if (diff >= priceGap && maxp <= rangeInputvalue[1].max) { 
            if (e.target.className === "min-input") { 
                rangeInputvalue[0].value = minp; 
                let value1 = rangeInputvalue[0].max; 
                rangevalue.style.left = `${(minp / value1) * 100}%`; 
            } 
            else { 
                rangeInputvalue[1].value = maxp; 
                let value2 = rangeInputvalue[1].max; 
                rangevalue.style.right =  
                    `${100 - (maxp / value2) * 100}%`; 
            } 
        } 
    }); 
  
    // Add event listeners to range input elements 
    for (let i = 0; i < rangeInputvalue.length; i++) { 
        rangeInputvalue[i].addEventListener("input", e => { 
            let minVal =  
                parseInt(rangeInputvalue[0].value); 
            let maxVal =  
                parseInt(rangeInputvalue[1].value); 
  
            let diff = maxVal - minVal 
              
            // Check if the price gap is exceeded 
            if (diff < priceGap) { 
              
                // Check if the input is the min range input 
                if (e.target.className === "min-range") { 
                    rangeInputvalue[0].value = maxVal - priceGap; 
                } 
                else { 
                    rangeInputvalue[1].value = minVal + priceGap; 
                } 
            } 
            else { 
              
                // Update price inputs and range progress 
                priceInputvalue[0].value = minVal; 
                priceInputvalue[1].value = maxVal; 
                rangevalue.style.left = 
                    `${(minVal / rangeInputvalue[0].max) * 100}%`; 
                rangevalue.style.right = 
                    `${100 - (maxVal / rangeInputvalue[1].max) * 100}%`; 
            } 
        }); 
    } 
}

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select-js");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);