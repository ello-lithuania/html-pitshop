<?php include('./header.php'); ?>



<section class="container md:min-w-[100vw] mt-[10px] lg:mt-[55px] mb-[47px]">

    <div class="flex items-center mb-[10px] lg:hidden">
        <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
        <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
        <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Batteries</a>
        <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
        <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Battery service</a>
    </div>

  <div class="hr-body mb-[7px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[28px] lg:mb-[44px]">Battery service register</h2>

  <div class="grid grid-cols-12 md:gap-[31px]">
    <div class="col-span-12 lg:col-span-5">
        <div class="border-[#E2E1E1] border-b-[1px] mb-[28px] lg:mb-[31px] lg:max-w-[359px]">
            <button class="button-toggle-checked active flex items-center justify-between w-full h-[37px] bg-[#E9E0FD] rounded-[20px] px-[17px] dm-sans-bold text-[20px] tracing-[-1%]">Battery check 
                <img class="btn-toggle-active" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 9 €</p>
        </div>
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] lg:max-w-[359px] hidden lg:block">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">Battery charge 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 12 €</p>
        </div>
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] lg:max-w-[359px] hidden lg:block">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">Battery change 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 15 €</p>
        </div>

    </div>
    <div class="col-span-12 lg:col-span-7">
        <div class="grid grid-cols-12 md:gap-[30px] gap-y-[10px] mb-[28px] lg:mb-[62px] button-toggle-checked-main">
            <div class="col-span-12 lg:col-span-6">
                <div class="button-toggle-checked2 active bg-[#F0EEEE] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>LT: Vilnius</b></p>
                        <p>Savanorių pr. 186-8 korp.</p>
                        <p>+370 613 18516</p>
                    </div>
                    <img class="btn-toggle-active " src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="button-toggle-checked2 bg-[#F0EEEE] rounded-[8px] py-[8px] px-[13px] flex items-start justify-between">
                    <div class="flex flex-col">
                        <p><b>LT: Klaipėda</b></p>
                        <p>Jūros pr. 186-8 korp.</p>
                        <p>+370 613 18517</p>
                    </div>
                    <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                    <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap lg:flex-nowrap flex-col md:flex-row">
            <div class="flex-1 lg:pr-[15px] pb-[24px] lg:border-r-[1px] border-[#E2E1E1] chooe-date-calendar-main">
                <div class="flex justify-between pb-[8px]">
                    <button><img src="./images/icon-calendar-prev.svg"/></button>
                    <h4 class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] pl-[5px]">2023 February</h4>
                    <button><img src="./images/icon-calendar-next.svg"/></button>
                </div> 
                <hr class="border-[#E2E1E1] mb-[16px]"/>
                <div class="flex justify-between mb-[19px]">
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">M</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">T</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">W</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">M</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">M</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">M</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="uppercase abel text-[14px] leading-[20px] tracing-[-1%]">M</p>
                    </div>
                </div>
                <div class="flex justify-between mb-[20px]">
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">30</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">31</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">1</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">2</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">3</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">4</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">5</p>
                    </div>
                </div>
                <div class="flex justify-between mb-[20px]">
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">6</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">7</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">8</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">9</p>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-10">10</button>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">11</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">12</p>
                    </div>
                </div>
                <div class="flex justify-between mb-[20px]">
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-13">13</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-14">14</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-15">15</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-16">16</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-17">17</button>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">18</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">19</p>
                    </div>
                </div>
                <div class="flex justify-between mb-[20px]">
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-20">20</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-21">21</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-22">22</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-23">23</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-24">24</button>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">25</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">26</p>
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-27">27</button>
                    </div>
                    <div class="text-center flex-1">
                        <button class="dm-sans-bold text-[16px] leading-[22px]" data-time="2023-03-28">28</button>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">1</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">2</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">3</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">4</p>
                    </div>
                    <div class="text-center flex-1">
                        <p class="dm-sans-bold text-[16px] leading-[22px] text-[#9E9D9D] date-disabled">5</p>
                    </div>
                </div>
            </div>
            <div class="flex-1 lg:px-[15px] pb-[24px] border-r-[1px] lg:border-[#E2E1E1] hidden-mobile choose-date-calendar-time-main">
                <h4 class="text-center lg:text-left dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] pl-[5px] pb-[8px]">Time</h4>
                <hr class="border-[#E2E1E1] mb-[12px]"/>

                <div class="grid grid-cols-4 gap-x-[10px] gap-y-[14px] px-[5px]">
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">7:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours disabled w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours disabled w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">8:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">9:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">10:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">11:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">12:40</button>
                    </div>
                    <div class="col-span-1">
                        <button class="btn-choose-hours w-full abel text-[14px] leading-[20px] tracing-[-1%] h-[21px] rounded-[8px] border-[1px]">13:40</button>
                    </div>
                </div>
            </div>
            <div class="choose-date-calendar-results-main hidden">
                <hr class="border-[#E2E1E1] mb-[10px]"/>
                <p class="flex justify-center text-center mb-[10px] dm-sans-bold leading-[22px] text-[16px]">2023-02-13</p>
                <button data-next="1" class="w-full rounded-[20px] bg-[#6A31F7] text-white flex items-center justify-center min-h-[31px] mb-[17px] px-[11px] dm-mono-medium text-[14px] leading-[21px] tracing-[3%] uppercase"><span>Pasirinkti laiką</span> <img class="ml-[10px]" src="./images/icon-right-white.svg"></button>
            </div>
            <div class="flex-1 lg:pl-[15px] pb-[24px] hidden-mobile choose-date-calendar-last-main">
                <h4 class="heading-choose-time text-center lg:text-left dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] pl-[5px] pb-[8px]"><span class="btn-choose-date">2023-02-13</span> <span class="btn-choose-hours">11:00</span></h4>
                <hr class="border-[#E2E1E1] mb-[12px]"/>

                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Name
                        </label>
                    </div>
                </div> 

                <div class="w-full input-left mt-[20px] md:mt-0">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email
                        </label>
                    </div>
                </div> 

                <div class="w-full input-left mb-[35px] mt-[20px] md:mt-0">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Phone number 
                        </label>
                    </div>
                </div> 

                <a href="" class="rounded-[20px] bg-[#6A31F7] text-white flex items-center justify-center lg:justify-between min-h-[35px] mb-[17px] px-[11px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] uppercase">Confirm registration <img class="ml-[10px]" src="./images/icon-right-white.svg"></a>

            </div>
        </div>

    </div>
  </div>

</section>

<section class="container md:min-w-[100vw] mb-[40px] lg:hidden">
    <div class="">
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] lg:max-w-[359px]">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">Battery charge 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 12 €</p>
        </div>
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] lg:max-w-[359px]">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">Battery change 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 15 €</p>
        </div>
    </div>
    <button class="flex justify-between border-[1px] border-[#6A31F7] rounded-[8px] min-h-[60px] w-full py-[14px] pr-[15px] pl-[11px]">
        <div class="flex">
            <img class="mr-[17px]" src="./images/icon-battery-warranty.svg"/>
            <p class="dm-sans-bold text-[14px] text-[#6A31F7]">Battery Warranty</p>
        </div>
        <img src="./images/icon-battery-warranty-btn.svg"/>
    </button>
</section>

<section class="container md:min-w-[100vw] my-[47px] hidden lg:block">

  <div class="hr-body mb-[13px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h2 class="section-title mb-[9px]">Battery warranty service</h2>
  <p class="text-[16px] leading-[22px] mb-[30px]">Applies to branded batteries represented IN THIS ESHOP ONLY</p>


  <div class="grid grid-cols-12 md:gap-[31px]">
    <div class="col-span-12 lg:col-span-5">
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] max-w-[359px]">
            <button class="button-toggle-checked active flex items-center justify-between w-full h-[37px] bg-[#E9E0FD] rounded-[20px] px-[17px] dm-sans-bold text-[20px] tracing-[-1%]">For cars 
                <img class="btn-toggle-active" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive hidden" src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">Up to 110 AH</p>
        </div>
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] max-w-[359px]">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">For trucks 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">From 110 AH to 240 AH</p>
        </div>
        <div class="border-[#E2E1E1] border-b-[1px] mb-[31px] max-w-[359px]">
            <button class="button-toggle-checked flex items-center justify-between w-full h-[37px] rounded-[20px] px-[17px] bg-[#E9E0FD] dm-sans-bold text-[20px] tracing-[-1%]">Warranty info 
                <img class="btn-toggle-active hidden" src="./images/icon-btnToggle-active.svg"/>
                <img class="btn-toggle-inactive " src="./images/icon-btnToggle-inactive.svg"/>
            </button>
            <p class="px-[17px] mt-[2px] dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[8px]">For moto, cars, taxi, trucks</p>
        </div>

    </div>
    <div class="col-span-12 lg:col-span-7">
        <div class="grid grid-cols-12 md:gap-[27px] gap-y-[30px] mb-[25px] button-toggle-checked-main">
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

        <hr class="border-[#E2E1E1] mb-[6px]"/>

        <div class="lt">

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Vilnius</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">TOBIS, Savanorių pr. 187, 8 korp.,</p>
                    <a href="tel:+37061318516" class="text-[16px] leading-[22px] mb-[5px] underline">+370 613 18516</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7:30-16:30</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Kaunas</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">AKUMULIATORIŲ REMONTAS, Siūlų g. 3a, 45202, </p>
                    <a href="tel:+37037341945" class="text-[16px] leading-[22px] mb-[5px] underline">+370 373 41945</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Klaipėda</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ANTANO VAINILAVIČIAUS ĮMONĖ, Šilutės pl. 21,  </p>
                    <a href="tel:+37067173663" class="text-[16px] leading-[22px] mb-[5px] underline">+370 671 73663</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Šiauliai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ŠIAULIŲ DAGRIS, Pramonės g. 6,   </p>
                    <a href="tel:+37068269004" class="text-[16px] leading-[22px] mb-[5px] underline">+370 682 69004</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7.00 - 17.00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Druskininkai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">KURORTO AUTOCENTRAS, Baravykų g. 5a</p>
                    <a href="tel:+37031352798" class="text-[16px] leading-[22px] mb-[5px] underline">+370 313 52798</a>
                    <a href="mailto:info@autosanatorija.lt" class="text-[16px] leading-[22px] mb-[5px] underline">info@autosanatorija.lt</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

        </div>

        <div class="lv hidden">

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Vilnius LV</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">TOBIS, Savanorių pr. 187, 8 korp.,</p>
                    <a href="tel:+37061318516" class="text-[16px] leading-[22px] mb-[5px] underline">+370 613 18516</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7:30-16:30</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Kaunas</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">AKUMULIATORIŲ REMONTAS, Siūlų g. 3a, 45202, </p>
                    <a href="tel:+37037341945" class="text-[16px] leading-[22px] mb-[5px] underline">+370 373 41945</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Klaipėda</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ANTANO VAINILAVIČIAUS ĮMONĖ, Šilutės pl. 21,  </p>
                    <a href="tel:+37067173663" class="text-[16px] leading-[22px] mb-[5px] underline">+370 671 73663</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Šiauliai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ŠIAULIŲ DAGRIS, Pramonės g. 6,   </p>
                    <a href="tel:+37068269004" class="text-[16px] leading-[22px] mb-[5px] underline">+370 682 69004</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7.00 - 17.00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Druskininkai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">KURORTO AUTOCENTRAS, Baravykų g. 5a</p>
                    <a href="tel:+37031352798" class="text-[16px] leading-[22px] mb-[5px] underline">+370 313 52798</a>
                    <a href="mailto:info@autosanatorija.lt" class="text-[16px] leading-[22px] mb-[5px] underline">info@autosanatorija.lt</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

        </div>

        <div class="es hidden">

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Vilnius ES</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">TOBIS, Savanorių pr. 187, 8 korp.,</p>
                    <a href="tel:+37061318516" class="text-[16px] leading-[22px] mb-[5px] underline">+370 613 18516</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7:30-16:30</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Kaunas</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">AKUMULIATORIŲ REMONTAS, Siūlų g. 3a, 45202, </p>
                    <a href="tel:+37037341945" class="text-[16px] leading-[22px] mb-[5px] underline">+370 373 41945</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Klaipėda</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ANTANO VAINILAVIČIAUS ĮMONĖ, Šilutės pl. 21,  </p>
                    <a href="tel:+37067173663" class="text-[16px] leading-[22px] mb-[5px] underline">+370 671 73663</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Šiauliai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">ŠIAULIŲ DAGRIS, Pramonės g. 6,   </p>
                    <a href="tel:+37068269004" class="text-[16px] leading-[22px] mb-[5px] underline">+370 682 69004</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">7.00 - 17.00</p>
                        </div>
                    </div>    
                </div>
            </div>

            <hr class="border-[#E2E1E1] mb-[6px]"/>

            <div class="grid grid-cols-12 md:gap-[27px] mb-[38px] text-center md:text-left">
                <div class="col-span-12 lg:col-span-4">
                    <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] mb-[5px]">Druskininkai</p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <p class="text-[16px] leading-[22px] mb-[5px]">KURORTO AUTOCENTRAS, Baravykų g. 5a</p>
                    <a href="tel:+37031352798" class="text-[16px] leading-[22px] mb-[5px] underline">+370 313 52798</a>
                    <a href="mailto:info@autosanatorija.lt" class="text-[16px] leading-[22px] mb-[5px] underline">info@autosanatorija.lt</a>
                </div>
                <div class="col-span-12 lg:col-span-4 mt-[20px] lg:mt-0">
                    <div class="flex">
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">I - V<br/>VI</p>
                        </div>
                        <div class="flex-1 text-center">
                            <p class="text-[16px] leading-[22px] mb-[5px]">9:00-17:00<br/>9:00-13:00</p>
                        </div>
                    </div>    
                </div>
            </div>

        </div>

    </div>
  </div>

</section>

<?php include('./footer.php'); ?>