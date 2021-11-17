<?php
require 'header.php';
$id=$_GET['id']; //get the id from home.php
$video=array (  '<iframe width="420" height="345" src="https://www.youtube.com/embed/J365hQpaWRw"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/gmRKv7n2If8"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/s6oLsCHgSwg"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/DbYu4-XYNss"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/aQO16k5Vdow"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/2CFeVRhzi_g"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/Pa_PRDVpjSk"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/tI1JGPhYBS8"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/u8ZsUivELbs"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/hRuUB6RKExQ"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/tgpJmDGy85c"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/NiFuJV2GLkY"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/CLdhN4oMxCQ"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/vM-Bja2Gy04"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/odM92ap8_c0"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/2fuowcxdrYc"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/h9Q4zZS2v1k"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/U8M_1eyrBtQ"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/PHqyFhrb3uU"></iframe>',
                '<iframe width="420" height="345" src="https://www.youtube.com/embed/mYfJxlgR2jw"></iframe>',
            );
//switch the id
switch ($id){
    case 1:
        print "<center>
                <h1>The Witcher Nightmare of the wolf</h1>
                <h3>Synopsis</h3>

                $video[0] <br/>
                <p>The Witcher: Nightmare of the Wolf is an adult animated dark fantasy film for Netflix, produced by Lauren Schmidt Hissrich, and starring Theo James, Lara Pulver, <br/>
                Graham McTavish, and Mary McDonnell. The film serves as a spin-off of the Netflix series The Witcher.It focuses on the origin story of Geralt's mentor and <br/>
                fellow witcher Vesemir.The film premiered on August 23, 2021.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Voice Cast</h3>  
                <p>Theo James as Vesemir<br/>
                David Errigo Jr. as Young Vesemir & Young Remus <br/>
                Mary McDonnell as Lady Illyana Zerbst</p>
                </center>";
        print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 2:
        print "<center>
                <h1>Disney's Cruella</h1>
                $video[1] <br/>
                                    <p>Cruella is a 2021 American crime comedy film based on the character Cruella de Vil from Dodie Smith's 1956 <br/>
                novel The Hundred and One Dalmatians. The film is directed by Craig Gillespie with a screenplay by Dana Fox <br/>
and Tony McNamara, from a story by Aline Brosh McKenna, Kelly Marcel, and Steve Zissis.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Emma Stone as Estella / Cruella<br/>
                Joel Fry as Jasper <br/>
                Emma Thompson as The Baroness</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
            break;
        
    case 3:
                print "<center>
                <h1>Oxygen</h1>
                $video[2] <br/>
                                <p>Oxygen (French: Oxygène) is a 2021 French-language science fiction thriller film, directed and produced by <br/>
                Alexandre Aja, from a screenplay by Christie LeBlanc. As part of an American-French co-production, it stars <br/>
                Mélanie Laurent, Mathieu Amalric and Malik Zidi. The film was released by Netflix on May 12, 2021.</p>    
                <h3>Release Date</h3>  <p>11 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Mélanie Laurent as Elizabeth Hansen<br/>
                Mathieu Amalric as M.I.L.O. <br/>
                Malik Zidi as Léo Ferguson</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 4:
                print "<center>
                <h1>The 8th Night</h1>
                $video[3] <br/>
                    <p>The 8th Night (Korean: 제8일의 밤; RR: Je8ileui Bam) is a 2021 South Korean mystery-thriller film directed by <br/>
                    Kim Tae-hyoung for Gom Pictures. Starring Lee Sung-min, Park Hae-joon, Kim Yoo-jung, and Nam Da-reum,<br/>
                    the film depicts the struggle of exorcist to stop the resurrection of the two mysterious beings that tormented humans and were locked up in 2 caskets for 2500 years.</p>
                <h3>Release Date</h3>  <p>1 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Lee Sung-min as Park Jin-soo, the guardian / Cruella<br/>
                Park Hae-joon as Kim Ho-tae, homicide detective<br/>
                Kim Yoo-jung as Ae-ran, a girl with a secret</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 5:
                print "<center>
                <h1>Nightbooks</h1>
                $video[4] <br/>
                    <p>Nightbooks is a 2021 American dark fantasy film directed by David Yarovesky and written by Mikki Daughtry and <br/>
                    Tobias Iaconis. The film stars Winslow Fegley, Lidya Jewett, and Krysten Ritter. Based on the 2018 horror-fantasy<br/>
                    children's book of the same name by J. A. White, it was released September 15, 2021, on Netflix.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Winslow Fegley as Alex, a young boy with a penchant for scary stories who plots to escape the clutches of an evil witch.<br/>
                Lidya Jewett as Yazmin, a girl who was trapped and lured in by a witch years ago and is forced to be her housemaid until Alex enters her life. <br/>
                Krysten Ritter as Natacha, a deadly witch who kidnaps children and is the captor of Alex and Yazmin.</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 6:
                           print "<center>
                <h1>Sweet & Sour</h1>
                $video[5] <br/>
                    <p>Sweet & Sour (Korean: 새콤달콤; RR: Saekom-Dalkom) is a 2021 South Korean romantic comedy film, based on <br/>
                    the novel Initiation Love by Kurumi Inui. The film directed by Lee Gye-byeok and starring Jang Ki-yong, Chae<br/>
                    Soo-bin and Krystal Jung, is a story of love at first sight couple who drift apart due to job assignment.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Jang Ki-yong as Jang-hyuk<br/>
                Chae Soo-bin as Da-eun<br/>
                Krystal Jung as Han Bo-yeong</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>'; 
        break;
    case 7:
                        print "<center>
                <h1>My Little Pony: A New Generation</h1>
                $video[6] <br/>
                    <p>My Little Pony: A New Generation is a 2021 computer-animated fantasy comedy film directed by Robert Cullen <br/>
                    and José Ucha, co-directed by Mark Fattibene with Cecil Kramer and Peter Lewis as producers, and written by<br/>
                    Gillian Berrow and Tim Sullivan from a story by Cullen, Ucha, and Sullivan.</p>
                <h3>Release Date</h3>  <p>15 Sept 2021</p>
                <h3>Voice Cast</h3>  
                <p>Vanessa Hudgens as Sunny Starscout<br/>
                Kimiko Glenn as Izzy Moonbow <br/>
                James Marsden as Hitch Trailblazer</p>
                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 8:
                        print "<center>
                <h1>Army of the Dead</h1>
                $video[7] <br/>
                    <p>Army of the Dead is a 2021 American zombie heist film directed by Zack Snyder from a screenplay he co-wrote<br/>
                    with Shay Hatten and Joby Harold, based on a story he also created.<br/>
                    It follows a group of mercenaries who plan a Las Vegas casino heist amid a zombie apocalypse.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Dave Bautista as Scott Ward<br/>
Ella Purnell as Kate Ward<br/>
Omari Hardwick as Vanderohe</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 9:
                                    print "<center>
                <h1>Outside the Wire</h1>
                $video[8] <br/>
                    <p>Outside the Wire is a 2021 American science fiction action film directed by Mikael Håfström. It stars Anthony<br/>
                    Mackie (who also produced) as an android officer who works with a drone pilot (Damson Idris) to stop a global<br/>
                    catastrophe. Emily Beecham, Michael Kelly, and Pilou Asbæk also star. </p>
                <h3>Release Date</h3>  <p>15 Jan 2021</p>
                <h3>Cast</h3>  
                <p>Anthony Mackie as Captain Leo, an android military officer<br/>
Damson Idris as Lt. Thomas Harp, a drone pilot<br/>
Emily Beecham as Sofiya</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 10:
                                print "<center>
                <h1>SAS: Red Notice</h1>
                $video[9] <br/>
                    <p>SAS: Red Notice (also known as SAS: Rise of the Black Swan[2]) is a 2021 British action thriller film directed by<br/>
                    Magnus Martens, based on the novel of the same name by Andy McNab and starring Sam Heughan, Ruby Rose,<br/>
                    Andy Serkis, Hannah John-Kamen, Tom Hopper, Noel Clarke, Owain Yeoman, Ray Panthaki, Anne Reid and Tom Wilkinson.</p>
                <h3>Release Date</h3>  <p>12 March 2021</p>
                <h3>Cast</h3>  
                <p>Sam Heughan as Tom Buckingham<br/>
Ruby Rose as Grace Lewis<br/>
Andy Serkis as George Clements</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 11:                       
        print "<center>
                <h1>Dynasty Warriors</h1>
                $video[10] <br/>
                    <p>Dynasty Warriors is a 2021 Hong Kong fantasy-action film based on the Japanese video game franchise of the<br/>
                    same title by Koei Tecmo. Directed by Roy Chow, the film stars an ensemble cast from Hong Kong, China and<br/>
                    Taiwan, including Louis Koo, Carina Lau, Wang Kai, Tony Yang, Han Geng, Justin Cheung, Gulnazar and Ray Lui.</p>
                <h3>Release Date</h3>  <p>29 April 2021</p>
                <h3>Cast</h3>  
                <p>Louis Koo as Lü Bu<br/>
Carina Lau as the Master of the Sword Forge Castle<br/>
Wang Kai as Cao Cao</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 12:
                                    print "<center>
                <h1>Sweet Girl</h1>
                $video[11] <br/>
                    <p>Sweet Girl is a 2021 American action thriller film directed by Brian Andrew Mendoza in his feature directorial<br/>
                    debut and written by Philip Eisner and Gregg Hurwitz. The film stars Jason Momoa, Isabela Merced, Manuel<br/>
                    Garcia-Rulfo, Adria Arjona, Raza Jaffrey, Justin Bartha, Lex Scott Davis, Michael Raymond-James and Amy Brenneman.</p>
                <h3>Release Date</h3>  <p>20 Aug 2021</p>
                <h3>Cast</h3>  
                <p>Jason Momoa as Ray Cooper<br/>
Isabela Merced as Rachel Cooper<br/>
Milena Rivero as young Rachel Cooper</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 13:
                                print "<center>
                <h1>Bad Genius</h1>
                $video[12] <br/>
                    <p>Bad Genius, known in Thai as Chalard Games Goeng (ฉลาดเกมส์โกง),is a 2017 Thai heist thriller film<br/>
                    produced by Jor Kwang Films and distributed by GDH 559. It was directed by Nattawut Poonpiriya, and stars<br/>
                    Chutimon Chuengcharoensukying in her feature film debut as Lynn, a straight-A student who devises an <br/>
                    exams-cheating scheme which eventually rises to international levels.</p>
                <h3>Release Date</h3>  <p>3 May 2017</p>
                <h3>Cast</h3>  
                <p>Chutimon Chuengcharoensukying as Lynn<br/>
Chanon Santinatornkul as Bank<br/>
Eisaya Hosuwan as Grace</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 14:
                                print "<center>
                <h1>Zack Snyder's Justice League</h1>
                $video[13] <br/>
                    <p>Zack Snyder's Justice League, often referred to as the Snyder Cut, is the 2021 director's cut of the 2017<br/>
                    American superhero film Justice League. It presents Justice League—the fifth film of the DC Extended Universe<br/>
                    (DCEU) and the sequel to Batman v Superman: Dawn of Justice (2016)—as director Zack Snyder intended it before he left the production. </p>
                <h3>Release Date</h3>  <p>18 March 2021</p>
                <h3>Cast</h3>  
                <p>Ben Affleck as Bruce Wayne / Batman<br/>
Henry Cavill as Kal-El / Clark Kent / Superman<br/>
Amy Adams as Lois Lane</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 15:
                                    print "<center>
                <h1>Godzilla vs. Kong</h1>
                $video[14] <br/>
                    <p>Godzilla vs. Kong is a 2021 American monster film directed by Adam Wingard. A sequel to Kong: Skull Island<br/>
                    (2017) and Godzilla: King of the Monsters (2019), it is the fourth film in Legendary's MonsterVerse. It is also the<br/>
                    36th film in the Godzilla franchise, the 12th film in the King Kong franchise, and the fourth Godzilla film to be completely produced by a Hollywood studio.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Alexander Skarsgård as Dr. Nathan Lind<br/>
Millie Bobby Brown as Madison Russell<br/>
Rebecca Hall as Dr. Ilene Andrews</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 16:
                                print "<center>
                <h1>Awake</h1>
                $video[15] <br/>
                    <p>Awake is a 2021 American science fiction thriller film, directed by Mark Raso, from a screenplay he wrote<br/>
                    alongside Joseph Raso. It stars Gina Rodriguez, Jennifer Jason Leigh, Barry Pepper, Finn Jones, Shamier<br/>
                    Anderson, Ariana Greenblatt, Frances Fisher, Elias Edraki, Lucius Hoyos and Gil Bellows.</p>
                <h3>Release Date</h3>  <p>9 June 2021</p>
                <h3>Cast</h3>  
                <p>Gina Rodriguez as Jill<br/>
Ariana Greenblatt as Matilda<br/>
Frances Fisher as Doris</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 17:
                                print "<center>
                <h1>The Conjuring: The Devil Made Me Do It</h1>
                $video[16] <br/>
                    <p>The Conjuring: The Devil Made Me Do It (also known as The Conjuring 3) is a 2021 American supernatural<br/>
                    horror film directed by Michael Chaves, with a screenplay by David Leslie Johnson-McGoldrick from a story by<br/>
                    Johnson-McGoldrick and James Wan.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Cast</h3>  
                <p>Johnson-McGoldrick and James Wan.<br/>
Ruairi O'Connor as Arne Cheyenne Johnson<br/>
John Noble as Father Kastner</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
        case 18:
                                    print "<center>
                <h1>Blood Red Sky</h1>
                $video[17] <br/>
                    <p>Blood Red Sky (also known as Transatlantic 473) is a 2021 British-German action horror film directed by Peter<br/>
                    Thorwarth, who co-wrote the screenplay with Stefan Holtz. The film stars Roland Møller, Peri Baumeister, Chidi<br/>
                    Ajufo and Alexander Scheer. </p>
                <h3>Release Date</h3>  <p>23 July 2021</p>
                <h3>Cast</h3>  
                <p>Carl Anton Koch as Elias<br/>
Peri Baumeister as Nadja<br/>
Nader Ben-Abdallah as Mohammed</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 19:
                                print "<center>
                <h1>A classic horror story</h1>
                $video[18] <br/>
                    <p>A Classic Horror Story is a 2021 Italian horror film written by Roberto De Feo, Paolo Strippoli, Lucio Besana,<br/>
                    David Bellini and Milo Tissone, and directed by Roberto De Feo and Paolo Strippoli. The film stars Matilda Lutz,<br/>
                    Will Merrick, Yuliia Sobol, Justin Korovkin, Peppino Mazzotta, Cristina Donadio, Francesco Russo and Alida Baldari Calabria.</p>
                <h3>Release Date</h3>  <p>14 July 2021</p>
                <h3>Cast</h3>  
                <p>Matilda Lutz as Elisa<br/>
Will Merrick as Mark<br/>
Yuliia Sobol as Sofia</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
    case 20:
                                print "<center>
                <h1>Luca</h1>
                $video[19] <br/>
                    <p>Luca is a 2021 American computer-animated coming-of-age fantasy film produced by Pixar Animation Studios<br/>
                    and distributed by Walt Disney Studios Motion Pictures. The film was directed by Enrico Casarosa (in his feature-<br/>
                    length directorial debut), written by Jesse Andrews and Mike Jones, from a story by Casarosa, Andrews, and Simon Stephenson.</p>
                <h3>Release Date</h3>  <p>21 Oct 2021</p>
                <h3>Voice Cast</h3>  
                <p>Jacob Tremblay as Luca Paguro<br/>
Jack Dylan Grazer as Alberto Scorfano<br/>
Emma Berman as Giulia Marcovaldo</p>

                </center>";
            print '<center> <button type="button" class="button"><a href="booking.php">Book now!</a</button></center>';
        break;
}

require ('footer.php');

?>

