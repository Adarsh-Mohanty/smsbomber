<html>

<head>
    <title>SMS Bomber</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
   <script  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <style> 
       @font-face {
          font-family: 'HACKED';
          src: url('HACKED.ttf');
       }
    </style>
        <style type="text/css">
::-webkit-scrollbar {
  width: 2px;
  height: 2px;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #448344;
  border: 0px none #ffffff;
  border-radius: 59px;
}
::-webkit-scrollbar-thumb:hover {
  background: #448344;
}
::-webkit-scrollbar-thumb:active {
  background: #000000;
}
::-webkit-scrollbar-track {
  background: #666666;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-track:hover {
  background: #666666;
}
::-webkit-scrollbar-track:active {
  background: #333333;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>
       
    <script>
        
        var i;
         $(function() {$("#go").click(function(e){
             
             e.preventDefault();
             i=1;
             bomb();
            
        });
               
    });
        function bomb(){ 
                var x=$("#times").val();
                var num=$("#no").val();
                    var dataString ='no='+num;
                        $.ajax({
                        type: "POST",
                        url: "sms.php",
                        data: dataString,
                        
                        
                        success: function() {
                            if(i<=x){
                            $(".load").append("<br>SMS "+i+" sent!");
                            
                            if(i==x)
                            {$(".load").append("<br>All SMS sent! Thank you for using.");
                                 return;                
                            }
                             i++;
                            bomb();
                            }
                        }
                        });
        }
    </script>
</head>

<body style="background:rgb(16, 16, 16); color:#448344;">
    <div class="container-fluid " style="text-align:center; padding:20px; min-height:100%;">
        <div style="">
            <p style="font-family:'HACKED';font-size:90;">SMS BOMBER</p>
            <p style="font-size:10px;">For educational purpose only! Don't use it to annoy/disturb others...</p>
            
            <form>
                <table align="center" cellpadding="5">
                    <tr><td style="">Victim's Number: </td><td> <input class="form-control" min="0" style= "    background-color: rgb(16, 19, 14);    border-color: #43a156;    color: #43a156;" type="number" id="no"></td></tr>
                    <tr><td>Number of SMS: </td><td> <input class="form-control" min="0" style= "    background-color: rgb(16, 19, 14);    border-color: #43a156;    color: #43a156;" type="number" min="0" id="times"></td></tr>
                    <tr><td colspan="2" align="center"><button class="btn btn-outline-success" id="go">Bomb!</button></td></tr>
                </table>

            </form>
        </div>
        <div class="load" style="    box-shadow: 0px 0px 38px -1px;    width: 50%;    position: relative;    border-radius: 0.5rem;    margin: auto; padding-right: 17px;    /* transition: fade; */    overflow-y: scroll;"></div>
        <div class="no-gutters" style="position:absolute; width:100%; bottom:0; left:0;"><p> Developer: Adarsh Mohanty </p></div>
    </div>
</body>
</html>