<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body class="background h-[100vh]">

    <?php echo $__env->make('components.mainHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


      <div class="create-wrapper"> 
        
        
        <div class="label-format flex flex-col w-[200px] sm:mt-[2px]">
                <label for="title">Note Title:</label>
                <label for="description">Description:</label>
                <label for="note">Note Content :</label>
        </div>
    
        
        <div class="w-[300px]">
            
            <form action="" >
             <div class="flex flex-col gap-3 mt-2"> 
                
                
                <input type="text" id="title" name="title" required class="flex">
                
                                             
                 <input type="text" class="" id="description" name="description" required class="flex w-full">
                
                 
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\NoteApp-Prototype-CSS\tailwind-playground\resources\views/create-page.blade.php ENDPATH**/ ?>