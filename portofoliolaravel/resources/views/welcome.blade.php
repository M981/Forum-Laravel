<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammed Alfa Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav id="navbarscroll">
            <ul>
                <li class="navbar">
                    <a href="#home" class="header-link" id="home-link">Home</a>
                </li>
                <li class="navbar">
                    <a href="#text-box"class="header-link" id="over-mij-link">Over Mij</a>
                </li>
                <li class="navbar">
                    <a href="#cv" class="header-link">CV</a>
                </li>
                <li class="navbar">
                    <a href="#projecten" class="header-link">Projecten</a>
                </li>
                <li class="navbar">
                    <a href="#contact" class="header-link">Contact</a>
                </li>
                
                
            </ul>
        </nav>
    </header>
    <div class="container">
        <section id="home">
            <h1 id="welkom">Hallo, ik ben Mohammed.</h1>
            <h2 id="smallinfo">Ik ben een student die momenteel de Software Developer opleiding volgt op niveau 4.</h2>
            <a href="https://github.com/kiduswb" target="_blank">
                <img src="images/icon.png" class="icon">
            </a>
        </section>
    </div>
    <div class="text-box" id="text-box">
        <section>
            <p>
                <h1 class="kopjes">Over Mij</h1>
                <h2 class="koptekst">Ik ben 17 jaar oud en woon in Groningen. Momenteel ben ik student aan het Alfa-College, waar ik de opleiding Software Developer volg. Ik doe momenteel ervaring op met HTML, JavaScript en CSS. Ik heb ook al veel ervaring met LUA en MySQL, voornamelijk in het kader van FiveM Server Development</h2>
           </p>
           <div class="my-skills">
            <h2>My Skills</h2>
            <div class="skill-row">
                <div class="skill-item">
                    <p class="skills-p">HTML</p>
                    <div class="containerskills">
                        <div class="skills html">50%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <p class="skills-p">CSS</p>
                    <div class="containerskills">
                        <div class="skills css">50%</div>
                    </div>
                </div>
            </div>
            <div class="skill-row">
                <div class="skill-item">
                    <p class="skills-p">LUA</p>
                    <div class="containerskills">
                        <div class="skills lua">70%</div>
                    </div>
                </div>
                <div class="skill-item">
                    <p class="skills-p">MySQL</p>
                    <div class="containerskills">
                        <div class="skills mysql">60%</div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
    <div class="second-box" id="second-box">
        <section id="cv">
            <p>
                <h1 class="kopjes">Mijn CV</h1>
                <h1 class="subheader">Werk Ervaring</h1>
                <h2 id = "datumcv" class="subheader">2023 - Heden</h2>
                <h2 class="koptekstcv">M-Development</h2>
                <h2 id = "functie">Functie: Eigenaar</h2>

                <h1 class="subheader">Opleiding</h1>
                <h2 id = "datumcv" class="subheader">2023 - Heden</h2>
                <h2 class="koptekstcv">Alfa College</h2>
                <h2 id = "functie">Software Developer</h2>
           </p>
        </section>
    </div>
    <div class="third-box" id="third-box">
        <section id="projecten">
            <p>
                <h1 class="kopjes">Projecten</h1>
                <div class="slideshow-container">

                    <div class="mySlides">
                        <div>
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2F4liuOQwO3qbBMMgliKTegN%2FWireframe%3Ftype%3Ddesign%26mode%3Ddesign%26t%3DUpIXn8a8yw9GyjS2-1" allowfullscreen></iframe>
                        </div>
                        <h2 class="koptekstcv">Dit is een portofolio wireframe die ik heb gemaakt voor een school opdracht.</h2>
                        <div>
                            <a href="https://www.figma.com/file/4liuOQwO3qbBMMgliKTegN/Wireframe?type=design&mode=design&t=UpIXn8a8yw9GyjS2-1" class="projectlink-button" target="_blank">Ga naar project</a>
                        </div>
                    </div>
                    
                    <div class="mySlides">
                        <div>
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="images/mockup.png" allowfullscreen></iframe>
                        </div>
                        <h2 class="koptekstcv">Dit is een portofolio mockup die ik heb gemaakt voor een school opdracht.</h2>
                        <div>
                            <a href="https://www.figma.com/file/gMj4vCr9jutjG8wTTuWcM5/Mockup?type=design&mode=design&t=UpIXn8a8yw9GyjS2-1" class="projectlink-button" target="_blank">Ga naar project</a>
                        </div>
                    </div>
                    
                    <div class="mySlides">
                        <div>
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="images/prototype.png" allowfullscreen></iframe>
                        </div>
                        <h2 class="koptekstcv">Dit is een portofolio prototype die ik heb gemaakt voor een school opdracht.</h2>
                        <div>
                            <a href="https://www.figma.com/file/yUkq5Byfz7FhYXm4i1bTAo/Prototype?type=design&mode=design&t=UpIXn8a8yw9GyjS2-1" class="projectlink-button" target="_blank">Ga naar project</a>
                        </div>
                    </div>

                    <div class="mySlides">
                        <div>
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="images/irritantewebpagina.png" allowfullscreen></iframe>
                        </div>
                        <h2 class="koptekstcv">Een one-pager die ik heb nagemaakt voor een school opdracht, naast het nabouwen heb ik zelf met javascript functies toegevoegd om de site irritant te maken. De github repo is via de blauwe knop hieronder te vinden, en de site kan je bezoeken op: www.mhasicalfacollege.nl/irritantewebpagina</h2>
                        <div>
                            <a href="https://github.com/M981/irritantewebpagina" class="projectlink-button" target="_blank">Ga naar project</a>
                        </div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                    
                    </div>
                    
                    <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                </div>
           </p>
        </section>
    </div>
    <div class="contact-box" id="contact-box">
        <section id="contact">
            <p>
                <h1 class="kopjes">Contact</h1>
                <form id="myForm" action="https://formspree.io/f/mwkdgkkd" method="POST" enctype="multipart/form-data">
                    <input type="text" id="name" name="name" placeholder="Voer je naam in" required>
                    <input type="email" id="email" name="_replyto" placeholder="Voer je e-mailadres in" required>
                    <input type="tel" id="telefoonnummer" name="telefoonnummer" placeholder="Voer je telefoonnummer in" required>
                    <textarea id="bericht" name="message" rows="4" placeholder="Voer je bericht in" required></textarea>
                    <button type="submit">Verzend</button>
                </form> 
            </p>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function(){
        $("#myForm").submit(function(event){
            event.preventDefault(); 
            var form = this; 
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
                error: function(err){
                    console.log(err);
                    Swal.fire({
                        title: "Uw bericht is verzonden!",
                        text: "U krijgt zo snel mogelijk reactie per e-mail.",
                        icon: "success"
                    });
                    form.reset();
                }
            });
        });
    });
    </script>
    <script src="main.js"></script>
</body>
</html>
