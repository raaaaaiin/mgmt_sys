<?php ?><style>
    body {
      background-color: #2196F3;
    }
    .form-container {
      background-color: #FFFFFF;
      padding: 25px;
      border-radius: 10px;
    }
    .signin-btn {
      background-color: #2196F3;
      border: none;
      color: #FFFFFF;
      padding: 10px 20px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 5px;
    }
    .signin-btn:hover {
      background-color: #1976D2;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-6">
        <div class="form-container text-center">
          <h3>Sign In</h3>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail Address" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="signin-btn">Sign In</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>