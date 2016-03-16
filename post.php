<?
if($_POST['code']):
  if($_POST['code'] == 'abcd'):
    exit;
  elseif($_POST['code'] == 'dcab'):
    print 'Logged In';
    exit;
  elseif($_POST['code'] == 'cdab'):
    print 'Successfully logged in';
    exit;
  endif;
  print 'Failure';
endif;
?>