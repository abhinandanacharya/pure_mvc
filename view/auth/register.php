<h3 class="error_message">
    <?php echo (($response)) ?  $response['message'] : '';  ?>
</h3>
<form action="<?=SITE_URL?>auth/register" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Submit</button>
</form>
<a href="<?=SITE_URL?>auth/register">New use?</a>