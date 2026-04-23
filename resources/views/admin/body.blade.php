```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Dashboard - Dental Clinic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    body {
      background: #0f172a;
      color: #fff;
    }
    .card {
      background: #1e293b;
      border: none;
      border-radius: 12px;
    }
    .card h4, .card h5 {
      color: #fff;
    }
  </style>
</head>

<body>

<div class="container py-4">

  <!-- STATS -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card p-3">
        <h5>Patients</h5>
        <h3>320</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3">
        <h5>Appointments</h5>
        <h3>45</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3">
        <h5>Treatments</h5>
        <h3>28</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3">
        <h5>Earnings</h5>
        <h3>$1,540</h3>
      </div>
    </div>
  </div>

  <!-- CHARTS -->
  <div class="row mb-4">
    <div class="col-md-6">
      <div class="card p-3">
        <h4>Weekly Appointments</h4>
        <canvas id="appointmentChart"></canvas>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card p-3">
        <h4>Treatment Types</h4>
        <canvas id="treatmentChart"></canvas>
      </div>
    </div>
  </div>

  <!-- TABLE -->
  <div class="card p-3">
    <h4>Recent Appointments</h4>
    <div class="table-responsive">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>Patient</th>
            <th>Date</th>
            <th>Treatment</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hani</td>
            <td>2026-04-23</td>
            <td>Teeth Cleaning</td>
            <td class="text-success">Completed</td>
          </tr>
          <tr>
            <td>Maryam</td>
            <td>2026-04-24</td>
            <td>Root Canal</td>
            <td class="text-warning">Pending</td>
          </tr>
          <tr>
            <td>Ali</td>
            <td>2026-04-25</td>
            <td>Braces</td>
            <td class="text-info">Scheduled</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- JS CHARTS -->
<script>
new Chart(document.getElementById('appointmentChart'), {
  type: 'line',
  data: {
    labels: ['Mon','Tue','Wed','Thu','Fri','Sat'],
    datasets: [{
      label: 'Appointments',
      data: [5, 8, 6, 10, 9, 7],
      borderWidth: 2
    }]
  }
});

new Chart(document.getElementById('treatmentChart'), {
  type: 'pie',
  data: {
    labels: ['Cleaning','Root Canal','Braces','Extraction'],
    datasets: [{
      data: [30, 20, 25, 25]
    }]
  }
});
</script>

</body>
</html>
```
