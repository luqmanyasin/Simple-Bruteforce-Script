<?
if($_POST['code']):
  if($_POST['code'] == 'abcd'):
    print 'Welcome '.$_POST['user'];
    exit;
  elseif($_POST['code'] == 'dcab' && $_POST['user'] == 'exampleUser' || $_POST['code'] == 'test1' && $_POST['user'] == 'exampleUser'):
    print '<h1>Logged In</h1>';
    print 'Welcome '.$_POST['user'];
    exit;
  elseif($_POST['code'] == 'cabd'):
    exit;
  elseif($_POST['code'] == 'cdab'):
    print 'Successfully logged in';
    exit;
  endif;
  print 'Failure';
endif;
?>
