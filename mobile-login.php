<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">
    <div class="pt-[14px] pb-[27px]">
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[36px] text-center">Login to your account</h3>
        <div>
                <div class="w-full input-left2 mb-[26px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Password
                        </label>
                    </div>
                </div>  
                <div class="flex justify-between mt-[24px] mb-[20px]">
                    <div>
                    <label class="custom-label flex items-center">
                        <div class="bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center mr-[15px] lg:mr-[2.8px] min-w-[28px] w-[28px] lg:min-w-[15px] lg:!w-[15px] h-[28px] lg:!h-[15px]">
                            <input type="checkbox" class="hidden" checked>
                            <svg class="hidden min-w-[28px] lg:min-w-4 w-[28px] lg:w-4 h-[28px] lg:h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                        </div>
                        <span class="select-none abel text-[#626262] text-[14px] leading-[20px] tracing-[-1%]"> Remember me</span>
                    </label>
                    </div>
                    <button class="abel text-[14px] leading-[20px] text-[#626262] underline forgot-password-modal-btn">Forgot password?</button>
                </div>
        </div>
        <button class="flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px]">LOgin <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        <button class="mt-[8px] abel text-[14px] leading-[20px] underline login-register-btn-modal">No account? Create one here</button>
    </div>
</section>

<?php include('./footer.php'); ?>