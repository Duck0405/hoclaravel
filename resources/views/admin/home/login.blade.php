<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script defer="" referrerpolicy="origin" src="../cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjIlMkMlMjJ4JTIyJTNBMC4xMjU5NTI1ODM3NDQ4MzY1MyUyQyUyMnclMjIlM0ExNTM2JTJDJTIyaCUyMiUzQTg2NCUyQyUyMmolMjIlM0E2OTUlMkMlMjJlJTIyJTNBNzY3JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGZXhhbXBsZXMlMkZsb2dpbi5odG1sJTIyJTJDJTIyciUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRmluZGV4My5odG1sJTIyJTJDJTIyayUyMiUzQTI0JTJDJTIybiUyMiUzQSUyMlVURi04JTIyJTJDJTIybyUyMiUzQS00MjAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE">
    </script>
    <script data-cfasync="false" nonce="09d2afd1-4f61-4aed-920b-04ea26bd5302">
        try {
            (function(w, d) {
                ! function(df, dg, dh, di) {
                    if (df.zaraz) console.error("zaraz is loaded twice");
                    else {
                        df[dh] = df[dh] || {};
                        df[dh].executed = [];
                        df.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        df.zaraz._v = "5847";
                        df.zaraz._n = "09d2afd1-4f61-4aed-920b-04ea26bd5302";
                        df.zaraz.q = [];
                        df.zaraz._f = function(dj) {
                            return async function() {
                                var dk = Array.prototype.slice.call(arguments);
                                df.zaraz.q.push({
                                    m: dj,
                                    a: dk
                                })
                            }
                        };
                        for (const dl of ["track", "set", "debug"]) df.zaraz[dl] = df.zaraz._f(dl);
                        df.zaraz.init = () => {
                            var dm = dg.getElementsByTagName(di)[0],
                                dn = dg.createElement(di),
                                dp = dg.getElementsByTagName("title")[0];
                            dp && (df[dh].t = dg.getElementsByTagName("title")[0].text);
                            df[dh].x = Math.random();
                            df[dh].w = df.screen.width;
                            df[dh].h = df.screen.height;
                            df[dh].j = df.innerHeight;
                            df[dh].e = df.innerWidth;
                            df[dh].l = df.location.href;
                            df[dh].r = dg.referrer;
                            df[dh].k = df.screen.colorDepth;
                            df[dh].n = dg.characterSet;
                            df[dh].o = (new Date).getTimezoneOffset();
                            if (df.dataLayer)
                                for (const dq of Object.entries(Object.entries(dataLayer).reduce(((dr, ds) => ({
                                        ...dr[1],
                                        ...ds[1]
                                    })), {}))) zaraz.set(dq[0], dq[1], {
                                    scope: "page"
                                });
                            df[dh].q = [];
                            for (; df.zaraz.q.length;) {
                                const dt = df.zaraz.q.shift();
                                df[dh].q.push(dt)
                            }
                            dn.defer = !0;
                            for (const du of [localStorage, sessionStorage]) Object.keys(du || {}).filter((dw => dw
                                .startsWith("_zaraz_"))).forEach((dv => {
                                try {
                                    df[dh]["z_" + dv.slice(7)] = JSON.parse(du.getItem(dv))
                                } catch {
                                    df[dh]["z_" + dv.slice(7)] = du.getItem(dv)
                                }
                            }));
                            dn.referrerPolicy = "origin";
                            dn.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(df[dh])));
                            dm.parentNode.insertBefore(dn, dm)
                        };
                        ["complete", "interactive"].includes(dg.readyState) ? zaraz.init() : df.addEventListener(
                            "DOMContentLoaded", zaraz.init)
                    }
                }(w, d, "zarazData", "script");
                window.zaraz._p = async cY => new Promise((cZ => {
                    if (cY) {
                        cY.e && cY.e.forEach((c$ => {
                            try {
                                const da = d.querySelector("script[nonce]"),
                                    db = da?.nonce || da?.getAttribute("nonce"),
                                    dc = d.createElement("script");
                                db && (dc.nonce = db);
                                dc.innerHTML = c$;
                                dc.onload = () => {
                                    d.head.removeChild(dc)
                                };
                                d.head.appendChild(dc)
                            } catch (dd) {
                                console.error(`Error executing script: ${c$}\n`, dd)
                            }
                        }));
                        Promise.allSettled((cY.f || []).map((de => fetch(de[0], de[1]))))
                    }
                    cZ()
                }));
                zaraz._p({
                    "e": ["(function(w,d){})(window,document)"]
                });
            })(window, document)
        } catch (e) {
            throw fetch("../cdn-cgi/zaraz/t"), e;
        };
    </script>
    <script>
        (function(w, d) {})(window, document)
    </script>
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

<body class="login-page" style="min-height: 495.6px; user-select: auto; cursor: auto;">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('login.login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" value="{{ $_COOKIE['email'] ?? '' }}" required=""
                            placeholder="Email" fdprocessedid="0ezw9" id="yourEmail" name="email">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>

                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control"
                            @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif required=""
                            placeholder="Password" fdprocessedid="vginal" id="yourPassword" name="password">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="rememberMe" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" fdprocessedid="4fobgh">Sign
                                In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{route("login.forgot")}}">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{route("login.registration")}}" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>


    <div class="__ruler_EXT_MAIN" style="display: none;">
        <div class="__rulerX __ruler_EXT">
            <ul class="__ruler_X">
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
            </ul>
        </div>
        <div class="__rulerY __ruler_EXT">
            <ul class="__ruler_Y">
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
                <li style="box-sizing: initial;"></li>
            </ul>
        </div>
    </div><span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
</body>


</html>
