<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $view->components('head'); ?>
</head>
<body>
   <?php $view->components('header'); ?>
<div class="container mx-auto px-4 py-8">
    <form action="/admin/test/add" method="post" class="space-y-4">
        <p>Name</p>
        <div>
            
            <input
  type="text"
  placeholder="Type here"
  class="block w-80 max-w-sm px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none input-thin-focus text-sm"
/>
        </div>
        <div>
            <button class="btn btn-outline btn-success">Success</button>
        </div>
    </form>
</div>
<?php
    $view->components('footer');
    ?> 
</body>
</html>



     