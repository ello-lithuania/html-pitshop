<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px]">

 <div class="flex items-center mb-[10px] lg:mb-[27px]">
    <a href="./" class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] underline">Home</a>
    <div class="text-[#626262] text-[14px] leading-[20px] tracing-[-1%] mx-[5px]">/</div>
    <a href="" class="text-black text-[14px] leading-[20px] tracing-[-1%] underline">Order confirmation</a>
 </div>

  <div class="hr-body mb-[23px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

  <div class="flex items-center flex-col justify-center bg-[#F8F6F7] rounded-[8px] w-full py-[25px] mb-[22px] lg:mb-[69px]">
    <h1 class="mb-[11px] text-[#00BB5A] dm-sans-bold text-[20px] lg:text-[28px]">Your order confirmed</h1>
    <img src="./images/icon-order-confirm.svg" class="hidden lg:block mb-[24px]"/>
    <img src="./images/icon-order-confirm-mobile.svg" class="lg:hidden mb-[24px]"/>
    <p class="max-w-[809px] abel text-[14px] leading-[20px] p-[5px] text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dictum turpis, sed placerat diam. Nulla facilisi. Nullam volutpat odio ut velit rutrum dictum. Quisque ultrices sapien congue scelerisque iaculis. Ut id convallis eros. Suspendisse porttitor nec ex in volutpat. Nam et dictum erat. Pellentesque eu aliquet lorem <a href="" class="underline text-[#6A31F7]">customer support.</a></p>
  </div>

  <div class="grid grid-cols-12 lg:gap-[32.5px] mb-[67px]">
    <div class="col-span-12 lg:col-span-8 lg:border-r-[1px] lg:border-[#E2E1E1] lg:pr-[30px]">
      <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-6">
          <p class="dm-sans-bold text-[16px] leading-[22px] mb-[10px] lg:mb-0">Order items</p>
        </div>
        <div class="hidden lg:block col-span-2">
          <p class="dm-sans-bold text-[16px] leading-[22px]">Unit price</p>
        </div>
        <div class="hidden lg:block col-span-2">
          <p class="dm-sans-bold text-[16px] leading-[22px]">Quantity</p>
        </div>
        <div class="hidden lg:block col-span-2">
          <p class="dm-sans-bold text-[16px] leading-[22px]">Total products</p>
        </div>
      </div>
      <hr class="border-[#E2E1E1] mb-[25px] lg:mb-[18px] mt-[12px]" />
      <div class="grid grid-cols-12 mb-[13px] lg:mb-[25px]">
        <div class="col-span-12 lg:col-span-6">
          <div class="flex mb-[9px] lg:mb-0">
            <img src="./images/product-thumbnail-small.svg" class="h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1] mr-[25px]"/>
            <div class="flex-grow">
              <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
              <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Unit price</p>
            <p class="text-[14px] dm-sans-bold">9.90 €</p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Quantity</p>
            <p class="text-[14px] dm-sans-bold">1</p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Total products</p>
            <p class="text-[14px] dm-sans-bold">9.90 €</p>
          </div>
        </div>
      </div>
      <hr class="border-[#E2E1E1] mb-[25px] lg:mb-[18px]" />
      <div class="grid grid-cols-12 mb-[13px] lg:mb-[25px]">
        <div class="col-span-12 lg:col-span-6">
          <div class="flex mb-[9px] lg:mb-0">
            <img src="./images/product-thumbnail-small.svg" class="h-[65px] lg:h-[90px] w-[65px] lg:w-[90px] p-[6.5px] rounded-[8px] border-[1px] border-[#E2E1E1] mr-[25px]"/>
            <div class="flex-grow">
              <p class="text-[14px] leading-[21px] capitalize">turtle Wax</p>
              <p class="text-[14px] leading-[21px] dm-sans-bold">Sealant Hydrophobic Wax Lorem ipsum dolor</p>
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Unit price</p>
            <p class="text-[14px] dm-sans-bold">9.90 €</p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Quantity</p>
            <p class="text-[14px] dm-sans-bold">1</p>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-2 mt-[2px] lg:mt-[21px]">
          <div class="flex justify-between items-center">
            <p class="text-[14px] leading-[21px] text-[#020202] lg:hidden">Total products</p>
            <p class="text-[14px] dm-sans-bold">9.90 €</p>
          </div>
        </div>
      </div>
      <hr class="border-black lg:border-[#9E9D9D] mb-[12px]" />
      <div class="grid grid-cols-12">
        <div class="col-span-6">
          <p class="text-[14px] leading-[20px] abel mb-[14px]">Subtotal</p>
          <p class="text-[14px] leading-[20px] abel mb-[14px]">Shipping and handling</p>
          <p class="text-[16px] leading-[22px] dm-sans-bold">Total (Tax incl.)</p>
        </div>
        <div class="hidden lg:block col-span-2">
          
        </div>
        <div class="hidden lg:block col-span-2">
          
        </div>
        <div class="col-span-6 lg:col-span-2 text-right lg:text-left">
          <p class="text-[14px] leading-[20px] abel mb-[14px] dm-sans-medium">19.80 €</p>
          <p class="text-[14px] leading-[20px] abel mb-[14px] dm-sans-medium">Free</p>
          <p class="text-[28px] lg:text-[16px] lg:leading-[22px] dm-sans-bold">19.80 €</p>
        </div>
      </div>
    </div>
    <div class="col-span-12 lg:col-span-4">
      <p class="dm-sans-bold text-[16px] leading-[22px] mb-[12px] hidden lg:block">Order details</p>
      <hr class="border-black lg:border-[#E2E1E1] mb-[20px] mt-[25px] lg:mt-0" />
      <p class="abel text-[14px] leading-[20px] mb-[10px]">Order refference: JDHIUDGHLDD235</p>
      <p class="abel text-[14px] leading-[20px] mb-[10px]">Payment method: . Cash on delivery (COD)</p>
      <p class="abel text-[14px] leading-[20px]">Shipping method: . Tobis store</p>
      <p class="abel text-[14px] leading-[20px] text-[#9E9D9D]">(pick-up in store)</p>
    </div>
  </div>

</section>

<?php include('./footer.php'); ?>