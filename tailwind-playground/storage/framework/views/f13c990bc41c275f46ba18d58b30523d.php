<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="background h-[100vh]">

    <?php echo $__env->make("components.mainHeader", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="popup" id="popup1">

        <div class="overlay"></div>
        
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <h1>yoww</h1>
            surely gagana to
        </div>
               
    </div>
<button onclick="togglePopup()"> show ???</button>     

</body>
</html>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\NoteApp-Prototype-CSS\tailwind-playground\resources\views/edit-page.blade.php ENDPATH**/ ?>