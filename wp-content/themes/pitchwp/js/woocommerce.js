
$j(document).ready(function() {
	"use strict";
	
	initAddToCartPlusMinus();
	
	var priceSlider = $j('.price_slider_wrapper');
	if(priceSlider.length) {
		priceSlider.parents('.widget').addClass('widget_price_filter');
	}
	
	initSelect2();
    initAddToCartProductList();
	qodefInitSingleProductLightbox()
});

function initSelect2() {
	var item1 = $j('.woocommerce-ordering .orderby');
	if (item1.length) {
		item1.select2({
			minimumResultsForSearch: -1
		});
	}
	
	var item2 = $j('#calc_shipping_country');
	if (item2.length) {
		item2.select2({
			minimumResultsForSearch: -1
		});
	}
	
	var item3 = $j('#calc_shipping_state');
	if (item3.length) {
		item3.select2({
			minimumResultsForSearch: -1
		});
	}
	
	var item4 = $j('#dropdown_product_cat');
	if (item4.length) {
		item4.select2({
			minimumResultsForSearch: -1
		});
	}
	
	var item5 = $j('.woocommerce-account .country_select');
	if (item5.length) {
		item5.select2();
	}
}

function initAddToCartPlusMinus(){
    "use strict";
	
	$j(document).on('click', '.quantity .plus, .quantity .minus', function (e) {
		e.stopPropagation();
		
		var button = $j(this),
			inputField = button.siblings('.qty'),
			step = parseFloat(inputField.attr('step')),
			max = parseFloat(inputField.attr('max')),
			minus = false,
			inputValue = parseFloat(inputField.val()),
			newInputValue;
		
		if (button.hasClass('minus')) {
			minus = true;
		}
		
		if (minus) {
			newInputValue = inputValue - step;
			if (newInputValue >= 1) {
				inputField.val(newInputValue);
			} else {
				inputField.val(0);
			}
		} else {
			newInputValue = inputValue + step;
			if (max === undefined) {
				inputField.val(newInputValue);
			} else {
				if (newInputValue >= max) {
					inputField.val(max);
				} else {
					inputField.val(newInputValue);
				}
			}
		}
		
		inputField.trigger( 'change' );
	});
}

function initAddToCartProductList() {
    "use strict";

    $j(document).on( 'click', '.woocommerce ul.products.type1 li.product .woocommerce_single_product_add_to_cart_holder .add-to-cart-button', function() {
        $j(this).siblings('a.add-to-cart-button').addClass('added');
        $j(this).parent().addClass('added');
    });
}

/*
 ** Init Product Single Pretty Photo attributes
 */
function qodefInitSingleProductLightbox() {
	var item = $j('.woocommerce.single-product .images .woocommerce-product-gallery__image');

	if(item.length) {
		item.children('a').attr('data-rel', 'prettyPhoto[woo_single_pretty_photo]');

		if (typeof prettyPhoto === "function") {
			prettyPhoto();
		}
	}
}
