<?php
$view->components('head');
$view->components('header');
?>

<div class="flex justify-center bg-gray-50 min-h-screen">
  <form action="/admin/test/add" method="post" class="bg-white p-6 rounded-lg shadow w-full max-w-xs">
    <p class="text-lg font-semibold mb-4 text-center">Name</p>
    <div class="mb-4">
      <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"/>
    </div>
    <div>
      <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded transition">Add</button>
    </div>
  </form>
</div>

<?php
$view->components('footer');
?>



<!-- <div>
    <form action="/admin/test/add" method="post">
        <p>Name</p>
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <button>Add</button>
        </div>
    </form>
</div> -->


