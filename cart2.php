<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[30px]">
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Cart</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Checkout</a>
 </div>

 <div class="grid grid-cols-12 md:gap-[30px] pb-[74px] lg:pb-[109px]">
    <div class="col-span-12 lg:col-span-6">
      <h2 class="mt-[10px] dm-sans-bold mb-[11px] text-[16px] lg:text-[20px]">Delivery</h2>
      <p class="text-[16px] leading-[22px] inline lg:block">Add items for another <b>10.30 €</b> and we will deliver for free.</p>
      <p class="text-[16px] leading-[22px] inline lg:block"><b>OR Free</b> delivery applies for this order.</p>

        <div class="grid grid-cols-12 md:gap-[27px] gap-y-[10px] mt-[16px] mb-[29px] button-toggle-checked-main">
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

        <hr class="border-[#626262] mb-[15px] lg:mb-[12px]"/>

        <div class="flex mb-[14px]">
          <button data-id="local-pickup-main" class="text-left toggle-checkout-title toggle-checkout-title-active">
            <div class="flex">
              <input type="radio" name="hs-default-radio" class="mr-[14px] shrink-0 mt-0.5 accent-[#6A31F7] checked:bg-[#6A31F7] border-[#6A31F7] rounded-full text-[#6A31F7] focus:ring-[#6A31F7]" id="hs-checked-radio" checked>
              <label for="hs-checked-radio" class="flex">
                <img src="./images/icon-local.svg" class="mr-[12px]"/>
                <div>
                  <p class="text-[16px] leading-[22px] dm-sans-bold toggle-checkout-title-first">Local pickup</p>
                  <p class="text-[14px] leading-[20px] flex items-center text-[#626262]">Delivery on Tuesday 01.31</p>
                </div>
              </label>
            </div>
          </button>
        </div>

        <div class="local-pickup-main lg:block">
          <div class="grid grid-cols-12 md:gap-[22.5px] mb-[5px]">
            <div class="col-span-12 lg:col-span-10">
                <div class="button-toggle-checked-main">
                  <div class="button-toggle-checked3 active mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p><b>TODAY (for orders till 16:00)</b></p>
                          <p>Druskininkai, Tobis Warehouse, Gardino 73</p>
                      </div>
                      <img class="btn-toggle-active  " src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
                  <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p><b>TOMORROW 02.01</b></p>
                          <p>Vilnius, tobis Shop, Laisvės pr. 3</p>
                      </div>
                      <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
                  <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                      <div class="flex flex-col">
                          <p><b>THURSDAY 02.02</b></p>
                          <p>Vilnius, tobis Shop, Savanorių 187-8</p>
                      </div>
                      <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                      <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                  </div>
                </div>
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[18px] lg:mb-[31px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Name
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Last Name
                          </label>
                      </div>
                  </div>  
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[52px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Email
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full flex items-end">
                      <div>
                        <p class="text-[14px] leading-[20px] border-b-[1px] border-[#9E9D9D] px-[13px] py-[9px]">+370</p>
                      </div>
                      <div class="relative w-full h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Phone number
                          </label>
                      </div>
                  </div>  
            </div>
          </div>
        </div>

        <hr class="border-[#626262] mb-[12px]"/>

        <div class="flex mb-[14px]">
          <button data-id="parcel-machines-main" class="text-left toggle-checkout-title">
            <div class="flex">
              <input type="radio" name="hs-default-radio" class="mr-[14px] shrink-0 mt-0.5 accent-[#6A31F7] checked:bg-[#6A31F7] border-[#6A31F7] rounded-full text-[#6A31F7] focus:ring-[#6A31F7]" id="hs-checked-radio">
              <label for="hs-checked-radio" class="flex">
                <img src="./images/icon-parcel.svg" class="mr-[12px]"/>
                <div>
                  <p class="text-[16px] leading-[22px] toggle-checkout-title-first"><span class="dm-sans-bold">Parcel Machines</span> - from 2.90 €</p>
                  <p class="text-[14px] leading-[20px] flex items-center text-[#626262]">Delivery on Wednesday 02.01</p>
                </div>
              </label>
            </div>
          </button>
        </div>

        <div class="parcel-machines-main hidden lg:block">

          <div class="flex flex-wrap justify-between gap-x-[20px] gap-y-[10px] lg:gap-[32px] mb-[19px] toggle-active-main">
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit  lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-dpd.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-venipak.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-circle.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-circle.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-circle.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
          </div>

          <div class="grid grid-cols-12 mt-[33px] lg:mt-0 mb-[31px]">
            <div class="col-span-12 lg:col-span-10">
              <input placeholder="Enter the address so we can search nearest parcel machine" class="h-[37px] rounded-[20px] border-black border-[1px] abel text-[14px] leading-20px] px-[20px] w-full placeholder:text-black mb-[15px]"/>
            </div>
            <div class="col-span-12 lg:col-span-10">
                  <select name="cars" class="custom-select text-[14px] max-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                      <option>Customer service</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[18px] lg:mb-[31px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Name
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Last Name
                          </label>
                      </div>
                  </div>  
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[52px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Email
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full flex items-end">
                      <div>
                        <p class="text-[14px] leading-[20px] border-b-[1px] border-[#9E9D9D] px-[13px] py-[9px]">+370</p>
                      </div>
                      <div class="relative w-full h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Phone number
                          </label>
                      </div>
                  </div>  
            </div>
          </div>

        </div>

        <hr class="border-[#626262] mb-[12px]"/>

        <div class="flex mb-[14px]">
          <button data-id="drop-pick-main" class="text-left toggle-checkout-title">
            <div class="flex">
              <input type="radio" name="hs-default-radio" class="mr-[14px] shrink-0 mt-0.5 accent-[#6A31F7] checked:bg-[#6A31F7] border-[#6A31F7] rounded-full text-[#6A31F7] focus:ring-[#6A31F7]" id="hs-checked-radio">
              <label for="hs-checked-radio" class="flex">
                <img src="./images/icon-drop.svg" class="mr-[12px]"/>
                <div>
                  <p class="text-[16px] leading-[22px] dm-sans-bold toggle-checkout-title-first">Drop-Pick up points</p>
                  <p class="text-[14px] leading-[20px] flex items-center text-[#626262]"><span class="underline">Unavailable</span> <img class="ml-[10px]" src="./images/icon-info-box.svg"/></p>
                </div>
              </label>
            </div>
          </button>
        </div>

        <div class="drop-pick-main hidden lg:block">
          <div class="flex flex-wrap justify-between lg:justify-start gap-x-[20px] gap-y-[10px] lg:gap-[32px] mb-[19px] toggle-active-main">
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit  lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-dpd.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit  lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-venipak.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
            <button class="min-h-[70px] lg:min-h-[60px] border-[#9E9D9D] border-[1px] rounded-[8px] w-[46%] lg:w-fit  lg:min-w-[110px] px-[10px] flex items-center justify-center flex-col">
              <img src="./images/pickup-circle.svg"/>
              <p class="abel text-[11px] leading-[20px] ">Delivery 3.59 € </p>
            </button>
          </div>

          <div class="grid grid-cols-12 mt-[33px] mb-[31px]">
            <div class="col-span-12 lg:col-span-10">
              <input placeholder="Enter the address so we can search nearest parcel machine" class="h-[37px] rounded-[20px] border-black border-[1px] abel text-[14px] leading-20px] px-[20px] w-full placeholder:text-black mb-[15px]"/>
            </div>
            <div class="col-span-12 lg:col-span-10">
                  <select name="cars" class="custom-select text-[14px] ax-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                      <option>Customer service</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[31px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Name
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Last Name
                          </label>
                      </div>
                  </div>  
            </div>
          </div>

          <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[52px]">
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full input-left">
                      <div class="relative w-full min-w-[200px] h-10">
                          <input
                          class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Email
                          </label>
                      </div>
                  </div>  
            </div>
            <div class="col-span-12 lg:col-span-5">
                  <div class="w-full flex items-end">
                      <div>
                        <p class="text-[14px] leading-[20px] border-b-[1px] border-[#9E9D9D] px-[13px] py-[9px]">+370</p>
                      </div>
                      <div class="relative w-full h-10">
                          <input
                          class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                          placeholder=" " /><label
                          class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Phone number
                          </label>
                      </div>
                  </div>  
            </div>
          </div>
        </div>
        
        <hr class="border-[#626262] mb-[12px]"/>

        <div class="flex mb-[14px]">
          <div>
            <div class="flex">
              <input type="radio" name="hs-default-radio" class="mr-[14px] shrink-0 mt-0.5 accent-[#6A31F7] checked:bg-[#6A31F7] border-[#6A31F7] rounded-full text-[#6A31F7] focus:ring-[#6A31F7]" id="hs-checked-radio">
              <label for="hs-checked-radio" class="flex">
                <img src="./images/icon-courier.svg" class="mr-[12px]"/>
                <div>
                  <p class="text-[16px] leading-[22px]"><span class="dm-sans-bold">Delivery by courier</span> - from 6.00 €</p>
                  <p class="text-[14px] leading-[20px]">Delivery on Tuesday 02.01</p>
                </div>
              </label>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-12 md:gap-[22.5px] mb-[5px]">
          <div class="col-span-12 lg:col-span-10">
              <div class="button-toggle-checked-main hidden lg:block">
                <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Automobilių dažymo centras, UAB</b></p>
                        <p>Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
                        <p>Klaipeda.kebulai@gmail.com</p>
                        <p>+37067077060</p>
                    </div>
                    <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
                <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Automobilių dažymo centras, UAB</b></p>
                        <p>Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
                        <p>Klaipeda.kebulai@gmail.com</p>
                        <p>+37067077060</p>
                    </div>
                    <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
                <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Automobilių dažymo centras, UAB</b></p>
                        <p>Klaipėdos Jūros 187- 8 korp. Klaipėda 92195</p>
                        <p>Klaipeda.kebulai@gmail.com</p>
                        <p>+37067077060</p>
                    </div>
                    <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
                <div class="button-toggle-checked3 mb-[16px] bg-[#F0EEEE] min-h-[60px] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>Deliver to new address</b></p>
                        <p>Will be automatically added for future purchases</p>
                    </div>
                    <img class="btn-toggle-active hidden " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
              </div>
          </div>
        </div>

        <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[5px]">
          <div class="col-span-12 lg:col-span-5">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Name
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-5">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Last Name
                        </label>
                    </div>
                </div>  
          </div>
        </div>

        <div class="flex items center mb-[15px]">
          <img src="./images/icon-add.svg" class="mr-[9px]"/>
          <p class="abel text-[12px] leading-[20px]">Is it company?</p>
        </div>

        <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[18px] lg:mb-[25px]">
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Company name
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Company code
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">VAT Code
                        </label>
                    </div>
                </div>  
          </div>
        </div>

        <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[18px] lg:mb-[25px]">
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Address 
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">City
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Postal code 
                        </label>
                    </div>
                </div>  
          </div>
        </div>

        <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[46px] lg:mb-[52px]">
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Email
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full flex items-end">
                    <div>
                      <p class="text-[14px] leading-[20px] border-b-[1px] border-[#9E9D9D] px-[13px] py-[9px]">+370</p>
                    </div>
                    <div class="relative w-full h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Phone number
                        </label>
                    </div>
                </div>  
          </div>
        </div>

        <div class="flex items center mb-[15px]">
          <img src="./images/icon-add.svg" class="mr-[9px]"/>
          <p class="dm-sans-bold text-[14px] leading-[20px]">Billing address different then delivery address.</p>
        </div>

        <div class="grid grid-cols-12 gap-y-[18px] md:gap-[22.5px] mb-[34px] lg:mb-[68px]">
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Company name
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">Company code
                        </label>
                    </div>
                </div>  
          </div>
          <div class="col-span-12 lg:col-span-4">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black placeholder:font-bold dm-sans-bold leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full font-bold dm-sans-bold select-none pointer-events-none absolute left-0 !overflow-visible truncate peer-placeholder-shown:text-black leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-black peer-focus:text-gray-900">VAT Code
                        </label>
                    </div>
                </div>  
          </div>
        </div>

        <hr class="mb-[12px] border-[#626262] mt-[68px] hidden lg:block"/>

        <h2 class="mb-[21px] lg:mb-[11px] dm-sans-bold text-[20px]">Payment</h2>
        <div class="flex flex-wrap lg:flex-nowrap items-center mb-[12px]">
          <div class="flex">
            <img src="./images/icon-payment.svg" class="mr-[11px]">
            <p class="abel text-[14px] leading-[20px] lg:mr-[30px]">Payment in 30 days.</p>
          </div>
          <p class="abel text-[14px] leading-[20px]">Your credit limit is xxx €.</p>
        </div>
        <div class="flex items-end justify-between bg-[#6A31F7] rounded-[8px] lg:max-w-[390px] min-h-[57px] p-[11px] mb-[26px]">
          <div>
            <p class="abel text-[14px] leading-[20px] text-white">Your debt to this day is xxx €. </p>
            <p class="abel text-[14px] leading-[20px] text-white underline">Future orders won’t be executed until you pay the debt. </p>
          </div>
          <img src="./images/icon-info-box.svg">
        </div>

    <div class="grid grid-cols-10 gap-x-[22px] md:gap-x-[30px] gap-y-[12px] toggle-active-main">
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-paysera.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-trustly.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-klama.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-bank.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-cash.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-mastercard.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-visa.svg">
        </button>
        <button class="col-span-5 lg:col-span-2 min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-giftcard.svg">
        </button>
    </div>

        <hr class="border-[#9E9D9D] hidden lg:block mt-[31px]"/>

        <label class="custom-label flex items-center mt-[20px]">
            <div class="bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center mr-[8px] min-w-[28px] lg:min-w-[15px] w-[28px] lg:!w-[15px] h-[28px] lg:!h-[15px]">
                <input type="checkbox" class="hidden" checked>
                <svg class="hidden min-w-[28px] lg:min-w-4 w-[28px] lg:w-4 h-[28px] lg:h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none text-[#626262] text-[12px] leading-[15px] tracing-[-1%]"> I agree with <a href="" class="underline text-[#6A31F7]">Shopping rules and Privacy Policy.</a></span>
        </label>

        <a href="" class="text-white bg-[#6A31F7] flex items-center justify-center uppercase dm-mono-medium text-[16px] leading-[21px] mt-[43px] lg:mt-[22px] rounded-[20px] min-h-[37px]">MAKE A PAYMENT 35.70 €</a>

    </div>  
    <div class="col-span-12 lg:col-span-6 hidden lg:block">
      <hr class="border-[#626262] mb-[9px]"/>
        <div class="accordion-custom-main">
            <div class="accordion-custom-main-title flex items-center justify-between dm-sans-bold text-[20px] pb-[14px]">
                <p>Shopping cart (15)</p>
                <img src="./images/icon-accordion-close.svg">
            </div>
            <div class="accordion-custom-main-body">

            <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px] relative">
              <button class="absolute right-0 lg:hidden top-[-10px]"><img src="./images/icon-delete-gray.svg"/></button>
              <div class="flex mb-[12px] lg:mb-0">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div class="flex-grow lg:flex-nogrow">
                  <div class="mb-[3px]">
                      <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                      <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                      <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                  </div>
                  <div class="flex items-center hidden lg:flex">
                      <div class="flex items-center mr-[23px] cart-count-items-main">
                          <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                          <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                          <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                      </div>
                      <div class="flex justify-between min-w-[120px]">
                          <img src="./images/icon-cart-1.svg"/>
                          <img src="./images/icon-cart-2.svg"/>
                          <img src="./images/icon-cart-3.svg"/>
                          <img src="./images/icon-cart-4.svg"/>
                      </div>
                  </div>
                </div>
              </div>
                    <div class="flex lg:flex-wrap justify-between items-center lg:items-stretch w-full lg:w-fit">
                        <div class="flex justify-between w-full lg:w-fit flex-grow">
                          <div class="lg:hidden h-[38.4px] flex justify-evenly items-center bg-[#00BB5A] rounded-[4px] p-[5px] mb-[20px] mr-[10px] min-w-[140px] max-w-[140px] ">
                              <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">Member saves</p>
                              <img class="h-[27px]" src="./images/icon-border-dotted.svg"/>
                              <p class="abel text-[16px] leading-[16px] text-white">-22%</p>
                          </div>
                          <div class="flex flex-1 flex-col min-w-[140px] ">
                              <div class="flex justify-end">
                                <p class="line-through text-[14px]">13.90 €</p>
                                <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                              </div>
                              <p class="text-right text-[14px]">In Total 21.80 €</p>
                          </div>  
                          
                        </div>
                        <button class="text-right float-right hidden lg:block w-full"><img class="float-right" src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            <div class="w-full lg:hidden">
              <div class="flex lg:hidden items-center justify-between">
                  <div class="flex items-center mr-[23px] cart-count-items-main">
                      <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between min-w-[120px]">
                      <img src="./images/icon-cart-1.svg"/>
                      <img src="./images/icon-cart-2.svg"/>
                      <img src="./images/icon-cart-3.svg"/>
                      <img src="./images/icon-cart-4.svg"/>
                  </div>
              </div>
            </div>

      </div>


      <div class="bg-[#F8F6F7] rounded-[8px] px-[15px] py-[10px] mb-[15px]">
          <div class="flex items-center mb-[11px] lg:mb-[13px]">
            <img src="./images/icon-basket.svg" class="mr-[12px]"/>
            <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px] text-[#6A31F7]">This item also requires:</p>
            
          </div>
          <hr class="border-[#E2E1E1] mb-[7px] lg:hidden"/>
        <div class="flex flex-wrap lg:flex-nowrap justify-between">
          <div class="flex flex-grow lg:flex-nogrow mb-[15px] lg:mb-0">
            <img src="./images/product-thumbnail-small.svg" class="mr-[21px] lg:mr-[25px] h-[65px] lg:h-[60px] bg-white w-[65px] lg:w-[60px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
              <div class=" lg:max-w-[270px] lg:min-w-[270px] lg:pr-[20px]">
                <div class="mb-[3px]">
                    <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                    <p class="text-[14px] leading-[21px] dm-sans-bold">Wet’n’Black tyre foam 500ml</p>
                </div>
              </div>
          </div>
          <div class="flex lg:mt-[21px] lg:min-w-[140px] lg:max-w-[140px] ">
            <button class="dm-mono-medium rounded-[20px] text-[12px] leading-[15px] w-[80px] h-[20px] flex items-center justify-center border-black border-[1px]">Add x 2</button>
          </div>
          <div class="min-w-[140px] flex flex-col justify-between items-end">
              <div>
                <div class="flex justify-end">
                    <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                </div>  
                <p class="text-right text-[14px]">In Total 21.80 €</p>
              </div>
          </div>
        </div>
      </div>

      <hr class="border-[#E2E1E1] mb-[22px]"/>

      <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px] relative">
              <button class="absolute right-0 lg:hidden top-[-10px]"><img src="./images/icon-delete-gray.svg"/></button>
              <div class="flex mb-[12px] lg:mb-0">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div class="flex-grow lg:flex-nogrow">
                  <div class="mb-[3px]">
                      <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                      <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                      <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                  </div>
                  <div class="flex items-center hidden lg:flex">
                      <div class="flex items-center mr-[23px] cart-count-items-main">
                          <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                          <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                          <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                      </div>
                      <div class="flex justify-between min-w-[120px]">
                          <img src="./images/icon-cart-1.svg"/>
                          <img src="./images/icon-cart-2.svg"/>
                          <img src="./images/icon-cart-3.svg"/>
                          <img src="./images/icon-cart-4.svg"/>
                      </div>
                  </div>
                </div>
              </div>
                    <div class="flex lg:flex-wrap justify-between items-center lg:items-stretch w-full lg:w-fit">
                        <div class="flex justify-between w-full lg:w-fit">
                          <div class="flex h-[38.4px] justify-evenly items-center bg-[#00BB5A] rounded-[4px] p-[5px] mb-[20px] mr-[10px] min-w-[140px] max-w-[140px] ">
                              <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">Member saves</p>
                              <img class="h-[27px]" src="./images/icon-border-dotted.svg"/>
                              <p class="abel text-[16px] leading-[16px] text-white">-22%</p>
                          </div>
                          <div class="flex flex-col min-w-[140px] ">
                              <div class="flex justify-end">
                                <p class="line-through text-[14px]">13.90 €</p>
                                <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                              </div>
                              <p class="text-right text-[14px]">In Total 21.80 €</p>
                          </div>  
                          
                        </div>
                        <button class="text-right float-right hidden lg:block w-full"><img class="float-right" src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            <div class="w-full lg:hidden">
              <div class="flex lg:hidden items-center justify-between">
                  <div class="flex items-center mr-[23px] cart-count-items-main">
                      <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between min-w-[120px]">
                      <img src="./images/icon-cart-1.svg"/>
                      <img src="./images/icon-cart-2.svg"/>
                      <img src="./images/icon-cart-3.svg"/>
                      <img src="./images/icon-cart-4.svg"/>
                  </div>
              </div>
            </div>

      </div>

      <hr class="border-[#E2E1E1] mb-[10px]"/>

      <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px] relative">
              <button class="absolute right-0 lg:hidden top-[-10px]"><img src="./images/icon-delete-gray.svg"/></button>
              <div class="flex mb-[12px] lg:mb-0">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div class="flex-grow lg:flex-nogrow">
                  <div class="mb-[3px]">
                      <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                      <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                      <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                  </div>
                  <div class="flex items-center hidden lg:flex">
                      <div class="flex items-center mr-[23px] cart-count-items-main">
                          <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                          <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                          <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                      </div>
                      <div class="flex justify-between min-w-[120px]">
                          <img src="./images/icon-cart-1.svg"/>
                          <img src="./images/icon-cart-2.svg"/>
                          <img src="./images/icon-cart-3.svg"/>
                          <img src="./images/icon-cart-4.svg"/>
                      </div>
                  </div>
                </div>
              </div>
                    <div class="flex lg:flex-wrap justify-between items-center lg:items-stretch w-full lg:w-fit">
                        <div class="flex justify-between w-full lg:w-fit">
                          <div class="flex h-[38.4px] justify-evenly items-center bg-[#FF6E35] rounded-[4px] p-[5px] mb-[20px] mr-[10px] min-w-[140px] max-w-[140px] ">
                              <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">coupon</p>
                              <img class="h-[27px]" src="./images/icon-border-dotted.svg"/>
                              <p class="abel text-[16px] leading-[16px] text-white">30OFF</p>
                          </div>
                          <div class="flex flex-col min-w-[140px] ">
                              <div class="flex justify-end">
                                <p class="line-through text-[14px]">13.90 €</p>
                                <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                              </div>
                              <p class="text-right text-[14px]">In Total 21.80 €</p>
                          </div>  
                          
                        </div>
                        <button class="text-right float-right hidden lg:block w-full"><img class="float-right" src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            <div class="w-full lg:hidden">
              <div class="flex lg:hidden items-center justify-between">
                  <div class="flex items-center mr-[23px] cart-count-items-main">
                      <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between min-w-[120px]">
                      <img src="./images/icon-cart-1.svg"/>
                      <img src="./images/icon-cart-2.svg"/>
                      <img src="./images/icon-cart-3.svg"/>
                      <img src="./images/icon-cart-4.svg"/>
                  </div>
              </div>
            </div>

      </div>

      <hr class="border-[#E2E1E1] mb-[10px]"/>

      <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px] relative">
              <button class="absolute right-0 lg:hidden top-[-10px]"><img src="./images/icon-delete-gray.svg"/></button>
              <div class="flex mb-[12px] lg:mb-0">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div class="flex-grow lg:flex-nogrow">
                  <div class="mb-[3px]">
                      <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                      <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                      <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                  </div>
                  <div class="flex items-center hidden lg:flex">
                      <div class="flex items-center mr-[23px] cart-count-items-main">
                          <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                          <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                          <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                      </div>
                      <div class="flex justify-between min-w-[120px]">
                          <img src="./images/icon-cart-1.svg"/>
                          <img src="./images/icon-cart-2.svg"/>
                          <img src="./images/icon-cart-3.svg"/>
                          <img src="./images/icon-cart-4.svg"/>
                      </div>
                  </div>
                </div>
              </div>
                    <div class="flex lg:flex-wrap justify-between items-center lg:items-stretch w-full lg:w-fit">
                        <div class="flex justify-between w-full lg:w-fit">
                          <div class="mr-[10px] min-w-[140px] max-w-[140px]">
                            <div class="flex items-center border-[#00BB5A] border-[1px] rounded-[4px] p-[5px] mb-[3px] ">
                              <p class="uppercase text-[#00BB5A] abel text-[16px] leading-[16px] max-w-[110px]">Member would save -22%</p>
                            </div>
                            <p class="text-[10px] leading-[12px] underline text-[#00BB5A] mb-[13px]">Create an account and become a Member</p>
                          </div>
                          <div class="flex flex-col min-w-[140px] ">
                              <div class="flex justify-end">
                                <p class="line-through text-[14px]">13.90 €</p>
                                <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                              </div>
                              <p class="text-right text-[14px]">In Total 21.80 €</p>
                          </div>  
                          
                        </div>
                        <button class="text-right float-right hidden lg:block w-full"><img class="float-right" src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            <div class="w-full lg:hidden">
              <div class="flex lg:hidden items-center justify-between">
                  <div class="flex items-center mr-[23px] cart-count-items-main">
                      <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between min-w-[120px]">
                      <img src="./images/icon-cart-1.svg"/>
                      <img src="./images/icon-cart-2.svg"/>
                      <img src="./images/icon-cart-3.svg"/>
                      <img src="./images/icon-cart-4.svg"/>
                  </div>
              </div>
            </div>

      </div>

      <hr class="border-[#E2E1E1] mb-[10px]"/>

      <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px] relative">
              <button class="absolute right-0 lg:hidden top-[-10px]"><img src="./images/icon-delete-gray.svg"/></button>
              <div class="flex mb-[12px] lg:mb-0">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div class="flex-grow lg:flex-nogrow">
                  <div class="mb-[3px]">
                      <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                      <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                      <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                  </div>
                  <div class="flex items-center hidden lg:flex">
                      <div class="flex items-center mr-[23px] cart-count-items-main">
                          <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                          <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                          <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                      </div>
                      <div class="flex justify-between min-w-[120px]">
                          <img src="./images/icon-cart-1.svg"/>
                          <img src="./images/icon-cart-2.svg"/>
                          <img src="./images/icon-cart-3.svg"/>
                          <img src="./images/icon-cart-4.svg"/>
                      </div>
                  </div>
                </div>
              </div>
                    <div class="flex lg:flex-wrap justify-between items-center lg:items-stretch w-full lg:w-fit">
                        <div class="flex justify-between w-full lg:w-fit">
                          <div class="flex h-[38.4px] justify-evenly items-center bg-[#D53C00] rounded-[4px] p-[5px] mb-[20px] mr-[10px] min-w-[140px] max-w-[140px] ">
                              <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">Sellout</p>
                              <img class="h-[27px]" src="./images/icon-border-dotted.svg"/>
                              <p class="abel text-[16px] leading-[16px] text-white">-60%</p>
                          </div>
                          <div class="flex flex-col min-w-[140px] ">
                              <div class="flex justify-end">
                                <p class="line-through text-[14px]">13.90 €</p>
                                <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 9.90 €</p>
                              </div>
                              <p class="text-right text-[14px]">In Total 21.80 €</p>
                          </div>  
                          
                        </div>
                        <button class="text-right float-right hidden lg:block w-full"><img class="float-right" src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            <div class="w-full lg:hidden">
              <div class="flex lg:hidden items-center justify-between">
                  <div class="flex items-center mr-[23px] cart-count-items-main">
                      <button class="cart-count-items-main-btnMinus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[18px] h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between min-w-[120px]">
                      <img src="./images/icon-cart-1.svg"/>
                      <img src="./images/icon-cart-2.svg"/>
                      <img src="./images/icon-cart-3.svg"/>
                      <img src="./images/icon-cart-4.svg"/>
                  </div>
              </div>
            </div>

      </div>

      <hr class="border-[#E2E1E1] mb-[10px]"/>
      
      <div class="flex flex-wrap lg:flex-nowrap justify-between mb-[15px]">
              <div class="flex">
                <img src="./images/product-thumbnail-small.svg" class="mr-[20px] lg:mr-[25px] h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                  <div class="lg:max-w-[240px]">
                    <div class="mb-[3px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Wheel Wizard</p>
                        <p class="text-[12px] leading-[22px] hidden lg:block">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
                      <p class="text-[12px] leading-[22px]">1</p>
                    </div>
                  </div>
              </div>
                    <div class="flex flex-col justify-between items-end">
                        <div class="flex">
                          <div class="flex justify-evenly items-center border-[1px] border-[#6A31F7] rounded-[4px] p-[5px] mb-[20px] mr-[10px] min-w-[140px] max-w-[140px]">
                            <p class="uppercase text-[#6A31F7] abel text-[16px] leading-[16px] max-w-[68px]">Free gift</p>
                            <img src="./images/icon-border-dotted-violet.svg"/>
                            <img src="./images/icon-gift-violet.svg"/>
                          </div>
                          <div class="flex flex-col min-w-[140px] ">
                          </div>  
                          
                        </div>
                    </div>
                
      </div>

            </div>
        </div>

        <hr class="border-[#E2E1E1] mb-[13px] mt-[15px]"/>

        <div class="grid grid-cols-12 md:gap-[30px]">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex justify-between">
              <p class="capitalize dm-sans-bold text-[14px] leading-[21px] mr-[20px] w-[70px]">coupons Activated</p>
              <div class="flex justify-between flex-grow flex-wrap gap-y-[12px]">
                <div class="flex items-start">
                  <div class="bg-[#00BB5A] text-white mr-[2px] rounded-[4px] h-[38px] flex items-center justify-center dm-sans-bold text-[14px] leading-[14px] p-[10px]">
                    30OFF
                  </div>
                  <button><img src="./images/icon-close-gray.svg"/></button>
                </div>
                <div class="flex items-start">
                  <div class="bg-[#00BB5A] text-white mr-[2px] rounded-[4px] h-[38px] flex items-center justify-center dm-sans-bold text-[14px] leading-[14px] p-[10px]">
                  FREEDEV
                  </div>
                  <button><img src="./images/icon-close-gray.svg"/></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex justify-between">
              <input class="outline-none flex-grow h-[38px] rounded-[20px] border-[1px] border-[#626262] text-[12px] leading-[22px] px-[20px] py-[9px] placeholder:text-[#171717]" placeholder="Enter coupon code"/>
              <button class="dm-mono-medium uppercase text-white w-[82px] h-[38px] flex items-center justify-center text-[16px] leading-[21px] bg-[#6A31F7] rounded-[20px] ml-[10px]">OK</button>
            </div>
          </div>
        </div>
        <hr class="border-[#E2E1E1] mb-[13px] mt-[15px]"/>
        <div class="grid grid-cols-12 md:gap-[30px]">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex justify-between">
              <p class="capitalize dm-sans-bold text-[14px] leading-[21px] mr-[20px] min-w-[70px]">loyalty points</p>
              <div class="relative w-full">
                <p class="flex items-center text-[12px] leading-[18px] text-[#171717] info-box-tooltip">
                  <span class="underline">You have <b class="dm-sans-bold">39</b> active loyalty points and can use them as discount</span>
                  <svg class="ml-[5px] min-w-[13px]" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
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
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex justify-between">
              <input class="outline-none flex-grow h-[38px] rounded-[20px] border-[1px] border-[#626262] text-[12px] leading-[22px] px-[20px] py-[9px] placeholder:text-[#171717]" placeholder="39 points or enter less points"/>
              <button class="dm-mono-medium uppercase text-white w-[82px] h-[38px] flex items-center justify-center text-[16px] leading-[21px] bg-[#6A31F7] rounded-[20px] ml-[10px]">USE</button>
            </div>
          </div>
        </div>
        <hr class="border-[#E2E1E1] mb-[16px] mt-[15px]"/>

        <div class="grid grid-cols-12">
          <div class="col-span-12 lg:col-span-5">

          </div>
          <div class="col-span-12 lg:col-span-7">
            <div class="">
              <div class="flex justify-between mb-[10px]">
                <p class="text-[#FF6E35] dm-sans-bold text-[16px] leading-[22px]">You have saved</p>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px]">-3.97 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="text-[#00BB5A] dm-sans-bold text-[16px] leading-[22px]">As member you’ve saved</p>
                <p class="text-[#00BB5A] dm-sans-bold text-[14px]">-12.93 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="dm-sans-bold text-[16px] leading-[22px]">Subtotal</p>
                <p class="dm-sans-bold text-[14px]">23.46 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="dm-sans-bold text-[16px] leading-[22px]">Delivery</p>
                <p class="dm-sans-bold text-[14px]">4.74 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="dm-sans-bold text-[16px] leading-[22px]">VAT 21%</p>
                <p class="dm-sans-bold text-[14px]">7.50 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="dm-sans-bold text-[16px] leading-[22px]">Subtotal</p>
                <p class="dm-sans-bold text-[14px]">29.70 €</p>
              </div>
              <div class="flex justify-between mb-[10px]">
                <p class="dm-sans-bold text-[16px] leading-[22px]">Delivery</p>
                <p class="dm-sans-bold text-[14px]">6.00 €</p>
              </div>
              <hr class="border-black mb-[15px]"/>
              <div class="flex justify-between mb-[5px]">
                <p class="dm-sans-bold text-[20px]">Total</p>
                <p class="dm-sans-bold text-[20px]">35.70 €</p>
              </div>
              <div class="flex justify-between">
                <div class="relative w-full">
                  <p class="flex items-center dm-sans-bold text-[12px] leading-[14px] text-[#00BB5A] info-box-tooltip">
                    <span class="underline">Member would save</span>
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

                
                <p class="dm-sans-bold text-[12px] text-[#00BB5A] min-w-fit">-8.50 €</p>
              </div>           

            </div>
          </div>
        </div>
    </div>
 </div>
</section>

<?php include('./footer.php'); ?>