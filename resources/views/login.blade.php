<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>RestaurantApp-Login</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
        font-family: "Open Sans", sans-serif;
        height: 100vh;
        background-image: url("https://www.healthydiningfinder.com/getattachment/372bfd3b-de4a-4066-b15c-57b54b2e3df5/Can-I-Find-Healthy-Choices-at-Mexican-Restaurants.aspx");
        background-size: cover;

        }

        @keyframes spinner {
          0% {
            transform: rotateZ(0deg);
          }
          100% {
            transform: rotateZ(359deg);
          }
        }
        * {
          box-sizing: border-box;
        }

        .wrapper {
          display: flex;
          align-items: center;
          flex-direction: column;
          justify-content: center;
          width: 100%;
          min-height: 100%;
          padding: 20px;
          background: rgba(4, 0, 8, 0.85);
        }

        .login {
          border-radius: 2px 2px 5px 5px;
          padding: 10px 20px 20px 20px;
          width: 90%;
          max-width: 500px;
          background: transparent;
          position: relative;
          padding-bottom: 80px;
          box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
        } 
        
        .login.loading button {
          max-height: 100%;
          padding-top: 50px;
        }
        
        .login.loading button .spinner {
          opacity: 1;
          top: 40%;
        }
        
        .login.ok button {
          background-color: #8bc34a;
        }
        
        .login.ok button .spinner {
          border-radius: 0;
          border-top-color: transparent;
          border-right-color: transparent;
          height: 20px;
          animation: none;
          transform: rotateZ(-45deg);
        }
        
        .login input {
          display: block;
          padding: 15px 10px;
          margin-bottom: 10px;
          width: 100%;
          border: 1px solid #ddd;
          transition: border-width 0.2s ease;
          border-radius: 2px;
          color: #ccc;
        }
        
        .login input + i.fa {
          color: #fff;
          font-size: 1em;
          position: absolute;
          margin-top: -47px;
          opacity: 0;
          left: 0;
          transition: all 0.1s ease-in;
        }

        .login input:focus {
          outline: none;
          color: #444;
          border-color: black;
          border-left-width: 35px;
        }

        .login input:focus + i.fa {
          opacity: 1;
          left: 30px;
          transition: all 0.25s ease-out;
        }

        .login a {
          font-size: 0.8em;
          color: white;
          text-decoration: none;
        }

        .login .title {
          color: white;
          font-size: 2em;
          font-weight: bold;
          margin: 10px 0 30px 0;
          border-bottom: 1px solid #eee;
          padding-bottom: 20px;
        }

        .login button {
          width: 100%;
          height: 100%;
          font-size: 2em;
          padding: 10px 10px;
          background: transparent;
          color: #fff;
          display: block;
          border: none;
          margin-top: 20px;
          position: absolute;
          left: 0;
          bottom: 0;
          max-height: 60px;
          border: 0px solid rgba(0, 0, 0, 0.1);
          border-radius: 0 0 2px 2px;
          transform: rotateZ(0deg);
          transition: all 0.1s ease-out;
          border-bottom-width: 7px;
        }

        .login button .spinner {
          display: block;
          width: 40px;
          height: 40px;
          position: absolute;
          border: 4px solid #ffffff;
          border-top-color: rgba(255, 255, 255, 0.3);
          border-radius: 100%;
          left: 50%;
          top: 0;
          opacity: 0;
          margin-left: -20px;
          margin-top: -20px;
          animation: spinner 0.6s infinite linear;
          transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
          box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
        }

        .login:not(.loading) button:hover {
          box-shadow: 0px 1px 3px ;
        }

        .login:not(.loading) a:hover {
          text-decoration: underline;
        }

        .login:not(.loading) button:focus {
          border-bottom-width: 4px;
        }

        footer {
          display: block;
          padding-top: 50px;
          text-align: center;
          color: #ddd;
          font-weight: normal;
          text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
          font-size: 0.8em;
        }
        
        footer a, footer a:link {
          color: #fff;
          text-decoration: none;
        }

        footer a:hover {
          text-decoration: underline;
        }
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">

  <form class="login" method="post" action="{{ route('auth') }}">
    <p class="title">Log In</p>

    <div class="messages">
        
      <div class="alert alert-warning" role="alert">
        <i class="glyphicon glyphicon-exclamation-sign"></i>
      </div>                    
          
    </div>
    <input type="text" name="email" placeholder="E-mail" autofocus/>
    <i class="fa fa-user"></i>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="password" name = "password" placeholder="Password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button >
      <span class="state">Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="https://www.facebook.com/akhyar007">All Right Reserved © Akhyar Ahmed</a></footer>
  </p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
