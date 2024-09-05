<?php
    $s = route('teach');
use Illuminate\Support\Facades\DB;
    ?>



<?php $__env->startSection('page-content'); ?>
    <div class="list">
        <ul class="vv">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
                    <a href="#">
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
            <li><details>
                    <summary>C++</summary>
                    <ion-icon name="alert-circle-outline"></ion-icon>С++ — сложный язык для сложных систем: робототехники, веб-браузеров, микроконтроллеров, серверов и видеоигр. Курс непростой, но освоить его могут даже новички, если уделять обучению достаточно времени и усилий.
                    <div class="list-grid">
                        <div class="qq">
                            <?php
                            $htm = DB::table('courses')->where('course_language', 'C++')->get();
                            foreach ($htm as $name) {
                                $a = $name->course_name;
                                $b = urlencode($a);
                                echo "<a href='$s?name=$b'>$a</a>";
                            }
                            ?>
                        </div>


                    </div>
                </details>
            </li>
            <li><details>
                    <summary>Python</summary>
                    <ion-icon name="alert-circle-outline"></ion-icon>Курс посвящен базовым понятиям и элементам языка программирования Python
                    <div class="list-grid">
                        <div class="qq">
                            <?php
                            $htm = DB::table('courses')->where('course_language', 'Python')->get();
                            foreach ($htm as $name) {
                                $a = $name->course_name;
                                $b = urlencode($a);
                                echo "<a href='$s?name=$b'>$a</a>";
                            }
                            ?>
                        </div>
                    </div>
                </details></li>
            <li><details>
                    <summary>HTML & CSS</summary>
                    <ion-icon name="alert-circle-outline"></ion-icon>Курс рассчитан на изучение верстки сайтов на HTML и CSS пройдя курс Вы сможете верстать простые странички
                    <div class="list-grid">
                        <div class="qq">
                            <?php
                            $htm = DB::table('courses')->where('course_language', 'HTML')->get();
                            foreach ($htm as $name) {
                                $a = $name->course_name;
                                $b = urlencode($a);
                                echo "<a href='$s?name=$b'>$a</a>";
                            }
                            ?>
                        </div>
                    </div>
                </details></li>
                <li><details>
                        <summary>JavaScript</summary>
                        <ion-icon name="alert-circle-outline"></ion-icon>Курс «JavaScript» — это обучение программированию на языке JavaScript для начинающих и ваш прямой путь к профессии программиста с нуля.
                        <div class="list-grid">
                            <div class="qq">
                                <?php
                                $htm = DB::table('courses')->where('course_language', 'js')->get();
                                foreach ($htm as $name) {
                                    $a = $name->course_name;
                                    $b = urlencode($a);
                                    echo "<a href='$s?name=$b'>$a</a>";
                                }
                                ?>
                            </div>
                        </div>
                    </details></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\rabota\resources\views/course.blade.php ENDPATH**/ ?>