<?php setcookie("FBpixel", $_GET["fbpixel"]); ?> 
<!DOCTYPE html>
<html lang="ro" >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <link href="img/product.png" rel="icon" type="image/x-icon">
  <link href="css/style.css" media="all" rel="stylesheet" type="text/css">

  <!-- <link rel="stylesheet" href="css/main.min.css"> -->
  <!-- <link rel="stylesheet" href="css/origin.min"> -->
  <link rel="stylesheet" href="css/header.css">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Organizația Internațională a Sănătății</title>
  <script src="js/jquery-3.7.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
    <script>
      (function () {
        let params=(new URL(document.location)).searchParams;
        let block = '';
        params.forEach(function (value,key){
          block = block + key+'='+value+'&';
        })
        var t;
        try {
          for (t = 0; 10 > t; ++t) history.pushState({}, "", document.location);
          onpopstate = function (t) {
            t.state && location.replace("domonetka/index.php?cid={clickid}") //тут прописаний шлях до ленда домонетки мітки під binom, якщо буде під keitaro тоді з таким хвостиком ?subid={subid}
          }
        } catch (o) {
        }
      })();
</script>

</head>

<body>
  <div class="container">
    <header>
      
      <div class="middle__header">
        <div class="middle__header__wrap">
          <div class="middle__header_left">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580.82 177.96" class="svg replaced-svg">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #0093d5;
                    }
                  </style>
                </defs>
                <title>World Health Organization</title>
                <g id="Layer_2">
                  <g id="ENGLISH">
                    <path class="cls-1"
                      d="M164,32.58c3.86,4.6,10.61,7.31,14.56,11.92-2.83-13.63-13.35-24.76-25.79-27.42C158.84,21.65,160.15,28,164,32.58ZM14.48,67.13c8.57-18.65,21.36-14.7,26.77-32.47-3,5.45-17,7.75-23.51,21.72,3.31-8.3,1.65-21,7.25-27.85C8.25,40.88,15.38,60.86,14.48,67.13ZM30,111.86c1.54,7.26-3,17.74,4.2,27.76C26.76,131.28,11,129.16,4.58,116.48c8,31,29,24.6,38.39,31.33C35.21,136.66,41.56,129.25,30,111.86Zm-2.41,19.45C23,114,31.18,108,24.93,91.4c-.65,9.36-6.89,13.92-2.68,31C14.82,107.94,3.33,102.54,0,92.6.23,119.78,22.07,123.81,27.59,131.31Zm33.54,29c-6.43-8.9-2-13.93-20.1-30.09,3.82,5.9-.12,13.32,12.06,24.86-11.92-7-28.36-4-36.29-13.41C30.42,167.74,54.35,157.1,61.13,160.34Zm87.42-5.23c12.18-11.54,8.24-19,12.06-24.86-18.06,16.16-13.67,21.19-20.1,30.09,6.78-3.24,30.71,7.4,44.32-18.64C176.91,151.09,160.47,148.08,148.55,155.11Zm18.89-15.49c7.17-10,2.66-20.5,4.2-27.76-11.56,17.39-5.21,24.8-13,36,9.44-6.73,30.36-.35,38.39-31.33C190.62,129.16,174.88,131.28,167.44,139.62Zm-28.86,21.95a89.2,89.2,0,0,0-19.75-3,47.75,47.75,0,0,0-18,3.06,47.78,47.78,0,0,0-18-3.06,89.2,89.2,0,0,0-19.75,3c-10.87,2.89-20.26,5.13-28.45,1,7.85,7,17,9.45,30.23,8,11-1.18,19.91-6.69,30.29-6.61h.41a55.47,55.47,0,0,0-17.12,13.31l5,.67s5.27-10.59,17.39-13.35c12.12,2.76,17.39,13.35,17.39,13.35l5-.67A55.63,55.63,0,0,0,106.1,164h.41c10.38-.08,19.27,5.43,30.28,6.61,13.23,1.43,22.39-1.06,30.24-8C158.84,166.7,149.45,164.46,138.58,161.57ZM25.67,72.63C21.19,81.23,14.23,83.2,15,101,11.22,85.18,2.24,79.32,2.35,69.23c-6.24,26.3,10.44,29.42,14.72,40.44C16.44,93.88,26.52,90.69,25.67,72.63Zm6.26-20.3c-1.56,2.18-2.65,3.11-6.81,6.54A33.77,33.77,0,0,0,13,78.64c.43-9.64-5.53-23.49-1.57-33.59-15.33,21.65.88,34.62,1.45,42.46C16.86,72.42,26,72.3,31.93,52.33Zm156.7,26.31a33.82,33.82,0,0,0-12.11-19.77c-4.16-3.43-5.25-4.36-6.81-6.54,5.93,20,15.07,20.09,19,35.18.57-7.84,16.78-20.81,1.44-42.46C194.15,55.15,188.2,69,188.63,78.64Zm13,14c-3.33,9.94-14.82,15.34-22.25,29.84,4.21-17.12-2-21.68-2.68-31-6.25,16.62,2,22.59-2.66,39.91C179.57,123.81,201.41,119.78,201.64,92.6ZM176,72.63c-.85,18.06,9.24,21.25,8.6,37,4.29-11,21-14.14,14.72-40.44.12,10.09-8.86,16-12.61,31.72C187.41,83.2,180.45,81.23,176,72.63Zm-138.34-40c3.87-4.6,5.18-10.93,11.24-15.5-12.44,2.66-23,13.79-25.79,27.42C27,39.89,33.76,37.18,37.62,32.58Zm122.77,2.08c5.41,17.77,18.2,13.82,26.76,32.47-.89-6.27,6.24-26.25-10.5-38.6,5.6,6.86,3.94,19.55,7.25,27.85C177.41,42.41,163.44,40.11,160.39,34.66ZM117,44.75A41.92,41.92,0,0,0,106.77,42c0,.75,0,1.52,0,2.28a40,40,0,0,1,9.4,2.58A6,6,0,0,0,117,44.75Zm-2.59-22,.68-.61-1.3-.55-3.42-.07-.89.62-2-.17,0,.49a34.75,34.75,0,0,1,3.52.37l1.67-.15ZM107.78,96.5c0-.58-.77-1.15-1.91-1.69h-.21c0,.47,0,2.79-.07,3.92C107,98.1,107.78,97.42,107.78,96.5ZM68.16,53a10.92,10.92,0,0,1,.29-1.25,5.79,5.79,0,0,1-1.4.14Zm32.73,100.6A69.76,69.76,0,0,0,108,14.47c0,.13,0,.27-.08.4-.14.68-.27,1.29-.37,1.83a67.35,67.35,0,0,1,40.63,19l-7.7,7.7.29-1.36-1-.44-1.38-.08.29-.89-.93-3.15-1.92-2.11-6-3.17-.52.55-1.09.32a18,18,0,0,1,3.18,10.11c0,.47,0,.92,0,1.37l3,3.75-1.4.32.93,1.4-2.63,2.62-1.06-2a17.92,17.92,0,0,1-2,3.93l.59.54-8.11,8.11c-.49-.47-1-.92-1.52-1.35-.78.36-1.57.69-2.38,1l.69.54-.41.41-1,.53-.35,1-.59-.59-1.71.57.47.75,1.18-.31.77.06.06-.42.59-.3.18-.35,1.06-.3.83,0c.16.14.33.29.48.44L115.81,68l-.24-.34-3.36.55-.75.75-.73.09,2.08-2-.74-.37-1.95,2.6.57-.06,0,1,.71.28.14,1-1.17-.23-1.22.22-3-1.51s-.16,7.92-.24,11.9c7,2.34,14.35,5.72,14.35,14.6a11,11,0,0,1-5,9.38h0l-.15.1h0l-.22.15c-2.82,1.86-6.44,2.86-9.58,3.84,0,0-.09,6.22-.09,6.22,5,2.48,11.05,6.09,10.49,16.42-.07,2.54-1.06,3.24-1.91,3.47h0a52.52,52.52,0,0,1-9,1.43c0,.8,0,1.56,0,2.27a55.87,55.87,0,0,0,34.78-15.36l8.1,8.1a67.37,67.37,0,0,1-93.3.19l8.1-8.1a55.83,55.83,0,0,0,34.29,15.15c0-.7,0-1.46,0-2.27A53.59,53.59,0,0,1,64.05,123l2.16-2.17,3,.34,1.58-1.7,4.14.14.61-1.43-.15-.61A42,42,0,0,0,96.48,126c0-.88,0-1.65,0-2.28A39.93,39.93,0,0,1,73.76,113.3l8.11-8.11a28.85,28.85,0,0,0,6.57,4.41,7.67,7.67,0,0,1,.82-2.13,26.22,26.22,0,0,1-5.79-3.89l8.13-8.12a14.86,14.86,0,0,0,4.34,2.41c0-.8,0-1.65,0-2.44a12.47,12.47,0,0,1-2.68-1.59l2.29-2.29c-.8-.24-1.62-.5-2.42-.78l-1.54,1.54a12.4,12.4,0,0,1-1.94-2.89,27.57,27.57,0,0,1-4-2.14A15.69,15.69,0,0,1,78.06,73.5,16.54,16.54,0,0,1,81.34,63l-8.08-8.08A39.91,39.91,0,0,1,94.9,44.28c0-.78,0-1.55-.05-2.28A42.18,42.18,0,0,0,71.66,53.34L70.29,52c-.31.55-.67,1.24-1.09,2.11l.86.87A42.13,42.13,0,0,0,58.6,83.17H47.13A53.62,53.62,0,0,1,62,46.83l3.64,3.65a4.61,4.61,0,0,0,.52,0,5.5,5.5,0,0,0,2.07-.6l-4.63-4.63a54.51,54.51,0,0,1,8-6.38,15.06,15.06,0,0,1,.57-1.68,26.93,26.93,0,0,1,1.75-2.35A56,56,0,0,0,62,43.63l-8.1-8.1A67.2,67.2,0,0,1,94,16.73c-.06-.28-.1-.5-.1-.5-.1-.53-.22-1.12-.33-1.74a69.77,69.77,0,0,0,7.28,139.15ZM116,105.45v-.06l0,0Zm33.78-68.12a67.26,67.26,0,0,1,18.65,45.84H156.92a55.67,55.67,0,0,0-6-24.48l.1-.2.79.42.19-.61L150,54.71l-2.43-3.36L144.69,49c-1-1.22-2-2.4-3.07-3.54ZM135.13,52l2.75.12.66.79-.33,1.17L142,56.48l.75-.09,4.9,5.6,2-.7a53.4,53.4,0,0,1,5,21.88H143.19a41.78,41.78,0,0,0-1.07-8.72l.53-.71.71-3.59-.54-3.86-1.38-4.44-3.2-4.68.78.41.39-.39-2.57-1.74-.17.57,2.57,3.67,1.45,3,1,3,.33,2,.53,3.38-1,.07s-1.11-2.07-1.45-2.92l.51-.77-1-1.4v-1.4l-.7-.88-.87.11c-.31-.58-.64-1.15-1-1.71l.62.31.16-.16-.33-.72.75-.42-.34-.42-1.11.42.41-1.74-.66-.38-.59,1.39a42.64,42.64,0,0,0-4.17-5.3Zm-2.3,26.87,2.06-1.12,2.1-.32.46-1,1.17-.7.45-1,.36-1.69c.17.59.32,1.2.46,1.81l-1.11,3.31,0,1.12,1.61-2.15a38.74,38.74,0,0,1,.57,6h-10l-.23-.87,1.17-.93.23-.56.51-.38,1.36-.14.14-.6ZM119.07,71l1-.24,0-.24-1-.69.35-2.16,1.23-1.23a27.16,27.16,0,0,1,2.13,2.77l-.43,1.33-1.12-.8-.85.23.42.79h.42l-.47,1.17-.32-.47Zm4.39,38.07-2.48-.7-.74.27-1.4-1.07-1.32-.47c.65-.47,1.28-1,1.89-1.48l2,1.44,1.56.82.77.77ZM122.2,64.85l8.11-8.11a40.43,40.43,0,0,1,5,6.74l-1,.28.05,1.81,3,1.92a39.2,39.2,0,0,1,1.9,5.12l-.53.78-1.1.7-.27,1.68-.75.42-.63.74-.63-.23-1.12,0,.65-.88.47-2.29.74-.46L134,70.92l-1.63.55L132,73l-1,1.11-1.07-.88-.38-.94.61-.38.34.62.5-.19-.22-1-.71,0-.05.42-.47.09L127,68.86l-.86-.65.33-.36.76-.26-.7-.28s-.89.2-1,.2l.51.64-1.28,0A27.71,27.71,0,0,0,122.2,64.85ZM126.33,108l-1.1-1.1.84-1.09,1.06-2.16-.41-.6.7-1.6-.08-1.44-.42-1.49-1-.35-.37.84-.6-.16a27.18,27.18,0,0,0,2.4-4.19l1-.44.58-.78.28.32.7-.84-.56-.7.51-.14.94.38,1.77,0,1.07-.56,2.8-.74-.53-.93-.18-1.13,1.5.66.56-.33-.28-1.16L135.7,89l-2-.42-1.54-3.15h8.77a39.92,39.92,0,0,1-11.07,26.08l-1.2-1.21.52-1.61-.94-3.55Zm1.55,22.37,1.08-2.32-.42-1,1.59-1.4v-.84l-1.36-.85,1.12-2.23,1.68-2.2-1.68-1.81h-1.26l-.78-1.27c.67-.56,1.34-1.13,2-1.73l8.11,8.11A54.38,54.38,0,0,1,127.88,130.38ZM138,119.67l.9-1-.85-4.44-.58-.23.36-.75-1.92-.6-.37,1.58-.19,2-.4.37-3.5-3.5a42.17,42.17,0,0,0,11.74-27.67h11.47a53.55,53.55,0,0,1-15.1,35.78Zm3.16,3.15a55.84,55.84,0,0,0,15.77-37.38h11.46a67.28,67.28,0,0,1-19.12,45.49Zm-69-11.11c-.83-.86-1.62-1.75-2.38-2.68l.35-2.9-1.21-2.78L68.62,99l-1.36-2.64.28-1.64L65.9,91.57l-1.43-.72.58-1.67-.59-1.32.59-1.51h1.57l.55-.91h2.68l.41.79L69.76,89l-.32.47,1,2.19-.66.36-.46-.58-.2.22.46,1.3.79,1.52.37,0L71,93l-.38-.5,0-.92-.12-1.9L71,86.34l-.54-.9h1.92a28.48,28.48,0,0,0,7.89,18.17ZM64.56,89.3,63.48,91H61.62l-.15-.11a40.74,40.74,0,0,1-.58-5.45h3.45l-.83,2.76Zm3.77-7.87.21-2.28,1.36-.79,2.43.43.37.44a27,27,0,0,0-.37,3.94H69.58ZM80,90l.57-.29L82,90.84l-.65.53,1.69,1.12L83,91.29l.9-1.49.94,1,1,1.38L84,92.56l.79,1.58L86,93.5,85.88,93l.9-.61.53-2.5a14.91,14.91,0,0,0,2.63,4l-8.1,8.1a26.21,26.21,0,0,1-7.1-15.22l1.66,1.77,1.56,0ZM71.66,56.54l8.1,8.11a28.91,28.91,0,0,0-4.3,6.19l-.56,0-1.14.35-.4,0-1.21,1.13L73.68,72l1.38-.35-.24.53-1.21.74H73l-1.78,1.36-1.72-.14-2.49,4.64.49.93-1.35,1.5-.21,2H60.86A39.92,39.92,0,0,1,71.66,56.54ZM61.19,117.69l2.57,1.51.53.36-1.86,1.86q-1.3-1.35-2.52-2.79ZM58.62,85.44c0,1.11.14,2.22.26,3.31l-1.4.32-.29,1.42-2.92,3.72.07,5.11-3,1H49.7a53.48,53.48,0,0,1-2.56-14.89ZM47.3,100.26l-.67-.13L46,99.42l-3.22-.28,1,1.35-3-.56.78-.72-.73-.72-2.15.94-.77,1.42.3,3.27L40.69,110l1.19,1.86.68.25-1.87-3.55-.41-1.81.42-.44-.26-1,1.13.15,1.73,2.62.43.17,0-1.91.7.41.15,1,1.82.48.76-.54.26.18,0,1.39.8,1,1,.22,2.12,3.59,1.29.36.4-1.68a56.32,56.32,0,0,0,7.9,10.2l-8.1,8.1A67.32,67.32,0,0,1,33.41,85.44H44.88A55.83,55.83,0,0,0,47.3,100.26Zm5-63.13,8.1,8.1A55.91,55.91,0,0,0,44.86,83.17H33.4A67.28,67.28,0,0,1,52.25,37.13Zm83-4.18-.69-1.12-1.5-.75-1.17.89,1.5.8L135.05,34ZM128.29,65.3l0,.88,2-.59.61-1.21-1.37-1.8.73-1.1,1.85,1.32.34-.27-.37-.26-.42-.8.76-.44-.74-1-1.74.88L129.36,62l-.35.95.77,1.29-.28.6Zm-82.9,51.42.15-.52-1-2.24-1.22-.45ZM92.27,73.64c0,1.92,1.17,3.28,3.3,4.45,0,0,0-.33,0-.86l-1.34-1.34.71-1.29.58-.16c0-2.24-.09-4.75-.1-5.11l-.1,0C93.34,70.43,92.27,71.75,92.27,73.64Z">
                    </path>
                    <path class="cls-1"
                      d="M105.07,123.32c3.6,1.82,6.92,4.34,8.31,9.11.61-7.9-3.82-11.32-8.21-13.63C105.17,118.81,105.07,123.33,105.07,123.32Z">
                    </path>
                    <path class="cls-1"
                      d="M129,43.2c0-7.17-5.2-15.13-17.95-17.94a30.69,30.69,0,0,0-3.89-.45c0,1.08-.08,3.56-.08,3.56,0,.78-.08,3.65-.1,4.27a18,18,0,0,1,2.45.34c7.41,1.77,10.06,6,10.06,10.22,0,6.81-5.82,9.38-13,11.32l-2.37.62c-2.17.54-4.4,1.06-6.61,1.65-.79.21-1.57.44-2.35.67h0c-7.93,2.42-14.75,6.24-14.75,16s7.78,13.34,15.37,15.68q-.07-4.19-.16-8.42c-3.35-1.57-5.71-3.64-5.71-7.12s2.15-5.46,5.44-7c.73-.33,1.51-.63,2.34-.91,1.89-.64,4-1.19,6.25-1.73l2.37-.57h0C117,60.89,129,57.54,129,43.2Z">
                    </path>
                    <path class="cls-1"
                      d="M90.56,111.67c0,3.92,2.9,6,5.79,7.67,0-.66-.12-6.73-.12-6.83.06-1.21,1.23-1.94,2.18-2.39a47.05,47.05,0,0,1,4.59-1.75c.86-.3,1.59-.59,2.41-.83h0c5.8-1.75,12.51-4,12.51-11s-5.75-10-12-12.13c0,2.25-.11,5.54-.16,7.81,2.66,1,4.42,2.31,4.42,4.32,0,2.53-2.7,4-4.61,4.72-.8.31-2,.71-2.35.82-1.54.48-3.2,1-4.75,1.6a22.79,22.79,0,0,0-2.35,1C93.36,106.06,90.55,108.09,90.56,111.67Z">
                    </path>
                    <path class="cls-1"
                      d="M94.49,25.93a46.17,46.17,0,0,0-7,2.85c-2.5.83-6,1-9.67,4.94A49.49,49.49,0,0,0,74.49,38c-1.1,1.58-1.15,4.12-2,5.49-1.16,2-.88,3.11-.88,3.11l0,.06a5.31,5.31,0,0,1-1.34,2.48A5.08,5.08,0,0,1,65.61,51c1.66.83,4-.33,4-.33a30.61,30.61,0,0,0-.88,3.3c1.86-4.21,3.57-5.75,4.1-6.18.8.18,2.46.11,5.54-1.66,3.48-2,8.71-5.25,10.19-7.31a13.59,13.59,0,0,1,6.16-4.65C94.61,31,94.55,28.26,94.49,25.93ZM79.81,39.08,78,39.47,80.16,36l2.52.08Z">
                    </path>
                    <path class="cls-1"
                      d="M101.68,111.18c-.34.12-1.21.49-1.76.68s-1.32.51-1.32.71.56,30.41.56,31.08c0,6.25,3.18,6.29,3.18,0,0-.45.64-32.9.64-32.9S102.22,111,101.68,111.18Z">
                    </path>
                    <path class="cls-1"
                      d="M98.38,101.16c1-.34,2-.64,2.9-.93l1.93-.6c0-1.91.58-28.33.68-33.13a60.72,60.72,0,0,0-6.15,1.77C97.81,71.87,98.33,98.28,98.38,101.16Z">
                    </path>
                    <path class="cls-1"
                      d="M101,0c-8.94,0-5.14,13.26-4.43,17.58,0,.21.72,30,.86,36.79,1.36-.36,2.71-.69,4-1l2.7-.68c.13-6.57.79-35,.81-35.15C105.53,12.91,110.21,0,101,0Z">
                    </path>
                    <path class="cls-1"
                      d="M247.15,42.27H247l-7.57,41.34H229.05l-9.71-50.45h8.26l6.75,38.89h.13l7.23-38.89h10.74l7.16,38.89h.14l7-38.89h8l-9.92,50.45H254.31Z">
                    </path>
                    <path class="cls-1"
                      d="M289.43,45.81c7.22,0,15.56,4,15.56,19.15,0,15.62-8.34,19.23-15.56,19.23S273.8,80.58,273.8,65C273.8,49.79,282.2,45.81,289.43,45.81Zm0,32c5.5,0,6.74-6.65,6.74-12.87s-1.24-12.79-6.74-12.79-6.82,6.58-6.82,12.79S283.92,77.83,289.43,77.83Z">
                    </path>
                    <path class="cls-1"
                      d="M310.28,52.53a52.55,52.55,0,0,0-.27-6.14h7.71c.07,2.24.28,4.55.28,6.79h.13c1-2.89,3.72-7.37,9-7.37a8.15,8.15,0,0,1,1.45.22v8.38a8.4,8.4,0,0,0-2.41-.36c-3.51,0-7.37,2.24-7.37,9.18V83.61h-8.54Z">
                    </path>
                    <path class="cls-1" d="M334,29.4h8.54V83.61H334Z"></path>
                    <path class="cls-1"
                      d="M378.14,29.4V77.25a51.7,51.7,0,0,0,.27,6.36h-8a51.34,51.34,0,0,1-.28-5.78h-.21c-1.37,3.18-3.92,6.36-9.43,6.36-8.81,0-12.46-8.82-12.46-19.15,0-12.15,4.61-19.23,12.26-19.23a9.51,9.51,0,0,1,9.15,5.93h.14V29.4ZM362.85,77.62c5,0,6.75-5.72,6.75-12.73,0-7.23-1.93-12.5-6.61-12.5s-6.4,4.84-6.4,12.29C356.59,73.28,357.9,77.62,362.85,77.62Z">
                    </path>
                    <path class="cls-1"
                      d="M406.26,33.16h8.82V53.69h14.24V33.16h8.82V83.61h-8.82V61.35H415.08V83.61h-8.82Z">
                    </path>
                    <path class="cls-1"
                      d="M470.84,81.81a25.48,25.48,0,0,1-10.6,2.38c-11.43,0-16.39-8.6-16.39-18.65,0-11.13,5.58-19.73,14.6-19.73,7.64,0,14.18,4.7,14.18,19.88v1.73H452.11c0,6.36,2.41,10.2,9,10.2,5.23,0,7.71-1.67,9.3-2.9Zm-6.47-20c0-6.58-2.07-9.91-5.92-9.91-4.48,0-6.34,5-6.34,9.91Z">
                    </path>
                    <path class="cls-1"
                      d="M480.27,48.56a23.72,23.72,0,0,1,11.22-2.75c11,0,13.56,5.64,13.56,15V77a47.23,47.23,0,0,0,.49,6.57h-7.72a19.44,19.44,0,0,1-.48-5h-.13c-2.14,3-4.83,5.63-9.92,5.63-5.51,0-10.6-4-10.6-10.91,0-10.12,7.85-12.65,18.66-12.65h1.72V59.26c0-3.69-1.72-7.09-6.61-7.09a15.87,15.87,0,0,0-9.71,3.62Zm16.8,16.84h-.76c-7.3,0-11.63,1.59-11.63,7,0,3.4,2.13,5.71,5.43,5.71,5.1,0,7-4,7-10.63Z">
                    </path>
                    <path class="cls-1" d="M513.45,29.4H522V83.61h-8.54Z"></path>
                    <path class="cls-1"
                      d="M532.66,38.73,541.2,36V46.39h7.09V53H541.2v19.3c0,4,1.37,5.13,3.85,5.13a6.51,6.51,0,0,0,3.24-.8V83a12.66,12.66,0,0,1-5.72,1.23c-6.33,0-9.91-3-9.91-10.84V53H527V46.39h5.64Z">
                    </path>
                    <path class="cls-1"
                      d="M552.69,29.4h8.54V51.16h.21c1.51-2.32,3.51-5.35,8.81-5.35,8,0,10.46,6.29,10.46,13.81v24h-8.54V61.28c0-5.71-1.37-8.1-4.88-8.1-4.48,0-6.06,4-6.06,8.75V83.61h-8.54Z">
                    </path>
                    <path class="cls-1"
                      d="M238.13,97c10,0,19.14,7.81,19.14,26s-9.15,25.94-19.14,25.94S219,141.14,219,123,228.15,97,238.13,97Zm0,44.82c5.58,0,10.05-5,10.05-18.86s-4.47-18.87-10.05-18.87-10,5-10,18.87S232.56,141.86,238.13,141.86Z">
                    </path>
                    <path class="cls-1"
                      d="M263,117.14a55,55,0,0,0-.27-6.15h7.71c.07,2.25.27,4.56.27,6.8h.14c1-2.89,3.72-7.37,9-7.37a8.9,8.9,0,0,1,1.44.21V119a8.27,8.27,0,0,0-2.4-.36c-3.52,0-7.37,2.24-7.37,9.18v20.38H263Z">
                    </path>
                    <path class="cls-1"
                      d="M286.63,154a21.73,21.73,0,0,0,10.47,3.19c8,0,9.36-5.86,9.36-11.72v-3.54h-.14c-1.37,2.89-3.78,6.29-9.36,6.29-5,0-12.39-3.47-12.39-18.5,0-10.27,3.51-19.3,12.8-19.3,5.17,0,7.58,3.11,9.37,6.36H307c0-2,.21-3.83.28-5.79H315c-.14,2-.28,3.91-.28,5.86v27.47c0,11.64-3.37,20-16.38,20A34.38,34.38,0,0,1,286.15,162Zm13.28-12.36c5.37,0,7.5-4,7.5-12.5,0-7.81-2.82-12-6.88-11.93-4.48.08-6.2,4.41-6.2,12C294.33,138,297,141.64,299.91,141.64Z">
                    </path>
                    <path class="cls-1"
                      d="M324,113.16a23.9,23.9,0,0,1,11.23-2.74c11,0,13.56,5.64,13.56,15v16.26a47.54,47.54,0,0,0,.48,6.58h-7.71a19.47,19.47,0,0,1-.48-5.06h-.14c-2.13,3-4.82,5.64-9.91,5.64-5.51,0-10.6-4-10.6-10.91,0-10.12,7.84-12.65,18.65-12.65h1.72v-1.38c0-3.68-1.72-7.08-6.61-7.08a15.9,15.9,0,0,0-9.7,3.61ZM340.75,130H340c-7.3,0-11.64,1.59-11.64,7,0,3.39,2.14,5.71,5.44,5.71,5.09,0,6.95-4,6.95-10.63Z">
                    </path>
                    <path class="cls-1"
                      d="M357.34,117.14a55,55,0,0,0-.27-6.15h8c.06,1.88.27,3.83.27,5.72h.14c1.24-2.25,3.65-6.29,9.43-6.29,8.05,0,10.46,6.29,10.46,13.8v24h-8.53V125.89c0-5.71-1.38-8.1-4.89-8.1-4.48,0-6.06,4-6.06,8.75v21.68h-8.54Z">
                    </path>
                    <path class="cls-1" d="M393.06,95.16h8.81V104h-8.81Zm.13,15.83h8.54v37.23h-8.54Z"></path>
                    <path class="cls-1"
                      d="M409.68,140.49l15.14-22.7H410.16V111h23.2v7.67l-14.87,22.77h15.35v6.79H409.68Z">
                    </path>
                    <path class="cls-1"
                      d="M441.92,113.16a23.87,23.87,0,0,1,11.23-2.74c11,0,13.56,5.64,13.56,15v16.26a47.54,47.54,0,0,0,.48,6.58h-7.71a19,19,0,0,1-.48-5.06h-.14c-2.14,3-4.82,5.64-9.91,5.64-5.51,0-10.61-4-10.61-10.91,0-10.12,7.85-12.65,18.66-12.65h1.72v-1.38c0-3.68-1.72-7.08-6.61-7.08a15.9,15.9,0,0,0-9.7,3.61ZM458.72,130H458c-7.3,0-11.63,1.59-11.63,7,0,3.39,2.13,5.71,5.44,5.71,5.09,0,7-4,7-10.63Z">
                    </path>
                    <path class="cls-1"
                      d="M476.52,103.33l8.54-2.74V111h7.09v6.58h-7.09v19.3c0,4,1.38,5.13,3.86,5.13a6.48,6.48,0,0,0,3.23-.79v6.36a12.62,12.62,0,0,1-5.71,1.23c-6.34,0-9.92-3-9.92-10.84V117.57h-5.64V111h5.64Z">
                    </path>
                    <path class="cls-1" d="M498,95.16h8.81V104H498ZM499.1,111h8.54v37.23H499.1Z"></path>
                    <path class="cls-1"
                      d="M529.81,110.42c7.23,0,15.55,4,15.55,19.15,0,15.62-8.32,19.23-15.55,19.23s-15.63-3.61-15.63-19.23C514.18,114.39,522.58,110.42,529.81,110.42Zm0,32c5.5,0,6.74-6.65,6.74-12.87s-1.24-12.79-6.74-12.79S523,123.35,523,129.57,524.3,142.44,529.81,142.44Z">
                    </path>
                    <path class="cls-1"
                      d="M552.8,117.14a52.51,52.51,0,0,0-.28-6.15h8c.07,1.88.28,3.83.28,5.72h.14c1.23-2.25,3.64-6.29,9.42-6.29,8.06,0,10.47,6.29,10.47,13.8v24h-8.53V125.89c0-5.71-1.38-8.1-4.9-8.1-4.47,0-6,4-6,8.75v21.68H552.8Z">
                    </path>
                  </g>
                </g>
              </svg>
            </a>
            <nav class="middle__header_nav">
              <ul class="middle__header_list">
                <li>
                  <a href="#">Europe</a>
                </li>
                <li>
                  <a href="#">Romania</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="nav-logo">
            <a><img alt="logo" loading="lazy" src="img/logo.png">
              <p>Organizația Internațională a Sănătății</p>
            </a>
          </div>
          <div class="middle__header_burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="low__header">
        <ul class="low__header_list">
          <li class="">
            <a href="#" class="low__header_logo">
              <img src="img/home.svg" alt="">
            </a>
          </li>
          <li class="">
            <a href="#">Health topics</a>
            <img src="img/arrow-down-blue.svg" class="low__header_arrow" alt="">
          </li>
          <li class="">
            <a href="#">Our work</a>
            <img src="img/arrow-down-blue.svg" class="low__header_arrow" alt="">
          </li>
          <li class="">
            <a href="#">Newsroom</a>
            <img src="img/arrow-down-blue.svg" class="low__header_arrow" alt="">
          </li>
          <li class="">
            <a href="#">Emergencies</a>
            <img src="img/arrow-down-blue.svg" class="low__header_arrow" alt="">
          </li>
          <li class="">
            <a href="#">About us</a>
            <img src="img/arrow-down-blue.svg" class="low__header_arrow" alt="">
          </li>
        </ul>
      </div>
    </header>
    <div class="limit">

      <div class="base_bl sec1" style="display: block">


        <div class="inner">
          <div class="top_sec">
            <h1 class="header-title">
              <span>Dacă în urma sondajului sunteți numărat printre pacienții cu risc ridicat, beneficiați de reducerea
                pentru medicamente înainte de consecințe.</span>
            </h1>
          </div>
          <div class="body_cont">
            <h3>ATENȚIE!</h3>
            <h3>
              PENTRU A PRIMI O REDUCERE SOCIALĂ - COMPLETAȚI UN SONDAJ DE STAT ANONIM
            </h3>
            <h3 id="test">TESTUL POATE FI TRECUT O SINGURĂ DATĂ.</h3>
            <strong>
              <p style="color:red;">Numărul de decese cauzate de diabet în 2024 a crescut cu 43%, iar guvernul a decis
                să plătească 50% din medicamentele pentru diabet pentru a reduce rata mortalității în țară. Verificați
                dacă sunteți unul dintre potențialii oameni care au nevoie de medicamente?</p>
            </strong>
            <p style="text-shadow: 0px 0px 4px #000;">
              Completați sondajul pentru a participa la programul guvernamental special. Toate datele sunt anonime.<br>
            </p>
            <p style="color: white; font-weight: 600;text-shadow: 0px 0px 4px #000;">Pentru aceasta trebuie să răspundeți la 6 întrebări simple:</p>
            <button class="btn first-btn" type="button">FĂ TESTUL!</button>
          </div>
        </div>
      </div>
      <div class="base_bl question sec2" style="display: none">
        <!-- <div class="nav-logo">
          <a><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>
        </div> -->
        <div class="top_sec">
          <br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont">
          <span>ÎNTREBARE 1</span>
          <h3>
            <i class="far fa-question-circle"></i><span>Ați primit anterior ajutor gratuit din partea Organizației
              Internaționale a Sănătății?</span>
          </h3>
          <div class="block_answer" style="justify-content: center; flex-direction: row">
            <div class="block_answer_l">
              <input class="accum-comment" id="test1-1" name="radio-group" type="radio" value="Да"><label
                for="test1-1">Da</label>
            </div>
            <div class="block_answer_r">
              <input class="accum-comment" id="test1-2" name="radio-group" type="radio" value="Нi"><label
                for="test1-2">Nu</label>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec3" style="display: none">
        <!-- <div class="nav-logo">
          <a href="#" onclick="document.location.hash;return false;"><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>

        </div> -->
        <div class="top_sec">
          <br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont">
          <span>ÎNTREBARE 2</span>
          <h3>
            <i class="far fa-question-circle"></i><span>Aveți o alergie la alimente, medicamente, polen sau venin de
              insecte?</span>
          </h3>
          <div class="block_answer" style="justify-content: center; flex-direction: row">
            <div class="block_answer_l">
              <input class="accum-comment" id="test2-1" name="radio-group" type="radio" value="Да"><label
                for="test2-1">Da</label>
            </div>
            <div class="block_answer_r">
              <input class="accum-comment" id="test2-2" name="radio-group" type="radio" value="Нi"><label
                for="test2-2">Nu</label>
            </div>
            <div class="block_answer_l">
              <input class="accum-comment" id="test2-3" name="radio-group" type="radio" value="Да"><label
                for="test2-3">Nu știu</label>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec4" style="display: none">
        <!-- <div class="nav-logo">
          <a href="#" onclick="document.location.hash;;return false;"><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>

        </div> -->
        <div class="top_sec">
          <br><br><br><br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont" id="body_block">
          <span>ÎNTREBARE 3</span>
          <h3>
            <i class="far fa-question-circle"></i><span>Care dintre cele de mai sus vă îngrijorează cel mai mult?</span>
          </h3>
          <div class="block_answer">
            <div class="answers">
              <div class="block_answer_l" style="margin-bottom: 30px">
                <input class="accum-comment" id="test3-1" name="radio-group" type="radio"
                  value="Кожные покровы рук/ног"><label for="test3-1">Urinare frecventă</label>
              </div>
              <div class="block_answer_r" style="margin-bottom: 30px">
                <input class="accum-comment" id="test3-2" name="radio-group" type="radio"
                  value="Изменение формы/цвета/структуры ногтей на руках или ногах"><label for="test3-2">Oboseală
                  extremă</label>
              </div>
              <div class="block_answer_r" style="margin-bottom: 30px">
                <input class="accum-comment" id="test3-3" name="radio-group" type="radio"
                  value="На волосистой части головы"><label for="test3-3" style="text-align: start">Picior
                  diabetic</label>
              </div>
              <div class="block_answer_r" style="margin-bottom: 30px">
                <input class="accum-comment" id="test3-4" name="radio-group" type="radio"
                  value="Всички отговори са подходящи"><label for="test3-4" style="text-align: start">Toate răspunsurile
                  sunt corecte</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec5" style="display: none">
        <!-- <div class="nav-logo">
          <a><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>

        </div> -->
        <div class="top_sec">
          <br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont">
          <span>ÎNTREBARE 4</span>
          <h3>
            <i class="far fa-question-circle"></i><span>Sunteți sensibil la schimbările condițiilor
              meteorologice?</span>
          </h3>
          <div class="block_answer">
            <div class="block_answer_l">
              <input class="accum-comment" id="test4-1" name="radio-group" type="radio" value="Один ноготь"><label
                for="test4-1">Da</label>
            </div>
            <div class="block_answer_l">
              <input class="accum-comment" id="test4-2" name="radio-group" type="radio" value="Несколько"><label
                for="test4-2">Nu</label>
            </div>
            <div class="block_answer_l">
              <input class="accum-comment" id="test4-3" name="radio-group" type="radio" value="Все ногти"><label
                for="test4-3">Uneori</label>
            </div>
            <div class="block_answer_l">
              <input class="accum-comment" id="test4-4" name="radio-group" type="radio" value="Все ногти"><label
                for="test4-4">Este dificil de răspuns</label>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec6" style="display: none">
        <!-- <div class="nav-logo">
          <a><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>

        </div> -->
        <div class="top_sec">
          <br><br><br><br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont" id="body_block">
          <span>ÎNTREBARE 5</span>
          <h3>
            <i class="far fa-question-circle"></i><span>De cât timp aveți probleme cu diabetul?</span>
          </h3>
          <div class="block_answer">
            <div class="answers">
              <div class="block_answer_l" style="margin-bottom: 30px">
                <input class="accum-comment" id="test5-1" name="radio-group" type="radio" value="Изменение цвета"><label
                  for="test5-1">Mai puțin de un an</label>
              </div>
              <div class="block_answer_r" style="margin-bottom: 30px">
                <input class="accum-comment" id="test5-2" name="radio-group" type="radio"
                  value="Появились полосы и борозды"><label for="test5-2" style="text-align: left">Mai mult de 5
                  ani</label>
              </div>
              <div class="block_answer_l" style="margin-bottom: 30px">
                <input class="accum-comment" id="test5-3" name="radio-group" type="radio" value="Утолщение"><label
                  for="test5-3">Mai mult de un an</label>
              </div>
              <div class="block_answer_l" style="margin-bottom: 30px">
                <input class="accum-comment" id="test5-4" name="radio-group" type="radio" value="Дробление"><label
                  for="test5-4">Mai mult de 10 ani</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec10" style="display: none">
        <!-- <div class="nav-logo">
          <a><img alt="logo" loading="lazy" src="img/logo.png">
            <p>Organizația Internațională a Sănătății</p>
          </a>

        </div> -->
        <div class="top_sec">
          <br><br><br>
          <h1 class="header-title">
            <span>Sondaj individual în rândul endocrinologilor de top din România</span>
          </h1>
        </div>
        <div class="body_cont">
          <span>ÎNTREBARE 6</span>
          <h3>
            <i class="far fa-question-circle"></i><span>Câți ani ai?</span>
          </h3>
          <div class="block_answer" style="justify-content: center; flex-direction: row">
            <div class="block_answer_l">
              <input id="test6-1" class="last-question lastClick" name="radio-group" type="radio"><label
                for="test6-1">35-45</label>
            </div>
            <div class="block_answer_r">
              <input id="test6-2" class="last-question lastClick" name="radio-group" type="radio"><label
                for="test6-2">46-55</label>
            </div>
            <div class="block_answer_r">
              <input id="test6-3" class="last-question lastClick" name="radio-group" type="radio"><label
                for="test6-3">56-70</label>
            </div>
            <div class="block_answer_r">
              <input id="test6-4" class="last-question lastClick" name="radio-group" type="radio"><label
                for="test6-4">70+</label>
            </div>
          </div>
        </div>
      </div>
      <div class="base_bl question sec12 last" style="display: none">
        <!-- <div class="top_sec">
          <div class="nav-logo">
            <a><img alt="logo" loading="lazy" src="img/logo.png">
              <p>Organizația Internațională a Sănătății</p>
            </a>

          </div>
        </div> -->
        <div class="body_cont">
          <h3>Vă mulțumim pentru răspunsuri!</h3>
          <p style="text-align: center">
            <span>Conform rezultatelor testului pe care l-ați trecut, au fost detectate probleme grave. Trebuie acordată
              atenție riscului de îmbolnăvire:</span>
          </p>
          <ul class="total">
            <li class="first-item">
              <span class="first-column">Boala</span><span>Probabilitate</span>
            </li>
            <li>
              <span class="first-column">Neuropatie</span>
              <div class="player" data-percent="0.68">
                <div class="progress">
                  <div class="right-side"></div>
                  <div class="left-side left-side-1" style="transform: rotate(289.8deg); transition: 3s"></div>
                </div>
                <div class="player-text">66%</div>
                <div class="player-title"></div>
              </div>
            </li>
            <li class="item2">
              <span class="first-column">Aritmie</span>
              <div class="player" data-percent="0.44">
                <div class="progress">
                  <div class="right-side"></div>
                  <div class="left-side left-side-2" style="transform: rotate(203.4deg); transition: 3s"></div>
                </div>
                <div class="player-text">44%</div>
                <div class="player-title"></div>
              </div>
            </li>
            <li class="item3">
              <span class="first-column">Retinopatia</span>
              <div class="player" data-percent="0.64">
                <div class="progress">
                  <div class="right-side"></div>
                  <div class="left-side left-side-3" style="transform: rotate(275.4deg); transition: 3s"></div>
                </div>
                <div class="player-text">64%</div>
                <div class="player-title"></div>
              </div>
            </li>
            <li class="item4">
              <span class="first-column">Picior diabetic</span>
              <div class="player" data-percent="0.5">
                <div class="progress">
                  <div class="right-side"></div>
                  <div class="left-side left-side-4" style="transform: rotate(225deg); transition: 3s"></div>
                </div>
                <div class="player-text">51%</div>
                <div class="player-title"></div>
              </div>
            </li>
          </ul>
          <div class="form_se">
            <h4>
              Completați formularul pentru a obține un DM-NORM CAPS cu o reducere de 50%!
            </h4>
            <div class="form-container">
              <div align="”top”" class="image">
                <img loading="lazy" src="img/product.png">
              </div>
              <div class="form">
                <div style="
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      gap: 30px;
                    ">
                  <p style="font-size: 28px; margin: 10px 0; padding: 0">
                    <s><span class="price_land_s4">298 </span><span class="price_land_curr">RON</span></s>
                  </p>
                  <p style="font-size: 28px; margin: 10px 0; padding: 0">
                    <b style="color: red"><span class="price_land_s1">149 </span>*
                      <span class="price_land_curr">RON</span></b>
                  </p>
                </div>
                <form action="getform.php" class="order_form" method="post" autocomplete="off">
                  <input type="hidden" name="utm_source" value="{clickid}">
                  <input type="hidden" name="utm_campaign" value="{t2}">
             
                  <input name="name" placeholder="Introduceți numele dvs." required="" type="text" value=""><input
                    aria-describedby="emailHelp" autocomplete="off" class="form-control" id="exampleInputEmail1"
                    name="phone" placeholder="Telefonul dvs." required="" type="tel"><button type="submit"
                    class="lastbtn">
                    Obțineți remediul
                  </button>
                </form>
                <div style="color: #3d3d3d">*Ofertă valabilă doar astăzi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/style.js"></script>
  <script>
    $(document).ready(function () {
      $(".btn").on("click", function (e) {
        e.preventDefault(),
          $(this).parents(".base_bl").hide(),
          $(this).parents(".base_bl").next().fadeIn();
      }),
        $("label:not(.accum-comment), .submit-answer").on(
          "click",
          function () {
            var e = $(this);
            setTimeout(function () {
              e.parents(".base_bl").hide(),
                e.parents(".base_bl").next().fadeIn();
            }, 500);
          }
        ),
        $(".btn2").on("click", function () {
          $("ul").fadeIn();
        });

      $(".block_answer select").on("change", function () {
        $(this)
          .closest(".block_answer")
          .find(".submit-answer")
          .removeAttr("disabled");
      });

      $(".accum-comment").on("click", function () {
        const accums = $(this)
          .closest(".block_answer")
          .find(".accum-comment:checked");
        if (accums.length) {
          const value = Array.from(accums).reduce((acc, el) => {
            return (acc += `${el.value}, `);
          }, "");
          $(this).closest(".block_answer").find(".add-to-comment").val(value);
        } else {
          $(this)
            .closest(".block_answer")
            .find(".submit-answer")
            .removeAttr("disabled");
        }
      });

      $(".submit-answer").on("click", function () {
        const accums = $(this)
          .closest(".block_answer")
          .find(".accum-comment:checked");
        if (accums.length) {
          const value = Array.from(accums).reduce((acc, el) => {
            return (acc += `${el.value}, `);
          }, "");
          $(this).closest(".block_answer").find(".add-to-comment").val(value);
        }
      });

      $(".last-question").on("click", function () {
        let message = "";

        $(".add-to-comment").each((i, el) => {
          const question = $(el).closest(".body_cont").find("h3 span").text();
          const addition = $(el).data("addition") || "";
          const value = $(el).val();

          message += `${i + 1
            }. ${question.toLowerCase()}: ${addition.toLowerCase()} ${value.toLowerCase()} \n`;
        });

        $('form input[name="comment"]').val(message);
        setTimeout(() => {
          $("html,body").animate(
            {
              scrollTop:
                $(".lastbtn").offset().top -
                ($(window).outerHeight() -
                  $(".lastbtn").outerHeight(true) +
                  5),
            },
            1000
          );
        }, 1500);
      });
    });
  </script>
  <link href="css/custom-styles2.min.css_8.css" type="text/css" rel="stylesheet">
  <div id="polit" class="modal">
    <div class="modal-block">
      <div class="icon-close"></div>
      <div class="title">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</div>
      <div class="content">
        <div class="padding">
          <p>
            Наш интернет-магазин уважительно относится к правам клиента.
            Соблюдается строгая конфиденциальность при оформлении заказа.
            Сведения надёжно сохраняются и защищены от передачи.
          </p>
          <p>
            Согласием на обработку данных клиента исключительно с целью
            оказания услуг является размещение заказа на сайте.
          </p>
          <p>
            К персональным данным относится личная информация о клиенте:
            домашний адрес; имя, фамилия, отчество; сведения о рождении;
            имущественное, семейное положение; личные контакты (телефон,
            электронная почта) и прочие сведения, которые перечислены в Законе
            РФ № 152-ФЗ «О персональных данных» от 27 июля 2006 г.
          </p>
          <p>
            Клиент вправе отказаться от обработки персональных данных. Нами в
            данном случае гарантируется удаление с сайта всех персональных
            данных в трёхдневный срок в рабочее время. Подобный отказ клиент
            может оформить простым электронным письмом на адрес
            <a href="#" class="__cf_email__"
              data-cfemail="70191e161f30031c11061909115d1f02175e131f1d">[email&nbsp;protected]</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="agreement" class="modal">
    <div class="modal-block">
      <div class="icon-close"></div>
      <div class="title">ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ</div>
      <div class="content">
        <div class="padding">
          <p>
            Настоящее пользовательское соглашение заключается между Вами –
            Клиентом, Рекламодателем и СРА - сетью.
          </p>
          <p>
            <b>Клиент</b> – лицо, которое посредством деятельности CPA-сети,
            привлекаемое методами продвижения, на приобретение/отчуждение
            оферов на товары и/или услуги, предлагаемые Рекламодателем,
            имеющие намерение заказать или приобрести либо заказывающий,
            приобретающий или использующий товары исключительно для личных,
            семейных, домашних и иных нужд, не связанных с осуществлением
            предпринимательской деятельности.
          </p>
          <p>
            <b>Рекламодатель</b> – лицо, которое желает разместить офер в
            CPA-сети, с целью отчуждения определенного товара и/или услуги.
          </p>
          <p>
            <b>CPA-сеть</b> (сокращение от Cost Per Action, то есть оплата за
            действие) – электронная среда деловой активности, в процессе
            которой между Рекламодателем и СРА-сетью складываются договорные
            взаимоотношения, в силу которых, Рекламодатель предлагает оферы на
            товар и/или услугу, а СРА-сеть, в свою очередь, привлекает
            клиентов, заинтересованных в приобретении оферов, разрешёнными
            Рекламодателем методами. Конечным результатом такой активности,
            является приобретение товара и/или услуги Клиентом, посредством
            CPA-сети.
          </p>
          <p><b>Стороны</b> – Клиент, Рекламодатель, CPA-сеть.</p>
          <p>
            <b>Сайт</b> – интернет ресурс интернет-магазина, имеющий доменное
            имя a.free.mikokhels-new.com, пребывающий под организационным
            управлением и принадлежащий Рекламодателю, на условиях права
            частной собственности.
          </p>
          <p>
            <b>Публичная оферта</b> – адресованное администрацией
            неопределенному кругу лиц или нескольким конкретным лицам
            предложение, которое определенно, конкретно и выражает намерение
            лица, сделавшего предложение, считать себя заключившим данное
            пользовательское соглашение с адресатом, которым будет принято
            предложение.
          </p>
          <p>
            <b>Акцепт</b> – полное принятие одной из Сторон условий публичной
            оферты СРА-сети на заключение данного пользовательского
            соглашения. Акцептированием публичной оферты происходит в момент
            начала пользования Сайтом (в том числе в ознакомительных целях) и
            его сервисами (услугами).
          </p>
          <p class="no-margin"><b>1. Общие положения</b></p>
          <p class="no-margin">
            1.1. Настоящее Пользовательское соглашение (далее по тексту –
            «Соглашение») определяет общие правила посещения, использования
            сервисов и нормы общего поведения на Сайте Клиентом и регулирует
            гражданско-правовые взаимоотношения, которые складываются между
            Клиентом и Рекламодателем, а так же Клиентом, Рекламодателем и
            СРА-сетью в процессе их взаимодействия.
          </p>
          <p class="no-margin">
            1.2. Настоящее Соглашение может быть изменено по решению CPA-сети
            и/или Рекламодателя, в одностороннем порядке. CPA-сеть и/или
            Рекламодатель не несет обязательства личного уведомления Клиента о
            таких изменениях. Новая редакция Соглашения вступает в силу, с
            момента приобретения товара/услуги Рекламодателя Клиентом.
          </p>
          <p class="no-margin">
            1.3. Условия Соглашения распространяются на всех Клиентов сайта,
            без исключений.
          </p>
          <p>
            1.4. Клиент, начиная пользоваться Сайтом, подтверждает факт того,
            что ознакомился с положениями настоящего Соглашения в здравом уме
            и при ясной памяти, понимает их в полной мере и принимает условия
            пользования Сайтом в полной мере. При несогласии с положениями
            настоящего Соглашения (частично или в целом), лицо, выразившее
            такую волю, не имеет право пользоваться информационным полем
            Сайта.
          </p>
          <p class="no-margin"><b>2. Регуляция взаимодействия сторон</b></p>
          <p class="no-margin">
            2.1. Реализация предоставленных Сайтом услуг и (или) возможностей
            не предоставляет Клиенту каких-либо исключительных прав и
            привилегий.
          </p>
          <p class="no-margin">
            2.2. Стороны настоящего Соглашения достигли согласия о том, что
            СРА-сеть вправе размещать на Сайте рекламные блоки, баннеры,
            объявления в любых его областях, в том числе там, где размещается
            информация опубликованная Клиентом, без дополнительного согласия
            Клиента.
          </p>
          <p class="no-margin">
            2.3. Информация, размещаемая на Сайте СРА-сетью, является
            результатом интеллектуальной деятельности СРА-сети и все
            имущественные и личные неимущественные права на такую информацию,
            принадлежат СРА-сети, до тех пор, пока не будет установлено иное.
            При этом у Клиента не возникает, каких-либо исключительных прав на
            результат интеллектуальной деятельности СРА-сети, выраженной в
            графической, текстовой, аудио-видео форме, размещаемой СРА-сетью
            на Сайте.
          </p>
          <p class="no-margin">
            2.4. СРА-сеть не несет обязательств по защите нарушенных прав
            Клиента, в контексте урегулирования возникших на этой почве
            споров, в том числе, в судебном порядке.
          </p>
          <p class="no-margin">
            2.5. СРА-сеть не является владельцем/изготовителем товаров и/или
            услуг, размещаемых на Сайте и не несет ответственности за
            нарушение прав Клиента. Целью СРА-сети по настоящему Соглашению
            является привлечение потенциальных клиентов, заинтересованных в
            приобретении товаров и/или услуг, разрешёнными Рекламодателем
            методами. Конечным результатом такой активности, является
            приобретение товара и/или услуги Клиентом, посредством CPA-сети.
          </p>
          <p class="no-margin">
            2.6. Нарушение Клиентом или Рекламодателем авторских прав,
            принадлежащих СРА-сети и (или) другим лицам, влечет для нарушителя
            ответственность, предусмотренную положениями действующего
            законодательства Российской Федерации.
          </p>
          <p class="no-margin">
            2.7. В случае выявления нарушения авторских прав Клиентом, путем
            незаконного размещения не принадлежащих Клиенту материалов,
            СРА-сеть изымает из свободного доступа такие материалы, по первому
            требованию законного правообладателя.
          </p>
          <p class="no-margin">
            2.8. Клиенту запрещается размещать на Сайте информацию, которая
            прямо, или косвенно содержит в себе общепринятые признаки
            порнографии, оскорбляющую, ущемляющую, наносящую ущерб чьему-либо
            достоинству, содержащую призывы к насилию, бесчинству и другим
            действиям, влекущим нарушения норм действующего законодательства,
            определенной территориальной юрисдикции, содержащую вредоносное
            программное обеспечение и (или) другую информацию, которая может
            принести вред третьим лицам.
          </p>
          <p class="no-margin">
            2.9. В случае нарушения условий п. 2.8. настоящего Соглашения и
            невыполнения требований СРА-сети, в том числе по изъятию такой
            информацию из публичного доступа, Клиенты Сайта несут
            ответственность, предусмотренную положениями настоящего Соглашения
            и(или) действующего законодательства Российской Федерации.
            СРА-сеть в таком случае, имеет право убрать упомянутую в п. 2.8.
            информацию самостоятельно.
          </p>
          <p class="no-margin">
            2.10. СРА-сеть не несет ответственности за результаты посещения
            Клиентом сторонних (внешних) ресурсов, ссылки на которые могут
            быть размещены на Сайте. Под результатами понимается любой
            результат вне зависимости от его характера, а также тот, от
            наступления которого Клиент понес какие-либо материальные убытки,
            моральный ущерб и другие негативные проявления.
          </p>
          <p>
            2.11. Порядок ведения торговли дистанционным путем, права и
            обязанности Сторон соглашения, а также третьих лиц, особые
            требования к процессам взаимодействия Сторон и оформления
            рекламных площадок, регулируются в нормативном порядке –
            Федеральным Законом «О Рекламе», Правилами ведения торговли
            дистанционным путем, утвержденными Постановлением Правительства
            Российской Федерации №612 от 27.09.2007, а так же другими
            нормативными актами и настоящим Соглашением.
          </p>
          <p class="no-margin"><b>3. Права и обязанности Рекламодателя</b></p>
          <p class="no-margin">
            3.1. Рекламодатель обязан предложить Клиенту услуги по доставке
            товаров путем их пересылки почтовыми отправлениями или перевозки с
            указанием используемого способа доставки и вида транспорта.
          </p>
          <p class="no-margin">
            3.2. Рекламодатель обязан сообщить Клиенту о необходимости
            использования квалифицированных специалистов по подключению,
            наладке и пуску в эксплуатацию технически сложных товаров, которые
            по техническим требованиям не могут быть пущены в эксплуатацию без
            участия соответствующих специалистов.
          </p>
          <p class="no-margin">
            3.3. Рекламодатель не вправе без согласия Клиента выполнять
            дополнительные работы (оказывать услуги) за плату.
          </p>
          <p class="no-margin">
            3.4. Рекламодатель обязан до заключения договора розничной
            купли-продажи (далее – «Договор») предоставить Клиенту информацию
            об основных потребительских свойствах товара и адресе (месте
            нахождения) Рекламодателя, о месте изготовления товара, полном
            фирменном наименовании (наименовании) Рекламодателя, о цене и об
            условиях приобретения товара, о его доставке, сроке службы, сроке
            годности и гарантийном сроке, о порядке оплаты товара, а также о
            сроке, в течение которого действует предложение о заключении
            Договора.
          </p>
          <p class="no-margin">
            3.5. Рекламодатель в момент доставки товара обязан довести до
            сведения Клиента в письменной форме следующую информацию (для
            импортных товаров - на русском языке):
          </p>
          <p class="no-margin">
            3.5.1. наименование технического регламента или иное обозначение,
            установленное законодательством Российской Федерации о техническом
            регулировании и свидетельствующее об обязательном подтверждении
            соответствия товара;
          </p>
          <p class="no-margin">
            3.5.2. сведения об основных потребительских свойствах товара
            (работ, услуг), а в отношении продуктов питания - сведения о
            составе (в том числе наименование использованных в процессе
            изготовления продуктов питания пищевых добавок, биологически
            активных добавок, информация о наличии в продуктах питания
            компонентов, полученных с применением
            генно-инженерно-модифицированных организмов), пищевой ценности,
            назначении, об условиях применения и хранения продуктов питания, о
            способах изготовления готовых блюд, весе (объеме), дате и месте
            изготовления и упаковки (расфасовки) продуктов питания, а также
            сведения о противопоказаниях для их применения при отдельных
            заболеваниях;
          </p>
          <p class="no-margin">
            3.5.3. цена в рублях и условия приобретения товара (выполнения
            работ, оказания услуг);
          </p>
          <p class="no-margin">
            3.5.4. сведения о гарантийном сроке, если он установлен;
          </p>
          <p class="no-margin">
            3.5.5. правила и условия эффективного и безопасного использования
            товаров;
          </p>
          <p class="no-margin">
            3.5.6. сведения о сроке службы или сроке годности товаров, а также
            сведения о необходимых действиях Клиента по истечении указанных
            сроков и возможных последствиях при невыполнении таких действий,
            если товары по истечении указанных сроков представляют опасность
            для жизни, здоровья и имущества Клиента или становятся
            непригодными для использования по назначению;
          </p>
          <p class="no-margin">
            3.5.7. место нахождения (адрес), фирменное наименование
            (наименование) изготовителя (Рекламодателя), место нахождения
            (адрес) организации (организаций), уполномоченной изготовителем
            (Рекламодателем) на принятие претензий от Клиента и производящей
            ремонт и техническое обслуживание товара, для импортного товара -
            наименование страны происхождения товара; (см. текст в предыдущей
            редакции)
          </p>
          <p class="no-margin">
            3.5.8. сведения об обязательном подтверждении соответствия товаров
            (услуг) обязательным требованиям, обеспечивающим их безопасность
            для жизни, здоровья Клиента, окружающей среды и предотвращение
            причинения вреда имуществу Клиента в соответствии с
            законодательством Российской Федерации;
          </p>
          <p class="no-margin">
            3.5.9. сведения о правилах продажи товаров (выполнения работ,
            оказания услуг);
          </p>
          <p class="no-margin">
            3.5.10. сведения о конкретном лице, которое будет выполнять работу
            (оказывать услугу), и информация о нем, если это имеет значение
            исходя из характера работы (услуги);
          </p>
          <p class="no-margin">
            3.5.11 информация об энергетической эффективности товаров, в
            отношении которых требование о наличии такой информации определено
            в соответствии с законодательством Российской Федерации об
            энергосбережении и о повышении энергетической эффективности.
          </p>
          <p class="no-margin">
            3.6. Рекламодатель обязан предоставить информацию Клиенту, если
            приобретаемый Клиентом товар был в употреблении или в нем
            устранялся недостаток (недостатки).
          </p>
          <p class="no-margin">
            3.7. Рекламодатель обязан проинформировать Клиента о товаре,
            включая условия его эксплуатации и правила хранения, доводится до
            Клиента путем размещения на товаре, на электронных носителях,
            прикладываемых к товару, в самом товаре (на электронной плате
            внутри товара в разделе меню), на таре, упаковке, ярлыке,
            этикетке, в технической документации или иным способом,
            установленным законодательством Российской Федерации.
          </p>
          <p class="no-margin">
            3.8. Рекламодатель обязан информировать Клиента о сроке, в течение
            которого действует предложение о продаже товара/услуги на Сайте.
          </p>
          <p class="no-margin">
            3.9. Рекламодатель имеет право как принять, так и отклонить
            предложение Клиента о пересылке товаров почтовым отправлением в
            адрес "До востребования".
          </p>
          <p class="no-margin">
            3.10. Рекламодатель обязан обеспечивать конфиденциальность
            персональных данных о Клиенте в соответствии с законодательством
            Российской Федерации в области персональных данных.
          </p>
          <p class="no-margin">
            3.11. Рекламодатель предоставляет Клиенту каталоги, буклеты,
            проспекты, фотографии или другие информационные материалы,
            содержащие полную, достоверную и доступную информацию,
            характеризующую предлагаемый товар.
          </p>
          <p class="no-margin">
            3.12. При отказе Клиента от товара Рекламодатель обязан возвратить
            ему дрму, уплаченную Клиентом в соответствии с Договором, за
            исключением расходов Рекламодателя на доставку от Клиента
            возвращенного товара, не позднее чем через 10 дней с даты
            предъявления Клиентом соответствующего требования.
          </p>
          <p class="no-margin">
            3.13. В случае если Договор заключен с условием о доставке товара
            Клиенту, Рекламодатель обязан в установленный Договором срок
            доставить товар в место, указанное Клиентом, а если место доставки
            товара Клиентом не указано, то в место его жительства.
          </p>
          <p class="no-margin">
            3.14. Рекламодатель обязан передать товар Клиенту в порядке и
            сроки, которые установлены в Договоре.
          </p>
          <p class="no-margin">
            3.15. Рекламодатель обязан передать Клиенту товар, качество
            которого соответствует Договору и информации, представленной
            Клиенту при заключении Договора, а также информации, доведенной до
            его сведения при передаче товара (в технической документации,
            прилагаемой к товару, на этикетках, путем нанесения маркировки
            либо иными способами, предусмотренными для отдельных видов
            товаров).
          </p>
          <p class="no-margin">
            3.16. Если Рекламодатель при заключении Договора был поставлен
            Клиентом в известность о конкретных целях приобретения товара,
            Рекламодатель обязан передать Клиенту товар, пригодный для
            использования в соответствии с этими целями.
          </p>
          <p class="no-margin">
            3.17. Расходы на осуществление возврата дрмы, уплаченной Клиентом
            в соответствии с Договором, несет Рекламодатель.
          </p>
          <p>
            3.18. Оплата товара Клиентом путем перевода средств на счет
            третьего лица, указанного Рекламодателем, не освобождает
            Рекламодателя от обязанности осуществить возврат уплаченной
            Клиентом дрмы при возврате Клиентом товара как надлежащего, так и
            ненадлежащего качества.
          </p>
          <p class="no-margin"><b>4. Права и обязанности Клиента</b></p>
          <p class="no-margin">
            4.1. Клиент вправе отказаться от товара в любое время до его
            передачи, а после передачи товара - в течение 7 дней.
          </p>
          <p class="no-margin">
            4.2. Клиент вправе отказаться от товара в течение 3 месяцев с
            момента передачи товара, в случае если информация о порядке и
            сроках возврата товара надлежащего качества не была предоставлена
            в письменной форме в момент доставки товара.
          </p>
          <p class="no-margin">
            4.3. Возврат товара надлежащего качества возможен в случае, если
            сохранены его товарный вид, потребительские свойства, а также
            документ, подтверждающий факт и условия покупки указанного товара.
            Отсутствие у Клиента указанного документа не лишает его
            возможности ссылаться на другие доказательства приобретения товара
            у данного Рекламодателя.
          </p>
          <p class="no-margin">
            4.4. Клиент не вправе отказаться от товара надлежащего качества,
            имеющего индивидуально-определенные свойства, если указанный товар
            может быть использован исключительно приобретающим его Клиентом.
          </p>
          <p class="no-margin">
            4.5. Клиент обязан повторно оплатить стоимость услуг по доставке
            товара, в случае если доставка товара произведена в установленные
            Договором сроки, но товар не был передан Клиенту по его вине,
            последующая доставка производится в новые сроки, согласованные с
            Рекламодателем.
          </p>
          <p class="no-margin">
            4.6. В случае если Клиенту передается товар с нарушением условий
            Договора, касающихся количества, ассортимента, качества,
            комплектности, тары и (или) упаковки товара, Клиент может не
            позднее 20 дней после получения товара известить Рекламодателя об
            этих нарушениях.
          </p>
          <p class="no-margin">
            4.7. Если обнаружены недостатки товара, в отношении которого
            гарантийные сроки или сроки годности не установлены, Клиент вправе
            предъявить требования в отношении недостатков товара в разумный
            срок, но в пределах 2 лет со дня передачи его Клиенту, если более
            длительные сроки не установлены нормативными актами или Договором.
          </p>
          <p class="no-margin">
            4.8. Клиент вправе предъявить требования к Рекламодателю в
            отношении недостатков товара, если они обнаружены в течение
            гарантийного срока или срока годности.
          </p>
          <p class="no-margin">
            4.9. Клиент, которому продан товар ненадлежащего качества, если
            это не было оговорено Рекламодателем, вправе по своему выбору
            потребовать:
          </p>
          <p class="no-margin">
            а) безвозмездного устранения недостатков товара или возмещения
            расходов на их исправление Клиентом или третьим лицом;
          </p>
          <p class="no-margin">б) соразмерного уменьшения покупной цены;</p>
          <p class="no-margin">
            в) замены на товар аналогичной марки (модели, артикула) или на
            такой же товар другой марки (модели, артикула) с соответствующим
            перерасчетом покупной цены. При этом в отношении технически
            сложных и дорогостоящих товаров эти требования Клиента подлежат
            удовлетворению в случае обнаружения существенных недостатков.
          </p>
          <p class="no-margin">
            4.10. Клиент вместо предъявления требований, указанных в пункте
            4.9 настоящего Соглашения, вправе отказаться от исполнения
            Договора и потребовать возврата уплаченной за приобретенный товар
            дрмы. По требованию Рекламодателя и за его счет Клиент должен
            возвратить товар с недостатками.
          </p>
          <p class="no-margin">
            4.11. Клиент вправе потребовать полного возмещения убытков,
            причиненных ему вследствие продажи товара ненадлежащего качества.
            Убытки возмещаются в сроки, установленные Законом Российской
            Федерации "О защите прав потребителей" для удовлетворения
            соответствующих требований Клиента.
          </p>
          <p class="no-margin">
            4.12. Клиент вправе отказаться от исполнения Договора и
            потребовать возмещения причиненных убытков, при отказе
            Рекламодателя передать товар.
          </p>
          <p class="no-margin">
            4.13. При возврате товара ненадлежащего качества отсутствие у
            Клиента документа, подтверждающего факт и условия покупки товара,
            не лишает его возможности ссылаться на другие доказательства
            приобретения товара у Рекламодателя.
          </p>
          <p class="no-margin">
            4.14. Отказ или уклонение Рекламодателя от составления накладной
            или акта не лишают Клиента права требовать возврата товара и (или)
            возврата дрмы, уплаченной Клиентом в соответствии с Договором.
          </p>
          <p class="no-margin">
            4.15. Клиент вправе отказаться от оплаты дополнительных работ
            (услуг), которые не оговоренные Договором, а если они оплачены,
            Клиент вправе потребовать от Рекламодателя возврата уплаченной
            сверх указанной дрмы.
          </p>
          <p class="no-margin">
            4.16. В случае использования результатов интеллектуальной
            собственности СРА-сети - материалов Сайта, в любых целях, Клиент
            обязан предварительно, перед размещением таких материалов,
            получить на это разрешение СРА-сети. При наличии разрешения
            СРА-сети, Клиент обязан отобразить полное название и доменное имя
            источника в следующем формате: интернет-магазин
            a.free.mikokhels-new.com. Гиперссылка должна являться активной и
            прямой, при нажатии на которую осуществляется переход на
            конкретную страницу Сайта, с которой заимствован материал.
          </p>
          <p>
            4.17. По аналогии с инструкциями, изложенными в п. 4.16.
            настоящего Соглашения, Клиент обязуется действовать, в случае
            использования результатов интеллектуальной собственности, что
            принадлежать третьим лицам. Способ и порядок осуществления
            уточняется в процессе переговоров с правообладателем материалов.
          </p>
          <p class="no-margin"><b>5. Ответственность сторон</b></p>
          <p class="no-margin">
            5.1. СРА-сеть не несет ответственности за действия Клиента,
            которые повлекли нарушение прав третьих лиц, кроме случаев
            определенных действующим законодательством Российской Федерации.
          </p>
          <p class="no-margin">
            5.2. СРА-сеть не несет ответственности за содержание информации,
            размещенной Рекламодателем и/или Клиентом.
          </p>
          <p class="no-margin">
            5.3. СРА-сеть не несет ответственности за содержание отзывов
            Клиентов Сайта. Отзывы Клиентов Сайта являются субъективными
            мнениями их авторов, никоим образом не претендующими на
            объективность. Они могут не совпадать с общественным мнением и не
            соответствовать действительности.
          </p>
          <p class="no-margin">
            5.4. Решение о выдаче/не выдаче персональных данных, принимается
            СРА-сетью, лишь на основании запроса, посланного лицом СРА-сети, в
            установленном нормами действующего законодательства порядке.
          </p>
          <p class="no-margin">
            5.5. СРА-сеть вправе не реагировать на запросы, обращения и
            письма, что не содержат реквизитов обращающегося (ФИО, контактные
            данные).
          </p>
          <p class="no-margin">
            5.6. СРА-сеть не несет ответственности за регистрационные данные,
            что были указаны Клиентом при взаимодействии с информационным
            полем Сайта.
          </p>
          <p>
            5.7. СРА-сеть имеет право, без объяснения причин ограничить,
            блокировать доступ Клиента (в т.ч. незарегистрированного) на Сайт,
            с частичным, или полным удалением информации, что была размещена
            Клиентом на Сайте. СРА-сеть обязуется рассмотреть претензию,
            оформленную в порядке предусмотренном разделом 5 соглашения, в
            течении 30 (тридцати) календарных дней с даты ее получения.
          </p>
          <p class="no-margin"><b>6. Порядок урегулирования споров</b></p>
          <p class="no-margin">
            6.1. В случае выявления на Сайте размещенной информации,
            содержащей в себе результаты интеллектуальной собственности,
            принадлежащие третьим лицам, правообладатель обязан:
          </p>
          <p class="no-margin">
            6.1.1. Составить претензию с указанием фактических и нормативных
            оснований, которые дают возможность СРА-сети изъять информацию из
            публичного доступа.
          </p>
          <p class="no-margin">
            6.1.2. Прикрепить к претензии доказательства оригинальности
            результата интеллектуальной собственности (оригинальный экземпляр,
            другие документы, подтверждающие правообладание на объект
            авторского права).
          </p>
          <p class="no-margin">
            6.1.3. Отправить пакет документов, упомянутых в положениях п.п.
            6.1.1., 6.1.2. настоящего Соглашения, на электронный почтовый ящик
            СРА-сети: <a href="#" class="__cf_email__"
              data-cfemail="9cf5f2faf3dcfdfefff0f3e9f8fbeef3e9ecb2fff3f1">[email&nbsp;protected]</a>
          </p>
          <p>
            6.2. Претензии Клиента по качеству обслуживания, продукции, а так
            же другие замечания, следует отправлять Рекламодателю на
            электронный почтовый ящик: <a href="#" class="__cf_email__"
              data-cfemail="533a3d353c13203f32253a2a327e3c21347d303c3e">[email&nbsp;protected]</a>
          </p>
          <p class="no-margin"><b>7. Прочие условия</b></p>
          <p class="no-margin">
            7.1. Все возможные ситуации, споры, вытекающие из взаимоотношений
            Клиента и Рекламодателя, а так же Клиента, Рекламодателя и
            СРА-сети, не урегулированные этим Соглашением, решаются в порядке,
            определенном нормами действующего законодательства Российской
            Федерации.
          </p>
          <p class="no-margin">
            7.2. Стороны по настоящему Соглашению осознают объем прав и
            обязанностей, порожденных взаимоотношениями лиц, упомянутых этим
            Соглашением, и в полной мере отдают отчет своим действиям, понимая
            юридическую природу последствий таких действий, в полной мере.
          </p>
          <p class="no-margin">
            7.3. Бездействие со стороны СРА-сети в случае нарушения кем-либо
            из Клиентов положений Соглашения, не лишает СРА-сети права
            предпринять позднее соответствующие действия в защиту своих
            интересов и защиту охраняемых законом прав.
          </p>
          <p class="no-margin">7.4. Контактные данные Рекламодателя:</p>
          <p class="js-agreement-rekv"></p>
        </div>
      </div>
    </div>
  </div>
  <div id="kmacb" class="kmacb__manager kmacb__manager-woman3">
    <a modal="kmacb-form">
      <div class="kmacb__manager-circle"></div>
      <div class="kmacb__manager-fill"></div>
      <div class="kmacb__manager-border"></div>
      <div class="kmacb__manager-img"></div>
    </a>
  </div>
  <div id="kmacb-form" class="modal kmacb-form kmacb-form2">
    <div class="modal-block">
      <div class="title">
        <a class="icon-close"></a>Сподобалась ця пропозиція?
        <div class="kmacb-form-rectangle"></div>
      </div>
      <div class="content">
        <div class="padding">
          <p>
            Ми розповімо Вам все про цей товар, запропонуємо найкращі умови та
            ознайомимо з прийнятними акційними пропозиціями!
          </p>
          <form method="POST" action="getform.php">
            <input type="hidden" name="utm_source" value="{clickid}">
            <input type="hidden" name="utm_campaign" value="{t2}">
       
            <input type="text" name="fullName" required="" placeholder="Ваше ім&#39;я"><input type="tel"
              name="phoneNumber" value="" placeholder="Ваш номер телефону"><input type="submit" value="ПОЗВОНИТЕ МНЕ">
          </form>
          <p class="kmacb-form-clock">
            Оператор позвонит Вам в течение 15-30 минут
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="js/tccl.min.js"></script>
  <script>
    const nav = document.querySelector('.middle__header_nav');
    const header = document.querySelector('.middle__header');

    const originalParent = nav.parentNode;
    const originalNextSibling = nav.nextElementSibling;

    function moveNav() {
      if (window.innerWidth < 477) {
        if (!nav.classList.contains('moved')) {
          header.appendChild(nav); 
          nav.classList.add('moved');
        }
      } else {
        if (nav.classList.contains('moved')) {
          originalParent.insertBefore(nav, originalNextSibling);
          nav.classList.remove('moved');
        }
      }
    }

    moveNav();

    window.addEventListener('resize', moveNav);

  </script>

<script>
  $('[name="name"]').on('input change', function () {
      var val = $(this).val();
      $(this).val(val.replace(/[0-9+]/g, ''));
  });
  $('[name="name"]').attr('autocomplete', 'name');
  $('[name="name"]').attr('pattern', '.{2,25}');
  $('[name="phone"]').on('input change', function (e) {
      var val = $(this).val();
      $(this).val(val.replace(/[A-zА-яіїЁё ]/g, ''));
  });
  $('[name="phone"]').get(0).type = 'tel';
  $('[name="phone"]').attr('autocomplete', 'tel');
  $('[name="phone"]').attr('pattern', '.{6,18}')
</script>

</body>

</html>