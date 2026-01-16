<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scan</title>
  
</head>
<body>

  <div class="container">
    <!-- nav card -->
    <div class="nav-card">
   <?php include 'nav.php'; ?>
  </div>

    <!-- main card -->
    <div class="main-card">
       <p class="section-title">Scan QR Code</p>
    <!-- scan qr card -->
    <div class="scan-card">
    <form class="scan-form">
    <!-- Select Event -->
     <label>
          <span>Select Event</span>
          <select id="eventSelect">
            <option value="" disabled selected>Choose an event...</option>

            <option
              value="Singles Retreat"
              data-date="02/17/26"
              data-time="10:00 AM"
              data-location="Malolos, Bulacan"
              data-type="Training / Session">
              Singles Retreat – 02/17/26 at 10:00 AM
            </option>
          </select>
        </label>
        <!-- preview -->
        <div class="event-preview" id="eventPreview">
          <p class="preview-label">Taking attendance for:</p>
          <p class="preview-title" id="previewTitle"></p>
          <p class="preview-type" id="previewType"></p>
          <p class="preview-details" id="previewDetails"></p>
        </div>

        <button type="submit" class="scan-btn" id="scanBtn" disabled>
          Start Scanning
        </button>
      </form>
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
    
    /* scan card */
    .scan-card {
      background-color: #f8fafb;
      border-radius: 10px;
      padding: 40px 30px;
      margin-bottom: 30px;
    }

    .scan-title {
      font-size: 14px;
      color: #9aa6a6;
      margin-bottom: 20px;
    }

    /* form */
    .scan-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .scan-form label {
      display: flex;
      flex-direction: column;
      gap: 8px;
      font-size: 16px;
      color: #9aa6a6;
      text-align: left;
    }

    .scan-form select {
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #4E4E5A;
      font-size: 14px;
      outline: none;
      background-color: #fff;
    }

    .scan-form select:focus {
      border-color: #0fa3a3;
    }

    /* event preview */
    .event-preview {
      border: 1px solid #0fa3a3;
      border-radius: 8px;
      padding: 16px;
      background-color: #ffffff;
      display: none;
    }

    .preview-label {
      font-size: 13px;
      color: #9aa6a6;
      margin-bottom: 8px;
    }

    .preview-title {
      font-size: 14px;
      font-weight: 600;
      color: #333;
      margin-bottom: 6px;
      margin-left: 8px;
    }

    .preview-type {
      display: inline-block;
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 12px;
      background-color: #e6f4f4;
      color: #0f7f7f;
      margin-bottom: 6px;
    }

    .preview-details {
      font-size: 13px;
      color: #555;
    }

    /* button */
    .scan-btn {
      margin-top: 20px;
      padding: 12px;
      border-radius: 6px;
      border: none;
      background-color: #0f7f7f;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .scan-btn:disabled {
      background-color: #aacccc;
      cursor: not-allowed;
    }

    .scan-btn:hover:enabled {
      background-color: #0c6f6f;
    }

</style>

<script>
  const eventSelect = document.getElementById("eventSelect");
    const previewBox = document.getElementById("eventPreview");
    const previewTitle = document.getElementById("previewTitle");
    const previewType = document.getElementById("previewType");
    const previewDetails = document.getElementById("previewDetails");
    const scanBtn = document.getElementById("scanBtn");

    eventSelect.addEventListener("change", function () {
      const selected = this.options[this.selectedIndex];

      const title = selected.value;
      const date = selected.dataset.date;
      const time = selected.dataset.time;
      const location = selected.dataset.location;
      const type = selected.dataset.type;

      previewTitle.textContent = title;
      previewType.textContent = type;
      previewDetails.textContent = `${date} | ${time} | ${location}`;

      previewBox.style.display = "block";
      scanBtn.disabled = false;
    });
</script>
</body>
</html>
