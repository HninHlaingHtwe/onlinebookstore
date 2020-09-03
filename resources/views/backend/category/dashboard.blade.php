<x-backend>
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile tile">Today Orders</h3>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <th>User Name</th>
                  <th>Phone No</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Total</th>
                </thead>
                <tbody>
                  <?php 
                    $date=date('Y-m-d');
                    $sql="SELECT users.*,orders.total as ototal FROM users JOIN orders ON orders.user_id=users.id WHERE orders.orderdate=:d";
                    $stmt=$conn->prepare($sql);
                    $stmt->bindParam(':d',$date);
                    $stmt->execute();
                    $orders=$stmt->fetchAll();

                    foreach ($orders as $order):
                      $name=$order['name'];
                      $phone=$order['phone'];
                      $address=$order['address'];
                      $email=$order['email'];
                      $qty=$order['ototal'];
                   ?>
                   <tr>
                     <td><?= $name ?></td>
                     <td><?= $phone ?></td>
                     <td><?= $address ?></td>
                     <td><?= $email ?></td>
                     <td><?= $qty ?></td>
                   </tr>
                   <?php endforeach; ?>
                </tbody>
                
              </table>
              <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                
              </div>
          </div>
        </div>
      </div>
    </main>
</x-backend>	