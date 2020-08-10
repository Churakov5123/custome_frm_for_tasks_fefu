<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tree view</title>
    <script src="public/js/app.js" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>


<body>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>Task 2.1</h3>
                <lol items="<?php echo e($items); ?>"></lol>
            </div>
            <div class="col-6">
                <h3>Task 2.2</h3>
                <lol items="<?php echo e($newItems); ?>"></lol>
            </div>
        </div>
    </div>
</div>
</body>
<?php /**PATH C:\Users\ydalenshik\Desktop\OSPanel\domains\fefu\resources\views/task.blade.php ENDPATH**/ ?>