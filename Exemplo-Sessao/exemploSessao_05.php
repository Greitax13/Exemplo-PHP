<?php
  session_start();
  echo "path: ".session_save_path();
  echo "<br>";
  
  $id_status = session_status();
  switch($id_status){	  
	  case 0:
	    echo "As sessões estão desabilitadas ";
		break;
	  case 1:
	    echo "As sessões estão habilitadas, mas não existem ";
		break;
	  case 2:
	    echo "As sessões estão habilitadas e uma existe ";
		break;
  }
?>




