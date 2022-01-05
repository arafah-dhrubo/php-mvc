<?php
  // Simple page redirect
  function redirect($page){
      //var_dump("http://localhost:8000/public/".$page);
    header("Location: ".URLROOT.$page);
  }