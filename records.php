<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Records</title>
  
</head>
<body>

  <div class="container">
    <!-- nav card -->
    <div class="nav-card">
   <?php include 'nav.php'; ?>
   </div>

    <!-- main card -->
    <div class="main-card">
      <p class="section-title">Attendance Records</p>
      <div class="records-section">
        <!-- event selection -->
        <div class="select-card">
          <form class="select-form">
            <label>
              <span>Select Event</span>
              <select id="eventSelect">
                <option value="" disabled selected>Choose an event...</option>
                <option value="retreat">Singles Retreat – 02/17/26 at 10:00 AM</option>
              </select>
            </label>
          </form>
        </div>

        <!-- attendance display -->
        <div class="attendance-card" id="attendanceRetreat" style="display: none;">
          <p class="subsection-title">Attendance for: Singles Retreat</p>
          <div class="attendance-list">
            <div class="attendee-item">
              <p class="attendee-name">Ashley Antonio</p>
              <p class="attendee-details">CCF ID: 101010 | Satellite: Malolos | Role: Dgroup Member</p>
              <p class="attendee-time">Checked in at 10:05 AM</p>
            </div>
            <div class="attendee-item">
              <p class="attendee-name">Marc Joson</p>
              <p class="attendee-details">CCF ID: 020202 | Satellite: Malolos | Role: Dgroup Leader</p>
              <p class="attendee-time">Checked in at 10:15 AM</p>
            </div>
            <div class="attendee-item">
              <p class="attendee-name">Ethan Bautista</p>
              <p class="attendee-details">CCF ID: 123123 | Satellite: Malolos | Role: Dgroup Member</p>
              <p class="attendee-time">Checked in at 10:10 AM</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- stats -->
    <div class="stats">
      <div class="stat-card">
        <p class="stat-label">Total Events</p>
        <p class="stat-value">1</p>
      </div>
      <div class="stat-card">
        <p class="stat-label">Total Check-ins </p>
        <p class="stat-value">3</p>
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

    /* select card */
    .select-card {
      background-color: #f8fafb;
      border-radius: 10px;
      padding: 40px 30px;
      margin-bottom: 30px;
    }

    .select-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .select-form label {
      display: flex;
      flex-direction: column;
      gap: 8px;
      font-size: 16px;
      color: #9aa6a6;
      text-align: left;
    }

    .select-form select {
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #4E4E5A;
      font-size: 14px;
      outline: none;
      background-color: #fff;
    }

    .select-form select:focus {
      border-color: #0fa3a3;
    }

    /* attendance card */
    .attendance-card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      border: 1px solid #cfdede;
    }

    .subsection-title {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      margin-bottom: 15px;
    }

    .attendance-list {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .attendee-item {
      background-color: #f8fafb;
      border: 1px solid #0fa3a3;
      border-radius: 8px;
      padding: 12px;
    }

    .attendee-name {
      font-size: 16px;
      font-weight: 600;
      color: #333;
      margin-bottom: 4px;
    }

    .attendee-details {
      font-size: 14px;
      color: #666;
      margin-bottom: 4px;
    }

    .attendee-time {
      font-size: 14px;
      color: #9aa6a6;
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

<script>
  const eventSelect = document.getElementById("eventSelect");
  const attendanceRetreat = document.getElementById("attendanceRetreat");

  eventSelect.addEventListener("change", function () {
    // hide all attendance cards
    attendanceRetreat.style.display = "none";

    // show the selected one
     if (this.value === "retreat") {
      attendanceRetreat.style.display = "block";
    }
  });
</script>

</body>
</html>
