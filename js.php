<div class="forms"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="js/init.js"></script>
<script>
  var successArr 	= ['success', 'logged in', 'successful', 'welcome', 'hello', 'successfully', 'redirecting', 'please wait']; // Array of keywords that could be interpreted as successful
  var method = $_GET('m');
  var action = $_GET('a');
  var named = $_GET('n');
  var name = $_GET('n');
</script>
<script src="js/submit.js"></script>
<script>
  $(document).ready(function(){
    var values = $_GET('values');
    var values = values.replace(/\%2C/g, ',');
    console.log(values);
    var arrys = getComb(values);
    console.log(arrys);
    var cntn = parseInt(1);
    $(arrys).each(function(){
      var input = this;
      var formd = "<form style='margin:50px auto'><input type='text' value='"+input+"' class='value' name='"+name+"' disabled/><input type='submit' value='Submit' class='sub' /><input type='hidden' value='"+cntn+"' /><br /> <span class='stuff'>Not Submitted</span></form>";
      $('.forms').append(formd);
      var cntn = parseInt(cntn)+1;
      console.log(cntn);
    });
  });

</script>
