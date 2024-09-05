<?php
use Illuminate\Support\Facades\DB;
$c = $_GET['name'];
$route = route('test-page');
$quest = DB::table('courses')->where('course_name', $c)->value('course_test');
$quest = json_decode($quest);
?>

<?php $__env->startSection('page-content'); ?>
    <div class="color">
        <div class="theory">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>

                    <form action="<?php echo e(route('teach')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="text">
                            <input type="text" name="coursename" value="<?php echo e($c); ?>" readonly>
                            <textarea name="coursedescription" class="areadesc"><?php echo e(DB::table('courses')->where('course_name', $c)->value('course_description')); ?></textarea>
                            <textarea name="coursetext" class="areatext"><?php echo e(DB::table('courses')->where('course_name', $c)->value('course_text')); ?></textarea>
                            <input type="file" name="image">
                            <button>Сохранить данные</button>
                        </div>
                    </form>

                    <img src="/coursephoto/<?php echo e(htmlspecialchars($c)); ?>.jpg" alt="">

                    <form action="<?php echo e(route('delete')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input class="dell" type="text" name="todel" value="<?php echo e($c); ?>" readonly>
                        <button>Удалить курс</button>
                    </form>
                <a>Добавьте вопрос для теста ---</a>
                    <form action="<?php echo e(route('newquest')); ?>" method="post" enctype="multipart/form-data" name="newquestion">
                        <?php echo csrf_field(); ?>
                        <input class="dell" type="text" name="todel" value="<?php echo e($c); ?>" readonly>
                        <table>
                            <tr>
                                <td>Вопрос</td>
                                <td>
                                    <input name="question" type="text" value="Вопрос" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Варианты</td>
                                <td>
                                    <input name="ask1" type="text" value="1" required>
                                </td>
                                <td>
                                    <input name="ask2" type="text" value="2" required>
                                </td>
                                <td>
                                    <input name="ask3" type="text" value="3" required>
                                </td>
                                <td>
                                    <input name="ask4" type="text" value="4" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Правильный ответ</td>
                                <td>
                                    <select name="correct">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3" selected>3</option>
                                        <option value="4">4</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button id="submit">Добавить!</button>
                    </form>
                    <?php
                        if($quest != NULL) {
                            foreach ($quest as $ab) {
                                echo "<a>Вопрос: $ab->question</a>";
                                for ($i = 0; $i < 4; $i++) {
                                    $viv = $ab->answers[$i];
                                    echo "Ответ: <a>$viv</a>";
                                }
                                echo "<a>Номер правильного: $ab->correct</a>";
                                echo "<a>---------</a>";
                            }
                        }
                        ?>
                <?php else: ?>
                    <h1 class="title"><?php echo e(DB::table('courses')->where('course_name', $c)->value('course_description')); ?></h1>
                    <a class="text">
                        <?php echo nl2br(e(DB::table('courses')->where('course_name', $c)->value('course_text'))); ?>

                    </a>
                    <img src="/coursephoto/<?php echo e(htmlspecialchars($c)); ?>.jpg" alt="">
                    <a href="<?php echo e($route); ?>?name=<?php echo e($c); ?>"><button>Пройти тест</button></a>

                <?php endif; ?>
            <?php else: ?>
                <a class="text">
                    Зарегистрируйтесь для доступа!
                </a>
            <?php endif; ?>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/teach.blade.php ENDPATH**/ ?>