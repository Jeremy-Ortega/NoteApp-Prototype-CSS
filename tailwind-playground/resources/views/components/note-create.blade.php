<div class="main-wrapper-create absolute  top-[50px] lg:top-[75px] object-top">  {{-- ganito mag kabit sa top--}}
    
    <form action=""  >
    
    <div class="sub-header-wrapper">
        {{-- <h4 class="ml-4 mt-1 font-semibold text-base md:text-[20px]"> Title : </h4>  --}}


        <div class="sub-wrapper-create mx-5 lg:-mt-5 ">
            <label for="title" class="label-format  ">Note Title:</label>
            <input type="text" id="title" name="title" required placeholder="Add Title">

            {{-- class="bg-transparent" --}}
        </div>
    </div>


        
      <div class="flex flex-col gap-2 "> 
         

         {{-- description input box --}}   
          <div class="sub-wrapper-create">  
          <label for="description" class="label-format">Description:</label>                        
          <input type="text" class="" id="description" name="description" required class="flex w-full">
        </div>

        {{-- search ko kung pano gawin responsive si text area --}}
        <div class="flex flex-col h-[150px] max-w-[700px] ">    
          <label for="note" class="label-format">Note Content :</label>
          <textarea name="note" class="w-full text-center h-[150px] resize-none " id="" cols="30" rows="10" placeholder="Input your wonderful note!"></textarea>
        </div>                 

        
          <div class="button-option ">
             <button type="submit" class="edit notok ">Cancel </button>
             <button type="submit" class="edit ok edit">Create </button>
         </div>
      </div>    
     </form>


</div>
