function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
    var j = Math.floor(Math.random() * (i + 1));
    var temp = array[i];
    array[i] = array[j];
    array[j] = temp;
  }
  return array;
}
function getComb(array, type) {
  var arr = array.split(',');
  var arrCount = arr.length;
  maxComb = Math.pow(arrCount, arrCount);
  var res = [];
  if(type == 2 && arrCount>1) {
    for(i=0;i<arrCount;i++) {
      res.push(arr[i]);
    }
  }
  if(type == 1 && arrCount > 1) {
    for(i=0;i<maxComb;i++){
      shuffleArray(arr);
      if($.inArray(arr.join(''), res) == -1){
        res.push(arr.join(''));
      }
    }
  }
  return(res);
}
function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}
function openThisWindow(data) { 
  var w = window.open("", "Form Output", "width=600,height=700");
  $(w.document.body).html(data) 
}
