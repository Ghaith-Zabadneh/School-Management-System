@php
$i=0;    
@endphp
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
      align-items: center;
      
    }
    .logo-container {
      
      text-align: center; /* Modified alignment */
      margin-bottom: 20px;
      
      
    }
    
    .logo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 2px solid #272e48;
      background-color: #272e48;
      
    }
    
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info {
      margin-bottom: 20px;
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
    }
    
    .contact-info p {
      margin: 0;
      color: #555;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    table th, table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }
    
    table th {
      background-color: #f2f2f2;
      color: #333;
    }
    
    .print-date {
      text-align: right;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo-container"> <!-- Modified class name -->
      <img src="{{asset('images/logo-dark.png')}}" alt="School Logo">
    </div>
    
    <h1>Employee Salary Information</h1>
    
    <div class="contact-info">
      <p>School Name: <span style="color: #333;">School System</span></p>
      <p>Address: <span style="color: #333;">Syria Damascus</span></p>
      <p>Email: <span style="color: #333;">info@school.com</span></p>
      <p>Phone: <span style="color: #333;">+1 234 567 890</span></p>
    </div>
    
    <table>
      <thead>
        <tr>
          <th width="5%">SL</th>
          <th>Employee Details</th>
          <th>Employee Data</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="color: #333;">{{ ++$i }}</td>
          <td style="color: #333;">employee Name</td>
          <td style="color: #333;">{{$details['name']}}</td>
        </tr>
        <tr>
          <td style="color: #333;">{{ ++$i }}</td>
          <td style="color: #333;">Basic Salary</td>
          <td style="color: #333;">{{$details['salary']}} SP</td>
        </tr>
        <tr>
            <td style="color: #333;">{{ ++$i }}</td>
            <td style="color: #333;">Date</td>
            <td style="color: #333;">{{$details['month']}}</td>
          </tr>
        <tr>
          <td style="color: #333;">{{ ++$i }}</td>
          <td style="color: #333;">Total Absent Of This Month</td>
          <td style="color: #333;">{{$details['number_of_absent_day']}}</td>
        </tr>
        <tr>
          <td style="color: #333;">{{ ++$i }}</td>
          <td style="color: #333;">Salary This Month</td>
          <td style="color: #333;">{{$details['total_salary']}} SP</td>
        </tr>
      </tbody>
    </table>
    
    <div class="print-date">
      <p>Print Date: {{date('d/M/Y')}} </p>
    </div>
  </div>
</body>
</html>
