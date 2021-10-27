<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Docker App | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

<script type="text/javascript" src="chrome-extension://aggiiclaiamajehmlfpkjmlbadmkledi/popup.js" async=""></script><script type="text/javascript" src="chrome-extension://aggiiclaiamajehmlfpkjmlbadmkledi/tat_popup.js" async=""></script></head>
<body class="login-page" style="min-height: 496.391px;">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Docker App</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please login and start your session</p>

      <form action="{{ url('login') }}" method="post">
          @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if($errors->first('email'))
        <p style="color:red">{{ $errors->first('email') }}</p>
        @endif
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @if($errors->first('password'))
        <p style="color:red">{{ $errors->first('password') }}</p>
        @endif
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
              Remember me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
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
<script src="../../dist/js/adminlte.min.js"></script>


</body><template id="transover-popup-template">
  <style>
    .pos_translation {
      padding-bottom: 3px;
    }

    strong {
      font-weight: bold;
    }

    .rtl {
      direction: rtl;
    }

    main {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: 300;
      letter-spacing: initial;

      background: #fcf7d9;
      text-align: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ccc;
      box-shadow: rgba(0,0,0,0.2) 0px 2px 5px;
      border-radius: 5px;
      padding: 6px 8px 3px 8px;
      position: fixed;
      z-index: 2147483647;
      top: -1500px;
      left: 0;
      box-sizing: content-box;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;

      /* To fix the following issue:
      1. Have translate on hover enabled (opposed to translate on click).
      2. Wisit a website that has a dropdown menu that opens on hover.
      3. Open the menu.
      4. Hover over a word within that menu.
      5. Incidentally move the cursor over the TransOver popup.
      The hover menu gets closed.
      */
      pointer-events: none;
    }

    .pos_translation {
      font-size: 1em;
      line-height: 1.2em;
    }

    .red {
      color: red;
    }

    .from_lang {
      color: grey;
      font-size: 0.8em;
      line-height: 1.2em;
      margin-top: 2px;
      margin-bottom: 3px;
    }
  </style>

  <main></main>
</template><template id="transover-tat-popup-template">
  <style>
    #tat_input_container {
      display: flex;
      margin-bottom: 10px;
    }

    #tat_input_container label {
      line-height: 26px;
    }

    #tat_input {
      margin-left: 5px;
      flex-grow: 2;
      font-size: 14px;
      line-height: 20px;
      border-radius: 2px;
      border: 1px #ccc solid;
      padding-left: 5px;
    }

    #tat_submit_container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    #tat_submit_container select {
      margin-left: 5px;
    }

    #tat_submit {
      width: 45px;
      margin-left: 5px;
    }

    #tat_to_lang {
      width: 150px;
    }

    #swap_languages {
      margin-left: 5px;
      margin-right: 5px;
      width: 24px;
      height: 24px;
      background-repeat: no-repeat;
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEKElEQVR4nL1Vb0xbVRQ/97Xre23pn9FSNmBQGEqGMJQPIyU6MkMczf6gbAyNk5lo9gkTdTPGLPswzRITjcYPftREiYQ/g5EVZZEwNt3ELBmiI/wLqB1rFdaWDaSjfe+e44cHpUAL0URPcnPuu/e887vn3PM7F+A/Fs1mBi+fbNBXPHNgv6ShCa/X+48BhI02T7522lbmrrtsTct8RRCETQ+TSLTJNhreOuvcXXG4y2C1F874vL25BcWP5hWWKgQEAABKNBJZmAvNzIaCi1d6vqVkfliixdfPnH+8eO9BzxaDKQuRgCMRR2KcYhoQgaKRh/PBO+O90yM/fhTy/faD51InrvW1LuzT5z6sLKo4/LVGZ3AoSMARQEEChYgpSKAgMa5qQKaRREvaLmteST0jlHIc5usjw8M8KUBN3Yu2soP1fYLOkLrkDJadxb5pWQMgESASIDHBsC3vSR4Ja3fYUq6OjY1SQoBUq3kxHPT/lJpdUAVaMYUjMQWJKbR8clA1qWniBAyJGKpgTHLklC3cHb469POANyHA1NQUDN66+atNxCuWjJ2VgmhUI+EICkfkiKQOIiRgSKDexxIAAtMQoikjRbg4Pj6OAEmq6KsvPhuok6P7H3n6+ZaUdGep/5fv+vyDfe8AQCy/Wslo3+567n3Rnl1CKgAhEOgceeU6UbQCQCApAABAS1PjZC2XD2S7qr9EpPCD+7MDPT09SrzNcYNFdpQfuUgEAhIBEQAJGpEBmDcFAABoa2mePopYK5pt+2RZXleCi0HftTueTx4jIi1jasUTESHiH8s2MR68cea9Ap1kLCHVCJAAwnOh6ZnfR79vb29f5fzZupcMzpLyd32D1862tTY/3OiQsQiMVvuhQlfVB5xWiPUgOO0LTE3sAQD/qr+4rE0v2vsm0xmdxwTh1dbmpvubAoT+nLotq45haZBoScsorjrRkbn7qTZgQjSWZ0JJQYKtO5+oYaIx7ZigeaG1qdGfCCCWopqjtcZ99W+P64yWDI5EnFTGokou4kgMCUite4L4eTjgG/Jfv1Db3Pj56FqAGA9Ghofl/DynvDV7l3ulJQAotBRRHKEwvvaJQCOZ0vQZ+dW5Nn3/0OCtuwkBAAC228yDW/TGfL0ts4gvMZivtIV49sJaMNLqTJGQb36bReqdnJxM3CrGRkd5ulFzWYkuSnr7jlICjSbOGSzPOREgrKwpclS+13/h47Bv7LzH41lVVQnbtdvt1phT7SXWnKLjkj1rj6DTpxKBQKS+BgRMEB25+UjElMW/Fu7daD0XCfk/7ejoCCe95ETicrmYyWQSRVHUQdzrJ6WYTVmHTnmj88HZwI2WU5G5QFNnZ2c0kY8NAZKJu/qI2Vl54nawv60hPDf7TVdXF09m+6/eWafTyWlm4tLcbOBmd3f3uhbyv8rfG8mfJ968lFgAAAAASUVORK5CYII=);
      cursor: pointer;
    }

    #swap_languages.disabled {
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEIklEQVR4nL1VX0hbVxj/7k0w6TS3QVck+qC2/tfhiMyRUR8GlU4XNzJYsFBUluXBh/Uho0PBPWww6TbEpzGz+pKBC2OS2tkHRbQd3ZiIdkoVghptdO2MRmP+3Xtzb+759nBNFl0S8WH7weF+nO+7v985h/P7DsB/DMVZBTab7YLJZLouCMKG1+s9twCdLdnf31/Q09MzWVZWZqFp+szFpIMyU2JgYKC0s7Pzga6oqHZ9fX2msbGx0mAwxBN5juNi+/v7e36/n5+cnMRzqQ4NDb3q9/t3JEnCuCRhPB4noiiiIIgkJggYi8WQ53lycHgYnJmddfX29l41mUxZTyMJu91+LRKJBCSZGEVRREEUiSATE57nkeM4ZFmWRKNRjEQieHQUFO+OjAyYzWbVab4T59rd3V1gs9ke5ubm5iMAACJgckBKfHIAIF1TW3s1HAopc3JyHrndbkwrkJeXx29sbPyh1+vfuqBW5yEChYDUMVHql0LyT0wQAZFQlZVVry8sLDxaXFzwphXY3t6Gubm5zXA4PFtXV3eNYZh8RASJEJDiEiESQXlIeCxMISIQJICIFEVRCkmSNKIo3FtbWyMAGW6R3W5/wvP89Y9u3fqxprpG/2Bi4qHL5eoDAClRwzDMyxaL5U55RWUDIgEkiAQRqqqr31CpVFoA8GcUAABwOBweQRDetlgs30uEsIFA4Mn09HQ8tSY/v0C0Wq33CCItHx8BhUKhAgDmTAEAAKfT6ZMk6X2dTvemKIrkdP7Zs61f+vp66xBRSVEUAAAgIhJC/krUUIlgcHCwimGYBvlWyNjb2/MtLS09HhsbO0H+gcXyUktLy+c/37//qdPp5LItMrkDnU7X3tHR8fWxACIitbOz83xlZaUJAF6k/hTjeeU77e02RqMppWn6w9HR0aMzBTwez1OUAQmN4uLiotu3P3EZjcafaJoWjueBEKImBKG5ufk9jUZzSalU3nA4HC8yiQAAgNlszt3d3X0utwSByO0ghhzHI8txJMqyGIlESTgcwVAojMFgiBwdBfEwEMCFxcWnVqu1Oh1v0gerq6tiSUmJqG9sbEXZtgljATltNJKcpxAJXGQuXqqvf+VdmqZ/n5+f/zOtAACAWq1eYhim/HJZWT1mEiAJc8nuRSLHOSqVZmtrM6xUKmc8Hk/6VuF2uyVBECZZllWXV1ToFbRCkeJUOBZIkCdjnuPEkbvfDS0vL38xMTFx4lZRkAatra2KwsLChteamm5euXylSW5+CTMhUEDRVdVV5YQgFQoGo8P24c+2vd5vXC4Xe5orrUACBoOB0mg0KpVKlQMpr59Wq9Xc+fIrr8/nC9iHv/3Y5/P9MD4+LmTjOhfMZjPz+NffvF1dXe1GozHrU5p1B5nQ1tam1Gq1pQcHB5tTU1P/aiH/K/4G7RvFhRjTPe0AAAAASUVORK5CYII=);
      cursor: auto;
    }

    main {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: 300;
      line-height: 19px;
      letter-spacing: initial;

      background: #fcf7d9;
      text-align: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ccc;
      box-shadow: rgba(0,0,0,0.2) 0px 2px 5px;
      border-radius: 5px;
      padding: 10px 12px 12px 12px;
      position: fixed;
      z-index: 2147483647;
      top: 15px;
      right: 15px;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    #disable_on_this_page_container {
      margin-bottom: 8px;
      color: blue;
    }

    #disable_on_this_page {
      position: relative;
      vertical-align: middle;
      bottom: 1px;
      margin-right: 5px;
    }

    #top_row_container {
      display: flex;
      justify-content: space-between;
    }

    #tat_close{
      width: 12px;
      height: 12px;
      background: -webkit-linear-gradient(-45deg, transparent 0%, transparent 46%, darkgrey 46%, darkgrey 56%,transparent 56%, transparent 100%), -webkit-linear-gradient(45deg, transparent 0%, transparent 46%, darkgrey 46%,  darkgrey 56%,transparent 56%, transparent 100%);
    }
  </style>
</template>
</html>