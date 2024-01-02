@include('Layoutspage.product.layout')

<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        {{-- <p>Please select at least 2 colors before adding to the basket.</p> --}}
        <h3 class="opps-heading">
            Oops - your sample box is not full!</h3>
        <p class="opps-para">
            There is still room for more products in your sample box - we would like to remind yo<br>u that there is
            still room to add up to 10 products to your box.<br><br><br>

            We want your sample box to be absolutely perfect and tailored to your preferences. You have the option to
            add more products to your sample box, or if you prefer, our team can also put together an inspiring
            combination based on your previous choices.</p>
        <div class="modal-buttons">
            <button class="modal-btn-close" onclick="closeModal()">Close</button>
            <button class="modal-btn-submit" onclick="submitForm()">Submit</button>
        </div>
    </div>
</div>



<div class="wp-block-bowe-blocks-tabs bowe-tabs active-tab-1 styled"
    style="margin-bottom:var(--wp--preset--spacing--3);--tabs-align:center">
    <ul class="bowe-tabs-menu styled  ">
        <div class="styled-inner">
            <li class="active-tab"><button class="button">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">All </font>
                    </font>
                </button></li>
            <li class="last"><button class="button">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Second </font>
                    </font>
                </button></li>
            <li class="last"><button class="button">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Third </font>
                    </font>
                </button></li>
            <span class="styled-bg"
                style="translate: none; rotate: none; scale: none; transform: translate(7px, 0px); width: 155px;"></span>
        </div>
    </ul>
    <div>

        <div class="wp-block-bowe-blocks-tab bowe-tabs-tab">
            <div data-tracking="{&quot;currency&quot;:{&quot;currency_symbol&quot;:&quot;DKK&quot;},&quot;items&quot;:[{&quot;product_id&quot;:773,&quot;name&quot;:&quot;Klassisk Eg (Sort Filt) | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:770,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Natur | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:767,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Brun | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:766,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Gr\u00e5 | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:765,&quot;name&quot;:&quot;R\u00f8get Eg | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:764,&quot;name&quot;:&quot;Valn\u00f8d | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:763,&quot;name&quot;:&quot;Oxideret Gr\u00e5 | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:762,&quot;name&quot;:&quot;Oxideret Kobber | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:761,&quot;name&quot;:&quot;Oxideret Bl\u00e5 | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:759,&quot;name&quot;:&quot;Oxideret Hvid | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:758,&quot;name&quot;:&quot;Charcoal | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:756,&quot;name&quot;:&quot;Sort Ask | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:755,&quot;name&quot;:&quot;Clay | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:754,&quot;name&quot;:&quot;Cloud | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:752,&quot;name&quot;:&quot;Moss | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:751,&quot;name&quot;:&quot;Stone | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:750,&quot;name&quot;:&quot;Snow | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:692,&quot;name&quot;:&quot;Klassisk Eg (Sort Filt, Sort Kerne) | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:686,&quot;name&quot;:&quot;Klassisk Eg (Gr\u00e5 Filt) | 240 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35}]}"
                class="bowe-color-samples ">

                <div class="samples">

                    <h3 class="wp-block-heading has-text-align-center has-headline-2-font-size m-b-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Order color samples </font>
                        </font>
                    </h3>

                    <div class="samples-inner has-content">

                        <img src="import/assets/img/imageOne.png" alt="product">
                        <br />
                    </div>

                </div>

                <div class="colors">
                    <div class="colors-top">

                        <p class="has-headline-3-font-size m-b-0" style="font-weight: 500;">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Color samples </font>
                            </font>
                        </p>

                        <span class="colors-top-selected has-text-3-font-size">
                            <span class="clicked-count">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">1</font>
                                </font>
                            </span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    colors selected </font>
                            </font>
                        </span>
                    </div>

                    <form class="colors-list" style="height: 60px;">


                        @foreach ($products as $product)
                            <input type="checkbox" name="product[]" id="product-{{ $product->id }}"
                                data-price={{ $product->price }} data-image="{{ asset($product->image) }}"
                                style="display:none;">
                            <label data-product-id="{{ $product->id }}" for="product-{{ $product->id }}"
                                class="colors-item">

                                <img decoding="async" width="80" height="80" src="{{ asset($product->image) }}"
                                    sizes="(max-width: 80px) 100vw, 80px">


                                <div class="text">
                                    <p class="colors-item-name has-text-3-font-size">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{ $product->title }} </font>
                                            <font style="vertical-align: inherit;"> </font>
                                        </font>
                                    </p>

                                    <p class="colors-item-price m-b-0 has-text-3-font-size">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">+</font>
                                        </font><span class="woocommerce-Price-amount amount"><bdi><span
                                                    class="wc-price">
                                                    <font style="vertical-align: inherit;"></font>
                                                </span>&nbsp;<font style="vertical-align: inherit;"><span
                                                        class="woocommerce-Price-currencySymbol">
                                                        <font style="vertical-align: inherit;">DKK </font>
                                                    </span><span class="wc-price">
                                                        <font style="vertical-align: inherit;">
                                                            {{ $product->price }} </font>
                                                    </span></font><span class="woocommerce-Price-currencySymbol">
                                                    <font style="vertical-align: inherit;"></font>
                                                </span></bdi></span>
                                    </p>
                                </div>


                                <span class="colors-item-plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#000" class="w-6 h-6 plus">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="#fff" class="w-6 h-6 check">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5">
                                        </path>
                                    </svg>
                                </span>

                            </label>
                        @endforeach
                    </form>

                    <div class="colors-totals">

                        <div class="colors-totals-line total" id="totalPriceContainer">
                            <p class="m-b-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Total</font>
                                </font>
                            </p>
                            <p class="m-b-0"><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="wc-price">
                                        </span>&nbsp;<font style="vertical-align: inherit;"><span
                                                class="woocommerce-Price-currencySymbol">
                                                <font style="vertical-align: inherit;">DKK </font>
                                            </span>
                                            {{-- <span class="wc-price">
                                                <font style="vertical-align: inherit;">0.00</font>
                                            </span> --}}
                                        </font><span class="woocommerce-Price-currencySymbol">
                                            <font style="vertical-align: inherit;"></font>
                                        </span></bdi></span></p>
                        </div>

                        <div class="colors-totals-line shipping">
                            <p class="m-b-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Shipping: 1 – 4 working days </font>
                                </font>
                            </p>
                            <p class="m-b-0 free-shipping has-text-3-font-size">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        free delivery </font>
                                </font>
                            </p>
                        </div>

                        <button type="submit" name="add-to-cart"
                            class="single_add_to_cart_button add-to-cart button alt wp-element-button">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="27.261" height="27.262" viewBox="0 0 27.261 27.262">
                                <defs>
                                    <clipPath id="a">
                                        <path d="M0-682.665H27.261V-655.4H0Z" transform="translate(0 682.665)">
                                        </path>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#a)">
                                    <g transform="translate(5.644 5.644)">
                                        <path d="M0,0H20.818L17.624,11.182H3.195" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5"></path>
                                    </g>
                                    <g transform="translate(10.436 21.618)">
                                        <path
                                            d="M-76.805-38.4a1.6,1.6,0,0,1-1.6,1.6A1.6,1.6,0,0,1-80-38.4,1.6,1.6,0,0,1-78.4-40,1.6,1.6,0,0,1-76.805-38.4Z"
                                            transform="translate(80 40)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5"></path>
                                    </g>
                                    <g transform="translate(18.476 21.618)">
                                        <path
                                            d="M-76.805-38.4a1.6,1.6,0,0,1-1.6,1.6A1.6,1.6,0,0,1-80-38.4,1.6,1.6,0,0,1-78.4-40,1.6,1.6,0,0,1-76.805-38.4Z"
                                            transform="translate(80 40)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5"></path>
                                    </g>
                                    <g transform="translate(8.226 16.826)">
                                        <path d="M-361.621-76.805h-13.442a1.6,1.6,0,0,1-1.429-2.312l.442-.883"
                                            transform="translate(376.663 80)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5"></path>
                                    </g>
                                    <g transform="translate(0.799 2.449)">
                                        <path d="M0,0H3.933L8.04,14.376" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                            stroke-width="1.5"></path>
                                    </g>
                                </g>
                            </svg>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit; color:">
                                    add to Basket </font>
                            </font>
                        </button>
                    </div>

                </div>
            </div>
        </div>



        <div class="wp-block-bowe-blocks-tab bowe-tabs-tab">
            <div data-tracking="{&quot;currency&quot;:{&quot;currency_symbol&quot;:&quot;DKK&quot;},&quot;items&quot;:[{&quot;product_id&quot;:3103,&quot;name&quot;:&quot;Sort Ask | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:3102,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Natur | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:3101,&quot;name&quot;:&quot;R\u00f8get Eg | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:3100,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Gr\u00e5 | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:3099,&quot;name&quot;:&quot;Rustik Egefin\u00e9r Brun | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:3097,&quot;name&quot;:&quot;Klassisk Eg (Sort Filt, Sort Kerne) | 60 \u2013 Farvepr\u00f8ve )&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:745,&quot;name&quot;:&quot;Valn\u00f8d | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35},{&quot;product_id&quot;:717,&quot;name&quot;:&quot;Klassisk Eg (Sort Filt) | 60 \u2013 Farvepr\u00f8ve&quot;,&quot;display_price&quot;:35}]}"
                class="bowe-color-samples ">

                <div class="samples">

                    <h3 class="wp-block-heading has-text-align-center has-headline-2-font-size m-b-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                Order color samples </font>
                        </font>
                    </h3>

                    <div class="samples-inner">

                    </div>


                </div>

            </div>
        </div>
    </div>
</div>




<script>
    (function(w, d, s) {
        if (w._dixa_) return;
        w._dixa_ = {
            invoke: function(m, a) {
                w._dixa_.pendingCalls = w._dixa_.pendingCalls || [];
                w._dixa_.pendingCalls.push([m, a]);
            },
            addListener: function(event, listener) {
                w._dixa_.pendingAddListenerCalls = w._dixa_.pendingAddListenerCalls || [];
                w._dixa_.pendingAddListenerCalls.push([event, listener]);
            },
        };
        s = d.createElement('script');
        s.type = 'text/javascript';
        s.setAttribute('charset', 'utf-8');
        s.async = true;
        s.src = 'https://messenger.dixa.io/bootstrap.js';
        var before = d.getElementsByTagName('script')[0];
        before.parentNode.insertBefore(s, before);
    })(window, document);
    _dixa_.invoke('init', {
        messengerToken: '763ef34ec3034d129feec2a411dbdbe2'
    });
</script>


<script type="text/javascript">
    var _dcq = _dcq || [];
    var _dcs = _dcs || {};
    _dcs.account = '2152411';

    (function() {
        var dc = document.createElement('script');
        dc.type = 'text/javascript';
        dc.async = true;
        dc.src = '//tag.getdrip.com/2152411.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(dc, s);
    })();
</script>
<script>
    function initializeLazyLoading() {
        if ("IntersectionObserver" in window) {
            var lazyElements = [].slice.call(document.querySelectorAll("video.lazy, img.lazy")),
                observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var target = entry.target;
                            if (target.tagName === "VIDEO") {
                                for (var i = 0; i < target.children.length; i++) {
                                    var child = target.children[i];
                                    if (child.tagName === "SOURCE" && child.dataset.src) {
                                        child.src = child.dataset.src;
                                    }
                                }
                                target.load();
                            } else if (target.tagName === "IMG" && target.dataset.src) {
                                target.src = target.dataset.src;
                            }
                            target.classList.remove("lazy");
                            observer.unobserve(target);
                        }
                    });
                });
            lazyElements.forEach(function(element) {
                observer.observe(element);
            });
        }
    }
    document.addEventListener("DOMContentLoaded", initializeLazyLoading);
</script>
<script id="wc-blocks-middleware-js-before">
    var wcBlocksMiddlewareConfig = {
        storeApiNonce: '7ec6b5168a',
        wcStoreApiNonceTimestamp: '1703853906'
    };
</script>
<script
    src="https://woodupp.dk/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-middleware.js?ver=ca04183222edaf8a26be"
    id="wc-blocks-middleware-js"></script>
<script src="https://woodupp.dk/wp-content/plugins/bowe-marketing/build/frontend/index.js?ver=99e69fdbd1697660c9d6"
    id="bowe-marketing-js" async="" data-wp-strategy="async"></script>
<script src="https://woodupp.dk/wp-content/themes/woodupp-theme/src/vendors/gsap/gsap.min.js?ver=3.12.0" id="gsap-js">
</script>
<script src="https://woodupp.dk/wp-content/themes/woodupp-theme/src/vendors/gsap/scrolltrigger.min.js?ver=3.12.0"
    id="gsap-scrolltrigger-js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Listen for changes in the checkboxes
        $('.colors-list input[type="checkbox"]').change(function() {
            updateTotalPrice();
        });

        // Function to update the total price
        function updateTotalPrice() {
            var total = 0;

            // Iterate through checked checkboxes and sum their prices
            $('.colors-list input[type="checkbox"]:checked').each(function() {
                total += parseFloat($(this).data('price'));
            });

            // Update the total price display
            $('.colors-totals-line.total .woocommerce-Price-amount span.wc-price').text(total.toFixed(2));
        }

        // Initial update when the page loads
        updateTotalPrice();
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        var maxSelection = 2;

        // Listen for changes in the checkboxes
        $('.bowe-color-samples .colors-list input[type="checkbox"]').change(function() {
            var selectedCount = $('.bowe-color-samples .colors-list input[type="checkbox"]:checked')
                .length;

            if (selectedCount > maxSelection) {
                $(this).prop('checked', false);
                openModal(); // Show the modal
            }
        });

        // Listen for button click
        $('.bowe-color-samples button[name="add-to-cart"]').click(function(e) {
            e.preventDefault();

            var selectedCount = $('.bowe-color-samples .colors-list input[type="checkbox"]:checked')
                .length;

            if (selectedCount < maxSelection) {
                openModal(); // Show the modal
            } else {
                // Perform the actual add to basket action here
                // For now, we'll just log a message to the console
                console.log('Adding to basket...');
            }
        });
    });

    function openModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>


<style>
    #myModal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 66%;
        height: 65%;
    }

    .modal-content p {
        margin-bottom: -20px;
    }

    .modal-buttons {
        text-align: center;
        margin-top: 100px;
    }

    .modal-btn-close,
    .modal-btn-submit {
        /* padding: 10px 20px; */
        margin: 0 10px 10px 0;
        font-size: 16px;
        width: 343px;
        height: 56px;
        top: 3914px;
        left: 597px;
        padding: 18px, 38px, 18px, 38px;
        gap: 10px
    }

    .modal-btn-close {
        /* background-color: #0e2f4f; */
        background-color: rgba(25, 48, 40, 1);
        color: white;
        width: 343px;
        height: 56px;
        top: 3914px left: 597px;
        padding: 18px, 38px, 18px, 38px;
        gap: 10px;
    }

    .modal-btn-submit {
        background-color: rgba(25, 48, 40, 1);
        color: white;
        width: 343px;
        height: 56px;
        top: 3914px left: 597px;
        padding: 18px, 38px, 18px, 38px;
        gap: 10px;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .opps-heading {
        font-family: "Futura PT";
        font-size: 30px;
        font-weight: bold;
        line-height: 38px;
        letter-spacing: 0em;
        text-align: center;
        color: rgba(25, 48, 40, 1);

        "

    }

    .opps-para {
        font-family: "Futura PT";
        font-size: 20px;

        line-height: 26px;
        letter-spacing: 0em;
        text-align: center;
        color: rgba(34, 34, 34, 1);
    }

    /* .samples-inner img{
height: 164px;
    } */

    .bowe-color-samples .samples-inner img {
        display: inline-block;
        height: 170px;
        margin: 10px;
        -o-object-fit: contain;
        object-fit: contain;
    }
</style>
