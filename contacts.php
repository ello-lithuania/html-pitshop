<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[10px] lg:mb-[34px]">
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Contact us</a>
 </div>

  <div class="hr-body mb-[12px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <div class="grid grid-cols-12 lg:gap-[30px] mb-[40px]">
    <div class="col-span-12 lg:col-span-4">
      <h1 class="dm-sans-medium mb-[24px] text-[#171717] text-[28px] lg:text-[40px] tracing-[-1%]">Contact us</h1>
    </div>
    <div class="col-span-12 lg:col-span-8">
        <div class="flex flex-wrap lg:flex-nowrap items-center mb-[29px] lg:mb-[51px]">
          <div class="w-full lg:w-fit lg:min-w-[110px] lg:mr-[30px]">
            <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[10px] lg:mb-0">Subject</p>
          </div>
          <div class="flex-grow">
                <select name="cars" class="custom-select text-[14px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                    <option>Customer service</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
          </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap items-center mb-[29px] lg:mb-[43px]">
          <div class="w-full lg:w-fit lg:min-w-[110px] lg:mr-[30px]">
            <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mb-[5px] lg:mb-0">Email address</p>
          </div>
          <div class="flex-grow">
                <div class="w-full input-left">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">your@email.com
                        </label>
                    </div>
                </div>  
          </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap mb-[29px] lg:mb-[43px]">
          <div class="w-full lg:w-fit lg:min-w-[110px] lg:mr-[30px]">
            <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mt-[10px] mb-[10px] lg:mb-0">Attachment</p>
          </div>
          <div class="flex-grow">
                <div class="w-full">
                    <label for="dropzone-file" class="flex justify-between w-full min-h-[59px] border-[1px] border-black rounded-[8px] cursor-pointer hover:bg-gray-100">
                        <div class="flex w-full items-center lg:items-start justify-between px-[12px] lg:pt-[5px] lg:pb-[15px] lg:px-[12px]">
                            <div>
                              <p class="text-[14px] leading-[20px] mr-[22px]">Attachment / Choose file</p>
                              <p class="text-[#9E9D9D] text-[16px] leading-[20px]">(optional)</p>
                            </div>
                            <img src="./images/icon-input-file.svg"/>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div> 
          </div>
        </div>
        <div class="flex flex-wrap lg:flex-nowrap mb-[43px]">
          <div class="w-full lg:w-fit lg:min-w-[110px] lg:mr-[30px]">
            <p class="dm-sans-bold text-[16px] leading-[22px] tracing-[-1%] text-[#626262] mt-[10px] mb-[10px] lg:mb-0">Message</p>
          </div>
          <div class="flex-grow">
              <div class="border-[1px] border-black rounded-[8px] px-[20px] py-[10px] mb-[18px]">
                <p class="text-[#626262] text-[16px] leading-[22px]">How we can help?</p>
                <textarea rows="8" class="bg-transparent w-full h-full outline-none"></textarea>
              </div>

              <label class="custom-label flex items-center mb-[25px] lg:mb-[33px]">
                  <div class="mr-[18px] bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center lg:mr-[8px] min-w-[15px] !w-[15px] !h-[15px]">
                      <input type="checkbox" class="hidden" checked>
                      <svg class="hidden min-w-[28px] lg:min-w-4 w-[28px] lg:w-4 h-[28px] lg:h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                  </div>
                  <span class="select-none text-[#626262] text-[12px] leading-[15px] tracing-[-1%] mt-[10px]"> Sutinku, kad nulla et risus quis mi tincidunt condimentum. Donec eu ullamcorper purus. Curabitur sem felis, dignissim nec auctor nec, sagittis eu velit.</span>
              </label>

              <button class="uppercase text-white dm-mono-medium w-full text-[16px] leading-[21px] min-h-[37px] rounded-[20px] bg-[#6A31F7]">Send</button>
          </div>
        </div>
    </div>
  </div>

</section>

<?php include('./footer.php'); ?>