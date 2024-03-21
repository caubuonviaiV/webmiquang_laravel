<?php $__env->startSection('content'); ?>
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0"> <?php echo e($title); ?></h3>
                    </div>
                </div>
            </div>

            <!-- Add Tickit-->
            <div class="modal-body">
                <div class="deadline-form">
                    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Tên tiêu đề</label>
                                <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kích hoạt</label>
                                <div>
                                    <input type="radio" id="active" value="1" name="active" checked="">
                                    <label for="active">Có</label>
                                </div>
                                <div>
                                    <input type="radio" id="no_active" value="0" name="active">
                                    <label for="no_active">Không</label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-secondary">Hủy</a>
                                <button type="submit" class="btn btn-primary">Tạo</button>
                            </div>
                            <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dntru\OneDrive\document\Web\Laravel\webmiquang_laravel\resources\views/admin/productCategory/add.blade.php ENDPATH**/ ?>