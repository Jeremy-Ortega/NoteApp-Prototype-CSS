<div class="main-wrapper-create absolute  top-[50px] lg:top-[75px] object-top">  {{-- ganito mag kabit sa top--}}
    
    {{-- READONLY PARA MABABASA LANG SYA TAPOS GAWIN KONG TRANSPARENT gagawa nalang ako ng READONLY CLASS PARA DI MAHABA TAILWIND--}}
    {{-- ACTUALLY, GAGAWA NALANG AKO NG PANIBAGO NA CLASS PARA SA READ LIKE P OR TEXTSOMETHING --}}

    <form action="" class=" content-between justify-between">
    
      <div class="sub-header-wrapper">
          {{-- <h4 class="ml-4 mt-1 font-semibold text-base md:text-[20px]"> Title : </h4>  --}}


          <div class="sub-wrapper-create mx-5 lg:-mt-5">
              <label for="title" class="label-format  ">Note Title:</label>
              <p class=""></p>

              {{-- class="bg-transparent" --}}
          </div>
      </div>

      
      <br><br>
          
        <div class="flex flex-col gap-2"> 
          

          {{-- description input box --}}   
            <div class="sub-wrapper-create">  
            <label for="description" class="label-format">Description:</label>                        
            <p  >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ducimus exercitationem alias corporis, blanditiis iusto animi nemo mollitia veritatis aspernatur voluptatem vero vel error nisi ratione sunt reprehenderit accusamus sit!</p>
          </div>

          <br><br>
          {{-- search ko kung pano gawin responsive si text area --}}
          <div class="flex flex-col h-[150px] max-w-[700px] ">    
            <label for="note" class="label-format">Note Content :</label>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi, officiis cupiditate maxime, reprehenderit aspernatur autem rerum dignissimos obcaecati exercitationem similique placeat beatae id consectetur dolore magni temporibus quibusdam. Numquam.</p>
          </div>                 

          
            <div class="button-option ">
              <button type="submit" class="notok">Delete </button>
              <button type="submit" class="ok">return </button>
          </div>
        </div>    
     </form>


</div>
