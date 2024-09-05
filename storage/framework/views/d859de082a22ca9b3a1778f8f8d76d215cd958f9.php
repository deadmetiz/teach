<?php
use Illuminate\Support\Facades\DB;
$info = DB::table('feedback')->get();
$delr = route('deletefeedback');
$bra = csrf_token();
    ?>

<?php $__env->startSection('page-content'); ?>
    <div class="line"></div>
    <div class="color">
        <div class="formmm">
            <div class="container-form">
                <?php if(\Illuminate\Support\Facades\Auth::user()): ?>

                    <?php if(\Illuminate\Support\Facades\Auth::user()->role_id == 3): ?>
                        <?php
                            foreach($info as $feedback){
                                echo "<a class='words'>Номер заявки: $feedback->id</a>";
                                echo "<a class='words'>Сообщение: $feedback->message</a>";
                                echo "<a class='words'>EMail пользователя: $feedback->email</a>";
                                echo "<a class='words'>Имя пользователя: $feedback->name</a>";
                                echo "
                                <form action='$delr' method='post' enctype='multipart/form-data' content='$bra'>
                    <input type='hidden' name='_token' value='$bra' />
                        <input class='dell' type='text' name='todel' value='$feedback->id' readonly>
                        <button class='knop'>Удалить заявку</button>
                    </form>";
                                echo "<a>---------------------------------</a>";
                            }
                            ?>


                    <?php else: ?>
                        <?php
                            $email = DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->value('email');
                            $name = DB::table('users')->where('id', \Illuminate\Support\Facades\Auth::id())->value('name');
                        ?>
                        <form action="<?php echo e(route('feedback-post')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h1 class="words"><b>Здесь Вы можете задать интересующий Вас вопрос и мы с радостью ответим Вам. Также Вы всегда можете позвонить на горячую линию по номеру +79283472149.</b></h1>
                            <div class="column">
                                <input class="dell" type="text" name="name"  placeholder="Ваше имя" value="<?php echo e($name); ?>" required />
                                <input class="dell" type="text" name="email" placeholder="Введите свой email" value="<?php echo e($email); ?>" required />
                            </div>
                            <input class="size" type="text" name="text"  placeholder="Введите вопрос..." required>
                            <button class="send">Отправить</button>
                        </form>
                    <?php endif; ?>
                <?php else: ?>
                    <form action="<?php echo e(route('feedback-post')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <h1 class="words"><b>Здесь Вы можете задать интересующий Вас вопрос и мы с радостью ответим Вам. Также Вы всегда можете позвонить на горячую линию по номеру +79283472149.</b></h1>
                        <div class="column">
                            <input type="text" name="name"  placeholder="Ваше имя" required />
                            <input type="text" name="email" placeholder="Введите свой email" required />
                        </div>
                        <input class="size" type="text" name="text"  placeholder="Введите вопрос..." required />
                        <button class="send">Отправить</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="line"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\rabota\resources\views/feedback.blade.php ENDPATH**/ ?>