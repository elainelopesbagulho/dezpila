<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>dez</title>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Adicionar um favicon -->
  <link rel="icon" type="image/png" href="https://storage.googleapis.com/filtrify-public-assets/filtripage/others/padlock.png">
  <!-- Para compatibilidade com navegadores mais antigos -->
  <link rel="shortcut icon" href="https://storage.googleapis.com/filtrify-public-assets/filtripage/others/padlock.ico" type="image/x-icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      overflow: hidden;
    }

    .background-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      z-index: -2;
      overflow: hidden;
      background-color: #000;
    }

    .background-image-mobile {
      position: absolute;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      opacity: .4;
      background-image: url('./mobile.jpg');
    }

    .background-image-desktop {
      position: absolute;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: top center;
      opacity: .4;
      background-image: url('./desktop.jpg');
    }

    /* Base */
    #background-image-desktop {
      display: block;
    }

    #background-image-mobile {
      display: none;
    }

    /* Media query */
    @media (max-width: 768px) {
      #background-image-desktop {
        display: none;
      }

      #background-image-mobile {
        display: block;
      }
    }

    .modal-container {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      border-radius: 12px;
      text-align: center;
      z-index: 1;
      max-width: 500px;
    }

    @media (max-width: 768px) {
      #modal-container {
        max-width: 620px;
      }
    }

    .modal-image-desktop {
      border-radius: 12px;
      object-fit: cover;
      width: 100%;
      display: block;
    }

    .modal-image-mobile {
      border-radius: 12px;
      object-fit: cover;
      display: none;
      max-width: 300px;
    }

    /* Base */
    #modal-image-desktop {
      display: block;
    }

    #modal-image-mobile {
      display: none;
    }

    /* Media query */
    @media (max-width: 768px) {
      #modal-image-desktop {
        display: none;
      }

      #modal-image-mobile {
        display: block;
      }
    }
  </style>
  <!-- Start Filtripixel tracking (filtripixel.minify.js) -->
  <!-- Place at the end of the head and before the </head> tag -->
  <!-- <script data-render-head="true" src="https://static.filtripixel.io/filtripixel.minify.js?pixelId=80014d29-5395-456f-ae50-ba677e5fce7a"></script> -->
  <!-- End Filtripixel tracking (filtripixel.minify.js) -->
</head>

<body>
  <div class="background-container">
    <div id="background-image-desktop" class="background-image-desktop"></div>
    <div id="background-image-mobile" class="background-image-mobile"></div>
  </div>
  <span style="display: none;">
    This website uses cookies to improve the user experience. By continuing to browse, you agree to the use of cookies.
  </span>
  <a href="https://oficialdezpila.com/" target="_self">
    <div id="modal-container" class="modal-container">
      <img id="modal-image-desktop" src="https://storage.googleapis.com/filtrify-public-assets/filtripage/presellTypes/pt/cookies_pt_desktop.png" alt="marketing" class="modal-image-desktop">
      <img id="modal-image-mobile" src="https://storage.googleapis.com/filtrify-public-assets/filtripage/presellTypes/pt/cookies_pt_mobile.png" alt="marketing" class="modal-image-mobile">
    </div>
  </a>

  <span style="display: none;">
    Privacy Policy: We collect and store user data solely for service improvement and security. Your information is never shared with third parties without consent. By using our services, you agree to this policy.
  </span>

</body>

</html>