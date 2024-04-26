<?php include('./header.php'); ?>



<section class="container md:min-w-[100vw]">

  <div class="grid grid-cols-11 lg:mt-[60px] mt-[30px] lg:mb-[84.5px]">
    <div class="col-span-11 lg:col-span-2 lg:pr-[10px] lg:border-r-[1px] border-[#E2E1E1] mb-[30px] lg:mb-0">
      <ul class="left-menu-list-main">
        <li class="active"><button data-item="account-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Account</button></li>
        <li><button data-item="bought-items-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Bought items</button></li>
        <li><button data-item="ordered-items-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Orders</button></li>
        <li><button data-item="liked-items-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Liked items</button></li>
        <li><button data-item="loyalty-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Loyalty</button></li>
        <li><button data-item="loyalty-main2" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Loyalty 2</button></li>
        <li><button data-item="subscriptions-main" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] rounded-[20px] py-[8px] px-[17px] flex items-center w-full"><img class="mr-[9px]" src="./images/icon-list-dot.svg"/> Subscriptions</button></li>
      </ul>
    </div>
    <div class="col-span-11 lg:col-span-9 lg:pl-[30px]">
      <div class="subscriptions-main hidden">
        <hr class="border-[#E2E1E1] mb-[11px]"/>
        <div class="flex justify-between checkbox-btn-toggle-main">
          <div>
            <label class="inline-flex items-center cursor-pointer checkbox-btn-toggle">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative min-w-[34px] w-[34px] h-[17px] bg-[#E2E1E1] outline-none rounded-full peer peer-checked:after:right-[2px] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-[13px] after:w-[13px] after:transition-all peer-checked:bg-[#6A31F7] mr-[15px]"></div>
              <span class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] lg:pr-[140px]">I agree to receive email general offers of TOBIS JSC and its partners by mail.</span>
            </label>
          </div>
          <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] min-w-[131px]">Accepted on 2020.11.20</p>
        </div>

        <hr class="border-[#E2E1E1] mt-[12px] mb-[9px]"/>

        <div class="flex justify-between checkbox-btn-toggle-main">
          <div>
            <label class="inline-flex items-center cursor-pointer checkbox-btn-toggle">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative min-w-[34px] w-[34px] h-[17px] bg-[#E2E1E1] outline-none rounded-full peer peer-checked:after:right-[2px] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-[13px] after:w-[13px] after:transition-all peer-checked:bg-[#6A31F7] mr-[15px]"></div>
              <span class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] lg:pr-[140px]">I agree to receive email general offers of TOBIS JSC and its partners by phone.</span>
            </label>
          </div>
          <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] min-w-[131px]">Accepted on 2020.11.20</p>
        </div>

        <hr class="border-[#E2E1E1] mt-[12px] mb-[9px]"/>

        <div class="flex justify-between checkbox-btn-toggle-main">
          <div>
            <label class="inline-flex items-center cursor-pointer checkbox-btn-toggle">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative min-w-[34px] w-[34px] h-[17px] bg-[#E2E1E1] outline-none rounded-full peer peer-checked:after:right-[2px] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-[13px] after:w-[13px] after:transition-all peer-checked:bg-[#6A31F7] mr-[15px]"></div>
              <span class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] lg:pr-[140px]">I agree to receive email offers by TOBIS JSC and its partners tailored to me personally by mail and phone, taking into account the products I viewed, order and purchase information and the data provided.</span>
            </label>
          </div>
          <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] min-w-[131px]">Accepted on 2020.11.20</p>
        </div>

        <hr class="border-[#E2E1E1] mt-[12px] mb-[9px]"/>

        <div class="flex justify-between checkbox-btn-toggle-main">
          <div>
            <label class="inline-flex items-center cursor-pointer checkbox-btn-toggle">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative min-w-[34px] w-[34px] h-[17px] bg-[#E2E1E1] outline-none rounded-full peer peer-checked:after:right-[2px] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-[13px] after:w-[13px] after:transition-all peer-checked:bg-[#6A31F7] mr-[15px]"></div>
              <span class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] lg:pr-[140px]">I agree to receive email mail requests to evaluate purchased goods from TOBIS JSC.</span>
            </label>
          </div>
          <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] min-w-[131px]">Accepted on 2020.11.20</p>
        </div>
      
        <hr class="border-[#E2E1E1] mt-[12px] mb-[9px]"/>

        <div class="flex justify-between checkbox-btn-toggle-main">
          <div>
            <label class="inline-flex items-center cursor-pointer checkbox-btn-toggle">
              <input type="checkbox" value="" class="sr-only peer">
              <div class="relative min-w-[34px] w-[34px] h-[17px] bg-[#E2E1E1] outline-none rounded-full peer peer-checked:after:right-[2px] peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-[13px] after:w-[13px] after:transition-all peer-checked:bg-[#6A31F7] mr-[15px]"></div>
              <span class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] lg:pr-[140px]">I agree to receive email mail surveys to assess the quality of TOBIS JSC.</span>
            </label>
          </div>
          <p class="text-[#626262] abel text-[14px] leading-[20px] tracing-[-1%] min-w-[131px]">Accepted on 2020.11.20</p>
        </div>

      </div>

      <!-- -->
      <div class="account-main lg:px-[70px] xxl:px-[130px]">
        <div class="grid grid-cols-12 gap-y-[30px] lg:gap-x-[30px] xxl:gap-x-[79px] xxl:gap-y-[52px] mb-[43px]">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> You</div>
              <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Automobilių dažymo centras, UAB<br/>Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
              <a href="mailto:klaipeda.kebulai@gmail.com" class="abel text-[16px] tracing-[-1%] underline">klaipeda.kebulai@gmail.com</a>
              <a href="tel:+37067077060" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] ">+37067077060</a>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Your manager</div>
              <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Darius Ruzgaila<br/>Sales manager</p>
              <a href="mailto:d.ruzgaila@tobis.lt" class="abel text-[16px] tracing-[-1%] underline">d.ruzgaila@tobis.lt</a>
              <a href="tel:+37068638813" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] ">+37068638813</a>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Your billing info</div>
              <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Automobilių dažymo centras, UAB<br/>Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
              <a href="mailto:klaipeda.kebulai@gmail.com" class="abel text-[16px] tracing-[-1%] underline">klaipeda.kebulai@gmail.com</a>
              <a href="tel:+37067077060" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] ">+37067077060</a>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Payment info</div>
              <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Payment in 30 days.</p>
              <p class="abel text-[16px] tracing-[-1%] leading-[22px] mb-[6px]">Your credit limit is xxx €.</p>
              <div class="flex items-center justify-between bg-[#6A31F7] text-white underline rounded-[8px] min-h-[80px] px-[10px] text-[16px] leading-[22px] tracing-[-1%] abel">Your debt to this day is xxx €. Future orders won’t be executed until you pay the debt. <img class="ml-[10px]" src="./images/icon-info-box.svg"/></div>
            </div>
          </div>
        </div>

        <hr class="border-[#E2E1E1] mb-[33px]"/>

        <div class="grid grid-cols-12 lg:gap-[30px] lg:gap-x-[79px] lg:gap-y-[52px] mb-[41px]">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Login info <a href=""><img class="ml-[5px] " src="./images/icon-pencil.svg"/></a></div>
              <div class="flex md:items-center flex-col md:flex-row mb-[20px] md:mb-[3px]">
                <p class="min-w-[109px] text-[#626262] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] lg:mr-[31px]">Email</p>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">klaipeda.kebulai@gmail.com</p>
              </div>
              <div class="flex md:items-center flex-col md:flex-row mb-[20px] md:mb-[3px]">
                <p class="min-w-[109px] text-[#626262] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] lg:mr-[31px]">Ph. number</p>
                <a href="tel:+37067077060" class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">+37067077060</a>
              </div>
              <div class="flex md:items-center flex-col md:flex-row mb-[20px] md:mb-[3px]">
                <p class="min-w-[109px] text-[#626262] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] lg:mr-[31px]">Password</p>
                <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">******</p>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-col">
              <div class="flex items-center mt-[8px] text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Show prices at this eshop</div>
              <div class="flex">
                <a class="w-[110px] bg-[#6A31F7] text-white min-h-[37px] rounded-[8px] flex items-center justify-center mr-[10px] abel text-[14px] leading-[20px] tracing-[-1%]">with VAT</a>
                <a class="w-[110px] bg-[#E2E1E1] min-h-[37px] rounded-[8px] flex items-center justify-center abel text-[14px] leading-[20px] tracing-[-1%]">without VAT</a>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#E2E1E1] mb-[36px]"/>

        <div class="flex items-center text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[16px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Your delivery address <a href=""><img class="ml-[5px] " src="./images/icon-pencil.svg"/></a></div>

        <div class="grid grid-cols-12 md:gap-[27px] gap-y-[30px] mb-[37px] button-toggle-checked-main">
            <div class="col-span-12 lg:col-span-4">
                <div data-tab="lt" class="button-toggle-checked3 active bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Lithuania</b></p>
                    </div>
                    <img class="btn-toggle-active " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div data-tab="lv" class="button-toggle-checked3 bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Latvia</b></p>
                    </div>
                    <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div data-tab="es" class="button-toggle-checked3 bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Estonia</b></p>
                    </div>
                    <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
            </div>
        </div>

        <div class="lt">
          <div class="grid grid-cols-12 md:gap-[27px] gap-y-[30px] mb-[37px]">
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input checked id="default-radio-11" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-11" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-12" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-12" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-13" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-13" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
          </div>
        </div>

        <div class="lv hidden">
          <div class="grid grid-cols-12 md:gap-[27px] gap-y-[30px] mb-[37px]">
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input checked id="default-radio-21" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-21" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-22" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-22" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-23" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-23" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
          </div>
        </div>

        <div class="es hidden">
          <div class="grid grid-cols-12 md:gap-[27px] gap-y-[30px] mb-[37px]">
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input checked id="default-radio-1" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-1" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-2" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
              <div class="flex items-center group">
                  <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-[15px] h-[15px] text-[#626262] bg-[#626262] border-[#626262] checked:accent-[#6A31F7] rounded-full mr-[20px] outline-none peer">
                  <label for="default-radio-3" class="text-[16px] leading-[22px] peer-checked:text-[#6A31F7] peer-checked:font-bold">
                    Automobilių dažymo centras, UAB<br/>
                    Klaipėdos Jūros 187- 8 korp. Klaipėda 92195<br/>
                    Klaipeda.kebulai@gmail.com<br/>
                    +37067077060<br/>
                  </label>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#E2E1E1] mb-[25px]"/>

        <div class="flex items-center text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[34px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Favorite delivery address <a href=""><img class="ml-[5px] " src="./images/icon-pencil.svg"/></a></div>

        <div class="grid grid-cols-11 gap-[30px] mb-[34px] items-center">
          <div class="col-span-11 lg:col-span-3 text-center lg:text-left">
            <img src="./images/icon-pickup.svg" class="mx-auto mb-[10px] lg:mx-0"/>
            <h3 class="text-[#6A31F7] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[16px]">Local pickup</h3>
            <p class="text-[12px] leading-[16px] tracing-[-1%]"><b>Vilnius</b>, Tobis Shop, Savanorių 187-8</p>
          </div>
          <div class="col-span-11 lg:col-span-1"><p class="dm-sans-bold text-[12px] leading-[22px] text-center">OR</p></div>
          <div class="col-span-11 lg:col-span-3 text-center lg:text-left">
            <img src="./images/icon-parcel.svg" class="mx-auto mb-[10px] lg:mx-0"/>
            <h3 class="text-[#6A31F7] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[16px]">Parcel machines</h3>
            <p class="text-[12px] leading-[16px] tracing-[-1%]">Vilniaus MAXIMA Laisvės paštomatas, Laisvės pr., 26</p>
          </div>
          <div class="col-span-11 lg:col-span-1"><p class="dm-sans-bold text-[12px] leading-[22px] text-center">OR</p></div>
          <div class="col-span-11 lg:col-span-3 text-center lg:text-left">
            <img src="./images/icon-courier.svg" class="mx-auto mb-[10px] lg:mx-0"/>
            <h3 class="text-[#6A31F7] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[16px]">Delivery by courier</h3>
            <p class="text-[12px] leading-[16px] tracing-[-1%]"><b>To primary address</b></p>
          </div>
        </div>

        <hr class="border-[#E2E1E1] mb-[25px]"/>

        <div class="flex items-center text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[17px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Settings & rules</div>

        <a class="lg:max-w-[50%] mb-[16px] rounded-[20px] text-[16px] leading-[22px] flex items-center justify-between px-[20px] border-[1px] border-black min-h-[37px]">Read loyalty rules <img src="./images/icon-right-gray.svg"/></a>
        <a class="lg:max-w-[50%] mb-[16px] rounded-[20px] text-[16px] leading-[22px] flex items-center justify-between px-[20px] border-[1px] border-black min-h-[37px]">Change cookie settings <img src="./images/icon-right-gray.svg"/></a>
        <a class="lg:max-w-[50%] mb-[29px] rounded-[20px] text-[16px] leading-[22px] flex items-center justify-between px-[20px] border-[1px] border-black min-h-[37px]">Read privacy policy <img src="./images/icon-right-gray.svg"/></a>

        <hr class="border-[#E2E1E1] mb-[25px]"/>

        <div class="flex items-center text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] uppercase mb-[19px]"><img src="./images/icon-dot-gray.svg" class="mr-[5px]"/> Your right to be forgotten</div>

        <p class="text-[16px] leading-[22px] mb-[19px]">If you decide to delete your account at this eshop, you can do this by clicking "delete account", you will delete the personal data processed in the account.</p>
        <p class="text-[16px] leading-[22px] mb-[19px]">Please note that if you exercise the right to be forgotten and delete your account data, we will no longer have the opportunity to restore them.</p>
        <p class="text-[16px] leading-[22px] mb-[19px]">If you decide to restore your account, you will need to re-enter the necessary personal data again.</p>

        <button class="bg-[#FF6E35] min-w-[229px] dm-mono-medium mb-[29px] rounded-[20px] text-[16px] leading-[21px] flex items-center justify-center px-[20px] min-h-[35px] uppercase text-white">Delete account <img class="ml-[10px]" src="./images/icon-next-btn.svg"></a>

      </div>

      <div class="ordered-items-main hidden">
        <div class="grid grid-cols-10 lg:grid-cols-8 gap-[30px] mb-[47px]">
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 6 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 12 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 18 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">All</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Filialas 1</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Filialas 2</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">Filialas 2</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">All</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
        </div>

        <div class="grid grid-cols-12 lg:grid-cols-7 gap-[30px] mb-[8px] hidden md:grid">
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
          <div class="col-span-1">
            <div class="flex items-center">
              <p class="uppercase text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <img class="ml-[5px]" src="./images/icon-arrow-down.svg"/>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

        <div class="grid grid-cols-12 lg:grid-cols-7 gapx-[20px] gap-[10px] lg:gap-[30px] my-[15px]">
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">#406668655</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">122.83 €</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <div class="flex items-center">
                <img class="mr-[12px]" src="./images/icon-pdf-inactive.svg"/>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Unpaid</p>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <p class="uppercase text-[14px] leading-[20px] tracing-[-1%]">ESHOP</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-12 md:col-span-1 md:flex-row">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <div class="flex items-center justify-between">
                <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Is procedded</p>
                <img class="ml-[10px]" src="./images/icon-arrow-long.svg"/>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

        <div class="grid grid-cols-12 lg:grid-cols-7 gapx-[20px] gap-[10px] lg:gap-[30px] my-[15px]">
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">#406668655</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">122.83 €</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <div class="flex items-center">
                <img class="mr-[12px]" src="./images/icon-pdf-inactive.svg"/>
                <p class="text-[#00BB5A] dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Paid</p>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <div class="flex items-center">
                <p class="uppercase text-[14px] leading-[20px] tracing-[-1%] underline">EDI</p>
                <img class="ml-[12px]" src="./images/icon-info-box.svg"/>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1 md:flex-row">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-12 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <div class="flex items-center justify-between">
                <a href="" class="rounded-[20px] bg-[#6A31F7] dm-sans-bold text-white text-[14px] leading-[20px] tracing-[-1%] min-w-[94px] min-h-[24px] flex items-center justify-center">Finished</a>
                <img class="ml-[10px]" src="./images/icon-arrow-long.svg"/>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

        <div class="grid grid-cols-12 lg:grid-cols-7 gapx-[20px] gap-[10px] lg:gap-[30px] my-[15px]">
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">#406668655</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">122.83 €</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <div class="flex items-center">
                <img class="mr-[12px]" src="./images/icon-pdf-inactive.svg"/>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Unpaid</p>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <p class="uppercase text-[14px] leading-[20px] tracing-[-1%]">ESHOP</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-12 md:col-span-1 md:flex-row">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <div class="flex items-center justify-between">
                <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Is procedded</p>
                <img class="ml-[10px]" src="./images/icon-arrow-long.svg"/>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

        <div class="grid grid-cols-12 lg:grid-cols-7 gapx-[20px] gap-[10px] lg:gap-[30px] my-[15px]">
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">#406668655</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">122.83 €</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <div class="flex items-center">
                <img class="mr-[12px]" src="./images/icon-pdf-inactive.svg"/>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Unpaid</p>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <p class="uppercase text-[14px] leading-[20px] tracing-[-1%]">ESHOP</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-12 md:col-span-1 md:flex-row">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <div class="flex items-center justify-between">
                <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Is procedded</p>
                <img class="ml-[10px]" src="./images/icon-arrow-long.svg"/>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

        <div class="grid grid-cols-12 lg:grid-cols-7 gapx-[20px] gap-[10px] lg:gap-[30px] my-[15px]">
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order nr.</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">#406668655</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order date</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Amount</p>
              <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">122.83 €</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Payment status</p>
              <div class="flex items-center">
                <img class="mr-[12px]" src="./images/icon-pdf-inactive.svg"/>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Unpaid</p>
              </div>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order source</p>
              <p class="uppercase text-[14px] leading-[20px] tracing-[-1%]">ESHOP</p>
            </div>
          </div>
          <div class="col-span-6 md:col-span-1">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Status updated</p>
              <p class="text-[14px] leading-[20px] tracing-[-1%]">2023.02.09</p>
            </div>
          </div>
          <div class="col-span-12 md:col-span-1 md:flex-row">
            <div class="flex items-center flex-col md:flex-row">
              <p class="uppercase md:hidden text-[#626262] dm-mono-medium text-[12px] leading-[15px] tracing-[3%]">Order status</p>
              <div class="flex items-center justify-between">
                <p class="dm-sans-bold text-[14px] leading-[20px] tracing-[-1%]">Is procedded</p>
                <img class="ml-[10px]" src="./images/icon-arrow-long.svg"/>
              </div>
            </div>
          </div>
        </div>

        <hr class="border-[#626262]"/>

      </div>

      <div class="bought-items-main hidden">
        
        <div class="grid grid-cols-10 lg:grid-cols-8 gap-[8px] gap-y-[10px] mb-[69px]">
          <div class="col-span-5 md:col-span-2 lg:px-[21px]">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 6 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2 lg:px-[21px]">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 12 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2 lg:px-[21px]">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 18 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
          <div class="col-span-5 md:col-span-2 lg:px-[21px]">
                <div class="chekbox-box-custom rounded-[8px] bg-[#F0EEEE] flex justify-between items-start py-[8px] px-[13px] min-h-[60px] h-full">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%]">In last 24 months</p>
                    <img class="chekbox-box-custom-imgInActive" src="./images/icon-add-gray.svg"/>
                    <img class="chekbox-box-custom-imgActive hidden" src="./images/icon-check-white.svg"/>
                </div>
          </div>
        </div>

        <div class="grid grid-cols-10 lg:grid-cols-8 gap-[8px] gap-y-[10px]">
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
                <p class="text-[14px] leading-[22px] mb-[15px] ">10% nuolaida su kodu <span class="text-[#FF6E35] font-bold">10OFF</span></p>
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

        </div>

        <div class="flex justify-center">
          <a class="btn-submit-v1 btn-submit-v2" href="./">Show more <img src="./images/icon-plus-violet.svg"/></a>
        </div>

      </div>

      <div class="liked-items-main hidden">
        
        <div class="grid grid-cols-10 lg:grid-cols-8 gap-[8px] gap-y-[10px]">
        <div class="col-span-5 md:col-span-2">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
        <div class="col-span-5 md:col-span-2">
          <div class="px-[5px] lg:px-[21px] pb-[21px] rounded-[8px] hover-box-custom product-box product-box-code">
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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
            <div class="border-hover-none border-t-[2px] b-[#E2E1E1] relative">
              <a href="" class="absolute right-0 top-[7px]"><img src="./images/icon-delete-gray.svg"/></a>
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

        </div>

        <div class="flex justify-center">
          <a class="btn-submit-v1 btn-submit-v2" href="./">Show more <img src="./images/icon-plus-violet.svg"/></a>
        </div>

      </div>

      <div class="loyalty-main2 hidden">
        <div class="hr-body mb-[13px]">
          <div class="hr-dot"></div>
          <hr class="hr-dotted"/>
        </div>

        <h2 class="dm-sans-medium mb-[7px] text-[40px] leadding-[46px] tracing-[-1%]">Lorem ipsum dolor , <span class="underline">lorem ipsum dolor</span> </h2>
        <h3 class="dm-sans-bold text-[28px] tracing-[-1%] mb-[35px]">Lorem ipsum dolor </h3>

        <div class="grid grid-cols-12 mb-[29px] gap-y-[30px] lg:gap-[30px]">
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
          <div class="col-span-12 lg:col-span-3">
            <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
          </div>
        </div>

        <div class="grid grid-cols-12 mb-[24px] gap-[17px] lg:gap-x-[40px] xxl:gap-x-[96px]">
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
          </div>
        </div>

        <hr class="border-[#E2E1E1]"/>
      </div>

      <div class="loyalty-main hidden">
          <div class="grid grid-cols-12 md:gap-[30px] gap-y-[30px] mb-[36px] ">
              <div class="col-span-12 lg:col-span-4">
                  <div class="button-toggle-checked active bg-[#F0EEEE] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p class="button-toggle-checked-underline">Active loyalty points</p>
                          <p class="button-toggle-checked-bold">217.13 = 217 gift card </p>
                      </div>
                      <img src="./images/icon-info-box.svg"/>
                      <img class="btn-toggle-active " src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
              </div>
              <div class="col-span-12 lg:col-span-4">
                  <div class="button-toggle-checked bg-[#F0EEEE] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p class="button-toggle-checked-underline">Not active loyalty points</p>
                          <p class="button-toggle-checked-bold">182.63 </p>
                      </div>
                      <img src="./images/icon-info-box.svg"/>
                      <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
              </div>
              <div class="col-span-12 lg:col-span-4">
                  <div class="button-toggle-checked bg-[#F0EEEE] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p class="button-toggle-checked-underline">Used loyalty points</p>
                          <p class="button-toggle-checked-bold">149 </p>
                      </div>
                      <img src="./images/icon-info-box.svg"/>
                      <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
              </div>
          </div>
          <div class="grid grid-cols-12 md:gap-[30px] gap-y-[30px] mb-[19px] ">
              <div class="col-span-12 lg:col-span-4">
                <p class="text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] mb-[10px] uppercase">Order nr.</p>
                <hr class="border-[#626262] mb-[16px]"/>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-7">
                    <div class="flex items-center">
                      <img src="./images/icon-pdf-active.svg" class="mr-[10px]"/>
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-5">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">100.73 €</p>
                  </div>
                </div>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-7">
                    <div class="flex items-center">
                      <img src="./images/icon-pdf-active.svg" class="mr-[10px]"/>
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-5">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">100.73 €</p>
                  </div>
                </div>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-7">
                    <div class="flex items-center">
                      <img src="./images/icon-pdf-active.svg" class="mr-[10px]"/>
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-5">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">100.73 €</p>
                  </div>
                </div>
              </div>
              <div class="col-span-12 lg:col-span-4">
                <p class="text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] mb-[10px] uppercase">Order date</p>
                <hr class="border-[#626262] mb-[16px]"/>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-7">
                    <div class="flex items-center">
                      <img src="./images/icon-pdf-inactive.svg" class="mr-[10px]"/>
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-5">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">100.73 €</p>
                  </div>
                </div>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-7">
                    <div class="flex items-center">
                      <img src="./images/icon-pdf-inactive.svg" class="mr-[10px]"/>
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-5">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">100.73 €</p>
                  </div>
                </div>
              </div>
              <div class="col-span-12 lg:col-span-4">
                <p class="text-[#626262] dm-mono-medium text-[14px] leading-[15px] tracing-[3%] mb-[10px] uppercase">Amount</p>
                <hr class="border-[#626262] mb-[16px]"/>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-4">
                    <div class="flex items-center">
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-8">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">-49 points</p>
                  </div>
                </div>
                <div class="grid grid-cols-12 mb-[9px]">
                  <div class="col-span-4">
                    <div class="flex items-center">
                      <p class="abel text-[14px] leading-[20px] tracing-[-1%]">TO23-003182</p>
                    </div>
                  </div>
                  <div class="col-span-8">
                    <p class="abel text-[14px] leading-[20px] tracing-[-1%]">-100.73 €</p>
                  </div>
                </div>
              </div>
          </div>
          <p class="text-center text-[#626262] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] uppercase mb-[5px]">You are loyalty program member from 2022.10.01</p>
          <div class="flex items-center justify-center flex-row px-[15px] text-white uppercase dm-mono-medium text-[16px] mb-[6px] leading-[21px] bg-[#FF6E35] rounded-[20px] min-h-[37px] w-full">
            benefits of the loyalty program for you is <span class="underline mx-[5px]">366 €</span> so far
            <img src="./images/icon-info-box.svg" class="ml-[10px]"/>
          </div>
          <a href="" class="w-full uppercase flex items-center justify-center text-[#D53C00] dm-mono-medium text-[16px] leading-[21px] tracing-[3%]"><img src="./images/icon-declined-red.svg" class="mr-[10px]"/> Don’t want to participate in this program anymore</a>
      </div>
      
    </div>
  </div>
  
</section>

<!--  -->
<section class="loyalty-main2-second hidden container md:min-w-[100vw] mt-[30px] lg:mt-[65px]">
  <div class="flex justify-center flex-col items-center">
    <div class="flex items-center justify-center max-w-[529px] flex-row px-[15px] text-white uppercase dm-mono-medium text-[16px] mb-[6px] leading-[21px] bg-[#FF6E35] rounded-[20px] min-h-[37px] w-full">
      You are NOT loyalty program member yet
    </div>
    <p class="mb-[37px] text-center flex items-center justify-between min-w-[299px] abel text-[14px] leading-[20px] tracing-[-1%] text-[#626262]"><span class="underline">To register to loyalty program, fill the form</span> <img src="./images/icon-info-box.svg"/></p>
  </div>

  <div class="grid grid-cols-12 gap-[30px] mb-[33px]">
    <div class="col-span-12 md:col-span-6">
      <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Uostamiesčio autoservisas, UAB</p>
      <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[30px]">Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
                        <div class="w-full mb-[44px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input
                                class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Name
                                </label>
                            </div>
                        </div>  
                        <div class="w-full mb-[44px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input
                                class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email
                                </label>
                            </div>
                        </div>  
                        <div class="flex">
                          <div class="flex items-center">
                              <input checked id="checked-checkbox" type="checkbox" value="" class="w-[15px] h-[15px] rounded-[2px] text-black !border-[1px] border-black mr-[17px] !accent-white checked:border-black outline-none">
                              <label for="checked-checkbox" class="text-[16px] leading-[22px] dm-sans-bold">I agree with the <a class="abel underline" href="">loyalty program terms</a>.</label>
                          </div>
                        </div>
    </div>
    <div class="col-span-12 md:col-span-6">
      <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Delivering prizes</p>
      <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[30px] hidden md:block" style="visibility: hidden">Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
                        <div class="w-full mb-[44px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input
                                class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Company name
                                </label>
                            </div>
                        </div>  
                        <div class="w-full mb-[44px] input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input
                                class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Different address
                                </label>
                            </div>
                        </div>  
                        <div class="w-full input-left">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input
                                class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-black !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Postal code city
                                </label>
                            </div>
                        </div>  
    </div>
  </div>

  <div class="text-center">
    <div class="rounded-[8px] mb-[20px] flex flex-col justify-center items-center bg-[#F8F6F7]">
      <h4 class="text-[#00BB5A] dm-sans-bold text-[28px] mb-[4px] mt-[25px]">Success</h4>
      <img class="h-[45px]" src="./images/icon-success.svg"/>
      <p class="mt-[13px] dm-sans-bold text-[14px] leading-[20px] ">Thank you for request lorem ipsum dolor sit amet elit. </p>
      <p class="text-[14px] leading-[20px] mb-[40px] lg:max-w-[529px]">Praesent id dictum turpis, sed placerat diam. Nulla facilisi. Nullam volutpat odio ut velit rutrum dictum. Quisque ultrices sapien congue scelerisque iaculis. Ut id convallis eros. </p>
    </div>

    <div class="flex justify-center">
      <button class="dm-mono-medium text-white bg-[#00BB5A] rounded-[20px] min-w-[194px] min-h-[37px] flex items-center justify-center uppercase">Continue <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
    </div>
  </div>

  <div class="text-center">
    <div class="rounded-[8px] mb-[20px] flex flex-col justify-center items-center bg-[#F8F6F7]">
      <h4 class="text-[#D53C00] dm-sans-bold text-[28px] mb-[4px] mt-[25px]">Error</h4>
      <img class="h-[45px]" src="./images/icon-error.svg"/>
      <p class="mt-[13px] dm-sans-bold text-[14px] leading-[20px] ">Thank you for request lorem ipsum dolor sit amet elit. </p>
      <p class="text-[14px] leading-[20px] mb-[40px] lg:max-w-[529px]">Praesent id dictum turpis, sed placerat diam. Nulla facilisi. Nullam volutpat odio ut velit rutrum dictum. Quisque ultrices sapien congue scelerisque iaculis. Ut id convallis eros. </p>
    </div>

    <div class="flex justify-center">
      <button class="dm-mono-medium text-white bg-[#D53C00] rounded-[20px] min-w-[194px] min-h-[37px] flex items-center justify-center uppercase">Try again <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
    </div>
  </div>

  <div class="flex items-center justify-center mb-[85px]">
    <button class="flex items-center justify-center max-w-[529px] flex-row px-[15px] text-white uppercase dm-mono-medium text-[16px] leading-[21px] bg-[#6A31F7] rounded-[20px] min-h-[37px] w-full">
      Register me to to loyalty program
    </button>
  </div>

  <h3 class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[17px]">LOJALUMO PROGRAMOS TAISYKLĖS</h3>

  <div class="grid grid-cols-12 mb-[85px] gap-y-[30px] lg:gap-[33px]">
    <div class="col-span-12 md:col-span-6">
          <ol class="list-decimal pl-[18px] ordered-list-custom abel">
              <li>Žaidimo Organizatorius yra UAB „Tobis“.</li>
              <li>Dalyvauti žaidime gali visi Lietuvos Respublikoje gyvenantys asmenys, esantys ne jaunesni nei 16 metų.</li>
              <li>Žaidimo registracijos laikotarpis yra nuo 2022-05-01 iki 2022-06-30.</li>
              <li>Žaidimo prizai yra:<br/>
                  <ul class="list-disc pl-[18px]">
                      <li>2 SOCO CUmini elektriniai motoroleriai</li>
                      <li>200 automobilio švaros rinkinių Turtle Wax – kiekvienas rinkinys sudarytas iš:<br/>
                          <ul class="list-disc pl-[25px]">
                              <li>Zip Wax šampūno,</li>
                              <li>Interior 1 valiklio,</li>
                              <li>Fresh Shine valiklio ir gaiviklio,</li>
                              <li>Wet‘N‘Black padangų juodiklio,</li>
                              <li>trijų šluosčių rinkinio.</li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li>Pranešus ir susitarus su žaidimo Organizatoriumi, laimėtojas gali perleisti prizą kitam asmeniui.</li>
              <li>Norint dalyvauti žaidime reikia:<br/>
                  <ul class="list-disc pl-[18px]">
                      <li>Pirkti bet kuriuos 2 TURTLE WAX produktus (negalioja perkant stiklų ir aušinimo skysčius);</li>
                      <li>Nufotografuoti pirkimo kvitą (kuriame būtų matoma pirkimo čekio data ir abu TURTLE WAX produktai);</li>
                      <li>Siųsti kvito su produktu nuotrauką el. paštu turtlewax@tobis.lt, taip pat nurodant savo kontaktinius duomenis:<br/>
                          <ul class="list-disc pl-[25px]">
                              <li>Vardas ir pavardė</li>
                              <li>Telefono numeris</li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li>Vienas pirkimo čekis gali būti registruojamas tik vieną kartą.</li>
          </ol>  
    </div>
    <div class="col-span-12 md:col-span-6">
      <ol class="list-decimal pl-[18px] ordered-list-custom">
              <li>Žaidimo nugalėtojai bus išrinkti keliais etapais naudojant atsitiktinį principą specialios programos pagalba ir paskelbti www.tobis.lt:<br/>
                  <ul class="list-disc pl-[18px]">
                      <li>200 rinkinių laimėtojai - po 50 - skelbiami: 2022.05.23, 2022.06.06, 2022.06.20, 2022.07.04.</li>
                      <li>2 SOCO elektrinių motorolerių laimėtojai - po 1 - skelbiami 2022.06.06, 2022.07.04.</li>
                  </ul>
              </li>
              <li>Su visais laimėtojais susisieksime asmeniškai el. paštu, iš kurio buvo siųsta pirkimo kvito su produktais nuotrauka.</li>
              <li>Laimėtojui neatsiliepus per 4 savaites nuo žaidimo pabaigos, laimėtas prizas grįžta į prizų fondą, o teisė į jį prarandama.</li>
              <li>Visi su prizais susiję mokesčiai bus mokami žaidimo Organizatoriaus.</li>
              <li>Prizai neišmokami pinigine suma, nekeičiami į kitą prizą.</li>
              <li>Asmens dalyvavimas reiškia, kad jis sutinka su šiose taisyklėse nurodytomis nuostatomis, o laimėjimo atveju, ir jo vardo bei pavardės skelbimu ne ilgiau nei 6 mėnesius po laimėtojų paskelbimo www.tobis.lt.</li>
              <li>Dalyvaudamas žaidime dalyvis sutinka su duomenų apdorojimu duomenų bazėje.</li>
              <li>E. parduotuvėje www.tobis.lt įsigyti TURTLE WAX produktai taip pat gali dalyvauti šiame žaidime.</li>
              <li>Mažmenos tinklo RIMI, DEPO pirkimo kvitai žaidime nedalyvauja.</li>
              <li>Prizų gavėjais negali būti UAB „Tobis“, UAB „Getz“, UAB „Lesta“, UAB „Stikloporas“ darbuotojai bei jų šeimos nariai.</li>
              <li>Iškilus klausimams susisiekite su mumis el. paštu info@tobis.lt arba darbo dienomis nuo 9.00 val. iki 16.00 val. telefonu +370 613 90482.</li>
      </ol>
    </div>
  </div>

</section>

<section class="loyalty-main-second hidden container md:min-w-[100vw] mt-[30px] lg:mt-[121px]">
  <div class="hr-body mb-[12px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="dm-sans-medium mb-[7px] text-[40px] leadding-[46px] tracing-[-1%]">Lorem ipsum dolor , <span class="underline">lorem ipsum dolor</span> </h2>
  <h3 class="dm-sans-bold text-[28px] tracing-[-1%] mb-[35px]">Lorem ipsum dolor </h3>

  <div class="grid grid-cols-12 mb-[29px] gap-y-[30px]  lg:gap-[30px] lg:px-[143px]">
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
    <div class="col-span-12 lg:col-span-3">
      <img src="./images/bg-rectangle.svg" class="rounded-[8px] w-full"/>
    </div>
  </div>

  <div class="grid grid-cols-12 mb-[24px] gap-[17px] lg:gap-x-[40px] xxl:gap-x-[96px] lg:px-[143px]">
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="flex items-center justify-between dm-sans-bold text-[28px] tracing-[-1%] max-w-[300px]">10 taškų <img src="./images/icon-next-violet.svg"/> 10Є kortelė</p>
    </div>
  </div>

    <hr class="border-[#E2E1E1] mb-[24px]"/>

    <h3 class="mb-[17px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[17px]">LOJALUMO PROGRAMOS TAISYKLĖS</h3>

    <div class="grid grid-cols-12 mb-[85px] gap-y-[30px] lg:gap-[33px]">
      <div class="col-span-12 md:col-span-6">
            <ol class="list-decimal pl-[18px] ordered-list-custom abel">
                <li>Žaidimo Organizatorius yra UAB „Tobis“.</li>
                <li>Dalyvauti žaidime gali visi Lietuvos Respublikoje gyvenantys asmenys, esantys ne jaunesni nei 16 metų.</li>
                <li>Žaidimo registracijos laikotarpis yra nuo 2022-05-01 iki 2022-06-30.</li>
                <li>Žaidimo prizai yra:<br/>
                    <ul class="list-disc pl-[18px]">
                        <li>2 SOCO CUmini elektriniai motoroleriai</li>
                        <li>200 automobilio švaros rinkinių Turtle Wax – kiekvienas rinkinys sudarytas iš:<br/>
                            <ul class="list-disc pl-[25px]">
                                <li>Zip Wax šampūno,</li>
                                <li>Interior 1 valiklio,</li>
                                <li>Fresh Shine valiklio ir gaiviklio,</li>
                                <li>Wet‘N‘Black padangų juodiklio,</li>
                                <li>trijų šluosčių rinkinio.</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Pranešus ir susitarus su žaidimo Organizatoriumi, laimėtojas gali perleisti prizą kitam asmeniui.</li>
                <li>Norint dalyvauti žaidime reikia:<br/>
                    <ul class="list-disc pl-[18px]">
                        <li>Pirkti bet kuriuos 2 TURTLE WAX produktus (negalioja perkant stiklų ir aušinimo skysčius);</li>
                        <li>Nufotografuoti pirkimo kvitą (kuriame būtų matoma pirkimo čekio data ir abu TURTLE WAX produktai);</li>
                        <li>Siųsti kvito su produktu nuotrauką el. paštu turtlewax@tobis.lt, taip pat nurodant savo kontaktinius duomenis:<br/>
                            <ul class="list-disc pl-[25px]">
                                <li>Vardas ir pavardė</li>
                                <li>Telefono numeris</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Vienas pirkimo čekis gali būti registruojamas tik vieną kartą.</li>
            </ol>  
      </div>
      <div class="col-span-12 md:col-span-6">
        <ol class="list-decimal pl-[18px] ordered-list-custom">
                <li>Žaidimo nugalėtojai bus išrinkti keliais etapais naudojant atsitiktinį principą specialios programos pagalba ir paskelbti www.tobis.lt:<br/>
                    <ul class="list-disc pl-[18px]">
                        <li>200 rinkinių laimėtojai - po 50 - skelbiami: 2022.05.23, 2022.06.06, 2022.06.20, 2022.07.04.</li>
                        <li>2 SOCO elektrinių motorolerių laimėtojai - po 1 - skelbiami 2022.06.06, 2022.07.04.</li>
                    </ul>
                </li>
                <li>Su visais laimėtojais susisieksime asmeniškai el. paštu, iš kurio buvo siųsta pirkimo kvito su produktais nuotrauka.</li>
                <li>Laimėtojui neatsiliepus per 4 savaites nuo žaidimo pabaigos, laimėtas prizas grįžta į prizų fondą, o teisė į jį prarandama.</li>
                <li>Visi su prizais susiję mokesčiai bus mokami žaidimo Organizatoriaus.</li>
                <li>Prizai neišmokami pinigine suma, nekeičiami į kitą prizą.</li>
                <li>Asmens dalyvavimas reiškia, kad jis sutinka su šiose taisyklėse nurodytomis nuostatomis, o laimėjimo atveju, ir jo vardo bei pavardės skelbimu ne ilgiau nei 6 mėnesius po laimėtojų paskelbimo www.tobis.lt.</li>
                <li>Dalyvaudamas žaidime dalyvis sutinka su duomenų apdorojimu duomenų bazėje.</li>
                <li>E. parduotuvėje www.tobis.lt įsigyti TURTLE WAX produktai taip pat gali dalyvauti šiame žaidime.</li>
                <li>Mažmenos tinklo RIMI, DEPO pirkimo kvitai žaidime nedalyvauja.</li>
                <li>Prizų gavėjais negali būti UAB „Tobis“, UAB „Getz“, UAB „Lesta“, UAB „Stikloporas“ darbuotojai bei jų šeimos nariai.</li>
                <li>Iškilus klausimams susisiekite su mumis el. paštu info@tobis.lt arba darbo dienomis nuo 9.00 val. iki 16.00 val. telefonu +370 613 90482.</li>
        </ol>
      </div>
    </div>

</section>
<!-- -->

<section class="bg-[#D9F5E6] container md:min-w-[100vw] pt-[30px] pb-[21px] mt-[86px]">
    <div class="flex justify-between icon-box-main-custom">
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-1.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">QUICK DELIVERY</h3>
      </div>
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-2.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">FREE DELIVERY<br/> OVER 40€</h3>
      </div>
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-3.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">ORIGINAL<br/> PRODUCTS</h3>
      </div>
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-4.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">MONTHLY GIFTS</h3>
      </div>
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-5.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">REALLY GOOD<br/> PRICES</h3>
      </div>
      <div class="icon-box-custom">
          <div class="flex justify-center">
            <img src="./images/icon-box-6.svg"/>
          </div>
          <div class="hr-body hr-body-dark mb-[9px]">
            <div class="hr-dot"></div>
            <hr class="hr-dotted"/>
          </div>
          <h3 class="dm-mono-medium">battery service<br/> register</h3>
      </div>
    </div>
</section>


<?php include('./footer.php'); ?>