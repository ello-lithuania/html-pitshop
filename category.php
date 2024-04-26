<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[10px] lg:mb-[25px]">
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
    <div class="col-span-12 lg:hidden">
      <div style="background: url('./images/bg-img-long.svg')" class="!bg-center rounded-[8px] min-h-[320px] w-full mb-[16px]"></div>
    </div>
    <div class="col-span-12 lg:col-span-5">
        <div class="show-more-text-main">
          <p class="text-[16px] leading-[22px] active">Prepare your car for any challenges on the road: professional auto chemical and cleaning products and other car care products will help you maintain the quality of your car. DIY with professionals and detailers will find suitable products for the specific job.</p>
          <button class="show-more-text-btn text-[14px] leading-[20px] underline lg:hidden">more</button>
        </div>
    </div>
  </div>

  <div class="lg:hidden">
    <div class="grid grid-cols-10 md:grid-cols-8 gap-x-[20px] gap-y-[10px] mb-[26px] mt-[46px]">
      <div class="col-span-5">
        <button class="btn-filters-toggle flex justify-between items-center border-[1px] uppercase dm-mono-medium text-[12px] leading-[15px] tracing-[-1%] w-full rounded-[8px] border-[#6A31F7] text-[#6A31F7] border-[1px] px-[12px] py-[9px]">
          <div class="flex items-center">
            <img class="mr-[12px]" src="./images/icon-filters.svg"/>
            <p>Filters</p>
          </div>
          <img class="toggle-image invisible" src="./images/icon-filter.svg"/>
        </button>
      </div>
      <div class="col-span-5">
                <div class="custom-select-js">
                  <select>
                    <option value="0">Populatity</option>
                    <option value="1">Most revelant</option>
                    <option value="2">Price low to high</option>
                    <option value="3">Price high to low</option>
                  </select>
                </div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-12 gap-0 lg:gap-[30px] mb-[50px]">

    <div class="col-span-12 lg:col-span-3 hidden lg:block toggle-filters-select mb-[40px] lg:mb-0">
    
        <hr class="border-[#E2E1E1] lg:hidden mb-[31px]"/>

        <div class="flex mb-[31px] pr-[20px] toggle-btns-state">
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

        <hr class="border-[#E2E1E1] mt-0 lg:mt-[41px] mb-[7px]"/>

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

        <hr class="border-[#E2E1E1] mt-0 lg:mt-[41px] mb-[7px]"/>

        <div class="accordion-custom-main accordion-custom-pricerange">
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

        <hr class="border-[#E2E1E1] mt-0 lg:mt-[41px] mb-[7px]"/>

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

        <hr class="border-[#E2E1E1] mt-0 lg:mt-[41px] mb-[7px]"/>

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

    </div>

    <div class="col-span-12 lg:col-span-9">
      <div style="background: url('./images/bg-img-long.svg')" class="rounded-[8px] min-h-[320px] w-full mb-[16px] hidden lg:block"></div>

      <div class="lg:hidden mb-[23px]">
        <div class="flex flex-wrap  gap-y-[15px]">
          <div class="flex items-center flex-wrap gap-x-[18px] gap-y-[15px]">
            <div class="flex">
              <p class="text-[#9E9D9D] text-[14px] leading-[20px] mr-[8px]">Featrured</p>
              <button class="flex items-center border-[1px] border-[#9E9D9D] text-[14px] leading-[20px] tracing-[-1%] min-h-[20px] px-[10px] rounded-[20px]">New <img class="ml-[10px]" src="./images/icon-filters-close.svg"/></button>
            </div>
            <div class="flex">
              <p class="text-[#9E9D9D] text-[14px] leading-[20px] mr-[8px]">Exterior</p>
              <button class="flex items-center border-[1px] border-[#9E9D9D] text-[14px] leading-[20px] tracing-[-1%] min-h-[20px] px-[10px] rounded-[20px]">Wash <img class="ml-[10px]" src="./images/icon-filters-close.svg"/></button>
            </div>
            <div class="flex">
              <p class="text-[#9E9D9D] text-[14px] leading-[20px] mr-[8px]">Brand</p>
              <button class="flex items-center border-[1px] border-[#9E9D9D] text-[14px] leading-[20px] tracing-[-1%] min-h-[20px] px-[10px] rounded-[20px]">Champion <img class="ml-[10px]" src="./images/icon-filters-close.svg"/></button>
            </div>
          </div>
          <button class="flex items-center bg-[#E2E1E1] text-[14px] leading-[20px] tracing-[-1%] min-h-[20px] px-[10px] rounded-[20px]">Išvalyti filtrus <img class="ml-[10px]" src="./images/icon-filters-close.svg"/></button>
        </div>
      </div>

      <div class="grid grid-cols-10 md:grid-cols-8 gap-x-[20px] lg:gap-x-[8px] gap-y-[10px]">
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

      <div class="grid grid-cols-12 items-center mb-[53px] lg:mb-[101px]">
        <div class="col-span-12 lg:col-span-3">

        </div>
        <div class="col-span-12 lg:col-span-6 order-2 lg:order-none">
          <div class="flex justify-center lg:justify-between">
            <a class="btn-submit-v1 btn-submit-v2 btn-submit-v2-full btn-submit-v2-categories w-full lg:w-auto" href="./">Show more <img src="./images/icon-right-white.svg"></a>
            <a class="btn-submit-v1 btn-submit-v2 btn-submit-v2-categories hidden lg:flex" href="./">Show all <img src="./images/icon-btn-black.svg"></a>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-3 text-center lg:text-right order-1 lg:order-none">
          <p class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[10px] lg:mb-0">Showing: 1-47 of 873</p>
        </div>
      </div>

      <hr class="border-[#E2E1E1] mb-[15px]"/> 

      <h2 class="dm-sans-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracing-[-1%] mb-[20px]">TURTLE WAX žaidimo „perki, siunti pirkimo kvito nuotrauką ir gali laimėti“ taisyklės</h2>

      <p class="text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] mb-[20px]">DIY autocosmetics offer a wide range of products and solutions for car enthusiasts who prefer to take care of their vehicle's appearance themselves. From car wash soaps and waxes to scratch removers and polishing compounds, DIY autocosmetics provide an affordable and convenient way to maintain and enhance the look of your vehicle.</p>
      <p class="text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] lg:mb-[20px]">Professional autocosmetics, on the other hand, are often used by automotive detailing experts and professionals who demand high-quality results and a professional finish. Professional autocosmetics typically feature advanced formulas and technologies that are specifically designed to achieve superior cleaning, polishing, and protection for various automotive surfaces. These products are often used in professional auto detailing shops and body shops to achieve showroom-quality results and restore the shine and luster of vehicles. While DIY autocosmetics are suitable for regular maintenance and minor imperfections, professional autocosmetics are preferred for more intensive detailing projects and for achieving professional-grade results.</p>

    </div>
  </div>

</section>

<section class="container md:min-w-[100vw] pb-[37px] lg:pb-[118px]">
    <div class="hr-body mb-[13px] mt-[0px] lg:mt-[87px]">
      <div class="hr-dot"></div>
      <hr class="hr-dotted"/>
    </div>

    <h2 class="section-title mb-[12px] lg:mb-[23px]">Good to know</h2>

    <div class="grid grid-cols-8 gap-x-[8px] md:gap-x-[50px]">
      <div class="col-span-8 md:col-span-4">
        <div class="mb-[12px] lg:mb-0">
          <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]">
          <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%]">featured</p>
          <h3 class="text-[28px] lg:text-[45px] lg:leading-[55px] tracking-[-1%] mb-[8px] lg:mb-[19px] font-bold">How to keep tools in good shape - preparing for winter</h3>
          <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"> Read more</a>
        </div>
      </div>
      <div class="col-span-8 md:col-span-4">

      <div class="flex gap-x-[20px] lg:block">
        <div class="flex-1">
            <div class="grid grid-cols-12 gap-x-[8px] md:gap-x-[29px]">
            <div class="col-span-12 md:col-span-5">
                <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[19px] rounded-[8px]">
            </div>
            <div class="col-span-12 md:col-span-7">
                <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"> Read more</a>
            </div>
            </div>
        </div>
        <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block">

        <div class="flex-1">
            <div class="grid grid-cols-12 gap-x-[8px] md:gap-x-[29px]">
            <div class="col-span-12 md:col-span-5">
                <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[19px] rounded-[8px]">
            </div>
            <div class="col-span-12 md:col-span-7">
                <p class="text-[#00BB5A] uppercase dm-mono-medium  text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"> Read more</a>
            </div>
            </div>
        </div>
      </div>  

      <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block">
      <div class="hidden lg:block">
        <div class="grid grid-cols-12 gap-x-[8px] md:gap-x-[29px]">
          <div class="col-span-12 md:col-span-5">
            <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]">
          </div>
          <div class="col-span-12 md:col-span-7">
            <p class="text-[#00BB5A] uppercase dm-mono-medium text-[15px] leading-[18px] tracking-[3%] mb-[12px]">featured</p>
            <h3 class="text-[16px] md:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
            <a href="" class="text-[#626262] font-bold text-[16px] leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"> Read more</a>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="flex justify-center mt-[30px]">
      <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"/></a>
    </div>

</section>

<?php include('./footer.php'); ?>