<form method="POST" action="/add-category">
    <?php echo csrf_field(); ?>
    <select name="parent_id">
        <option value="0">---</option>
        <?php if($categories->count() > 0): ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
        <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php $__currentLoopData = $subcat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($subitem->parent_id == $cat->id): ?>
            <option value="<?php echo e($subitem->id); ?>">-<?php echo e($subitem->name); ?></option>
            <?php endif; ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?> 
    </select>
    <input type="text" placeholder="Enter category" name="name"/>
    <input type="submit" value="Add category"/>
</form>
<?php /**PATH E:\xampp\htdocs\eshop_categories\resources\views/category_form.blade.php ENDPATH**/ ?>