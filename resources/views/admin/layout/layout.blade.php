<html lang="en" style="height: auto;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
        <script defer="" referrerpolicy="origin"
            src="../../cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIwMyUyMiUyQyUyMnglMjIlM0EwLjg2Mjc4NzUxNzc2MTQ0MjElMkMlMjJ3JTIyJTNBMTUzNiUyQyUyMmglMjIlM0E4NjQlMkMlMjJqJTIyJTNBNjk1JTJDJTIyZSUyMiUzQTE1MzYlMkMlMjJsJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXgzLmh0bWwlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXguaHRtbCUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNDIwJTJDJTIycSUyMiUzQSU1QiU1RCU3RA==">
        </script>
        
        <script data-cfasync="false" nonce="4a53bb37-9fac-4fda-b471-d62661dd3366">
            try {
                (function(w, d) {
                    ! function(j, k, l, m) {
                        if (j.zaraz) console.error("zaraz is loaded twice");
                        else {
                            j[l] = j[l] || {};
                            j[l].executed = [];
                            j.zaraz = {
                                deferred: [],
                                listeners: []
                            };
                            j.zaraz._v = "5838";
                            j.zaraz._n = "4a53bb37-9fac-4fda-b471-d62661dd3366";
                            j.zaraz.q = [];
                            j.zaraz._f = function(n) {
                                return async function() {
                                    var o = Array.prototype.slice.call(arguments);
                                    j.zaraz.q.push({
                                        m: n,
                                        a: o
                                    })
                                }
                            };
                            for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                            j.zaraz.init = () => {
                                var q = k.getElementsByTagName(m)[0],
                                    r = k.createElement(m),
                                    s = k.getElementsByTagName("title")[0];
                                s && (j[l].t = k.getElementsByTagName("title")[0].text);
                                j[l].x = Math.random();
                                j[l].w = j.screen.width;
                                j[l].h = j.screen.height;
                                j[l].j = j.innerHeight;
                                j[l].e = j.innerWidth;
                                j[l].l = j.location.href;
                                j[l].r = k.referrer;
                                j[l].k = j.screen.colorDepth;
                                j[l].n = k.characterSet;
                                j[l].o = (new Date).getTimezoneOffset();
                                if (j.dataLayer)
                                    for (const t of Object.entries(Object.entries(dataLayer).reduce(((u, v) => ({
                                            ...u[1],
                                            ...v[1]
                                        })), {}))) zaraz.set(t[0], t[1], {
                                        scope: "page"
                                    });
                                j[l].q = [];
                                for (; j.zaraz.q.length;) {
                                    const w = j.zaraz.q.shift();
                                    j[l].q.push(w)
                                }
                                r.defer = !0;
                                for (const x of [localStorage, sessionStorage]) Object.keys(x || {}).filter((z => z
                                    .startsWith("_zaraz_"))).forEach((y => {
                                    try {
                                        j[l]["z_" + y.slice(7)] = JSON.parse(x.getItem(y))
                                    } catch {
                                        j[l]["z_" + y.slice(7)] = x.getItem(y)
                                    }
                                }));
                                r.referrerPolicy = "origin";
                                r.src = "../../cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l])));
                                q.parentNode.insertBefore(r, q)
                            };
                            ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                                "DOMContentLoaded", zaraz.init)
                        }
                    }(w, d, "zarazData", "script");
                    window.zaraz._p = async bs => new Promise((bt => {
                        if (bs) {
                            bs.e && bs.e.forEach((bu => {
                                try {
                                    const bv = d.querySelector("script[nonce]"),
                                        bw = bv?.nonce || bv?.getAttribute("nonce"),
                                        bx = d.createElement("script");
                                    bw && (bx.nonce = bw);
                                    bx.innerHTML = bu;
                                    bx.onload = () => {
                                        d.head.removeChild(bx)
                                    };
                                    d.head.appendChild(bx)
                                } catch (by) {
                                    console.error(`Error executing script: ${bu}\n`, by)
                                }
                            }));
                            Promise.allSettled((bs.f || []).map((bz => fetch(bz[0], bz[1]))))
                        }
                        bt()
                    }));
                    zaraz._p({
                        "e": ["(function(w,d){})(window,document)"]
                    });
                })(window, document)
            } catch (e) {
                throw fetch("../../cdn-cgi/zaraz/t"), e;
            };
        </script>
        <script>
            (function(w, d) {})(window, document)
        </script>
        <style type="text/css">
            /* Chart.js */
            @keyframes chartjs-render-animation {
                from {
                    opacity: .99
                }
    
                to {
                    opacity: 1
                }
            }
    
            .chartjs-render-monitor {
                animation: chartjs-render-animation 1ms
            }
    
            .chartjs-size-monitor,
            .chartjs-size-monitor-expand,
            .chartjs-size-monitor-shrink {
                position: absolute;
                direction: ltr;
                left: 0;
                top: 0;
                right: 0;
                bottom: 0;
                overflow: hidden;
                pointer-events: none;
                visibility: hidden;
                z-index: -1
            }
    
            .chartjs-size-monitor-expand>div {
                position: absolute;
                width: 1000000px;
                height: 1000000px;
                left: 0;
                top: 0
            }
    
            .chartjs-size-monitor-shrink>div {
                position: absolute;
                width: 200%;
                height: 200%;
                left: 0;
                top: 0
            }
        </style>
        <script>
            (function(w, d) {
                ;
                w.zarazData.executed.push("Pageview");
            })(window, document)
        </script>
        <script>
            (function(w, d) {})(window, document)
        </script>
    </head>

<body class="sidebar-mini" style="height: auto; user-select: auto; cursor: auto;">
    <div class="wrapper">
        @include('admin.layout.navbar')

        @include('admin.layout.main_sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1302.4px;">
            {{-- @include('admin.layout.dasboard') --}}
            @yield('content')
        </div>



        <!-- Main Footer -->
        @include('admin.layout.footer')
        <div id="sidebar-overlay"></div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../dist/js/adminlte.js?v=3.2.0"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard3.js"></script>

</body>

</html>
