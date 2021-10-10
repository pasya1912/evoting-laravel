
<?php $__env->startSection('title','Set Password'); ?>
<?php $__env->startSection('page'); ?>
        <div class="w-1/3 tablet:w-3/5 mobile:w-11/12 mt-10 border-t-12 bg-white mb-3 rounded-lg shadowww">
        <div>
            <span class="flex justify-center text-center text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-blue-900 font-bold mobile:text-base tablet:text-lg text-2xl">Silahkan SET PASSWORD token anda disini</span>
            </div>
            <div>
            <img class="object-contain mobile:h-44 h-64 pt-8 mt-10  w-full" src='/img/Smanegeri36.gif'></img>
            </div>
            <div class="flex p-8 border-t-12 justify-center">
                <div class="mb-4 w-1/2">
                  <form action="<?php echo e(route('voting.setPassword')); ?>" method="POST">


                  <?php if(Session::has('Gagal') | $errors->any()): ?>
                        <label class="flex font-bold text-grey-darker mb-2">Token</label>
                        <input type="text" name="usertoken" class="text-center block appearance-none w-full bg-white border border-red-300 hover:border-red-700 px-2 py-2 rounded shadow" placeholder="Token">
                        <label class="flex font-bold text-grey-darker mb-2">New Password</label>
                        <input type="text" name="userpassword" class="text-center block appearance-none w-full bg-white border border-red-300 hover:border-red-700  px-2 py-2 rounded shadow" placeholder="Password">

                        <?php else: ?>
                        <label class="flex font-bold text-grey-darker mb-2">Token</label>
                        <input type="text" name="usertoken" class="text-center block appearance-none w-full bg-white border border-gray-300 hover:border-gray-700 px-2 py-2 rounded shadow" placeholder="Token">
                        <label class="flex font-bold text-grey-darker mb-2">New Password</label>
                        <input type="text" name="userpassword" class="text-center block appearance-none w-full bg-white border border-gray-300 hover:border-gray-700  px-2 py-2 rounded shadow" placeholder="Password">
                        <?php endif; ?>
                    <?php echo csrf_field(); ?>
                        <?php if($errors->any()): ?>
                        <div class="flex justify-center mt-3 rounded-lg text-white bg-red-700">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <?php if(Session::has('Gagal')): ?>
                        <div class=" flex justify-center mt-3 bg-red-700 text-white rounded-lg">
                            <ul>
                                    <?php if(Session::has('Gagal')): ?>
                                    <li><?php echo e(Session::get('Gagal')); ?></li>
                                    <?php endif; ?>
                            </ul>
                        </div>
                        <?php elseif(Session::has('Success')): ?>
                        <div class=" flex justify-center mt-3 bg-green-700 text-white rounded-lg">
                            <ul>
                                    <?php if(Session::has('Success')): ?>
                                    <li><?php echo e(Session::get('Success')); ?></li>
                                    <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    <button type="submit" name="submit" class="transition duration-500 ease-in-out transform focus:-translate-y-1 focus:scale-95 text-center font-bold block appearance-none w-full bg-blue-500 border border-grey-light ring-indigo-300 focus:ring-4  hover:border-blue-900 mt-2 px-2 py-2 rounded shadow">SET PASSWORD</button>
                  </form>
                  <a href="<?php echo e(route('votinglogin')); ?>" class="float-right text-blue-400 hover:text-blue-900">Login</a>
                </div>

                
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/user/setPassword.blade.php ENDPATH**/ ?>