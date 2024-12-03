<form action="/allot-user" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Enter name"/>
    <input type="email" name="email" placeholder="Enter email"/>
    <input type="password" name="password" placeholder="Enter password"/>
    <p>Choose category:</p>
    <select name="category_id">
            <option value="0">---</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->cat_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="submit" value="Add user"/>
</form>

<p>Users associated with category:</p>
<?php $__currentLoopData = $catUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ucat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($ucat->name); ?> chose "".<?php echo e($ucat['categoryUser']->cat_name); ?>.""
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH E:\xampp\htdocs\eshop_categories\resources\views/add_user.blade.php ENDPATH**/ ?>