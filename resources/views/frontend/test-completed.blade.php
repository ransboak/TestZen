

<style>
    /*! Reset: normalize.css v3.0.2 | MIT License | git.io/normalize */

html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%
}

body {
  margin: 0
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline
}

audio:not([controls]) {
  display: none;
  height: 0
}

[hidden],
template {
  display: none
}

a {
  background-color: transparent
}

a:active,
a:hover {
  outline: 0
}

abbr[title] {
  border-bottom: 1px dotted
}

b,
strong {
  font-weight: 700
}

dfn {
  font-style: italic
}

h1 {
  font-size: 2em;
  margin: .67em 0
}

mark {
  background: #ff0;
  color: #000
}

small {
  font-size: 80%
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline
}

sup {
  top: -.5em
}

sub {
  bottom: -.25em
}

img {
  border: 0
}

svg:not(:root) {
  overflow: hidden
}

figure {
  margin: 1em 40px
}

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0
}

pre {
  overflow: auto
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0
}

button {
  overflow: visible
}

button,
select {
  text-transform: none
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
  -webkit-appearance: button;
  cursor: pointer
}

button[disabled],
html input[disabled] {
  cursor: default
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0
}

input {
  line-height: normal
}

input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  padding: 0
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  height: auto
}

input[type=search] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
  -webkit-appearance: none
}

fieldset {
  border: 1px solid silver;
  margin: 0 2px;
  padding: .35em .625em .75em
}

legend {
  border: 0;
  padding: 0
}

textarea {
  overflow: auto
}

optgroup {
  font-weight: 700
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

td,
th {
  padding: 0
}


/* Basic */

html {
  font-size: 16px;
  font-size: 1rem;
  line-height: 28px;
  line-height: 1.75rem;
}

body {
  background: #fff;
  margin: auto;
  color: #333;
}


/* Font family */

body,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  line-height: normal;
  text-transform: uppercase;
}


/* Button */

a {
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  transition: all 200ms ease;
  -webkit-transform: translate3d(0, 0, 0);
  /* Webkit Hardware Acceleration */
  -webkit-backface-visibility: hidden;
  /* Animation fix */
}

a,
a:visited,
a:active {
  text-decoration: none;
}

.btn {
  display: block;
  margin: 30px auto;
  padding: 10px;
  border: 2px solid #333;
  text-transform: uppercase;
  font-weight: bold;
  background: #333;
  color: #fff;
  width: 60%;
}

.btn:hover {
  background: transparent;
  color: #333;
}

#timer {
  font-size: 16px;
  font-size: 1rem;
}

.copyright {
  font-size: 14px;
  font-size: 0.875rem;
  text-align: center;
}


/* Animation */

.animated {
  -webkit-animation-duration: 1.2s;
  -moz-animation-duration: 1.2s;
  -ms-animation-duration: 1.2s;
  -o-animation-duration: 1.2s;
  animation-duration: 1.2s;
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}

.animated.fast {
  -webkit-animation-duration: 800ms;
  -moz-animation-duration: 800ms;
  -ms-animation-duration: 800ms;
  -o-animation-duration: 800ms;
  animation-duration: 800ms;
}

.animated.slow {
  -webkit-animation-duration: 1.4s;
  -moz-animation-duration: 1.4s;
  -ms-animation-duration: 1.4s;
  -o-animation-duration: 1.4s;
  animation-duration: 1.4s;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}

@-moz-keyframes fadeInUp {
  0% {
    opacity: 0;
    -moz-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}

@-o-keyframes fadeInUp {
  0% {
    opacity: 0;
    -o-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  -moz-animation-name: fadeInUp;
  -o-animation-name: fadeInUp;
  animation-name: fadeInUp;
}


/* Layout: center box */

#logo-box {
  text-align: center;
  padding: 30px;
}

h1 {
  font-size: 30px;
  margin: 0 auto;
}


/* Desktop only */

@media (min-width: 481px) {
  #logo-box {
    position: absolute;
    text-align: center;
    left: 50%;
    top: 48%;
    width: 400px;
    margin-left: -230px;
    height: 440px;
    margin-top: -250px;
    font-size: 20px;
    border: 3px solid #999;
    box-shadow: 6px 6px 0px #333;
  }
  h1 {
    font-size: 36px;
  }
}

.icon {
  height: 128px;
  margin: auto;
  width: 90px;
}
  </style>
  
  <div id="master-wrap">
    <div id="logo-box">
  
      <div class="animated fast fadeInUp">
        <div style="margin-bottom: 3rem">
            <img src="{{asset('TZ-lg.png')}}" alt="" style="width: 7rem; height:8rem;" class="d-none d-md-inline">

        </div>
        <h1>Thank you</h1>
      </div>
  
      <div class="notice animated fadeInUp">
        <p class="lead">Thank you for completing the test. We will get back to you shortly after we finish compiling the results.</p>
        <a class="btn animation" href="">&larr; Back</a>
      </div>
  
      <div class="footer animated slow fadeInUp">
        <p id="timer">
          <script type="text/javascript">
            countDown();
          </script>
        </p>
        <p class="copyright">&copy; TestZen</p>
      </div>
  
    </div>
    <!-- /#logo-box -->
  </div>
  <!-- /#master-wrap -->



