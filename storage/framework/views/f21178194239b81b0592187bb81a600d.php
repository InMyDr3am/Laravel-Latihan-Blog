<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="py-8 max-w-screen-md border-b-gray-300">
            <a href="/posts/<?php echo e($post['slug']); ?>" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold texxt-gray-900"><?php echo e($post['title']); ?></h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#"><?php echo e($post['author']); ?></a> | <?php echo e($post->created_at->format('j F Y')); ?>

            </div>
            <p class="my-4 font-light">
                <?php echo e(Str::limit($post['body'], 100)); ?>

            </p>
            <a href="/posts/<?php echo e($post['slug']); ?>" class="font-medium text-blue-500 hover:underline" >Read More .. &raquo;</a>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH E:\laragon\www\projectpertama\resources\views/posts.blade.php ENDPATH**/ ?>