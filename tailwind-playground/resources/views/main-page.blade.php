<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body class="background">
{{-- MAIN HEADER --}}

 @include('components.mainHeader')

   {{-- MAIN WRAPPER --}}
    <div class="contentwrapper">
      <h1 class="text-xl font-bold mb-10 mt-[-300px]">=== Notes list :3 ===</h1>

      {{-- NOTES ITEM WRAPPER --}}
        <div class="flex flex-wrap gap-4 mt-[-10px]" >

        {{-- NOTE TEMPLATE (gagamitan ng foreach) --}}
        @include('components.noteCard')
        @include('components.noteCard')

       
      </div>
      </div>
    </div>


</body>
</html>