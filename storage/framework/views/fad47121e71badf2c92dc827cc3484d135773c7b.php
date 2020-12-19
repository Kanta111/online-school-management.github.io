
<?php $__env->startSection('content'); ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
               <h3>Edit Profile <a class="btn btn-success float-right" href="<?php echo e(route('profiles.view')); ?>"><i class="fa fa-list"></i>Your Profile </a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
              
             <form method="post" action="<?php echo e(route('profiles.update')); ?>" id="myForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                   <div class="form-group col-md-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo e($editData->name); ?>" class="form-control">
                    <font style="color:red"><?php echo e(($errors->has('name'))?($errors->first('name')):''); ?></font>
                  </div>

                   <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email"value="<?php echo e($editData->email); ?>"  class="form-control">
                     <font style="color:red"><?php echo e(($errors->has('email'))?($errors->first('email')):''); ?></font>
                  </div>

                 

                  <div class="form-group col-md-4">
                    <label for="address">Address</label>
                    <input type="text" name="address"value="<?php echo e($editData->address); ?>"  class="form-control">
                     <font style="color:red"><?php echo e(($errors->has('address'))?($errors->first('address')):''); ?></font>
                  </div>










                  <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="">Select Role</option>
                      <option value="Male" <?php echo e(($editData->gender=="Male")?"selected":""); ?>>Male</option>
                      <option value="Female"  <?php echo e(($editData->gender=="Female")?"selected":""); ?>>Female</option>
                      
                    </select>
                </div>
                <div class="form-group col-md-4">
                   <label for="image">Image</label>
                   <input type="file" name="image" class="form-control" id="image">

                </div>
                <div class="form-group col-md-2">
                   <img id ="showImage"src="<?php echo e((!empty($editData->image))?url('upload/user-images/'.$editData->image):url('upload/no_image.png')); ?>" style="width: 150px;height: 160px;border: 1px solid #000;">

                </div>
               


                  

                  

                  <div class="form-group col-md-6" style="padding-top: 30px;">
                  
                    <input type="submit" value="Update" class="btn btn-primary">
                  </div>



                 
                  </div>
               </div><!-- /.card-body -->
            </div>
          </form>
            <!-- /.card -->

          
            
            </div>
            <!-- /.card -->
          </section>
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
$(function () {
  $('#myForm').validate({
    rules: {
      name: {
        required: true,
      
      },
      usertype: {
        required: true,
      
      },
      email: {
        required: true,
        email: true,
      },
      password:{
        required:true,
        minlength:6
      },
      password2:{
        required:true,
        equalTo:'#password'
      },
    },
    messages: {
      name: {
        required: 'Please enter user name',
       
      },
       usertype: {
        required: 'Please select user Role',
       
      },
      email: {
        required: 'Please enter a email address',
        email: 'Please enter a <em>vaild</em> email address',
      },
      password: {
        required: 'Please enter a password',
        minlength: 'Password will be minimum 6 characters or numbers'
      },
      password2: {
         required: 'Please enter Confirm password',
         equalTo:'Confirm password does not match',
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/user/edit-profile.blade.php ENDPATH**/ ?>