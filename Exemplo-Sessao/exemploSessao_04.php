<?php
  session_start();
  session_regenerate_id();
  echo "Id da sessão: ".SESSION_ID();
?>



