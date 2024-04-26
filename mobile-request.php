<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px] pb-[40px] pt-[20px]">

  <div class="hr-body mb-[7px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

    <div class="">
        <h3 class="dm-sans-bold text-[28px] tracing-[-1%] mb-[16px]">Request</h3>
        <p class="text-[14px] leading-[20px] mb-[31px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros eu dolor convallis condimentum. Donec ullamcorper pretium metus at elementum.</p>

                  <select name="cars" class="mb-[20px] custom-select text-[14px] max-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                      <option>Choose request type*</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>
                  <select name="cars" class="mb-[22px] custom-select text-[14px] max-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                      <option>Description*</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>

        <div class="grid grid-cols-12 gap-y-[29px] md:gap-[31px] mb-[28px]">
            <div class="col-span-12 md:col-span-6">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Name *
                        </label>
                    </div>
                </div>  
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                    <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email Address *
                        </label>
                    </div>
                </div>  
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                    <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Mob. Phone number *
                        </label>
                    </div>
                </div>  
            </div>
        </div>

        <button class="w-full uppercase text-white bg-[#6A31F7] rounded-[20px] min-h-[35px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] flex items-center justify-center">Send request <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>

    </div>

</section>

<?php include('./footer.php'); ?>