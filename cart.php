<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[20px] lg:mt-[30px]">

  <div class="hr-body mb-[16px] hidden lg:flex">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <h1 class="dm-sans-medium mb-[19px] text-[#171717] text-[28px] lg:text-[40px] tracing-[-1%]">Shopping cart<span class="lg:hidden">(5)</span></h1>

  <div class="grid grid-cols-12 md:gap-[31px]">
    <div class="col-span-12 lg:col-span-6">
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
                      <button class="cart-count-items-main-btnMinus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[42px] lg:min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between gap-x-[12px] min-w-[120px]">
                      <img src="./images/icon-cart-1-mobile.svg"/>
                      <img src="./images/icon-cart-2-mobile.svg"/>
                      <img src="./images/icon-cart-3-mobile.svg"/>
                      <img src="./images/icon-cart-4-mobile.svg"/>
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
            <button class="h-[30px] uppercase lg:capitalize dm-mono-medium rounded-[20px] text-[14px] lg:text-[12px] leading-[21px] lg:leading-[15px] w-[87px] lg:w-[80px] lg:h-[20px] flex items-center justify-center border-black border-[1px]">Add x 2</button>
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
                      <button class="cart-count-items-main-btnMinus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[42px] lg:min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between gap-x-[12px] min-w-[120px]">
                      <img src="./images/icon-cart-1-mobile.svg"/>
                      <img src="./images/icon-cart-2-mobile.svg"/>
                      <img src="./images/icon-cart-3-mobile.svg"/>
                      <img src="./images/icon-cart-4-mobile.svg"/>
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
                      <button class="cart-count-items-main-btnMinus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[42px] lg:min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between gap-x-[12px] min-w-[120px]">
                      <img src="./images/icon-cart-1-mobile.svg"/>
                      <img src="./images/icon-cart-2-mobile.svg"/>
                      <img src="./images/icon-cart-3-mobile.svg"/>
                      <img src="./images/icon-cart-4-mobile.svg"/>
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
                              <p class="uppercase text-[#00BB5A] abel text-[12px] lg:text-[16px] leading-[13px] lg:leading-[16px] max-w-[110px]">Member would save -22%</p>
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
                      <button class="cart-count-items-main-btnMinus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[42px] lg:min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between gap-x-[12px] min-w-[120px]">
                      <img src="./images/icon-cart-1-mobile.svg"/>
                      <img src="./images/icon-cart-2-mobile.svg"/>
                      <img src="./images/icon-cart-3-mobile.svg"/>
                      <img src="./images/icon-cart-4-mobile.svg"/>
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
                      <button class="cart-count-items-main-btnMinus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-minus.svg"/></button>
                      <div class="min-w-[42px] lg:min-w-[33px] dm-mono-medium text-[14px] leading-[21px] text-center cart-count-items-main-counters">1</div>
                      <button class="cart-count-items-main-btnPlus w-[29px] lg:w-[18px] h-[28px] lg:h-[18px] rounded-full p-[3.75px] flex items-center justify-center border-[1px] border-[#9E9D9D]"><img src="./images/icon-plus.svg"/></button>
                  </div>
                  <div class="flex justify-between gap-x-[12px] min-w-[120px]">
                      <img src="./images/icon-cart-1-mobile.svg"/>
                      <img src="./images/icon-cart-2-mobile.svg"/>
                      <img src="./images/icon-cart-3-mobile.svg"/>
                      <img src="./images/icon-cart-4-mobile.svg"/>
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

            <div class="lg:hidden">
              <hr class="border-[#6A31F7] "/>
              <div class="flex justify-center">
                <button class="my-[5px] flex justify-center items-center w-full uppercase dm-mono-medium text-[14px] leading-[21px] text-[#6A31F7] items-center">Show more <img class="ml-[10px]" src="./images/icon-arrow-down-violet2.svg"/></button>
              </div>
            </div>
    </div>
    <div class="col-span-12 lg:hidden">
        <hr class="border-[#9E9D9D] mb-[15px]"/>
        <div class="grid grid-cols-12 md:gap-[30px]">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex flex-wrap lg:flex-nowrap justify-between">
              <p class="capitalize dm-sans-bold text-[14px] leading-[21px] mr-[20px] w-[70px] w-full lg:w-fit mb-[15px] lg:mb-0">coupons Activated</p>
              <div class="flex lg:justify-between flex-grow flex-wrap gap-y-[12px] mb-[14px] lg:mb-0">
                <div class="flex items-start mr-[7px]">
                  <div class="bg-[#00BB5A] text-white mr-[2px] rounded-[4px] h-[38px] flex items-center justify-center dm-sans-bold text-[14px] leading-[14px] p-[10px]">
                    30OFF
                  </div>
                  <button><img class="hidden lg:block" src="./images/icon-close-gray.svg"/><img class="lg:hidden" src="./images/icon-delete-gray-mobile.svg"/></button>
                </div>
                <div class="flex items-start">
                  <div class="bg-[#00BB5A] text-white mr-[2px] rounded-[4px] h-[38px] flex items-center justify-center dm-sans-bold text-[14px] leading-[14px] p-[10px]">
                  FREEDEV
                  </div>
                   <button><img class="hidden lg:block" src="./images/icon-close-gray.svg"/><img class="lg:hidden" src="./images/icon-delete-gray-mobile.svg"/></button>
                </div>
                <div class="flex items-start">
                  <div class="bg-[#00BB5A] text-white mr-[2px] rounded-[4px] h-[38px] flex items-center justify-center dm-sans-bold text-[14px] leading-[14px] p-[10px]">
                  Pavasarinė BANNER AKCIJA"
                  </div>
                   <button><img class="hidden lg:block" src="./images/icon-close-gray.svg"/><img class="lg:hidden" src="./images/icon-delete-gray-mobile.svg"/></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex justify-between mb-[17px] lg:mb-0">
              <input class="outline-none flex-grow h-[38px] rounded-[20px] border-[1px] border-[#626262] text-[12px] leading-[22px] px-[20px] py-[9px] placeholder:text-[#171717]" placeholder="Enter coupon code"/>
              <button class="dm-mono-medium uppercase text-white w-[82px] h-[38px] flex items-center justify-center text-[16px] leading-[21px] bg-[#6A31F7] rounded-[20px] ml-[10px]">OK</button>
            </div>
            <p class="mb-[16px] text-[#D53C00] flex items-start text-[12px] leading-[18px]"><img class="mt-[4px] mr-[5px]" src="./images/icon-code-error.svg"/> Kodo LOREM IPSUM DOLOR SIT AMET, CONSECTETUR  nėra – bandykite įvesti kodą dar kartą</p>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <hr class="border-[#E2E1E1] mb-[11px]"/>
            <p class="capitalize dm-sans-bold text-[14px] leading-[21px] mr-[20px] w-[70px] w-full lg:w-fit mb-[15px] lg:mb-0">loyalty points</p>
            <div class="relative w-full">
                <p class="flex items-center justify-center text-[12px] leading-[18px] mb-[12px] underline info-box-tooltip">
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
            
            <div class="flex justify-between mb-[17px] lg:mb-0 mb-[33px]">
              <input class="outline-none flex-grow h-[38px] rounded-[20px] border-[1px] border-[#626262] text-[12px] leading-[22px] px-[20px] py-[9px] placeholder:text-[#171717]" placeholder="39 points or enter less points"/>
              <button class="dm-mono-medium uppercase text-white w-[82px] h-[38px] flex items-center justify-center text-[16px] leading-[21px] bg-[#6A31F7] rounded-[20px] ml-[10px]">use</button>
            </div>
          </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-6">
      <div class="float-right w-full lg:max-w-[422px] bg-[#F8F6F7] rounded-[8px] px-[13px] py-[17px]">
        <div class="flex justify-between mb-[10px]">
          <p class="text-[#FF6E35] dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">You have saved</p>
          <p class="text-[#FF6E35] dm-sans-bold text-[14px]">-3.97 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="text-[#00BB5A] dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">As member you’ve saved</p>
          <p class="text-[#00BB5A] dm-sans-bold text-[14px]">-12.93 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">Subtotal</p>
          <p class="dm-sans-bold text-[14px]">23.46 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">Delivery</p>
          <p class="dm-sans-bold text-[14px]">4.74 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">VAT 21%</p>
          <p class="dm-sans-bold text-[14px]">7.50 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">Subtotal</p>
          <p class="dm-sans-bold text-[14px]">29.70 €</p>
        </div>
        <div class="flex justify-between mb-[10px]">
          <p class="dm-sans-bold text-[14px] lg:text-[16px] leading-[22px]">Delivery</p>
          <p class="dm-sans-bold text-[14px]">6.00 €</p>
        </div>
        <hr class="border-black mb-[5px] mb-[15px]"/>
        <div class="flex justify-between mb-[10px] lg:mb-[22px]">
          <p class="dm-sans-bold text-[16px] lg:text-[20px]">Total</p>
          <p class="dm-sans-bold text-[28px] lg:text-[20px]">35.70 €</p>
        </div>
        <a href="" class="text-white bg-[#6A31F7] flex items-center justify-center uppercase dm-mono-medium text-[16px] leading-[21px] mb-[13px] rounded-[20px] min-h-[37px]">Continue</a>
        <p class="uppercase text-center dm-mono-medium text-[12px] leading-[15px] text-[#626262]">Coupon code entered in the next step</p>
      </div>
    </div>
  </div>

</section>

<section class="container md:min-w-[100vw] mt-[40px] bg-[#F3EFFD] py-[22px]">
  <h2 class="lg:mb-[17px] dm-sans-bold text-[16px] lg:text-[20px]">Customers who bought this product also bought</h2>
  <!-- Swiper -->
  <div class="swiper mySwiper custom-swiper custom-product-swiper">
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
    var swiper = new Swiper(".mySwiper", {
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
</section>

<section class="container md:min-w-[100vw] py-[29px]">
  <div class="grid grid-cols-12 md:gap-[31px]">
    <div class="col-span-12 lg:col-span-2">
      <h2 class="mb-[17px] dm-sans-bold text-[16px] lg:text-[20px]">Delivery</h2>
    </div>
    <div class="col-span-12 lg:col-span-10">
      <div class="flex flex-wrap justify-between lg:justify-start gap-x-[20px] gap-y-[10px] lg:gap-[24px] toggle-active-main">
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-dpd.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-omniva.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-smartpost.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-lpexpress.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-venipak.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-pasts.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-start border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/pickup-circle.svg"/>
        </button>
      </div>
    </div>
  </div>
  <hr class="mt-[28px] mb-[15px] border-[#E2E1E1]" />
  <h2 class="mb-[11px] dm-sans-bold text-[16px] lg:text-[20px]">Payment</h2>

    <div class="flex items-center mb-[12px]">
      <img src="./images/icon-payment.svg" class="mr-[11px]"/>
      <p class="abel text-[14px] leading-[20px] mr-[30px]">Payment in 30 days. <span class="lg:hidden">Your credit limit is xxx €.</span></p>
      <p class="abel text-[14px] leading-[20px] hidden lg:block">Your credit limit is xxx €.</p>
    </div>

    <div class="flex items-end justify-between bg-[#6A31F7] rounded-[8px] lg:max-w-[390px] min-h-[57px] p-[11px] mb-[6.5px]">
      <div>
        <p class="abel text-[14px] leading-[20px] text-white">Your debt to this day is xxx €. </p>
        <p class="abel text-[14px] leading-[20px] text-white underline">Future orders won’t be executed until you pay the debt. </p>
      </div>
      <img src="./images/icon-info-box.svg"/>
    </div>

    <div class="flex items-center justify-center mb-[20px] ">
      <hr class="border-[#E2E1E1] lg:w-full lg:max-w-[516px]" />
    </div>

    <div class="flex flex-wrap justify-between lg:justify-start gap-x-[20px] gap-y-[10px] lg:gap-[24px] toggle-active-main">
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-paysera.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-trustly.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-klama.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-bank.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-cash.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-mastercard.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-visa.svg"/>
        </button>
        <button class="w-[46%] lg:w-fit flex items-center justify-center min-w-[110px] min-h-[60px] rounded-[8px] flex items-center justify-center border-[1px] border-[#9E9D9D] p-[5px]">
          <img src="./images/payment-giftcard.svg"/>
        </button>
    </div>

    <hr class="mb-[20px] border-[#E2E1E1] mt-[23px] hidden lg:block" />

</section>

<?php include('./footer.php'); ?>