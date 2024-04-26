<?php include('./header.php'); ?>

<section class="container mt-[10px] lg:mt-0 md:min-w-[100vw] pb-[67px] lg:pb-[126px]">

  <div class="flex items-center mb-[10px] lg:mb-[27px] lg:hidden">
      <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
      <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
      <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Brands</a>
      <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
      <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Turtle Wax</a>
  </div>

  <div class="hr-body mb-[13px] lg:mt-[54px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <div class="grid grid-cols-12 gap-[10px]">
    <div class="col-span-12 lg:col-span-5">
      <h2 class="section-title mb-[16px] lg:mb-[23px]">TURTLE WAX</h2>
      <img class="w-full rounded-[20px] mb-[24px] lg:hidden" src="./images/bg-brand.svg"/>
    </div>
    <div class="col-span-12 lg:col-span-7">
      <p class="abel text-[14px] leading-[20px] mb-[20px]">The Turtle Wax story started with the launch of the first-ever bottled car wax in 1944. Nearly 75 years later, the Most Innovative Brand in Car Care™ is still capturing the attention of the auto appearance category as the No. 1 selling brand in spray wax, car wash, carpet & fabric care, and more.</p>
      <p class="abel text-[14px] leading-[20px] mb-[20px]">With product distribution in more than 90 countries, the Turtle Wax brand resonates around the globe, but the brand’s heart remains in its hometown of Chicago, where award-winning innovation is developed to this day.</p>
    </div>
  </div>
  
  <div>
    <img class="w-full rounded-[20px] mt-[30px] mb-[60px] hidden lg:block" src="./images/bg-brand.svg"/>
  </div>

  <div class="lg:hidden mb-[30px]">
    <div class="hr-body mb-[7px] mt-[54px]">
      <div class="hr-dot"></div>
      <hr class="hr-dotted"/>
    </div>
    <h2 class="section-title mb-[0px] lg:mb-[16px]">Explore our product lines</h2>

    <!-- Demo styles -->
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }
    </style>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper py-[5px]">
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="swiper-slide">
          <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
            <div class="flex flex-wrap lg:flex-nowrap">
              <img class="mb-[7px] w-full rounded-[8px]" src="./images/brands-small.jpg"/>
              <div>
                <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Turtle Wax</p>
                <h3 class="dm-sans-bold text-[16px] leading-[19px] ">Hybrid Solutions Ceramics</h3>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2.8,
      });
    </script>

  </div>

  <div class="grid grid-cols-12 lg:gap-x-[38px] mb-[11px] hidden lg:grid">
   <div class="col-span-12 lg:col-span-6">
    <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
      <div class="flex flex-wrap lg:flex-nowrap">
        <img class="mb-[10px] w-full lg:mb-0 lg:mr-[29px] lg:max-w-[248px] rounded-[8px]" src="./images/brands-small.jpg"/>
        <div>
          <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[15px] leading-[18px] tracing-[3%]">Turtle Wax</p>
          <h3 class="dm-sans-medium text-[40px] leading-[46px] ">Hybrid Solutions Ceramics</h3>
        </div>
      </div>
    </a>
   </div>
   <div class="col-span-12 lg:col-span-6">
   <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom border-b-[1px] border-[#E2E1E1] hover:border-transparent">
      <div class="flex flex-wrap lg:flex-nowrap">
        <img class="mb-[10px] w-full lg:mb-0 lg:mr-[29px] lg:max-w-[248px] rounded-[8px]" src="./images/brands-small.jpg"/>
        <div>
          <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[15px] leading-[18px] tracing-[3%]">Turtle Wax</p>
          <h3 class="dm-sans-medium text-[40px] leading-[46px] ">Hybrid Solutions Ceramics</h3>
        </div>
      </div>
    </a>
   </div>
   <div class="col-span-12 lg:col-span-6">
   <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom">
      <div class="flex flex-wrap lg:flex-nowrap">
        <img class="mb-[10px] w-full lg:mb-0 lg:mr-[29px] lg:max-w-[248px] rounded-[8px]" src="./images/brands-small.jpg"/>
        <div>
          <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[15px] leading-[18px] tracing-[3%]">Turtle Wax</p>
          <h3 class="dm-sans-medium text-[40px] leading-[46px] ">Hybrid Solutions Ceramics</h3>
        </div>
      </div>
    </a>
   </div>
   <div class="col-span-12 lg:col-span-6">
   <a href="./" class="block px-[20px] py-[23px] rounded-[8px] hover-box-custom ">
      <div class="flex flex-wrap lg:flex-nowrap">
        <img class="mb-[10px] w-full lg:mb-0 lg:mr-[29px] lg:max-w-[248px] rounded-[8px]" src="./images/brands-small.jpg"/>
        <div>
          <p class="text-[#00BB5A] uppercase mb-[9px] dm-mono-medium text-[15px] leading-[18px] tracing-[3%]">Turtle Wax</p>
          <h3 class="dm-sans-medium text-[40px] leading-[46px] ">Hybrid Solutions Ceramics</h3>
        </div>
      </div>
    </a>
   </div>
  </div>

  <div class="grid grid-cols-10 gap-[8px] gap-y-[10px] mb-[45px] hidden lg:grid">
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

  <div class="grid grid-cols-10 lg:gap-x-[43px]">
    <div class="col-span-10 lg:col-span-2 hidden lg:block">

        <div class="flex toggle-btns-state mb-[31px] pr-[20px]">
            <button class="active w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center mr-[10px] abel text-[14px] leading-[20px] tracing-[-1%]">with VAT</button>
            <button class="w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center abel text-[14px] leading-[20px] tracing-[-1%]">without VAT</button>
        </div>

      <hr class="border-[#E2E1E1] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Auto cosmetics &amp; chemistry</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Featured</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Price range</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              
              <div class="price-input-container"> 
                  <div class="price-input"> 
                      <div class="price-field"> 
                          <input type="number" class="min-input" value="0"> 
                      </div> 
                      <div>
                          <p class="mt-[8px] dm-sans-semibold text-[16px] leading-[22px] tracing-[-1%]">-</p>
                      </div>
                      <div class="price-field"> 
                          <input type="number" class="max-input" value="10000"> 
                      </div> 
                  </div> 
                  <div class="slider-container"> 
                      <div class="price-slider"> 
                      </div> 
                  </div> 
              </div> 

              <!-- Slider -->
              <div class="range-input"> 
                  <input type="range" class="min-range" min="0" max="10000" value="0" step="1"> 
                  <input type="range" class="max-range" min="0" max="10000" value="10000" step="1"> 
              </div> 

          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Ratings</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-5.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-4.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-3.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-2.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-1.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Brand</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <button class="accordion-custom-main-body-more-btn mt-[7px] text-[#6A31F7] abel text-[12px] leading-[15px] tracing-[-1%] flex items-center">Rodyti daugiau <img class="ml-[20px]" src="./images/icon-show-more.svg"></button>
              <div class="accordion-custom-main-body-more-main hidden">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
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
    <div class="col-span-10 lg:col-span-8">

      <div class="lg:hidden">

        <!-- Swiper -->
        <div class="swiper mySwiper custom-swiper custom-product-swiper">
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
          var swiper = new Swiper(".mySwiper", {
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

  <div class="lg:hidden grid grid-cols-10 lg:gap-x-[43px]">
    <div class="col-span-10 lg:col-span-2 hidden lg:block toggle-filters-select">

        <div class="flex toggle-btns-state mb-[31px] pr-[20px]">
            <button class="active w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center mr-[10px] abel text-[14px] leading-[20px] tracing-[-1%]">with VAT</button>
            <button class="w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center abel text-[14px] leading-[20px] tracing-[-1%]">without VAT</button>
        </div>

      <hr class="border-[#E2E1E1] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Auto cosmetics &amp; chemistry</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Featured</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Price range</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              
              <div class="price-input-container"> 
                  <div class="price-input"> 
                      <div class="price-field"> 
                          <input type="number" class="min-input" value="0"> 
                      </div> 
                      <div>
                          <p class="mt-[8px] dm-sans-semibold text-[16px] leading-[22px] tracing-[-1%]">-</p>
                      </div>
                      <div class="price-field"> 
                          <input type="number" class="max-input" value="10000"> 
                      </div> 
                  </div> 
                  <div class="slider-container"> 
                      <div class="price-slider"> 
                      </div> 
                  </div> 
              </div> 

              <!-- Slider -->
              <div class="range-input"> 
                  <input type="range" class="min-range" min="0" max="10000" value="0" step="1"> 
                  <input type="range" class="max-range" min="0" max="10000" value="10000" step="1"> 
              </div> 

          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Ratings</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-5.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-4.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-3.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-2.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          <img src="./images/icon-stars-1.svg">
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
          </div>
      </div>

      <hr class="border-[#E2E1E1] mt-[41px] mb-[7px]">

      <div class="accordion-custom-main">
          <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[16px] leading-[22px] pb-[10px]">
              <p>Brand</p>
              <img src="./images/icon-accordion-close.svg">
          </div>
          <div class="accordion-custom-main-body">
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                      <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                          Scales
                          <p class="text-[16px] leading-[25px]">55</p>
                      </label>
                  </div>
              </div>
              <button class="accordion-custom-main-body-more-btn mt-[7px] text-[#6A31F7] abel text-[12px] leading-[15px] tracing-[-1%] flex items-center">Rodyti daugiau <img class="ml-[20px]" src="./images/icon-show-more.svg"></button>
              <div class="accordion-custom-main-body-more-main hidden">
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                    <div class="flex items-center">
                        <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
                        <label for="scales" class="text-[16px] leading-[25px] ml-[11px] flex justify-between items-center grow">
                            Scales
                            <p class="text-[16px] leading-[25px]">55</p>
                        </label>
                    </div>
                </div>
                <div class="mb-[9px] border-b-[1px] border-transparent hover:border-[#6A31F7]">
                  <div class="flex items-center">
                      <input class="checkbox-custom" type="checkbox" id="scales" name="scales" checked="">
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
  </div>


      <div class="grid grid-cols-10 md:grid-cols-8 gap-[8px] gap-y-[10px]">
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
            <div class="rounded-[8px]">
                <img class="rounded-[8px]" src="./images/bg-spray.svg">
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
                  <p class="font-bold text-[24px] line-through">13.90 €</p>
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

    </div>
  </div>

      <div class="grid grid-cols-12 items-center lg:hidden">
        <div class="col-span-12 lg:col-span-3">

        </div>
        <div class="col-span-12 lg:col-span-6 order-2 lg:order-none">
          <div class="flex justify-center lg:justify-between">
            <a class="btn-submit-v1 btn-submit-v2 btn-submit-v2-full btn-submit-v2-categories w-full lg:w-auto" href="./">Show more <img src="./images/icon-arrow-down-white.svg"></a>
            <a class="btn-submit-v1 btn-submit-v2 btn-submit-v2-categories hidden lg:flex" href="./">Show all <img src="./images/icon-btn-black.svg"></a>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-3 text-center lg:text-right order-1 lg:order-none">
          <p class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[10px] lg:mb-0">Showing: 1-47 of 873</p>
        </div>
      </div>

</section>

<?php include('./footer.php'); ?>