<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[25px]">
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Auto cosmetics & chemistry</a>
 </div>

  <div class="hr-body mb-[8px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <div class="grid grid-cols-12 mb-[10px]">
    <div class="col-span-12 lg:col-span-7">
        <h1 class="dm-sans-medium text-[40px] tracing-[-1%] mb-[10px]">Auto cosmetics</h1>
    </div>
    <div class="col-span-12 lg:col-span-5">
        <p class="text-[16px] leading-[22px]">Prepare your car for any challenges on the road: professional auto chemical and cleaning products and other car care products will help you maintain the quality of your car. DIY with professionals and detailers will find suitable products for the specific job.</p>
    </div>
  </div>

  <div class="grid grid-cols-12 lg:gap-[30px] mb-[50px]">
    <div class="col-span-12 lg:col-span-3">

        <div class="flex toggle-btns-state mb-[31px] pr-[20px]">
            <button class="active w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center mr-[10px] abel text-[14px] leading-[20px] tracing-[-1%]">with VAT</button>
            <button class="w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center abel text-[14px] leading-[20px] tracing-[-1%]">without VAT</button>
        </div>
        
        <hr class="border-[#E2E1E1] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Auto cosmetics & chemistry</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales asd asd asd sd sasdasdasdsad
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Featured</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales asd asd asd asd asd
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Price range</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                
                <div class="price-input-container"> 
                    <div class="price-input"> 
                        <div class="price-field"> 
                            <input type="number" 
                                class="min-input" 
                                value="0"> 
                        </div> 
                        <div>
                            <p class="mt-[8px] dm-sans-semibold text-[16px] leading-[22px] tracing-[-1%]">-</p>
                        </div>
                        <div class="price-field"> 
                            <input type="number" 
                                class="max-input" 
                                value="10000"> 
                        </div> 
                    </div> 
                    <div class="slider-container"> 
                        <div class="price-slider"> 
                        </div> 
                    </div> 
                </div> 
    
                <!-- Slider -->
                <div class="range-input"> 
                    <input type="range" 
                        class="min-range" 
                        min="0" 
                        max="10000" 
                        value="0" 
                        step="1"> 
                    <input type="range" 
                        class="max-range" 
                        min="0" 
                        max="10000" 
                        value="10000" 
                        step="1"> 
                </div> 

            </div>
        </div>

        <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Ratings</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            <img src="./images/icon-stars-5.svg"/>
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            <img src="./images/icon-stars-4.svg"/>
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            <img src="./images/icon-stars-3.svg"/>
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            <img src="./images/icon-stars-2.svg"/>
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            <img src="./images/icon-stars-1.svg"/>
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Brand</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <button class="accordion-custom-main-body-more-btn mt-[7px] text-[#6A31F7] abel text-[12px] leading-[15px] tracing-[-1%] flex items-center">Rodyti daugiau <img class="ml-[20px]" src="./images/icon-show-more.svg"/></button>
                <div class="accordion-custom-main-body-more-main hidden">
                  <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                      <div class="flex items-center">
                          <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                          <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                              Scales
                              <p class="text-[16px] leading-[25px]">55</p>
                          </label>
                      </div>
                  </div>
                  <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked />
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
                <p>Brand</p>
                <img src="./images/icon-accordion-close.svg"/>
            </div>
            <div class="accordion-custom-main-body">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <button class="accordion-custom-main-body-more-btn mt-[7px] text-[#6A31F7] abel text-[12px] leading-[15px] tracing-[-1%] flex items-center">Rodyti daugiau <img class="ml-[20px]" src="./images/icon-show-more.svg"/></button>
                <div class="accordion-custom-main-body-more-main hidden">
                  <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                  </div>
                  <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input id="purple-radio" type="radio" value="" name="colored-radio" class="w-[15px] h-[15px] text[#6A31F7] accent-[#6A31F7] bg-gray-100 outline-none border-gray-300 dark:bg-gray-700 dark:border-gray-600">
                        <label for="colored-radio" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                  </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-span-12 lg:col-span-9">
        <div style="background: url('./images/bg-img-long.svg')" class="rounded-[8px] min-h-[320px] w-full mb-[16px]"></div>

        <div class="bg-[#F8F6F7] rounded-[8px] pt-[20px] pb-[16px] px-[13px] min-h-[56px] mb-[20px]">
            <div class="flex flex-wrap lg:flex-nowrap">
                <div class="flex items-center mr-[37px] mb-[10px] lg:mb-0">
                    <p class="mr-[19px] text-[#9E9D9D] abel text-[14px] leading-[20px] tracing-[-1%]">Featrured</p>
                    <span class="abel text-[14px] cursor-pointer leading-[20px] tracing-[-1%] px-[3px] flex items-center justify-center pl-[20px] pr-[5px] border-[1px] border-[#9E9D9D] rounded-[20px]" >New <img src="./images/icon-select-closed.svg" class="ml-[15px]"/></span>
                </div>
                <div class="flex items-center mr-[37px] mb-[10px] lg:mb-0">
                    <p class="mr-[19px] text-[#9E9D9D] abel text-[14px] leading-[20px] tracing-[-1%]">Exterior</p>
                    <span class="abel text-[14px] cursor-pointer leading-[20px] tracing-[-1%] px-[3px] flex items-center justify-center pl-[20px] pr-[5px] border-[1px] border-[#9E9D9D] rounded-[20px]" >Wash <img src="./images/icon-select-closed.svg" class="ml-[15px]"/></span>
                </div>
                <div class="flex items-center mr-[28px] mb-[10px] lg:mb-0">
                    <p class="mr-[19px] text-[#9E9D9D] abel text-[14px] leading-[20px] tracing-[-1%]">Brand</p>
                    <span class="abel text-[14px] cursor-pointer leading-[20px] tracing-[-1%] px-[3px] flex items-center justify-center pl-[20px] pr-[5px] border-[1px] border-[#9E9D9D] rounded-[20px]" >Champion <img src="./images/icon-select-closed.svg" class="ml-[15px]"/></span>
                </div>
                <button class="abel text-[14px] cursor-pointer leading-[20px] tracing-[-1%] px-[3px] flex items-center justify-center pl-[20px] pr-[5px] bg-[#E2E1E1] rounded-[20px]">Išvalyti filtrus <img src="./images/icon-select-closed.svg" class="ml-[15px]"/></button>
            </div>
        </div>

    <div class="grid grid-cols-10 md:grid-cols-8 gap-[8px] gap-y-[10px]">
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
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
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
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
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
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
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">alca</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">starter cabel 400A CCA<br/>
starter cabel 400A CCA</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#FF5B1B]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold underline">10OFF</span></p>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>

        <div class="col-span-5 md:col-span-2">
          <div class="rounded-[8px] bg-[#F3EFFD]">
              <img class="rounded-[8px]" src="./images/bg-spray.svg"/>
                  <div class="pt-[11px] pb-[30px] px-[10px] lg:px-[20px]">
                      <h3 class="dm-sans-bold text-[16px] lg:text-[20px] tracing-[-1%] mb-[5px]">Autokosmetikai LOREM IPSUM -25%</h3>
                      <p class="text-[14px] leading-[22px]">su kodu <span class="text-[#FF6E35] underline">25OFF</span></p>
                  </div>
          </div>
        </div>

      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">areon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">vanilla black home</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#D53C00]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">Sealant Hydrophobic Wax Lorem ipsum dolor</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">vaškas kėbului 500 ml</p>
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
                <p class="font-bold text-[24px] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">turtle Wax lorem ipsum dolor numuanl</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">wet’n’Black tyre foam</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">juodiklis padangoms 500 ml</p>
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
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">Chamaeleon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">hardener 289 for varnish 189</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kietiklis lakui 2.5 l </p>
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
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">alca</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">starter cabel 400A CCA<br/>
starter cabel 400A CCA</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">užvedimo laidai 3 m</p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#FF5B1B]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold underline">10OFF</span></p>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
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
                <p class="text-[16px] leading-[21px] text-[#020202] capitalize">areon</p>
                <h3 class="text-[#171717] font-bold text-[16px] leading-[21px] capitalize">vanilla black home</h3>
                <p class="text-[14px] leading-[22px] text-[#171717]">kvapas namams 150 ml </p>
              </div>
              <div class="star-rating">
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-active.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
                <img src="./images/icon-star-inactive.svg"/>
              </div>
              <div class="flex mb-[15px] product-box-pricing-data">
                <p class="font-bold text-[24px] text-[#D53C00]">10.90 €</p>
                <p class="font-bold text-[16px] text-[#626262] line-through">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
  </div>

    </div>
  </div>

</section>

<?php include('./footer.php'); ?>