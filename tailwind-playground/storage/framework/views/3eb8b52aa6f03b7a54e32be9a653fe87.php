<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body class="background">


 <?php echo $__env->make('components.mainHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   
    <div class="contentwrapper">
      <h1 class="text-xl font-bold mb-10 mt-[-300px]">=== Notes list :3 ===</h1>

      
        <div class="flex flex-wrap gap-4 mt-[-10px]" >

        
        <?php echo $__env->make('components.noteCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components.noteCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       
      </div>
      </div>
    </div>


</body>
</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\tailwind-playground\resources\views/main-page.blade.php ENDPATH**/ ?>