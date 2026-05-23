<div class="w-full grid grid-cols-1 gap-4 overflow-y-auto py-6">
    <?php
        echo "<div class='col-span-1 md:col-span-2 bg-white rounded-lg shadow-md p-4'>";
        echo "<h2 class='text-xl font-bold mb-4'>Course 1</h2>";
        include "app/PHP/course/course1.php";
        echo "</div>";
        echo "<div class='col-span-1 md:col-span-2 bg-white rounded-lg shadow-md p-4'>";
        echo "<h2 class='text-xl font-bold mb-4'>Course 2</h2>";
        include "app/PHP/course/course2.php";
        echo "</div>";
    ?>
</div>  