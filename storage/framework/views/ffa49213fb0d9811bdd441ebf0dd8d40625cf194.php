<?php
use Illuminate\Support\Facades\DB;
    ?>

<?php $__env->startSection('page-content'); ?>
    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
        <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
            <div class="color">
            <div class="forma">
                <div class="from-container">
                    <div class="text">
                <form action="<?php echo e(route('create_new_language')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <textarea name="languagename" class="areadef">Так будет выглядеть в выборе курса</textarea>
                    <textarea name="languagedescription" class="areadef">Описание языка</textarea>
                    <textarea name="language" class="areadef">Аббревиатура языка(пример C++, HTML, Python, js)</textarea>
                    <button>Создать</button>
                </form>
                    </div>
                    <?php
                    $abc = DB::table('language')->get();
                    foreach ($abc as $name) {
                        $a = $name->language;
                        echo "<a>$a</a>";
                    }
                    ?>
            </div>
            </div>
            </div>
        <?php else: ?>
        <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/create_new_language.blade.php ENDPATH**/ ?>