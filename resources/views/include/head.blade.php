<style>
  *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }
  @import url('https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wdth,wght@0,75..100,100..900;1,75..100,100..900&display=swap');
  .main-font{
    font-family: 'Zilla Slab', serif;
  }
  .second-font{
    font-family: 'Roboto', sans-serif;
  }
  .main-text-color{
    color: #1C4980;
  }
  .mission-vission{
    background-image: url('{{ asset('image/mission-vission.avif') }}');
  }
  .background-images{
    background-image: url('{{ asset('image/expertise.avif') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
  .our-mission {
    background-image: url('{{ asset('image/our-mission.avif') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.blue-filter {
    filter: hue-rotate(180deg);
}

  .our-vision{
    background-image: url('{{ asset('image/our-vision.avif') }}');
  }
  .footerbackground{
    background-image: url('{{ asset('image/mission-vission.avif') }}');
    background-color: #45414d;
    padding: 40px 0;
    background-position: center;
    background-size: cover;
  }

  @keyframes spin-slow {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
    .animate-spin-slow {
      animation: spin-slow 9s linear infinite; 
    }
    .whatsapp-widget {
      position: fixed;
      bottom: 70px;
      right: 40px;
      background-color: #25D366;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 1000;
      transition: background-color 0.3s ease;
    }

    .whatsapp-widget:hover {
      background-color: #128C7E;
    }

    .whatsapp-widget img {
      width: 40px;
      height: 40px;
    }

    .whatsapp-chat-popup {
      display: none;
      position: fixed;
      bottom: 80px;
      right: 10px;
      width: 300px;
      height: 400px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 10px;
      z-index: 1001;
      border: 1px solid #ddd;
    }

    .whatsapp-chat-popup iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
.about-us-bg{
    background-image: url('{{ asset('image/blue-bg.avif') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

  </style>