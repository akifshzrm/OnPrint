<!-- Header -->
<?php include 'header.php'; ?>

  <!-- Navbar -->
  <div class="d-flex flex-column h-100">
    <div class="d-flex flex-row">
      <div class="nav navbar-nav navbar-left">
      <!-- Side navigation -->
      <ul>
    <li>
      <button type="button">Printing Outlet List</button>
    </li>
    <li>
      <button type="button">Make Order</button>
    </li>
    <li>
      <button type="button">Calculation</button>
    </li>
    <li>
      <button type="button">Report</button>
    </li>
  </ul>
    </div>
    <!-- Main content -->
    <div class="flex-grow-1">
      <!-- Printing Outlet List -->
<div class="container mt-5">
  <h2>Printing Outlet List</h2>
  <p>View the information on printing outlet available for UMP campuses in Gambang and Pekan:</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Outlet</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Outlet 1</td>
        <td>Gambang</td>
      </tr>
      <tr>
        <td>Outlet 2</td>
        <td>Pekan</td>
      </tr>
      <!-- Add more rows for additional outlets -->
    </tbody>
  </table>
</div>

<div class="container mt-5">
  <h2>Make Order</h2>
  <p>Upload the documents to print and select the printing package:</p>
  <form>
    <div class="form-group">
      <label for="documentInput">Document:</label>
      <input type="file" class="form-control-file" id="documentInput">
    </div>
    <div class="form-group">
      <label for="packageSelect">Printing Package:</label>
      <select class="form-control" id="packageSelect">
        <option>Business Cards</option>
        <option>Brochures</option>
        <option>Banners</option>
        <!-- Add more options for additional printing packages -->
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Add to Order</button>
  </form>

  <hr>
  <h3>Order List</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Document</th>
        <th>Printing Package</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Document 1</td>
        <td>Business Cards</td>
        <td>Ordered</td>
        <td>
          <button class="btn btn-secondary btn-sm">Update</button>
          <button class="btn btn-danger btn-sm">Cancel</button>
        </td>
      </tr>
      <!-- Add more rows for additional orders -->
    </tbody>
  </table>
  <button class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Confirm Order</button>
</div>

<!-- Confirmation Modal -->
<div class="modal" id="confirmModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Confirm Order</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Are you sure you want to confirm this order?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!-- Calculation -->
<div class="container mt-5">
  <h2>Calculation</h2>
  <p>View your order record and calculate your average expenses:</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Total Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>January 1, 2020</td>
        <td>$50.00</td>
      </tr>
      <tr>
        <td>January 8, 2020</td>
        <td>$75.00</td>
      </tr>
      <!-- Add more rows for additional orders -->
    </tbody>
  </table>
  <form>
    <div class="form-group">
      <label for="intervalInput">Interval Duration:</label>
      <input type="text" class="form-control" id="intervalInput" placeholder="Week/Month">
    </div>
    <button type="submit" class="btn btn-primary">Calculate</button>
  </form>
  <p>Average expenses: $62.50</p>
</div>

<!-- Report -->
<div class="container mt-5">
  <h2>Report</h2>
  <p>Visualization of insightful information:</p>
  <canvas id="reportChart"></canvas>
</div>
</div>
    </div>
        <!-- include footer here -->
  </div>
</body>




