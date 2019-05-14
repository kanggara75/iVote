<div class="login-container login-v2">
    <script type="text/javascript">
        var a = Math.ceil(Math.random() * 10);
        var b = Math.ceil(Math.random() * 10);
        var c = a + b

        function DrawBotBoot() {
            document.write("<h2 style='color:#fff;font-size:19px; margin-top:10px;'>Berapa jumlah " + a + " + " + b +
                " ? </h2>");
            document.write(
                "<input id='BotBootInput' type='text' maxlength='2' size='2' class='form-control' placeholder='Masukkan jawaban anda!' autocomplete='off'/>"
            );
        }

        function ValidBotBoot() {
            var d = document.getElementById('BotBootInput').value;
            if (d == c) return document.getElementById('login-form').submit();;
            return alert('Coba lagi');

        }
    </script>

    <div class="" style="margin-top:-5%;">
        <form id="login-form" action="/" method="post">
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    <div style="margin: 0 auto; ">
                        <center><img width="80px" alt="iraise uin suska" src="/images/logo.png" style="margin: 0 auto;vertical-align:middle;"></center>
                    </div>
                    <div style="clear:both" />
                    <div class="login-title" style="margin:10px;font-size:21px !important;">
                        <strong>iRaise</strong>
                    </div>
                    <div class="login-title" style="margin:10px;">
                        <strong>Integrated Academic Information System</strong>
                    </div>
                    <div class="login-title">Assalamualaikum, Login Please</div>
                    <form action="index.html" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div style="color:white;">
                                        <div id="login-form_es_" class="errorSummary" style="display:none">
                                            <ul>
                                                <li>dummy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group" style="margin-bottom:2px;">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user"></span>
                                    </div>
                                    <input class="form-control" placeholder="User ID Anda" autocomplete="off" autofocus="autofocus"
                                        name="LoginForm[username]" id="LoginForm_username" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                    <input class="form-control" placeholder="Password Anda" name="LoginForm[password]"
                                        id="LoginForm_password" type="password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="login-title">
                                    <script type="text/javascript">
                                        DrawBotBoot()
                                    </script>
                                </div>
                                <h4>
                                </h4>
                                <input id="Button1" type="button" value="Login" onclick="(ValidBotBoot());" class="btn btn-primary btn-lg btn-block" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12" style="margin-top:10px;">
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="col-md-12">

                                <a class="forgot" href="/site/forgot" class="forgot">Lupa Password ?</a>

                            </div>

                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 Integrated Academic Information System </div>

                </div>
            </div>


        </form>
    </div><!-- form -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-65031993-1', 'auto');
        ga('send', 'pageview');
    </script>
</div>
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<!-- END TEMPLATE -->

<script>
    $(function () {

        pageLoadingFrame("show", "v1");
        setTimeout(function () {
            pageLoadingFrame("hide");
        }, 2000);

        $("#loader_v1").on("click", function () {
            pageLoadingFrame("show", "v1");
            setTimeout(function () {
                pageLoadingFrame("hide");
            }, 2000);
        });

        $("#loader_v2").on("click", function () {
            pageLoadingFrame("show");
            setTimeout(function () {
                pageLoadingFrame("hide");
            }, 2000);
        });

    });
</script>
<!-- END SCRIPTS -->
<script type="text/javascript">
    /*<![CDATA[*/
    jQuery(function ($) {
        jQuery('[data-toggle=popover]').popover();
        jQuery('[data-toggle=tooltip]').tooltip();
    });
    /*]]>*/
</script>