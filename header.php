<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

<style>
body {
        font-family: "DM Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
}
.dm-mono-light {
  font-family: "DM Mono", monospace;
  font-weight: 300;
  font-style: normal;
}

.dm-mono-regular {
  font-family: "DM Mono", monospace;
  font-weight: 400;
  font-style: normal;
}

.dm-mono-medium {
  font-family: "DM Mono", monospace;
  font-weight: 500;
  font-style: normal;
}

.dm-mono-light-italic {
  font-family: "DM Mono", monospace;
  font-weight: 300;
  font-style: italic;
}

.dm-mono-regular-italic {
  font-family: "DM Mono", monospace;
  font-weight: 400;
  font-style: italic;
}

.dm-mono-medium-italic {
  font-family: "DM Mono", monospace;
  font-weight: 500;
  font-style: italic;
}

.dm-sans-regular {
  font-family: "DM Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}
.dm-sans-medium {
  font-family: "DM Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight:500;
  font-style: normal;
}
.dm-sans-bold {
  font-family: "DM Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
}
.abel {
  font-family: "DM Sans", sans-serif;
  font-weight: 400;
  font-style: normal;
}

</style>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/main.css" />
    <title>Pitshop design</title>

  </head>

    <header class="w-full lg:block">
        <div class="container pt-[9px] pb-[11px] bg-[#3E179E] w-full min-w-[100vw] hidden lg:block">
            <div class="grid grid-cols-12 gap-4 items-center">
                <div class="col-span-7">
                </div>
                <div class="col-span-5">
                    <div class="flex justify-between items-center">
                        <a href="" class="language-btn hover-svg flex items-center justify-center text-white font-[14px] tracking-[-1%] leading-[20px]">English 
                            <svg class="ml-[2px]" width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 5L0.401924 0.5L5.59808 0.5L3 5Z" fill="#FFFFFF"/>
                            </svg>
                        </a>
                        <div class="relative">
                            <a href="" class="info-dropdown-btn hover-svg flex items-center justify-center text-white font-[14px] tracking-[-1%] leading-[20px]">Info 
                                <svg class="ml-[2px]" width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 5L0.401924 0.5L5.59808 0.5L3 5Z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                            <div class="hidden info-dropdown-main flex flex-col">
                                <a href="" class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[13px]">Apie mus</a>
                                <a href="" class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[13px]">Atsiskaitymo būdai</a>
                                <a href="" class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[13px]">Prekių pristatymas</a>
                                <a href="" class="abel text-[14px] leading-[20px] tracing-[-1%] mb-[13px]">Prekių grąžinimas</a>
                                <a href="" class="abel text-[14px] leading-[20px] tracing-[-1%]">Kontaktai</a>
                            </div>
                        </div>
                        <a href="tel:+37060366786" class="flex items-center justify-center text-white font-[14px] tracking-[-1%] leading-[20px]"><img src="./images/icon-phone.png" class="mr-[4px]" /> +370 603 66 786</a>
                        <a href="mailto:info@pitshop.com" class="flex items-center justify-center text-white font-[14px] tracking-[-1%] leading-[20px]"><img src="./images/icon-mail.png" class="mr-[4px]" /> info@pitshop.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-[#4F23BB] min-w-[100vw]">
            <div class="grid grid-cols-12 md:gap-4 pt-[23px] pb-[19px] items-center">
                <div class="col-span-12 lg:col-span-3 pb-[16px] md:pb-0">
                    <a href="./"><img src="./images/logo.png" class="xl:max-w-[296px] md:max-w-auto max-h-[53px] max-w-[202px]"/></a>
                </div>
                <div class="col-span-12 lg:col-span-5">
                    <div class="grid grid-cols-12 md:gap-4 items-center">
                        <div class="col-span-12 lg:px-[30px]">
                            <form class=" w-full bg-white rounded-[20px] overflow-hidden flex items-center justify-between pr-[14px]">
                                <input placeholder="Search products" class="text-[16px] leading-[22px] pt-[11px] pb-[8px] pl-[19px] text-[#4F23BB] grow outline-none pr-[10px] placeholder:text-[#626262] bg-[#F8F6F7]"/>
                                <button><img src="./images/icon-search.png"/></button>
                            </form>
                        </div>
                    </div>
                </div>
                        <div class="hidden lg:block md:col-span-4">
                            <div class="flex items-center justify-between">
                                <div class="relative">
                                    <button class="login-btn-dropdown flex items-center text-left text-white font-[14px] leading-[20px] tracking-[-1%] button-notify max-w-[200px]">
                                        <div>
                                            <svg class="mr-[10px]" width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_658_126377)">
                                            <path d="M10.719 12.979C7.1426 12.979 4.22949 10.0659 4.22949 6.4895C4.22949 2.91311 7.1426 0 10.719 0C14.2954 0 17.2085 2.91311 17.2085 6.4895C17.2085 10.0659 14.2954 12.979 10.719 12.979ZM10.719 1.43268C7.93323 1.43268 5.66217 3.69843 5.66217 6.4895C5.66217 9.28057 7.92792 11.5463 10.719 11.5463C13.5101 11.5463 15.7758 9.28057 15.7758 6.4895C15.7758 3.69843 13.5101 1.43268 10.719 1.43268Z" fill="white"/>
                                            <path d="M20.1738 24L16.7088 17.3725C16.2419 16.4758 15.4778 15.9398 14.6659 15.9398H6.78092C5.96907 15.9398 5.20497 16.4758 4.73802 17.3725L1.27307 24L0.00488281 23.3367L3.46984 16.7092C4.19148 15.3296 5.42783 14.5125 6.78092 14.5125H14.6659C16.019 14.5125 17.2607 15.3349 17.977 16.7092L21.442 23.3367L20.1738 24Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_658_126377">
                                            <rect width="21.4424" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                        </div> 
                                        Login to account </button>
                                    <div class="hidden login-btn-dropdown-main">
                                        <button class="w-full rounded-[20px] border-[1px] border-black bg-black text-white flex items-center justify-between h-[20px] mb-[17px] px-[11px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%] uppercase login-modal-btn">Login <img src="./images/icon-right-white.svg"/></button>
                                        <button class="w-full rounded-[20px] border-[1px] border-black bg-black text-white flex items-center justify-between h-[20px] mb-[17px] px-[11px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%] uppercase request-modal-btn">Request <img src="./images/icon-right-white.svg"/></button>
                                        <a href="" class="rounded-[20px] border-[1px] border-black flex items-center justify-between h-[20px] mb-[17px] px-[11px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%] uppercase">For professionals <img src="./images/icon-right-dark.svg"/></a>
                                        <button class="register-modal-btn w-full rounded-[20px] border-[1px] border-black flex items-center justify-between h-[20px] mb-[23px] px-[11px] dm-mono-medium text-[12px] leading-[15px] tracing-[3%] uppercase">Register <img src="./images/icon-right-dark.svg"/></button>
                                        <div>
                                            <a class="flex items-center mb-[14px]">
                                                <div class="flex items-center justify-center mr-[8px] border-[1px] border-black rounded-full h-[20px] w-[20px] dm-sans-medium text-[10px] tracing-[-1%]">16</div>
                                                <span class="text-[14px] leading-[20px] tracing-[-1%] abel">Liked items</span>
                                            </a>
                                            <a class="flex items-center mb-[14px]">
                                                <div class="flex items-center justify-center mr-[8px] border-[1px] border-black rounded-full h-[20px] w-[20px] dm-sans-medium text-[10px] tracing-[-1%]">5</div>
                                                <span class="text-[14px] leading-[20px] tracing-[-1%] abel">Compare</span>
                                            </a>
                                            <a class="flex items-center mb-[16px]">
                                                <div class="flex items-center justify-center mr-[8px] border-[1px] border-black rounded-full h-[20px] w-[20px] dm-sans-medium text-[10px] tracing-[-1%]">3</div>
                                                <span class="text-[14px] leading-[20px] tracing-[-1%] abel">Shopping bag</span>
                                            </a>
                                        </div>
                                        <hr class="border-[#E2E1E1] mb-[12px]"/>
                                        <div class="flex justify-between items-center">
                                            <a href="" class="text-[10px] w-[20px] h-[20px] text-white uppercase flex items-center justify-center tracing-[-1%] bg-[#6A31F7] rounded-full">EN</a>
                                            <a href="" class="text-[10px] w-[20px] h-[20px] text-white uppercase flex items-center justify-center tracing-[-1%] bg-[#6A31F7] rounded-full">lt</a>
                                            <a href="" class="text-[10px] w-[20px] h-[20px] text-white uppercase flex items-center justify-center tracing-[-1%] bg-[#6A31F7] rounded-full">lv</a>
                                            <a href="" class="text-[10px] w-[20px] h-[20px] text-white uppercase flex items-center justify-center tracing-[-1%] bg-[#6A31F7] rounded-full">ee</a>
                                            <a href="" class="text-[10px] w-[20px] h-[20px] text-white uppercase flex items-center justify-center tracing-[-1%] bg-[#6A31F7] rounded-full">ru</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="" class="button-notify button-notify-green"><div><span>123</span><img src="./images/icon-star.png"/></div></a>
                                </div>
                                <div>
                                    <a href="" class="button-notify button-notify-green"><div><span>3</span><img src="./images/icon-heart.png"/></div></a>
                                </div>
                                <div>
                                    <button class="flex items-center text-white font-[14px] leading-[20px] tracking-[-1%] button-notify header-cart-btn"><div><span>3</span><img src="./images/icon-cart.png" class="mr-[15px]"/></div> Cart </button>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <div class="container bg-[#4F23BB] min-w-[100vw] pb-[19px] dm-mono-regular hidden sm:block">
            <ul class="header-desktop-navbar">
                <li><a href="./great_offers.php"><svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="white"/>
                </svg> Great Offers</a></li>

                <li><a class="hover-menu-item" data-hoverItem="professionals-menu-main" href=""><svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="white"/>
                </svg> For Professionals</a></li>

                <li><a href=""><svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="white"/>
                </svg> For Do It Yourself</a></li>

                <li><a class="hover-menu-item" data-hoverItem="popular-items-menu-main" href=""><svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="white"/>
                </svg> Universal Autoitems</a></li>

                <li><a href=""><svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2.5" cy="2.5" r="2.5" fill="white"/>
                </svg> Popular Autoitems</a></li>
            </ul>
        </div>
    </header>

<body>

<div class="hidden menu-item-main popular-items-menu-main container">
    <ul class="mb-[23px] list-intro list-intro-v2">
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
    </ul>
    <ul class="mt-[28px] list-intro list-intro-v2">
        <li class="list-intro-active list-item-v1"><a>Good to know <img src="./images/icon-btn-right.svg"/></a></li>
        <li class="list-intro-active list-item-v1"><a>Good to know <img src="./images/icon-btn-right.svg"/></a></li>
    </ul>
</div>

<div class="hidden menu-item-main professionals-menu-main container">
    <ul class="mb-[23px] list-intro list-intro-v2">
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto cosmetics & air fresheners</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
        <li><a><img src="./images/icon-right-orange.svg"/> Auto body repair materials</a></li>
    </ul>
    <ul class="mt-[28px] list-intro list-intro-v2">
        <li class="list-intro-active list-item-v1"><a>Good to know <img src="./images/icon-btn-right.svg"/></a></li>
        <li class="list-intro-active list-item-v1"><a>Good to know <img src="./images/icon-btn-right.svg"/></a></li>
    </ul>
</div>

<div class="hidden language-select-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] language-btn-modal"><img src="./images/icon-modal-close.svg"/></button>
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[15px] text-center">Select country & language</h3>
        <p class="mb-[30px] abel text-[14px] leading-[20px] tracing-[-1%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros eu dolor convallis condimentum. Donec ullamcorper pretium metus at elementum.</p>
        <div>
                <select name="cars" class="custom-select mb-[15px] text-[14px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                    <option>Lithuania</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>

                <select name="cars" class="custom-select text-[14px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                    <option>English</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>

        </div>
        <button class="flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] mt-[23px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px]">Choose <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
    </div>
</div>

<div class="hidden register-modal-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] register-modal-btn"><img src="./images/icon-modal-close.svg"/></button>
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[35px] text-center">New account register</h3>
        <div>
                <div class="w-full input-left2 mb-[26px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">First Name
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2 mb-[26px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Last Name
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2 mb-[26px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email Address
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2 mb-[14px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Password
                        </label>
                    </div>
                </div>  
        </div>
                    <label class="custom-label flex items-center mb-[10px]">
                        <div class="bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center mr-[2.8px] min-w-[15px] !w-[15px] !h-[15px]">
                            <input type="checkbox" class="hidden" checked>
                            <svg class="hidden w-4 h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
                        </div>
                        <span class="select-none abel text-[#626262] text-[14px] leading-[20px] tracing-[-1%]"> I agree with <a href="" class="text-[#6A31F7] underline">Shopping rules</a> and <a href="" class="text-[#6A31F7] underline">Privacy Policy.</a></span>
                    </label>
        <button class="create-modal-submit-btn flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] mt-[23px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px] mb-[14px]">Create account <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        <button class="create-modal-submit-btn2 flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] mt-[23px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px] mb-[14px]">Create account <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        <p class="abel text-[#626262] text-[14px] leading-[20px] tracing-[-1%]"> Already have an account?</p>
        <p class="abel text-[#626262] text-[14px] leading-[20px] tracing-[-1%]"><button class="text-[#6A31F7] underline login-register-btn-modal">Log in instead</button> or <button class="forgot-register-btn-modal text-[#6A31F7] underline">Reset password</button></p>
    </div>
</div>

<div class="hidden login-modal-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] login-modal-btn"><img src="./images/icon-modal-close.svg"/></button>
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
                <div class="w-full input-left2 input-error">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Password
                        </label>
                    </div>
                    <div class="flex items-center mt-[7px]">
                        <img src="./images/icon-danger.svg" class="mr-[8px]"/>
                        <p class="text-[#D53C00] abel text-[12px] leading-[15px]">Neteisingi prisijungimo duomenys</p>
                    </div>
                </div>  
                <div class="flex justify-between mt-[6px] mb-[20px]">
                    <div>
                    <label class="custom-label flex items-center">
                        <div class="bg-white border-[1px] border-[#626262] rounded-[2px] flex justify-center items-center mr-[2.8px] min-w-[15px] !w-[15px] !h-[15px]">
                            <input type="checkbox" class="hidden" checked>
                            <svg class="hidden w-4 h-4 text-white bg-[#00BB5A] pointer-events-none" viewBox="0 0 172 172"><g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="1"/></g></svg>
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
</div>

<div class="hidden request-modal-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] request-modal-btn"><img src="./images/icon-modal-close.svg"/></button>
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[36px] text-center">Request</h3>

                <select name="cars" class="custom-select mb-[26px] text-[14px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[11px] py-[10px]">
                    <option>Choose request type*</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>

                <textarea rows="8" class="mb-[28px] bg-transparent border-[1px] border-black rounded-[8px] text-[#626262] p-[11px] w-full h-full outline-none">Description*</textarea>

        <div>
                <div class="w-full input-left2 mb-[33px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Name *
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2 mb-[33px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Email Address *
                        </label>
                    </div>
                </div>  
                <div class="w-full input-left2 mb-[50px]">
                    <div class="relative w-full min-w-[200px] h-10">
                        <input
                        class="peer placeholder:text-black leading-[20px] w-full h-full bg-transparent text-black font-sans outline-none disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border border-b-[1px] border-b-[#9E9D9D] !border-x-0 focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 placeholder:text-black leading-[20px]"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[14px] peer-focus:text-[14px] before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:pointer-events-none after:transition-all peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900">Mob. Phone number *
                        </label>
                    </div>
                </div>  
        </div>
        <button class="flex items-center justify-center w-full uppercase text-white bg-[#6A31F7] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px]">Send request <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
    </div>
</div>

<div class="hidden success-modal-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[20px] p-[24px] relative">
        <div class="flex flex-col px-[24px] items-center justify-center bg-[#F8F6F7] rounded-[8px] min-h-[199px] mb-[27px]">
            <h3 class="text-[#00BB5A] dm-sans-bold text-[28px] mb-[6px]">Sveiki!</h3>
            <img src="./images/icon-register-success.svg "/>
            <p class="mt-[23px] dm-sans-bold text-[14px] leading-[20px] text-center">Ačiū, Jūsų registraciją gavome, per 2 d.d. su Jumis susisieks atsakingas vadybininkas</p>
        </div>
        <div class="flex justify-center">
            <button class="success-modal-submit-btn flex items-center justify-center w-full uppercase text-white bg-[#00BB5A] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px] max-w-[194px]">Continue <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        </div>
    </div>
</div>

<div class="hidden success-modal-main2 modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[20px] p-[24px] relative">
        <div class="flex flex-col px-[24px] items-center justify-center bg-[#F8F6F7] rounded-[8px] min-h-[199px] mb-[27px]">
            <h3 class="text-[#00BB5A] dm-sans-bold text-[28px] mb-[6px]">Sveiki!</h3>
            <img src="./images/icon-register-success.svg "/>
            <p class="mt-[23px] dm-sans-bold text-[14px] leading-[20px] text-center">Ačiū, Jūsų registracija sėkminga!</p>
        </div>
        <div class="flex justify-center">
            <button class="success-modal-submit-btn2 flex items-center justify-center w-full uppercase text-white bg-[#00BB5A] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px] max-w-[194px]">Mano paskyra <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>
        </div>
    </div>
</div>

<div class="hidden forgot-password-modal-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] forgot-modal-btn-close"><img src="./images/icon-modal-close.svg"/></button>
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
        <button class="abel text-[#6A31F7] text-[14px] leading-[20px] underline ml-[10px] back-to-login-btn">Back to  login</button>
    </div>
</div>

<div class="hidden submit-forgot-password-main modal-body-main z-10">
    <div class="bg-white min-w-[433px] max-w-[433px] min-h-[329px] rounded-[8px] pt-[14px] pb-[27px] px-[36px] relative">
        <button class="absolute right-[11px] top-[10px] submit-forgot-password-btn-close"><img src="./images/icon-modal-close.svg"/></button>
        <h3 class="dm-sans-bold text-[20px] tracing-[-1%] mb-[30px] text-center">Check Your Email</h3>
        <div class="flex items-center justify-center">
            <img class="text-center mb-[30px]" src="./images/icon-check-email.svg"/>
        </div>
        <p class="abel text-[14px] leading-[20px] mb-[12px]">Please check the email address me@email.com for instructions to reset your password.</p>
        <button class="flex items-center justify-center w-full uppercase text-[#6A31F7] border-[1px] border-[#6A31F7] dm-mono-medium text-[16px] mb-[17px] leading-[21px] tracing-[3%] rounded-[20px] min-h-[35px]">Resend email <img class="ml-[10px]" src="./images/icon-show-more.svg"/></button>
    </div>
</div>

<div class="header-cart-btn-main w-full hidden fixed left-0 right-0 top-0 z-10 min-h-[100vh]">
    <div class="flex min-h-[100vh] justify-end">
        <div class="bg-white px-[26px] py-[20px] min-w-[531px] overflow-scroll max-h-[100vh]">
            <div class="flex items-center justify-between mb-[24px]">
                <p class="dm-sans-bold text-[20px]">Shopping cart (5)</p>
                <button class="header-cart-btn"><img src="./images/icon-modal-close.svg"/></button>
            </div>
            <hr class="border-[#E2E1E1] mb-[10px]" />
            <div class="flex justify-between mb-[34px]">
                <img src="./images/product-thumbnail-small.svg" class="h-[90px] w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div>
                    <div class="max-w-[189px] mb-[20px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                        <p class="text-[12px] leading-[22px]">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
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
                    <div class="min-w-[140px]">
                        <div class="flex justify-end">
                            <p class="line-through text-[14px]">13.90 €</p>
                            <p class="dm-sans-bold text-[14px] ml-[15px]">2 x 13.90 €</p>
                        </div>
                        <p class="text-right text-[14px] mb-[4px]">In total 21.80 €</p>
                        <div class="flex justify-evenly items-center bg-[#00BB5A] rounded-[4px] p-[5px] mb-[20px]">
                            <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">Member saves</p>
                            <img src="./images/icon-border-dotted.svg"/>
                            <p class="abel text-[16px] leading-[16px] text-white">-22%</p>
                        </div>
                        <button class="text-right float-right"><img src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            </div>
            <hr class="border-[#E2E1E1] mb-[10px]" />
            <div class="flex justify-between mb-[34px]">
                <img src="./images/product-thumbnail-small.svg" class="h-[90px] w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div>
                    <div class="max-w-[189px] mb-[20px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                        <p class="text-[12px] leading-[22px]">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
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
                    <div class="min-w-[140px]">
                        <div class="flex justify-end mb-[10px]">
                            <p class="line-through text-[14px]">9.90 €</p>
                            <p class="dm-sans-bold text-[14px] ml-[15px]">13.90 €</p>
                        </div>
                        <div class="flex justify-evenly items-center bg-[#FF6E35] rounded-[4px] p-[5px] mb-[20px]">
                            <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">coupon</p>
                            <img src="./images/icon-border-dotted.svg"/>
                            <p class="abel text-[16px] leading-[16px] text-white">30OFF</p>
                        </div>
                        <button class="text-right float-right"><img src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            </div>
            <hr class="border-[#E2E1E1] mb-[10px]" />
            <div class="flex justify-between mb-[34px]">
                <img src="./images/product-thumbnail-small.svg" class="h-[90px] w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div>
                    <div class="max-w-[189px] mb-[20px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                        <p class="text-[12px] leading-[22px]">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
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
                    <div class="max-w-[140px]">
                        <div class="flex justify-end mb-[10px]">
                            <p class="line-through text-[14px]">9.90 €</p>
                            <p class="dm-sans-bold text-[14px] ml-[15px]">13.90 €</p>
                        </div>
                        <div class="flex items-center border-[#00BB5A] border-[1px] rounded-[4px] p-[5px] mb-[3px]">
                            <p class="uppercase text-[#00BB5A] abel text-[16px] leading-[16px] max-w-[110px]">Member would save -22%</p>
                        </div>
                        <p class="text-[10px] leading-[12px] text-[#00BB5A] mb-[13px] underline">Create an account and become a Member</p>
                        <button class="text-right float-right"><img src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            </div>
            <hr class="border-[#E2E1E1] mb-[10px]" />
            <div class="flex justify-between mb-[34px]">
                <img src="./images/product-thumbnail-small.svg" class="h-[90px] w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div>
                    <div class="max-w-[189px] mb-[20px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                        <p class="text-[12px] leading-[22px]">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
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
                    <div class="min-w-[140px]">
                        <div class="flex justify-end mb-[10px]">
                            <p class="line-through text-[14px]">9.90 €</p>
                            <p class="dm-sans-bold text-[14px] ml-[15px]">13.90 €</p>
                        </div>
                        <div class="flex justify-evenly items-center bg-[#D53C00] rounded-[4px] p-[5px] mb-[20px]">
                            <p class="uppercase text-white abel text-[16px] leading-[16px] max-w-[68px]">Sellout</p>
                            <img src="./images/icon-border-dotted.svg"/>
                            <p class="abel text-[16px] leading-[16px] text-white">-60%</p>
                        </div>
                        <button class="text-right float-right"><img src="./images/icon-delete-gray.svg"/></button>
                    </div>
                
            </div>
            <hr class="border-[#E2E1E1] mb-[10px]" />
            <div class="flex justify-between mb-[34px]">
                <img src="./images/product-thumbnail-small.svg" class="h-[90px] w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1]"/>
                <div>
                    <div class="max-w-[189px]">
                        <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
                        <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
                        <p class="text-[12px] leading-[22px]">vaškas kėbului 500 ml </p>
                    </div>
                    <div class="flex items-center">
                        <p class="text-[12px] leading-[22px]">1</p>
                    </div>
                </div>
                    <div class="min-w-[140px]">
                        <div class="flex justify-evenly items-center border-[1px] border-[#6A31F7] rounded-[4px] p-[5px] mb-[20px]">
                            <p class="uppercase text-[#6A31F7] abel text-[16px] leading-[16px] max-w-[68px]">Free gift</p>
                            <img src="./images/icon-border-dotted-violet.svg"/>
                            <img src="./images/icon-gift-violet.svg"/>
                        </div>
                    </div>
                
            </div>

            <div class="flex justify-between items-center">
                <p class="text-[#FF6E35] dm-sans-bold text-[16px] leading-[22px]">You have saved / as member you’ve saved</p>
                <p class="text-[#FF6E35] dm-sans-bold text-[14px]">-12.93 €</p>
            </div>
            <div class="flex justify-between items-center mb-[5px]">
                <p class="dm-sans-bold text-[20px]">Subtotal</p>
                <p class="dm-sans-bold text-[20px]">29.70 €</p>
            </div>
            <hr class="border-[#E2E1E1] mb-[12px]" />
            <div class="flex items-center justify-between mb-[15px]">
                <div class="flex items-center">
                    <img src="./images/icon-dot-green.svg" class="mr-[6px]"/>
                    <p class="dm-sans-bold text-[10px] leading-[14px] text-[#00BB5A]">Member would save</p>
                </div>
                <a class="text-[10px] leading-[12px] text-[#00BB5A] underline">Create  an account and become a Member</a>
                <p class="text-[12px] text-[#00BB5A]">-8.50 €</p>
            </div>
            <a href="" class="uppercase flex items-center justify-center bg-[#6A31F7] text-white dm-mono-medium text-[16px] leading-[21px] w-full min-h-[37px] rounded-[20px] mb-[15px]">Go to shopping cart</a>
            <a href="" class="uppercase flex items-center justify-center text-[#6A31F7] dm-mono-medium text-[16px] leading-[21px] w-full min-h-[37px] rounded-[20px] border-[1px] border-[#6A31F7]">COntinue Shopping</a>
        </div>
    </div>
</div>