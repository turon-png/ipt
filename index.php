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

        .image-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
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
            background-color: #aab3bb;
            color: #ecf0f1;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="aboutme.php">About Me</a>
        <a href="interest.php">Interest</a>
        <a href="gallery.php">Gallery</a>
    </div>

    <div class="container">
        <h1>My Bio</h1>

        <section>
            <p>If you want to read more about my life, don’t hesitate to navigate on the sidebar! :p</p>
        </section>
    </div>

    <footer>
        <p>That's all for this activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me. | That's all for this activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me.</p>
    </footer>

</body>

</html>