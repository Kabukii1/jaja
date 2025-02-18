
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
    <link rel="stylesheet" href="../CSS/MStyle.css">
    <link rel="stylesheet" href="../CSS/BStyle.css">
    <link rel="stylesheet" href="../CSS/FStyle.css">
    <link rel="stylesheet" href="../CSS/RStyle.css">
    <?php include '../Functionphp/TicketMaker.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js" integrity="sha512-JvpjarJlOl4sW26MnEb3IdSAcGdeTeOaAlu2gUZtfFrRgnChdzELOZKl0mN6ZvI0X+xiX5UMvxjK2Rx2z/fliw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        /* Existing Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="date"],
        .form-group textarea,
        .form-group input[type="file"],
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: none;
            height: 150px;
        }
        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-button:hover {
            background-color: #0056b3;
        }
        .dropdown-section {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        .dropdown-header {
            background-color: #f9f9f9;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
        }
        .dropdown-content {
            display: none;
            padding: 10px;
            background-color: #fff;
        }
        .report-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Added for consistent column widths */
        }
        .report-table th, .report-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            word-wrap: break-word; /* Added to handle long text */
            vertical-align: top; /* Added for better content alignment */
        }
        .report-table th {
            background-color: #f2f2f2;
        }
        .feedback-textbox {
            margin-top: 10px;
        }
        .feedback-textbox textarea {
            width: 100%;
            height: 100px;
            resize: none;
        }
        .custom-file-input {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
        }
        .custom-file-input:hover {
            background-color: #0056b3;
        }
        .file-input {
            display: none;
        }
        .image-preview {
            max-width: 100px;
            max-height: 100px;
        }
        .date-filter {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 10px;
        }
        .date-filter input[type="date"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Custom Dropdown Styles */
        .custom-dropdown {
            position: relative;
            width: 100%;
        }
        .dropdown-toggle {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            background: white;
            text-align: left;
            cursor: pointer;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            width: 100%;
            border: 1px solid #ccc;
            background: white;
            z-index: 1000;
        }
        .dropdown-item {
            padding: 10px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
        }
        .dropdown-item img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
        .dropdown-item:hover {
            background: #f5f5f5;
        }
        .office-info {
            flex-grow: 1;
        }
        .other-nature {
            display: none;
            margin-top: 10px;
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
    </style>
</head>
<body class="body">
    <header>
        <div class="LContainer">
            <a id="logoLink" href="../HTMLphp/Redirect.html" onclick="return false;">
                <img src="../CSS/2.png" alt="Logo" class="Logo">
            </a>
            <div class="LText">
                <h4 class="LsText">Guidance</h4>
                <p class="pLText">AU Jose Rizal Campus</p>
            </div>
            <div>
                <h2 class="CurrentPage">Report</h2>
            </div>
        </div>
    </header>
    <?php include '../Functionphp/display_info.php'; ?>
    <main class="CBody">
        <div class="Info">
            <p>Student No: <?php echo $student_no; ?></p>
            <p>LRN: <?php echo $lrn; ?></p>
        </div>
        <div class="button-container">
            <ul class="button-list">
                <li><a href="HOME.php"><button>HOME</button></a></li>
                <li><a href="news.php"><button>News & Resources</button></a></li>
                <li><a href="resources.php"><button>Student Services</button></a></li>
                <li><a href="Report.php"><button>My Report</button></a></li>
            </ul>
        </div>
    </main>

    <div class="Bg">
        <img src="../IMG/au-malabon-rizal.jpg" alt="Background Image">
    </div>

    <div class="container">
        <h1 class="h1">Reporting System</h1>
        <p class="instruction">Please Fill Out This Form Carefully</p>
        <form method="post" enctype="multipart/form-data" id="reportForm">
            <div class="form-group">
                <label for="incidentDate">Please select the date of the incident:</label>
                <input type="date" id="incidentDate" name="incidentDate" required>
            </div>

            <div class="form-group">
                <label>Office:</label>
                <div class="custom-dropdown">
                        <button type="button" class="dropdown-toggle" onclick="toggleOfficeDropdown()">
                            Select Office
                        </button>
                        <div class="dropdown-menu" id="officeDropdown">
                            <div class="dropdown-item" data-value="GO">
                                <img src="../IMG/guidance.png" alt="Guidance Office">
                                <div class="office-info">
                                    <strong>Guidance Office</strong>
                                    <p>Provides confidential counseling and support to help students manage mental health concerns, address bullying, and overcome academic struggles through personalized guidance and referrals.</p>
                                </div>
                            </div>
                            <div class="dropdown-item" data-value="OSA">
                                <img src="../IMG/osa.png" alt="OSA">
                                <div class="office-info">
                                    <strong>Office of Student Affairs (OSA)</strong>
                                    <p>Develops and implements programs that support student well-being, offering initiatives on mental health awareness, anti-bullying policies, and academic support services.</p>
                                </div>
                            </div>
                            <div class="dropdown-item" data-value="Pr">
                                <img src="../IMG/guidance.png" alt="Prefect">
                                <div class="office-info">
                                    <strong>Prefect of Discipline</strong>
                                    <p>Student leaders who promote a supportive school culture by identifying signs of mental distress, bullying, and academic challenges, then connecting peers to appropriate resources.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="office" id="selectedOffice" required>
                </div>

                <div class="form-group">
                    <label for="nature">Nature:</label>
                    <select id="nature" name="nature" required onchange="toggleOtherNature()">
                        <option value="" disabled selected>Select Nature</option>
                        <option value="Bullying">Bullying</option>
                        <option value="Harassment">Harassment</option>
                        <option value="Discrimination">Discrimination</option>
                        <option value="Mental Health Concerns">Mental Health Concerns</option>
                        <option value="Academic Struggles">Academic Struggles</option>
                        <option value="Relationship Issues">Relationship Issues</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="text" class="other-nature" id="otherNature" placeholder="Please specify">
                </div>

                <div class="form-group">
                    <label for="incident_details">Incident Details:</label>
                    <textarea id="incident_details" name="incident_details" required></textarea>
                </div>
                <div class="form-group">
                    <label for="file-input" class="custom-file-input">Choose File</label>
                    <input type="file" id="file-input" class="file-input" name="files[]" multiple accept="image/*, video/*" onchange="previewFiles()">
                    <p class="PFN">Please Input All Files In One Session</p>
                </div>

                <button type="submit" class="submit-button" name="submit">Submit</button>
            </form>
        </div>

        <div class="container dropdown-section">
            <div class="dropdown-header" onclick="toggleDropdown('currentCases')">
                Current Cases ▼
            </div>
            <div class="dropdown-content" id="currentCases">
                <table class="report-table">
                    <thead>
                        <tr>
                            <th>Submitted Report</th>
                            <th>Date Reported</th>
                            <th>Office</th>
                            <th>Nature</th>
                            <th>Video/Picture</th>
                        </tr>
                    </thead>
                    <tbody id="currentCasesBody">
                        </tbody>
                </table>
            </div>
        </div>

        <div class="container dropdown-section">
            <div class="dropdown-header" onclick="toggleDropdown('history')">
                History ▼
            </div>
            <div class="dropdown-content" id="history">
                <div class="date-filter">
                    <input type="date" id="historyDateFilter" onchange="filterHistoryByDate()">
                    <button onclick="clearDateFilter()">Clear Filter</button>
                </div>
                <table class="report-table">
                    <thead>
                        <tr>
                            <th>Submitted Report</th>
                            <th>Date Reported</th>
                            <th>Office</th>
                            <th>Nature</th>
                            <th>Video/Picture</th>
                        </tr>
                    </thead>
                    <tbody id="historyBody">
                        </tbody>
                </table>
            </div>
        </div>

        <div class="container dropdown-section">
            <div class="dropdown-header" onclick="toggleDropdown('feedback')">
                Feedback ▼
            </div>
            <div class="dropdown-content" id="feedback">
                <div class="feedback-textbox">
                    <textarea id="feedbackText" placeholder="Enter your feedback here..."></textarea>
                    <button onclick="submitFeedback()">Submit Feedback</button>
                </div>
            </div>
        </div>

        <script>
            // Store reports in memory
            let allReports = [];

            // Submit handler
            document.getElementById('reportForm').addEventListener('submit', function(event) {
                event.preventDefault();
                
                const newReport = {
                    details: document.getElementById('incident_details').value,
                    date: new Date().toLocaleDateString(),
                    office: document.getElementById('selectedOffice').value,
                    nature: document.getElementById('nature').value === 'Other' ? document.getElementById('otherNature').value : document.getElementById('nature').value,
                    files: processFiles()
                };

                // Add to both current cases and history
                allReports.push(newReport);
                updateTables();
                alert('Report submitted successfully!');
                this.reset();
            });

            function processFiles() {
                const files = document.getElementById('file-input').files;
                let fileDisplay = '';

                if (files.length > 0) {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        const fileURL = URL.createObjectURL(file);

                        if (file.type.startsWith('image/')) {
                            fileDisplay += `<img src="${fileURL}" alt="${file.name}" class="image-preview">`;
                        } else if (file.type.startsWith('video/')) {
                            fileDisplay += `<video src="${fileURL}" alt="${file.name}" class="image-preview" controls></video>`;
                        } else {
                            fileDisplay = 'Unsupported File Type';
                        }
                    }
                } else {
                    fileDisplay = 'No File Uploaded';
                }

                return fileDisplay;
            }

            function updateTables(filterDate = null) {
                const currentDate = new Date().toLocaleDateString();
                const currentCases = allReports.filter(report => report.date === currentDate);
                const history = filterDate
                    ? allReports.filter(report => report.date === filterDate)
                    : allReports;

                updateTable('currentCasesBody', currentCases);
                updateTable('historyBody', history);
            }

            function updateTable(tableId, reports) {
                const tbody = document.getElementById(tableId);
                tbody.innerHTML = reports.map(report => `
                    <tr>
                        <td>${report.details}</td>
                        <td>${report.date}</td>
                        <td>${report.office}</td>
                        <td>${report.nature}</td>
                        <td>${report.files}</td>
                    </tr>
                `).join('');
            }

            function filterHistoryByDate() {
                const date = document.getElementById('historyDateFilter').value;
                const formattedDate = new Date(date).toLocaleDateString();
                updateTables(formattedDate);
            }

            function clearDateFilter() {
                document.getElementById('historyDateFilter').value = '';
                updateTables();
            }

            function toggleDropdown(id) {
                const content = document.getElementById(id);
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            }

            function submitFeedback() {
                const feedbackText = document.getElementById('feedbackText').value;
                alert('Feedback submitted: ' + feedbackText);
                document.getElementById('feedbackText').value = '';
            }
         
            updateTables(); // Call updateTables to populate the tables on load

            // Custom dropdown functionality
            function toggleOfficeDropdown() {
                const dropdown = document.getElementById('officeDropdown');
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            }

            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function() {
                    document.getElementById('selectedOffice').value = this.dataset.value;
                    document.querySelector('.dropdown-toggle').innerHTML = this.querySelector('.office-info').innerHTML;
                    document.getElementById('officeDropdown').style.display = 'none';
                });
            });

            // Other nature functionality
            function toggleOtherNature() {
                const natureSelect = document.getElementById('nature');
                const otherInput = document.getElementById('otherNature');
                otherInput.style.display = natureSelect.value === 'Other' ? 'block' : 'none';
            }

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.custom-dropdown')) {
                    document.getElementById('officeDropdown').style.display = 'none';
                }
            });
        </script>
    </body>
</html>
