<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Student Profiling</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1e1e2d;
            color: white;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar img {
            display: block;
            margin: 10px auto;
            width: 100px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 10px;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: 0.3s;
        }

        .sidebar ul li a:hover {
            background: #ffcc00;
            color: black;
            border-radius: 5px;
        }

        .content {
            flex-grow: 1;
            margin-left: 270px;
            padding: 20px;
            background: #f4f4f4;
            min-height: 100vh;
        }

        .profile-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        .student-form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }

        .student-form input {
            flex: 1;
            min-width: 300px;
            padding: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 18px;
        }

        .student-form button {
            flex: 1;
            min-width: 300px;
            padding: 14px;
            background: #1e1e2d;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        .student-form button:hover {
            background: #ffcc00;
            color: black;
        }

        .student-list {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        .student-list table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 18px;
        }

        .student-list th, .student-list td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .student-list th {
            background-color: #1e1e2d;
            color: white;
        }

        .view-profile-btn, .delete-btn {
            background-color: #1e1e2d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .view-profile-btn:hover, .delete-btn:hover {
            background-color: #ffcc00;
            color: black;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            width: 400px;
            text-align: center;
        }

        .popup button {
            margin-top: 10px;
            padding: 8px 15px;
            border: none;
            background: #1e1e2d;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background: #ffcc00;
            color: black;
        }
    </style>
</head>
<body>
<div class="sidebar">
        <img src="../CSS/LogoAU.png" alt="Profile">
        <h2>Guidance System</h2>
        
        <ul>
            <li class="active"><a href="adminn.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="referra.php"><i class="fas fa-user-plus"></i> Referral List</a></li>
            <li><a href="profiling.php"><i class="fas fa-users"></i> Student Profiling</a></li>
            <li><a href="counseling.php"><i class="fas fa-comments"></i> Counseling</a></li>
            <li><a href="records.php"><i class="fas fa-comments"></i> Record</a></li>
        </ul>
    </div>

    <div class="content">
    <h1>Counseling Schedule</h1>
    
    <!-- FullCalendar -->
    <div id="calendar"></div>

    <h1>Counseling Records</h1>
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Type of Counseling</th>
                    <th>Name of Students</th>
                    <th>Counseling Approaches</th>
                    <th>Via Meet or Campus</th>
                    <th>Remarks</th>
                    <th>Date and Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Academic</td>
                    <td>Juan Dela Cruz</td>
                    <td>Solution-Focused</td>
                    <td>Meet</td>
                    <td>Completed</td>
                    <td>Feb 15, 2025 - 10:00 AM</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <td>Personal</td>
                    <td>Maria Santos</td>
                    <td>Cognitive Therapy</td>
                    <td>Campus</td>
                    <td>Ongoing</td>
                    <td>Feb 16, 2025 - 2:00 PM</td>
                    <td>🔄</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


    <!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.10/main.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    { title: 'Academic Counseling - Juan', start: '2025-02-15T10:00:00' },
                    { title: 'Personal Counseling - Maria', start: '2025-02-16T14:00:00' }
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>
