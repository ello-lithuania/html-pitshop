<?php include('./header.php'); ?>

<section class="container md:min-w-[100vw] mt-[12px] pb-[40px] pt-[20px]">

  <div class="hr-body mb-[7px]">
    <div class="hr-dot"></div>
    <hr class="hr-dotted"/>
  </div>

    <div class="">
        <h3 class="dm-sans-bold text-[28px] tracing-[-1%] mb-[16px]">Select country & language</h3>
        <p class="text-[14px] leading-[20px] mb-[31px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla eros eu dolor convallis condimentum. Donec ullamcorper pretium metus at elementum.</p>

                  <select name="cars" class="mb-[20px] custom-select text-[14px] max-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px] py-[10px]">
                      <option>Lithuania</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>
                  <select name="cars" class="mb-[22px] custom-select text-[14px] min-h-[37px] leading-[20px] tracing-[-1%] w-full rounded-[20px] border-black border-[1px] px-[20px]">
                      <option>English</option>
                      <option value="saab">Saab</option>
                      <option value="mercedes">Mercedes</option>
                      <option value="audi">Audi</option>
                  </select>

        <button class="w-full uppercase text-white bg-[#6A31F7] rounded-[20px] min-h-[35px] dm-mono-medium text-[16px] leading-[21px] tracing-[3%] flex items-center justify-center">CHOOSE <img class="ml-[10px]" src="./images/icon-next-btn.svg"/></button>

    </div>

</section>

<?php include('./footer.php'); ?>