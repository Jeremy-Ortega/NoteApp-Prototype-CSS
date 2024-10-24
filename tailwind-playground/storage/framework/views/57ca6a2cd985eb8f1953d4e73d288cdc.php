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
        
        
        <div class="label-W flex flex-col w-[300px] gap-4">
            <label for="title">title:</label>
            <label for="description">description:</label>
            <label for="note">note:</label>
        </div>
    
        
        <div class="w-[300px]">
            
            <form action="" >
             <div class="flex flex-col gap-4"> 
                
                
                <input type="text" id="title" name="title" required>
                
                                             
                 <input type="text" class="" id="description" name="description" required>
                
                 
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
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\tailwind-playground\resources\views/create-page.blade.php ENDPATH**/ ?>