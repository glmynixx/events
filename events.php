<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Events</title>
 
</head>
<body>

  <div class="container">
    <!-- nav card -->
    <div class="nav-card">
   <?php include 'nav.php'; ?>
  </div>

    <!-- main card -->
    <div class="main-card">
       <p class="section-title">Your Events</p>
    <div class="main-card event-section">
    <!-- event card -->
  <div class="card event-card">
  <div class="card-content">
    <h3>Singles Retreat</h3>

    <p class="event-details">
      📅 February 17, 2026 <br>
      ⏰ 10:00 AM <br>
      📍 Malolos, Bulacan <br>
      📌 Training / Session
    </p>

    <a href="attendance.php" class="btn btn-primary">
      View Attendance
    </a>
  </div>
</div>
</div>
</div>
    <!-- stats -->
    <div class="stats">
      <div class="stat-card">
        <p class="stat-label">Upcoming Events</p>
        <p class="stat-value">1</p>
      </div>

      <div class="stat-card">
        <p class="stat-label">Ongoing Events</p>
        <p class="stat-value">0</p>
      </div>

       <div class="stat-card">
        <p class="stat-label">Completed Events</p>
        <p class="stat-value">0</p>
      </div>

       <div class="stat-card">
        <p class="stat-label">Cancelled Events</p>
        <p class="stat-value">0</p>
      </div>
    </div>
  </div>

<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", sans-serif;
    }

    body {
      background-color: #eaf7f6;
      padding: 40px;
    }

    /* main container */
    .container {
      max-width: 1000px;
      margin: auto;
    }

    /* header */
    .header-content {
      display: flex;
      justify-content: center;   
      align-items: center;       
      width: 100%;
  }

    /* nav card */
    .nav-card {
      background-color: #f8fafb;
      margin: 0 auto 30px;
      padding: 16px 0;
      border-radius: 10px;
      max-width: 1000px;
      display: flex;
      justify-content: center;
      align-items: center;
  }

    /* nav list */
    .nav-list {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 1.5rem;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    /* nav links */
    .nav-list a {
      padding: 10px 50px;
      background-color: transparent;
      color: #9aa6a6;
      font-size: 14px;
      border-radius: 6px;
      text-decoration: none;
      transition: 0.2s ease;
      justify-content: center;
      align-items: center;
    }

    .nav-list a:hover,
    .nav-list a.active {
      background-color: #0fa3a3;
      color: #ffffff;
    }

    /* main card */
    .main-card {
      background-color: #f8fafb;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 30px;
      text-align: left;
    }

    .section-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }
    
    .card {
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .card-content {
      padding: 1.5rem;
      margin-bottom: 2rem;

    }

    /* event */
    .event-details {
      font-size: 14px;
      color: #6c757d;
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }

    .btn-primary {
      display: inline-block;
      background-color: #0fa3a3;
      color: #fff;
      padding: 10px 16px;
      border-radius: 6px;
      font-size: 13px;
      text-decoration: none;
      transition: background 0.2s ease;
      float: right;
    }

    .btn-primary:hover {
      background-color: #0c8e8e;
    }

    /* empty state */
    .empty-title {
      color: #9aa6a6;
      font-size: 15px;
      margin-bottom: 6px;
    }

    .empty-sub {
      color: #333;
      font-size: 16px;
    }

    /* stats */
    .stats {
      display: flex;
      gap: 20px;
    }

    .stat-card {
      flex: 1;
      background-color: #f8fafb;
      border-radius: 10px;
      padding: 20px;
    }

    .stat-label {
      font-size: 14px;
      color: #9aa6a6;
      margin-bottom: 8px;
    }

    .stat-value {
      font-size: 18px;
      font-weight: 600;
      color: #333;
    }

</style>
</body>
</html>
