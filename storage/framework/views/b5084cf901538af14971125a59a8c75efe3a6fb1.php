<?php
    $s = route('teach');
use Illuminate\Support\Facades\DB;
$photoclose = "<ion-icon name='close-circle-outline'></ion-icon>";
$photo = "<ion-icon name='checkmark-circle-outline'></ion-icon>";
    ?>



<?php $__env->startSection('page-content'); ?>
    <div class="list">
        <ul class="vv">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
                    <a href="<?php echo e(route('create_new_language-page')); ?>">
                        <ion-icon name="add-circle-outline"></ion-icon>Создать новый курс
                    </a>
                <br>
                    <a href="<?php echo e(route('create_new_course-page')); ?>">
                        <ion-icon name="create-outline"></ion-icon>Создать новый раздел
                    </a>
                <?php else: ?>
                <?php endif; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php
            $names = DB::table('language')->get();
            foreach ($names as $lang){
                $lan = $lang->language_name;
                $landesc = $lang->language_description;
                $htm = DB::table('courses')->where('course_language', $lang->language)->get();
                $del = '';
                if(\Illuminate\Support\Facades\Auth::user()){
                    if(\Illuminate\Support\Facades\Auth::user()->role_id == 3){
                        $bra = csrf_token();
                        $delr = route('deletelanguage');
                        $del = "
                    <form action='$delr' method='post' enctype='multipart/form-data' content='$bra'>
                    <input type='hidden' name='_token' value='$bra' />
                        <input class='dell' type='text' name='todel' value='$lan' readonly>
                        <button class='knop'>Удалить курс</button>
                    </form>
                        ";
                    }
                    }
                echo"
                <li><details>
                    <summary>$lan$del</summary>
                    <ion-icon name='alert-circle-outline'></ion-icon>$landesc
                    <div class='list-grid'>
                        <div class='qq'>
                ";
                foreach ($htm as $name) {
                    $a = $name->course_name;
                    $b = urlencode($a);
                    $sil = "<a href='$s?name=$b'>$a$photoclose</a>";
                    $old = DB::table('progress')->where('id', \Illuminate\Support\Facades\Auth::id())->value($a);
                    if($old == 100){
                        $sil = "<a href='$s?name=$b'>$a$photo</a>";
                    }
                    echo $sil;
                }
                echo"
                </div>
                    </div>
                </details>
                </li>
                ";
            }
            ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/course.blade.php ENDPATH**/ ?>