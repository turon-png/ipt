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

        .centered-content {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 220px;
            height: 100%;
            background-color: #2c3e50;
            padding-top: 20px;
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.2);
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
        <h1>About Me</h1>

        <div class="centered-content">
            <section>
                <p>
                    My name is Carizza Jhayne Bustamante, and I am 20 years old. I live in Bacnotan, La Union,
                    Philippines,
                    and I am currently a second-year college student. Let me take you through the first five years of my
                    life. I was born on June 13, 2004, in Montalban, Rodriguez, Rizal. For the first three years of my
                    life,
                    I lived with my grandmother (Lola), and I began my studies in Pasay City, Philippines. I later
                    transferred and completed Grades 1 and 2 at Tagumpay National High School in Rizal, as I was living
                    with
                    my mother at the time. After finishing Grades 1 and 2, I moved back to Pasay City to live with my
                    grandparents and completed my elementary and junior high school years (Grades 7 and 8) at Kalayaan
                    National High School.
                    In 2018, we were preparing to move to La Union, so I transferred back to Tagumpay National High
                    School.
                    I completed my remaining junior high school years (Grades 9 and 10) in Montalban. Then, when I
                    entered
                    Senior High School, I moved to La Union, where I have been living with my grandparents for 15 years
                    now
                    (YES, I LOVE MY GRANDPARENTS VERY MUCH). Currently, I am a second-year college student at Lorma
                    Colleges. <br>

                    To this day, we still live in La Union, a place that holds so many fond memories for me. My favorite
                    spot here is San Juan, as I find the sea incredibly calming and peaceful. The sound of the waves
                    crashing on the shore always helps clear my mind. Whenever my friends and I go out, we often pass
                    through San Juan to unwind, relax, and talk about life. It’s become our go-to place where we can
                    reflect, share our thoughts, and enjoy the beauty of the beach. Every visit feels like a much-needed
                    escape, a moment to recharge and appreciate the simple joys of life.
                    I also found some amazing new friends at Lorma. Kath, Mary, Ate Erika, and Grezamel. They’ve truly
                    made
                    my college years so much more fun and bearable. We always have a great time together, sharing
                    endless
                    laughs, joking around about our other classmates, and sometimes even poking fun at the little things
                    that annoy us. It’s so refreshing to be surrounded by people who not only understand my sense of
                    humor
                    but also share the same pet peeves, making our bond even stronger. Their friendship has really been
                    a
                    source of comfort and joy throughout my college journey. <br>

                    When I don’t have anything to do, I usually spend my time cleaning my room. I also love to cook,
                    especially making snacks, and I take great pleasure in preparing meals for my family. There's
                    something
                    special about seeing them enjoy the food I make. In addition, I have two playful dogs, Arya and
                    Woody,
                    who bring so much joy into our life. I love spending time with them, whether it's playing, going for
                    walks, or just cuddling. They always know how to brighten my day and keep me company when I need it
                    most.
                    <br>
                    My favorite food is chicken and waffles because it was my comfort food when I was a child. I play
                    sports
                    like basketball, table tennis, and badminton, but my favorite is lawn tennis. I remember during my
                    junior high and elementary school days, I used to represent my school in various competitions. I
                    also
                    represented my region as part of the NCR team. To this day, I still play lawn tennis, but I am no
                    longer
                    competing for my school. Sometimes, I join tournaments in places like Ilocos, Baguio, and Nueva
                    Ecija. I
                    truly enjoy playing lawn tennis because I know it is something I love.
                    I also have five siblings, and I am the second child. I have two nephews and one niece. When I was
                    in
                    Grade 1 and Grade 2 in Montalban, I attended the same school as my older brother (Kuya), and I
                    remember
                    that we loved to walk home together after school. Today, my Kuya and my brother are living in
                    Montalban,
                    while my sister and I are living here in La Union.

                    <br>

                    Now, let me tell you a bit about my love life. I have a wonderful girlfriend who lives in Baguio,
                    and
                    she’s a third-year nursing student. When we are not together I am chatting with my
                    wonderful girlfriend. Our conversations are always so enjoyable and meaningful. Whenever I have some
                    free time, I visit her in Baguio, and when
                    she’s able to, she comes to La Union to spend time with me. One of our favorite things to do
                    together is
                    explore new places and travel, creating memories along the way.

                    <br>

                    My goal after I graduate is to pursue a profession that I am truly passionate about, one that aligns
                    with my skills and interests. I want to build a career that not only brings me personal fulfillment
                    but
                    also allows me to grow professionally. At the same time, I plan to save up enough money to
                    eventually
                    open my own business. This will give me the opportunity to invest in something I’m passionate about
                    and
                    secure my financial future. By doing so, I hope to ensure that my money is not just being spent, but
                    is
                    also working for me to generate additional income. My dream is to create a stable and successful
                    life,
                    where I can both enjoy my work and achieve financial independence.
                    That's all for this activity! I hope you enjoyed reading about my experiences and getting to know
                    more
                    about me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me.
                </p>
            </section>
        </div>
    </div>

    <footer>
        <p>That's all for this activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me. | That's all for this
            activity! I hope you enjoyed reading about my experiences and getting to know more about
            me. It’s been a pleasure sharing a glimpse into my life. I hope you don't judge me.</p>
    </footer>

</body>

</html>