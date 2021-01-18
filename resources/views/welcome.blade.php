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
            border-radius: 5px;
            font-size: 25px;
            cursor: pointer;
            border-style: none;
            outline: none;
            padding: 25px;
            text-align: center;

            &:active{
                transform: scale(0.98);
            }
        }
        button:hover{
            background-color: lightgrey;
        }
        .sticky-container{
            height:auto;
            width:100%;
            display:flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .sticky{
            height:200px;
            width:180px;
            display:grid;
            margin:10px;
            padding:18px 10px 10px 10px;
            box-sizing: border-box;
            box-shadow: 6px 7px 12px -5px rgba(0,0,0,0.75);
            font-size:24px;
            background: #ffd31d;
            overflow: auto;
            animation: stickAnim .3s ease;

            &::-webkit-scrollbar {
                display: none;  
            }
            &:focus {
                outline: none;
            }
        .close {

            font-size: 26px;
            position: absolute;
            top: 0;
            right:0;
            cursor: pointer;
            width: 18px;

            &:active {
                transform: scale(0.98);
            }
        }
        @keyframes stickAnim {
            0%{
                transform: scale(5);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div id="page-container">
        <div class="navbar">
            <button id="addBtn">Add</button>
            <button id="closeBtn">Delete</button>
        </div>
        <div class="sticky-container">
        </div>
    </div>
</body>
<script>
   const addBtn = document.querySelector("#addBtn");

addBtn.addEventListener("click", ()=>{
    let stickyCont = document.querySelector(".sticky-container");
    let stickySingle = document.createElement('div');
    stickySingle.classList.add('sticky');
    stickySingle.contentEditable = "true";
    stickySingle.setAttribute = ("role","textbox");
    stickyCont.appendChild(stickySingle);
  
    // Delete button
    let close = document.createElement('span');
    close.classList.add('close');
    close.contentEditable = "false";
    stickySingle.appendChild(close);
  
    // Delete function. used "for" to bind delete button with 
    // coresponding stickynote
    let stickies = document.getElementsByClassName("sticky");
    let xs = document.getElementsByClassName("close");

    for (let i = 0; i < stickies.length; i++){
        xs[i].addEventListener("click", ()=> {
            console.log(stickies.length);
            stickies[i].style.display = "none";
        });
    }
    
    // Random angle
    function randomNumber(min, max) { 
      return Math.random() * (max - min) + min; 
    }
    
    let color = randomNumber(1,720);
    stickySingle.style.filter = "hue-rotate(" + color +"deg)";
});


</script>
</html>