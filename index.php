<?php include('./header.php'); ?>
<!--<?php include('./header-loggedin.php'); ?> -->

<section class="intro-container-mobile container md:min-w-[100vw]">
  <div class="grid grid-cols-12 md:gap-4">
    <div class="col-span-12 lg:col-span-3 hidden lg:block">
      <div class="md:hidden">
        <div class="flex flex-wrap md:hidden mt-[18px]">
          <a href="" class="flex items-center text-[14px] leading-[20px] tracing-[-1%] mb-[20px] w-full max-w-[50%]"><img src="./images/icon-profile-mobile.svg" class="mr-[8.6px]"/> Login / Register</a>
          <a href="" class="flex items-center text-[14px] leading-[20px] tracing-[-1%] mb-[20px] w-full max-w-[50%]"><img src="./images/icon-loyalty-mobile.svg" class="mr-[8.6px]"/> Loyalty program</a>
          <a href="" class="flex items-center text-[14px] leading-[20px] tracing-[-1%] mb-[20px] w-full max-w-[50%]"><img src="./images/icon-liked-mobile.svg" class="mr-[8.6px]"/> Liked items</a>
          <a href="" class="flex items-center text-[14px] leading-[20px] tracing-[-1%] mb-[20px] w-full max-w-[50%]"><img src="./images/icon-offers-mobile.svg" class="mr-[8.6px]"/> Offers</a>
        </div>
        <hr class="border-[#E2E1E1] mb-[11px]"/>
        <h2 class="dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase text-[#626262] text-center mb-[11px]">Categories</h2>
      </div>
      <ul class="md:mt-[24px] list-intro">
        <li class="list-show-sublist"><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</li>
        <div class="hidden toggle-btn">
          <div data-menu="auto-cosmetics-main" class="btn-show-categories-menu bg-[#D9F5E6] rounded-[20px] py-[7px] pl-[17px] w-full flex items-center mb-[14px] dm-sans-bold"><img class="mr-[9.7px]" src="./images/icon-right.png"/> Auto accessories & supplies</div>
        </div>
        </li>
        <li class="list-show-sublist"><img src="./images/icon-right.png"/> Auto accessories & supplies</li>
        <div class="hidden toggle-btn">
          <div data-menu="auto-accesories-main" class="btn-show-categories-menu bg-[#D9F5E6] rounded-[20px] py-[7px] pl-[17px] w-full flex items-center mb-[14px] dm-sans-bold"><img class="mr-[9.7px]" src="./images/icon-right.png"/> Auto accessories & supplies</div>
        </div>
        </li>
        <li><img src="./images/icon-right.png"/> Auto body repair materials</li>
        <li class="list-show-sublist"><img src="./images/icon-right.png"/> Auto tools & supplies</li>
        <div class="hidden toggle-btn">
          <div data-menu="auto-tools-supplies-main" class="btn-show-categories-menu bg-[#D9F5E6] rounded-[20px] py-[7px] pl-[17px] w-full flex items-center mb-[14px] dm-sans-bold"><img class="mr-[9.7px]" src="./images/icon-right.png"/> Batteries</div>
        </div>
        </li>
        <li><img src="./images/icon-right.png"/> Batteries</li>
        <li class="list-show-sublist"><img src="./images/icon-right.png"/> Batteries</li>
        <div class="hidden toggle-btn">
          <div data-menu="batteries-main" class="btn-show-categories-menu bg-[#D9F5E6] rounded-[20px] py-[7px] pl-[17px] w-full flex items-center mb-[14px] dm-sans-bold"><img class="mr-[9.7px]" src="./images/icon-right.png"/> Batteries</div>
        </div>
        </li>
        <li><img src="./images/icon-right.png"/> Oils, additives, coolants</li>
        <li><img src="./images/icon-right.png"/> Wheel repair tools & supplies longer longer category</li>
        <li><img src="./images/icon-right.png"/> Seasonal items</li>
        <li><img src="./images/icon-right.png"/> Sprays, cleaners, greases</li>
        <li><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</li>
        <li><img src="./images/icon-right.png"/> Work safety</li>
        <li><img src="./images/icon-right.png"/> Home fragrances, Household chemicals</li>
        <li class="list-show-sublist"><img src="./images/icon-right.png"/> Outlet items</li>
        <div class="hidden toggle-btn">
          <div data-menu="outlet-items-main" class="btn-show-categories-menu bg-[#E9E0FD] rounded-[20px] py-[7px] pl-[17px] w-full flex items-center mb-[14px] dm-sans-bold"><img class="mr-[9.7px]" src="./images/icon-right.png"/> Auto accessories & supplies</div>
        </div>
        </li>
        <li><img src="./images/icon-right.png"/> Battery service register</li>
      </ul>
    </div>
    <div class="col-span-12 lg:col-span-9 relative">
        <!-- category menu -->

        <div class="auto-accesories-main hidden desktop-category-menu">
          <div class="flex min-w-[839px] w-full">
            <div class="flex-1 pr-[30px] h-full"> 
              <div class="flex flex-col justify-between h-full">
                <ul class="list-intro list-intro-last">
                  <li><a href=""><img src="./images/icon-right.png"/> Cars & vans</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Motorcycles</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Lawn movers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Boats & Campers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Wheelchairs</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Small & Coin baterries</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Outlet items</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Sprays, cleaners, greases</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                </ul>
              </div>
            </div>
            <div class="flex-1 pl-[30px]">

                <ul class="list-intro list-intro-last">
                  <li><a href=""><img src="./images/icon-right.png"/> Cars & vans</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Motorcycles</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Lawn movers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Boats & Campers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Wheelchairs</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Small & Coin baterries</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Outlet items</a></li>
                </ul>

            </div>
          </div>
        </div>

        <div class="auto-cosmetics-main hidden desktop-category-menu">
          <div class="flex min-w-[839px] w-full">
            <div class="flex-1 pr-[30px] border-r-[1px] border-[#E2E1E1] h-full"> 
              <div class="flex flex-col justify-between h-full min-h-[663px]">
                <ul class="list-intro list-intro-last">
                  <li><a href=""><img src="./images/icon-right.png"/> Cars & vans</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Motorcycles</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Lawn movers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Boats & Campers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Wheelchairs</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Small & Coin baterries</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Outlet items</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Sprays, cleaners, greases</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                </ul>
              </div>
            </div>
            <div class="flex-1 pl-[30px]">
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%]">Autokosmetikai LOREM IPSUM -25%</h3>
                <p class="text-[14px] leading-[22px] mb-[21px] ">su kodu <span class="text-[#FF6E35] font-bold underline">25OFF</span></p>
              </div>
              <hr class="border-[#E2E1E1] mb-[27px]"/>
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%]">Autokosmetikai LOREM IPSUM -25%</h3>
                <a class="flex max-w-fit items-center justify-center mt-[10px] min-w-[175px] h-[35px] border-[2px] border-black dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] uppercase" href="">Register <img class="ml-[10px]" src="./images/icon-right-gray.svg"/></a>
              </div>
            </div>
          </div>
        </div>

        <div class="auto-tools-supplies-main hidden desktop-category-menu">
          <div class="flex min-w-[839px] w-full">
            <div class="flex-1 pr-[30px] border-r-[1px] border-[#E2E1E1] h-auto"> 
              <div class="flex flex-col justify-between h-full min-h-[663px]">
                <ul class="mb-[65px] list-intro">
                  <li><a href=""><img src="./images/icon-right.png"/> Cars & vans</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Motorcycles</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Lawn movers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Boats & Campers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Wheelchairs</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Small & Coin baterries</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Outlet items</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Sprays, cleaners, greases</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                </ul>
                <div>
                  <a class="w-full bg-[#D9F5E6] rounded-[20px] min-h-[35px] dm-sans-bold px-[15px] text-[16px] leading-[22px] tracing-[-1%] flex items-center justify-between mb-[15px]">Good to know <img src="./images/icon-right-gray.svg"/></a>
                  <a class="w-full bg-[#D9F5E6] rounded-[20px] min-h-[35px] dm-sans-bold px-[15px] text-[16px] leading-[22px] tracing-[-1%] flex items-center justify-between">Battery service register <img src="./images/icon-right-gray.svg"/></a>
                </div>
              </div>
            </div>
            <div class="flex-1 pl-[30px]">
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%]">Autokosmetikai LOREM IPSUM -25%</h3>
                <p class="text-[14px] leading-[22px] mb-[21px] ">su kodu <span class="text-[#FF6E35] font-bold underline">25OFF</span></p>
              </div>
              <hr class="border-[#E2E1E1] mb-[27px]"/>
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[13px]">Autokosmetikai LOREM IPSUM -25%</h3>
                <a class="btn-submit-v1 max-w-[175px]" href="./">Register <img src="./images/icon-btn-black.svg"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="batteries-main hidden desktop-category-menu">
          <div class="flex min-w-[839px] w-full">
            <div class="flex-1 pr-[30px] border-r-[1px] border-[#E2E1E1] h-auto"> 
              <div class="flex flex-col justify-between h-full min-h-[663px]">
                <ul class="mb-[65px] list-intro">
                  <li><a href=""><img src="./images/icon-right.png"/> Cars & vans</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Auto cosmetics & air fresheners</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Motorcycles</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Lawn movers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Boats & Campers</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Wheelchairs</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Small & Coin baterries</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Outlet items</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Sprays, cleaners, greases</a></li>
                  <li><a href=""><img src="./images/icon-right.png"/> Tapes, adhesives, sealants</a></li>
                </ul>
                <div>
                  <a href="" class="rounded-[8px] mb-[10px] border-[2px] border-[#6A31F7] py-[10px] px-[19px] flex items-start justify-between">
                    <div class="flex">
                      <img src="./images/icon-good-toknow.svg" class="mr-[20px]"/>
                      <p class="dm-sans-bold text-[16px] leading-[20px] text-[#6A31F7]">Good to know</p>
                    </div>
                    <img src="./images/icon-btn-right2.svg"/>
                  </a>
                  <a href="" class="rounded-[8px] border-[2px] border-[#6A31F7] py-[10px] px-[19px] flex items-start justify-between">
                    <div class="flex">
                      <img src="./images/icon-battery.svg" class="mr-[20px]"/>
                      <p class="dm-sans-bold text-[16px] leading-[20px] text-[#6A31F7]">Battery Service</p>
                    </div>
                    <img src="./images/icon-btn-right2.svg"/>
                  </a>
                </div>
              </div>
            </div>
            <div class="flex-1 pl-[30px]">
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%]">Autokosmetikai LOREM IPSUM -25%</h3>
                <p class="text-[14px] leading-[22px] mb-[21px] ">su kodu <span class="text-[#FF6E35] font-bold">25OFF</span></p>
              </div>
              <hr class="border-[#E2E1E1] mb-[27px]"/>
              <div>
                <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
                <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[15px]">Professional battery service | Vilnius</h3>
                <a class="btn-submit-v1 max-w-[175px]" href="./">Register <img src="./images/icon-btn-black.svg"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="outlet-items-main hidden desktop-category-menu">

          <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] max-w-[359px]">
              <a class="flex items-center justify-between w-full h-[37px] bg-[#E9E0FD] rounded-[20px] px-[17px] dm-sans-bold text-[20px] tracing-[-1%]">Battery check 
                  <img src="./images/icon-right-gray.svg"/>
              </a>
              <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 9 €</p>
          </div>

          <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] max-w-[359px]">
              <a class="flex items-center justify-between w-full h-[37px] bg-[#E9E0FD] rounded-[20px] px-[17px] dm-sans-bold text-[20px] tracing-[-1%]">Battery check 
                  <img src="./images/icon-right-gray.svg"/>
              </a>
              <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 9 €</p>
          </div>

          <div class="border-[#E2E1E1] border-b-[1px] mb-[63px] max-w-[359px]">
              <a class="flex items-center justify-between w-full h-[37px] bg-[#E9E0FD] rounded-[20px] px-[17px] dm-sans-bold text-[20px] tracing-[-1%]">Battery check 
                  <img src="./images/icon-right-gray.svg"/>
              </a>
              <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 9 €</p>
          </div>

          <div>
            <img src="./images/bg-image3.jpg" class="mb-[10px] w-full rounded-[8px]"/>
            <h3 class="dm-sans-bold text-[20px] tracing-[-1%]">Autokosmetikai LOREM IPSUM -25%</h3>
            <p class="text-[14px] leading-[22px] mb-[5px] ">su kodu <span class="text-[#FF6E35] font-bold underline">25OFF</span></p>
          </div>

        </div>
      <!-- category menu -->

      <div class="swiper intro-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="bg-cover-inner" style="background-image: url('./images/image-intro.jpg')">
              <div class="bg-cover">
                <h3>Excellence for Experts. Since 1968.</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".intro-swiper", {
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
            },
          });
        </script>


    </div>
  </div>
</section>

<section class="container !pr-0 md:min-w-[100vw] lg:hidden">

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

<section class="container md:min-w-[100vw] lg:hidden">
    <ul class="mb-[23px] mt-[28px] list-intro list-intro-v2 list-intro-v2-mobile">
        <li class="list-intro-active"><a class="bg-[#FFE9E1] pl-[13px] pr-[5px]"><img class="hidden" src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a class="bg-[#FFE9E1] pl-[13px] pr-[5px]"><img class="hidden" src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li class="list-intro-active"><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
    </ul>
    <hr class="border-[#9E9D9D] mb-[10px]"/>
    <button class="dm-mono-medium text-[16px] leading-[21px] w-full tracking-[3%] uppercase flex items-center justify-center mb-[26px]">More categories <img src="./images/icon-plus-gray.svg" class="ml-[8px]"></button>
    
    <button class="dm-sans-bold mb-[25px] text-[16px] min-h-[31px] leading-[22px] flex items-center justify-between rounded-[20px] bg-[#FFE9E1] w-full pl-[18px] pr-[10px]">
      <p>Good to know</p>
      <img src="./images/icon-account-right.svg"/>
    </button>
    <button class="dm-sans-bold mb-[25px] text-[16px] min-h-[31px] leading-[22px] flex items-center justify-between rounded-[20px] bg-[#FFE9E1] w-full pl-[18px] pr-[10px]">
      <p>Battery service register</p>
      <img src="./images/icon-account-right.svg"/>
    </button>
  </section>

<section class="container md:min-w-[100vw] mt-[30px]">
  <div class="hr-body mb-[13px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>
  
  <h2 class="section-title mb-[23px]">Spring Essentials</h2>

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

  <div class="hidden lg:grid grid-cols-10 gap-[8px] gap-y-[10px]">
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
              <p class="text-[14px] leading-[22px] mb-[15px]">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
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
              <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] dm-sans-bold underline">10OFF</span></p>
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

  <div class="flex justify-center mt-[29px] lg:mt-0">
    <a class="btn-submit-v1 dm-mono-medium" href="./">see all items <img src="./images/icon-btn-black.svg"/></a>
  </div>
  
</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[13px] mt-[45px] lg:mt-[87px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[13px] lg:mb-[23px]">New arrivals</h2>
  
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
  
  <div class="hidden lg:grid grid-cols-10 gap-[8px] gap-y-[10px] mt-[45px]">
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

  <div class="flex justify-center mt-[29px] lg:mt-0">
    <a class="btn-submit-v1" href="./">see all items <img src="./images/icon-btn-black.svg"/></a>
  </div>

</section>

<section class="bg-[#D9F5E6] container md:min-w-[100vw] pt-[30px] pb-[21px] mt-[39px] lg:mt-[86px]">
    <div class="flex justify-between icon-box-main-custom">
      <div class="icon-box-custom">
          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-1.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">QUICK DELIVERY</h3>
          </div>
      </div>
      <div class="icon-box-custom">
          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-2.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">FREE DELIVERY<br class="hidden lg:block"/> OVER 40€</h3>
          </div>
      </div>
      <div class="icon-box-custom">
          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-3.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">ORIGINAL<br class="hidden lg:block"/> PRODUCTS</h3>
          </div>
      </div>
      <div class="icon-box-custom">
          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-4.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">MONTHLY GIFTS</h3>
          </div>
      </div>
      <div class="icon-box-custom">
          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-5.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">REALLY GOOD<br class="hidden lg:block"/> PRICES</h3>
          </div>
      </div>
      <div class="icon-box-custom">

          <div class="hr-body hr-body-dark mb-[9px] lg:hidden">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <div class="flex items-center lg:block">
            <div class="flex justify-center">
              <img src="./images/icon-box-6.svg"/>
            </div>
            <div class="hr-body hr-body-dark mb-[9px] hidden lg:flex">
              <div class="hr-dot"></div>
              <hr class="hr-dotted"/>
            </div>
            <h3 class="dm-mono-medium">battery service<br class="hidden lg:block"/> register</h3>
          </div>
      </div>
    </div>
</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[13px] mt-[39px] lg:mt-[87px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[23px]">Most popular</h2>

  <div class="lg:hidden">

    <!-- Swiper -->
    <div class="swiper mySwiper4 custom-swiper custom-product-swiper">
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
      var swiper = new Swiper(".mySwiper4", {
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

  <div class="hidden lg:grid grid-cols-10 gap-[8px] gap-y-[10px]">
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
                <p class="font-bold text-[24px]">13.90 €</p>
              </div>
              <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-5 md:col-span-2">
        <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box product-box-code">
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

  <div class="flex justify-center mt-[29px] lg:mt-0">
    <a class="btn-submit-v1" href="./">see all items <img src="./images/icon-btn-black.svg"/></a>
  </div>

</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[7px] lg:mb-[13px] mt-[58px] lg:mt-[87px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[23px]">Seasonal</h2>

  <div class="grid grid-cols-12 gap-[8px] gap-y-[10px]">
    <div class="col-span-12 md:col-span-4">
      <div class="image-box-custom image-box-custom-dark image-box-big dm-sans-bold" style="background: url('./images/bg-image.jpg')">
          <p class="uppercase dm-mono-medium text-[15px] leading-[18px] tracing-[3%] text-white">Lorem ipsum</p>
          <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          <a class="btn-submit-v1 btn-submit-v1-white" href="./">All products </a>
      </div>
      <div class="mt-[12px] lg:hidden">
          <p class="uppercase dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Lorem ipsum</p>
          <h3 class="dm-sans-bold text-[28px] text-[#171717] mb-[14px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
          <a class="btn-submit-v1 mb-[13px] max-w-[150px]" href="./">All products </a>
      </div>
    </div>
    <div class="col-span-12 md:col-span-8">

      <div class="lg:hidden">

        <!-- Swiper -->
        <div class="swiper mySwiper5 custom-swiper custom-product-swiper">
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
          var swiper = new Swiper(".mySwiper5", {
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

      <div class="hidden lg:grid grid-cols-8 md:grid-cols-9 gap-[8px] gap-y-[10px]">
          <div class="col-span-4 md:col-span-3">
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
          <div class="col-span-4 md:col-span-3">
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
          <div class="col-span-4 md:col-span-3">
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
          <div class="col-span-4 md:col-span-3">
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
                  <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold">10OFF</span></p>
                  <button class="invisible w-full uppercase rounded-[20px] min-h-[35px] text-white bg-black flex justify-center items-center text-[16px] font-medium leading-[21px] tracking-[3%]">Add to cart <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-4 md:col-span-3">
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
          <div class="col-span-4 md:col-span-3">
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
      </div>

    </div>
  </div>

  <div class="flex justify-center mt-[29px] lg:mt-0">
    <a class="btn-submit-v1" href="./">see all items <img src="./images/icon-btn-black.svg"/></a>
  </div>

</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[7px] lg:mb-[13px] mt-[58px] lg:mt-[87px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[12px] lg:mb-[23px]">Good to know</h2>

  <div class="grid grid-cols-8 gap-[8px] md:gap-x-[50px]">
    <div class="col-span-8 lg:col-span-4">
      <div class="mb-[12px] md:mb-0">
        <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]"/>
        <p class="text-[#00BB5A] uppercase dm-mono-medium text-[12px] lg:text-[15px] leading-15px] lg:leading-[18px] tracking-[3%]">featured</p>
        <h3 class="text-[28px] lg:text-[45px] lg:leading-[55px] tracking-[-1%] mb-[8px] lg:mb-[19px] font-bold">How to keep tools in good shape - preparing for winter</h3>
        <a href="" class="text-[#626262] font-bold text-[14px] lg:text-[16px] leading-[20px] lg:leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
      </div>
    </div>
    <div class="col-span-8 lg:col-span-4">
      <div class="grid grid-cols-12 gap-x-[20px] lg:block">
        <div class="col-span-6 lg:block lg:col-span-12">
          <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
            <div class="col-span-12 lg:col-span-5">
              <img src="./images/bg-image2.jpg" class="w-full mb-[19px] rounded-[8px]"/>
            </div>
            <div class="col-span-12 lg:col-span-7">
              <p class="text-[#00BB5A] uppercase dm-mono-medium text-[15px] leading-[18px] tracking-[3%] mb-[12px]">featured</p>
              <h3 class="text-[16px] md:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
              <a href="" class="text-[#626262] font-bold text-[16px] leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
            </div>
          </div>
        </div>
        <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block"/>
        <div class="col-span-6 lg:block lg:col-span-12">
          <div>
            <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
              <div class="col-span-12 lg:col-span-5">
                <img src="./images/bg-image2.jpg" class="w-full mb-[19px] rounded-[8px]"/>
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
      <hr class="border-[#E2E1E1] mb-[15px] hidden lg:block"/>
      <div class="hidden lg:block">
        <div class="grid grid-cols-12 gap-[8px] md:gap-x-[29px]">
          <div class="col-span-12 md:col-span-5">
            <img src="./images/bg-image2.jpg" class="w-full mb-[20px] rounded-[8px]"/>
          </div>
          <div class="col-span-12 md:col-span-7">
            <p class="text-[#00BB5A] uppercase dm-mono-medium text-[15px] leading-[18px] tracking-[3%] mb-[12px]">featured</p>
            <h3 class="text-[16px] md:text-[28px] tracking-[-1%] mb-[9px] font-bold">How to keep tools in good shape - preparing for winter</h3>
            <a href="" class="text-[#626262] font-bold text-[16px] leading-[22px] tracking-[-1%] flex items-center"><img src="./images/icon-right-gray.svg" class="mr-[8px]"/> Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-center mt-[26px] lg:mt-[30px]">
    <a class="btn-submit-v1" href="./">More articles <img src="./images/icon-btn-black.svg"/></a>
  </div>

</section>

<section class="container md:min-w-[100vw]">
  <div class="hr-body mb-[13px] mt-[47px] lg:mt-[87px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[23px]">We represent</h2>

  <div class="grid grid-cols-12 lg:grid-cols-10 gap-[10px] lg:gap-[46px] lg:gap-x-[92px] brand-logo-grid">
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
    <div class="col-span-4 lg:col-span-2">
      <img src="./images/brand-logo.png"/>
    </div>
  </div>

  <div>
    <hr class="mt-[27px] lg:mt-[32px] bg-[#9E9D9D] mb-[10px]"/>

    <div class="flex items-center justify-center">
      <a href="" class="dm-mono-medium text-[16px] leading-[21px] tracking-[3%] uppercase flex items-center mb-[39px] lg:mb-[76px]">More brands <img src="./images/icon-plus-gray.svg" class="ml-[8px]"/></a>
    </div>
  </div>

</section>

<?php include('./footer.php'); ?>