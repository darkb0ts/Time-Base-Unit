<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <form  id='myform'>
        <div style="margin-top: 3px;">
        <label for="id_days">Days: </label>
        <input type="text" id="id_day" name="days" placeholder="Enter the Days" required><br>
        </div>
        <div style="margin-top: 3px;">
        <label for="id_message" >Message :</label>
        <input type="text" id="id_message" name="message" placeholder="Enter the Message" required><br>
        </div>
        <div style="margin-top: 3px;">
        <label for="id_time" >Time :</label>
        <input type="text" id="id_time" name="time" placeholder="Enter the Time" required><br>
        </div>
        <div style="margin-top: 3px;">
        <label for="id_notallowed" >Password :</label>
        <input type="text" id="id_notallowed" name="notallowed" placeholder="Enter the Password" required><br>
        </div>
        <input type="submit" id="button">

    </form>
    <script>
            $(document).ready(function(){
            $("#button").click(function(ev){
                ev.preventDefault();
           var form = $('#myform').serialize();
           console.log(form);
            $.ajax({
                url: "getdata.php",
                method:"POST",
                data:form,
                success: function(result){
                alert(result);
                //location.reload();
                    }});
                });
            });    
    </script>
</body>
</html>