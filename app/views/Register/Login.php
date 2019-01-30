<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div.col-md6.col-md-offset-3.well>

  <div class="header"><h2>Login</h2></div>
  <form class="form" action="<?=PROOT?>register/login" method="post">
    <div class="form-group">
       <label for="username">Username</label>
       <input type="text" name="username" id="username" class="form-control" value="">
      </div>
    <div class="form-group">
       <label for="password">Password</label>
       <input type="text" name="password" id="password" class="form-control" value="">
    </div>
    <div class="form-group">
      <label for="remember_me">Remember me <input type="checkbox" id="remember_me" name="remember_me" value="on"></label>
      </div>
      <div class="form-group">
         <input type="submit" value="Login" class="btn btn-large btn-primary">
        </div>
      <div class="text-right">
          <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
      </div>
    </form>
</div>
<?php $this->end(); ?>
