<?php require("script.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GCSF</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/profilePicturePng.png">
    <link rel="stylesheet" href="styles/g-style.css" />
    <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
    <header class="site-header">
        <div class="wrapper site-header__wrapper">
            <div class="site-header__start">
                <a href="#" class="brand"><img src="assets/profilePicturePng.png" alt="GCSF"></a>
            </div>
            <div class="site-header__middle">
                <nav class="nav">
                    <button class="nav__toggle" aria-expanded="false" type="button">
                        <img src="assets/icon-mn.svg" alt="Menu">
                    </button>
                    <ul class="nav__wrapper">
                        <li data-tab-target="#info" class="nav__item active tab"><a href="#">Information</a></li>
                        <li data-tab-target="#rules" class="nav__item tab"><a href="#">Rules</a></li>
                        <li data-tab-target="#reg" class="nav__item tab"><a href="#">Registration</a></li>
                        <li data-tab-target="#regUsers" class="nav__item tab"><a href="#">Registered Users</a></li>
                    </ul>
                </nav>
            </div>
            <div class="site-header__end">
                <a href="https://www.facebook.com/gcsf.ge" target="_blank"><img src="assets/icon-fb.svg" alt="FB"></a>
                <a href="https://discord.gg/N3qTFfWvTN" target="_blank"><img src="assets/icon-dc.svg" alt="DC"></a>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="tab-content">
            <div class="info-cont tab-wrapper">
                <div id="info" data-tab-content class="active info-cont-wrap">
                    <h1>Tekken Tournament</h1>
                    <img src="assets/tek-wall.jpg" alt="Tekken Wallpaper" />
                        <p>
                            The Tekken World Tour Finals for 2019 are finally here, and this year they'll be taking place in
                            Bangkok, Thailand, Hello There.
                        </p>
                        <p>
                            The 19 players already qualified for the finals are ROX|Knee, RB|Anakin, UYU|LowHigh, JDCR,
                            THY|Chikurin, RB|Arslan Ash, Talon|Kkokkoma, CRaZY|SuperAkouma, GG|AwaisHoney, Fate|Ulsan,
                            UYU|Double, ROX|Chanel, AMPLFY|Rangchu, ROX|Abel del Maestro, Jimmy J Tran, Yamasa|Nobi,
                            COOASGAMES|Noroma, Disrupt|Shadow20z and GG|Saint.
                        </p>
                        <p>
                            There is also going to be a Last Chance Qualifier at the event, and with over 250 people signed
                            up for the Last Chance Qualifier, you know the competition to get that 20th spot in the finals
                            is going to be absolutely through the roof.
                        </p>
                        <p>
                            Some of the big names signed up to try their chance at getting the final spot are UYU|Jeondding,
                            Liquid|Gen, Yamasa|Take, Talon|Book, Atif Butt, Mixbox|Qudans, CGG|Tissuemon, EQNX|CuddleCore,
                            BL|Sephiblack, Doujin, PBE|AK, MVP|Pekos, Exeed|Ghirlanda, LOK|Nivek, RunItBlack, SperoGin,
                            Kanga|Heera, Trungy, DanielMado, GG|Dee-On Grey and of course many more as well.
                        </p>
                        <p>
                            This event is the final for the 2019 Tekken World Tour, with a huge prize pool to boot of
                            $200,000. We've also been hearing about a lot of upcoming content for Tekken, which is likely to
                            be detailed further at this event, including the upcomingn newcomer Leroy Smith, the substantial
                            training mode upgrades with in-game frame data, punish guides and more as well as more currently
                            unknown characters joining the fray for the game's Season 3.
                        </p>
                    <p class="example-purp">This text are from The Tekken World Tour Finals for 2019 and only using in this project for example purposes</p>
                </div>
            </div>
            <div class="rules-cont">
                <div id="rules" data-tab-content>
                    <h1>Tekken Tournament Rules</h1>
                    <h2>1. LEAGUE FORMAT </h2>
                    <h3>1.1 Tournaments</h3>
                    <p>1.1.1. Selection; Classification of Tournaments<br />
                    The League is comprised of Tournaments that will be operated and managed by 
                    Tournament Organizers, which are independent from Twitch. 
                    Twitch will select in its sole discretion the Tournaments that participate in the 
                    League and award qualifying Points to Players who compete. All Tournaments 
                    that are included in the League, aside from the TEKKEN World Tour Finals, are 
                    categorized as “Master+,” “Master,” “Challenger,” or “Dojo” Tournaments.</p>
                    <p>1.1.2. Dojo Tournaments<br />
                    Dojo Tournaments are TEKKEN competitions operating independently of the 
                    TEKKEN World Tour that have opted into TEKKEN World Tour recognition via 
                    an application process available on smash.gg. The application process confirms 
                    prospective events meet criteria necessary for Dojo Tournament classification. 
                    Dojo Tournaments are required to use smash.gg to 1) list their Dojo 
                    Tournament; 2) take registration; and 3) setup and record the bracket.</p>
                    <p>1.1.3. Format<br />
                    All Tournaments will be Double Elimination Brackets. All Matches are Best-of- 
                    Three, except for Winners Finals, Losers Finals, and Grand Finals which are 
                    Best-of-Five. Players will be ranked based on their best performances in ten 
                    (10) Tournaments, subject to the following Tournament category limits</p>
                    <h3>1.2. Points</h3><br />
                    All Tournaments included in the League will award Points which are used to rank the 
                    Players on the Leaderboard in accordance with the table below:</p>

                    <!--  -->

                    <table style="width:100%">
                        <tr>
                            <th rowspan="2">Placement</th>
                            <th colspan="7">Tournament Category</th>
                        </tr>
                        <tr>
                            <th>Master+</th>
                            <th>Master</th>
                            <th>Challenger</th>
                            <th>Dojo 96</th>
                            <th>Dojo 64</th>
                            <th>Dojo 32</th>
                            <th>Dojo 16</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>550</td>
                            <td>300</td>
                            <td>150</td>
                            <td>100</td>
                            <td>70</td>
                            <td>45</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>400</td>
                            <td>220</td>
                            <td>100</td>
                            <td>70</td>
                            <td>45</td>
                            <td>25</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>300</td>
                            <td>150</td>
                            <td>70</td>
                            <td>45</td>
                            <td>25</td>
                            <td>10</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>220</td>
                            <td>100</td>
                            <td>45</td>
                            <td>25</td>
                            <td>10</td>
                            <td>5</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>150</td>
                            <td>70</td>
                            <td>25</td>
                            <td>10</td>
                            <td>5</td>
                            <td>1</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>100</td>
                            <td>45</td>
                            <td>10</td>
                            <td>5</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>70</td>
                            <td>25</td>
                            <td>5</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>45</td>
                            <td>10</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>25</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>10</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>


                    <!--  -->

                    <h3>1.3. Last Chance Qualifier</h3>
                    <p>The Last Chance Qualifier is open to two hundred and fifty-six (256) eligible Players 
                    ranked 20th - 275th on the Leaderboard at the end of the League Period. If one of the 
                    Players ranked 20th - 275th on the Leaderboard at the end of the League Period 
                    declines to participate, is deemed ineligible, or is disqualified before the start of the 
                    Last Chance Qualifier</p>
                    <h2>2. GENERAL ELIGIBILITY</h2>
                    <p>Tournaments are open to individuals who are thirteen (13) years of age or older on the date 
                    they register for a Tournament</p>
                    <p>For Dojo Tournaments, Players may be required to have Smash.gg account, or may be 
                    required to register for an account with Smash.gg, in order to participate in the Tournament. </p>
                    <h2>3. HOW TO APPLY</h2>
                    <p>To register for the League, visit the League Website and follow the instructions about how to 
                    register as a Player. Players can find information regarding each Tournament at the League 
                    Website.</p>
                    <p>Instructions for applying to play in the Last Chance Qualifier of the TEKKEN World Tour 
                    Finals will be provided at a later date.</p>
                    <p class="example-purp">This rules are from TEKKEN WORLD TOUR OFFICIAL LEAGUE RULES and only using in this project for example purposes</p>
                </div> 
            </div>
            <div class="reg-cont">
                <div id="reg" data-tab-content class="reg-cont-wrap">
                    <form action="index.php" method="POST">
                        <div>
                            <label for="tourRules">Rules: </label>
                            <label><input type="radio" name="tourRules" required> I read it and I agree</label>
                        </div>
                        <hr />
                        <div>
                            <label for="name">Name, Surname</label>
                            <input type="text" id="name" name="name" placeholder="Your name.." required>
                        </div>
                        <div>
                            <label for="date">Date of birth</label>
                            <input type="date" id="date" name="date" value="" max="2004-01-01" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email.." required>
                        </div>
                        <div>
                            <label for="nick">Nickname</label>
                            <input type="text" id="nick" name="nick" placeholder="Your nickname.." required>
                        </div>
                        <div>
                            <label for="dcName">Discord Name</label>
                            <input type="text" id="dcName" name="dcName" placeholder="Your discord.." required>
                        </div>
                        <hr />
                        <input type="submit" name="submit" value="Submit" class="submit">

                        <p class="error"><?php echo @$error; ?></p>
                        <p class="success"><?php echo @$success; ?></p>

                    </form>
                </div>
            </div>
            <div class="reg-users-cont">
                <div class="reg-users-wrap" id="regUsers" data-tab-content>
                    <h1>Registered Users</h1>
                    <div class="user-list" id='data-output'>
                        <!-- Participants from script.js file here  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="g-script.js"></script>
    <script src="app.js"></script>
    <script src="script.js"></script>
</body>

</html>