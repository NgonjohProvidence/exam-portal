<?php

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
      background: linear-gradient(135deg,rgb(70, 6, 197),#4d2c91);
      color: white;
    }

    .bubble {
      position: absolute;
      bottom: -100px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      pointer-events: none;
      animation: rise 10s linear infinite;
    }

    @keyframes rise {
      0% {
        transform: translateY(0) scale(1);
        opacity: 1;
      }
      100% {
        transform: translateY(-120vh) scale(0.5);
        opacity: 0;
      }
    }

    .content {
      position: relative;
      z-index: 10;
      text-align: center;
      top: 30%;
    }

    h1 {
      font-size: 3rem;
    }
  </style>
</head>
<body>

  <!-- Background Bubble Container -->
  <div id="bubbles"></div>

  <!-- Main Content -->
  <div class="container content">
    <h1>Enter Your Student Identification Number <br> And Click OK To Beggin</h1>
    <form action="post">
        <label for="Student ID Number">Student ID Number:</label><br>
        <input type="text"  class="md-4 p-1 rounded" placeholder="id number"require>
    </form>
    <a href="pdf-page.php"><button class="btn btn-light">OK</button></a>
  </div>

  <script>
    const bubblesContainer = document.getElementById("bubbles");

    function createBubble() {
      const bubble = document.createElement("div");
      const size = Math.random() * 60 + 20 + "px";
      bubble.classList.add("bubble");
      bubble.style.width = size;
      bubble.style.height = size;
      bubble.style.left = Math.random() * 100 + "vw";
      bubble.style.animationDuration = Math.random() * 10 + 5 + "s";
      bubble.style.opacity = Math.random();
      bubblesContainer.appendChild(bubble);

      // Remove bubble after animation
      setTimeout(() => {
        bubble.remove();
      }, 15000);
    }

    setInterval(createBubble, 300);
  </script>