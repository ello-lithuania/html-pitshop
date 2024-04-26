<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[17px]">
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Auto cosmetics</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Cleaners</a>
 </div>

</section>

<section class="container md:min-w-[100vw] mt-[12px] lg:mb-[41px]">
  <div class="grid grid-cols-12 lg:gap-[30px] mb-[20px] lg:mb-[40px]">
    <div class="col-span-12 lg:col-span-12">
      <div class="flex flex-wrap xl:flex-nowrap">
        <div class="flex gap-x-[15px] lg:gap-x-0 overflow-x-scroll no-scrollbar lg:overflow-x-visible lg:flex-nowrap flex-row lg:flex-col lg:mr-[30px] product-change-photo">
          <button data-img="http://localhost/pitshop/images/product1.svg" data-position="1" class="active-product-button product-button-1 min-w-[65px] w-[65px] lg:w-[110px] h-[65px] lg:h-[110px] p-[8px] rounded-[8px] border-[1px] border-[#E2E1E1] mb-[20px]"><img class="w-full" src="./images/product1.svg"/></button>
          <button data-img="http://localhost/pitshop/images/product-big.svg" data-position="2" class="product-button-2 min-w-[65px] w-[65px] lg:w-[110px] h-[65px] lg:h-[110px] p-[8px] rounded-[8px] border-[1px] border-[#E2E1E1] mb-[20px]"><img class="w-full" src="./images/product-big.svg"/></button>
          <button data-img="http://localhost/pitshop/images/product1.svg" data-position="3" class="product-button-3  min-w-[65px] w-[65px] lg:w-[110px] h-[65px] lg:h-[110px] p-[8px] rounded-[8px] border-[1px] border-[#E2E1E1] mb-[20px]"><img class="w-full" src="./images/product1.svg"/></button>
          <button data-img="http://localhost/pitshop/images/product1.svg" data-position="4" class="product-button-4  min-w-[65px] w-[65px] lg:w-[110px] h-[65px] lg:h-[110px] p-[8px] rounded-[8px] border-[1px] border-[#E2E1E1] mb-[20px]"><img class="w-full" src="./images/product1.svg"/></button>
          <button data-img="http://localhost/pitshop/images/product1.svg" data-position="5" class="product-button-5  min-w-[65px] w-[65px] lg:w-[110px] h-[65px] lg:h-[110px] p-[8px] rounded-[8px] border-[1px] border-[#E2E1E1] mb-[20px]"><img class="w-full" src="./images/product1.svg"/></button>
        </div>
        <div class="lg:mr-[30px] order-first lg:order-none w-full lg:w-fit mb-[9px] lg:mb-0 overflow-hidden">
          <div class="min-h-[400px] lg:min-h-[669px] border-[1px] border-[#E2E1E1] min-w-[300px] max-w-[100%] lg:min-w-[669px] rounded-[8px] relative main-product-photo" style="background: url('./images/product-big.svg')">
            <div class="absolute left-[11px] top-[13px] dm-sans-bold text-[12px] lg:text-[24px] leading-[13px] lg:leading-[23px] rounded-[8px] flex items-center justify-center bg-[#6A31F7] h-[18px] lg:h-[36px] lg:w-[82px] text-white px-[10px]">New</div>
            <button class="product-change-photo-prev hidden lg:flex absolute left-[10px] top-[50%] w-[36px] h-[36px] rounded-full flex items-center justify-center border-[2px] border-black bg-white"><img src="./images/icon-product-prev.svg"/></button>
            <button class="product-change-photo-next hidden lg:flex absolute right-[10px] top-[50%] w-[36px] h-[36px] rounded-full flex items-center justify-center border-[2px] border-black bg-white"><img src="./images/icon-product-next.svg"/></button>
          </div>
        </div>
        <div class="flex-grow">
          <p class="text-[16px] lg:text-[28px] tracing-[-1%] mb-[4px]">Turtle Wax </p>
          <h1 class="dm-sans-bold text-[16px] lg:text-[28px] tracing-[-1%] mb-[4px]">Hyper Foam Wheel Cleaner & Tire Prep</h1>
          <div class="flex flex-row justify-between lg:justify-start lg:flex-col flex-wrap">
            <p class="flex-2 text-[14px] lg:text-[20px] tracing-[-1%] mb-[9px] lg:mb-[20px]">ratlankių ir padangų valiklis 500 ml</p>
            <div class="flex-1 justify-end lg:justify-start flex lg:mb-[36px]">
              <img class="h-[12px] lg:h-auto" src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
              <img class="h-[12px] lg:h-auto" src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
              <img class="h-[12px] lg:h-auto" src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
              <img class="h-[12px] lg:h-auto" src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
              <img class="h-[12px] lg:h-auto" src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
            </div>
          </div>
          <div class="flex items-center lg:hidden mb-[5px]">
            <img src="./images/icon-offer.svg"/>
            <p class="ml-[6px] text-[#626262] text-[12px] leading-[15px]">Sellout</p>
          </div>
          <div class="flex items-center justify-between mb-[15px] lg:mb-[27px] flex-wrap">
            <p class="dm-sans-medium text-[28px] lg:text-[40px] lg:leading-[46px] tracing-[-1%] mb-0 lg:mb-[20px] lg:mb-0">12 000.27 €</p>
            
            <div class="relative w-full">
              <p class="w-full lg:hidden flex items-center dm-sans-regular mb-[8px] text-[12px] leading-[20px] text-[#626262] info-box-tooltip">
                <span class="underline">Lowest price 12.90 €  <b>-16%</b></span>
                <svg class="ml-[5px]" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6.5" cy="6.5" r="6" stroke="#9E9D9D"/>
                  <rect x="6" y="5" width="1" height="5" fill="#9E9D9D"/>
                  <rect x="6" y="3" width="1" height="1" fill="#9E9D9D"/>
                  <rect x="5" y="10" width="1" height="3" transform="rotate(-90 5 10)" fill="#9E9D9D"/>
                  <rect x="5" y="6" width="1" height="2" transform="rotate(-90 5 6)" fill="#9E9D9D"/>
                </svg>
                <span class="hidden info-box-tooltip-main">
                  <span class="lg:hidden flex items-center justify-end">
                    <button class="info-box-tooltip-close"><img src="./images/info-box-close.svg"/></button>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim.
                </span>
              </p>
            </div>

            <div class="w-full sm:min-w-[317px] bg-[#00BB5A] rounded-[4px] p-[8px] flex items-center justify-between">
              <div class="flex items-center">
                <img src="./images/icon-dot-white.svg" class="mr-[10px]"/>
                <div>
                  <p class="text-[26px] text-white uppercase">Member saves</p>
                </div>
              </div>
              <div class="flex items-center">
                <img src="./images/icon-border-dotted.svg" class="mr-[10px]"/>
                <p class="text-[26px] text-white">-30%</p>
              </div>
            </div>

          </div>

            <div class="relative w-full">
              <p class="hidden lg:flex items-center dm-sans-regular mb-[3px] text-[12px] leading-[20px] text-[#626262] info-box-tooltip">
                <span class="underline">Lowest price 12.90 €  <b>-16%</b></span>
                <svg class="ml-[5px]" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6.5" cy="6.5" r="6" stroke="#9E9D9D"/>
                  <rect x="6" y="5" width="1" height="5" fill="#9E9D9D"/>
                  <rect x="6" y="3" width="1" height="1" fill="#9E9D9D"/>
                  <rect x="5" y="10" width="1" height="3" transform="rotate(-90 5 10)" fill="#9E9D9D"/>
                  <rect x="5" y="6" width="1" height="2" transform="rotate(-90 5 6)" fill="#9E9D9D"/>
                </svg>
                <span class="hidden info-box-tooltip-main">
                  <span class="lg:hidden flex items-center justify-end">
                    <button class="info-box-tooltip-close"><img src="./images/info-box-close.svg"/></button>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim.
                </span>
              </p>
            </div>

          <div class="flex items-center mb-[12px] flex-wrap lg:flex-nowrap relative">
              <p class="text-[#626262] text-[12px] leading-[20px] tracing-[-1%] ">In Stock</p>
              <div class="text-[#626262] text-[12px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
              <p class="text-black text-[12px] leading-[20px] tracing-[-1%] flex items-center info-box-tooltip">
                <span class="underline">TW53180</span> 
                <svg class="ml-[5px]" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6.5" cy="6.5" r="6" stroke="#9E9D9D"/>
                  <rect x="6" y="5" width="1" height="5" fill="#9E9D9D"/>
                  <rect x="6" y="3" width="1" height="1" fill="#9E9D9D"/>
                  <rect x="5" y="10" width="1" height="3" transform="rotate(-90 5 10)" fill="#9E9D9D"/>
                  <rect x="5" y="6" width="1" height="2" transform="rotate(-90 5 6)" fill="#9E9D9D"/>
                </svg>
                <span class="hidden info-box-tooltip-main">
                  <span class="lg:hidden flex items-center justify-end">
                    <button class="info-box-tooltip-close"><img src="./images/info-box-close.svg"/></button>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim.
                </span>
              </p>
              <div class="text-[#626262] text-[12px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
              <p class="text-black text-[12px] leading-[20px] tracing-[-1%] flex items-center">Delivery 0-2 w/d</p>
              <div class="text-[#626262] text-[12px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
              <a href="" class="text-black text-[12px] leading-[20px] tracing-[-1%] underline">Got Question?</a>
          </div>

          <hr class="border-[#6A31F7] mb-[12px]"/>

          <div class="flex items-center mb-[13px]">
            <img src="./images/icon-basket.svg" class="mr-[12px]"/>
            <p class="dm-sans-bold text-[16px] leading-[22px] text-[#6A31F7]">This item also requires:</p>
          </div>

          <hr class="border-[#E2E1E1] mb-[10px]"/>

          <div class="flex justify-between">
            <div class="flex">
              <div class="p-[4.36px] w-[60px] h-[60px] rounded-[8px] mr-[19px] border-[#E2E1E1] border-[1px]"><img src="./images/product-thumbnail-small.svg"/></div>
              <div>
                <p class="text-[14px] leading-[20px] dm-sans-bold">Turtle Wax </p>
                <p class="text-[16px] leading-[22px]">Wet’n’Black tyre foam 500ml</p>
              </div>
            </div>
            <button class="dm-mono-medium uppercase border-[1px] border-black text-[12px] leading-[15px] tracing-[3%] rounded-[20px] w-[80px] h-[20px] flex items-center justify-center">Add <img class="ml-[10px]" src="./images/icon-add-right.svg"/></button>
          </div>

          <hr class="border-[#E2E1E1] my-[10px]"/>

          <div class="flex justify-between">
            <div class="flex">
              <div class="p-[4.36px] w-[60px] h-[60px] rounded-[8px] mr-[19px] border-[#E2E1E1] border-[1px]"><img src="./images/product-thumbnail-small.svg"/></div>
              <div>
                <p class="text-[14px] leading-[20px] dm-sans-bold">Turtle Wax </p>
                <p class="text-[16px] leading-[22px]">Wet’n’Black tyre foam 500ml</p>
              </div>
            </div>
            <button class="dm-mono-medium uppercase border-[1px] border-black text-[12px] leading-[15px] tracing-[3%] rounded-[20px] w-[80px] h-[20px] flex items-center justify-center">Add <img class="ml-[10px]" src="./images/icon-add-right.svg"/></button>
          </div>

          <hr class="border-[#E2E1E1] mt-[10px] mb-[23px]"/>

          <div class="flex items-center justify-between mb-[22px] lg:mb-[36px] flex-wrap">
              <div class="flex items-center justify-between flex-wrap flex-grow mb-[10px] lg:mb-0 gap-x-[11px]">
                <button class="w-[37px] h-[36px] border-[1px] border-[#E2E1E1] flex items-center justify-center rounded-full"><img src="./images/icon-heart-inactive.svg"/></button>
                <button class="w-[37px] h-[36px] border-[1px] border-[#E2E1E1] flex items-center justify-center rounded-full"><img src="./images/icon-compare.svg"/></button>
                <div class="input-items-main h-[36px] min-w-[110px] flex-grow border-[1px] border-[#E2E1E1] rounded-[20px] px-[9px] flex items-center lg:mr-[13px]">
                  <button class="input-items-main-decrease"><img class="min-w-[13px]" src="./images/icon-input-decrease.svg"/></button>
                  <input readonly type="number" max="999" class="flex-grow outline-none w-[30px] px-[10px] text-center dm-mono-medium text-[16px] leading-[21px] tracing-[3%]" value="1"/>
                  <button class="input-items-main-increase"><img class="min-w-[13px]" src="./images/icon-input-increase.svg"/></button>
                </div>
              </div>
            <div class="w-full lg:w-fit">
              <button class="uppercase text-white bg-black lg:max-w-[316px] rounded-[20px] min-h-[35px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] flex items-center justify-center mt-[8px] p-[10px]">to cart / inform when in stock <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>

          <div class="flex justify-between border-[1px] border-[#E2E1E1] py-[5px] px-[20px] py-[23px] rounded-[8px]">
            <div class="flex items-center">
              <img src="./images/icon-gift.svg" class="mr-[20px]"/>
              <div>
                <p class="text-[#6A31F7] dm-sans-bold text-[14px] lg:text-[20px] tracing-[-1%] mb-[1px]">Gift for you</p>
                <p class="text-[#626262] text-[12px] lg:text-[16px] lleading-[16px] lg:eading-[22px] tracing-[-1%] ">When buying <b>Turtle Wax</b> for more than 60€ </p>
              </div>
            </div>
            <div class="flex items-center">
                <img src="./images/icon-border-dotted-gray.svg"/>
                <img src="./images/product2.svg" class="mx-[27px]"/>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<section class="container md:min-w-[100vw]">
  <hr class="border-[#E2E1E1] mb-[31px] hidden lg:block"/>
  <div class="flex items-center justify-center">
    <iframe class="mb-[19px] lg:mb-[41px] w-full lg:w-auto lg:min-w-[1089px] lg:min-h-[650px]" width="560" height="315" src="https://www.youtube.com/embed/zJurP1pRQOo?si=3gYoxgbBk9y9Oaow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>

  <div class="custom-tabs-main custom-tabs-main-products">
    <div class="custom-tabs-main-title flex items-center justify-center flex-wrap lg:flex-nowrap">
      <button data-tab="description-tab" class="custom-tabs-main-title-btn custom-tabs-main-title-active flex items-center justify-center h-[37px] w-[220px] rounded-[20px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]"><img src="./images/icon-list-dot.svg" class="mr-[10px]"/> Description</button>
      <button data-tab="reviews-tab" class="custom-tabs-main-title-btn flex items-center justify-center h-[37px] w-[220px] rounded-[20px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]"><img src="./images/icon-list-dot.svg" class="mr-[10px]"/> Reviews (5)</button>
      <button data-tab="safety-tab" class="custom-tabs-main-title-btn flex items-center justify-center h-[37px] w-[220px] rounded-[20px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]"><img src="./images/icon-list-dot.svg" class="mr-[10px]"/> Safety info</button>
      <button data-tab="characteristics-tab" class="custom-tabs-main-title-btn flex items-center justify-center h-[37px] w-[220px] rounded-[20px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]"><img src="./images/icon-list-dot.svg" class="mr-[10px]"/> Characteristics</button>
      <button data-tab="delivery-tab" class="custom-tabs-main-title-btn flex items-center justify-center h-[37px] w-[220px] rounded-[20px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]"><img src="./images/icon-list-dot.svg" class="mr-[10px]"/> Delivery options</button>
    </div>
    <hr class="border-[#E2E1E1] mb-[37px] mt-[18px] hidden lg:block"/>
    <div class="custom-tabs-main-body-active custom-tabs-main-body description-tab">
      <div class="grid grid-cols-12 gap-y-[30px] lg:gap-[48px] mb-[40px]">
        <div class="col-span-12 lg:col-span-6 lg:border-r-[1px] lg:border-[#E2E1E1]">
          <div class="lg:max-w-[504px]">
            <ul class="list-disc pl-[25px] mb-[20px]">
              <li>Cuts through brake dust, iron deposits, mud and grime in seconds</li>
              <li>Scientifically advanced polymer protection keeps wheels and tyres cleaner for longer</li>
              <li>Safe for all kind of wheels, chrome, steel and aluminium alloy</li>
            </ul>

            <p>STEP 1</p>
            <p class="mb-[20px]">Working on one wheel and tyre at a time, spray with water to cool any warm surfaces and wash away loose soils.</p>

            <p>STEP 2</p>
            <p>Shake the product well and spray across the wheel and tyre.</p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Analog code:</p>
            <p>GY55-2</p>
          </div>
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Estimated delivery date:</p>
            <p>2023.03.10</p>
          </div>
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Quantity in box:</p>
            <p>6 pc.</p>
          </div>
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Only in boxes:</p>
            <p>-</p>
          </div>
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Quantity in parcel:</p>
            <p>36 pc.</p>
          </div>
          <div class="flex items-center mb-[3px] flex-wrap lg:flex-nowrap">
            <p class="w-[240px] mr-[40px]">Net Weight:</p>
            <p>0.55 kg</p>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-tabs-main-body reviews-tab">
      <div class="grid grid-cols-12 gap-y-[30px] mb-[40px]">
        <div class="col-span-12 lg:col-span-7 lg:pr-[171px]">
          <div>
            <div class="flex items-center mb-[22px]">
              <img src="./images/thumbnail.svg" class="rounded-full mr-[21.44px] "/>
              <div>
                <div class="flex mb-[8px]">
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                </div>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[1px]">Šarūnas J.</p>
                <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%]">2023/05/16</p>
              </div>
            </div>
            <p class="text-[16px] leading-[22px]">Puikus. Atitiko lūkesčius.</p>
          </div>
          <hr class="my-[22px] border-[#E2E1E1]"/>
          <div>
            <div class="flex items-center mb-[22px]">
              <img src="./images/thumbnail.svg" class="rounded-full mr-[21.44px] "/>
              <div>
                <div class="flex mb-[8px]">
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                </div>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[1px]">Šarūnas J.</p>
                <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%]">2023/05/16</p>
              </div>
            </div>
            <p class="text-[16px] leading-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim. Sed suscipit, neque id suscipit lobortis, risus velit finibus nunc, nec vulputate tortor nisl non felis. </p>
          </div>
          <hr class="my-[22px] border-[#E2E1E1]"/>
          <div>
            <div class="flex items-center mb-[22px]">
              <img src="./images/thumbnail.svg" class="rounded-full mr-[21.44px] "/>
              <div>
                <div class="flex mb-[8px]">
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                </div>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[1px]">Šarūnas J.</p>
                <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%]">2023/05/16</p>
              </div>
            </div>
            <p class="text-[16px] leading-[22px]">Puikus. Atitiko lūkesčius.</p>
          </div>
          <hr class="my-[22px] border-[#E2E1E1]"/>
          <div>
            <div class="flex items-center mb-[22px]">
              <img src="./images/thumbnail.svg" class="rounded-full mr-[21.44px] "/>
              <div>
                <div class="flex mb-[8px]">
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                </div>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[1px]">Šarūnas J.</p>
                <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%]">2023/05/16</p>
              </div>
            </div>
            <p class="text-[16px] leading-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim. Sed suscipit, neque id suscipit lobortis, risus velit finibus nunc, nec vulputate tortor nisl non felis. </p>
          </div>
          <hr class="my-[22px] border-[#E2E1E1]"/>
          <div>
            <div class="flex items-center mb-[22px]">
              <img src="./images/thumbnail.svg" class="rounded-full mr-[21.44px] "/>
              <div>
                <div class="flex mb-[8px]">
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                  <img src="./images/icon-star-active.svg" class="mr-[2.79px]"/>
                </div>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[1px]">Šarūnas J.</p>
                <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%]">2023/05/16</p>
              </div>
            </div>
            <p class="text-[16px] leading-[22px]">Puikus. Atitiko lūkesčius.</p>
          </div>
          <hr class="my-[22px] border-[#E2E1E1] hidden lg:block"/>  
        </div>
        <div class="col-span-12 lg:col-span-5">
          <div class="bg-[#F8F6F7] rounded-[8px] px-[20px] py-[29px]">
            <h4 class="dm-sans-bold text-[20px] mb-[30px] tracing-[-1%]">Parašyti įvertinimą</h4>

                        <div class="w-full mb-[25px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]" placeholder=" "><label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Name
                                </label>
                            </div>
                        </div>

                        <div class="w-full mb-[33px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]" placeholder=" "><label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email address
                                </label>
                            </div>
                        </div>

              <div class="border-[1px] border-black rounded-[8px] px-[20px] py-[10px] mb-[19px]">
                <p class="text-[#626262] text-[16px] leading-[22px]">Įvertinimas</p>
                <div class="flex items-center justify-center">
                  <div class="star-rating star-rating-choose">
                    <button data-count="1"><img class="h-[20px]" src="./images/icon-star-inactive.svg"></button>
                    <button data-count="2"><img class="h-[20px]" src="./images/icon-star-inactive.svg"></button>
                    <button data-count="3"><img class="h-[20px]" src="./images/icon-star-inactive.svg"></button>
                    <button data-count="4"><img class="h-[20px]" src="./images/icon-star-inactive.svg"></button>
                    <button data-count="5"><img class="h-[20px]" src="./images/icon-star-inactive.svg"></button>
                  </div>
                </div>
              </div>

              <div class="border-[1px] border-black rounded-[8px] px-[20px] py-[10px] mb-[29px]">
                <p class="text-[#626262] text-[16px] leading-[22px]">Komentaras</p>
                <textarea rows="8" class="bg-transparent w-full h-full outline-none"></textarea>
              </div>

              <label class="custom-label flex items-center">
                  <div class="bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center mr-[15px] lg:mr-[8px] min-w-[15px] !w-[15px] !h-[15px]">
                      <input type="checkbox" class="hidden" checked="">
                      <svg class="hidden min-w-[28px] w-[28px] lg:min-w-4 lg:w-4 h-[28px] lg:h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"></path><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"></path></g></svg>
                  </div>
                  <span class="select-none text-[#626262] text-[12px] leading-[15px] tracing-[-1%]"> Sutinku, kad nulla et risus quis mi tincidunt condimentum. Donec eu ullamcorper purus. Curabitur sem felis, dignissim nec auctor nec, sagittis eu velit.</span>
              </label>

                <div class="flex items-center justify-center mt-[20px]">
                    <a href="./index.php" class="w-full uppercase text-white bg-[#6A31F7] rounded-[20px] min-h-[35px] dm-mono-medium text-[16px] lg:text-[12px] px-[10px] text-center leading-[21px] lg:leading-[16px] tracing-[3%] flex items-center justify-center">Pateikti įvertinimą <img class="ml-[10px]" src="./images/icon-next-btn.svg"></a>
                </div>

          </div>
        </div>
      </div>
    </div>
    <div class="custom-tabs-main-body safety-tab">
      <div class="grid grid-cols-12 gap-y-[30px] lg:gap-[48px] mb-[40px]">
        <div class="col-span-12 lg:col-span-6">
          <div class="flex items-center mb-[21px] lg:mb-[11px]">
            <img src="./images/icon-safety-1.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">WARNING!</p>
              <p class="text-[16px] leading-[22px]">Skin irritation (hazard category 2)</p>
              <p class="text-[16px] leading-[22px]">Eye irritation (hazard category 2)</p>
            </div>
          </div>
          <div class="flex items-center mb-[21px] lg:mb-[11px]">
            <img src="./images/icon-safety-2.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">DANGER!​​​​​​​</p>
              <p class="text-[16px] leading-[22px]">Flammable liquids (hazard categories 1, 2 and 3)</p>
              <p class="text-[16px] leading-[22px]">Flammable aerosols (hazard categories 1 and 2)</p>
            </div>
          </div>
          <div class="flex items-center mb-[21px] lg:mb-[11px]">
            <img src="./images/icon-safety-1.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">WARNING!</p>
              <p class="text-[16px] leading-[22px]">Skin irritation (hazard category 2)</p>
              <p class="text-[16px] leading-[22px]">Eye irritation (hazard category 2)</p>
            </div>
          </div>
          <div class="flex items-center mb-[0px] lg:mb-[11px]">
            <img src="./images/icon-safety-2.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">DANGER!​​​​​​​</p>
              <p class="text-[16px] leading-[22px]">Flammable liquids (hazard categories 1, 2 and 3)</p>
              <p class="text-[16px] leading-[22px]">Flammable aerosols (hazard categories 1 and 2)</p>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
          <div class="flex items-start mb-[21px] lg:mb-[26px]">
            <img src="./images/icon-safety-3.svg" class="mr-[17px] mt-[5px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">WARNING!</p>
              <p class="text-[16px] leading-[22px]">Respiratory sensitization (hazard category 1)​​​​​​​</p>
              <p class="text-[16px] leading-[22px]">Specific target organ toxicity (single exposure) (hazard categories 1, 2)</p>
              <p class="text-[16px] leading-[22px]">Respiratory sensitization (hazard category 1)​​​​​​​</p>
              <p class="text-[16px] leading-[22px]">Specific target organ toxicity (single exposure) (hazard categories 1, 2)</p>
              <div class="flex items-center mt-[20px]">
                <div class="flex items-center mr-[20px]">
                  <img src="./images/icon-pdf-active.svg" class="mr-[10px]"/>
                  <a href="" class="abel text-[14px] leading-[20px] underline min-w-[92px]">Safety data</a>
                </div>
                <div class="flex items-center">
                  <img src="./images/icon-pdf-active.svg" class="mr-[10px]"/>
                  <a href="" class="abel text-[14px] leading-[20px] underline min-w-[92px]">Technical data</a>
                </div>
              </div>
            </div>
          </div>
          <div class="flex items-center mb-[21px] lg:mb-[11px]">
            <img src="./images/icon-safety-1.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">WARNING!</p>
              <p class="text-[16px] leading-[22px]">Skin irritation (hazard category 2)</p>
              <p class="text-[16px] leading-[22px]">Eye irritation (hazard category 2)</p>
            </div>
          </div>
          <div class="flex items-center mb-[21px] lg:mb-[11px]">
            <img src="./images/icon-safety-2.svg" class="mr-[17px]"/>
            <div>
              <p class="text-[16px] leading-[22px]">DANGER!​​​​​​​</p>
              <p class="text-[16px] leading-[22px]">Flammable liquids (hazard categories 1, 2 and 3)</p>
              <p class="text-[16px] leading-[22px]">Flammable aerosols (hazard categories 1 and 2)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-tabs-main-body characteristics-tab lg:px-[82px]">
      <div class="grid grid-cols-12 gap-y-[30px] lg:gap-[48px] mb-[40px]">
        <div class="col-span-12 lg:col-span-6">
          <div class="flex items-center mb-[18px] flex-wrap lg:flex-nowrap">
            <p class="w-[150px] mr-[40px] dm-sans-bold">Line</p>
            <p>Hybrid Solutions</p>
          </div>
          <div class="flex items-center mb-[18px] flex-wrap lg:flex-nowrap">
            <p class="w-[150px] mr-[40px] dm-sans-bold">Exterior</p>
            <p>Wheel & Tire</p>
          </div>
          <div class="flex items-center mb-[18px] flex-wrap lg:flex-nowrap">
            <p class="w-[150px] mr-[40px] dm-sans-bold">What does</p>
            <p>Cleans & prepares</p>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-tabs-main-body delivery-tab">
      <div class="grid grid-cols-12 gap-y-[30px] lg:gap-[40px] mb-[40px] mt-[20px] lg:mt-0">
        <div class="col-span-6 lg:col-span-3 lg:border-r-[1px] lg:border-[#E2E1E1]">
          <img src="./images/icon-delivery-local.svg"/>
          <h6 class="mt-[12px] mb-[4px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Local pickup</h6>
          <p class="text-[#00BB5A] text-[16px] leading-[22px] mb-[41px]">Delivery on Tuesday 01.31</p>
          <p class="text-[16px] leading-[22px] mb-[15px] lg:mb-[38px]"><b>Today</b> (for orders till 16:00)<br/>
          Druskininkai, Tobis Warehouse, Gardino 73</p>
          <p class="text-[16px] leading-[22px] mb-[15px]"><b>Tomorrow 02.01</b><br/>
          Vilnius, tobis Shop, Laisvės pr. 3</p>
          <p class="text-[16px] leading-[22px] mb-[15px]"><b>Thursday 02.02</b><br/>
          Vilnius, tobis Shop, Savanorių 187-8</p>
        </div>
        <div class="col-span-6 lg:col-span-3 lg:border-r-[1px] lg:border-[#E2E1E1]">
          <img src="./images/icon-delivery-parcels.svg"/>
          <h6 class="mt-[12px] mb-[4px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Parcel Machiness</h6>
          <p class="text-[#00BB5A] text-[16px] leading-[22px] mb-[41px]">Delivery on Wednesday 02.01</p>
        </div>
        <div class="col-span-6 lg:col-span-3 lg:border-r-[1px] lg:border-[#E2E1E1]">
          <img src="./images/icon-delivery-dropoff.svg"/>
          <h6 class="mt-[12px] mb-[4px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Drop-Pick Up Points</h6> 
            <div class="relative w-full">
              <p class="flex items-center text-[#FF6E35] text-[16px] leading-[22px] mb-[41px] info-box-tooltip">
                <span class="underline">Unavailable</span>
                <svg class="ml-[5px]" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="6.5" cy="6.5" r="6" stroke="#9E9D9D"/>
                  <rect x="6" y="5" width="1" height="5" fill="#9E9D9D"/>
                  <rect x="6" y="3" width="1" height="1" fill="#9E9D9D"/>
                  <rect x="5" y="10" width="1" height="3" transform="rotate(-90 5 10)" fill="#9E9D9D"/>
                  <rect x="5" y="6" width="1" height="2" transform="rotate(-90 5 6)" fill="#9E9D9D"/>
                </svg>
                <span class="hidden info-box-tooltip-main">
                  <span class="lg:hidden flex items-center justify-end">
                    <button class="info-box-tooltip-close"><img src="./images/info-box-close.svg"/></button>
                  </span>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc urna turpis, egestas nec molestie vel, commodo et enim.
                </span>
              </p>
            </div>
        
        </div>
        <div class="col-span-6 lg:col-span-3">
          <img src="./images/icon-delivery-courier.svg"/>
          <h6 class="mt-[12px] mb-[4px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Delivery by courier</h6>
          <p class="text-[#00BB5A] text-[16px] leading-[22px] mb-[41px]">Delivery on Wednesday 02.01</p>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[17px] mt-[71px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted">
  </div>

  <h2 class="section-title mb-[23px]">Often purchased together</h2>

  <div class="grid grid-cols-10 gap-[8px] gap-y-[10px] mb-[40px] hidden lg:grid">
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags invisible">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] ">Sold out</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> NEW</div>
              <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"> -10%</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">alca</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">starter cabel 400A CCA<br>
starter cabel 400A CCA</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#FF5B1B]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold underline">10OFF</span></p>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"> Sellout</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">areon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">vanilla black home</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#D53C00]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="lg:hidden">

    <!-- Swiper -->
    <div class="swiper mySwiper2 custom-swiper custom-product-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"/> Sellout</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">areon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">vanilla black home</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#D53C00]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
      .custom-product-swiper .swiper-slide {
        text-align: left;
        
      }
      .custom-product-swiper .swiper-slide .product-box {
        min-height: 554px;
        border-radius: 8px;
        margin-top: 15px;
        background-color: white;
      }
      @media only screen and (max-width: 960px) {
        .custom-product-swiper .swiper-slide .product-box {
          min-height: 510px
        }
        .custom-product-swiper {
          padding-bottom: 28px;
        }
        .custom-product-swiper .swiper-button-next, .swiper-button-prev {
          display: none
        }
        .custom-product-swiper .swiper-pagination {
          text-align: center;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet {
          background-color: #E2E1E1;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet-active {
          background-color: #6A31F7;
        }
        .custom-product-swiper .swiper-pagination {
          bottom: 0
        }
      }
    </style>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 2.5,
        spaceBetween: 5,
        breakpoints: {  
          '980': {
            slidesPerView: 5,
            spaceBetween: 30,
          },
        },
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </div>

</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[17px] mt-[40px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted">
  </div>

  <h2 class="section-title mb-[23px]">Related Items</h2>

  <div class="hidden lg:grid grid-cols-10 gap-[8px] gap-y-[10px] mb-[40px]">
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags invisible">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] ">Sold out</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> NEW</div>
              <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"> -10%</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">alca</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">starter cabel 400A CCA<br>
starter cabel 400A CCA</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#FF5B1B]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold underline">10OFF</span></p>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"> Sellout</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">areon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">vanilla black home</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#D53C00]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="lg:hidden">

    <!-- Swiper -->
    <div class="swiper mySwiper2 custom-swiper custom-product-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"/> Sellout</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">areon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">vanilla black home</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#D53C00]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
      .custom-product-swiper .swiper-slide {
        text-align: left;
        
      }
      .custom-product-swiper .swiper-slide .product-box {
        min-height: 554px;
        border-radius: 8px;
        margin-top: 15px;
        background-color: white;
      }
      @media only screen and (max-width: 960px) {
        .custom-product-swiper .swiper-slide .product-box {
          min-height: 510px
        }
        .custom-product-swiper {
          padding-bottom: 28px;
        }
        .custom-product-swiper .swiper-button-next, .swiper-button-prev {
          display: none
        }
        .custom-product-swiper .swiper-pagination {
          text-align: center;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet {
          background-color: #E2E1E1;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet-active {
          background-color: #6A31F7;
        }
        .custom-product-swiper .swiper-pagination {
          bottom: 0
        }
      }
    </style>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 2.5,
        spaceBetween: 5,
        breakpoints: {  
          '980': {
            slidesPerView: 5,
            spaceBetween: 30,
          },
        },
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </div>

</section>

<section class="container md:min-w-[100vw] mb-[67px] lg:mb-0">
  <div class="hr-body mb-[17px] mt-[40px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted">
  </div>

  <h2 class="section-title mb-[24px]">New arrivals</h2>
  
  <div class="grid grid-cols-10 gap-y-[30px] lg:gap-[30px]">
    <div class="col-span-10 md:col-span-5">
      <div class="image-box-custom dm-sans-bold" style="background: url('./images/bg-image1.jpg')">
          <h3>Excellence for Experts. Since 1968.</h3>
          <a class="btn-submit-v1 btn-submit-v1-dark" href="./">All products </a>
      </div>
      <div class="mt-[12px] mb-[42px] lg:hidden">
          <h3 class="dm-sans-bold text-[28px] text-[#171717] mb-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          <a class="btn-submit-v1 mb-[13px] max-w-[150px]" href="./">All products </a>
      </div>
    </div>
    <div class="col-span-10 md:col-span-5">
      <div class="image-box-custom image-box-custom-dark dm-sans-bold" style="background: url('./images/bg-image.jpg')">
          <h3>Turtle Wax is an award-winning car care brand.</h3>
          <a class="btn-submit-v1 btn-submit-v1-white" href="./">All products </a>
      </div>
      <div class="mt-[12px] mb-[24px] lg:hidden">
          <h3 class="dm-sans-bold text-[28px] text-[#171717] mb-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          <a class="btn-submit-v1 mb-[13px] max-w-[150px]" href="./">All products </a>
      </div>
    </div>
  </div>

  <div class="hidden lg:grid grid-cols-10 gap-[8px] gap-y-[10px] mt-[45px] mb-[40px]">
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags invisible">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> new</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] ">Sold out</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"> member</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                <p class="font-bold text-[24px] ">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"> NEW</div>
              <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"> -10%</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">alca</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">starter cabel 400A CCA<br>
starter cabel 400A CCA</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#FF5B1B]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold underline">10OFF</span></p>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
          <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
            <div class="product-tab-tags">
              <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"> Sellout</div>
            </div>
            <div class="flex justify-center mb-[13px]">
              <img src="./images/product1.jpg">
            </div>
            <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
              <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">areon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">vanilla black home</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-active.svg">
                <img src="./images/icon-star-inactive.svg">
                <img src="./images/icon-star-inactive.svg">
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#D53C00]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"></button>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="lg:hidden">

    <!-- Swiper -->
    <div class="swiper mySwiper3 custom-swiper custom-product-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> NEW</div>
                <div class="product-tab-tag product-tab-v2"><img src="./images/icon-white-dot.svg"/> -10%</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">alca</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">starter cabel 400A CCA<br/>
    starter cabel 400A CCA</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#FF5B1B]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
                <p class="text-[10px] lg:text-[14px] leading-[22px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag product-tab-v3"><img src="./images/icon-white-dot.svg"/> Sellout</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">areon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">vanilla black home</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#D53C00]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[16px] text-[#626262] line-through">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom hover-box-custom-sold product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags invisible">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
                <div class="product-tab-tag product-tab-v1"><img src="./images/icon-white-dot.svg"/> new</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] ">Sold out</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1]">
              <div class="product-tab-tags">
                <div class="product-tab-tag"><img src="./images/icon-white-dot.svg"/> member</div>
              </div>
              <div class="flex justify-center mb-[13px]">
                <img src="./images/product1.jpg"/>
              </div>
              <div class="px-[3px] border-t-[2px] b-[#E2E1E1] pt-[9px]">
                <div class="min-h-[106px] md:min-h-[85px] mb-[11px]">
                  <p class="text-[13px] lg:text-[16px] leading-[19px] lg:leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                  <h3 class="text-[#171717] font-bold text-[13px] lg:text-[16px] leading-[20px] lg:leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                  <p class="text-[13px] lg:text-[14px] leading-[15px] lg:leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
                </div>
                <div class="star-rating">
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-active.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                  <img src="./images/icon-star-inactive.svg"/>
                </div>
                <div class="flex mb-[15px] product-box-pricing-data">
                  <p class="font-bold text-[15px] lg:text-[24px] text-[#00AD53]">10.90 €</p>
                  <p class="font-bold text-[15px] lg:text-[24px] ">13.90 €</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
      .custom-product-swiper .swiper-slide {
        text-align: left;
        
      }
      .custom-product-swiper .swiper-slide .product-box {
        min-height: 554px;
        border-radius: 8px;
        margin-top: 15px;
        background-color: white;
      }
      @media only screen and (max-width: 960px) {
        .custom-product-swiper .swiper-slide .product-box {
          min-height: 510px
        }
        .custom-product-swiper {
          padding-bottom: 28px;
        }
        .custom-product-swiper .swiper-button-next, .swiper-button-prev {
          display: none
        }
        .custom-product-swiper .swiper-pagination {
          text-align: center;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet {
          background-color: #E2E1E1;
        }
        .custom-product-swiper .swiper-pagination .swiper-pagination-bullet-active {
          background-color: #6A31F7;
        }
        .custom-product-swiper .swiper-pagination {
          bottom: 0
        }
      }
    </style>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper3", {
        slidesPerView: 2.5,
        spaceBetween: 5,
        breakpoints: {  
          '980': {
            slidesPerView: 5,
            spaceBetween: 30,
          },
        },
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </div>

</section>

<?php include('./footer.php'); ?>