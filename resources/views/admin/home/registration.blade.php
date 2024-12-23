<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwUmVnaXN0cmF0aW9uJTIwUGFnZSUyMiUyQyUyMnglMjIlM0EwLjk1OTY5NzY0OTY5ODQwMzElMkMlMjJ3JTIyJTNBMTUzNiUyQyUyMmglMjIlM0E4NjQlMkMlMjJqJTIyJTNBMzY0JTJDJTIyZSUyMiUzQTc2NyUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZwYWdlcyUyRmV4YW1wbGVzJTJGcmVnaXN0ZXIuaHRtbCUyMiUyQyUyMnIlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmFkbWlubHRlLmlvJTJGdGhlbWVzJTJGdjMlMkZpbmRleDMuaHRtbCUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtNDIwJTJDJTIycSUyMiUzQSU1QiU1RCU3RA==">
    </script>
    <script data-cfasync="false" nonce="8ed6bf06-7407-4e09-a1c1-e55a6a32b8d9">
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
                        df.zaraz._n = "8ed6bf06-7407-4e09-a1c1-e55a6a32b8d9";
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
            throw fetch("/cdn-cgi/zaraz/t"), e;
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

<body class="register-page" style="min-height: 569.6px; user-select: auto; cursor: auto;">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
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
                <form action="{{ route('login.registration') }}" method="post">
                    @csrf
                    <!-- Fullname -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                            placeholder="Full name" name="fullname" value="{{ old('fullname') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('fullname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Retype Password -->
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('retypepassword') is-invalid @enderror"
                            placeholder="Retype password" name="retypepassword">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('retypepassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Agree Terms -->
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="1"
                                    {{ old('terms') ? 'checked' : '' }}>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                            @error('terms')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Submit Button -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>

                <a href="{{ route('login.login') }}" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

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
