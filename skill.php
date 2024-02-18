<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="modal.css">
    <title>Document</title>
</head>
<style>
    .cards{
    width: 15rem;
}
.card{
    background: #404040;
}

.img-fluid{
    border: none;
    box-shadow: none;
    width: 20vh;
}


</style>
<body>


<body style="background-color: transparent;">
   <?php

include("header.php")
?>

    <div class="container-fluid mt-4">

<!-- Jumbotron -->
<div class="jumbotron">
  <h1 class="display-4 text-center">About My Skill</h1>
  <p class="lead text-center">This is my skill I learn to my college days</p>
  <p class="text-center">This is language uses to create website and sometimes we use asp.net and python to my capstone or thesis.</p>
  <div class="container">
  <div class="row">
    
    <div class="col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top img-fluid mx-auto" src="Assets/html1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="text-light">HTML Basics</h5>
          <p class="card-text text-light">During my studies in HTML, I've gained valuable insights and knowledge. HTML has been a focal point of my learning, and I've acquired a deeper understanding of its concepts. Through my dedicated efforts, I've been able to grasp various aspects of HTML, enhancing my skills in web development.</p>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" data-toggle="modal" data-target="#htmlModal">Click me</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top img-fluid mx-auto" src="Assets/css1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="text-light">CSS Basic</h5>
          <p class="card-text text-light">During my studies in CSS, I've gained valuable insights and knowledge. CSS has been a focal point of my learning, and I've acquired a deeper understanding of its concepts. Through my dedicated efforts, I've been able to grasp various aspects of CSS, enhancing my skills in web development.</p>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" data-toggle="modal" data-target="#cssModal">Click me</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top img-fluid mx-auto" src="Assets/JS1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="text-light">JavaScript Basics</h5>
          <p class="card-text text-light">During my studies in Javascript, I've gained valuable insights and knowledge. Javascript has been a focal point of my learning, and I've acquired a deeper understanding of its concepts. Through my dedicated efforts, I've been able to grasp various aspects of JavaScript, enhancing my skills in web development.</p>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" data-toggle="modal" data-target="#jsModal">Click me</button>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top img-fluid mx-auto" src="Assets/PHP1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="text-light">PHP Basics</h5>
          <p class="card-text text-light">During my studies in PHP, I've gained valuable insights and knowledge. PHP has been a focal point of my learning, and I've acquired a deeper understanding of its concepts. Through my dedicated efforts, I've been able to grasp various aspects of PHP, enhancing my skills in web development.</p>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" data-toggle="modal" data-target="#phpModal">Click me</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modals -->
<div class="modal fade" id="htmlModal" tabindex="-1" role="dialog" aria-labelledby="htmlModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="htmlModalLabel">HTML Basics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5>Document Structure:</h5>
    <ul>
        <li><code>&lt;html&gt;</code>: Represents the root of an HTML document.</li>
        <li><code>&lt;head&gt;</code>: Contains meta-information about the HTML document, such as title and links to stylesheets.</li>
        <li><code>&lt;title&gt;</code>: Sets the title of the HTML document.</li>
        <li><code>&lt;body&gt;</code>: Contains the content of the HTML document.</li>
    </ul>

    <h5>Text Formatting:</h5>
    <ul>
        <li>Headings: <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, ..., <code>&lt;h6&gt;</code></li>
        <li>Paragraphs: <code>&lt;p&gt;</code></li>
        <li>Bold: <code>&lt;strong&gt;</code> or <code>&lt;b&gt;</code></li>
        <li>Italics: <code>&lt;em&gt;</code> or <code>&lt;i&gt;</code></li>
        <li>Line break: <code>&lt;br&gt;</code></li>
    </ul>

    <h5>Lists:</h5>
    <ul>
        <li>Unordered list: <code>&lt;ul&gt;</code> and <code>&lt;li&gt;</code></li>
        <li>Ordered list: <code>&lt;ol&gt;</code> and <code>&lt;li&gt;</code></li>
        <li>Definition list: <code>&lt;dl&gt;</code>, <code>&lt;dt&gt;</code>, and <code>&lt;dd&gt;</code></li>
    </ul>

    <h5>Links and Navigation:</h5>
    <ul>
        <li>Hyperlinks: <code>&lt;a href="URL"&gt;Link Text&lt;/a&gt;</code></li>
        <li>Internal links: <code>&lt;a href="#sectionID"&gt;Link to Section&lt;/a&gt;</code></li>
        <li>Navigation: <code>&lt;nav&gt;</code> and <code>&lt;ul&gt;</code> for navigation menus.</li>
    </ul>

    <h5>Images:</h5>
    <p><code>&lt;img src="imageURL" alt="Description"&gt;</code></p>

    <h5>Forms:</h5>
    <ul>
        <li><code>&lt;form&gt;</code>: Creates a form.</li>
        <li>Input elements: <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code></li>
        <li>Form controls: text fields, radio buttons, checkboxes, etc.</li>
    </ul>

    <h5>Tables:</h5>
    <ul>
        <li><code>&lt;table&gt;</code>: Creates a table.</li>
        <li>Table rows: <code>&lt;tr&gt;</code></li>
        <li>Table headers: <code>&lt;th&gt;</code></li>
        <li>Table data cells: <code>&lt;td&gt;</code></li>
    </ul>

    <h5>Semantic HTML:</h5>
    <ul>
        <li><code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;aside&gt;</code>, <code>&lt;main&gt;</code>: Semantic elements for structuring content.</li>
    </ul>

    <h5>Comments:</h5>
    <p><code>&lt;!-- This is a comment --&gt;</code></p>

    <h5>Attributes:</h5>
    <p>HTML elements can have attributes that provide additional information. For example, the class and id attributes for styling and JavaScript.</p>

    <h5>HTML5 Features:</h5>
    <ul>
        <li><code>&lt;video&gt;</code>, <code>&lt;audio&gt;</code>: Embedding multimedia.</li>
        <li><code>&lt;canvas&gt;</code>: Drawing graphics using JavaScript.</li>
        <li><code>&lt;svg&gt;</code>: Scalable Vector Graphics.</li>
    </ul>

    <h5>Validation:</h5>
    <p>Use online validators to ensure your HTML code follows the standards and is error-free.</p>

    <p>Remember that HTML is often used in conjunction with CSS (Cascading Style Sheets) for styling and JavaScript for dynamic behavior. As you progress in web development, you'll likely learn about these technologies as well.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cssModal" tabindex="-1" role="dialog" aria-labelledby="cssModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cssModalLabel">CSS Basics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5>CSS, or Cascading Style Sheets</h5>


<h5>Selectors:</h5>
<p>
  <strong>Tag selectors:</strong> Select elements based on their HTML tags (e.g., p for paragraphs).<br>
  <strong>Class selectors:</strong> Select elements with a specific class (e.g., .my-class).<br>
  <strong>ID selectors:</strong> Select a unique element with a specific ID (e.g., #my-id).
</p>

<h5>Box Model:</h5>
<p>
  <strong>Content:</strong> The actual content of the box.<br>
  <strong>Padding:</strong> Space between the content and the border.<br>
  <strong>Border:</strong> The border surrounding the padding.<br>
  <strong>Margin:</strong> Space outside the border, creating space between elements.
</p>

<h5>Layout:</h5>
<p>
  <strong>Positioning:</strong> relative, absolute, fixed, static.<br>
  <strong>Display property:</strong> block, inline, inline-block, flex, grid.<br>
  <strong>Float property:</strong> Floating elements to the left or right.
</p>

<h5>Typography:</h5>
<p>
  <strong>Font properties:</strong> font-family, font-size, font-weight, font-style.<br>
  <strong>Text properties:</strong> color, text-align, line-height, text-decoration.
</p>

<h5>Colors and Backgrounds:</h5>
<p>
  <strong>Color properties:</strong> color, background-color.<br>
  <strong>Background properties:</strong> background-image, background-position, background-repeat.
</p>

<h5>Flexbox and Grid:</h5>
<p>
  <strong>Flexbox:</strong> A one-dimensional layout method for laying out items in rows or columns.<br>
  <strong>Grid:</strong> A two-dimensional layout system for creating grid-based layouts.
</p>

<h5>Transitions and Animations:</h5>
<p>
  <strong>Transition properties:</strong> transition-property, transition-duration, transition-timing-function.<br>
  <strong>Animation properties:</strong> animation-name, animation-duration, animation-timing-function.
</p>

<h5>Responsive Design:</h5>
<p>
  <strong>Media queries:</strong> Adjust styles based on the characteristics of the device.<br>
  <strong>Viewport units:</strong> vw, vh, vmin, vmax.
</p>

<h5>Transforms and Transforms:</h5>
<p>
  <strong>Transform:</strong> Rotate, scale, skew, or translate elements.<br>
  <strong>Filter:</strong> Apply visual effects like blur or grayscale.
</p>

<h5>Selectors and Combinators:</h5>
<p>
  <strong>Child (>), descendant ( ), adjacent sibling (+), general sibling (~) selectors.</strong>
</p>

<h5>CSS Grid:</h5>
<p>
  <strong>Grid container and grid items.</strong>
</p>

<h5>Pseudo-classes and Pseudo-elements:</h5>
<p>
  <strong>:hover, :active, :nth-child(), ::before, ::after.</strong>
</p>

<p>Remember that CSS is often used in combination with HTML and JavaScript to create fully functional and aesthetically pleasing web applications. Practice and experimentation are key to mastering CSS, so don't hesitate to create small projects to apply what you've learned.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="jsModal" tabindex="-1" role="dialog" aria-labelledby="jsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jsModalLabel">JavaScript Basics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <h5>Variables and Data Types:</h5>
      <p>
        Declaring variables using var, let, and const.<br>
        Data types: string, number, boolean, null, undefined, object, and symbol.
      </p>

      <h5>Operators:</h5>
      <p>
        Arithmetic operators (+, -, *, /, %)<br>
        Comparison operators (==, ===, !=, !==, >, <, >=, <=)<br>
        Logical operators (&&, ||, !)<br>
        Assignment operators (=, +=, -=, *=, /=)
      </p>

      <h5>Control Flow:</h5>
      <p>
        Conditional statements: if, else if, else<br>
        Switch statement<br>
        Looping: for, while, do-while
      </p>

      <h5>Functions:</h5>
      <p>
        Declaring and calling functions<br>
        Function parameters and return values<br>
        Anonymous functions and arrow functions
      </p>

      <h5>Arrays:</h5>
      <p>
        Creating and manipulating arrays<br>
        Array methods (push, pop, shift, unshift, splice, slice, etc.)
      </p>

      <h5>Objects:</h5>
      <p>
        Creating and working with objects<br>
        Object properties and methods<br>
        JSON (JavaScript Object Notation)
      </p>

      <h5>DOM Manipulation:</h5>
      <p>
        Accessing and modifying HTML elements using the Document Object Model (DOM)<br>
        Event handling and listeners
      </p>

      <h5>Asynchronous JavaScript:</h5>
      <p>
        Callback functions<br>
        Promises<br>
        Async/await for handling asynchronous operations
      </p>

      <h5>AJAX (Asynchronous JavaScript and XML):</h5>
      <p>
        Making asynchronous requests to a server<br>
        Fetch API for modern AJAX operations
      </p>

      <h5>Error Handling:</h5>
      <p>
        Try, catch, and throw statements for handling errors
      </p>

      <h5>Closures and Scope:</h5>
      <p>
        Understanding lexical scope and closures<br>
        Global scope, function scope, and block scope
      </p>

      <h5>ES6+ Features:</h5>
      <p>
        Destructuring assignment<br>
        Template literals<br>
        Arrow functions<br>
        Classes<br>
        Modules
      </p>

      <h5>Event Handling:</h5>
      <p>
        Responding to user actions with event listeners<br>
        Bubbling and capturing phases in event propagation
      </p>

      <h5>Regular Expressions:</h5>
      <p>
        Creating and using regular expressions for pattern matching
      </p>

      <h5>Web APIs:</h5>
      <p>
        Utilizing browser APIs, such as the Geolocation API, localStorage, sessionStorage, etc.
      </p>

      <p>Keep in mind that JavaScript is a dynamic language, and there are continually evolving features and best practices. Regularly updating your knowledge and staying informed about the latest ECMAScript specifications will contribute to your proficiency in JavaScript development.</p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="phpModal" tabindex="-1" role="dialog" aria-labelledby="phpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="phpModalLabel">PHP Basics</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
    During my studies in PHP, I've gained valuable insights and knowledge. PHP has been a focal point of my learning, and I've acquired a deeper understanding of its concepts. Through my dedicated efforts, I've been able to grasp various aspects of PHP, enhancing my skills in web development.</p>
    <h5>Syntax and Variables</h5>
    <p>
      Basic syntax rules<br>
      Declaring variables and data types
    </p>

    <h5>Control Structures:</h5>
    <p>
      Conditional statements (if, else, elseif)<br>
      Switch statement<br>
      Looping (for, while, do-while, foreach)
    </p>

    <h5>Functions:</h5>
    <p>
      Creating and using functions<br>
      Parameters and return values<br>
      Built-in functions
    </p>

    <h5>Arrays:</h5>
    <p>
      Creating and manipulating arrays<br>
      Array functions (array_push, array_pop, array_merge, etc.)
    </p>

    <h5>Strings:</h5>
    <p>
      String manipulation<br>
      Concatenation and interpolation<br>
      String functions (strlen, substr, strpos, etc.)
    </p>

    <h5>Forms and User Input:</h5>
    <p>
      Handling HTML forms<br>
      Retrieving user input using $_GET and $_POST<br>
      Form validation and sanitation
    </p>

    <h5>Sessions and Cookies:</h5>
    <p>
      Managing user sessions<br>
      Setting and retrieving cookies
    </p>

    <h5>File Handling:</h5>
    <p>
      Reading from and writing to files<br>
      File upload handling
    </p>

    <h5>Database Connectivity (MySQL, or other databases):</h5>
    <p>
      Connecting to a database<br>
      Executing SQL queries<br>
      Fetching and displaying data
    </p>

    <h5>Object-Oriented Programming (OOP):</h5>
    <p>
      Classes and objects<br>
      Inheritance, encapsulation, polymorphism<br>
      Constructors and destructors
    </p>

    <h5>Error Handling:</h5>
    <p>
      Handling errors and exceptions<br>
      Logging and debugging
    </p>

    <h5>Security:</h5>
    <p>
      SQL injection prevention<br>
      Cross-site scripting (XSS) prevention<br>
      Cross-site request forgery (CSRF) protection
    </p>

    <h5>Sessions and Authentication:</h5>
    <p>
      Implementing user authentication systems<br>
      Secure password hashing
    </p>

    <h5>Regular Expressions:</h5>
    <p>
      Using regular expressions for pattern matching
    </p>

    <h5>JSON and API Integration:</h5>
    <p>
      Working with JSON data<br>
      Consuming and producing API requests
    </p>

    <h5>Composer and Package Management:</h5>
    <p>
      Using Composer for package management<br>
      Autoloading classes
    </p>

    <h5>Working with Dates and Times:</h5>
    <p>
      Handling dates and times<br>
      Using the DateTime class
    </p>

    <h5>Web Security Best Practices:</h5>
    <p>
      Validating and sanitizing user input<br>
      Protecting against common vulnerabilities
    </p>

    <h5>Frameworks:</h5>
    <p>
      Exploring popular PHP frameworks CodeIgniter.
    </p>

    <p>Remember to stay updated with the latest PHP versions and best practices in the PHP community. The PHP language evolves, and staying current will help you write more secure and efficient code.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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