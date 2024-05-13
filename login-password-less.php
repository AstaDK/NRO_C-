<?php
class AdminerLoginPasswordLess {
  function login($login, $password) {
    // allow login without a password
    return ($login && ($password === '' || $password === null));
  }
}

return new AdminerLoginPasswordLess;
