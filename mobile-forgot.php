<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">
    <div class="pt-[14px] pb-[27px]">
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[15px] text-center">Forgotten Password</h3>
        <p class="mb-[58px] abel text-[14px] leading-[20px] tracing-[-1%]">Enter your email address and we will send you instructions to reset your password</p>
        <div>
                <div class="w-full input-left2 mb-[30px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email address
                        </label>
                    </div>
                </div>  
        </div>
        <button class="submit-forgot-password-btn flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] dm-mono-medium text-[16px] mb-[17px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px]">Continue <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        <button class="abel text-[#6A31F7] text-[14px] leading-[20px] underline ml-[10px]">Back to  login</button>
    </div>
</section>

<?php include('./footer.php'); ?>