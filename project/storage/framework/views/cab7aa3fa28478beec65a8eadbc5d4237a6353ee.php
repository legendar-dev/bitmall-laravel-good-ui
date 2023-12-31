<?php if(!empty($section->sub_content)): ?>
    <section class="partner-section pb-100 bg--section">
        <div class="container">
            <div class="partner-slider owl-theme owl-carousel">
                <?php $__currentLoopData = $section->sub_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="partner-item border">
                        <img src="<?php echo e(getPhoto($item->image)); ?>" alt="brand">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?><?php /**PATH /var/www/vhosts/orkt.one/httpdocs/admin/project/resources/views/frontend/sections/sponsor.blade.php ENDPATH**/ ?>