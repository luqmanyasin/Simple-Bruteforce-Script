function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
    var j = Math.floor(Math.random() * (i + 1));
    var temp = array[i];
    array[i] = array[j];
    array[j] = temp;
  }
  return array;
}
function getComb(array) {
  var arr = array.split(',');
  var arrCount = arr.length;
  maxComb = Math.pow(arrCount, arrCount);
  var res = [];
  if(arrCount > 1) {
    for(i=0;i<maxComb;i++){
      shuffleArray(arr);
      if($.inArray(arr.join(''), res) == -1){
        res.push(arr.join(''));
      }
    }
  }
  return(res);
}
