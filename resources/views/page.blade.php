<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saphal Library Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        .navbar {
            background-color: #000;
        }

        .navbar-brand, .nav-link {
            color: #00ffff !important;
        }

        .jumbotron {
            background-color: #000;
            border: 2px solid #00ffff;
            padding: 2rem;
            margin-top: 2rem;
            border-radius: 10px;
        }

        .jumbotron h1 {
            color: #00ffff;
        }

        .jumbotron p {
            color: #fff;
        }

        .btn-aqua {
            background-color: #00ffff;
            color: #000;
            border: none;
        }

        .btn-aqua:hover {
            background-color: #008b8b;
            color: #fff;
        }

        .card {
            background-color: #1a1a1a;
            border: none;
            border-radius: 10px;
        }

        .card h5, .card p {
            color: #00ffff;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            margin-top: 2rem;
        }

        .login-btn {
            color: #000;
            background-color: #00ffff;
            border-radius: 25px;
            padding: 0.375rem 1rem;
        }

        .login-btn:hover {
            background-color: #008b8b;
            color: #fff;
        }

        .developer-info img {
            border-radius: 10px;
            width: 100%;
            height: auto;
            max-width: 350px;
        }

        .contact-info h4, .contact-info p {
            color: #00ffff;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Saphal Library System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn login-btn" href="{{ route('home')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Welcome to Saphal Library Management System</h1>
            <p>We offer comprehensive library management solutions for schools, colleges, and shops.</p>
            <a href="#" class="btn btn-aqua btn-lg">Get Started</a>
        </div>

        <!-- Features Section -->
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Search Books</h5>
                        <p class="card-text">Find books by title, author, or ISBN.</p>
                        <a href="#" class="btn btn-aqua">Search</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Members</h5>
                        <p class="card-text">Add, edit, or remove library members.</p>
                        <a href="#" class="btn btn-aqua">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Issue/Return Books</h5>
                        <p class="card-text">Handle book borrowing and returns.</p>
                        <a href="#" class="btn btn-aqua">Issue/Return</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Developer Info Section -->
        <div class="row developer-info text-center mt-5">
        <div class="col-md-4">
            <img src="{{ asset('images/developer.jpg') }}" alt="Developer Image">
        </div>
        <div class="col-md-8 text-left">
            <h3 class="mt-3">Niraj Kumar Singh</h3>
            <p>
                My name is Niraj Kumar Singh, and I am a professional web developer with a strong passion for building innovative and efficient web solutions. With extensive experience in front-end and back-end technologies, I specialize in HTML, CSS, JavaScript, PHP, Python, and the Laravel framework. I have a proven track record of developing user-centric, scalable, and responsive web applications that meet the needs of modern businesses.
            </p>
            <p>
                Currently, I am pursuing my studies at Birgunj Institute of Technology, where I continue to hone my skills and stay updated with the latest industry trends. In addition to my academic pursuits, I am the founder of Saphal Pvt. Ltd., a company dedicated to providing top-notch software solutions. My journey in web development has been driven by a commitment to excellence, and I strive to deliver projects that not only meet but exceed client expectations.
            </p>
            <p>
                My goal is to leverage my expertise to create impactful digital experiences that drive growth and innovation for businesses worldwide.
            </p>
        </div>
    </div>


        <!-- Contact Us Section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <h4>Contact Us</h4>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-aqua">Submit</button>
                </form>
            </div>
            <div class="col-md-6 contact-info">
                <h4>Contact Information</h4>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Email:</strong> info@saphallibrary.com</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Saphal Library Management System. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
