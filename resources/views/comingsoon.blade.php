<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beta page</title>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Permanent+Marker&amp;family=Satisfy&amp;display=swap'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">
    <style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .text-right {
        text-align: center;

    }

    a {
        text-decoration: none;
    }

    .wrapper {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .coming-soon-info {
        background: url('public/image.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        min-height: calc(100vh - 0px);
        position: relative;
        z-index: 0;
        display: grid;
        padding: 10px 0;
    }

    .coming-soon-info:before {
        content: "";
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
    }

    .header {
        display: grid;
        align-items: center;
        grid-template-columns: 1fr 1fr;
        grid-gap: 0 10px;
    }

    .coming-soon-info a.brand-logo {
        color: #fff;
        font-weight: 400;
        font-size: 36px;
        text-transform: capitalize;
        position: relative;
        font-family: 'Permanent Marker', cursive;
        letter-spacing: 1px;
    }

    .coming-soon-info .coming-back {
        margin: 80px auto 60px;
        max-width: 600px;
        text-align: center;
        padding: 1em 0;
    }

    .coming-soon-info h1 {
        margin: 0;
        font-size: 70px;
        font-weight: 400;
        color: #ff9800;
        line-height: 95px;
        text-transform: capitalize;
        margin-bottom: 40px;
        font-family: 'Satisfy', cursive;
    }

    .coming-soon-info p.t-text {
        line-height: 26px;
        opacity: 0.9;
        font-family: Poppins;
    }

    .countdown {
        margin: auto;
        display: table;
        font-size: 18px;
        font-weight: 500;

    }

    .coming-soon-info .number {
        font-family: Poppins;
    }

    ::-webkit-input-placeholder {
        font-family: Poppins;
    }

    .coming-soon-info .countdown>div {
        float: left;
        min-width: 100px;
        margin: 40px 10px 0 0;
        font-size: 50px;
        line-height: 70px;
        font-weight: 700;
        color: #fff;
        padding: 0px 15px;
    }

    .coming-soon-info .countdown>div:last-child {
        border-right: none;
    }

    .coming-soon-info p {
        color: #eee;
        font-size: 17px;
        font-weight: 400;
    }

    .coming-soon-info .countdown span {
        position: relative;
        display: block;
        font-size: 12px;
        line-height: 28px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        color: #eee;
    }

    .coming-soon-info input[type="text"] {
        padding: 1em 1.5em;
        border: solid 1px #ffffff;
        width: 88%;
        margin-right: 10px;
        font-size: 17px;
        color: #999999;
        outline: none;
        display: inline-block;
        background: #ffffff;
        border-radius: 6px;
    }

    .coming-soon-info form {
        max-width: 500px;
        margin: 0 50px;
        margin-top: 40px;
        display: flex;
    }

    button {
        color: #fff;
        padding: 1em 1.5em;
        font-size: 17px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        background: #ff9800;
        border: 1px solid #ff9800;
        transition: 0.3s all;
        border-radius: 6px;
    }

    button:hover {
        background: #e98c03;
    }
    </style>
</head>

<body>

    <body>
        <div class="coming-soon-info">
            <div class="wrapper">
                <div class="coming-back">
                    <h2 class="text-light" style="color: #fff; margin-top: 100px;">Something awesome is coming!<br>237+ people has joined</h2>
                    <div class="countdown">
                        <div class="countdown-days">
                            <div class="number"></div>
                            <span class>days</span>
                        </div>
                        <div class="countdown-hours">
                            <div class="number"></div>
                            <span class>hours</span>
                        </div>



                        <div class="countdown-minutes">
                            <div class="number"></div>
                            <span class>minutes</span>
                        </div>


                        <div class="countdown-seconds">
                            <div class="number"></div>
                            <span class>seconds</span>
                        </div>
                    </div>
                    <form method="post" action="{{ url('subscribe') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="Email" required placeholder="Enter your email to get notified">
                        <button><i  type="submit" class="fa fa-paper-plane" aria-hidden="true"></i></button>                    
                    </form>
                </div>
            </div>
        </div>


    </body>
    <script>
    (() => {
        const deadlineDate = new Date('August 7, 2021 10:59:59').getTime();
        const countdownDays = document.querySelector('.countdown-days .number');
        const countdownHours = document.querySelector('.countdown-hours .number');
        const countdownMinutes = document.querySelector('.countdown-minutes .number');
        const countdownSeconds = document.querySelector('.countdown-seconds .number');

        setInterval(() => {
            const currentDate = new Date().getTime();
            const distance = deadlineDate - currentDate;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownDays.innerHTML = days;
            countdownHours.innerHTML = hours;
            countdownMinutes.innerHTML = minutes;
            countdownSeconds.innerHTML = seconds;
        }, 1000);
    })();
    </script>
</body>

</html>