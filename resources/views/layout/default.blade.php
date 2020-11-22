<!DOCTYPE html>
<html class="js sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers" lang="">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{!! $title !!}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/index_files/bootstrap.min.css" >

    <link rel="stylesheet" href="./assets/index_files/normalize.css">
    <link rel="stylesheet" href="./assets/index_files/main.css">
</head>

<body>

<div id="wrapper">

    <div id="overlay" class="hidden">

        <a href="#link" class="close-overlay close"></a>

        <div class="broker-logo-container">

        </div>

        <div id="signup-load" class="hidden">

            <h2>Account wird erstellt ...</h2>

            <div class="callcenter-container">
                <img src="./assets/index_files/callcenter.jpg">
            </div>

            <div class="overlay-content">
                <h3>Wir rufen Sie in Kürze an.</h3>
            </div>

            <div class="loader-container">
                <img src="./assets/index_files/load.gif">
            </div>
        </div>

        <div class="overlay-content">

            <div class="reg-form">
                <div class="content">
                    <div class="text">

                        <h2>Jetzt kostenloses Trading-Konto eröffnen</h2>

                        <div class="form-entry">
                            <label>Vorname</label>
                            <input type="text" class="form-control" placeholder="Vorname" id="first_name">
                        </div>

                        <div class="form-entry">
                            <label>Nachname</label>
                            <input type="text" class="form-control" placeholder="Nachname" id="last_name">
                        </div>

                        <div class="form-entry">
                            <label>E-Mail</label>
                            <input type="text" class="form-control" placeholder="ihre.email@domain.com" id="email">
                        </div>

                        <div class="form-entry">
                            <label>Telefon</label>
                            <input type="text" class="form-control" placeholder="01741234567" id="phone">
                        </div>

                        <div class="form-entry">
                            <input type="checkbox" class="form-check-input" id="activation">
                            <label class="form-check-label" for="activation">Ich akzeptiere die <a href="#link">AGB</a></label>
                        </div>

                    </div>

                    <div class="btn-container">
                        <a href="https://sites.google.com/" class="btn btn-danger signup-btn" target="frame1">Trading-Konto eröffnen</a>
                    </div>

                </div>
            </div>

            <div class="regulations-container">
                <img src="./assets/index_files/regulations.jpg">
            </div>

        </div>

    </div>

    <div id="container" class="">

        <div id="header">
            <div class="header-inner clearfix">
                <div class="header-col-1">
                    &nbsp;
                </div>
                <div class="header-col-2">
                    &nbsp;
                </div>
                <div class="header-col-3">
                    <img src="./assets/index_files/header-logos-mobile.png" class="header-logos-mobile">
                    <img src="./assets/index_files/header-logos-desktop.png" class="header-logos-desktop">
                </div>
            </div>
        </div>

        <div id="nav">
            <div class="nav-inner clearfix">
                <div class="item">
                    NACHRICHTEN
                </div>
                <div class="item">
                    MEDIATHEK
                </div>
                <div class="item">
                    POLITIK
                </div>
                <div class="item active">
                    WIRTSCHAFT
                </div>
                <div class="item">
                    TECHNOLOGIE
                </div>
                <div class="item">
                    PANORAMA
                </div>
                <div class="item">
                    WISSEN
                </div>
                <div class="item">
                    KULTUR
                </div>
                <div class="item">
                    SPORT
                </div>
            </div>
        </div>

        <div id="breadcrumb">
            <div class="breadcrumb-inner">
                NACHRICHTEN » FINANZ-TIPPS » Hat COVID-19 uns die beste Gelegenheit der letzten 10 Jahre an den Finanzmärkten beschert?
            </div>
        </div>

        <div id="title">
            <div class="title-inner">
                {!! $title !!}
            </div>
        </div>

        <div id="topics">
            <div class="topics-inner">
                FINANZWELT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEUTSCHLAND
            </div>
        </div>

        <div id="content">
            <div class="content-inner clearfix">
                <div class="column-1">
                    @foreach($sections as $section)
                        @foreach($section->contents as $content)
                            <div class="teaser">{!! $content->text !!}</div>
                        @endforeach
                    @endforeach
                </div>

                <div class="column-2">

                </div>
            </div>
        </div>

        <div id="footer">
            <div class="footer-inner">
                <div class="footer-row">
                    <a href="#link">IMPRESSUM</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">DATENSCHUTZ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">AGB</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">KONTAKT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">KARRIERE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">FEEDBACK</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">JUGENDSCHUTZ</a>
                </div>
                <div class="footer-row">
                    <a href="#link">Newsletter</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">FAQ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">Fotos</a>
                </div>
                <div class="footer-row">
                    <a href="#link">Facebook</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">Twitter</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#link">Instagram</a>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="cookies-overlay" class="hidden">
    <div class="form-card">
        <h2>Wir verwenden Cookies</h2>

        <div class="form-text">
            <strong>Ihre Zustimmung können Sie jederzeit widerrufen.</strong>
        </div>

        <div class="form-text">
            Wir benötigen Ihre Zustimmung, damit wir und unsere Partner Cookies und andere Technologien einsetzen und dabei pseudonyme Daten über Sie auch außerhalb des EWR übermitteln können. Im Folgenden finden Sie eine Übersicht, zu welchen Zwecken wir Ihre Daten verarbeiten.
        </div>

        <div class="form-text">
            <button class="btn btn-success" id="cookies-btn">AKZEPTIEREN</button>
        </div>

        <div class="form-text form-links">
            <span>Datenschutz</span> | <span>Impressum</span> | <span>AGB</span>
        </div>

        <div class="form-text form-info-text">
            <h3>Datenschutz und Nutzungserlebnis</h3>
            <p>Wir übermitteln Daten an Drittanbieter um unser Webangebot zu verbessern und zu finanzieren. In diesem Zusammenhang können Daten außerhalb des EWR verarbeitet werden und auch Nutzungsprofile gebildet und mit Daten von anderen Webseiten angereichert werden.</p>

            <p>Ihre personenbezogenen Daten (IP-Adressen o.ä.) werden verwendet, um Informationen auf Ihrem Gerät zu speichern und /oder darauf zugreifen (z. B. Cookies, Geräte-Kennungen oder andere Informationen), personalisierte Anzeigen und Inhalte anzuzeigen, Anzeigen- und Inhaltsmessungen vorzunehmen sowie Erkenntnisse über Zielgruppen und Produktentwicklungen zu gewinnen sowie die Nutzung unserer Angebote zu analysieren und dafür Marketing machen und den Erfolg messen zu können.</p>

            <p>Da Datenverarbeitungen auch außerhalb des EWR, wie den USA, vorgenommen werden, besteht – ohne Angemessenheitsbeschluss der EU-Kommission – grundsätzlich nicht das hohe europäische Datenschutzniveau. Mögliche Risiken, die sich im Zusammenhang mit der Datenübermittlung daher insbesondere nicht ausschließen lassen, können sein, dass Ihre Daten über den eigentlichen Zweck hinaus dem Zugriff durch Behörden zu Kontroll- und Überwachungszwecken unterliegen und dagegen keine wirksamen Rechtsbehelfe zur Verfügung stehen und sie gegenüber diesen Behörden ihre datenschutzrechtlichen Rechte nicht nachhaltig geltend machen und durchsetzen können.</p>

            <p>Indem Sie "Akzeptieren" klicken, stimmen Sie diesen Datenverarbeitungen (jederzeit widerruflich) zu. Dies umfasst zeitlich begrenzt auch Ihre Einwilligung zur Datenverarbeitung außerhalb des EWR (Art. 49 Abs. 1 lit. a) DS-GVO). Unter Einstellungen oder über die Datenschutzerklärung können Sie Ihre Einstellungen jederzeit ändern oder Datenverarbeitungen ablehnen. Diese Einwilligung ist freiwillig und kann jederzeit widerrufen werden. Weitere Informationen finden Sie in der Datenschutzerklärung.</p>
        </div>
    </div>
</div>

<script src="./assets/index_files/modernizr-3.6.0.min.js"></script>
<script src="./assets/index_files/jquery.min.js"></script>
<script src="./assets/index_files/plugins.js"></script>
<script src="./assets/index_files/main.js"></script>


</body></html>