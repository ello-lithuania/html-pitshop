<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px] mb-[43px] lg:mb-[71px]">

    <div class="flex items-center mb-[10px] lg:mb-[25px]">
        <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
        <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
        <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline"> Good to know</a>
    </div>

    <div class="hr-body mb-[8px]">
        <div class="hr-dot"></div>
        <hr class="hr-dotted"/>
    </div>

    <h1 class="section-title mb-[11px] lg:mb-[23px]">Featured articles</h1>

    <div class="grid grid-cols-8 gap-[8px] md:gap-x-[50px]">
      <div class="col-span-8 lg:col-span-4">
        <div class="mb-[12px] lg:mb-0">
          <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]"/>
          <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%]">featured</p>
          <h3 class="text-[28px] lg:text-[45px] lg:leading-[55px] tracking-[-1%] mb-[8px] lg:mb-[19px] font-bold">How to keep tools in good shape - preparing for winter</h3>
          <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
        </div>
      </div>
      <div class="col-span-8 lg:col-span-4">

      <div class="flex gap-x-[20px] lg:block">
        <div class="flex-1">
            <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
            <div class="col-span-12 lg:col-span-5">
                <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[19px] rounded-[8px]"/>
            </div>
            <div class="col-span-12 lg:col-span-7">
                <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
            </div>
            </div>
        </div>
        <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block"/>

        <div class="flex-1">
            <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
            <div class="col-span-12 lg:col-span-5">
                <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[19px] rounded-[8px]"/>
            </div>
            <div class="col-span-12 lg:col-span-7">
                <p class="text-[#00BB5A] uppercase dm-mono-medium  text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
            </div>
            </div>
        </div>
      </div>  

      <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block"/>
      <div class="hidden lg:block">
        <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
          <div class="col-span-12 lg:col-span-5">
            <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]"/>
          </div>
          <div class="col-span-12 lg:col-span-7">
            <p class="text-[#00BB5A] uppercase dm-mono-medium text-[15px] leading-[18px] tracking-[3%] mb-[12px]">featured</p>
            <h3 class="text-[16px] md:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
            <a href="" class="text-[#626262] font-bold text-[16px] leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="flex justify-center mt-[26px] lg:hidden">
        <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"></a>
    </div>

</section>

<section class="container md:min-w-[100vw] mb-[52px] lg:mb-[62px]">
    <div class="hr-body mb-[8px]">
        <div class="hr-dot"></div>
        <hr class="hr-dotted"/>
    </div>

    <h2 class="section-title mb-[17px]">Explore our product lines</h2>

    <!-- Demo styles -->
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }
    </style>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="./" style="background:url('./images/bg-thumbnail.svg')" class="image-effect-main block rounded-[8px]">
                <div class="w-full image-effect-overlay dm-sans-bold min-w-[108px] text-[16px] lg:text-[20px] tracing-[-1%] flex items-end text-white min-h-[131px] lg:min-h-[248px] p-[9px] lg:p-[21px] rounded-[8px]">Exterior</div>
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
        spaceBetween: 18,
      });
    </script>

</section>

<section class="container md:min-w-[100vw] mb-[42px] lg:mb-[62px]">
    <div class="hr-body mb-[8px]">
        <div class="hr-dot"></div>
        <hr class="hr-dotted"/>
    </div>

    <h2 class="section-title mb-[17px]">Problem solution</h2>

    <div class="grid grid-cols-12 mb-[32px] lg:mb-0 gap-[20px] lg:gap-x-[52px]">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-[20px] lg:gap-x-[52px] mt-[20px] mb-[20px] lg:mb-[55px]">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center lg:mb-[72px]">
        <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"></a>
    </div>

</section>

<section class="container md:min-w-[100vw] mb-[42px] lg:mb-[62px]">
    <div class="hr-body mb-[8px]">
        <div class="hr-dot"></div>
        <hr class="hr-dotted"/>
    </div>

    <h2 class="section-title mb-[17px]">General / FAQ</h2>

    <div class="grid grid-cols-12 gap-[20px] lg:gap-x-[52px] mb-[32px] lg:mb-0">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-[20px] lg:gap-x-[52px] mt-[20px] mb-[20px] lg:mb-[55px]">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"></a>
    </div>

</section>

<section class="container md:min-w-[100vw] mb-[44px] lg:mb-[107px]">
    <div class="hr-body mb-[8px]">
        <div class="hr-dot"></div>
        <hr class="hr-dotted"/>
    </div>

    <h2 class="section-title mb-[17px]">Pro detailing</h2>

    <div class="grid grid-cols-12 gap-[20px] lg:gap-x-[52px] mb-[32px] lg:mb-0">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
                <hr class="border-[#E2E1E1] hidden lg:block"/>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-[20px] lg:gap-x-[52px] mt-[20px] mb-[20px] lg:mb-[55px]">
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-6">
            <div>
                <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
                    <div class="col-span-12 md:col-span-5">
                    <img src="./images/bg-image2.jpg" class="w-full mb-[10px] lg:mb-[20px] rounded-[8px]"/>
                    </div>
                    <div class="col-span-12 md:col-span-7">
                    <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-[15px] lg:leading-[18px] tracking-[3%] mb-[12px]">featured</p>
                    <h3 class="text-[14px] lg:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
                    <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"></a>
    </div>

</section>

<?php include('./footer.php'); ?>