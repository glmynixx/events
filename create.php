<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create</title>

</head>
<body>

  <div class="container">
    <!-- nav card -->
    <div class="nav-card">
   <?php include 'nav.php'; ?>
  </div>
    <!-- main card -->
  <div class="main-card">
      <p class="section-title">Create an Event</p>
    <!-- create event card -->
  <div class="create-event-card">
  <form class="create-form">
    <label>
      <span>Event Name</span>
      <input type="text" placeholder="Enter event name">
    </label>

    <label>
      <span>Event Type</span>
      <select>
        <option value="" disabled selected>Select event type</option>
        <option value="training">Training / Session</option>
        <option value="gathering">Gathering</option>
      </select>
    </label>

    <label>
      <span>Date</span>
      <input type="date">
    </label>

    <label>
      <span>Time</span>
      <input type="time">
    </label>

    <label>
      <span>Location</span>
      <input type="text" placeholder="Enter location">
    </label>

    <button type="submit" class="create-btn">Create Event</button>
  </form>
</div>
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
    
    /* create event card */
    .create-event-card {
      background-color: #f8fafb;
      border-radius: 10px;
      padding: 30px;
      margin-bottom: 30px;
    }

    /* title */
    .create-title {
      font-size: 14px;
      color: #9aa6a6;
      margin-bottom: 20px;
    }

    /* form layout */
    .create-form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .create-form label {
      display: flex;
      flex-direction: column;
      gap: 6px;
      text-align: left;
      font-size: 16px;
      color: #9aa6a6;
    }

    .create-form select {
      padding: 10px 12px;
      border-radius: 6px;
      border: 1px solid #4E4E5A;
      font-size: 14px;
      outline: none;
      background-color: #fff;
      cursor: pointer;
    }

    .create-form select:focus {
      border-color: #0fa3a3;
    }

    /* inputs */
    .create-form input {
      padding: 10px 12px;
      border-radius: 6px;
      border: 1px solid #4E4E5A;
      font-size: 14px;
      outline: none;
    }

    .create-form input:focus {
      border-color: #0fa3a3;
    }

    /* button */
    .create-btn {
      margin-top: 50px;
      padding: 12px;
      border-radius: 6px;
      border: none;
      background-color: #0f7f7f;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .create-btn:hover {
      background-color: #0c6f6f;
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

    /* mobile responsive */
    @media (max-width: 768px) {
      body {
        padding: 20px;
      }

      .main-card {
        padding: 40px 15px 20px 15px;
      }

      .section-title {
        font-size: 20px;
        margin-bottom: 15px;
      }

      .create-event-card {
        padding: 25px 15px;
      }

      .create-form {
        gap: 15px;
      }

      .create-form label {
        font-size: 14px;
        gap: 6px;
      }

      .create-form input,
      .create-form select {
        padding: 10px;
        font-size: 13px;
      }

      .create-btn {
        margin-top: 30px;
        padding: 10px;
        font-size: 13px;
      }

      .stats {
        flex-direction: column;
        gap: 15px;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 15px;
      }

      .nav-card {
        margin: 5px 0 15px 0;
      }

      .nav-list {
        gap: 0.5rem;
        flex-wrap: wrap;
      }

      .nav-list a {
        padding: 6px 12px;
        font-size: 11px;
      }

      .main-card {
        padding: 50px 12px 15px 12px;
      }

      .section-title {
        font-size: 18px;
      }

      .create-event-card {
        padding: 20px 12px;
      }

      .create-form label {
        font-size: 13px;
        gap: 5px;
      }

      .create-form input,
      .create-form select {
        padding: 9px;
        font-size: 12px;
      }

      .create-btn {
        margin-top: 25px;
        padding: 10px;
        font-size: 12px;
        width: 100%;
      }

      .stats {
        flex-direction: column;
        gap: 12px;
      }

      .stat-card {
        padding: 15px;
      }

      .stat-label {
        font-size: 12px;
      }

      .stat-value {
        font-size: 16px;
      }
    }

</style>
</body>
</html>
