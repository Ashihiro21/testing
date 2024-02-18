<!DOCTYPE html>
<html>
<head>
    <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="modal.css">
<style>
 .img-fluid{
    border: none;
    box-shadow: none;
    width: 100vh;
}
</style>
</head>
<body style="background-color: transparent;">
<?php

include("header.php")
?>
    
    
<div class="container-fluid hero">
  <div class="mt-4 ml-3">
    <!-- Book a Demo Button with Transparent Gray Background -->
    <a class="d1 ml-4 " style="color: white">Hello, my name is</a>
  </div>

  <div class="row ml-4">
    <!-- First Column -->
    <div class="col-md-6">
      <h2>
        <span class="fs-lg-8" style="color: white;">Elexis</span>
        <span style="color: red;">Falceso</span>
      </h2>

      <p class="web1" style="color: white">
        I am a Web Developer.
      </p>

      <div class=" mt-4 mb-5">
        <!-- Search Bar with Button -->
      </div>
    </div>
  </div>
</div >




  

<div style="border-radius: none;" class="jumbotron1 mt-5">
    <div class="row">
        <div class="col-md-3">
        <img src="Assets/elexis7.png" alt="Description of the image" class="img-fluid">
        </div>
        <div class="col-md-7 m-5">
            <div class="description">
                <h1 class="About-Me">About Me</h1>
                <p><span class="designer">Developer</span></p>
                <p class="mr-5 desc">Hello! I'm a passionate and versatile Front-End Developer and Designer dedicated to crafting visually stunning and user-friendly digital experiences. With a keen eye for design aesthetics and a solid foundation in front-end development, I bring a unique blend of creativity and technical expertise to every project. and I have a solid background in translating design concepts into fully functional and responsive websites and web applications. With hands-on experience in HTML, CSS, PHP and a Little Bit Knowleddge for JavaScript, I thrive on turning ideas into interactive and dynamic interfaces. My commitment to writing clean and efficient code ensures not only a visually appealing design but also optimal performance across various devices and browsers.</p>
                <a href="contact.php" class="button btn2">Lets Talk</a>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <!-- Box 1 -->
        <div class="col-md-4 mb-4">
            <div class="box p-5">
                <div class="box-header text-center">
                    <!-- Content for Box 1 header -->
                </div>
                <div class="box-body">
                    <h5 class="box-title">Web Development Projects</h5>
                    <p class="box-text">In college, I demonstrated web development expertise with projects like a Student Management system using ASP.NET and Python for efficient canteen order reservations, and a School Food Ordering System in PHP and JavaScript, addressing practical challenges in student service and management.</p>
                </div>
                <div class="box-footer text-center">
                    <!-- Content for Box 1 footer -->
                    <button class="button2 btn3" data-toggle="modal" data-target="#box1Modal" aria-label="Read more about Web Development Projects">Read More</button>
                </div>
            </div>
        </div>
        
        <!-- Box Modal 1 -->
        <div class="modal fade" id="box1Modal" tabindex="-1" role="dialog" aria-labelledby="box1ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="box1ModalLabel">Web Development Projects</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5><b>Online and Offline Face Recognition:</b></h5>
                                <p><b>Objective: </b>Develop a versatile face recognition system using ASP.NET and Python for online and offline applications.</p>
                                <p><b>Key Features: </b>Dual-mode face recognition for security and access control, showcasing a combination of web development and machine learning expertise.</p>
                                <h5><b>Student Management System:</b></h5>
                                <p><b>Objective: </b>Facilitate canteen order reservations, incorporating auto-expiration for unclaimed orders by 5 p.m. Developed using PHP and JavaScript.</p>
                                <p><b>Key Features: </b>Streamlined canteen order process, user-friendly interface, and efficient order management through auto-expiration.</p>
                                <h5><b>School Food Ordering System:</b></h5>
                                <p><b>Objective: </b>Create a user-centric food ordering system for students with account creation functionality. Implemented using PHP and JavaScript.</p>
                                <p><b>Key Features: </b>Simplified food ordering with student accounts and admin oversight, responsive system design using PHP and JavaScript.</p>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Box 2 -->
        <div class="col-md-4 mb-4">
            <div class="box p-5">
                <div class="box-header text-center">
                    <!-- Content for Box 2 header -->
                </div>
                <div class="box-body">
                    <h5 class="box-title">Web Development Skill</h5>
                    <p class="box-text">my educational journey has equipped me with a comprehensive command of HTML, CSS, JavaScript, and PHP. This holistic understanding enables me to approach web development projects with confidence and creativity, ensuring a well-rounded and effective implementation of modern web technologies.</p>
                </div>
                <div class="box-footer text-center">
                    <!-- Content for Box 2 footer -->
                    <button class="button2 btn3" data-toggle="modal" data-target="#box2Modal" aria-label="Read more about Web Development Skill">Read More</button>
                </div>
            </div>
        </div>

         <!-- Box Modal 2 -->
         <div class="modal fade" id="box2Modal" tabindex="-1" role="dialog" aria-labelledby="box2ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="box2ModalLabel">Web Development Projects</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Throughout my academic journey, I have dedicated myself to mastering the fundamental languages that form the backbone of web development. HTML has been a cornerstone, providing me with a solid foundation in creating the structural framework of web pages. My comprehensive understanding of HTML concepts has been honed through focused study and practical application.</p>
                                <p>In parallel, CSS has been a key focus, enabling me to enhance the visual appeal and layout of websites. I have delved deep into CSS principles, employing my knowledge to style web elements and create aesthetically pleasing user interfaces.</p>
                                <p>Javascript, as a dynamic scripting language, has played a pivotal role in my skill set. I've diligently studied its intricacies, gaining proficiency in creating interactive and responsive web pages. My efforts in JavaScript have further enriched my ability to bring life to static websites.</p>
                                <p>Expanding my repertoire, PHP has been a central aspect of my studies. I've acquired a profound understanding of server-side scripting and dynamic web development using PHP. This knowledge has empowered me to create robust and feature-rich web applications, contributing to the overall versatility of my skill set in web development.</p>
                            </div>
                        </div>
                    </div>
                </div>


        <!-- Box 3 -->
        <div class="col-md-4 mb-4">
            <div class="box p-5">
                <div class="box-header text-center">
                    <!-- Content for Box 3 header -->
                </div>
                <div class="box-body">
                    <h5 class="box-title">Web Development Certficate</h5>
                    <p class="box-text">
                This Certificate in Web Development program imparts essential theoretical knowledge and ensures mastery through immersive hands-on projects, empowering participants with the versatile skill set crucial for success in dynamic roles such as web development, UI/UX design, and digital content creation.</p>
                </div>
                <div class="box-footer text-center">
                    <!-- Content for Box 3 footer -->
                    <button class="button2 btn3" data-toggle="modal" data-target="#box3Modal" aria-label="Read more about Web Development Skill">Read More</button>
                </div>
            </div>
        </div>
    </div>

     <!-- Box Modal 2 -->
     <div class="modal fade" id="box3Modal" tabindex="-1" role="dialog" aria-labelledby="box3ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="box3ModalLabel">Web Development Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This certification demonstrates my expertise in developing websites that dynamically adjust to different devices and screen sizes. Throughout the course, you've gained valuable skills in HTML, CSS, and other pertinent technologies, empowering you to create visually appealing and user-friendly websites. This accomplishment underscores my commitment to staying abreast of industry standards and my dedication to delivering optimal user experiences in the dynamic field of web development. Great job!</p>
                <!-- Add your image here -->
                <img src="Assets/certificate.png" alt="Certificate Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>


</div>


  <div style="border-radius: none;" class="jumbotron2">
        <div class="description1">
            <h1 class="About-Me1">Let Me Get You A Beutiful Website</h1>
            <p class="box-text">For More HTML, CSS and Coding Tutorial. Please click on the</p>
            <p class="box-text">link below to subscribe my Social Media</p>
            <a href="contact.php" class="button2 btn3">Lets Talk</a>
        </div>
    </div>

<?php

include("footer.php")

?>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>

