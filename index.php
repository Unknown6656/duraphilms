<?php
    include('yaml.php');
    header('Access-Control-Allow-Origin: *');
    //header('Access-Control-Allow-Methods: GET, POST');
    //header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

    $hcaptcha_sitekey = trim(fgets(fopen(__DIR__.'/hcaptcha-keys.txt', 'r')));

    $yaml = new Yaml();
    $metadata = $yaml->load(__DIR__.'/metadata.yaml');
    $video_ids = array();

    foreach ($metadata as $key => $info)
        for ($i = 1; $i <= $info["count"]; ++$i)
        {
            $part = str_pad($i, 2, '0', STR_PAD_LEFT);
            $video_info = isset($info["parts"][$part]) ? $info["parts"][$part] : [];

            array_push($video_ids, [
                "key" => $key,
                "part" => $part,
                "total" => $info["count"],
                "name" => $info["name"],
                "yt-ids" => isset($video_info["youtube-ids"]) ? $video_info["youtube-ids"] : [],
                "id" => count($video_ids) - 1,
            ]);
        }
?>
<!DOCTYPE html>
<html lang="de" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
<?php
    $iPod   = stripos($_SERVER['HTTP_USER_AGENT'], "iPod");
    $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], "iPhone");

    if ($iPod || $iPhone)
    {
        ?>
        <meta name="viewport" content="width=850, user-scalable=yes"/>
        <script type="text/javascript" language="javascript">
            const custom_video_controls_unsupported = true;
        </script>
        <?php
    }
    else
    {
        ?>
        <meta name="viewport" content="width=900, user-scalable=yes"/>
        <script type="text/javascript" language="javascript">
            const custom_video_controls_unsupported = false;
        </script>
        <?php
    }
?>
        <meta name="copyright" content="unknown6656"/>
        <meta name="designer" content="unknown6656"/>
        <meta name="owner" content="unknown6656"/>
        <meta name="url" content="https://unknown6656.com/harrypotter"/>
        <meta name="identifier-url" content="https://unknown6656.com/harrypotter"/>
        <meta name="twitter:site" content="@unknown6656">
        <meta name="fb:page_id" content="381982338582331"/>
        <meta name="og:url" content="https://unknown6656.com/harrypotter"/>
        <meta name="og:site_name" content="unknown6656 | Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-touch-fullscreen" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="format-detection" content="telephone=no"/>
        <meta name="description" content="Harry Potter Synchronisation by DURAPHILMS"/>
        <meta name="keywords" content="unknown6656, Harry, Potter, Synchro, Sync, Synchronisation, Duraphilms, Orden, Penner, Penners, Alcatraz, Half-Life, Prince, Prinz, Coldmirror, Plastik, Pokal, Stein, geheim, geheimer, Keller, Phoenix, Phönix, Azkaban, Gefangener, gefangen, Dustin, DarthDustin, DarthDustinKanal, DarthDustinKanal2"/>
        <meta name="author" content="unknown6656"/>
        <meta property="article:author" content="unknown6656"/>
        <meta name="og:title" content="unknown6656 | Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR"/>
        <meta name="og:description" content="Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR"/>
        <meta name="twitter:title" content="unknown6656 | Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR"/>
        <meta name="twitter:description" content="Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR"/>
        <meta name="og:image" content="https://unknown6656.com/harrypotter/images/banner.png"/>
        <meta name="twitter:image" content="https://unknown6656.com/harrypotter/images/banner.png"/>
        <meta name="twitter:card" content="https://unknown6656.com/harrypotter/images/banner.png"/>
        <title>Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/videoplayer.css"/>
        <link rel="index" title="unknown6656 | Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR" href="/harrypotter/"/>
        <!--
            <link rel="author" href="/humans.txt" type="text/plain">
            <link rel="sitemap" type="application/xml" href="/sitemap.xml"/>
            <link rel="alternate" type="application/rss+xml" href="/rss.xml" title="unknown6656.com RSS feed">
        -->
    </head>
    <a name="top"></a>
    <div class="background">
        <div class="clouds"></div>
        <div class="castle"></div>
    </div>
    <body>
        <div id="content">
            <div id="title" class="title_font">
                <!--
                Harry Potter Synchronisation by DURAPHILMS / COLDMIRROR
                <div id="title_cover"></div>
                -->
            </div>
            <div id="main" class="main_font">
                <div id="back-blur">
                </div>
                <span class="description">
<!--
                    <h2>Wichtig: bitte hier abstimmen!</h2>
                    <div class="strawpoll">
                        <iframe src="https://www.strawpoll.me/embed_1/21011398">
                        </iframe>
                    </div>
-->
                    <br/>
                    <h1 class="title_font">Willkommen liebe Potter-Fans!</h1>
                    <p>
                        <h2>
                            <a href="https://discord.gg/byd5qP6" target="_blank">Breaking News - Wir haben einen DISCORD Server!</a>
                            <br/>
                            <iframe src="https://discordapp.com/widget?id=760488636382445590&theme=dark"
                                    height="300" width="750"
                                    allowtransparency="true"
                                    frameborder="0"
                                    sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                            </iframe>
                        </h2>
                    </p>
                    <p>
                        Auf dieser Seite könnt Ihr Euch alle Harry Potter Parodien/Synchronisationen von DURAPHILMS und COLDMIRROR anschauen.
                        <br/>
                        Die COLDMIRROR-Parodien liegen in einem zusammenhängenden Video vor &mdash; die Parodien von DURAPHILMS sind jedoch in mehrere Parts aufgeteilt.
                        Um einen spezifischen Part zu sehen, könnt ihr auf den entsprechenden Eintrag in der folgenden Tabelle klicken.
                        Alternativ befindet sich unterhalb des Videofensters ein Auswahlmenü der verfügbaren Parts.
                        <!--
                            Um einen spezifischen Part zu sehen, müsst Ihr die entsprechende Nummer des Parts in das Nummernfeld unterhalb
                            des Videos eintragen und mit <key>ENTER</key> bestätigen.
                            Das eigentliche Video könnt Ihr herunterladen, indem Ihr mit der rechten Maustaste darauf klickt und <key>Speichern unter ...</key> auswählt.
                        -->
                    </p>
                    <p>
                        Eine Kopie aller DURAPHILMS-Parts findet ihr auch auf der Webseite <a href="https://duraphilms.tk/" target="_blank">duraphilms.tk</a>!
                        <!-- <br/>
                        Credits und Copyright findet Ihr am <a href="#credits">Ende dieser Seite</a>. -->
                    </p>
                    <!--
                        <p>
                            <i>Diese Webseite benötigt HTML5-Unterstützung.</i></i>
                            <a href="https://html5test.com/" target="_blank" class="help">?</a>
                        </p>
                    -->
                </span>
                <hr/>
                <p>
                    <h2>Bitte ein Video auswählen</h2>
                    <!-- Folgende Teile sind zurzeit online bzw. offline (Klicke auf die Nummer um den Part anzuschauen): -->
                    <table width="100%" id="parts">
                        <tr width="100%">
<?php
    $last = "";

    foreach ($video_ids as $id => $values)
    {
        if ($last != $values["key"])
        {
            ?>
                        <td class="descr"><?=$values["name"]?>: &nbsp;</td>
            <?php
        }

        ?>
                            <td --data-video-id="<?=$id?>" class="number"><span class="tooltip" text=""><?=$values["part"]?></span></td>
        <?php

        $last = $values["key"];

        if ($id + 1 < count($video_ids) && $last != $video_ids[$id + 1]["key"])
        {
            ?>
                    </tr>
                    <tr width="100%">
            <?php
        }
    }
?>
                        </tr>
                        <tr width="100%" height="15px"></tr>
                        <tr width="100%" class="legende">
                            <td class="legende_desc">STATUS UNBEKANNT: &nbsp;</td>
                            <td class="number"></td>
                        </tr>
                        <tr width="100%" class="legende">
                            <td class="legende_desc">ZURZEIT OFFLINE / DEMNÄCHST<sup style="font-size: 0.5em">TM</sup> VERFÜGBAR: &nbsp;</td>
                            <td class="number offline" style="cursor: default !important;"></td>
                        </tr>
                        <!--
                            <tr width="100%" class="legende">
                                <td class="legende_desc">TEMPORÄR (KURZZEITIG) OFFLINE: &nbsp;</td>
                                <td class="number temporary" style="cursor: default !important;"></td>
                            </tr>
                        -->
                        <tr width="100%" class="legende">
                            <td class="legende_desc">ONLINE: &nbsp;</td>
                            <td class="number online" style="cursor: default !important;"></td>
                        </tr>
                    </table>
                </p>
                <!--///////////////////////////////////////////////// VIDEO SECTION /////////////////////////////////////////////////-->
                <div id="video-section" class="default">
                    <a name="video"></a>
                    <figure id="video-container" class="native">
                        <video controls playsinline allowfullscreen autoPictureInPicture="true" preload="metadata" type="video/mp4" src="">
                            <track id="video-subtitle" type="text/vtt" src="" label="Deutsche Untertitel" srclang="de" default hidden/>
                        </video>
                        <div id="video-finished">
                            <button id="vc-replay"></button>
                            <button id="vc-nextpart"></button>
                            <br/>
                            <!-- TODO: add share sheet -->
                        </div>
                        <div id="video-info">
                            <div class="content">
                                <table>
                                    <tr>
                                        <td>ID:</td>
                                        <td>&nbsp;</td>
                                        <td id="info-id">---</td>
                                    </tr>
                                    <tr>
                                        <td>URL:</td>
                                        <td>&nbsp;</td>
                                        <td><a id="info-uri" href target="_blank" style="color:white">---</a></td>
                                    </tr>
                                    <tr>
                                        <td>Untertitel:</td>
                                        <td>&nbsp;</td>
                                        <td id="info-sub">---</td>
                                    </tr>
                                    <tr>
                                        <td>Codec:</td>
                                        <td>&nbsp;</td>
                                        <td id="info-codec">---</td>
                                    </tr>
                                    <tr>
                                        <td>Länge:</td>
                                        <td>&nbsp;</td>
                                        <td id="info-duration">---</td>
                                    </tr>
                                    <tr>
                                        <td>Zeitstempel:</td>
                                        <td>&nbsp;</td>
                                        <td id="info-time">---</td>
                                    </tr>
                                </table>
                                <br/>
                                Zum Schließen dieses Fensters bitte auf den<br/>
                                <img src="images/videoplayer/information.svg" height="16" width="16" style="display:inline-block;filter:invert();margin:auto;"/>-Knopf in der Steuerleiste klicken.
                            </div>
                        </div>
                        <div id="video-watermark">
                            <table width="100%">
                                <tr width="100%">
                                    <td class="video-title" width="50%" align="left"></td>
                                    <td width="50%" align="right"><!--unknown6656.com--> </td>
                                </tr>
                            </table>
                        </div>
                        <div id="video-share">
                            <div id="share-close">
                            </div>
                            <div class="content">
                                <h2 style="font-size:1.8em"><span class="video-title"></span></h2>
                                <p>
                                    <input type="text" id="share-url" readonly/>
                                </p>
                                <p>
                                    <input type="checkbox" name="share-include-time" id="share-include-time"/>
                                    <label for="share-include-time">
                                        Zeitstempel hinzufügen &nbsp;
                                        <input type="time" id="share-time" step="1" min="00:00:00" max="00:00:00" value="00:00:00" disabled/>
                                    </label>
                                </p>
                                <table>
                                    <tr>
                                        <td><button id="share-wa">WhatsApp</button></td>
                                        <td><button id="share-tw">Twitter</button></td>
                                        <td><button id="share-fb">Facebook</button></td>
                                        <!-- <td><button id="share-ms">Messenger</button></td> -->
                                        <!-- <td><button id="share-ig">Instagram</button></td> -->
                                        <td><button id="share-th">Threema</button></td>
                                        <td><button id="share-re">Reddit</button></td>
                                    </tr>
                                    <tr>
                                        <td><button id="share-in">LinkedIn</button></td>
                                        <td><button id="share-tb">Tumblr</button></td>
                                        <td><button id="share-pi">Pinterest</button></td>
                                        <td><button id="share-tg">Telegram</button></td>
                                        <td><button id="share-vk">VK</button></td>
                                    </tr>
                                    <tr>
                                        <td><button id="share-sk">Skype</button></td>
                                        <td><button id="share-sms">SMS</button></td>
                                        <td><button id="share-em">E-Mail</button></td>
                                        <td><button id="share-cp">Kopieren</button></td>
                                        <td><button id="share-native">Sonstige ...</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <table id="video-controls" class="disabled">
                            <colgroup>
                                <col/>
                                <col/>
                                <col/>
                                <col width="100%"/>
                                <col/>
                                <col/>
                                <col/>
                            </colgroup>
                            <tr class="slim">
                                <td><button id="vc-previous" tooltip="Vorheriger Part/Film"></button></td>
                                <td><button id="vc-stop" tooltip="Wiedergabe anhalten"></button></td>
                                <td><button id="vc-next" tooltip="Nächster Part/Film"></button></td>
                                <td>
                                    <table width="100%">
                                        <tr width="100%">
                                            <td><button id="vc-slower" tooltip="Wiedergabegeschwindigkeit um 0.25x verringern"></button></td>
                                            <td><span id="vc-speed-text">1x</span></td>
                                            <td><button id="vc-faster" tooltip="Wiedergabegeschwindigkeit um 0.25x erhöhen"></button></td>
                                            <td style="width: 100%"></td>
                                            <td tooltip="">
                                                <div id="vc-volume" style="--percentage:100%" value="100"></div>
                                            </td>
                                            <td><button id="vc-volume-mute" data-state="mute" tooltip="Wiedergabe stumm schalten"></button></td>
                                        </tr>
                                    </table>
                                </td>
                                <td><button id="vc-info" tooltip="Videoinformationen einblenden/ausblenden"></button></td>
                                <td><button id="vc-share" tooltip="Video teilen"></button></td>
                                <td><button id="vc-download" tooltip="Film/Part herunterladen"></button></td>
                            </tr>
                            <tr class="slim">
                                <td><button id="vc-back15" tooltip="Um 15 Sekunden zurückspulen"></button></td>
                                <td><button id="vc-playpause" tooltip="Wiedergabe pausieren/fortsetzen" data-state="play"></button></td>
                                <td><button id="vc-forward15" tooltip="Um 15 Sekunden vorspulen"></button></td>
                                <td>
                                    <table width="100%">
                                        <tr width="100%">
                                            <td>
                                                <span id="vc-progress-text">
                                                    0:00
                                                    <br/>
                                                    / 0:00
                                                </span>
                                            </td>
                                            <td style="width: 100%" tooltip="">
                                                <input type="range" id="vc-progress" min="0" max="0" value="0" step="0.05"/>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td><button id="vc-subtitle" tooltip="Untertitel einblenden/ausblenden" data-state="subtitles"></button></td>
                                <td><button id="vc-pip" tooltip="Picture-in-Picture einschalten/ausschalten" data-state="enter"></button></td>
                                <td><button id="vc-fullscreen" tooltip="Vollbildmodus einschalten/ausschalten" data-state="enter"></button></td>
                            </tr>
                        </table>
                    </figure>
                    <table width="100%">
                        <tr width="100%">
                            <td width="70%" valign="top">
                                <i style="font-size: 10pt">
                                    Falls das Video hängen sollte, bitte einige Minuten warten und das Video laden lassen.
                                    <br/>
                                    <details>
                                        <summary>Tastaturbefehle für das Videofenster.</summary>
                                        <table class="keycuts">
                                            <tr>
                                                <td><kbd>[SPACE]</kbd>, <kbd>[ENTER]</kbd>, <kbd>[K]</kbd></td>
                                                <td>Wiedergabe pausieren oder fortsetzen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[S]</kbd></td>
                                                <td>Wiedergabe stoppen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[D]</kbd></td>
                                                <td>Video herunterladen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[↑]</kbd></td>
                                                <td>Lautstärke um 10% erhöhen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[↓]</kbd></td>
                                                <td>Lautstärke um 10% verringern</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[←]</kbd>, <kbd>[L]</kbd></td>
                                                <td>Um 15 Sekunden zurückspulen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[→]</kbd>, <kbd>[J]</kbd></td>
                                                <td>Um 15 Sekunden vorspulen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[M]</kbd></td>
                                                <td>Lautstärke stumm schalten</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[C]</kbd></td>
                                                <td>Untertitel ein-/ausblenden</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[F]</kbd></td>
                                                <td>Vollbildmodus ein-/ausschalten</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[I]</kbd></td>
                                                <td>PiP-Modus ein-/ausschalten</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[N]</kbd></td>
                                                <td>Nächsten Part/Film anschauen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[P]</kbd></td>
                                                <td>Vorherigen Part/Film anschauen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[.]</kbd></td>
                                                <td>Geschwindigkeit um 25% erhöhen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[,]</kbd></td>
                                                <td>Geschwindigkeit um 25% verringern</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[0]</kbd> ... <kbd>[9]</kbd></td>
                                                <td>Durch den Film scrollen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[Pos1]</kbd></td>
                                                <td>Zum Filmanfang springen</td>
                                            </tr>
                                            <tr>
                                                <td><kbd>[End]</kbd></td>
                                                <td>Zum Filmende springen</td>
                                            </tr>
                                        </table>
                                    </details>
                                </i>
                            </td>
                            <td width="30%" valign="top" align="right">
                                <div id="download-links">
                                    <a id="download-single" download>Dieses Video herunterladen</a>
                                    <br/>
                                    <a id="download-all" download>Alle Parts (1-<span id="part-count"></span>) herunterladen</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <br/>
                <!--///////////////////////////////////////////////// NAVIGATION + GIF CREATOR /////////////////////////////////////////////////-->
                <div class="navigation">
                    <button id="prev-movie" disabled>
                        <div class="triangle-left"></div>
                        <div class="triangle-left"></div>
                        &nbsp;
                        Vorheriger Film
                    </button>
                    <button id="prev-part" disabled>
                        <div class="triangle-left"></div>
                        &nbsp;
                        Vorheriger Part
                    </button>
                    <select id="partselector" width="200">
                        <option selected disabled>Bitte Video auswählen</option>
<?php
    $group = "";

    foreach ($video_ids as $id => $values)
        if ($values["total"] < 2)
        {
            ?>
                        <option value="<?=$id?>"><?=$values["name"]?></option>
            <?php
        }
        else
        {
            if ($group != $values["key"])
            {
                ?>
                        <optgroup label="<?=$values["name"]?>">
                <?php
            }

            ?>
                            <option value="<?=$id?>"><?=$values["key"]?> Part <?=$values["part"]?></option>
            <?php

            if ($values["part"] > $values["total"] - 1)
            {
                ?>
                        </optgroup>
                <?php
            }

            $group = $values["key"];
        }
?>
                    </select>
                    <button id="next-part" disabled>
                        Nächster Part
                        &nbsp;
                        <div class="triangle-right"></div>
                    </button>
                    <button id="next-movie" disabled>
                        Nächster Film
                        &nbsp;
                        <div class="triangle-right"></div>
                        <div class="triangle-right"></div>
                    </button>
                </div>
                <br/>
                <div id="gif-creator">
                    <br/>
                    <h2>GIF erstellen ⟨beta⟩</h2>
                    <table style="margin-left: 40px">
                        <tr>
                            <td>Start-Zeitstempel:</td>
                            <td>
                                <input type="time" name="gif-start" step="1" disabled value="00:00:00" min="00:00:00" max="00:00:00"/>
                            </td>
                            <td rowspan="3">
                                <div class="h-captcha" data-sitekey="<?=$hcaptcha_sitekey?>" data-theme="dark" data-size="todo-compact"></div>
                                <button name="create-gif" disabled> >> ERSTELLEN << </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Länge (Sekunden, zw. 1 und 15):</td>
                            <td>
                                <input type="number" name="gif-length" step="1" min="1" max="15" disabled value="5"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Horizontale Auflösung:</td>
                            <td>
                                <select name="gif-resolution" disabled>
                                    <option value="240">240p</option>
                                    <option value="360">360p</option>
                                    <option value="480" selected>480p</option>
                                    <option value="560">560p</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <div name="gif-result" data-gif-state="empty">
                        <hr/>
                        <br/>
                        <img/>
                        <br/>
                        <a href download>GIF speichern</a>
                    </div>
                </div>
                <br/>
                <br/>
                <div id="yt-comments">
                    <h2>YouTube Kommentare zu diesem Video</h2>
                </div>
                <br/>
                <hr/>
                <!--///////////////////////////////////////////////// CREDIT SECTION /////////////////////////////////////////////////-->
                <a name="credits"></a>
                <h3>Credits</h3>
                <table id="copyrights">
                    <tr>
                        <td>Videomaterial:</td>
                        <td>&copy; Duraphilms, LNJ</td>
                        <td>2009-2015</td>
                        <td>(<a href="https://youtube.com/darthdustinKanal2" target="_blank">YouTube</a>)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&copy; Coldmirror</td>
                        <td>2006-2008</td>
                        <td>(<a href="https://youtube.com/coldmirror" target="_blank">YouTube</a>)</td>
                    </tr>
                    <tr>
                        <td>Thumbnails:</td>
                        <td>&copy; Duraphilms, LNJ, JBB</td>
                        <td>2009-2020</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Untertitel:</td>
                        <td>&copy; Unknown6656, LNJ, JBB</td>
                        <td>2020</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Webseite:</td>
                        <td>&copy; Unknown6656</td>
                        <td>2014-<?=date("Y")?></td>
                        <td>(<a href="https://youtube.com/unknown6656/" target="_blank">YouTube</a>, <a href="https://github.com/unknown6656" target="_blank">GitHub</a>)</td>
                    </tr>
                </table>
                <br/>
                <table id="credit-icons" width="100%">
                    <tr>
                        <td>
                            <a href="https://youtube.com/darthdustinKanal2" target="_blank">
                                <div class="img_container duraphilms"></div>
                                DURAPHILMS
                            </a>
                        </td>
                        <td>
                            <a href="https://youtube.com/coldmirror" target="_blank">
                                <div class="img_container coldmirror"></div>
                                COLDMIRROR
                            </a>
                        </td>
                        <td>
                            <a href="https://youtube.com/Unknown6656" target="_blank">
                                <div class="img_container unknown6656"></div>
                                unknown6656
                            </a>
                        </td>
                        <td>
                            <a href="https://github.com/lnjX" target="_blank">
                                <div class="img_container lnj"></div>
                                LNJ
                            </a>
                        </td>
                        <td>
                            <a href="https://github.com/JBBgameich" target="_blank">
                                <div class="img_container jbb"></div>
                                JBB
                            </a>
                        </td>
                    </tr>
                </table>
                <br/>
                <hr/>
                <br/>
                <div id="feedback">
                    <smc>
                        Fragen? Probleme? Kritik? Verbesserungsvorschläge?
                    </smc>
                    <br/>
                    <a class="sm github" name="GitHub" href="https://github.com/DuraPhilms/unknown6656.com-harrypotter/" target="_blank"></a>
                    <a class="sm twitter" name="Twitter" href="https://twitter.com/Unknown6656" target="_blank"></a>
                    <a class="sm youtube" name="YouTube" href="https://youtube.com/unknown6656/about" target="_blank"></a>
                    <a class="sm facebook" name="Facebook" href="https://facebook.com/Unknown6656" target="_blank"></a>
                    <br/>
                </span>
                <br/>
                <br/>
                <hr/>
                <br/>
                <a href="#top">Zurück zum Seitenanfang</a>
            </div>
            <div id="sidebar">
                <span class="content main_font">
                    <a href="http://www.youtube.com/subscription_center?add_user=darthdustinKanal2" target="_blank">
                        <div class="img_container duraphilms"></div>
                        DURAPHILMS abonnieren
                    </a>
                    <br/>
                    <br/>
                    <a href="http://www.youtube.com/subscription_center?add_user=coldmirror" target="_blank">
                        <div class="img_container coldmirror"></div>
                        COLDMIRROR abonnieren
                    </a>
                    <br/>
                    <br/>
                    <a href="http://www.youtube.com/subscription_center?add_user=unknown6656" target="_blank">
                        <div class="img_container unknown6656"></div>
                        UNKNOWN6656 abonnieren
                    </a>
                    <br/>
                </span>
            </div>
        </div>
        <script type="text/javascript" language="javascript">
            let video_ids = [
<?php
    foreach ($video_ids as $id => $values)
    {
?>
                    {
                        id: <?=$id?>,
                        key: "<?=$values["key"]?>",
                        part: "<?=$values["part"]?>",
                        part_num: <?=$values["part"]?>,
                        total: <?=$values["total"]?>,
                        name: "<?=$values["name"]?>",
                        yt_ids: ["<?=implode($values["yt-ids"], '", "')?>"]
                        // TODO : codec info etc.
                    },
<?php
    }
?>
            ];
        </script>
        <script type="text/javascript" language="javascript" src="js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/script.js"></script>
        <script type="text/javascript" language="javascript" src="js/videoplayer.js"></script>
        <script type="text/javascript" language="javascript" src="https://hcaptcha.com/1/api.js" async defer></script>
<?php
    preg_match('/^([_a-zA-Z]+)(\d+)$/', isset($_GET['v']) ? $_GET['v'] : '', $selected_video);

    if (isset($selected_video[0]) && strlen($selected_video[1]) > 0)
    {
        $selected_video = array($selected_video[1], $selected_video[2]);
        $selected_index = -1;

        foreach ($video_ids as $id => $values)
            if ($values["key"] == $selected_video[0] && $values["part"] == $selected_video[1])
            {
                $selected_index = $id;

                break;
            }

        if ($selected_index >= 0)
        {
            preg_match('/^(\d+):(\d+):(\d+)$/', isset($_GET['t']) ? $_GET['t'] : '00:00:00', $selected_time);

            $hours = is_numeric($selected_time[1]) ? intval($selected_time[1]) : 0;
            $minutes = is_numeric($selected_time[2]) ? intval($selected_time[2]) : 0;
            $seconds = is_numeric($selected_time[3]) ? intval($selected_time[3]) : 0;
?>
        <script type="text/javascript" language="javascript">
            $(document).ready(() => setTimeout(() => start_video(<?=$selected_index?>, <?=$hours * 3600 + $minutes * 60 + $seconds?>), 1000));
        </script>
<?php
        }
    }
?>
    </body>
</html>