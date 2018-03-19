<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <style>
      body {
        background-color: #100D31;
        display: grid;
        grid-template-columns: 1fr 1.3fr 1fr;
        padding-top: 5%;
      }
      
      #register-form {
        grid-column: 2 / span 1;
      }
      
      .center {
        transform: translatex(150%)
      }
      
      .company-logo {
        padding: 5%;
        align-content: center;
      }
      
      .tab > ul {
        list-style-type: none;
        display: grid;
        grid-template-columns: auto auto;
        margin: 0;
        padding-top: 5%;
        padding-left: 0;
        border: 0;
        text-align: center;
        margin-bottom: 5%;
      }
      
      .tab > ul > li {
        padding-bottom: 3%;
        color: #66697F;
        border-bottom: 2px solid #0E1437; 
      }
      
      .tab > ul > li.active {
        color: #CFD1E6;
        border-bottom: 2px solid #0C1A48; 
      }
      
      .tab > ul > #loginTab {
        grid-column: 1 / span 1;
      }
      
      .tab > ul > #registerTab {
        grid-column: 2 / span 1;
      }
      
      .tab > ul > li > a {
        text-decoration: none;
        font-weight: 700;
      }
      
      .register-tab {
        display: inline;
      }
      
      .form-group > label {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        transition: 0.2s;
        color: #8C8FA0;
      }
      
      .form-group {
        position: relative;
        margin: 5% 0;
      }
      
      .form-group > label {
        font-size: 10px;
        font-weight: 700;
      }
      
      input:focus + label {
        margin-top: -20px;
        font-size: 70%;
        color: #315288;
      }
      
      .form-control {
        border: none;
        border-bottom: 2px solid #15153E;
        background-color: transparent;
        padding-bottom: 2%;
        width: 100%;
      }
      
      .form-control:focus {
        outline: none;
        color: white;
      }
      
      .column-2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 10%;
      }
      
      .column-1 {
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: auto;
      }
      
      .column-1 > .form-group > input {
        width: 100%;
      }
      
      .select-form {
        background-color: #21224A;
        border: none;
        border-radius: 10px;
        padding: 4%;
        color: #9C9DC0;
        width: 100%;
        font-size: 12px;
        font-weight: 700;
      }
      
      .select-form:focus {
        outline: none;
      }
      
      .terms-and-condition {
        padding: 3%;
        color: #666874;
        font-size: 11px;
        font-weight: 700;
      }
      
      .terms-and-condition > .form-group {
        margin: 0;
      }
      
      #signin-redirect-parent {
        transform: translatex(20%)
      }
      
      #signin-redirect {
        color: #25498D;
        padding: 5% 1%;
        font-size: 10px;
        font-weight: 700;
        align-self: center;
        align-content: center;
        align-items: center;
      }
      
      .register-button {
        background-color: #00D2BA;
        border: none;
        color: #051D36;
        padding: 5% 1%;
        border-radius: 3px;
        width: 100%;
      }
    </style>
    
  </head>
  <body>
    
    <div id="register-form">
      
      <div class="flex-1 company-logo">
        <img class="center" src="<?php __DIR__ ?>/assets/images/ibinex-logo-white.png" height=25% width=25% />
      </div>
      
      <div class="tab">
        <ul>
          <li>
            <a>Login</a>
          </li>
          <li class="active">
            <a>Register</a>
          </li>
        </ul>
      </div>
      
      <div class="register-tab">
        <div class="column-2">
          <div class="form-group firstname-form">
            <input type="text" class="form-control" id="firstname" name="firstname"/>
            <label for="firstname">FIRST NAME</label>
          </div>
          <div class="form-group lastname-form">
            <input type="text" class="form-control" id="lastname" name="lastname"/>
            <label for="lastname">LAST NAME</label>
          </div>
        </div>
        <div class="column-1">
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder=""/>
            <label for="email">EMAIL ADDRESS</label>
          </div>
        </div>
        <div class="column-2">
          <div class="form-group">
            <input type="text" class="form-control" id="password" name="password" placeholder="" />
            <label for="password">PASSWORD</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="confirm" name="confirm" placeholder="" />
            <label for="confirm">RETYPE PASSWORD</label>
          </div>
        </div>
        <div class="column-2">
          <div class="form-group">
            <select class="select-form">
              <option>DEFAULT MARKET</option>
            </select>
          </div>
          <div class="form-group">
            <select class="select-form">
              <option>ACCOUNT TYPE</option>
            </select>
          </div>
        </div>
        <div class="terms-and-condition">
          <div class="form-group">
            <input type="checkbox" name="terms" id="terms" > <span> I accept the <a>terms and conditions</a> of use of this site.</span>
          </div>
        </div>
        <div class="column-2">
          <div class="form-group">
            <button type="submit" class="register-button">
              Register
            </button>
          </div>
          <div class="form-group" id="signin-redirect-parent">
            <a id="signin-redirect" href="#">
              I'm already a member
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>