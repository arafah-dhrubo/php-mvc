<?php
  // Simple page redirect
  function redirect($page){
    header('http://localhost:8000/public/?url=pages/index');
  }