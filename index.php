<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanjeevani Aashray Portal</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        header {
            background-color: #ff6f00;
            padding: 15px 20px; /* Increased padding for header size */
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            position: relative;
        }

        .logo img {
            height: 80px;
            width: auto;
        }

        .title {
            text-align: center;
            flex-grow: 1;
        }

        .title h1 {
            font-size: 28px; /* Increased font size */
            margin: 0;
        }

        .subheading {
            font-size: 10px;
            font-style: italic;
            margin-top: 3px;
        }

        .nav-login-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .login-btn {
            padding: 8px 16px;
            background-color: #ffffff;
            color: #ff6f00;
            border: 1px solid #ff6f00;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .login-btn:hover {
            background-color: #ff6f00;
            color: white;
        }

        .cta-button {
            background-color: #ff6f00;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }

        /* Article Section */
        .article {
            padding: 50px 20px;
            background-color: #f9f9f9;
            display: flex; /* Flex to align images and text */
            align-items: flex-start; /* Align text and images at the top */
            justify-content: flex-start; /* Align to the left */
            width: 100%; /* Full width */
            margin: 0; /* No margin */
        }

        .article h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #ff6f00;
        }

        .article p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 600px; /* Limiting the width of the text */
            color: #555;
            text-align: justify; /* Justify text */
        }

        .image-container {
            display: flex; /* Flexbox for images */
            justify-content: flex-end; /* Align images to the right */
            flex-grow: 1; /* Allow image container to fill remaining space */
        }

        .article img {
            max-width: 320px; /* Adjusted size for both images */
            width: 100%; /* Responsive */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0; /* No margin to eliminate gap */
        }

        /* Blog Section */
        .blogs {
            padding: 50px 20px;
            background-color: #fff;
        }

        .blogs h2 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            color: #ff6f00;
        }

        .blog-posts {
            display: grid; /* Grid layout for blog posts */
            grid-template-columns: repeat(3, 1fr); /* 3 columns */
            gap: 20px; /* Space between grid items */
        }

        .blog-post {
            background-color: #f9f9f9; /* Background color for each blog post */
            padding: 15px; /* Padding around each blog post */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex; /* Flexbox for blog section */
            flex-direction: column; /* Stack content vertically */
            align-items: flex-start; /* Align text and images at the top */
        }

        .blog-text {
            flex-grow: 1; /* Allow text to grow and fill space */
            margin-bottom: 10px; /* Space between text and image */
        }

        .blog-text h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-text p {
            font-size: 16px;
            color: #666;
            line-height: 1.5;
            text-align: justify; /* Justify text */
        }

        .read-more {
            display: inline-block;
            margin-top: 10px;
            color: #ff6f00;
            text-decoration: none;
            font-size: 16px;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #ff6f00;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
/* Dropdown Menu */
.dropdown {
    position: relative; /* Position relative to the nav */
    display: inline-block; /* Align inline with other nav items */
}

.dropdown-content {
    display: none; /* Hide by default */
    position: absolute; /* Position relative to the dropdown */
    background-color: #f9f9f9; /* Background color */
    min-width: 160px; /* Minimum width for the dropdown */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow for effect */
    z-index: 1; /* Make sure it appears above other content */
}

.dropdown-content a {
    color: black; /* Text color */
    padding: 12px 16px; /* Padding for each item */
    text-decoration: none; /* Remove underline */
    display: block; /* Block display */
    font-size: 16px; /* Set font size to match other navigation items */
}

.dropdown:hover .dropdown-content {
    display: block; /* Show dropdown on hover */
}

.dropbtn:hover {
    color: #fcfcfc; /* Change color on hover for the dropdown button */
}

        
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="LOGO.jpg" alt="Sanjeevani Aashray Logo"> <!-- Insert the logo image -->
    </div>
    <div class="title">
        <h1>SANJEEVANI AASHRAY</h1>
        <div class="subheading">Aapki Emergency, Hamara Prathmikta</div>
    </div>
    <div class="nav-login-wrapper">
        <nav>
            <a href="hospital_home.html">Home</a>
            <div class="dropdown">
                <a href="service" class="dropbtn">Services</a>
                <div class="dropdown-content">
                    <a href="service_filter.php?service=ICU">ICU</a>
                    <a href="service_filter.php?service=Bed">Beds</a>
                    <a href="service_filter.php?service=Oxygen">Oxygen</a>
                    <a href="service_filter.php?service=Ventilator">Ventilator</a>
                    <a href="service_filter.php?service=Blood_Bank">Blood Bank</a>
                    <a href="service_filter.php?service=Emergency_Beds">Emergency Beds</a>
                    <a href="service_filter.php?service=Ambulance">Ambulance</a>
                </div>
                
            </div>
            <a href="#about">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <a href="login.php">
            <button class="login-btn">Login</button>
        </a>
    </div>
</header>

<!-- Article Section about Sanjeevani Aashray Portal -->
<section class="article">
    <!-- Left-aligned text -->
    <div class="text">
        <h2>About Us</h2>
        <p>
            Sanjeevani Aashray is an innovative platform dedicated to connecting patients with hospitals during emergencies, ensuring real-time availability of critical medical resources. Our mission is to simplify access to immediate medical assistance, optimize healthcare resource utilization, and enhance the overall emergency response experience. By leveraging advanced technology, we aim to bridge the gap between patients and healthcare providers effectively. Our platform not only facilitates quick decision-making for patients and their families but also empowers healthcare facilities to manage resources efficiently.
        </p>
    </div>

    <!-- Right-aligned images -->
    <div class="image-container">
    <img src="https://www.google.com/imgres?q=emergengcy%20sevice%20animated%20%20%20image&imgurl=https%3A%2F%2Fimg.freepik.com%2Fpremium-vector%2Fstretcher-icon-vector-image-can-be-used-emergency-services_120816-96455.jpg&imgrefurl=https%3A%2F%2Fwww.freepik.com%2Fpremium-vector%2Fstretcher-icon-vector-image-can-be-used-emergency-services_156555487.htm&docid=tH3op8OzUZXP_M&tbnid=rOETb8LXc98PhM&vet=12ahUKEwi3vY_L1KKJAxWpyzgGHcE_AEsQM3oECDkQAA..i&w=626&h=626&hcb=2&itg=1&ved=2ahUKEwi3vY_L1KKJAxWpyzgGHcE_AEsQM3oECDkQAA" alt="Healthcare Image"> <!-- First Image -->
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREKjERMjdwEkN56ABBl6ZiV-5Q8yy6wVmadg&s" alt="Healthcare Image 2"> <!-- Second Image -->
    </div>
</section>

<!-- Blogs Section -->
<section class="blogs">
    <h2>Latest Blogs</h2>
    <div class="blog-posts">
        <div class="blog-post">
            <div class="blog-text">
                <h3>The Importance of Real-Time ICU and Ventilator Availability</h3>

                <p>Emergencies are unpredictable, and in critical situations, patients need immediate access to care. One of the biggest challenges in healthcare today is the delay caused by not.......</p>
                <a href="blog1.html" class="read-more">Read more</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-text">
                <h3>How Technology is Transforming Hospital Resource Management</h3>
  
                <p>Hospital resource management is an integral part of healthcare delivery, especially when it comes to emergency services. Efficient resource allocation.......</p>
                <a href="blog2.html" class="read-more">Read more</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-text">
                <h3>Blood Bank Management: Ensuring Critical Supplies in Emergencies</h3>
      
                <p>Blood is a critical resource in the medical field, especially during emergencies like surgeries, trauma cases, or treatments for certain medical conditions. Ensuring a continuous......</p>
                <a href="blog3.html" class="read-more">Read more</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-text">
                <h3>The Role of Online Platforms in Booking Emergency Medical Services</h3>
           
                <p>With the rise of digital solutions, accessing healthcare services has become easier than ever before. Patients no longer need to visit hospitals in person to inquire about.......</p>
                <a href="blog4.html" class="read-more">Read more</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-text">
                <h3>Patient Empowerment Through Healthcare Technology</h3>
        
                <p>Patients today have more control over their healthcare choices than ever before, thanks to the growing role of digital technology. From booking appointments..........</p>
                <a href="blog5.html" class="read-more">Read more</a>
            </div>
        </div>

        <div class="blog-post">
            <div class="blog-text">
                <h3>Emergency Services During the COVID-19 Pandemic: Lessons Learned</h3>
         
                <p>The COVID-19 pandemic exposed many vulnerabilities in healthcare systems worldwide, particularly regarding the availability of emergency medical services. ICU beds, ventilators, and.........</p>
                <a href="blog6.html" class="read-more">Read more</a>
            </div>
        </div>
    </div>
</section>




<footer>
    <p>&copy; 2024 Sanjeevani Aashray. All rights reserved.</p>
</footer>

</body>
</html>