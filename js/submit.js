  regex = new RegExp(successArr.join("|"), 'i'); // Set a sequence of patterns to be searched for
  var count = 0; // Set the variable count to 0
  var scount = 0; // Set the variable scount to 0
  $('.sub').click(function(e){ // On click of the class sub
    e.preventDefault(); // Prevent the default action
    var stuff = $(this).parent().find('.stuff'); // Find the class stuff
    var name = $(this).parent().find('.value').val(); // Find the class value
    var me = $(this).parent();
    var count = 0; // Set count to 0
    var scount = 0; // Set scount to 0
    $('.count').text(count); // Set the the variable count to class count
    $('.scount').text(scount); // Set the the variable scount to class scount
    var string = named+'='+name; // Set variable string to the php variable name plus the js variable name
      if($.trim(name).length > 0) { // Set the length of name is more than 0
        $.ajax({ // Initialise ajax
          type: method, // Set type to the php method
          url: action, // Set url to the php action
          data: string, // set data to string
          cache: false, // Disable cache
          beforeSend: function(){ $(stuff).html('Submitting'); }, // Add a loading message whilst the request is pending
          success: function(data) { // If successful
            var data1 = "'"+data+"'"; // set var data1 to data
            var compare = !regex.test(data);
            if(data) { // If data exists
              if(compare ==  false){ // Check for possible login success messages
                $(stuff).html('Submitted - Possible Success | <a href="" onclick="event.preventDefault(); alert('+data1+')">View Output</a>'); // Inform user of possible success
                var scount = parseInt($('.scount').text(),10); // Find the numerical value of scount
                if(scount => 1){
                  $(me).addClass('top-'+scount)
                }
                $('.scount').text(scount+1); // Increment scount by one
                $(me).addClass('float-top');
              } else { // If no possible success messages
                $(stuff).html('Submitted <a href="" onclick="event.preventDefault(); alert('+data1+')">View Output</a>'); // Inform user of successful submission
              }
              var count = parseInt($('.count').text(),10); // Find the numerical value of count
              $('.count').text(count+1); // Increment count by one
            } else { 
              $(stuff).html('Error - No Output'); 
              $(me).addClass('float-top');
              $(me).addClass('rght');
              } // If none of the above conditions are met, give an error
          }
        });
      }
    return false; // Return false if the IF statement fails.
  });
  $('.suball').click(function(e) { // Onclick of suball run a function
    e.preventDefault(); // Prevent default actions
    $('.sub').each(function(){ // For each class sub
      $(this).click(); // Simulate a click
    });
  });

