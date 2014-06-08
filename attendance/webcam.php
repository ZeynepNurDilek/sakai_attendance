<!DOCTYPE HTML>
<html>
<head>
  <title>Student</title>
  <script src="webcam.js"></script>

    <div id="my_camera" style="width:320px; height:240px;"></div>
    <div id="my_result"></div>

    <script language="JavaScript">
        Webcam.attach( '#my_camera' );


        var myVar = setInterval(function(){take_snapshot()},5000);

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";path=/" ;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i].trim();
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
        }
        


        function take_snapshot() { 
            
            var data_uri = Webcam.snap();
            //var my_data = getCookie("my_data");

            document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
            
            var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
            //my_data = raw_image_data;
            document.getElementById('mydata').value = raw_image_data;
            //document.getElementById('myform').submit();
            

                var formData = new FormData();
                formData.append("mydata", raw_image_data);
  
  //Send form via AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "photo_record.php");  
                xhr.send(formData);







        /*
        var formData = $("#myform").serializeArray();
        var URL = $("#myform").attr("action");
        $.post(URL,
        formData,
        function(data, textStatus, jqXHR)
        {
            //data: Data from server.    
        }).fail(function(jqXHR, textStatus, errorThrown) 
        {
 
        });*/

            //setCookie("my_data", my_data, 365);
            
            //window.open("photo_record.php");
        }

//Load form
  
    </script>
</head>
<body>



<a href="javascript:void(clearInterval(myVar))">Take Snapshot</a>


<form id="myform" >
        <input id="mydata" type="hidden" name="mydata" value=""/>
</form>





</body>
</html>