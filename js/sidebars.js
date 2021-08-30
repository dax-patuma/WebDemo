/* global bootstrap: false */

function getCurentFileName(){
  var pagePathName= window.location.pathname;
  return pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
}

$(function() {

  var currentFileName = getCurentFileName();
  if(currentFileName == 'index.php') {
    $('a#index').addClass('active');
  }
  else if(currentFileName == 'employee.php') {
    $('a#employee').addClass('active');
  }
  else if(currentFileName == 'view.php') {
    $('a#view').addClass('active');
  }
  else if(currentFileName == 'report.php') {
    $('a#report').addClass('active');
  }

})