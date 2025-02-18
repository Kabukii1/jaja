<?php
// Include display_info.php at the very top, before any output
include '../Functionphp/display_info.php';
?>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/htmx/1.9.12/htmx.min.js"></script>

        <style>
            .article-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive columns */
                gap: 35px; /* Mas malawak na space */
                max-width: 90%;
                margin: 30px auto;
                justify-content: flex-start; /* Ilalagay ang mga images medyo kaliwa */
            }

            .ArticleIMG {
                width: 100%;
                height: auto;
                max-width: 400px; /* Para hindi sobrang laki */
                border-radius: 10px;
                object-fit: cover;
                display: block;
                margin-left: -10px; /* Medyo ikakaliwa ng konti */
            }

            /* Adjusting the white box styling */
            .AUart {
                background-color: #ffffff;
                border-radius: 10px;
                padding: 20px;
                margin: 20px auto;
                max-width: 85%; /* Reduced max width */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                min-height: 200vh; /* Makes the background extend beyond visible scroll */
            }

            .frontline-focus-container {
                display: flex;
                align-items: flex-start;
                justify-content: center; /* Centers both sections */
                gap: 20px; /* Adjust the gap between the two sections */
            }

            .latest-news {
                flex: 2; /* Adjust width ratio to make "Latest News" smaller */
            }

            .Frontline-Focus-video {
                flex: 8; /* Adjust width ratio to make the video section larger */
            }

            .latest-news h2 {
                font-size: 2rem;
                color: #4a4a4a;
                margin-right: 200px;
            }

            .frontline-focus-video h2 {
                font-size: 2rem;
                color: #4a4a4a;
                margin-left:200px;
            }

            .latest-news ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
                margin-right:500px;
            }

            /* Updated: Shadow effect for Latest News list items */
            .latest-news li {
                margin-bottom: 12px;
                padding: 15px; /* Add padding for spacing inside the box */
                background-color: #f8f9fa; /* Light gray background */
                border-radius: 10px; /* Rounded corners */
                box-shadow: 0 5px 9px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out; /* Smooth hover effect */
            }

            .latest-news li:hover {
                transform: translateY(-5px); /* Slight lift effect on hover */
                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Slightly stronger shadow on hover */
            }

            .latest-news a {
                font-size: 1.2rem;
                text-decoration: none;
                color: #0056b3;
                font-weight: bold;
            }

            .latest-news p {
                margin: 5px 0;
                font-size: 0.9rem;
                color: #6c757d;
            }

            .Frontline-Focus-video {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .video-container {
                display: flex;
                flex-direction: column; /* Stack videos vertically */
                align-items: center; /* Center align the videos */ 
                margin-left: 200px;
                gap: 20px; /* Add space between the videos */
                max-width: 100%;
            }

            .video-item {
                width: 100%; /* Adjust width to fit the container */
                max-width: 350px; /* Limit the width of the video items */
                text-align: center;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
                padding: 15px;
                margin: 0 auto; /* Center the box */
            }

            .video-item iframe {
                width: 100%; /* Fit the width of the container */
                height: 300px; /* Adjust height for a portrait-like display */
                border-radius: 10px;
            }

            .video-item p {
                font-size: 1rem;
                color: #4a4a4a;
                margin-top: 10px;
            }

            .frontline-focus a {
                display: inline-block;
                margin-top: 10px;
                padding: 10px 15px;
                background-color: #1a73e8;
                color: #ffffff;
                text-decoration: none;
                border-radius: 5px;
                text-align: center;
            }


            /* Inside Articles section */
            .articles-container {
                margin: 40px auto;
                max-width: 1200px;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .articles-header {
                font-size: 1.5rem;
                font-weight: bold;
                color: #333333;
                text-align: center;
                margin-bottom: 20px;
            }

            .articles-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            .articles-item {
                padding: 15px;
                background-color: #f9f9f9;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .articles-item h4 {
                font-size: 1.2rem;
                color: #0056b3;
                margin-bottom: 10px;
            }

            .articles-item p {
                font-size: 0.9rem;
                color: #555555;
                margin-bottom: 5px;
            }

            .articles-item a {
                text-decoration: none;
                color: #0056b3;
                font-weight: bold;
                font-size: 0.9rem;
            }
        </style>

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
                    <h2 class="CurrentPage">Main</h2>
                </div>
            </div>
        </header>
    </head>

    <body>
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
                    <li><a href="CC.php"><button>Current Cases</button></a></li>
                    <li><a href="Feedback.php"><button>Feedback</button></a></li>
                </ul>
            </div>

            <article class="AUart">
                <div class="AUcont">
                    <h2 class="AUText">Guidance Office of AU JRC</h2>
                    <p class="AUpText"></p>

                    
                        <!-- Adjusted Frontline Focus Section -->
<div class="frontline-focus-container">
    <!-- Latest News Section -->
    <div class="latest-news" style="flex: 1;">
        <h2>Latest News</h2>
        <ul>
            <li>
                <a href="https://example.com/news1" target="_blank">
                    A silent pandemic emerging: Rise of Mental Health Concern
                </a>
                <p>Date Posted: February 11, 2025, 8:15 pm</p>
            </li>
            <li>
                <a href="https://example.com/news2" target="_blank">
                    Mental Health Issues Continues to Increase
                </a>
                <p>Date Posted: February 11, 2025, 8:02 pm</p>
            </li>
            <li>
                <a href="https://example.com/news3" target="_blank">
                    Understanding Filipino Youth
                </a>
                <p>Date Posted: February 13, 2025, 8:02 pm</p>
            </li>
            <li> 
                <a href="https://example.com/news4" target="_blank">   
                    WHO Launch PH Council of MH Strategic Framework the reconstitution of technical panels
                </a>
                <p>Date Posted: February 14, 2025, 8:02 pm</p>
            </li>
            <li>
                <a href="https://example.com/news4" target="_blank">   
                    DLSL Conducts Seminar for School Guidance Counselors
                </a>
                <p>Date Posted: February 14, 2025, 8:02 pm</p>
            </li>
            <li>
                <a href="https://example.com/news4" target="_blank">   
                    CHED to prioritize the implementation of essential courses and the reconstitution of technical panels
                </a>
                <p>Date Posted: February 14, 2025, 8:02 pm</p>
            </li>
            <li>
                <a href="https://example.com/news5" target="_blank">
                    Philippine Mental Health Act: Just an Act? 
                </a>    
                <p>Date Posted: February 15, 2025, 8:02 pm</p>
            </li>
        </ul>
    </div>


    
    <!-- Frontline Focus Video Section -->
    <div class="Frontline-Focus-video" style="flex: 1;">
        <h2>Frontline Focus</h2>

        <div class="video-container">
            <!-- First Video -->
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/your-video-id" 
                    title="YouTube video player" frameborder="0" allowfullscreen>
                </iframe>
                <p>Brothers Marc and Enrico Pfister spearheaded the Philippines’ 4-1 victory over Kazakhstan yesterday for its first win in curling’s men’s team event.</p>
            </div>

            <!-- Second Video -->
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/your-video-id" 
                    title="YouTube video player" frameborder="0" allowfullscreen>
                </iframe>
                <p>Brothers Marc and Enrico Pfister spearheaded the Philippines’ 4-1 victory over Kazakhstan yesterday for its first win in curling’s men’s team event.</p>
            </div>      
            
            <!-- Third Video -->
            <div class="video-item">
                <iframe src="https://www.youtube.com/embed/your-video-id-2" 
                    title="YouTube video player" frameborder="0" allowfullscreen>
                </iframe>
                <p>Another highlight of the 9th Asian Winter Games in Harbin, China.</p>
            </div>
        </div>





                            <!-- New Button -->
                            <div style="text-align: center; margin-top: 20px;">
                                <a href="https://example.com/newpage" target="_blank" style="text-decoration: none;">
                            
                                </a>
                            </div>

                    <!-- Inside Articles Section -->
                          <div class="articles-container">
                            <div class="articles-header">Articles</div> <!-- Changed the heading here -->
                            <div class="articles-grid">
                                <div class="articles-item">
                                 <h4>A swipe at Duterte?</h4>
                                 <p>Marcos says admin slate has no tokhang backers, China allies</p>
                                <a href="#">Read More</a>
                          </div>
                          <div class="articles-item">
                                <h4>Editorial</h4>
                                <p>VIP disease</p>
                                <a href="#">Read More</a>
                         </div>
                         <div class="articles-item">
                                <h4>Filipinos and Valentine’s Day</h4>
                                <p>Why chocolates are at the heart of unforgettable moments</p>
                                <a href="#">Read More</a>
                         </div>
                         <div class="articles-item">
                                <h4>Nation</h4>
                                <p>3 nabbed for offering ‘poll victory’ for P800...</p>
                                <a href="#">Read More</a>
                        </div>
                        <div class="articles-item">
                                <h4>World</h4>
                                <p>Over 600 arrested for working...</p>
                                <a href="#">Read More</a>
                       </div>
                       <div class="articles-item">
                                <h4>Business</h4>
                                <p>PSEi sinks below 6,000 anew...</p>
                               <a href="#">Read More</a>
                         </div>
                     </div>
                </div>
              </div>
            </article>
        </main>
    </body>
</html> 

