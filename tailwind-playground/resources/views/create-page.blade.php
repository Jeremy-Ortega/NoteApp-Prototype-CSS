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
        <div class="label-W flex flex-col w-[300px] gap-4">
            <label for="title">title:</label>
            <label for="description">description:</label>
            <label for="note">note:</label>
        </div>
    
        {{-- input form --}}
        <div class="w-[300px]">
            {{-- route --}}
            <form action="" >
             <div class="flex flex-col gap-4"> 
                
                {{-- title input box --}}
                <input type="text" id="title" name="title" required>
                
                {{-- description input box --}}                             
                 <input type="text" class="" id="description" name="description" required>
                
                 {{-- search ko kung pano gawin responsive si text area --}}
                 <textarea name="note" class="text-center w-[300px] h-[150px] resize-none" id="" cols="30" rows="10" placeholder="Input your wonderful note!"></textarea>
        
                 <div class="button">
                     <button type="submit">Cancel </button>
                    <button type="submit">Create </button>
                </div>
             </div>    
            </form>

        </div>


      </div>

</body>
</html>