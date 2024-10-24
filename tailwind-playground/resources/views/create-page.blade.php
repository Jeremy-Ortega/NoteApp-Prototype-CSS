<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body class="background h-[100vh]">

    @include('components.mainHeader')


      <div class="create-wrapper"> 
        
        {{-- labels --}}
        <div class="label-format flex flex-col w-[200px] sm:mt-[2px]">
                <label for="title">Note Title:</label>
                <label for="description">Description:</label>
                <label for="note">Note Content :</label>
        </div>
    
        {{-- input form --}}
        <div class="w-[300px]">
            {{-- route --}}
            <form action="" >
             <div class="flex flex-col gap-3 mt-2"> 
                
                {{-- title input box --}}
                <input type="text" id="title" name="title" required class="flex">
                
                {{-- description input box --}}                             
                 <input type="text" class="" id="description" name="description" required class="flex w-full">
                
                 {{-- search ko kung pano gawin responsive si text area --}}
                 <textarea name="note" class="flex w-full text-center  h-[150px] resize-none   md:w-[300px] lg:w-[300px]" id="" cols="30" rows="10" placeholder="Input your wonderful note!"></textarea>
        
                 <div class="button-option ">
                    <button type="submit" class="notok">Cancel </button>
                    <button type="submit" class="ok">Create </button>
                </div>
             </div>    
            </form>

        </div>


      </div>

</body>
</html>