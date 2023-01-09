<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <div class="container">
  <h1>Create User Account</h1>
  <form>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group row">
          <label for="userID" class="col-sm-4 col-form-label">User ID</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="userID" placeholder="Enter user ID">
          </div>
        </div>
        <div class="form-group row">
          <label for="firstName" class="col-sm-4 col-form-label">First Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
        </div>
        <div class="form-group row">
          <label for="lastName" class="col-sm-4 col-form-label">Last Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="password" placeholder="Enter password">
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group row">
          <label for="address" class="col-sm-4 col-form-label">Address</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
        </div>
        <div class="form-group row">
          <label for="city" class="col-sm-4 col-form-label">City</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="city" placeholder="Enter city">
          </div>
        </div>
        <div class="form-group row">
  <label for="state" class="col-sm-4 col-form-label">State</label>
  <div class="col-sm-8">
    <select class="form-control" id="state">
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <!-- Add more options for other states -->
    </select>
  </div>
</div>
        <div class="form-group row">
          <label for="phone" class="col-sm-4 col-form-label">Phone</label>
	   <div class="col-sm-8">
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
        </div>
	  </div>
        <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label">Email</label>
	   <div class="col-sm-8">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
	  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </div>

