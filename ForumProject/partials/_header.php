<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="/halkat">Train->Job</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/halkat">Home</a>
      </li>
      <button type="button" class="btn btn-info position-relative">
        Inbox
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
          2
          <span class="visually-hidden">unread messages</span>
        </span>
      </button>
    </ul>

    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
    

    

  </div>
</div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

// <div class="mx-2">
//         <button class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
//         <button class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
//     </div>

?>