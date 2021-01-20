<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Sticky Notes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>
        html {
            scroll-behavior: smooth;
            height: 100%;
            /* max-height: 600px; */
            width: auto;
            background-color: hsla(200,40%,30%,.4);
            background-image:       
            url('https://78.media.tumblr.com/cae86e76225a25b17332dfc9cf8b1121/tumblr_p7n8kqHMuD1uy4lhuo1_540.png'), 
            url('https://78.media.tumblr.com/66445d34fe560351d474af69ef3f2fb0/tumblr_p7n908E1Jb1uy4lhuo1_1280.png'),
            url('https://78.media.tumblr.com/8cd0a12b7d9d5ba2c7d26f42c25de99f/tumblr_p7n8kqHMuD1uy4lhuo2_1280.png'),
            url('https://78.media.tumblr.com/5ecb41b654f4e8878f59445b948ede50/tumblr_p7n8on19cV1uy4lhuo1_1280.png'),
            url('https://78.media.tumblr.com/28bd9a2522fbf8981d680317ccbf4282/tumblr_p7n8kqHMuD1uy4lhuo3_1280.png');
            background-repeat: repeat-x;
            background-position: 0 20%,0 100%,0 50%,0 100%,0 0;
            background-size: 2500px,800px,500px 200px,1000px,400px 260px;
            animation: 50s para infinite linear;
        }
        @keyframes para {
            100% {
                background-position: -5000px 20%,-800px 95%,500px 50%,1000px 100%,400px 0;
            }
        }
        body{
            margin: 0;
            padding: 0;
        }
        .navbar {
            height: auto;
            min-height: 80px;
            width: 100%;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        button{
            background: transparent;
            margin: 30px 20px 0;
            border-radius: 10%;
            font-size: 20px;
        }
        button:hover{
            background-color: lightgrey;
            border-radius: 10%;
        }
        
    </style>
    <style>

    </style>
</head>
<body>
    <div id="page-container">
        <div class="navbar">
            <button class="button" id="add_new">Create</button>
            <button class="button" id="delete_all" style="margin-left: 40px;">Delete</button>
        </div>
        <div class="sticky-container"></div>
    </div>
</body>
<script>
    
</script>
</html>