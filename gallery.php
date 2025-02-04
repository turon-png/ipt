<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
    
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #A59D84;
            margin: 0;
            padding: 0;
            color: #000000;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1,
        h2 {
            font-style: italic;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            font-size: 3.5rem;
            margin: 20px 0;
            color: #2c3e50;
        }

        h2 {
            font-size: 3.5rem;
            margin-top: 30px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 10px;
        }

        p {
            font-size: 1.5rem;
            line-height: 1.7;
            margin-bottom: 20px;
            text-align: justify;
            color: #555;
        }

        h1 {
            text-align: center;
            font-size: 3.5rem;
            margin: 20px 0;
            color: #fff;
            background: linear-gradient(90deg, #D4C8B8 0%, #A59D84 50%, #8D7F66 100%);
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            font-style: italic;
            font-size: 1.1rem;
            color: #fff;
            text-align: center;
            background: linear-gradient(90deg, #D4C8B8 0%, #A59D84 73%, #8D7F66 100%);
            padding: 20px 10px;
            margin-top: auto;
            border-top: 3px solid #f39c12;
        }


        footer p {
            margin: 0;
            font-size: 1rem;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .centered-content {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .image-gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            .container {
                width: 100%;
                margin-left: 0;
                padding-left: 0;
                padding-right: 20px;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                padding-top: 10px;
            }

            .sidebar a {
                font-size: 1rem;
                text-align: center;
            }
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            height: 100%;
            background-color: #2c3e50;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 1.2rem;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #34495e;
            color: #ecf0f1;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="index.php">Home</a>
        <a href="interest.php">Interest</a>
        <a href="gallery.php">Gallery</a>
    </div>

    <div class="container">
        <h1>My Gallery</h1>

        <div class="centered-content">
            <section>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="1n.jpg" alt="Image 1">
                        <p><center>me when i was a kid</center></p>
                    </div>
                    <div class="image-container">
                        <img src="2n.jpg" alt="Image 2">
                    </div>
                    <div class="image-container">
                        <img src="18n.jpg" alt="Image 3">
                    </div>
                    <div class="image-container">
                        <img src="19n.jpg" alt="Image 4">
                    </div>
                    <div class="image-container">
                        <img src="5n.jpg" alt="Image 5">
                    </div>
                    <div class="image-container">
                        <img src="6n.jpg" alt="Image 6">
                    </div>
                    <div class="image-container">
                        <img src="3n.jpg" alt="Image 7">
                    </div>
                    <div class="image-container">
                        <img src="4n.jpg" alt="Image 8">
                    </div>
                    <div class="image-container">
                        <img src="20n.jpg" alt="Image 9">
                    </div>
                    <div class="image-container">
                        <img src="10n.jpg" alt="Image 10">
                    </div>
                    <div class="image-container">
                        <img src="8n.jpg" alt="Image 11">
                    </div>
                    <div class="image-container">
                        <img src="21n.jpg" alt="Image 12">
                    </div>
                    <div class="image-container">
                        <img src="13n.jpg" alt="Image 13">
                    </div>
                    <div class="image-container">
                        <img src="14n.jpg" alt="Image 14">
                    </div>
                    <div class="image-container">
                        <img src="15n.jpg" alt="Image 15">
                    </div>
                    <div class="image-container">
                        <img src="16n.jpg" alt="Image 16">
                    </div>
                    <div class="image-container">
                        <img src="17n.jpg" alt="Image 17">
                    </div>
                    <div class="image-container">
                        <img src="22n.jpg" alt="Image 18">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer>
        <p>That's all for this activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me. | That's all for this activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me.</p>
    </footer>

</body>

</html>