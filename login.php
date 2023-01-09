<!-- Logo -->
<?php include 'header_login.php'; ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1 class="text-center">OnPrint</h1>
      <p class="text-center">Please select user type.</p>
      <div class="btn-group mb-3" role="group" aria-label="User type">
        <!-- User button -->
        <button type="button" onclick="document.getElementById('userType').value='user';" class="btn btn-success">User</button>
        <!-- Administrator button -->
        <button type="button" onclick="document.getElementById('userType').value='administrator';" class="btn btn-success">Administrator</button>
        <!-- Rider button -->
        <button type="button" onclick="document.getElementById('userType').value='rider';" class="btn btn-success">Rider</button>
      </div>
      <!-- Login form -->
      <form id="loginForm">
        <!-- ID input -->
        <div class="form-group">
          <label for="userID">User ID</label>
          <input type="text" class="form-control" name="id" id="userID" aria-describedby="userIDHelp">
          <small id="userIDHelp" class="form-text text-muted">Enter your User ID.</small>
        </div>
        <!-- Password input -->
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <!-- Hidden field for storing user type -->
        <input type="hidden" id="userType" name="userType" value="">
        <!-- Login button -->
        <button onclick="redirectToPage();" type="button" class="btn btn-success">Login</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<script>
  function redirectToPage() {
    var userType = document.getElementById('userType').value;

    if (userType === 'user') {
      document.location = 'user.php';
    } else if (userType === 'administrator') {
      document.location = 'administrator.php';
    } else if (userType === 'rider') {
      document.location = 'rider.php';
    }
  }
</script>