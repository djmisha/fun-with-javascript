let filter = function (arr, cb) {
  const storage = [];
  _.each(arr, function(item,i,list){
    if(cb(arr[item], i, list)) {
      storage.push[arr[i]];
    }
  });
  return storage; 
}