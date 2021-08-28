<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page </title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <form action="{{route('register')}}" method="POST" class="form" enctype="multipart/form-data">
                            @csrf

                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="col-md-6 col-12">
                                            <b>
                                                <h4>Select one option</h4>
                                            </b>
                                            <fieldset class="form-group">
                                                <script type="text/javascript">
                                                    function ShowHideDiv() {
                                                        var ddlPassport = document.getElementById("ddlPassport");
                                                        var dvPassport = document.getElementById("dvPassport");
                                                        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
                                                        var dvPassport2 = document.getElementById("dvPassport2");
                                                        dvPassport2.style.display = ddlPassport.value == "Y" ? "block" : "none";

                                                    }
                                                </script>
                                                <select class="form-control" id="ddlPassport" onchange="ShowHideDiv()" >
                                                    <option>Select one option</option>
                                                    <option value="Y">I have GSTIN</option>
                                                    <option value="N">I don't have GSTIN</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Personal Details</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">

                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                            <label for="inputName">Name</label>
                                                                <div class="form-label-group">
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                            <label >Email</label>
                                                                <div class="form-label-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Password</label>
                                                                <div class="form-label-group">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                                @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Confirm Password</label>
                                                                <div class="form-label-group">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-12">
                                                                <label>Mobile Number</label>
                                                                <div class="form-label-group">
                                                                <input type="text" name="Mobile_Number" id="mobile" class="form-control" placeholder="Mobile number" required data-validation-required-message="The field must be at least 10 characters." minlength="10" placeholder="Enter minimum 10 characters">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>country</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="country" name="country">
                                                                    <option selected disabled>Country</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>State</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="state" name="state">
                                                                    <option selected disabled>state</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>city</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" id="city" name="city">
                                                                    <option selected disabled>city</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                        <h4 class="card-title">Business details</h4>
                                                        <div class="row">


                                                            <div class="col-md-6 col-12" id="dvPassport" style="display: none">
                                                                <label>GSTIN NUMBER</label>
                                                                <div class="form-label-group">

                                                                <input type="text" name="GSTIN_NUMBER" id="gstin" class="form-control" placeholder="GSTIN NUMBER" >

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12" id="dvPassport2" style="display: none">
                                                                <label>Company Pancard</label>
                                                                <div class="form-label-group">

                                                                <input type="text" name="Company_Pancard" id="cpancard" class="form-control" name="cpancard" placeholder="Company Pancard " >

                                                                </div>
                                                            </div>


                                                            <div class="col-md-6 col-12">
                                                                <label>Personal PANCARD</label>
                                                                <div class="form-label-group">
                                                                <input type="text" name="Personal_PANCARD" id="gstin" class="form-control" id="ppancard" name="ppancard" placeholder="Personal PANCARD" required data-validation-required-message="This field is required">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>Adhar Card</label>
                                                                <div class="form-label-group">
                                                                <input type="text" name="AdharCard" id="gstin" class="form-control" name="adhar" id="adhar" placeholder="Adhar Card" required data-validation-required-message="The field must be at least 12 characters." minlength="12" placeholder="Enter minimum 12 characters">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>BUSINESS TYPE</label>
                                                                <div class="form-label-group">
                                                                <input type="text" name="BUSINESS_TYPE" id="gstin" class="form-control" id="btype" name="BUSINESS_TYPE" placeholder="BUSNINESS TYPE" required data-validation-required-message="This field is required">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label>PINCODE</label>
                                                                <div class="form-label-group">
                                                                <input type="text" name="PINCODE" id="gstin" class="form-control" id="pincode" name="PINCODE" placeholder="PINCODE" required data-validation-required-message="This field is required">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-12">
                                                                <label>Address</label>
                                                                <div class="form-label-group">
                                                                    <textarea class="form-control" aria-label="With textarea" placeholder="Full Address" id="faddress" name="Address"></textarea>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 col-12">
                                                                <h4 class="card-title">Bank Details</h4>
                                                            </div>
                                                            <div class="row col-md-12 col-12">


                                                                <div class="col-md-6 col-12">
                                                                    <label>Bank Account Number</label>
                                                                    <div class="form-label-group">
                                                                        <input type="text" id="bankacc" class="form-control" placeholder="Bank Account Number" name="Bank_Account_Number"  required data-validation-required-message="This field is required">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <label>Bank IFSC CODE</label>
                                                                    <div class="form-label-group">
                                                                        <input type="TEXT" id="bankifsc" class="form-control" placeholder="Bank IFSC CODE" name="IFSC_CODE" required data-validation-required-message="This field is required">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                                  <h4 class="card-title">Upload Documents</h4>
                                                            <div class="row">


                                                                 <div class="col-md-6 col-12">

                                                                             <div class="form-label-group">

                                                                        <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="cpancardu" name="cpancardu">
                                                                            <label class="custom-file-label" for="cpancardu">Company Pan Card</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="gstdoc" name="gstdoc">
                                                                            <label class="custom-file-label" for="gstdoc">GST Documents</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="cancelledcheque" name="cancelledcheque">
                                                                            <label class="custom-file-label" for="cancelledcheque">Cancelled cheque</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="psphoto" name="psphoto">
                                                                            <label class="custom-file-label" for="psphoto">Passport size photo</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">

                                                                    <div class="form-label-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="signature" name="signature">
                                                                            <label class="custom-file-label" for="signature">Signature</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-12">
                                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">
                                                        {{ __('Register') }}
                                                    </button>
                                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
var myObj = {
  init: function () {
    var that = this;
    this.load_country();
    document.getElementById("country").addEventListener("change", function () {
      that.load_state(this.value);
    });
    document.getElementById("state").addEventListener("change", function () {
      that.load_city(this.value);
    });
  },
  load_country: function () {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/countries", true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("country").appendChild(op);
      });
    };
    xhr.send();
  },
  load_state: function (id) {
    document.getElementById("state").innerHTML='';
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/states/" + id, true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("state").appendChild(op);
      });
    };
    xhr.send();
  },
  load_city: function(id)
  {
    document.getElementById("city").innerHTML='';
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "http://194.163.149.207:8585/api/cities/" + id, true);

    xhr.onload = function () {
      var countries = JSON.parse(xhr.responseText);
      countries.forEach(function (value) {
        var op = document.createElement("option");
        op.innerText = value.name;
        op.setAttribute("value", value.id);
        document.getElementById("city").appendChild(op);
      });
    };
    xhr.send();
  }
}
myObj.init();

</script>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ url('/app-assets/js/core/app.js') }}"></script>
    <script src="{{ url('/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
