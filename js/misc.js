    var values = $_GET('values');
    if(!config.named || !config.action || !config.method || !values){
      $('.forms').append('<p>Select Type: <a href="" onclick="event.preventDefault(); var type=2; $(\'.tpe\').attr(\'value\',\'2\'); alert(\'Type set to Password List\'); $(\'.txtarea\').attr(\'placeholder\', \'Enter list - Seperate each password with a comma.\')">Password List</a> | <a href="" onclick="event.preventDefault(); $(\'.tpe\').attr(\'value\',\'1\'); var type=1; alert(\'Type set to Character Combination\'); $(\'.txtarea\').attr(\'placeholder\', \'Enter values- Seperate each character with a comma.\')">Character Combination</a></p><form action="" style="margin:0px auto" method="GET"><input type="text" name="m" placeholder="Form Method" class="u-full-width" /> <br /> <input type="text" name="n" placeholder="Input name" class="u-full-width" /> <br /> <input type="text" name="a" placeholder="Action URL" class="u-full-width" /> <br /> <textarea name="values" placeholder="Enter Values - Seperate each character with a \',\' comma." class="u-full-width txtarea" ></textarea> <input class="tpe" type="hidden" name="type" value="1" /><input type="text" name="u" placeholder="Username or Email" class="u-full-width"/> <input type="text" name="un" placeholder="Username or Email Input Name" class="u-full-width"/> <input type="submit"  class="u-full-width"/> </form>');
      throw new Error("Requests not set");
    }
    $('.forms').append('<div class="countcont">Successfully submitted:  <span class="count">0</span> | Possible Successes: <span class="scount">0</span> </div> <a href="" class="suball">Submit All</a>');
    var values = values.replace(/\%2C/g, ',');
    var arrys = getComb(values, config.type);
    $(arrys).each(function(){
      var input = this;
      var formd = "<form style='margin:50px auto'> <input type='text' value='"+input+"' class='value' name='"+config.name+"' disabled/> <input type='submit' value='Submit' class='sub' /> <br /> <span class='stuff'>Not Submitted</span></form>";
      $('.forms').append(formd);
    });
